<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- 
		<header class="entry-header">
			<div class="container">
				<div class="row">
					<h1 class="entry-title span12"><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
 -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
