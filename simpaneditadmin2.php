<?php
include "sambung.php";

//update user
	   
	   $password = $_POST['pass'];
	   $fullname = $_POST['fname'];
	   $nomatrik = $_POST['matrik'];
	   $email = $_POST['email'];
	   $sesi = $_POST['sesi'];
	   $sayaA = $_POST['papa2'];

	   $userUpdate = mysqli_query($hubung, "UPDATE user SET password = '$password', fullname = '$fullname', nomatrik = '$nomatrik',email = '$email', sesi = '$sesi' WHERE id = '$sayaA' ");
	   
	   echo "<script>alert('Pengguna dikemaskini');
	         window.location = 'detailuser.php'</script>";
?>