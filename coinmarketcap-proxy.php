<?php

$id = $_GET['id'];
$fiat = $_GET['fiat'];

$url = "https://api.coinmarketcap.com/v1/ticker/".$id."/?convert=".$fiat;

$html = file_get_contents($url);

echo $html;
?>
