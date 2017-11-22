<?php
$filename = 'kadai2-2.txt';
//echo $filename;

$fp = fopen($filename, 'w');
fwrite($fp, 'hello world');

fclose($fp);

?>