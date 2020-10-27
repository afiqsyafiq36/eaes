<?php
//include
include "sambung.php";
//start session
session_start();

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
			//admin detail
			$_SESSION['uname'] = $data['username'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['id'] = $data['id'];

			if(!empty($_POST['remember'])) 
			{
				//setcookie for remember function
				setcookie("admin_login",$username,time()+ (10 * 365 * 24 * 60 * 60));  
				setcookie("admin_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
			}
			else
			{
				//setcookie not checked remember
				if(isset($_COOKIE["admin_login"])) 
				{
					setcookie("admin_login", "");
				}
				if (isset($_COOKIE["admin_password"])) {
					setcookie("admin_password", "");
				}  
			}

			header("location:dashboardadmin.php");
		}
		else 
		{	
			echo "<script>alert('Maaf, kata laluan tidak sepadan. Sila cuba semula.')</script>";
	     	echo "<script>window.location.href='adminlogin.php';</script>";
		}
    }
    else {
		 //login gagal
	     echo "<script>alert('Maaf, akaun anda tiada padanan di dalam rekod')</script>";
	     echo "<script>window.location.href='adminlogin.php';</script>";
    }

?>