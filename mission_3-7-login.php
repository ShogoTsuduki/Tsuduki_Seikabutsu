<?php
require_once( dirname(__FILE__) . '/mission_3-7-functions.php' );
require_unlogined_session();

// エラーを格納する配列を初期化
$errors[] = "";

// POSTのときのみ実行
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ( $username === "" || $password ==="" ) {
        $errors[] = 'ユーザ名またはパスワードが入力されていません。';
    } else {

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
		
		if( $password = $result["password"] ) {
            // 認証が成功
			 // セッションIDの追跡を防ぐ
            session_regenerate_id(true);
            //ユーザ名をセット
            $_SESSION['name'] = $username;
            // ログイン後に/に遷移
            header ('Location: http://co-757.it.99sv-coco.com/mission_3-7keizi.php');
            exit;
            }
        // 認証が失敗
        $errors[] = "ユーザ名またはパスワードが違います";
    }
}
?>

<html>
<head>
<title>ログインページ</title>
</head>
<body>
<h1>ログインしてください</h1>

<form method="post" >
    <p>ユーザ名: <input type="text" name="name" value="<?php echo $username = $_POST['name']; ?>"></p>
    <p>パスワード: <input type="password" name="password" value=""></p>
    <p><input type="submit" name="submit" formaction="http://co-757.it.99sv-coco.com/mission_3-7-login.php" value="ログイン"></p>
	<br /><br /><br /><br /><br />
	<p>＊新規登録の方はこちら！: <br /><input type="submit" name="submit" formaction="http://co-757.it.99sv-coco.com/mission_3-6-1.php" value="登録する"></p><br />
	<p>＊パスワードを忘れてしまった方はこちら！: <br /><input type="submit" name="submit" formaction="http://co-757.it.99sv-coco.com/mission_3-10-forget-1.php" value="調べる"></p>
</body>
</html>		
