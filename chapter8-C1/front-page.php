<?php get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/header-top.jpg" width="1500" height="460" alt="" class="largeheader">


<div class="topmenu">
<div class="container">

<div class="link">
<a href="<?php echo get_permalink( get_page_by_title( 'ブログ' )->ID ); ?>">
<i class="fa fa-pencil"></i>ブログ
</a>
</div>

<div class="link">
<a href="<?php echo get_permalink( get_page_by_title( 'サイトについて' )->ID ); ?>">
<i class="fa fa-info"></i>サイトについて
</a>
</div>

<div class="link">
<a href="<?php echo get_permalink( get_page_by_title( 'お問い合わせ' )->ID ); ?>">
<i class="fa fa-envelope"></i>お問い合わせ
</a>
</div>

</div>
</div>


<?php get_footer(); ?>
