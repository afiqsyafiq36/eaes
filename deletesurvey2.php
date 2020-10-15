<?php
include "sambung.php";
session_start();
$_SESSION['status'] = "Data telah berjaya dipadam!";
$_SESSION['status_code'] = "success";
$id = $_GET['id_delete'];

$padam = mysqli_query($hubung, "DELETE FROM ext WHERE idExt = '$id'"); 
	echo "<script>
	      window.location = 'total2.php'</script>";
?>