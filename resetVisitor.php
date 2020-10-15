<?php
include "sambung.php";
session_start();
$_SESSION['status'] = "Log sistem telah diset semula";
$_SESSION['status_code'] = "success";

$today = date("Y-m-d H:i:s");
$to = (new DateTime())->setTime(0,0);
$to->format('Y-m-d h:i:s');

if ($today == $to) {
//rset counter
$resetpelawat = mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='5'");
$resetpelajar = mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='8'");
$resetpensyarah= mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='10'");

}
else {
    $resetpelawat = mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='-1'");
	$resetpelajar = mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='-1'");
	$resetpensyarah= mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='-1'");
}

echo "<script>
	      window.location = 'editprofileadmin.php'</script>";

?>
<?php
     //rset counter
$resetpelawat = mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='5'");
$resetpelajar = mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='8'");
$resetpensyarah= mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='10'");

echo "<script>
	      window.location = 'editprofileadmin.php'</script>";
?>