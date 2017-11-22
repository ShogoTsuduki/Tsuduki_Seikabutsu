<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>mission_2-3.php</title>
</head>
<body>
<form action= "mission_2-3-2.php" method="get">
  名前：<br />
  <input type="text" name="name"><br />
　　コメント：<br />
  <textarea name="comment" rows="8"></textarea><br />
  <br />
  <input type="submit" value="登録する" />
  </form>
  </body>
  </html>
  
<?PHP
  // 読み込むファイル名の指定
  if(file_exists("kadai_2-3.txt")){
  $fp = fopen('kadai_2-3.txt', 'r');
  // ファイルを一行ずつ読み込む
   while($ret_array = fgets($fp)){
   $all_data_array=explode("<>", $ret_array);
  // 取得したファイルデータ(配列)を全て表示する
  for( $i = 0; $i < count($all_data_array); ++$i ) {
    // 配列を順番に表示する
   echo ($all_data_array[$i] ."<br />");
  }
  }
    fclose($fp);
 }
 else{
 echo "このファイルは存在しません";
 touch( "kadai_2-3.txt" );
$fp = fopen('kadai_2-3.txt', 'r');
  // ファイルを一行ずつ読み込む
   while($ret_array = fgets($fp)){
   $all_data_array=explode("<>", $ret_array);
  // 取得したファイルデータ(配列)を全て表示する
  for( $i = 0; $i < count($all_data_array); ++$i ) {
    // 配列を順番に表示する
   echo ($all_data_array[$i] ."<br />");
  }
  }
    fclose($fp);
 }
?>
</body>  
</html>