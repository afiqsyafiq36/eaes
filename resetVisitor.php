<?php
include "sambung.php";

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

echo "<script>alert('Akses Laman diset semula');
	      window.location = 'editprofileadmin.php'</script>";

?>
<?php
     //rset counter
$resetpelawat = mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='5'");
$resetpelajar = mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='8'");
$resetpensyarah= mysqli_query($hubung,"UPDATE visitor SET access_counter = '0' WHERE id='10'");

echo "<script>alert('Akses Laman diset semula');
	      window.location = 'editprofileadmin.php'</script>";
?>