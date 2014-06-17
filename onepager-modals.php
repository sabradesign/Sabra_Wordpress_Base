<?php

/**
 * 
 * Template Name: One Pager - Modal Content
 *
 */
 
 ?>

<?php global $post, $prefix; ?>

<?php $classes = implode( ' ', get_post_meta( get_the_ID(), "{$prefix}additional_classes", false ) ); ?>

<section id="page-<?php echo $post->post_name; ?>" class="onepager-carousel onepager-modals">
<div class="container">
<div class="row-fluid">
	<div class="span12">
		<?php the_content(); ?>
	</div>
</div>

<?php $after = get_post_meta( get_the_ID(), "{$prefix}after_content", true ); ?>

<?php $childchild_args = array(
		'post_type'		=>		'page',
		'post_parent'		=>		get_the_ID(),
		'nopaging'		=>		true,
		'orderby'		=>	'menu_order',
		'order'			=>	'ASC'
); 

$childchildren = new WP_Query( $childchild_args );

if ( $childchildren->have_posts() ) : ?>

<?php if ( !$slides = get_post_meta( get_the_ID(), "{$prefix}num_of_slides", true ) ) $slides = 1; ?>

<div class="owl-carousel-full" data-slides=<?php echo $slides; ?>>

	<?php while( $childchildren->have_posts() ) : $childchildren->the_post(); ?>
			<?php global $post, "${$prefix}modals"; ?>
			
			<div class="row-fluid">
				
				<div class="span12">
				
					<?php if ( has_post_thumbnail() ) : ?>
					<a href="#<?php echo $post->post_name; ?>" data-toggle="modal">
						<?php the_post_thumbnail( 'medium' ); ?>
					</a>
					<?php endif; ?>
					
					<h3><a href="#<?php echo $post->post_name; ?>" data-toggle="modal"><?php the_title(); ?></a></h3>
					
					<?php the_excerpt(); ?>
					
					<a href="#<?php echo $post->post_name; ?>" class="modal-read-more" data-toggle="modal">
						<?php _e('Read Full Bio', 'socratesconnected'); ?>
					</a>
				
				</div>
				
				<?php
				
					$modal_html = '<div id="'.$post->post_name.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="'.$post->post_name.'" aria-hidden="true">';
					$modal_html .= '<div class="modal-body">'.apply_filters( 'the_content', get_the_content() ).'</div>';
					$modal_html .= '<div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button></div>';
					$modal_html .= '</div>';
				
					${$prefix}modals[] = $modal_html;
				
				?>
				
			</div>
			
	<?php endwhile; ?>
	
</div>
	
<?php endif; ?>
<?php wp_reset_query(); ?>

<?php if ( $after ) : ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo apply_filters( 'the_content', $after ); ?>
	</div>
</div>

<?php endif; ?>

</div>
</section>