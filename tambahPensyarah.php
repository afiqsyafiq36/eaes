<?php
include "sambung.php";

if(isset($_POST['fname'])) {

  // variable
     $fullname = $_POST['fname'];
     $nomatrik = $_POST['matrik'];
     $email = $_POST['email'];
     $sesi = $_POST['sesi'];
     $username = $_POST['uname'];
     $password = $_POST['pass'];
     $password_hash = password_hash($password, PASSWORD_DEFAULT);
     $level = $_POST['level'];

     $tambah = "INSERT INTO user (username,password,level,fullname,nomatrik,email,sesi,status) VALUES 
     ('$username','$password_hash','$level','$fullname','$nomatrik','$email','$sesi','2')";

     $activity = "INSERT INTO activity_history (activity,created_date) VALUES ('Pensyarah baru telah ditambah $fullname', NOW())";

     $hasil = mysqli_query($hubung,$tambah);
     $added = mysqli_query($hubung,$activity);

     echo "<script>alert('Pensyarah berjaya ditambah');
        window.location='addPensyarah.php'</script>";

}

?>