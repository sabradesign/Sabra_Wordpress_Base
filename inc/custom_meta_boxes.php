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
			'name' => 'After Content',
			'id'   => "{$prefix}after_content",
			'type' => 'wysiwyg',
		)
	),
	'only_on'    => array(
		'template' => array( 'onepager-slider.php', 'onepager-modals.php' )
	)
);

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
		)
	),
	'only_on'	=>	array(
		'parent_template'	=>	array( 'one-pager.php' )
	)
);

$meta_boxes[] = array(
	'id' => 'onepager-options',
	'title'  => 'One Pager Options',
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Include Menu?',
			'id'   => "{$prefix}include_menu",
			'type' => 'checkbox'
		)
	),
	'only_on'	=>	array(
		'template'	=>	array( 'one-pager.php' )
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
			'id'   => "{$prefix}testimonial_name",
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
		array(
			'name' => 'Additional Styles',
			'id'   => "{$prefix}additional_classes",
			'type' => 'select_advanced',
			'multiple'	=>	true,
			'options'	=>	array(
				'teal-bg'	=>	'Teal Background',
				'yellow-bg'	=>	'Yellow Background',
				'dark-gray-bg'	=>	'Dark Gray Background',
				'cloud-bg'	=>	'Cloud Background',
				'currency-bg'	=>	'Currency Watermark',
				'tree-bg'	=>	'Tree Watermark',
				'gray-bg'	=>	'Gray Background',
				'bottom-triangle'	=>	'Bottom Triangle - Yellow',
				'bottom-triangle-black'	=>	'Bottom Triangle - Black',
				'bottom-triangle-teal'	=>	'Bottom Triangle - Teal',
				'bottom-triangle-gray'	=>	'Bottom Triangle - Gray',
				'bottom-triangle-white'	=>	'Bottom Triangle - White',
				'bottom-lumix-divider'	=>	'Lumix Logo Section Divider'
			)
		)
	),
	'only_on'	=>	array(
		'parent_template'	=>	array( 'one-pager.php' )
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
		}
	}

	// If no condition matched
	return false;
}
?>