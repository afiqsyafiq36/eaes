<?php
include "sambung.php";

$id = $_GET['id_del'];

$padam = mysqli_query($hubung, "DELETE FROM user WHERE id = '$id'"); 
	echo "<script>alert('Pengguna dipadam');
	      window.location = 'detailuser.php'</script>";
?>