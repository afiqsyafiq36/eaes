<?php
include "sambung.php";
session_start();
$_SESSION['status'] = "Data pengguna telah berjaya dikemaskini!";
$_SESSION['status_code'] = "success";
//update user
	   
	   $fullname = $_POST['fname'];
	   $nomatrik = $_POST['matrik'];
	   $email = $_POST['email'];
	   $sesi = $_POST['sesi'];
	   $sayaA = $_POST['papa2'];

	   $userUpdate = mysqli_query($hubung, "UPDATE user SET fullname = '$fullname', nomatrik = '$nomatrik',email = '$email', sesi = '$sesi' WHERE id = '$sayaA' ");
	   
	   echo "<script>
	         window.location = 'detailuser.php'</script>";
?>