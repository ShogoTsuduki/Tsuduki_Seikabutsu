<?php
//ログイン状態によってリダイレクト
//初回時または失敗時にはヘッダを送信してexitする

function require_unlogined_session () {
    // セッション開始
    @session_start();
    // ログインしていれば
    if (isset($_SESSION["name"])) {
        header('Location: http://co-757.it.99sv-coco.com/mission_3-7keizi.php');
        exit;
    }
}
function require_logined_session() {
    // セッション開始
    @session_start();
    // ログインしていなければmission_3-7-login.phpに遷移
    if (!isset($_SESSION["name"])) {
        header('Location: http://co-757.it.99sv-coco.com/mission_3-7-login.php');
        exit;
    }
}
?>