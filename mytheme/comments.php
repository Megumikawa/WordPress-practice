<div id="comments">
	<?php if( have_comments() ): ?>
	<h3>コメント</h3>
	<ul>
	<?php
	$comment_args = array(
		'avatar_size' => 0,
		'max_depth'   => 1,
		'format'      => 'html5'
	);
	wp_list_comments( $comment_args );
	?>
	</ul>
	<?php endif; ?>

	<?php
	$form_args = array(
		'format' => 'html5'
	);
	comment_form( $form_args );
	?>
</div>
