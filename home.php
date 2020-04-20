<?php get_header();?>
<div class="slider-wrapper">
	<ul id="slider" class="slider">
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt="こだわりの空間で心地よいひとときを" width="840" height="400"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg" alt="幸福に満ちた神聖なチャペル" width="840" height="400"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpg" alt="ありがとうに気持ちが伝わるウェディング" width="840" height="400"></li>
	</ul>
</div>
<div class="inner-container">
	<main>
		<section>
			<div class="h2-outer">
				<h2>お知らせ</h2>
			</div>
			<ol class="noticed">
				<li><time datetime="2014-04-25">2014年04月25日</time><p>ランチ・ディナーのテイスティングフェア</li>
				<li><time datetime="2014-03-03">2014年03月03日</time><p>春の特別見学会</li>
				<li><time datetime="2014-02-20">2014年02月20日</time><p>期間限定の割引プラン</li>
				<li><time datetime="2014-02-14">2014年02月14日</time><p>バレンタインフェア</li>
			</ol>
		</section>
	</main>
	<?php get_sidebar();?>
</div>
<?php get_footer();
