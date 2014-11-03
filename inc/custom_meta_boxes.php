<?php

/*****************************************************************************************
************************ REGISTER CUSTOM META BOXES **************************************

INSTRUCTIONS
1.	Copy and paste the commented out code
2.	Customize the fields
3.  Uncomment the code

OPTIONS
'only_on': Use this setting whenever a meta box needs to show up on a specific Post ID,
	a post with a specific slug, a specific page template, or children of specific pages

Meta box setting details found in the 'meta-box-demo.php' file

*****************************************************************************************/


// SET META DATA PREFIX
global $meta_boxes, $prefix;
$prefix = 'rw_';
$meta_boxes = array();

// /*
// Meta Box Title:
// Meta Box Location: ex. Custom Post Type Name
// */
// 
// $meta_boxes[] = array(
// 	'title'  => 'Meta Box Title',
// 	'fields' => array(
// 		array(
// 			'name' => 'Your images',
// 			'id'   => "{$prefix}img",
// 			'type' => 'plupload_image',
// 		),
// 	),
// 	'only_on'    => array(
// 		'id'       => array( 1, 2 ),
// 		// 'slug'  => array( 'news', 'blog' ),
// 		'template' => array( 'fullwidth.php', 'simple.php' ),
// 		'parent'   => array( 10 )
// 	),
// );

$meta_boxes[] = array(
	'id' => 'slider-options',
	'title'  => 'Slider Options',
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Number of Slides Visible',
			'id'   => "{$prefix}num_of_slides",
			'type' => 'number',
		),
		array(
			'name' => 'Slider Speed',
			'id'   => "{$prefix}slide_speed",
			'type' => 'number',
			'std'	=>	1000
		),
		array(
			'name' => 'Autoplay',
			'id'   => "{$prefix}autoplay",
			'type' => 'checkbox'
		),
		array(
			'name' => 'Pagination?',
			'id'   => "{$prefix}pagination",
			'type' => 'radio',
			'options' => array(
				'1' => 'Yes',
				'0' => 'No',
			),
		),
		array(
			'name' => 'Post Type?',
			'id'   => "{$prefix}use_posts",
			'type' => 'text'
		),
		array(
			'name' => 'Taxonomy',
			'id'   => "{$prefix}post_taxonomy",
			'type' => 'text'
		),
		array(
			'name' => 'Tax Slug',
			'desc'	=>	'If you would like for posts to be inserted from a particular category, insert it here.',
			'id'   => "{$prefix}tax_term",
			'type' => 'text'
		),
		array(
			'name' => '# of posts?',
			'id'   => "{$prefix}number_posts",
			'type' => 'number',
			'std'	=>	10
		)
	),
	'only_on'    => array(
		'template' => array( 'onepager-slider.php', 'onepager-modals.php', 'onepager-TestimonialsSlider.php', 'onepager-homeslider.php' )
	)
);

$meta_boxes[] = array(
	'id' => 'onepager-columns-options',
	'title'  => 'Number of Columns',
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Number of Columns',
			'id'   => "{$prefix}num_columns",
			'type' => 'select',
			'options'	=>	array(
				1	=>	'1',
				2	=>	'2',
				3	=>	'3',
				4	=>	'4'
			)
		)
	),
	'only_on'    => array(
		'template' => array( 'onepager-columns.php' )
	)
);

if ( isset( $_GET['post'] ) ) {
	$post_id = $_GET['post'];
}
elseif ( isset( $_POST['post_ID'] ) ) {
	$post_id = $_POST['post_ID'];
}
else {
	$post_id = false;
}

$post = get_post( $post_id );

if ( is_admin() && $post && $post->post_type == 'page' && get_post_meta( $post->ID, '_wp_page_template', true ) == 'onepager-columns.php' ) {
	
	$fields = array();
	
	$fields[] = array(
		'name'	=>	'Column 1',
		'id'	=>	"{$prefix}column_1",
		'type'	=>	'wysiwyg'
	);
	
	if ( $columns = get_post_meta( $post->ID, "{$prefix}num_columns", true ) ) {
		$count = 2;
		
		while ( $count <= $columns ) {
		
			$fields[] = array(
				'name'	=>	'Column ' . $count,
				'id'	=>	"{$prefix}column_".$count,
				'type'	=>	'wysiwyg'
			);
			
			$count++;
		
		}
	
	}
	
	$meta_boxes[] = array(
		'id' => 'onepager-columns-columns',
		'title'  => 'Column Content',
		'pages' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => $fields,
		'only_on'    => array(
			'template' => array( 'onepager-columns.php' )
		)
	);

}

