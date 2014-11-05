<?php

/**
 * 
 * Template Name: One Pager - Testimonials Slider
 *
 */
 
 ?>

<?php global $post, $prefix; ?>

<?php $classes = implode( ' ', get_post_meta( get_the_ID(), "{$prefix}additional_classes", false ) ); ?>

<section id="page-<?php echo $post->post_name; ?>" class="onepager-carousel <?php echo $classes; ?>">
<div class="container">

<?php if ( get_the_content() != '' ) : ?>

<div class="row-fluid">
	<div class="span12">
		<?php the_content(); ?>
	</div>
</div>

<?php endif; ?>

<?php $after = get_post_meta( get_the_ID(), "{$prefix}after_content", true ); ?>

<?php 

if ( post_type_exists( get_post_meta( get_the_ID(), "{$prefix}use_posts", true ) ) ) {

	$number = get_post_meta( get_the_ID(), "{$prefix}number_posts", true );
	
	

	$childchild_args = array(
			'post_type'			=>	get_post_meta( get_the_ID(), "{$prefix}use_posts", true ),
			'posts_per_page'	=>	$number
	);
	
	if ( $tax = get_post_meta( get_the_ID(), "{$prefix}post_taxonomy", true )
		&& $term = get_post_meta( get_the_ID(), "{$prefix}tax_term", true ) ) {
		
			$childchild_args['tax_query'] = array();
			$childchild_args['tax_query'][] = array(
				'taxonomy'	=>	get_post_meta( get_the_ID(), "{$prefix}post_taxonomy", true ),
				'field'		=>	'slug',
				'terms'		=>	$term
			);
		
		}

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



<div class="owl-carousel-full" data-slides=<?php echo $slides; ?> data-autoplay="<?php if ( $autoplay == false ) { echo 'false'; } else { echo $slideSpeed; } ?>" data-slideSpeed=<?php echo $slideSpeed; ?> data-paging=0>

	<?php while( $childchildren->have_posts() ) : $childchildren->the_post(); ?>
			<div class="row-fluid">
				<div class="span12">
					<?php //the_content(); ?>
					<?php
					$new = '<blockquote>'.get_the_excerpt();
					$new .= '<div class="testimonial-details">';
					
					if ( has_post_thumbnail( get_the_ID() ) ) {
						$new .= get_the_post_thumbnail( get_the_ID(), 'thumbnail' );
					} else {
						$new .= '<img src="'.get_stylesheet_directory_uri().'/images/sun-divider.png" style="border: none;" />';
					}
					
					$new .= get_the_title();
						
			
					if ( $title = get_post_meta( get_the_ID(), '{$prefix}testimonial_title', true ) ) {
						$new .= ', <span class="testimonial-title">'.$title.'</span>';
					}
			
					if ( $company_name = get_post_meta( get_the_ID(), '{$prefix}testimonial_company', true ) ) {

						$new .= '<br />';
			
						if ( $url = get_post_meta( get_the_ID(), '{$prefix}testimonial_url', true ) ) {
							$new .= '<a href="'.$url.'" target="_blank">';
						}
				
						$new .= $company_name;
				
						if ( $url ) {
							$new .= '</a>';
						}
			
					}
			
					$new .= '</div>';
					$new .= '</blockquote>';
					echo $new;
					?>
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