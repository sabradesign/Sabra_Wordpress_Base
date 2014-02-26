<?php

/**
 * 
 * Template Name: One Pager - Slider
 *
 */
 
 ?>

<?php global $post; ?>

<section id="page-<?php echo $post->post_name; ?>" class="onepager-carousel">
<div class="container">
<div class="row-fluid">
	<div class="span12">
		<?php the_content(); ?>
	</div>
</div>

<?php $after = get_post_meta( get_the_ID(), 'sc_after_content', true ); ?>

<?php $childchild_args = array(
		'post_type'		=>		'page',
		'post_parent'		=>		get_the_ID(),
		'nopaging'		=>		true,
		'orderby'		=>	'menu_order',
		'order'			=>	'ASC'
); 

$childchildren = new WP_Query( $childchild_args );

if ( $childchildren->have_posts() ) : ?>

<?php if ( !$slides = get_post_meta( get_the_ID(), 'sc_num_of_slides', true ) ) $slides = 1; ?>

<?php if ( !$autoplay = get_post_meta( get_the_ID(), 'sc_autoplay', true ) ) $autoplay = false; ?>

<?php if ( !$slideSpeed = get_post_meta( get_the_ID(), 'sc_slide_speed', true ) ) $slideSpeed = 1000; ?>

<?php if ( !$paging = get_post_meta( get_the_ID(), 'sc_pagination', true ) ) $paging = true; ?>

<div class="owl-carousel-full" data-slides=<?php echo $slides; ?> data-autoplay="<?php if ( $autoplay == false ) { echo 'false'; } else { echo $slideSpeed; } ?>" data-slideSpeed=<?php echo $slideSpeed; ?> data-paging=0>

	<?php while( $childchildren->have_posts() ) : $childchildren->the_post(); ?>
			<div class="row-fluid">
				<div class="span12">
					<?php the_content(); ?>
				</div>
			</div>
	<?php endwhile; ?>
	
</div>
	
<?php endif; ?>
<?php wp_reset_query(); ?>

<?php if ( $after ) : ?>

<div class="row-fluid">
	<div class="span12">
		<?php //echo apply_filters( 'the_content', $after ); ?>
		<?php echo do_shortcode( $after ); ?>
	</div>
</div>

<?php endif; ?>

</div>
</section>