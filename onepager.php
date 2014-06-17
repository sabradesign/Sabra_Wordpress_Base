<?php global $post, $prefix; ?>

<?php $classes = implode( ' ', get_post_meta( get_the_ID(), "{$prefix}additional_classes", false ) ); ?>

<section id="page-<?php echo $post->post_name; ?>">
	<div class="container">
		<div class="row">
			<div class="span12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>