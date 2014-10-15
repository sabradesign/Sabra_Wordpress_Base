
</div> <!-- end #main -->

<footer id="main-footer" class="main-footer">
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

<footer id="sub-footer" class="main-footer">
	<div class="container">
		<div class="row">
			<div class="span6">
				<p>Social Media Icons Here</p>
			</div>
			<div class="span6">
				<p>Footer Menu Here</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>