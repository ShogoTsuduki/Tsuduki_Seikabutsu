<?php
$data1=$_GET['name'];
$data2=$_GET['comment'];
$counter = "kadai_2-3-count.txt";
$filename = "kadai_2-3.txt";
$timestamp=time();
$date=date( "Y/m/d/H:i");
$fc = fopen($counter, "r");
$count = fgets($fc);
$count = $count + 1;
fclose($fc);

$fc = fopen( $counter, "w");
fwrite($fc, $count);
fclose($fc);

$fp = fopen( $filename, "a" );
$number = $count-1;
fwrite($fp, "{$number}<>{$data1}<>{$data2}<>{$date}\r\n");
fclose($fp);

header('Location: http://co-757.it.99sv-coco.com/mission_2-3-1.php');
 exit();
?>