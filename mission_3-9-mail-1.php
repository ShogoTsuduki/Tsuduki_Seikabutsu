<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
	  $username = $_POST['name'];
        $password = $_POST['password'];
        $user = 'co-757.it.3919.c';
        $pass = 'GJuy87cy';
        $pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);
		$sql = 'SELECT*FROM userdata2 where name = :name';
		$prepare = $pdo->prepare($sql);
		$prepare -> bindParam( ':name' , $_POST['name'] , PDO::PARAM_STR );
		$prepare->execute();
		
		$result = $prepare->fetch(PDO::FETCH_ASSOC);
	  mb_internal_encoding("UTF-8");
      $to = $_POST['mail'];
      $title = 掲示板ユーザー登録;
      $content = "ご登録ありがとうございます。".$username."様のパスワードは".$password."です。掲示板ご利用の際は以下のURLよりログインしてください。http://co-757.it.99sv-coco.com/mission_3-7keizi.php";
	  
      if(mb_send_mail($to, $title, $content)){
        echo "メールを送信しました";
      } else {
        echo "メールの送信に失敗しました";
      };
    ?>
  </body>
</html>

<?php
header ('Location: http://co-757.it.99sv-coco.com/mission_3-7-login.php');
?>