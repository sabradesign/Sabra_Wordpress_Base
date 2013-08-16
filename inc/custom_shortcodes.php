<?php

/*****************************************************************************************
************************* CREATE CUSTOM SHORT CODES **************************************

INSTRUCTIONS
1.	Copy and paste the commented out code
2.	Customize the variables available to the user
3.  Uncomment the code

Setting details found at:
http://codex.wordpress.org/Function_Reference/add_shortcode

*****************************************************************************************/

// /*
// Shortcode Name:  Shortcode Name
// Shortcode Syntax: [custom_shortcode_slug variable1="" variable2=""]
// Variable:
// 	variable1 = Specifies something happens.  Default: Does something cool
// 	variable2 = Specifies something else happens.  Default:  Does Something Cooler
// */
// function sabra_custom_shortcode( $atts, $content = null ) {
// 	
// 	extract( shortcode_atts( array(
// 			'variable1'	=>	'default value',
// 			'variable2'	=>	'default value'
// 		), $atts ) );
// 		
// 	$output = '';
// 	
// 	$output .= '<p>Variable 1 = <strong>'.$variable1.'</strong></p>';
// 	$output .= '<p>Variable 2 = <strong>'.$variable2.'</strong></p>';
// 	$output .= '<h5>Content</h5>'.do_shortcode( $content );
// 	
// 	return $output;
// 		
// }
// add_shortcode( 'custom_shortcode_slug', 'sabra_custom_shortcode');

/*
Shortcode Name:  Create Bootstrap Row
Shortcode Syntax: [row fluid="no"]
Variable:
	fluid = Should this row be fluid?  Default: 0
*/
function sabra_row( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'fluid'	=>	'no',
			'class'	=>	''
		), $atts ) );
		
	$class != '' ? $classes = ' '.$class : $classes = '';
		
	$output = '';
	$output .= '<div class="'.$classes.'">';
	
	if ( $fluid == 'yes' ) {
		
		$output .= '<div class="container-fluid">';
		$output .= '<div class="row-fluid">';
	} else {
		$output .= '<div class="container">';
		$output .= '<div class="row">';
	}
	
	$output .= apply_filters( 'the_content', do_shortcode( $content ) );
	$output .= '</div>';
	
	$output .= '</div></div>';
	
	return $output;
		
}
add_shortcode( 'row', 'sabra_row');

/*
Shortcode Name:  Create Bootstrap One Full Div
Shortcode Syntax: [one_full class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_one_full( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$class != '' ? $classes = ' '.$class : $classes = '';
		
	$output = '';
	
	$output .= '<div class="span12'.$classes.'">';
	$output .= apply_filters( 'the_content', do_shortcode( $content ) );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'one_full', 'sabra_one_full');

/*
Shortcode Name:  Create Bootstrap One Half Div
Shortcode Syntax: [one_half class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_one_half( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$class != '' ? $classes = ' '.$class : $classes = '';
		
	$output = '';
	
	$output .= '<div class="span6'.$classes.'">';
	$output .= apply_filters( 'the_content', do_shortcode( $content ) );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'one_half', 'sabra_one_half');

/*
Shortcode Name:  Create Bootstrap One Third Div
Shortcode Syntax: [one_third class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_one_third( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$class != '' ? $classes = ' '.$class : $classes = '';
		
	$output = '';
	
	$output .= '<div class="span4'.$classes.'">';
	$output .= apply_filters( 'the_content', do_shortcode( $content ) );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'one_third', 'sabra_one_third');

/*
Shortcode Name:  Create Bootstrap Two Third Div
Shortcode Syntax: [two_third class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_two_third( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$class != '' ? $classes = ' '.$class : $classes = '';
		
	$output = '';
	
	$output .= '<div class="span8'.$classes.'">';
	$output .= apply_filters( 'the_content', do_shortcode( $content ) );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'two_third', 'sabra_two_third');

/*
Shortcode Name:  Create Bootstrap One Fourth Div
Shortcode Syntax: [one_fourth class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_one_fourth( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$class != '' ? $classes = ' '.$class : $classes = '';
		
	$output = '';
	
	$output .= '<div class="span3'.$classes.'">';
	$output .= apply_filters( 'the_content', do_shortcode( $content ) );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'one_fourth', 'sabra_one_fourth');

/*
Shortcode Name:  Create Bootstrap Three Fourth Div
Shortcode Syntax: [three_fourth class=""]
Variable:
	class = Additional Classes  Default: ''
*/
function sabra_three_fourth( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
			'class'	=>	''
		), $atts ) );
		
	$class != '' ? $classes = ' '.$class : $classes = '';
		
	$output = '';
	
	$output .= '<div class="span9'.$classes.'">';
	$output .= apply_filters( 'the_content', do_shortcode( $content ) );
	$output .= '</div>';
	
	return $output;
		
}
add_shortcode( 'three_fourth', 'sabra_three_fourth');

