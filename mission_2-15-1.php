 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>mission</title>
</head>
<body>
<form action= "mission_2-15-2.php" method="POST">
名前：<br />
  <input type="text" name="name"><br />
　　コメント：<br />
  <textarea name="comment" rows="8"></textarea><br />
  <br />
  <input type="submit" value="登録する" />
  </form>
  </body>
  </html>
  
<?php
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
$pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);

$sql = 'SELECT*FROM missiondata2';

$result = $pdo->query($sql); //実行・結果取得
//出力
foreach ( $result as $row ){
 
echo $row['number'].',';
echo $row['name'].',';
echo $row['comment'].',';
echo $row['time'].'<br>';
}
?>