<?php
/**
 * Apply new password after validating the one-time reset token.
 */
include "sambung.php";
include "password_reset_lib.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header("Location: forgotpassword.php");
	exit;
}

$token = isset($_POST['token']) ? trim($_POST['token']) : '';
$account_type = isset($_POST['account_type']) ? $_POST['account_type'] : 'user';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$password_confirm = isset($_POST['password_confirm']) ? $_POST['password_confirm'] : '';

if ($account_type !== 'admin' && $account_type !== 'user') {
	$account_type = 'user';
}

$redirect_fail = "resetpassword.php?token=" . urlencode($token) . "&type=" . urlencode($account_type);

if ($token === '' || strlen($token) < 32) {
	$_SESSION['reset_flash'] = 'Pautan reset tidak sah.';
	$_SESSION['reset_flash_type'] = 'error';
	header("Location: forgotpassword.php?type=" . urlencode($account_type));
	exit;
}

if (strlen($password) < 6) {
	$_SESSION['reset_flash'] = 'Kata laluan mestilah sekurang-kurangnya 6 aksara.';
	$_SESSION['reset_flash_type'] = 'error';
	header("Location: " . $redirect_fail);
	exit;
}

if ($password !== $password_confirm) {
	$_SESSION['reset_flash'] = 'Pengesahan kata laluan tidak sepadan. Sila cuba semula.';
	$_SESSION['reset_flash_type'] = 'error';
	header("Location: " . $redirect_fail);
	exit;
}

ensure_password_resets_table($hubung);

$token_hash = hash('sha256', $token);
$stmt = mysqli_prepare(
	$hubung,
	"SELECT id, email, account_type, user_id, expires_at, used_at
	 FROM password_resets
	 WHERE token_hash = ? AND account_type = ?
	 LIMIT 1"
);

if (!$stmt) {
	$_SESSION['reset_flash'] = 'Ralat sistem. Sila cuba lagi.';
	$_SESSION['reset_flash_type'] = 'error';
	header("Location: " . $redirect_fail);
	exit;
}

mysqli_stmt_bind_param($stmt, "ss", $token_hash, $account_type);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if (!$row || !empty($row['used_at']) || strtotime($row['expires_at']) < time()) {
	$_SESSION['reset_flash'] = 'Pautan reset tidak sah atau telah tamat tempoh. Sila minta pautan baharu.';
	$_SESSION['reset_flash_type'] = 'error';
	header("Location: forgotpassword.php?type=" . urlencode($account_type));
	exit;
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);
$user_id = (int) $row['user_id'];
$update_ok = false;

if ($account_type === 'admin') {
	$upd = mysqli_prepare($hubung, "UPDATE admin SET password = ? WHERE id = ?");
} else {
	$upd = mysqli_prepare($hubung, "UPDATE user SET password = ? WHERE id = ?");
}

if ($upd) {
	mysqli_stmt_bind_param($upd, "si", $password_hash, $user_id);
	$update_ok = mysqli_stmt_execute($upd);
	mysqli_stmt_close($upd);
}

if (!$update_ok) {
	$_SESSION['reset_flash'] = 'Gagal mengemas kini kata laluan. Sila cuba lagi.';
	$_SESSION['reset_flash_type'] = 'error';
	header("Location: " . $redirect_fail);
	exit;
}

// Mark token as used so the link cannot be reused
$mark = mysqli_prepare($hubung, "UPDATE password_resets SET used_at = NOW() WHERE id = ?");
if ($mark) {
	$reset_id = (int) $row['id'];
	mysqli_stmt_bind_param($mark, "i", $reset_id);
	mysqli_stmt_execute($mark);
	mysqli_stmt_close($mark);
}

$_SESSION['reset_flash'] = 'Kata laluan berjaya dikemas kini. Sila log masuk dengan kata laluan baharu.';
$_SESSION['reset_flash_type'] = 'success';

// Why: old "Remember me" cookies still hold the previous password and would
// auto-fill / confuse login after a successful reset.
if ($account_type === 'admin') {
	setcookie('admin_password', '', time() - 3600, '/');
} else {
	setcookie('user_password', '', time() - 3600, '/');
}

$login_page = login_page_for_type($account_type);
header("Location: " . $login_page);
exit;
?>