//////////////////////////////////////////////////////////////////
// Slider
// [slider height="" width="" class="" group=""]
//////////////////////////////////////////////////////////////////
function slider_function( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'height'	=> '400px',
			'width'		=>	'940px',
			'size'		=>	'',
			'class'		=>	'',
			'nav'		=>	true,
			'style'		=>	'',
			'group'		=>	''
		), $atts ) );
	
	switch( $size ) {
		case 'full':
			$width = '940px';
			$height = '400px';
			break;
		case 'half':
			$width = '470px';
			$height = '470px';
			break;
		case 'third':
			$width = '300px';
			$height = '300px';
			break;
	}
	
	$class != '' ? $classes = ' '.$class : $classes = '';
	
	$output = '';
	$output .= '<div class="content-flexslider'.$classes.'" style="position: relative;max-width:'.$width.';'.$style.'">';
	$output .= '<ul class="slides">';
	
	if ( isset( $group ) ) {
	
		$args = array(
			'post_type' => 'slides',
			'tax_query' => array(
				array(
					'taxonomy' => 'slide-groups',
					'field' => 'slug',
					'terms' => $group
				)
			)
		);
		$slides = new WP_Query( $args );
		
		if ( $slides->have_posts() ) {
		
			while ( $slides->have_posts() ) {
				$slides->the_post();
				
				$output .= '<li>';
				$output .= apply_filters( 'the_content', get_the_content() );
				$output .= '</li>';
			
			}
		
		}
	
	} else {
	
		
	
		$output .= do_shortcode( $content );
	
		
	// 	if ( $nav ) $output .= '<ul class="sabra-direction-nav"><li><a class="sabra-wooslider-prev" href="#" style="display: none; "></a></li><li><a class="sabra-wooslider-next" href="#" style="display: none; "></a></li></ul>';

	}
	
	$output .= '</ul>';
	$output .= '</div>';
	
	return $output;
}
add_shortcode( 'slider', 'slider_function' );

//////////////////////////////////////////////////////////////////
// Slide
// [slide]
//////////////////////////////////////////////////////////////////
function slider_slide_function( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'			=>	''
		), $atts ) );

	$output = '';
	$output .= '<li class="'.$class.'">';
	
	$output .= do_shortcode( $content );
	
	$output .= '</li>';
	return $output;
}
add_shortcode( 'slide', 'slider_slide_function');

