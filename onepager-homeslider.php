<?php

/**
 * 
 * Template Name: One Pager - Home Slider
 *
 */
 
 ?>

<?php global $post, $prefix; ?>

<?php $classes = implode( ' ', get_post_meta( get_the_ID(), "{$prefix}additional_classes", false ) ); ?>

<section id="page-<?php echo $post->post_name; ?>" class="onepager-carousel <?php echo $classes; ?>">
<div class="container">
<div class="row-fluid">
	<div class="span12 lu-content">
		<?php the_content(); ?>
	</div>
</div>

<?php $after = get_post_meta( get_the_ID(), "{$prefix}after_content", true ); ?>

<?php 

if ( post_type_exists( get_post_meta( get_the_ID(), "{$prefix}use_posts", true ) ) ) {

	$number = get_post_meta( get_the_ID(), "{$prefix}number_posts", true );

	$childchild_args = array(
			'post_type'			=>	get_post_meta( get_the_ID(), "{$prefix}use_posts", true ),
			'posts_per_page'	=>	$number
	); 

} else {

	$childchild_args = array(
			'post_type'		=>		'page',
			'post_parent'		=>		get_the_ID(),
			'nopaging'		=>		true,
			'orderby'		=>	'menu_order',
			'order'			=>	'ASC'
	); 

}

$childchildren = new WP_Query( $childchild_args );

if ( $childchildren->have_posts() ) : ?>

<?php if ( !$slides = get_post_meta( get_the_ID(), "{$prefix}num_of_slides", true ) ) $slides = 1; ?>

<?php if ( !$autoplay = get_post_meta( get_the_ID(), "{$prefix}autoplay", true ) ) $autoplay = false; ?>

<?php if ( !$slideSpeed = get_post_meta( get_the_ID(), "{$prefix}slide_speed", true ) ) $slideSpeed = 1000; ?>

<?php if ( !$paging = get_post_meta( get_the_ID(), "{$prefix}pagination", true ) ) $paging = true; ?>

<div class="lumix-tree"></div>


<div class="owl-carousel-full" data-paging="<?php echo $paging; ?>" data-slides=<?php echo $slides; ?> data-autoplay="<?php if ( $autoplay == false ) { echo 'false'; } else { echo $slideSpeed; } ?>" data-slideSpeed=<?php echo $slideSpeed; ?> data-paging=0>

	<?php while( $childchildren->have_posts() ) : $childchildren->the_post(); ?>
			<div class="row-fluid">
				<div class="span12 lu-content">
					<?php the_content(); ?>
				</div>
			</div>
	<?php endwhile; ?>
	
</div>
	
<?php endif; ?>
<?php wp_reset_query(); ?>

<?php if ( $after ) : ?>

<div class="row-fluid">
	<div class="span12 lu-content">
		<?php //echo apply_filters( 'the_content', $after ); ?>
		<?php echo do_shortcode( $after ); ?>
	</div>
</div>

<?php endif; ?>

</div>
<a href="#" class="jumpToSectionButton" data-target="page-about-us">ˇ</a>
</section>