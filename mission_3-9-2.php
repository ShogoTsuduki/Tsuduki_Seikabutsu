<?php
$data1 = $_POST['name'];
$data2 = $_POST['comment'];
$data3 = $_FILES['image'];
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);
	
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}

$sql = 'INSERT INTO keizidata2 ( name, comment, image, time) VALUES( :name, :comment, :image, now() )';

$result = $pdo->prepare($sql);

$result->bindParam( ':name' , $data1 , PDO::PARAM_STR );
$result->bindParam( ':comment' , $data2 , PDO::PARAM_STR );
$result->bindParam( ':image' , $data3 , PDO::PARAM_STR );


$result->execute();

//登録完了のメッセージ
echo '登録完了しました';
header('Location: http://co-757.it.99sv-coco.com/mission_3-9-1.php');
 exit();
?>