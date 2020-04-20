<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>

<meta name="viewport" content="width=device-width">

<link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv-printshiv.min.js"></script>

<script src="http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

<style>
article img	{width: 100%}
</style>
<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
<div class="siteinfo">
<div class="container">
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
<p><?php bloginfo( 'description' ); ?></p>
</div>
</div>


<?php if( get_header_image() ): ?>
<img src="<?php header_image(); ?>"
 width="<?php echo get_custom_header()->width; ?>"
 height="<?php echo get_custom_header()->height; ?>"
 alt="">
<?php endif; ?>


<nav>
<div class="container">
<?php wp_nav_menu( 'theme_location=navigation' ); ?>
</div>
</nav>
</header>