$meta_boxes[] = array(
	'id' => 'onepager-page-options',
	'title'  => 'One Pager Page Options',
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Exclude from Menu',
			'id'   => "{$prefix}exclude_from_menu",
			'type' => 'checkbox',
		),
		
		// CUSTOMIZE AVAILABLE ADDITIONAL STYLES HERE
		
		array(
			'name' => 'Additional Styles',
			'id'   => "{$prefix}additional_classes",
			'type' => 'select_advanced',
			'multiple'	=>	true,
			'options'	=>	array(
				'pink-bg'	=>	'Pink Background',
				'teal-bg'	=>	'Teal Background',
				'diamond-pattern-bg'	=>	'Diamond Pattern',
				'black-bg'	=>	'Black Background',
				'light-gray-bg'	=>	'Light Gray Background',
				'blue-bg'	=>	'Blue Background',
				'taptin-abstract'	=>	'TaptIn Abstract BG',
				'plexus-abstract'	=>	'Plexus Abstract with Words',
				'silhouettes-1'	=>	'Silhouettes 1',
				'silhouettes-2'	=>	'Silhouettes 2',
				'silhouettes-3'	=>	'Silhouettes 3',
				'black-pinstripe-bg'	=>	'Black Pinstripe Background',
				'cross-hatched-bg'	=>	'Cross Hatched Background',
				'thin-pinstripe-bg'	=>	'Thin Pinstripe Background'
			)
		),
		array(
			'name' => 'After Content',
			'id'   => "{$prefix}after_content",
			'type' => 'wysiwyg'
		)
	),
	'only_on'	=>	array(
		'parent_template'	=>	array( 'one-pager.php' )
	)
);

$meta_boxes[] = array(
	'id' => 'onepager-gmaps-options',
	'title'  => 'Google Maps Options',
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Map Location',
			'id'   => "{$prefix}map_location",
			'type' => 'text'
		)
	),
	'only_on'	=>	array(
		'template'	=>	array( 'onepager-gmaps.php' )
	)
);

$meta_boxes[] = array(
	'id' => 'testimonial-options',
	'title'  => 'Testimonial Options',
	'pages' => array( 'testimonials' ),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Person Name',
			'id'   => "post_title",
			'type' => 'text'
		),
		array(
			'name' => 'Person Title',
			'id'   => "{$prefix}testimonial_title",
			'type' => 'text'
		),
		array(
			'name' => 'Company Name',
			'id'   => "{$prefix}testimonial_company",
			'type' => 'text'
		),
		array(
			'name' => 'Company URL',
			'id'   => "{$prefix}testimonial_url",
			'type' => 'text'
		),
		array(
			'name' => 'Short Testimonial',
			'id'   => "excerpt",
			'type' => 'textarea'
		),
		array(
			'name' => 'Full Testimonial Content',
			'id'   => "content",
			'type' => 'wysiwyg'
		)
	)
);

$meta_boxes[] = array(
	'id' => 'jobs',
	'title'  => 'Job Details',
	'pages' => array( 'jobs' ),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Position Name',
			'id'   => "post_title",
			'type' => 'text'
		),
		array(
			'name' => 'Position Short Description',
			'id'   => "excerpt",
			'type' => 'textarea'
		),
		array(
			'name' => 'Position Full Description',
			'id'   => "post_content",
			'type' => 'wysiwyg'
		)
	)
);

/*****************************************************************************************
************************ NO MORE EDITING NECESSARY BEYOND THIS POINT *********************
*****************************************************************************************/

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function sabra_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) ) {
		foreach ( $meta_boxes as $meta_box ) {
			if ( isset( $meta_box['only_on'] ) && ! rw_maybe_include( $meta_box['only_on'] ) ) {
				continue;
			}

			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'sabra_register_meta_boxes' );


/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function rw_maybe_include( $conditions ) {
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN ) {
		return false;
	}

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return true;
	}

	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	}
	elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}
	else {
		$post_id = false;
	}

	$post_id = (int) $post_id;
	$post    = get_post( $post_id );

	foreach ( $conditions as $cond => $v ) {
		// Catch non-arrays too
		if ( ! is_array( $v ) ) {
			$v = array( $v );
		}

		switch ( $cond ) {
			case 'id':
				if ( in_array( $post_id, $v ) ) {
					return true;
				}
			break;
			case 'parent':
				$post_parent = $post->post_parent;
				if ( in_array( $post_parent, $v ) ) {
					return true;
				}
			break;
			case 'slug':
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ) ) {
					return true;
				}
			break;
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) ) {
					return true;
				}
			break;
			case 'parent_template':
				if ( is_object( $post ) ) {
					$template = get_post_meta( $post->post_parent, '_wp_page_template', true );
					if ( in_array( $template, $v ) ) {
						return true;
					}
				}
			break;
		}
	}

	// If no condition matched
	return false;
}
?>