<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php echo esc_attr( bloginfo('charset'))?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
  </head>

  <body>
    <header>
      <div class="toplogo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="HOTEL IMPERIAL RESORT TOKYO" width="306" height="49"></a></div>
      <nav class="gnav">
        <?php wp_nav_menu( array('theme_location' => 'global-nav'));?>
      </nav>
    </header>
