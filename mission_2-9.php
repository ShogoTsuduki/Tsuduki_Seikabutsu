<?php
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);
	
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}

$sql = 'SHOW TABLES';

$result = $pdo->query($sql);

foreach ( $result as $row ){
echo $row[0];
echo'<br>';
}
?>