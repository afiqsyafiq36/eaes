<?php

$host = "localhost";
$user = "root";
$password = "mysql";
$dbname = "eaes_db";

$hubung = mysqli_connect($host,$user,$password,$dbname);

date_default_timezone_set('Asia/Kuala_Lumpur');

if (mysqli_connect_errno()) {
	echo "Sambungan data tidak berjaya";
}

// function fetch_user_last_activity($user_id, $hubung)
// {
// 	$query = "SELECT * FROM user WHERE id = '$user_id' ORDER BY last_activity DESC LIMIT 1";
// 	$statemet = $hubung->prepare($query);
// 	$statemet->execute();
// 	$result = $statemet->fetch_all();

// 	foreach ($result as $row)
// 	{
// 		return $row['last_activity'];
// 	}
// }
?>