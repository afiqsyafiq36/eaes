<?php
include "sambung.php";

$id = $_GET['id_reset'];

$reset = mysqli_query($hubung, "UPDATE user SET password = '123' WHERE id = '$id'"); 
	echo "<script>alert('Katalaluan pengguna diset semula');
	      window.location = 'detailuser.php'</script>";
?>