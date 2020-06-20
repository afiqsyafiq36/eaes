<?php
include "sambung.php";

$id = $_GET['id_reset'];
$password_hash = password_hash('123', PASSWORD_DEFAULT);
$reset = mysqli_query($hubung, "UPDATE user SET password = '$password_hash' WHERE id = '$id'"); 
	echo "<script>alert('Katalaluan pengguna diset semula');
	      window.location = 'detailuser.php'</script>";
?>