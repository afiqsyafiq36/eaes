<?php 
include "sambung.php";
//umpukan nilai variable bagi input daripada login pengguna


$username = $_POST['uname'];
$password = $_POST['pass'];

$query = mysqli_query($hubung,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($query);


//semakan

  	if($cek > 0) {

	     $data = mysqli_fetch_array($query);
	     session_start();
	     $_SESSION['uname'] = $data['username'];
       	 $_SESSION['id'] = $data['id'];
       	 $_SESSION['fullname'] = $data['fullname'];
         $_SESSION['nomatrik'] = $data['nomatrik'];
         $_SESSION['email'] = $data['email'];
         $_SESSION['sesi'] = $data['sesi'];
         $_SESSION['level'] = $data['level'];

       	 
       	 if ($_SESSION['level'] != $data['level']) {
	     	echo "<script>alert('Akses tidak dibenarkan')</script>";
	        echo "<script>window.location.href='userlogin.php';</script>";
	     }
       	 elseif($_SESSION['level'] AND $data['level'] == '1') {
            
			  //counter pages
			  $page_name = "Dashboard Pelajar";
			  include "countVisitor.php";
			  $access_number = visitor($page_name);

	        header("location:dashboardpelajar.php");
	     }
	     elseif ($_SESSION['level'] AND $data['level'] == '2') {

            
			  $page_name = "Dashboard Pensyarah";
			  include "countVisitor.php";
			  $access_number = visitor($page_name);

	     	header("location:dashboardpensyarah.php");
	     }
	     
	     
    }
    else {
	     //login gagal
	     echo "<script>alert('Nama Pengguna atau Kata Laluan Salah')</script>";
	     echo "<script>window.location.href='userlogin.php';</script>";
    }


?>