//////////////////////////////////////////////////////////////////
// Tabs
// [tabs][/tabs]
//////////////////////////////////////////////////////////////////
function tabs_function( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'nav_position'	=>	'above',
		'class'			=>	''
		), $atts ) );
		
	$class != '' ? $classes = ' '.$class : $classes = '';

	$output = '<div class="tabbable tabs-'.$nav_position.$classes.'">';

	if ( $nav_position != 'below' ) {

		$output .= '<ul class="nav nav-tabs" id="myTab">';	
		$count = 0;
		foreach ( $atts as $key => $att ) {
	
			if ( $key == 'nav_position' || $key == 'class' ) continue;
	
			$output .= '<li';
			if( $count == 0 ) $output .= ' class="active"';
			$output .= '>';
		
			$output .= '<a href="#'.$key.'" data-target="#'.$key.'" data-toggle="tab">'.$att.'</a>';
			$output .= '</li>';
		
			$count++;
		
		}
		$output .= '</ul>';
	
	}
	
	$output .= '<div class="tab-content">';
	$output .= do_shortcode( $content );
	$output .= '</div>';
	
	if ( $nav_position == 'below' ) {

		$output .= '<ul class="nav nav-tabs" id="myTab">';	
		$count = 0;
		foreach ( $atts as $key => $att ) {
	
			if ( $key == 'nav_position' ) continue;
	
			$output .= '<li';
			if( $count == 0 ) $output .= ' class="active"';
			$output .= '>';
		
			$output .= '<a href="#'.$key.'" data-target="#'.$key.'" data-toggle="tab">'.$att.'</a>';
			$output .= '</li>';
		
			$count++;
		
		}
		$output .= '</ul>';
	
	}

	$output .= '</div>';
	return $output;
}
add_shortcode( 'tabs', 'tabs_function' );
//////////////////////////////////////////////////////////////////
// Tab
// [tab][/tab]
//////////////////////////////////////////////////////////////////
function tab_function( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'id'	=>	null,
		'class'	=>	''
		), $atts ) );
	
	$class != '' ? $classes = ' '.$class : $classes = '';
	$id == 1 ? $classes .= ' active' : $classes = $classes;
	
	$output = '<div class="tab-pane'.$classes.'" id="tab'.$id.'">';
	
	$output .= do_shortcode( $content );
	
	$output .= '</div>';
	return $output;
}
add_shortcode( 'tab', 'tab_function' );

//////////////////////////////////////////////////////////////////
// Tooltip
// [tooltip][/tooltip]
//////////////////////////////////////////////////////////////////
function tooltip_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		'class'	=>	'',
		'content'	=>	'',
		'html'		=>	false
		), $atts ) );

	if ( !$html ) {
		$output = '<a href="#" class="'.$class.'" data-toggle="tooltip" title="'.$content.'">';
		$output .= do_shortcode( $inner_content );
		$output .= '</a>';	
	} else {
	
		$output = '<a href="#" class="'.$class.'" data-toggle="tooltip" data-html="true" title=\''.do_shortcode( $inner_content ).'\'>';
		$output .= do_shortcode( $content );
		$output .= '</a>';	
	
	}
	
	return $output;
}
add_shortcode( 'tooltip', 'tooltip_function' );

//////////////////////////////////////////////////////////////////
// Popover
// [popover][/popover]
//////////////////////////////////////////////////////////////////
function popover_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		'title'		=>	'',
		'content'	=>	'',
		'class'		=>	'',
		'html'		=>	false
		), $atts ) );

	if ( !$html ) {

		$output = '<a href="#" class="'.$class.'" data-toggle="popover" title="'.$title.'" data-content="'.$content.'">';
		$output .= do_shortcode( $inner_content );
		$output .= '</a>';
	
	} else {
	
		$output = '<a href="#" class="'.$class.'" data-toggle="popover" title="'.$title.'" data-html="true" data-content=\''.do_shortcode( $inner_content ).'\'>';
		$output .= do_shortcode( $content );
		$output .= '</a>';
	
	}
	
	return $output;
}
add_shortcode( 'popover', 'popover_function' );

