<?php
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);
	
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}

$sql = 'CREATE TABLE userdata2 (
number int(10) NOT NULL AUTO_INCREMENT,
name VARCHAR(20),
password VARCHAR(100),
mail VARCHAR(100),
ID VARCHAR(100),
PRIMARY KEY(number)
);';

$result = $pdo->query($sql);

echo "テーブルを作成しました。";
?>