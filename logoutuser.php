<?php
include "sambung.php";

session_start();
$id = $_SESSION['id'];
$offline = mysqli_query($hubung,"UPDATE user SET status = '2' WHERE id = '$id'");
session_destroy();
	header("location:userlogin.php");

?>