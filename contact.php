<?php
  /* Template Name: お問い合わせ */
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
    <section class="l-section contact" id="contact-id">
      <div class="text-center l-container -narrow">
        <h2 class="heading -primary">お問い合わせ</h2>
          <form action="<?php echo esc_url(get_permalink(get_page_by_path('set') -> ID)); ?>" method='post' class="l-form">
            <dl>
              <dt class="form__title"><label for="your_name">お名前</label></dt>
              <dd class="form__content"><input type="text" name="your_name" id="your_name" class="form__size"　value="<?php if(isset($_SESSION['post']['your_naem'])) { echo esc_attr($_SESSION['post']['your_naem']);} ?>">
              <?php if ( isset($_SESSION['error']['your_name'] )) : ?>
              <p class="error-message"><?php echo esc_html( $_SESSION['error']['your_name']); ?></p>
              <?php endif; ?>
            </dd>

              <dt class="form__title"><label for="your_email"> メールアドレス</label></dt>
              <dd class="form__content"><input type="your_email" name="your_email" class="form__size" value="<?php if(isset($_SESSION['post']['your_email'])) { echo esc_attr($_SESSION['post']['your_email']);} ?>">
              <?php if ( isset($_SESSION['error']['your_email'] )) : ?>
              <p class="error-message"><?php echo esc_html( $_SESSION['error']['your_email']); ?></p>
              <?php endif; ?></dd>

              <dt class="form__title"><label for="message">お問い合わせ内容</label></dt>
              <dd class="form__content"><textarea name="message" id="message" cols="40" rows="10"><?php if(isset($_SESSION['post']['message'])) { echo esc_attr($_SESSION['post']['message']);} ?></textarea>
              <?php if ( isset($_SESSION['error']['message'] )) : ?>
              <p class="error-message"><?php echo esc_html( $_SESSION['error']['message']); ?></p>
              <?php endif; ?>
            </dd>
            </dl>
            <p class="l-form__button"><input type="submit" class="form__button" value="入力確認画面へ"></p>
          </form>
          <p><a href="http://nao-itano.com/" class="button -primary -contact">トップページへ戻る</a></p>
      </div>
      <!-- /.l-container -narrow -->
    </section>
    <!-- /.l-section -->
<?php get_footer(); ?>
