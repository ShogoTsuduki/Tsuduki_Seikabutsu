<?php
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
$pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);

// UPDATE文を変数に格納
$sql = "UPDATE testdata3 SET name = :name WHERE number = :number";
 
// 更新する値と該当のIDは空のまま、SQL実行の準備をする
$result = $pdo->prepare($sql);
 
// 更新する値と該当のIDを配列に格納する
$params = array(':name' => 'nannan', ':number' => '1');
 
// 更新する値と該当のIDが入った変数をexecuteにセットしてSQLを実行
$result->execute($params);
 
// 更新完了のメッセージ
echo '更新完了しました';
?>