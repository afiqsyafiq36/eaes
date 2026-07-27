<?php
/**
 * Shared helpers for forgot / reset password.
 * Why: keep token creation, DB table setup, and email sending in one place
 * so forgot + reset pages stay small and consistent.
 */

/**
 * Create password_resets table if it does not exist yet.
 * Safe to call on every request (CREATE TABLE IF NOT EXISTS).
 */
function ensure_password_resets_table($hubung)
{
	// VARCHAR(191): utf8mb4 index max is 767 bytes on older MySQL (191*4=764).
	// VARCHAR(255) would be 1020 bytes and triggers "Index column size too large".
	$sql = "CREATE TABLE IF NOT EXISTS password_resets (
		id INT AUTO_INCREMENT PRIMARY KEY,
		email VARCHAR(191) NOT NULL,
		account_type VARCHAR(20) NOT NULL,
		user_id INT NOT NULL,
		token_hash VARCHAR(64) NOT NULL,
		expires_at DATETIME NOT NULL,
		used_at DATETIME NULL DEFAULT NULL,
		created_at DATETIME NOT NULL,
		INDEX idx_token_hash (token_hash),
		INDEX idx_email (email)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

	return mysqli_query($hubung, $sql);
}

/**
 * Find account by email in admin or user table.
 * Returns array with id, username, email, account_type — or null if not found.
 */
function find_account_by_email($hubung, $email, $account_type)
{
	$email = trim($email);
	$account_type = ($account_type === 'admin') ? 'admin' : 'user';

	if ($account_type === 'admin') {
		$stmt = mysqli_prepare($hubung, "SELECT id, username, email FROM admin WHERE email = ? LIMIT 1");
	} else {
		$stmt = mysqli_prepare($hubung, "SELECT id, username, email FROM user WHERE email = ? LIMIT 1");
	}

	if (!$stmt) {
		return null;
	}

	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_assoc($result);
	mysqli_stmt_close($stmt);

	if (!$row) {
		return null;
	}

	$row['account_type'] = $account_type;
	return $row;
}

/**
 * Build absolute base URL for reset links (works on HTTPS hosting).
 */
function get_app_base_url()
{
	$https_on = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
	$forwarded_proto = isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : '';
	$is_https = $https_on || ($forwarded_proto === 'https');

	$protocol = $is_https ? 'https' : 'http';
	$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
	$script_dir = str_replace('\\', '/', dirname(isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : ''));
	$script_dir = rtrim($script_dir, '/');

	return $protocol . '://' . $host . $script_dir;
}

/**
 * Load Gmail SMTP settings from smtp_config.php (never commit real secrets).
 */
function load_smtp_config()
{
	$config_path = __DIR__ . DIRECTORY_SEPARATOR . 'smtp_config.php';
	if (!is_file($config_path)) {
		return null;
	}

	$config = include $config_path;
	if (!is_array($config)) {
		return null;
	}

	return $config;
}

/**
 * Last SMTP / mail error for debugging (shown only in flash when send fails).
 */
function get_last_mail_error()
{
	return isset($GLOBALS['eaes_last_mail_error']) ? $GLOBALS['eaes_last_mail_error'] : '';
}

/**
 * Send HTML reset email via Gmail SMTP (PHPMailer).
 * Returns true on success.
 */
