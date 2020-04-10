<?php

function theme_setup() {
  add_theme_support('title-tag');

  add_theme_support(
  'custom-logo',
  array(
    'height'      => 38,
    'width'       => 72,
    'flex-height' => true,
    'flex-width'  => true
    )
  );
  register_nav_menus(
    array(
      'global-nav' =>'グローバルナビ',
      'footer-nav-1' =>'フッターナビ1',
      'footer-nav-2' =>'フッターナビ2',
      'footer-nav-3' =>'フッターナビ3'
    )
  );

  theme_remove_action_head();
}
add_action('after_setup_theme','theme_setup');

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
  wp_enqueue_style('theme-reset', get_template_directory_uri(). '/css/normalize.css', array(), null );
  wp_enqueue_style('theme-font', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array('theme-reset'), null );
  wp_enqueue_style('theme-slider-style', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array('theme-reset'), null );
  wp_enqueue_style('theme-style', get_stylesheet_uri(), array('theme-slider-style'),null );

  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');

  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
  wp_enqueue_script('slider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), null, true);
  wp_enqueue_script('theme-script', get_template_directory_uri(). '/js/script.js', array('slider'), null,true);
}
add_action('wp_enqueue_scripts','theme_scripts');
