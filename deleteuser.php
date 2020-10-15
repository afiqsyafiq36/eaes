<?php
include "sambung.php";
session_start();
$_SESSION['status'] = "Akaun pengguna telah berjaya dipadamkan!";
$_SESSION['status_code'] = "success";

$id = $_GET['id_del'];

$padam = mysqli_query($hubung, "DELETE FROM user WHERE id = '$id'"); 
	echo "<script>
	      window.location = 'detailuser.php'</script>";
?>