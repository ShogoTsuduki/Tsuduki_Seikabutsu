<?php
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
$pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);

$sql = 'SELECT*FROM missiondata1';

$result = $pdo->query($sql); //実行・結果取得
//出力
foreach ( $result as $row ){
echo $row['number'].',';
echo $row['name'].',';
echo $row['comment'].',';
echo $row['time'].',';
echo テーブルは以上です。;
}
?>