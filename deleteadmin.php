<?php
include "sambung.php";

$id = $_GET['id_del'];

$padam = mysqli_query($hubung, "DELETE FROM kursus WHERE idkursus = '$id'"); 
	echo "<script>alert('Data dipadam');
	      window.location = 'detailcourse.php'</script>";
?>