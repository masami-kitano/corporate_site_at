<?php

/* -------------------------
 ツールバーの削除
--------------------------- */
add_filter('show_admin_bar', '__return_false');

/* -------------------------
 ウィジェットエリアを定義 
--------------------------- */
register_sidebar(array(
    'name' => 'ARKTech Sidebar',
    'id' => 'primary-widget-area',
    'description' => 'サイドバーに表示されるウィジェットエリアです。',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

/* -------------------------
 テーマサポート設定
--------------------------- */
function theme_support_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'theme_support_setup');

/* -------------------------
 CSS/JSの読込
--------------------------- */
function add_files()
{
    /* ----- app.css ----- */
    wp_enqueue_style('swiper', get_template_directory_uri() . '/public/css/swiper.min.css', "", '5.3.1');

    /* ----- app.css ----- */
    wp_enqueue_style('app', get_template_directory_uri() . '/public/css/app.css', "", '20210220');

    /* ----- WordPress提供のjQueryを無効化 ----- */
    wp_deregister_script('jquery');

    /* ----- jQuery読込 ----- */
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', "", "20210220", false);

    /* ----- swiper.min.jsの読込 ----- */
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/public/js/swiper.min.js', array('jquery'), '5.3.1', true);

    /* ----- main.js ----- */
    wp_enqueue_script('common-script', get_template_directory_uri() . '/public/js/main.js', array('jquery'), false, true);

    wp_enqueue_script('ajaxzip3', 'https://ajaxzip3.github.io/ajaxzip3.js', array('jquery'), '20210225', true);

    // wp_enqueue_script( 'autozip', get_stylesheet_directory_uri() . '/public/js/autozip.js', array( 'jquery' ), '20210225', true );


}
add_action('wp_enqueue_scripts', 'add_files');

/* -------------------------
 カスタム投稿タイプの定義
--------------------------- */
add_action('init', 'custom_product_init');
function custom_product_init() 
{
	$labels = array(
		'name' => _x('製品', 'post type general name'),
		'singular_name' => _x('製品', 'post type singular name'),
		'all_items' => __('製品一覧'),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,//管理画面・サイトへの表示の有無
		'publicly_queryable' => true,
		'show_ui' => true, //管理画面のメニューへの表示の有無
		'menu_position' => 5,//管理メニューでの表示位置
		'query_var' => true,
		'rewrite' => true,//パーマリンク設定
		'capability_type' => 'post',//権限タイプ
		'map_meta_cap' => true,//デフォのメタ情報処理を利用の有無
		'hierarchical' => false,//階層(親)の有無
		'menu_icon' => 'dashicons-admin-customizer',//アイコン画像
		'supports' => array('title','editor','thumbnail','custom-fields','excerpt','trackbacks','comments','revisions','page-attributes'),
		'has_archive' => true//アーカイブの有無
	); 
	register_post_type('product',$args);
}

/* -------------------------
 カスタム分類(カスタムタクソノミー)
--------------------------- */
function custom_product_taxonomies() {

	$labels = array(
		"name" => _x( "製品カテゴリー", "taxonomy general name" ),
		"singular_name" => _x( "製品カテゴリー", "taxonomy singular name" ),
	);

	$args = array(
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,//true:カテゴリー・false:タグ
		"show_ui" => true,//管理画面のメニューへの表示の有無
		"show_in_menu" => true,
		"show_in_nav_menus" => true,//「外観」＞「メニュー」への表示の有無
		"query_var" => true,//wp_queryでの使用の可否
		"rewrite" => array( 'slug' => 'product_cat', 'with_front' => true, ),//パーマリンクの設定
		"show_admin_column" => false,//管理画面の投稿一覧への表示の有無
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,//クイック編集への表示の可否
	);
	register_taxonomy( "product_cat", array( "product" ), $args );

}

add_action( 'init', 'custom_product_taxonomies' );

/* -------------------------
 抜粋記事の文字数制限指定
--------------------------- */
function custom_excerpt_length($length)
{
    return 80;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
