<?php
/**
 * Forgot password page — UI matches admin/user login screens.
 * User enters registered email; system emails a one-time reset link.
 */
session_start();

$account_type = isset($_GET['type']) ? $_GET['type'] : 'user';
if ($account_type !== 'admin' && $account_type !== 'user') {
	$account_type = 'user';
}

$flash_message = isset($_SESSION['reset_flash']) ? $_SESSION['reset_flash'] : '';
$flash_type = isset($_SESSION['reset_flash_type']) ? $_SESSION['reset_flash_type'] : 'info';
unset($_SESSION['reset_flash'], $_SESSION['reset_flash_type']);

$login_back = ($account_type === 'admin') ? 'adminlogin.php' : 'userlogin.php';
$page_title = ($account_type === 'admin') ? 'Reset Kata Laluan Admin' : 'Reset Kata Laluan';
?>
<!DOCTYPE html
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ms">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" type="image/png" href="./img/logo.jpg">
<title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
<script src="js/bootstrap.min.js"></script>
<style>
	/* Match dark login inputs for email + select */
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
	.app-cam select option {
		background: #222224;
		color: #ccc;
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
	<h2 class="form-heading">Lupa Kata Laluan</h2>
	<div class="app-cam">
		<p class="reset-hint">Masukkan e-mel berdaftar. Kami akan hantar pautan untuk set semula kata laluan anda.</p>

		<?php if ($flash_message !== '') { ?>
			<div class="reset-flash <?php echo htmlspecialchars($flash_type, ENT_QUOTES, 'UTF-8'); ?>">
				<?php echo htmlspecialchars($flash_message, ENT_QUOTES, 'UTF-8'); ?>
			</div>
		<?php } ?>

		<form action="prosesforgotpassword.php" method="post" autocomplete="on">
			<select name="account_type" aria-label="Jenis akaun" required>
				<option value="user" <?php echo ($account_type === 'user') ? 'selected' : ''; ?>>Pengguna (Pelajar / Pensyarah)</option>
				<option value="admin" <?php echo ($account_type === 'admin') ? 'selected' : ''; ?>>Administrator</option>
			</select>

			<input class="input-field" type="email" name="email" placeholder="Alamat e-mel berdaftar" required
				value="<?php echo isset($_SESSION['reset_email_prefill']) ? htmlspecialchars($_SESSION['reset_email_prefill'], ENT_QUOTES, 'UTF-8') : ''; ?>">

			<div class="submit">
				<input type="submit" value="Hantar Pautan Reset">
			</div>

			<ul class="new">
				<li class="new_left"><p><a href="<?php echo htmlspecialchars($login_back, ENT_QUOTES, 'UTF-8'); ?>">Kembali ke Login</a></p></li>
				<li class="new_right"><p><a href="index.php">Laman Utama</a></p></li>
				<div class="clearfix"></div>
			</ul>
		</form>

		<div class="copy_layout login">
			<p>Projek Tahun Akhir ini dikemukakan kepada Kolej Vokasional Datuk Seri Abu Zahar Isnin</p>
		</div>
	</div>
</body>
</html>
<?php
unset($_SESSION['reset_email_prefill']);
?>
