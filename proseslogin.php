<?php 
include "sambung.php";
//umpukan nilai variable bagi input daripada login pengguna


$username = $_POST['uname'];
$password = $_POST['pass'];

$query = mysqli_query($hubung,"SELECT * FROM user WHERE username = '$username'");
$cek = mysqli_num_rows($query);


//semakan

  	if($cek > 0) {

		 $data = mysqli_fetch_array($query);
		 $password_hash_db = $data['password'];

		if(password_verify($password, $password_hash_db))
		{
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

				if (!empty($_POST['remember'])) 
				{
					//setcookie for remember function
					setcookie("user_login", $username, time() + (10 * 365 * 24 * 60 * 60));
					setcookie("user_password", $password, time() + (10 * 365 * 24 * 60 * 60));
				} 
				else 
				{
					//setcookie not checked remember
					if (isset($_COOKIE["user_login"])) {
						setcookie("user_login", "");
					}
					if (isset($_COOKIE["user_password"])) {
						setcookie("user_password","");
					}
				}

				header("location:dashboardpelajar.php");
			}
			elseif ($_SESSION['level'] AND $data['level'] == '2') {

				
				$page_name = "Dashboard Pensyarah";
				include "countVisitor.php";
				$access_number = visitor($page_name);

				if (!empty($_POST['remember'])) 
				{
					//setcookie for remember function
					setcookie("user_login", $username, time() + (10 * 365 * 24 * 60 * 60));
					setcookie("user_password", $password, time() + (10 * 365 * 24 * 60 * 60));
				} 
				else 
				{
					//setcookie not checked remember
					if (isset($_COOKIE["user_login"])) {
						setcookie("user_login", "");
					}
					if (isset($_COOKIE["user_password"])) {
						setcookie("user_password","");
					}
				}

				header("location:dashboardpensyarah.php");
			} 
			else {
				header("location:404page.php");
			}
		}
		else 
		{
			echo "<script>alert('Katalaluan tidak sepadan')</script>";
			echo "<script>window.location.href='userlogin.php';</script>";
		}
	     
	     
    }
    else {
	     //login gagal
	     echo "<script>alert('Maaf tiada rekod padanan')</script>";
	     echo "<script>window.location.href='userlogin.php';</script>";
    }


?>