//////////////////////////////////////////////////////////////////
// Button
// [button][/button]
//////////////////////////////////////////////////////////////////
function button_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		'class'		=>	'',
		'size'		=>	'',
		'link'		=>	'',
		'target'	=>	''
		
		), $atts ) );

	$size != '' ? $size = ' btn-'.$size : $size = '';
	$class != '' ? $classes = $class : $classes = '';

	$output = '<a href="'.$link.'" class="'.$classes.' btn'.$size.'" target="'.$target.'">';
	$output .= do_shortcode( $inner_content );
	$output .= '</a>';
	
	return $output;
}
add_shortcode( 'button', 'button_function' );

//////////////////////////////////////////////////////////////////
// Accordion
// [accordion][/accordion]
//////////////////////////////////////////////////////////////////
function accordion_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		'id'	=>	'accordion2',
		'class'	=>	''
		), $atts ) );

	global $accordion_id;
	$accordion_id = $id;
	
	$class != '' ? $classes = ' '.$class : $classes = '';

	$output = '<div class="accordion'.$classes.'" id="'.$accordion_id.'">';
	
	$output .= do_shortcode( $inner_content );
	
	$output .= '</div>';
	
	unset( $accordion_id );
	
	return $output;
}
add_shortcode( 'accordion', 'accordion_function' );

//////////////////////////////////////////////////////////////////
// Accordion Group
// [accordion_group][/accordion_group]
//////////////////////////////////////////////////////////////////
function accordion_group_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		'title'	=>	'',
		'id'	=>	'',
		'start'	=>	'',
		'class'	=>	''
		), $atts ) );

	global $accordion_id;
	
	$class != '' ? $classes = ' '.$class : $classes = '';

	$output = '<div class="accordion-group'.$classes.'">';
	$output .= '<div class="accordion-heading">';
	$output .= '<a class="accordion-toggle" data-toggle="collapse" data-parent="#'.$accordion_id.'" href="#'.$id.'">';
    $output .= $title;
    $output .= '</a>';
	$output .= '</div>';
	
	$output .= '<div id="'.$id.'" class="accordion-body collapse '.$start.'">';
	$output .= '<div class="accordion-inner">';
	$output .= do_shortcode( $inner_content );
	$output .= '</div></div>';
	
	$output .= '</div>';
	
	return $output;
}
add_shortcode( 'accordion_group', 'accordion_group_function' );

//////////////////////////////////////////////////////////////////
// Alert
// [alert][/alert]
//////////////////////////////////////////////////////////////////
function alert_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		'type'	=>	'general',
		'class'	=>	''
		), $atts ) );
	
	switch( $type ) {
		case 'general':
			$type_class = ' alert-block';
			break;
		case 'error':
			$type_class = ' alert-error';
			break;
		case 'success':
			$type_class = ' alert-success';
			break;
		case 'info':
			$type_class = ' alert-info';
			break;
	}
	
	$class != '' ? $classes = ' '.$class : $classes = '';
	
	$output .= '<div class="alert'.$type_class.$classes.'">';
	$output .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
	
	$output .= do_shortcode( $inner_content );
	
	$output .= '</div>';
	
	return $output;
}
add_shortcode( 'alert', 'alert_function' );

//////////////////////////////////////////////////////////////////
// Hero
// [hero][/hero]
//////////////////////////////////////////////////////////////////
function hero_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		'class'	=>	''
		), $atts ) );

	$class != '' ? $classes = ' '.$class : $classes = '';

	$output = '<div class="hero-unit'.$classes.'">';
	
	$output .= do_shortcode( $inner_content );
	
	$output .= '</div>';
	
	return $output;
}
add_shortcode( 'hero', 'hero_function' );

//////////////////////////////////////////////////////////////////
// Well
// [well size=""][/well]
//////////////////////////////////////////////////////////////////
function well_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		"size"	=>	'',
		'class'	=>	''
		), $atts ) );

	switch( $size ) {
		case 'large':
			$size = ' large';
			break;
		case 'small':
			$size = ' small';
			break;
		default:
			$size = '';
	}
	
	$class != '' ? $classes = ' '.$class : $classes = '';

	$output = '<div class="well'.$size.$classes.'">';
	
	$output .= do_shortcode( $inner_content );
	
	$output .= '</div>';
	
	return $output;
}
add_shortcode( 'well', 'well_function' );

