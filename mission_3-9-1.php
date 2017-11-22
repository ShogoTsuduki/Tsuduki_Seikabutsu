 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>mission</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
名前：<br />
  <input type="text" name="name" ><br />
　　コメント：<br />
  <textarea name="comment" rows="8"></textarea><br />
  <input type="file" name="image" ><br />
  <br />
  <input type="submit" formaction= "mission_3-9-2.php" value="登録する" />
  </form>
  </body>
  </html>
  
<?php
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
$pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);

$sql = 'SELECT*FROM keizidata2';

$result = $pdo->query($sql); //実行・結果取得
//出力
foreach ( $result as $row ){
 
echo $row['number'].',';
echo $row['name'].',';
echo $row['comment'].',';
echo "<img src=\"keizidata2?number = 3\">".',';
echo $row['time'].'<br>';
}
?>