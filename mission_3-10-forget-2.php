<?php

$user = 'co-757.it.3919.c';
        $pass = 'GJuy87cy';
		
		$username = $_POST['name'];
		$mail = $_POST['mail'];
        $pdo = new PDO('mysql:host=localhost;dbname=co_757_it_3919_com', $user, $pass);
		$sql = 'SELECT*FROM userdata2 where name = :name';
		$prepare = $pdo->prepare($sql);
		$prepare -> bindParam( ':name' , $username , PDO::PARAM_STR );
		$prepare->execute();
		
		$result = $prepare->fetch(PDO::FETCH_ASSOC);
		if( $username = $result["name"] ) {
            // 認証が成功
		$password = $result["password"];
		mb_internal_encoding("UTF-8");
		$to = $_POST['mail'];
        $title = パスワード通知;
        $content = $username."様のパスワードは".$password."です。以下のURLよりログインしてください。http://co-757.it.99sv-coco.com/mission_3-7keizi.php";
	  
        if(mb_send_mail($to, $title, $content)){
        echo "メールを送信しました";
      } else {
        echo "メールの送信に失敗しました";
        };
		// 認証が失敗
        $errors = "ユーザ名またはパスワードが違います";
    }
	If(isset($errors)){
	echo $errors;
	}
	header ('Location: http://co-757.it.99sv-coco.com/mission_3-7-login.php');
?>