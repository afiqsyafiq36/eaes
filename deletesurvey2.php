<?php
include "sambung.php";

$id = $_GET['id_delete'];

$padam = mysqli_query($hubung, "DELETE FROM ext WHERE idExt = '$id'"); 
	echo "<script>alert('Data dipadam');
	      window.location = 'total2.php'</script>";
?>