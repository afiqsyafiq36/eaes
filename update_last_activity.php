<?php

include "sambung.php";

session_start();
$id = $_SESSION['id'];

$query = mysqli_query($hubung, "UPDATE user SET last_activity = NOW() WHERE id = '$id'");


?>