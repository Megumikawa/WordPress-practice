<?php get_header();?>

<?php
if ( shortcode_exists('wp-structuring-markup-breadcrumb' ) ){
  echo '<div class="breadcrumb">' . do_shortcode('[wp-structuring-markup-breadcrumb]') .'</div>';
}
?>
<div class="inner-container">
  <main>
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      the_content();
    endwhile;
  endif;
  ?>
  </main>
<?php get_sidebar();?>
</div>
<?php get_footer();
