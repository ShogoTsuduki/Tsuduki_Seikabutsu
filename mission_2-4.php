<?php
$filename = 'kadai_2-3.txt';
$data1 = $_POST['number'];

if ( isset( $data1 ) == TRUE ){
$open = fopen($filename , 'r+'); //ファイルを開く
$fp = file("kadai_2-3.txt");  //配列に入れる
unset($fp[$data1]);
print(var_dump($fp));
file_put_contents ( $filename , $fp );
fclose($open);
header('Location: http://co-757.it.99sv-coco.com/mission_2-5-1.php');
 exit();
}

if ( isset( $data1 ) == FALSE ){
echo "値を入力してください。";
}
?>

 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>削除フォーム.php</title>
</head>
<body>
<form action= "mission_2-4.php" method="POST">
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
 