//////////////////////////////////////////////////////////////////
// Checklist
// [checklist icon=""][/checklist]
//////////////////////////////////////////////////////////////////
function checklist_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		"icon"	=>	'',
		'class'	=>	''
		), $atts ) );
		
	$class != '' ? $classes = ' '.$class : $classes = '';
	
	$output = str_replace('<ul>', '<ul class="arrow'.$classes.'">', do_shortcode($content));
	$output = str_replace('<li>', '<li>', do_shortcode($content));
	
	return $output;
}
add_shortcode( 'checklist', 'checklist_function' );

//////////////////////////////////////////////////////////////////
// Image
// [image src="" alt="" width="" height="" crop="" crop_from="" class=""][/image]
//////////////////////////////////////////////////////////////////
function shortcode_image_function( $atts, $inner_content = null ) {
	extract( shortcode_atts( array(
		'src'	=>	'',
		'alt'	=>	'',
		'width'	=>	50,
		'height'	=>	50,
		'crop'	=>	true,
		'crop_from'	=>	'center,center',
		'class'	=>	'',
		'link'	=>	true
		), $atts ) );
		
	$img_args = array(
		'width'		=>	$width,
		'height'	=>	$height,
		'crop'		=>	true,
		'crop_from_position'	=>	$crop_from	
	);
	
	if ( $inner_content != '' ) $src = do_shortcode( $inner_content );
	
	$thumb_src = wpthumb( $src, $img_args );
	$class != '' ? $classes = ' '.$class : $classes = '';
	
	$output = '';
	
	$link ? $output .= '<a href="'.$src.'" title="'.$alt.'" rel="fancybox" class="thumbnail'.$classes.'">' : $output .= '<div class="thumbnail'.$classes.'">';
	
	$output .= '<img src="'.$thumb_src.'" alt="'.$alt.'" width="'.$width.'" height="'.$height.'" class="">';
	
	$link ? $output .= '</a>' : $output .= '</div>';
	
	return $output;
}
add_shortcode( 'image', 'shortcode_image_function' );

