<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php echo esc_attr( bloginfo( 'charset' ) )?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body<?php body_class(); ?>>
	<header>
		<div class="siteinfo">
			<div class="container">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<p><?php bloginfo( 'description' ); ?></p>
			</div>
		</div>
		<?php if( !is_front_page() ): ?>
		<?php if( get_header_image() ): ?>
			<img src="<?php header_image(); ?>" width="<?php get_custom_header()->width; ?>" height="<?php get_custom_header()->header; ?>" alt="">
		<?php endif; ?>
		<?php endif; ?>
		<nav>
			<div class="container">
				<?php wp_nav_menu( 'theme_location=navigation' ); ?>
			</div>
		</nav>
	</header>
