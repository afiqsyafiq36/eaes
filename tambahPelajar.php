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
     $level = $_POST['level'];

     $tambah = "INSERT INTO user (username,password,level,fullname,nomatrik,email,sesi,status) VALUES 
     ('$username','$password','$level','$fullname','$nomatrik','$email','$sesi','2')";

     $hasil = mysqli_query($hubung,$tambah);

     echo "<script>alert('Pelajar berjaya ditambah');
        window.location='addPelajar.php'</script>";

}

?>