//////////////////////////////////////////////////////////////////
// Latest Blog Post Shortcode
// [latest_posts cat="" post_type="" number="" class="" order=""][/latest_post]
//////////////////////////////////////////////////////////////////
add_shortcode('latest_posts', 'shortcode_latest_post');
	function shortcode_latest_post($atts, $content) {
		$atts = shortcode_atts(
			array(
				'cat' => '',
				'post_type'	=>	'',
				'number'	=>	1,
				'class'		=>	'',
				'order'		=>	'DESC'
			), $atts);
		extract( $atts );
		
		$output = '';
		
		$class != '' ? $classes = ' '.$class : $classes = '';
		
		$output .= '<div class="latest_posts_container'.$classes.'">';
		if ( $content == '' ) $output .= '<ul class="thumbnails">';
		
		$latest_post_args = array(
			'posts_per_page'	=>	$number,
			'category_name'	=>	$cat,
			'post__in'			=>	get_option('sticky_posts'),
			'order'			=>	$order
		);
		
		$latest_post = new WP_Query( $latest_post_args );
		
		if ( $latest_post->have_posts() ) {
			
			while ( $latest_post->have_posts() ) {
							
				$latest_post->the_post();
			
				if ( $content != '' ) {
					$output .= do_shortcode($content);
				} else {
			
					$output .= '<li>';
					$output .= '<div class="row-fluid">';
					if ( has_post_thumbnail() ) {
						$output .= '<a href="'.get_permalink().'" class="thumbnail span6">';
						$output .= get_the_post_thumbnail( get_the_ID() );
						$output .= '</a>';
					
						$output .= '<div class="span6">';
					} else {
						$output .= '<div class="span12">';
					}
				
					$output .= '<div class="caption">';
				
					$output .= '<h3>'.get_the_title().'</h3>';
					$output .= '<p>'.get_the_excerpt().'</p>';
					$output .= '<a href="'.get_permalink().'" title="'.get_the_title().'" class="read-more">Read More &rarr;</a>';
				
					$output .= '</div>';
					$output .= '</div>';
				
					$output .= '</div>';
					$output .= '</li>';
			
				}
			}
		
		} else {
		
			$latest_post_args = array(
				'posts_per_page'	=>	1,
				'category_name'	=>	$cat
			);
		
			$latest_post = new WP_Query( $latest_post_args );
			
			if ( $latest_post->have_posts() ) {
			
				while ( $latest_post->have_posts() ) {
				
					$latest_post->the_post();
			
					if ( $content != '' ) {
						$output .= do_shortcode($content);
					} else {
				
						$output .= '<li>';
						$output .= '<div class="row-fluid">';
				
						if ( has_post_thumbnail() ) {
							$output .= '<a href="'.get_permalink().'" class="thumbnail span6">';
							$output .= get_the_post_thumbnail( get_the_ID() );
							$output .= '</a>';
					
							$output .= '<div class="span6">';
						} else {
							$output .= '<div class="span12">';
						}
				
						$output .= '<div class="caption">';
				
						$output .= '<h3>'.get_the_title().'</h3>';
						$output .= '<p>'.get_the_excerpt().'</p>';
						$output .= '<a href="'.get_permalink().'" title="'.get_the_title().'" class="read-more">Read More &rarr;</a>';
				
						$output .= '</div>';
						$output .= '</div>';
				
						$output .= '</div>';
						$output .= '</li>';					
				
					}
				
				}
		
			}
		
		}
		
		wp_reset_postdata();
		
		if ( $content == '' ) $output .= '</ul>';
		
		$output .= '</div>';
		
		return $output;

			
	}

//////////////////////////////////////////////////////////////////
// Latest Blog Post Title Shortcode
// [latest_post_title]
//////////////////////////////////////////////////////////////////
add_shortcode('latest_post_title', 'shortcode_latest_post_title');
	function shortcode_latest_post_title($atts, $content) {
		$atts = shortcode_atts(
			array(
				'link' => 'yes'
			), $atts);
		extract( $atts );
		
		global $post;
		
		$output = '';
		
		$title = esc_html( $post->post_title );
		
		if ( $link == 'yes' ) {
			$output .= '<a href="'.get_permalink( $post->ID ).'" title="'.$title.'">';
			$output .= $title.'</a>';
		} else {
			$output .= $title;
		}
		
		return $output;
			
	}
	
//////////////////////////////////////////////////////////////////
// Latest Blog Post Read More Link
// [latest_read_more]
//////////////////////////////////////////////////////////////////
add_shortcode('latest_read_more', 'shortcode_latest_read_more');
	function shortcode_latest_read_more($atts, $content) {
		
		global $post;
		
		$output = '<a href="'.get_permalink( $post->ID ).'" title="'.esc_html( $post->post_title ).'" class="read-more">Read More &rarr;</a>';
		
		return $output;
			
	}
	
//////////////////////////////////////////////////////////////////
// Latest Blog Post Permalink Shortcode
// [latest_post_permalink]
//////////////////////////////////////////////////////////////////
add_shortcode('latest_post_permalink', 'shortcode_latest_post_permalink');
	function shortcode_latest_post_permalink($atts, $content) {
		
		global $post;
		
		return get_permalink( $post->ID );
			
	}
	
//////////////////////////////////////////////////////////////////
// Latest Blog Post Excerpt Shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('latest_post_excerpt', 'shortcode_latest_post_excerpt');
	function shortcode_latest_post_excerpt($atts, $content) {
		
		global $post;
		
		return $post->post_excerpt;
			
	}
	

	
