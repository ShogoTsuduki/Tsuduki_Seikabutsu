<?php
if ( isset( $_POST['number'] ) == TRUE ){
$edit = $_POST['number'];

$fp = fopen( "kadai_2-3.txt", "r" );
$editdata = file( "kadai_2-3.txt" );
   for ($k = 0; $k < count( $editdata ) ; $k++) {
   $editcontent = explode( "<>" , $editdata[$k] );
                   if ( $editcontent[0] == "$edit" ) {
				         for ( $h = 0; $h< count( $editcontent ); $h++){
						    $simEdit[$h] = mb_substr( $editcontent[$h] , 0 );
						}
						fclose( $fp );
					}
	}
}
?>

<?php
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $timestamp=time();
  $date=date( "Y/m/d/H:i");
  if( isset( $name ) && isset( $comment ) ){
  $fc = fopen( "kadai_2-3-count.txt" , "r" );
  $count = fgets( $fc );
  $count = $count + 1;
  fclose( $fc );
  
  $fc = fopen( "kadai_2-3-count.txt" , "w" );
  fwrite( $fc , $count );
  fclose( $fc );
  
  $fp = fopen( "kadai_2-3.txt", "a" );
  $number = $count-1;
  fwrite($fp, "{$number}<>{$name}<>{$comment}<>{$date}\r\n");
  fclose( $fp );
  }
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>mission_2-5.php</title>
</head>
<body>
<form action = "mission_2-5-1.php" method = "POST">
名前：<br />
  <input type="text" name="name" value = "<?php echo $simEdit[1] ?>"><br />
　　コメント：<br />
  <textarea name="comment" rows="8" ><?php echo $simEdit[2] ?></textarea><br />
  <br />
  <input type="submit" value="登録する" />
  </form>
  </body>
  </html>
  
 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>mission_2-5.php</title>
</head>
<body>
<form action= "mission_2-4.php" method="POST">
  削除番号を入力：<br />
  <input type="text" name="number"><br />
  <br />
  <input type="submit" value="削除する" />
  </form>
<br /><br />

 <?php
if( isset( $_POST['number'] ) == FALSE ){

echo "編集する項目の番号を入力してください。";
}
?>

<form action = "mission_2-5-1.php" method = "POST">
  編集番号を入力：<br />
   <input type="text" name="number"><br />
  <br />
  <input type="submit" value="編集する" />
  </form>

  </body>
  </html>
  
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
 