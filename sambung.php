<?php

$host = "localhost";
$user = "root";
$password = "mysql";
$dbname = "eaes_db";

$hubung = mysqli_connect($host,$user,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Sambungan data tidak berjaya";
}
?>