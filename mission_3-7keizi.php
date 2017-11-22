<?php
require_once (dirname(__FILE__) . '/mission_3-7-functions.php');
require_logined_session();
?>

 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>mission</title>
</head>
<body>
<form method="POST">
名前：<br />
  <input type="text" name="name" value = "<?php echo $_SESSION['name'] ?>" readonly = "readonly" ><br />
　　コメント：<br />
  <textarea name="comment" rows="8"></textarea><br />
  <br />
  <input type="submit" formaction= "mission_3-7keizi-2.php" value="登録する" />
  <br /><br /><br />
  <input type="submit" formaction= "mission_3-7-logout.php" value="ログアウトする" />
  </form>
  </body>
  </html>
  
<?php
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
$pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);

$sql = 'SELECT*FROM keizidata1';

$result = $pdo->query($sql); //実行・結果取得
//出力
foreach ( $result as $row ){
 
echo $row['number'].',';
echo $row['name'].',';
echo $row['comment'].',';
echo $row['time'].'<br>';
}
?>