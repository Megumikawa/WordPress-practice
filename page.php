<?php get_header();?>

<?php
if ( shortcode_exists('wp-structuring-markup-breadcrumb' ) ){
  echo '<div class="breadcrumb">' . do_shortcode('[wp-structuring-markup-breadcrumb]') .'</div>';
}

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    the_content();
  endwhile;
endif;
?>
<?php get_sidebar();?>

<?php get_footer();
