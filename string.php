<?php

$filename = 'counter.txt';
if (file_exists($filename)) {
    $counter = file_get_contents($filename);
}
else $counter = 0;
$counter++;
file_put_contents($filename, $counter);

$a = "1, 3, 10, 22, 18, 44, 35"; //Дано

//$b = "11, 13, 20, 32, 28, 54, 45"; //Что нужно получить

$pieces = explode(', ', $a);
$string = "";
$new = [];
foreach ($pieces as $piece) {
    $new = $piece + 10 . ', ';

}

//var_dump($new);
//var_dump(implode(', ', $new));

?>