//////////////////////////////////////////////////////////////////
// Latest Blog Post Image URL Shortcode
// [latest_post_thumb_url]
//////////////////////////////////////////////////////////////////
add_shortcode('latest_post_thumb_url', 'shortcode_latest_post_thumbnail_img_url');
	function shortcode_latest_post_thumbnail_img_url($atts, $content) {
		
		global $post;
		
		if ( has_post_thumbnail( $post->ID ) ) {
		
			$id = get_post_thumbnail_id();
			$thumb_src = wp_get_attachment_image_src( $id, 'full' );
			$image_url = $thumb_src[0];

		} else {
			$args = array(
				'post_type' => 'attachment',
				'numberposts' => 1,
				'post_status' => null,
				'post_parent' => $post->ID,
				'orderby'	=>	'menu_order',
				'order'		=>	'ASC'
			);
			$attachments = get_posts($args);
			if ($attachments) {
				$attachment = $attachments[0];
				$thumb_src = wp_get_attachment_image_src( $attachment->ID, 'full' );
				$image_url = $thumb_src[0];
				
			} else {	
				return false;
			}
		}
		
		return $image_url;
			
	}

//////////////////////////////////////////////////////////////////
// Company Address
// [company_address name="" street="" city="" state="" zip=""]
//////////////////////////////////////////////////////////////////
function shortcode_company_address_function( $atts, $inner_content = null ) {
	
	$company_info = get_option( 'company_info' );
	$defaults = array();
	if ( isset( $company_info ) ) {
		
		isset( $company_info['name'] ) ? $defaults['name'] = $company_info['name'] : $defaults['name'] = "";
		isset( $company_info['street'] ) ? $defaults['street'] = $company_info['street'] : $defaults['street'] = "";
		isset( $company_info['city'] ) ? $defaults['city'] = $company_info['city'] : $defaults['city'] = "";
		isset( $company_info['state'] ) ? $defaults['state'] = $company_info['state'] : $defaults['state'] = "";
		isset( $company_info['zip'] ) ? $defaults['zip'] = $company_info['zip'] : $defaults['zip'] = "";
		isset( $company_info['phone'] ) ? $defaults['phone'] = $company_info['phone'] : $defaults['phone'] = "";
		isset( $company_info['email'] ) ? $defaults['email'] = $company_info['email'] : $defaults['email'] = get_bloginfo('admin_email');
		
	
	} else {
	
		$defaults = array(
			'name'		=>	'',
			'street'	=>	'',
			'city'	=>	'',
			'state'	=>	'',
			'zip'	=>	'',
			'phone'	=>	'',
			'email'	=>	get_bloginfo('admin_email')
		);
		
	}
	
	$defaults['url'] = get_bloginfo('url');
	$defaults['class'] = '';
	
	extract( shortcode_atts( $defaults, $atts ) );
	
	$special_chars = array( '+','(',')','-',' ' );
	$tel = str_replace( $special_chars, '', $phone );
	
	$output = '<address itemscope="" itemtype="http://data-vocabulary.org/Organization" class="'.$class.'">';
	
	if ( $content == null ) {
	
	$output .= '<span itemprop="name">'.$name.'</span><br>';
	$output .= '<span itemprop="address" itemscope="" itemtype="http://data-vocabulary.org/Address">';
		$output .= '<span itemprop="street-address">'.$street.'</span><br>';
		$output .= '<span itemprop="locality">'.$city.'</span>, <span itemprop="region">'.$state.'</span> '.$zip.'</span><br>';
	$output .= '<a href="'.$url.'" itemprop="url">'.$url.'</a> | <a href="mailto:'.$email.'">'.$email.'</a><br>';
	$output .= '<span itemprop="tel"><a href="tel:'.$tel.'" title="Call '.$name.'">'.$phone.'</a></span><br>';
	
	} else {
	
		$output .= do_shortcode( $content );
	
	}
	
	$output .= '</address>';
	
	return $output;
}
add_shortcode( 'company_address', 'shortcode_company_address_function' );

