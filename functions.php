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
function theme_support_setup() {
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
function add_files() {
    /* ----- app.css ----- */
    wp_enqueue_style('swiper', get_template_directory_uri() . '/public/css/swiper.min.css', "", '5.3.1');

    /* ----- app.css ----- */
    wp_enqueue_style('app', get_template_directory_uri() . '/public/css/app.css', "", '20210220');

    /* ----- WordPress提供のjQueryを無効化 ----- */
	wp_deregister_script('jquery');

    /* ----- jQuery読込 ----- */
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', "", "20210220", false);
    
    /* ----- swiper.min.jsの読込 ----- */
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/public/js/swiper.min.js', array('jquery'), '5.3.1', true );

    /* ----- main.js ----- */
    wp_enqueue_script( 'common-script' ,get_template_directory_uri() . '/public/js/main.js', array('jquery'), false, true);

    wp_enqueue_script( 'ajaxzip3', 'https://ajaxzip3.github.io/ajaxzip3.js', array( 'jquery' ), '20210225', true );

    wp_enqueue_script( 'autozip', get_stylesheet_directory_uri() . '/public/js/autozip.js', array( 'jquery' ), '20210225', true );

    
}
add_action('wp_enqueue_scripts', 'add_files');


/* -------------------------
 抜粋記事の文字数制限指定
--------------------------- */
function custom_excerpt_length($length)
{
    return 80;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
