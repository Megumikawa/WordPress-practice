<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php echo esc_attr( bloginfo('charset'))?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head();?>
	</head>
	<body>
		<header>
			<div class="toplogo">
				<a href="<?php echo esc_url( home_url( '/' ) );?>">
					<?php
					if (has_custom_logo()) {
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
						$logo = '<img src="' . $image[0] . '" width="' . $image[1] . '" height="' . $image[2] . '" alt="' . get_bloginfo('name') . '">';
						echo $logo;
					}
					?>
				</a>
			</div>
			<nav class="gnav">
				<?php wp_nav_menu( array('theme_location' => 'global-nav'));?>
			</nav>
		</header>
