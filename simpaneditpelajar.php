<?php
include "sambung.php";
session_start();

	$old_password = $_POST['opw'];
	$confirm_password = $_POST['cpw'];

	$namapenuh = $_POST['fname'];
	$nomatrik = $_POST['matrik'];
	$email = $_POST['email'];
	$id = $_POST['idk'];

	$query = mysqli_query($hubung,"SELECT * FROM user WHERE email = '$email'");
	$data = mysqli_fetch_array($query);
	$password_hash_db = $data['password']; 

	if(password_verify($old_password, $password_hash_db))
	{
		$password_hash = password_hash($confirm_password, PASSWORD_DEFAULT);
		$kemaskini = mysqli_query($hubung, "UPDATE user SET password = '$password_hash',fullname = '$namapenuh',nomatrik = '$nomatrik',email = '$email' WHERE id = '$id' ");

		//record user activity
		$activity = "INSERT INTO activity_history (activity,created_date) VALUES ('Pengguna $namapenuh telah mengemaskini maklumat akaun', NOW())";
		$added_activity = mysqli_query($hubung,$activity);

		$_SESSION['status'] = "Data anda telah berjaya dikemaskini!";
		$_SESSION['status_code'] = "success";
		echo "<script>window.location = 'profilepelajar.php'</script>";
	}
	else
	{	
		$_SESSION['status'] = "Maklumat gagal dikemaskini! Sila cuba lagi.";
		$_SESSION['status_code'] = "error";
		echo "<script>window.location = 'profilepelajar.php'</script>";
	}

?>