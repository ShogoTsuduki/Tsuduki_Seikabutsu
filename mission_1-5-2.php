<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>mission_1-5-2.php</title>
</head>
<body>
<?php
$data1=$_GET['name'];
$data2=$_GET['mail'];
$data3=$_GET['comment'];
$filename="kadai_1-5.txt";

$fp=fopen($filename, "w");
fwrite($fp, "$data1");
fwrite($fp, "$data2");
fwrite($fp, "$data3");
fclose($fp);

?>
</body>  
</html>