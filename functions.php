<?php
/*==================
  初期設定
===================*/
function postfolio_setup() {

/*-------------------
  titleタグ
--------------------*/
add_theme_support( 'title-tag' );

/*-------------------
  メニュー
--------------------*/
$locations = [
  'global' => 'Global Navigation'
];
register_nav_menus($locations);

/*-------------------
  アイキャッチ画像
--------------------*/
add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'postfolio_setup' );


/*==================
  スタイルの追加
===================*/
function portfolio_scripts() {
  // CSS
  wp_enqueue_style( 'portfolio-common', get_theme_file_uri() .'/assets/css/common.css' );
  wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap' );

  // JS

wp_enqueue_script( 'portfolio-app', get_theme_file_uri() .'/assets/js/app.js', ['jquery'], '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

/*========================
  カスタムメニュー
=========================*/
// li にクラスをつける
function addMenuClass ($classes) {
  $classes = array(
    'js-list',
    'l-nav__item'
  );
  return $classes;
}
add_filter( 'nav_menu_css_class', 'addMenuClass', 10, 2 );



/*========================
  カスタム投稿（つくったもの）
=========================*/
add_action('init', 'add_works');

function add_works() {
  $params = array(
    'labels' => array(
      'name' => '作ったもの',
      'singular_name' => '「作ったもの」',
      'add_new' => '新規追加',
      'add_new_item' => '「作ったもの」を新規追加',
      'edit_item' => '「作ったもの」を編集',
      'new_item' => '新規「作ったもの」',
      'all_items' => '「作ったもの」一覧',
      'view_item' => '「作ったもの」の説明を見る',
      'search_items' => '検索する',
      'not_found' => '「作ったもの」が見つかりませんでした。',
      'not_found_in_trash' => 'ゴミ箱内に「作ったもの」が見つかりませんでした。'
    ),
  'public' => true,
  'supports' => array(
    'title',
    'editor',
    'thumbnail'
  ),
);
 register_post_type('works', $params);
}

// カスタムメニュー自作
//カスタムフィールドのメタボックス
function add_custom_fields() {
  add_meta_box( 'meta_id', 'カスタムフィールド', 'insert_custom_fields', 'works', 'normal');
}
add_action('admin_menu', 'add_custom_fields');

//カスタムフィールドの入力エリア
function insert_custom_fields() {
  global $post;
  echo '<p>日付： <input type="text" name="date" value="'.get_post_meta($post->ID, 'date', true).'" size="50"></p>';
  echo '<p>期間： <input type="text" name="period" value="'.get_post_meta($post->ID, 'period', true).'" size="50"></p>';
  echo '<p>言語： <input type="text" name="program" value="'.get_post_meta($post->ID, 'program', true).'" size="50"></p>';
  echo '<p>github： <input type="text" name="github" value="'.get_post_meta($post->ID, 'github', true).'" size="50"></p>';

}

//カスタムフィールドの値を保存Ω
function save_custom_fields( $post_id ) {
  if(!empty($_POST['date'])) { //入力済みの場合
    update_post_meta($post_id, 'date', $_POST['date'] ); //値を保存
  } else { //未入力の場合
    delete_post_meta($post_id, 'date');
  }
  if(!empty($_POST['period'])) {
    update_post_meta($post_id, 'period', $_POST['period'] );
  } else {
    delete_post_meta($post_id, 'period');
  }
  if(!empty($_POST['program'])) {
    update_post_meta($post_id, 'program', $_POST['program'] );
  } else {
    delete_post_meta($post_id, 'program');
  }
  if(!empty($_POST['github'])) {
    update_post_meta($post_id, 'github', $_POST['github'] );
  } else {
    delete_post_meta($post_id, 'github');
  }

}
add_action('save_post', 'save_custom_fields');


// サムネイル
add_theme_support( 'post_thumbnails', array('works') );
// set_post_thumbnail_size(310, 193, true);


/*========================
  カスタム投稿（更新履歴）
=========================*/
add_action('init', 'add_update');

function add_update () {
    $params = array(
    'labels' => array(
      'name' => '更新履歴',
      'singular_name' => '「更新履歴」',
      'add_new' => '新規追加',
      'add_new_item' => '「更新履歴」を新規追加',
      'edit_item' => '「更新履歴」を編集',
      'new_item' => '新規「更新履歴」',
      'all_items' => '「更新履歴」一覧',
      'view_item' => '「更新履歴」の説明を見る',
      'search_items' => '検索する',
      'not_found' => '「更新履歴」が見つかりませんでした。',
      'not_found_in_trash' => 'ゴミ箱内に「更新履歴」が見つかりませんでした。'
    ),
      'public' => true,
      'supports' => array(
      'title',
  ),
);
  register_post_type('update', $params);
}

// 「タイトルを入力」の文字変更
function change_default_title($title) {
  if (get_current_screen()->post_type == 'update') {
    return $title = '更新履歴を入力';
  }
}
add_filter('enter_title_here', 'change_default_title');
