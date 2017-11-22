<?php
$data1 = $_POST['number'];

if ( isset( $data1 ) ){
$fp = fopen( "kadai_2-3.txt", "r+" );
$delidata = file( "kadai_2-3.txt" );
   for ($k = 0; $k < count( $delidata ) ; $k++) {
   $delicontent = explode( "<>" , $delidata[$k] );
                   if ( $delicontent[0] == "$data1" ) {
						  unset( $delidata[$k] );
                          file_put_contents ( "kadai_2-3.txt" , $delidata );
                          fclose($fp);
						  }
				   }

header("Location: http://co-757.it.99sv-coco.com/mission_2-4-1.php");
 exit();
}
else{
echo "値を入力してください。";
}
?>

 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>削除フォーム</title>
</head>
<body>
<form action= "mission_2-4-1.php" method="POST">
  削除番号を入力：<br />
  <input type="text" name="number"><br />
  <br />
  <input type="submit" value="削除する" />
  </form>
  
<?php
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
 