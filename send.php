<?php
/* Template Name: メール送信 */
session_start();

//日本語設定
mb_language('ja');
mb_internal_encoding('utf-8');

//メールアドレスが空の場合はリダイレクト
if ( empty($_SESSION['post']['your_email'] )) {
  header('Location: ./');
  exit();
}

//メール送信の準備
$to = 'np10320@gmail.com';
$subject = '【ポートフォリオ】お問い合わせがありました';
$message = $_SESSION['post']['message'];
$from = mb_encode_mimeheader($_SESSION['post']['your_name']) . '<' . $_SESSION['post']['your_email'] . '>';


//メール送信
$result = mb_send_mail($to, $subject, $message, 'From:' . $from);


//送信成功
if ($result) {
  header('Location: http://nao-itano.com/thanks/');
  //セッションの中身を空にする
$_SESSION = [];
//クッキーにある整理券を削除
setcookie( session_name(), '', time() -3600);
//セッションを破壊
session_destroy();
} else {
  //送信失敗
  header('Location: http://nao-itano.com/error/');
}
?>
