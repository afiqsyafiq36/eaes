<?php
//include
include "sambung.php";
//start session

$username = $_POST['uname'];
$password = $_POST['pass'];

//semakan data

$query = mysqli_query($hubung,"SELECT * FROM admin WHERE username = '$username'");

$cek = mysqli_num_rows($query);

    if($cek > 0) {

		$data = mysqli_fetch_array($query);
		$password_hash_db = $data['password'];
		if(password_verify($password, $password_hash_db))
		{
			session_start();
			$_SESSION['uname'] = $data['username'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['id'] = $data['id'];
			header("location:dashboardadmin.php");
		}
		else 
		{
			echo "<script>alert('Katalaluan tidak sepadan')</script>";
	     	echo "<script>window.location.href='adminlogin.php';</script>";
		}
    }
    else {
	     //login gagal
	     echo "<script>alert('Maaf tiada rekod padanan')</script>";
	     echo "<script>window.location.href='adminlogin.php';</script>";
    }

?>