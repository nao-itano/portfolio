<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="l-header">
    <div class="l-container">
      <h1 class="l-header__title">
        <a href="<?php echo esc_url(home_url()) ?>" class="js-logo title__logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="板野なお"></a>
        <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
      </h1>


      <nav class="js-nav l-header__nav">
        <h2 class="screen-reader-text">サイト内メニュー</h2>
        <button class="js-button-hamburger button-hamburger" type="button" aria-controls="global-nav" aria-expanded="false">
          <span class="hamburger">
            <span class="screen-reader-text">メニューを開閉する</span>
          </span>
        </button>
        <?php
          $args = [
            'theme_location' => 'global',
            'menu_class' => 'l-global-nav js-nav-list',
            'menu_id' => 'global-nav',
            'container' => 'false'
          ];
          wp_nav_menu($args);

          ?>

        <!-- <ul id="global-nav" class="l-global-nav js-nav-list">
          <li class="js-list l-nav__item"><a href="#profile-id">プロフィール</a></li>
          <li class="js-list l-nav__item"><a href="#skill-id">できること</a></li>
          <li class="js-list l-nav__item"><a href="#work-id">作ったもの</a></li>
          <li class="js-list l-nav__item"><a href="#contact-id">お問い合わせ</a></li>
        </ul> -->
      </nav>
      <p>
        <a href="https://github.com/nao-itano" target="_blank" class="l-header__icon"><img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/github-logo.png" alt="github" width="35px" height="35px"></a>
      </p>
    </div>
    <!-- /.l-container -->
  </header>
