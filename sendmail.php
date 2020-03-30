<?php
include "sambung.php";



//Block 3
$username= $_POST['uname'];
$user_email= $_POST['mail'];
$subject= $_POST['subject'];


//Block 5
$result= mysqli_query ($hubung, "SELECT * FROM admin"); 

//Block 6
while ($row = mysqli_fetch_array($result)) {
$name= $row['username'];
$email= $row['email'];

//Block 7
$msg= "Dear $name,\n$user_email is requesting to $subject";
//perlu configure smtp jikalau nk berfungsi
ini_set('SMTP','myserver');
ini_set('smtp_port',25);
mail($user_email, $subject, $msg, 'From:' . $user_email);
echo 'Email sent to: ' . $email. '<br>';
}

//Block 8
mysqli_close($hubung);
?>
