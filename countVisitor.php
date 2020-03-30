<?php
function visitor($record) {
  include "sambung.php";
  $db_table = "visitor";
  $counter_page = "access_page";
  $counter_field = "access_counter";

  $sql_call = "INSERT INTO ".$db_table." (".$counter_page.", ".$counter_field.") VALUES ('".$record."', 1) ON DUPLICATE KEY UPDATE ".$counter_field." = ".$counter_field." + 1"; 
  mysqli_query($hubung, $sql_call) or die("Error while entering");

$sql_call = "SELECT ".$counter_field. " FROM ".$db_table." WHERE ".$counter_page. " = '".$record. "'";
$sql_result = mysqli_query($hubung, $sql_call) or die("SQL request failed ");
$row = mysqli_fetch_assoc($sql_result);
$x = $row[$counter_field];

mysqli_close($hubung);
return $x;
  }
?>



