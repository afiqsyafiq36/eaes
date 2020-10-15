<?php
include "sambung.php";
session_start();
$_SESSION['status'] = "Maklumat kursus telah berjaya dikemaskini!";
$_SESSION['status_code'] = "success";
    //update kursus

	$idpat = $_POST['idpat'];
	$kkursus = $_POST['kodkursus'];
	$nkursus = $_POST['namakursus'];
	$sem = $_POST['semester'];
	$detail = $_POST['keterangan'];
	$cl1 = $_POST['clo1'];
	$cl2 = $_POST['clo2'];
	$cl3 = $_POST['clo3'];
	
	$c1s1 = $_POST['c1s1'];
	$c1s2 = $_POST['c1s2'];
	$c1s3 = $_POST['c1s3'];

	$c2s1 = $_POST['c2s1'];
	$c2s2 = $_POST['c2s2'];
	$c2s3 = $_POST['c2s3'];

	$c3s1 = $_POST['c3s1'];
	$c3s2 = $_POST['c3s2'];
	$c3s3 = $_POST['c3s3'];

	$kemaskini = mysqli_query($hubung, 
		"UPDATE kursus SET kodkursus = '$kkursus',namakursus = '$nkursus',semester = '$sem',keterangan = '$detail',CLO1 = '$cl1',CLO2 = '$cl2',CLO3 = '$cl3',C1S1 = '$c1s1',C1S2 = '$c1s2',C1S3 = '$c1s3',C2S1 = '$c2s1',C2S2 = '$c2s2',C2S3 = '$c2s3',C3S1 = '$c3s1',C3S2 = '$c3s2',C3S3 = '$c3s3'
		 WHERE idkursus = '$idpat' ");

	echo "<script>
	      window.location = 'detailcourse.php'</script>";



?>