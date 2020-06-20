<?php
include "sambung.php";

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

		echo "<script>alert('User detail updated!');
			window.location = 'editprofileadmin.php'</script>";
	}
	else
	{
		echo "<script>alert('Please check your password credentials');
		window.location = 'editprofileadmin.php'</script>";
	}

	
?>