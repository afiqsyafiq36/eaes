<?php
//include
include "sambung.php";
//start session

$username = $_POST['uname'];
$password = $_POST['pass'];

//semakan data

$query = mysqli_query($hubung,"SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

$cek = mysqli_num_rows($query);



    if($cek > 0) {
	     $data = mysqli_fetch_array($query);
	     session_start();
	     $_SESSION['uname'] = $data['username'];
	     $_SESSION['email'] = $data['email'];
       	 $_SESSION['id'] = $data['id'];
	     header("location:dashboardadmin.php");
    }
    else {
	     //login gagal
	     echo "<script>alert('Nama Pengguna atau Kata Laluan Salah')</script>";
	     echo "<script>window.location.href='adminlogin.php';</script>";
    }


?>