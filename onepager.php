<?php global $post, $prefix; ?>

<section id="page-<?php echo $post->post_name; ?>">
	<div class="container">
		<div class="row">
			<div class="span12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>