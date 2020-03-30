<?php
include "sambung.php";

$id = $_GET['id_delete'];

$padam = mysqli_query($hubung, "DELETE FROM entrance WHERE idEnt = '$id'"); 
	echo "<script>alert('Data dipadam');
	      window.location = 'total.php'</script>";
?>