<?php

/**
 * 
 * Template Name: One Pager - Jobs
 *
 */
 
 ?>

<?php global $post; ?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>

<?php $classes = implode( ' ', get_post_meta( get_the_ID(), "{$prefix}additional_classes", false ) ); ?>

<?php 
		$jobs_args = array(
			'post_type'	=>	'jobs',
			'nopaging'	=>	true
		);
	
		$jobs_query = new WP_Query( $jobs_args );
	?>

<section id="page-<?php echo $post->post_name; ?>" class="<?php echo $classes; ?>" >



	<div class="container">
	
	<?php if ( get_the_content() != '' ) : ?>
		<div class="row-fluid">
			<div class="span12">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endif; ?>
	
	
		<div class="row">

		
			<div id="primary" class="span12">
				<div id="content" role="main">
				
				<?php 

				if ( $jobs_query->have_posts() ) : ?>
				
					<div class="accordion" id="lumix-jobs">

					<?php /* Start the Loop */ ?>
					<?php while ( $jobs_query->have_posts() ) : $jobs_query->the_post(); ?>
						
						<?php get_template_part( 'content', 'job' ); ?>

					<?php endwhile; ?>
					
					</div>

				<?php else : ?>

					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<div class="entry-image"><?php the_post_thumbnail('width=720&height=300&crop=1'); ?></div>
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
							<div class="entry-info"></div>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->

				<?php endif; ?>
				
				<?php wp_reset_query(); ?>

				</div><!-- #content -->
			</div><!-- #primary -->

			
		</div>
	</div>
</section>