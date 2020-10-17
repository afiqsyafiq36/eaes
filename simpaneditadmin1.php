<?php
include "sambung.php";
session_start();

	$old_password = $_POST['opw'];
	// $new_password = $_POST['npw'];
	$confirm_password = $_POST['cpw'];
	$email = $_POST['email'];
	$notel = $_POST['notel'];

	$query = mysqli_query($hubung,"SELECT * FROM admin WHERE email = '$email'");
	$data = mysqli_fetch_array($query);
	$password_hash_db = $data['password'];

	if(password_verify($old_password, $password_hash_db)) 
	{
		$password_hash = password_hash($confirm_password, PASSWORD_DEFAULT);
		$kemaskini = mysqli_query($hubung, "UPDATE admin SET password = '$password_hash',email = '$email',notel = '$notel' ");

		$_SESSION['status'] = "Maklumat anda telah berjaya dikemaskini!";
		$_SESSION['status_code'] = "success";

		echo "<script>
			window.location = 'editprofileadmin.php'</script>";
	}
	else
	{
		$_SESSION['status'] = "Maklumat gagal dikemaskini! Sila cuba lagi.";
		$_SESSION['status_code'] = "error";

		echo "<script>
		window.location = 'editprofileadmin.php'</script>";
	}

	
?>