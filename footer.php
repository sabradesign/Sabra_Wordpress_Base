</div> <!-- end #main -->

<footer>
	<div class="container">
		<!-- Footer Content -->
		<div class="row">
			
			<div class="span3">
			
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="widget-area footer-widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div><!-- #secondary -->
				<?php endif; ?>
			
			</div>
			<div class="span3">
			
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div class="widget-area footer-widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div><!-- #secondary -->
				<?php endif; ?>
			
			</div>
			<div class="span3">
			
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="widget-area footer-widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div><!-- #secondary -->
				<?php endif; ?>
			
			</div>
			<div class="span3">
			
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<div class="widget-area footer-widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div><!-- #secondary -->
				<?php endif; ?>
			
			</div>
			
		</div>
		<!-- End Footer Content -->
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>