<?php
function theme_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_setup' );

// ウィジェット
register_sidebar();

// RSSフィード
add_theme_support( 'automatic-feed-links' );

// カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );

// カスタムヘッダー
add_theme_support( 'custom-header', array(
	'height'        => 250,
	'width'         => 1500,
	'default-image' => '%s/header-1500x250.jpg',
	'header-text'   => false
) );

// 概要(抜粋)の文字数
function my_length( $length ) {
	return 70;
}
add_filter( 'excerpt_mblength', 'my_length' );

// 概要(抜粋)の省略記号
function my_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'my_more' );

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );

// リセット
function theme_remove_action_head(){
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	add_filter( 'emoji_svg_url', '__return_false' );
	remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles',     'print_emoji_styles' );
	remove_action( 'admin_print_styles',  'print_emoji_styles' );
}

function theme_scripts(){
	wp_enqueue_style( 'theme-font', 'https://fonts.googleapis.com/css?family=Acme', array(), null );
	wp_enqueue_style( 'theme-fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css', array( 'theme-font' ), null );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'theme-fontawesome' ), null );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