//////////////////////////////////////////////////////////////////
// Get Post Meta Data
// [post_meta key=""]
//////////////////////////////////////////////////////////////////
add_shortcode('post_meta', 'shortcode_post_meta');
	function shortcode_post_meta($atts, $content) {
		$atts = shortcode_atts(
			array(
				'key' => ''
			), $atts);
		extract( $atts );
		
		
		global $post;
		
		$output = get_post_meta( $post->ID, $key, true );
		
		return $output;
			
	}
	
//////////////////////////////////////////////////////////////////
// Show Person or User
// [person username="" name=""]
//////////////////////////////////////////////////////////////////
add_shortcode('person', 'shortcode_person');
	function shortcode_person($atts, $content) {
		$atts = shortcode_atts(
			array(
				'username' => '',
				'name'		=>	'',
				'image'		=>	''
			), $atts);
		extract( $atts );
		
		$output = '';
		
		if ( isset( $username ) ) {
		
			$user = get_user_by( 'login', $username );
			
			if ( $user ) {
		
				$output .= '<div class="person '.$username.'">';
		
				if ( $content != '' ) {
				
					global $displayed_user;
					$displayed_user = $user;
					// display custom formatting
					$output .= do_shortcode( $content );
					
				} else {
					// display general formatting
				
					// Get gravatar
					$email = $user->user_email;
					$default = "http://sabradesign.me/wp-content/uploads/2012/12/sabra-design-logo.jpg";
					$size = 288;
					$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
					$output .= '<div class="user-avatar"><img src="'.$grav_url.'" alt="'.$user->first_name.' '.$user->last_name.'"></div>';
					
					// Get User Info
					$meta = get_user_meta( $user->ID );
					$output .= '<div class="person-info">';
					$output .= '<h5>'.$user->first_name.' '.$user->last_name.'</h5>';
					isset( $meta['description'] ) ? $output .= '<div class="user-bio">'.$meta['description'][0].'</div>' : $output .= '' ;
					
					$output .= '</div>';
				
				}
			
			}
		
		} else {
			//display general formatting
			
			$output .= '<div class="person">';
		}
		
		$output .= '</div>';
		
		return $output;
			
	}

//////////////////////////////////////////////////////////////////
// Get User Meta Data
// [user_meta username="" key=""]
//////////////////////////////////////////////////////////////////
add_shortcode('user_meta', 'shortcode_user_meta');
	function shortcode_user_meta($atts, $content) {
		$atts = shortcode_atts(
			array(
				'username'	=>	'',
				'key' => ''
			), $atts);
		extract( $atts );
		
		if ( isset( $username ) ) {
			$user = get_user_by( 'login', $username );
		} else {
			global $displayed_user;
			$user = $displayed_user;
		}
		
		$output = get_user_meta( $user->ID, $key, true );
		
		return $output;
			
	}
	
//////////////////////////////////////////////////////////////////
// Get User Gravatar
// [user_gravatar email="" size=""]
//////////////////////////////////////////////////////////////////
add_shortcode('user_gravatar', 'shortcode_user_gravatar');
	function shortcode_user_gravatar($atts, $content) {
		$atts = shortcode_atts(
			array(
				'email'	=>	'',
				'size' => '288'
			), $atts);
		extract( $atts );
		
		if ( !isset( $email) ) {
		
			global $displayed_user;
			$email = $displayed_user->user_email;
		
		}
		
		$default = "http://sabradesign.me/wp-content/uploads/2012/12/sabra-design-logo.jpg";
		$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
		
		$output = '<img src="'.$grav_url.'">';
		
		return $output;
			
	}

?>