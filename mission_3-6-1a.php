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
<form method="POST">
この内容で登録してもよろしいですか？<br />
名前：<br />
  <input type="text" name="name" value = <?php echo $data1; ?> ><br />
  <input type="hidden" name="password" value = <?php  echo $data2; ?> ><br />
  メールアドレス：<br />
   <input type="text" name="mail" value = <?php echo $data3; ?> ><br />
  <br />
  <input type="submit" formaction= "mission_3-6-2.php" value="登録する" /><br />
  <input type="submit" formaction= "mission_3-6-1b.php" value="修正する" />
  
  
  </form>
  </body>
  </html>
