<?php

/**
 * 
 * Template Name: One Pager - Columns
 *
 */
 
 ?>

<?php global $post, $prefix; ?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id() ); ?>

<?php $classes = implode( ' ', get_post_meta( get_the_ID(), "{$prefix}additional_classes", false ) ); ?>

<?php $columns = (int) get_post_meta( get_the_ID(), "{$prefix}num_columns", true );
		$spanClass = (int) 12 / $columns;
 ?>

<section id="page-<?php echo $post->post_name; ?>" class="columns <?php echo $classes; ?>" style="<?php if ( $src[0] != '' ) : ?>background-image:url(<?php echo $src[0]; ?>);<?php endif; ?>">
	<div class="container">
		<div class="row-fluid">
			<div class="span12 lu-content">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row-fluid">
			<?php $count = 1; ?>
			<?php while( $count <= $columns ) : ?>
				<div class="span<?php echo $spanClass; ?> lu-content">
					<?php echo apply_filters( 'the_content', get_post_meta( get_the_ID(), "{$prefix}column_".$count, true ) ); ?>
				</div>
				<?php $count++; ?>
			<?php endwhile; ?>
		</div>
	</div>
</section>