<?php
/**
 * 
 * Template Name: Full Width
 *
 */

get_header(); ?>
	<div class="container">
		<div class="row">
			<div id="primary">
				<div id="content" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php //the_content(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>

					<?php endwhile; ?>

				<?php else : ?>

					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->

				<?php endif; ?>

				</div><!-- #content -->
		</div>
	</div>
<?php get_footer(); ?>