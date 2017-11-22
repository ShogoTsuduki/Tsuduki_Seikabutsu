<?php
$data1 = $_POST['name'];
$data2 = $_POST['password'];
$data3 = $_POST['mail'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>登録フォーム</title>
</head>
<body>
<form action= "mission_3-6-1a.php" method="POST">
名前：<br />
  <input type="text" name="name" value = <?php echo $data1; ?> ><br />
　　パスワード：8文字以内の半角英数字で入力してくだい。<br />
  <input type="password" name="password" maxlength = "8" value = <?php echo $data2; ?> ><br />
  メールアドレス：<br />
   <input type="text" name="mail" value = <?php echo $data3; ?> ><br />
  <br />
  <input type="submit" value="登録する" />
  </form>
  </body>
  </html>