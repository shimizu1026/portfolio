<?php
function custom_theme_setup() {
    //head内にフィードリンクを出力
    add_theme_support('automatic-feed-links');
    //コンテンツ幅をセット
    if (! isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_set_theme', 'custom_theme_setup');

    //アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size('large');
    
//全ページ読み込むものはここに書く
function add_files() {
    //リセットCSS
    wp_enqueue_style('reset-style', get_theme_file_uri('./resources/styles/destyle.css'));
    //common.css
    wp_enqueue_style('common-style', get_theme_file_uri('./resources/styles/common.css'));
    //googlefont
    wp_enqueue_style('google-font-style', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Noto+Sans+JP:wght@400;700&display=swap', array(), 'false', 'all');
    //JavaScript
      wp_enqueue_script('base-script', get_theme_file_uri('script.js'), array('scroll-script'), false, true);
    //Lenis
      wp_enqueue_script('scroll-script', 'https://unpkg.com/lenis@1.0.45/dist/lenis.min.js', array(), false, true);
} 
add_action('wp_enqueue_scripts', 'add_files');

function enqueue_scripts() {
    //Swiper
    //style.css
    if (is_home() || is_front_page()) {
    wp_enqueue_style('base-style', get_theme_file_uri('./resources/styles/style.css'), array('swiper-style'));
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
    wp_enqueue_script('swiper-bundle-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('swiper-js', get_theme_file_uri('/swiper.js'), array('swiper-bundle-js'), false, true);
    return;
}
    //404用 style.css
    if ( is_404()) {
    wp_enqueue_style('404-style', get_theme_file_uri('./resources/styles/404.css'));
    return;
}
    //news.css
    if ( is_single()) {
    wp_enqueue_style('news-style', get_theme_file_uri('./resources/styles/news.css'));
    return;
}
    //archive.css
    if (is_page('news') || is_category()) {
    wp_enqueue_style('archive-style', get_theme_file_uri('./resources/styles/archive.css'));
    return;
}
    //service.css
    if (is_page('service')) {
    wp_enqueue_style('service-style', get_theme_file_uri('./resources/styles/service.css'));
    return;
}
    //company.css
    if (is_page('company')) {
    wp_enqueue_style('company-style', get_theme_file_uri('./resources/styles/company.css'));
    return;
}
    //works.css
    if (is_page('works')) {
    wp_enqueue_style('works-style', get_theme_file_uri('./resources/styles/works.css'));
    return;
}
    //recruit.css
    if (is_page('recruit')) {
    wp_enqueue_style('recruit-style', get_theme_file_uri('./resources/styles/recruit.css'));
    return;
}
    //contact.css
    if (is_page('contact')) {
    wp_enqueue_style('contact-style', get_theme_file_uri('./resources/styles/contact.css'));
    return;
}
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/* OGP設定 */
function my_meta_ogp()
{
if (is_front_page() || is_home() || is_singular()) {
 
/*初期設定*/
 
// 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
$ogp_image = '/resources/images/dummy.jpg';
// Twitterのアカウント名 (@xxx)
$twitter_site = '@pon-design';
// Twitterカードの種類（summary_large_image または summary を指定）
$twitter_card = 'summary_large_image';
// Facebook APP ID
$facebook_app_id = 'pon-design';
 
/*初期設定 ここまで*/
 
global $post;
$ogp_title = '';
$ogp_description = '';
$ogp_url = '';
$html = '';
if (is_singular()) {
// 記事＆固定ページ
setup_postdata($post);
$ogp_title = $post->post_title;
$ogp_description = mb_substr(get_the_excerpt(), 0, 100);
$ogp_url = get_permalink();
wp_reset_postdata();
} elseif (is_front_page() || is_home()) {
// トップページ
$ogp_title = get_bloginfo('name');
$ogp_description = get_bloginfo('description');
$ogp_url = home_url();
}
 
// og:type
$ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';
 
// og:image
if (is_singular() && has_post_thumbnail()) {
$ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
$ogp_image = $ps_thumb[0];
}
 
// 出力するOGPタグをまとめる
$html = "\n";
$html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
$html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
$html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
$html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
$html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
$html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
$html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
$html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
$html .= '<meta property="og:locale" content="ja_JP">' . "\n";
 
if ($facebook_app_id != "") {
$html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
}
 
echo $html;
}
}
// headタグ内にOGPを出力する
add_action('wp_head', 'my_meta_ogp');

/* ---------- カスタム投稿タイプを追加 ---------- */
add_action( 'init', 'create_post_type' );

 function create_post_type() {
//制作実績のカスタム投稿
  register_post_type(
    'works',
    array(
      'label' => '制作実績',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 6,
      'supports' => array(
        'title',
        'editor',
        'revisions',
        'thumbnail',
      ),
    )
  );
//制作実績のタクソノミー
  register_taxonomy( // カスタムタクソノミーの追加関数
    'works-cat', // カテゴリーの名前（半角英数字の小文字）
    'works',     // カテゴリーを追加したいカスタム投稿タイプ名
    array(      // オプション（以下
      'label' => 'カテゴリー', // 表示名称
      'public' => true, // 管理画面に表示するかどうかの指定
      'hierarchical' => true, // 階層を持たせるかどうか
      'show_in_rest' => true, // REST APIの有効化。ブロックエディタの有効化。
    )
  );
}
add_action( 'init', 'create_post_type' );

function custom_breadcrumb() {
  if (is_single()) {
    echo '<ol><li><a href="'.esc_url( home_url() ).'" >HOME</a></li><li><a href="'.esc_url( home_url('news') ).'" >NEWS</a></li>';
  } else {
  echo '<ol><li><a href="'.esc_url( home_url() ).'" >HOME</a></li>';
  }
  if (is_singular()):
    the_title('<li>', '</li>');
  endif;
  echo '</ol>';
}
