<?php

/**
 * 
 * Template Name: One Pager - Latest Posts
 *
 */
 
 ?>

<?php global $post, $prefix; ?>

<?php $classes = implode( ' ', get_post_meta( get_the_ID(), "{$prefix}additional_classes", false ) ); ?>

<section id="page-<?php echo $post->post_name; ?>" class="onepager-carousel <?php echo $classes; ?>">
<div class="container">
<div class="row-fluid">
	<div class="span12">
		<?php the_content(); ?>
	</div>
</div>

<?php $after = get_post_meta( get_the_ID(), "{$prefix}after_content", true ); ?>

<?php 

$childchild_args = array(
		'posts_per_page'	=>	3
);

$childchildren = new WP_Query( $childchild_args );

if ( $childchildren->have_posts() ) : ?>

<div id="home-latest-post" class="row-fluid">
	
	<?php $count = 0; ?>

	<?php while( $childchildren->have_posts() ) : $childchildren->the_post(); ?>

			<article class="span6">
					<a class="post-image" href="<?php the_permalink(); ?>">
						
						<?php 
							if ( $count == 0 ) the_post_thumbnail('width=572&height=250&crop=1');
								else the_post_thumbnail('width=283&height=200&crop=1');
						 ?>
					</a>
					<div class="post-info">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="post-date"><?php echo get_the_date(); ?></div>
						<div class="excerpt"><?php the_excerpt(); ?></div>
						<div class="clear-fix"></div>
					</div>
					<div class="clearfix"></div>
			</article>
			<?php $count++; ?>
	<?php endwhile; ?>
	
</div>
	
<?php endif; ?>
<?php wp_reset_query(); ?>

<div class="row-fluid">
	<div class="span12 text-center">
		<a class="btn" href="<?php echo site_url('news'); ?>">View All</a>
	</div>
</div>

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