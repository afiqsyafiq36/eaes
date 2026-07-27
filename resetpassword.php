<?php
/**
 * Reset password form — opened from the email link with ?token=...&type=...
 * Validates token before showing the form.
 */
include "sambung.php";
include "password_reset_lib.php";
session_start();

$token = isset($_GET['token']) ? trim($_GET['token']) : '';
$account_type = isset($_GET['type']) ? $_GET['type'] : 'user';
if ($account_type !== 'admin' && $account_type !== 'user') {
	$account_type = 'user';
}

$flash_message = isset($_SESSION['reset_flash']) ? $_SESSION['reset_flash'] : '';
$flash_type = isset($_SESSION['reset_flash_type']) ? $_SESSION['reset_flash_type'] : 'info';
unset($_SESSION['reset_flash'], $_SESSION['reset_flash_type']);

$login_back = login_page_for_type($account_type);
$token_valid = false;
$token_error = '';

ensure_password_resets_table($hubung);

if ($token === '' || strlen($token) < 32) {
	$token_error = 'Pautan reset tidak sah. Sila minta pautan baharu.';
} else {
	$token_hash = hash('sha256', $token);
	$stmt = mysqli_prepare(
		$hubung,
		"SELECT id, email, account_type, expires_at, used_at
		 FROM password_resets
		 WHERE token_hash = ? AND account_type = ?
		 LIMIT 1"
	);

	if ($stmt) {
		mysqli_stmt_bind_param($stmt, "ss", $token_hash, $account_type);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$row = mysqli_fetch_assoc($result);
		mysqli_stmt_close($stmt);

		if (!$row) {
			$token_error = 'Pautan reset tidak dijumpai atau telah tamat tempoh. Sila minta pautan baharu.';
		} elseif (!empty($row['used_at'])) {
			$token_error = 'Pautan ini telah digunakan. Sila minta pautan baharu jika masih perlu reset.';
		} elseif (strtotime($row['expires_at']) < time()) {
			$token_error = 'Pautan reset telah tamat tempoh (1 jam). Sila minta pautan baharu.';
		} else {
			$token_valid = true;
		}
	} else {
		$token_error = 'Ralat sistem. Sila cuba lagi kemudian.';
	}
}
?>
<!DOCTYPE html
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ms">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" type="image/png" href="./img/logo.jpg">
<title>Set Semula Kata Laluan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
<script src="js/bootstrap.min.js"></script>
<style>
	.app-cam input[type="email"],
	.app-cam select {
		width: 100%;
		padding: 15px;
		color: #999;
		font-size: 0.85em;
		outline: none;
		font-weight: 300;
		border: none;
		background: #222224;
		margin: 0 0 1em 0;
		border-radius: 2px;
	}
	.reset-hint {
		color: #333 !important;
		font-size: 13px !important;
		text-align: center;
		margin: 0 0 1.2em 0 !important;
		line-height: 1.45;
	}
	.reset-flash {
		padding: 12px 14px;
		margin: 0 0 1em 0;
		border-radius: 2px;
		font-size: 13px;
		line-height: 1.4;
		text-align: left;
	}
	.reset-flash.success {
		background: rgba(6, 217, 149, 0.18);
		border-left: 3px solid #06d995;
		color: #0a5c42;
	}
	.reset-flash.error {
		background: rgba(220, 53, 69, 0.12);
		border-left: 3px solid #dc3545;
		color: #842029;
	}
	.reset-flash.info {
		background: rgba(0, 0, 0, 0.06);
		border-left: 3px solid #666;
		color: #333;
	}
</style>
</head>
<body id="login">
	<div class="login-logo">
		<img src="img/logo.jpg" height="151" width="151" alt="Kolej Vokasional Datuk Seri Abu Zahar Isnin"/>
	</div>
	<h2 class="form-heading">Kata Laluan Baharu</h2>
	<div class="app-cam">

		<?php if ($flash_message !== '') { ?>
			<div class="reset-flash <?php echo htmlspecialchars($flash_type, ENT_QUOTES, 'UTF-8'); ?>">
				<?php echo htmlspecialchars($flash_message, ENT_QUOTES, 'UTF-8'); ?>
			</div>
		<?php } ?>

		<?php if (!$token_valid) { ?>
			<div class="reset-flash error"><?php echo htmlspecialchars($token_error, ENT_QUOTES, 'UTF-8'); ?></div>
			<div class="submit">
				<a href="forgotpassword.php?type=<?php echo urlencode($account_type); ?>" class="btn-success1" style="display:block;text-align:center;text-decoration:none;">Minta Pautan Baharu</a>
			</div>
			<ul class="new">
				<li class="new_left"><p><a href="<?php echo htmlspecialchars($login_back, ENT_QUOTES, 'UTF-8'); ?>">Kembali ke Login</a></p></li>
				<div class="clearfix"></div>
			</ul>
		<?php } else { ?>
			<p class="reset-hint">Masukkan kata laluan baharu (minimum 6 aksara), kemudian sahkan semula.</p>

			<form action="prosesresetpassword.php" method="post" autocomplete="off">
				<input type="hidden" name="token" value="<?php echo htmlspecialchars($token, ENT_QUOTES, 'UTF-8'); ?>">
				<input type="hidden" name="account_type" value="<?php echo htmlspecialchars($account_type, ENT_QUOTES, 'UTF-8'); ?>">

				<input class="input-field" type="password" name="password" placeholder="Kata laluan baharu" required minlength="6">
				<input class="input-field" type="password" name="password_confirm" placeholder="Sahkan kata laluan baharu" required minlength="6">

				<div class="submit">
					<input type="submit" value="Simpan Kata Laluan">
				</div>

				<ul class="new">
					<li class="new_left"><p><a href="<?php echo htmlspecialchars($login_back, ENT_QUOTES, 'UTF-8'); ?>">Kembali ke Login</a></p></li>
					<div class="clearfix"></div>
				</ul>
			</form>
		<?php } ?>

		<div class="copy_layout login">
			<p>Projek Tahun Akhir ini dikemukakan kepada Kolej Vokasional Datuk Seri Abu Zahar Isnin</p>
		</div>
	</div>
</body>
</html>
