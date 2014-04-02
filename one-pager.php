<?php
/**
 * 
 * Template Name: One Pager
 *
 */

get_header(); ?>

			<?php $child_args = array(
					'post_type'		=>		'page',
					'post_parent'		=>		$post->ID,
					'nopaging'		=>		true,
					'orderby'		=>		'menu_order',
					'order'			=>		'ASC'
				);
				
				$children = new WP_Query( $child_args );
				global $prefix;
				?>

				<?php if ( get_post_meta( get_the_ID(), $prefix."include_menu", TRUE ) ) : ?>
								
				<?php if ( $children->have_posts() ) : ?>

					<div class="navbar scroll-navbar navbar-static-top hidden-phone hidden-tablet">
					  <div class="navbar-inner">
						<div class="container">
							<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
							  <a class="btn btn-navbar" data-toggle="collapse" data-target=".scroll-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </a>
		
							<div class="nav-collapse collapse scroll-collapse">
								<ul id="menu-main-menu" class="nav">
						
									<?php while( $children->have_posts() ) : $children->the_post(); ?>
						
										<?php global $post; ?>
										
										<?php if ( get_post_meta( get_the_ID(), 'sc_exclude_from_menu', true ) != 1 ) : ?>
						
										<li>
											<a href="#page-<?php echo $post->post_name; ?>"><?php the_title(); ?></a>
										</li>
										
										<?php endif; ?>
						
									<?php endwhile; ?>
									<?php $children->rewind_posts(); ?>
								</ul>
							</div>
						</div>
					  </div>
					</div>
					
					<div class="navbar scroll-navbar navbar-static-top hidden-phone hidden-tablet fixed-top affix" data-offset=200>
					  <div class="navbar-inner">
						<div class="container">
							<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
							  <a class="btn btn-navbar" data-toggle="collapse" data-target=".scroll-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </a>
		
							<div class="nav-collapse collapse scroll-collapse">
								<ul id="menu-main-menu" class="nav">
						
									<?php while( $children->have_posts() ) : $children->the_post(); ?>
						
										<?php global $post; ?>
										
										<?php if ( get_post_meta( get_the_ID(), 'sc_exclude_from_menu', true ) != 1 ) : ?>
						
										<li>
											<a href="#page-<?php echo $post->post_name; ?>"><?php the_title(); ?></a>
										</li>
										
										<?php endif; ?>
						
									<?php endwhile; ?>
									<?php $children->rewind_posts(); ?>
								</ul>
							</div>
						</div>
					  </div>
					</div>

					<?php endif; ?>
					
					<?php wp_reset_query(); ?>
					
					<?php endif; ?>

		<?php global $post; ?>
			
			<?php 
				
				if ( $children->have_posts() ) : ?>
				
					<?php while( $children->have_posts() ) : $children->the_post(); ?>
					
						<?php $template = get_post_meta( get_the_ID(), '_wp_page_template', true ); ?>
						<?php $template = str_replace( 'onepager-', '', $template ); ?>
						<?php 
						if ( $template ) {
							$template = substr( $template, 0, strpos( $template, '.' ) );
						} else {
							$template = '';
						} ?>
						
						<?php get_template_part( 'onepager', $template ); ?>
					
					<?php endwhile; ?>
				
				<?php endif; ?>
				
				<?php wp_reset_query(); ?>
			
<?php get_footer(); ?>