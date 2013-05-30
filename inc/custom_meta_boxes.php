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


// SET META DATA PREFIEX
$prefix = 'rw_';
global $meta_boxes;
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