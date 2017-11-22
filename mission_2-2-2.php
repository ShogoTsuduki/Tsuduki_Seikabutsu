<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />
<title>mission_2-2-2.php</title>
</head>
<body>
<?php
$data1=$_GET['name'];
$data2=$_GET['comment'];
$filename="kadai_2-2.txt";
$timestamp=time();
$date=date( "Y/m/d/H:i");
$count=0;
$count=count(file($filename));

$fp=fopen($filename, "a");
fwrite($fp, "{$count}<>{$data1}<>{$data2}<>{$date}\r\n");
fclose($fp);

?>
</body>
</html>