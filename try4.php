
<?php
    $page_name = "Index";
	include "countVisitor.php";
	$access_number = visitor($page_name);
?>
<?php
date_default_timezone_set('Asia/Kuala_Lumpur');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Script timezone differs from ini-set timezone.';
} else {
    echo 'Script timezone and ini-set timezone match.';
}
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $page_name; ?></title>
</head>
<body>

</body>
<footer>
  <p>
<?php
    echo "You are the", $access_number, " visitor on this site!";
    $today = date("Y-m-d H:i:s");
    echo $today; ?>
    <?php
    $to = (new DateTime())->setTime(0,0);
    echo $to->format('Y-m-d h:i:s');
    ?>
    <?php echo date("d/m/Y h:i:s A"); ?>
    <?php
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");
?>
</p>
<p>
    <?php

// $midnight = mktime(0,0,0,date('m'),date('d'),date('Y'));
// The above is equivalent to below
$midnight = mktime(0,0,0);

echo date('l jS \of F Y h:i:s A',$midnight)."\n";
echo date('l jS \of F Y h:i:s A',$midnight+60)."\n"; // One minute
echo date('l jS \of F Y h:i:s A',$midnight+(60*60))."\n"; // One hour

?>
</p>
</footer>
</html>