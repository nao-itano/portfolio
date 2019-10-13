<?php
/* Template Name: 入力確認画面 */
  session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>
      <section>
        <div class="l-container l-contact-page">
          <h1 class="heading -primary -form">入力確認</h1>
        <dl class="conf__content">
          <dt class="form__title">お名前</dt>
          <dd  class="form__content">
          <?php echo esc_html($_SESSION['post']['your_name']); ?>
          </dd>
          <dt class="form__title">メールアドレス</dt>
          <dd  class="form__content">
          <?php echo esc_html($_SESSION['post']['your_email']); ?>
          </dd>
          <dt class="form__title">お問い合わせ内容</dt>
          <dd  class="form__content">
          <?php echo nl2br(esc_html($_SESSION['post']['message']), false) ; ?>
          </dd>
      </dl>

      <ul>
        <li><a href="http://nao-itano.com/contact/" class="button -primary -conf">戻る</a></li>
        <li><a href="http://nao-itano.com/send/" class="button -primary -conf">送信</a></li>
      </ul>

        </div>
        <!-- /.l-container -->
      </section>
<?php get_footer(); ?>