function send_password_reset_email($to_email, $username, $reset_url, $account_label)
{
	$GLOBALS['eaes_last_mail_error'] = '';

	$subject = 'EAES - Pautan Set Semula Kata Laluan';

	$body = '
	<html>
	<body style="font-family: Arial, sans-serif; color: #333; line-height: 1.5;">
		<div style="max-width: 520px; margin: 0 auto; padding: 24px; border: 1px solid #eee; border-radius: 8px;">
			<h2 style="margin-top: 0; color: #06d995;">Set Semula Kata Laluan</h2>
			<p>Assalamualaikum / Salam sejahtera, <strong>' . htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . '</strong>.</p>
			<p>Kami menerima permintaan untuk set semula kata laluan akaun <strong>' . htmlspecialchars($account_label, ENT_QUOTES, 'UTF-8') . '</strong> anda di sistem EAES.</p>
			<p>Sila klik butang di bawah. Pautan ini sah selama <strong>1 jam</strong>.</p>
			<p style="text-align: center; margin: 28px 0;">
				<a href="' . htmlspecialchars($reset_url, ENT_QUOTES, 'UTF-8') . '"
				   style="background: #06d995; color: #fff; padding: 12px 22px; text-decoration: none; border-radius: 4px; display: inline-block;">
					Set Semula Kata Laluan
				</a>
			</p>
			<p style="font-size: 13px; color: #666;">Jika butang tidak berfungsi, salin pautan ini ke pelayar:<br>
				' . htmlspecialchars($reset_url, ENT_QUOTES, 'UTF-8') . '
			</p>
			<p style="font-size: 13px; color: #666;">Jika anda tidak membuat permintaan ini, abaikan e-mel ini. Kata laluan anda tidak akan berubah.</p>
			<hr style="border: none; border-top: 1px solid #eee;">
			<p style="font-size: 12px; color: #999;">Sistem EAES — Kolej Vokasional Datuk Seri Abu Zahar Isnin</p>
		</div>
	</body>
	</html>';

	$config = load_smtp_config();
	if ($config === null) {
		$GLOBALS['eaes_last_mail_error'] = 'Fail smtp_config.php tidak dijumpai. Salin dari smtp_config.php.example.';
		return false;
	}

	$smtp_user = isset($config['smtp_user']) ? trim($config['smtp_user']) : '';
	$smtp_pass = isset($config['smtp_pass']) ? trim($config['smtp_pass']) : '';
	$from_email = isset($config['from_email']) ? trim($config['from_email']) : $smtp_user;
	$from_name = isset($config['from_name']) ? trim($config['from_name']) : 'EAES System';

	if ($smtp_user === '' || $smtp_user === 'your.email@gmail.com' || $smtp_pass === '' || $smtp_pass === 'xxxx xxxx xxxx xxxx') {
		$GLOBALS['eaes_last_mail_error'] = 'Sila isi Gmail dan App Password dalam smtp_config.php.';
		return false;
	}

	$autoload = __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
	if (!is_file($autoload)) {
		$GLOBALS['eaes_last_mail_error'] = 'PHPMailer belum dipasang (vendor/autoload.php tiada). Jalankan: composer require phpmailer/phpmailer';
		return false;
	}

	require_once $autoload;

	try {
		$mail = new PHPMailer\PHPMailer\PHPMailer(true);

		// SMTP via Gmail
		$mail->isSMTP();
		$mail->Host = isset($config['smtp_host']) ? $config['smtp_host'] : 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = $smtp_user;
		$mail->Password = $smtp_pass;
		$mail->Port = isset($config['smtp_port']) ? (int) $config['smtp_port'] : 587;

		$secure = isset($config['smtp_secure']) ? strtolower($config['smtp_secure']) : 'tls';
		if ($secure === 'ssl') {
			$mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
		} else {
			$mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
		}

		// Useful on some local WAMP SSL setups
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true,
			),
		);

		$mail->CharSet = 'UTF-8';
		$mail->setFrom($from_email, $from_name);
		$mail->addAddress($to_email, $username);
		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->AltBody = "Set semula kata laluan EAES.\nBuka pautan ini (sah 1 jam):\n" . $reset_url;

		$mail->send();
		return true;
	} catch (\Throwable $e) {
		$error_info = (isset($mail) && !empty($mail->ErrorInfo)) ? $mail->ErrorInfo : $e->getMessage();
		$GLOBALS['eaes_last_mail_error'] = $error_info;
		return false;
	}
}

/**
 * Login page path for an account type (after successful reset).
 */
function login_page_for_type($account_type)
{
	return ($account_type === 'admin') ? 'adminlogin.php' : 'userlogin.php';
}

/**
 * Human-readable label for emails / UI.
 */
function account_type_label($account_type)
{
	if ($account_type === 'admin') {
		return 'Administrator';
	}
	return 'Pengguna (Pelajar / Pensyarah)';
}
