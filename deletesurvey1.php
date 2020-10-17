<?php
include "sambung.php";
session_start();

$id = $_GET['id_delete'];

if ($id != null) {

	$padam = mysqli_query($hubung, "DELETE FROM entrance WHERE idEnt = '$id'"); 
	$_SESSION['status'] = "Data telah berjaya dipadam!";
	$_SESSION['status_code'] = "success";
	echo "<script>window.location = 'total.php'</script>";

} else {
	$_SESSION['status'] = "Ralat telah terjadi. Sila rujuk admin sistem.";
	$_SESSION['status_code'] = "error";
}
?>