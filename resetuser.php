<?php
include "sambung.php";
session_start();
$_SESSION['status'] = "Kata laluan pengguna telah berjaya di set semula!";
$_SESSION['status_code'] = "success";

$id = $_GET['id_reset'];
$password_hash = password_hash('123', PASSWORD_DEFAULT);
$reset = mysqli_query($hubung, "UPDATE user SET password = '$password_hash' WHERE id = '$id'"); 
	echo "<script>
	      window.location = 'detailuser.php'</script>";
?>