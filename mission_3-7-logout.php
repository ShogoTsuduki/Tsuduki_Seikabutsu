<?php
require_once ( dirname(__FILE__) . '/mission_3-7-functions.php' );
require_logined_session();
// セッション用Cookieの破棄
setcookie(session_name(), '', 1);
// セッションファイルの破棄
session_destroy();
// ログアウト完了後にmission_3-7-login.phpに遷移
header ('Location: http://co-757.it.99sv-coco.com/mission_3-7-login.php');
?>