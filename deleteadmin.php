<?php
include "sambung.php";
session_start();
$_SESSION['status'] = "Data kursus telah berjaya dipadam!";
$_SESSION['status_code'] = "success";

$id = $_GET['id_del'];

$padam = mysqli_query($hubung, "DELETE FROM kursus WHERE idkursus = '$id'"); 
	echo "<script>
	      window.location = 'detailcourse.php'</script>";
?>