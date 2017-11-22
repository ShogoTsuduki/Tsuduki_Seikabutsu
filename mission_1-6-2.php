<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>mission_1-6-2.php</title>
</head>
<body>
<?php
$data1=$_GET['name'];
$data2=$_GET['mail'];
$data3=$_GET['comment'];
$filename="kadai_1-6.txt";

$fp=fopen($filename, "a");
fwrite($fp, "$data1\r\n");
fwrite($fp, "$data2\r\n");
fwrite($fp, "$data3\r\n");
fclose($fp);

?>
</body>
</html>