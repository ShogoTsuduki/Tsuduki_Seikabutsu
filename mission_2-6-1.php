<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>編集削除用フォームパスワード認証</title>
</head>
<body>
<?php
    $pass = "1234";                // パスワード設定
    if($_POST['pass'] !== $pass) {        // パスワードチェック
        // パスワード不一致（パスワード入力フォーム表示）
		echo "パスワードが間違っています！";
        echo '<form action="mission_2-6-1.php" method="POST">';
        echo 'パスワードを入力してください。<br />';
        echo '<input type="password" size="5" name="pass" value="">';
        echo '<input type="submit" value="送信"><br />';
        echo '</form>';
	  }
else {
        // パスワード一致
        echo 'ようこそ！！';
		header("Location: http://co-757.it.99sv-coco.com/mission_2-5-form.php");
        exit();
    }
?>

  </form>
  </body>
  </html>