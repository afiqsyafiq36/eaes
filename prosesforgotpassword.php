<?php
/**
 * Process forgot-password request:
 * 1) Validate email + account type
 * 2) If account exists, create token and email reset link
 * 3) Always show a neutral success message (do not leak whether email exists)
 */
include "sambung.php";
include "password_reset_lib.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header("Location: forgotpassword.php");
	exit;
}

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$account_type = isset($_POST['account_type']) ? $_POST['account_type'] : 'user';
if ($account_type !== 'admin' && $account_type !== 'user') {
	$account_type = 'user';
}

$_SESSION['reset_email_prefill'] = $email;

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$_SESSION['reset_flash'] = 'Sila masukkan alamat e-mel yang sah.';
	$_SESSION['reset_flash_type'] = 'error';
	header("Location: forgotpassword.php?type=" . urlencode($account_type));
	exit;
}

ensure_password_resets_table($hubung);

$account = find_account_by_email($hubung, $email, $account_type);

/**
 * Why neutral message: if we say "email not found", attackers can
 * guess which emails are registered. Same UX either way.
 */
$neutral_message = 'Jika e-mel ini berdaftar, pautan set semula kata laluan telah dihantar. Sila semak peti masuk atau folder spam.';

if ($account) {
	// Invalidate older unused tokens for this account (one active reset at a time)
	$old_stmt = mysqli_prepare(
		$hubung,
		"UPDATE password_resets SET used_at = NOW()
		 WHERE email = ? AND account_type = ? AND used_at IS NULL"
	);
	if ($old_stmt) {
		mysqli_stmt_bind_param($old_stmt, "ss", $email, $account_type);
		mysqli_stmt_execute($old_stmt);
		mysqli_stmt_close($old_stmt);
	}

	// Plain token goes in the email URL; only the hash is stored in DB
	$plain_token = bin2hex(random_bytes(32));
	$token_hash = hash('sha256', $plain_token);
	$expires_at = date('Y-m-d H:i:s', time() + 3600);
	$created_at = date('Y-m-d H:i:s');
	$user_id = (int) $account['id'];

	$insert_stmt = mysqli_prepare(
		$hubung,
		"INSERT INTO password_resets (email, account_type, user_id, token_hash, expires_at, created_at)
		 VALUES (?, ?, ?, ?, ?, ?)"
	);

	$mail_ok = false;
	if ($insert_stmt) {
		mysqli_stmt_bind_param(
			$insert_stmt,
			"ssisss",
			$email,
			$account_type,
			$user_id,
			$token_hash,
			$expires_at,
			$created_at
		);
		$saved = mysqli_stmt_execute($insert_stmt);
		mysqli_stmt_close($insert_stmt);

		if ($saved) {
			$reset_url = get_app_base_url() . '/resetpassword.php?token=' . urlencode($plain_token) . '&type=' . urlencode($account_type);
			$mail_ok = send_password_reset_email(
				$account['email'],
				$account['username'],
				$reset_url,
				account_type_label($account_type)
			);
		}
	}

	if (!$mail_ok) {
		// Hosting may block SMTP, or smtp_config.php not filled yet — surface detail for debugging
		$mail_detail = get_last_mail_error();
		$_SESSION['reset_flash'] = 'Akaun dijumpai, tetapi e-mel gagal dihantar oleh pelayan.'
			. ($mail_detail !== '' ? ' (' . $mail_detail . ')' : '')
			. ' Sila cuba lagi kemudian atau hubungi pentadbir sistem.';
		$_SESSION['reset_flash_type'] = 'error';
		header("Location: forgotpassword.php?type=" . urlencode($account_type));
		exit;
	}
}

$_SESSION['reset_flash'] = $neutral_message;
$_SESSION['reset_flash_type'] = 'success';
unset($_SESSION['reset_email_prefill']);
header("Location: forgotpassword.php?type=" . urlencode($account_type));
exit;
?>
