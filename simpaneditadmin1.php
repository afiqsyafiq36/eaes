<?php
include "sambung.php";

	$katalaluan = $_POST['pass'];
	$email = $_POST['email'];
	$notel = $_POST['notel'];

	$kemaskini = mysqli_query($hubung, 
		"UPDATE admin SET password = '$katalaluan',email = '$email',notel = '$notel' ");

	echo "<script>alert('Maklumat admin telah berjaya dikemaskini. Sila login semula.');
	      window.location = 'editprofileadmin.php'</script>";
?>