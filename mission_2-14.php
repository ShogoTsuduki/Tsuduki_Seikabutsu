<?php
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
$pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);

// DELETE文を変数に格納
$sql = "DELETE FROM testdata3 where number = :number";
 
// 削除する値と該当のIDは空のまま、SQL実行の準備をする
$result = $pdo->prepare($sql);
 
// 削除する該当のnumberを配列に格納する
$params = array(':number' => 1);
 
// 削除する値と該当のnumberが入った変数をexecuteにセットしてSQLを実行
$result->execute($params);
 
// 削除完了のメッセージ
echo '削除完了しました';

?>