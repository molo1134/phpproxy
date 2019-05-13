<?php

$id = $_GET['id'];

// https://swap.qth.com/view_ad.php?counter=1429427
$html = file_get_contents("https://swap.qth.com/view_ad.php?counter=".$id);

echo $html;
?>
