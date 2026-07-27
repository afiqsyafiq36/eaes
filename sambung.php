<?php
/**
 * Database connection — auto-selects local (WAMP) vs production (InfinityFree).
 *
 * Why: avoid editing this file every time you switch between localhost and live hosting.
 * - Local: detected via HTTP_HOST (localhost / 127.0.0.1) → uses sambung.local.php if present
 * - Production: everything else → InfinityFree credentials below
 *
 * Safe to include more than once (some pages nest include "sambung.php").
 */
if (defined('EAES_SAMBUNG_LOADED')) {
	return;
}
define('EAES_SAMBUNG_LOADED', true);

date_default_timezone_set('Asia/Kuala_Lumpur');

/**
 * Decide if we are running on a local development machine.
 */
if (!function_exists('eaes_is_local_environment')) {
	function eaes_is_local_environment()
	{
		$host = '';
		if (!empty($_SERVER['HTTP_HOST'])) {
			$host = strtolower($_SERVER['HTTP_HOST']);
		} elseif (!empty($_SERVER['SERVER_NAME'])) {
			$host = strtolower($_SERVER['SERVER_NAME']);
		}

		// Remove port so "localhost:8080" still counts as local
		$host_without_port = preg_replace('/:\d+$/', '', $host);

		$local_hosts = array('localhost', '127.0.0.1', '::1');
		if (in_array($host_without_port, $local_hosts, true)) {
			return true;
		}

		// Optional: machine.local style hostnames
		if ($host_without_port !== '' && substr($host_without_port, -6) === '.local') {
			return true;
		}

		return false;
	}
}

$is_local = eaes_is_local_environment();

if ($is_local) {
	// Default WAMP credentials (override by creating sambung.local.php)
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'eaes_db';

	$local_config_path = __DIR__ . DIRECTORY_SEPARATOR . 'sambung.local.php';
	if (is_file($local_config_path)) {
		// Expected to set: $host, $user, $password, $dbname
		include $local_config_path;
	}
} else {
	// InfinityFree / live hosting
	$host = 'sql211.infinityfree.com';
	$user = 'if0_42490017';
	$password = 'ecqUY2eUR4DiNf0';
	$dbname = 'if0_42490017_eaes_db';
}

$hubung = @mysqli_connect($host, $user, $password, $dbname);

if (mysqli_connect_errno()) {
	$env_label = $is_local ? 'LOCAL' : 'PRODUCTION';
	// Show environment in message to make debugging easier (local vs live)
	echo 'Sambungan data tidak berjaya [' . $env_label . ']: ' . mysqli_connect_error();
}
?>
