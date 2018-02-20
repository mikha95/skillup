<?php

$log = file_get_contents('radio.log');
//echo '<pre>';
//var_dump($log);
//echo '</pre>';
preg_match_all('/(.+)\.(.+)\.(.+)\.(.+)/', '185.222.121.11 233.3333.222.567',$matches, PREG_OFFSET_CAPTURE);
//print_r($matches);
echo '<pre>';
var_dump($matches);
echo '</pre>';
?>