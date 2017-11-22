<?php
$data1 = $_POST['name'];
$data2 = $_POST['password'];
$data3 = $_POST['mail'];
$ID = uniqid();
$user = 'co-757.it.3919.c';
$pass = 'GJuy87cy';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);
	
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}

$sql = 'INSERT INTO userdata2 ( name, password, mail, ID ) VALUES( :name, :password, :mail, :ID )';

$result = $pdo->prepare($sql);

$result->bindParam( ':name' , $data1 , PDO::PARAM_STR );
$result->bindParam( ':password' , $data2 , PDO::PARAM_STR );
$result->bindParam( ':mail' , $data3 , PDO::PARAM_STR );
$result->bindParam( ':ID' , $ID , PDO::PARAM_STR );


$result->execute();

//登録完了のメッセージ
echo '登録完了しました。入力されたアドレス宛にメールを送るには以下のボタンを押してください。';
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>登録完了</title>
</head>
<body>
<form method="POST">
  <input type="hidden" name="name" value = "<?php echo $data1; ?>" >
  <input type="hidden" name="password" value = "<?php echo $data2; ?>" >
  <input type="hidden" name="mail" value = "<?php echo $data3; ?>" >
  
  <input type="submit" formaction= "mission_3-9-mail-1.php" value="送信する" />
  </form>
  </body>
  </html>