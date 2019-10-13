<?php
  /* Template Name: エラーチェック */
  session_start();

  // ダイレクトでアクセスされてないか
  if ( empty($_POST) ) {
    header('Location: index.php');
    exit();
  }

  $_SESSION['error'] = [];

   //名前のエラーチェック
    if ( $_POST['your_name'] == '' ) {
        $_SESSION['error']['your_name'] = 'お名前を入力してください。';
    }
    //メールの形式チェック
    if ( !filter_var($_POST['your_email'], FILTER_VALIDATE_EMAIL) ) {
        $_SESSION['error']['your_email'] = 'メールアドレスの形式で入力してください。';
    }
    //メールの必須項目チェック
    if ( $_POST['your_email'] == '') {
      $_SESSION['error']['your_email'] = 'メールアドレスを入力してください。';
    }
    //お問い合わせ内容の必須項目チェック
    if ( $_POST['message'] == '') {
      $_SESSION['error']['message'] = 'お問い合わせ内容を入力してください。';
    }


    $_SESSION['post'] = $_POST;

    // print_r($_SESSION);


    //エラーが無い
    if ( empty($_SESSION['error']) ) {
        header('Location: http://nao-itano.com/conf/');
    //エラーがある
    } else {
      header('Location: http://nao-itano.com/contact/');
    }
    exit();
