<?php

$query_user = mysqli_query($hubung,"SELECT * FROM user WHERE id = '$id'");
while($detail = mysqli_fetch_array($query_user)) {

    $level = $detail['level'];
    $imgPath = $detail['image'];

    if ($level == 1 && $imgPath == null) { 
        $imgPath = './img/asg.png'; //pelajar
    } elseif ($level == 2 && $imgPath == null) {
        $imgPath = './img/asgp.png'; //pensyarah
    } 
}

?>