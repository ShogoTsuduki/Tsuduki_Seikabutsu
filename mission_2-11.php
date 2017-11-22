<?php
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);
	
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}

$sql = 'INSERT INTO testdata3 ( number, name, comment, time) VALUES( :number, :name, :comment, now() )';

$result = $pdo->prepare($sql);
$params = array(':number' => '1' , ':name' => 'minmin' , ':comment' => 'testcomment');

$result->execute($params);

//登録完了のメッセージ
echo '登録完了しました';
?>