<?php

/**
 * 
 * Template Name: One Pager - Parallax Breaker
 *
 */
 
 ?>

<?php global $post, $prefix; ?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id() ); ?>

<section id="page-<?php echo $post->post_name; ?>" class="parallax-breaker" style="background-image:url(<?php echo $src[0]; ?>);">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>