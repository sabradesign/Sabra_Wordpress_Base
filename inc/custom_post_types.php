<?php

/*****************************************************************************************
************************ REGISTER CUSTOM POST TYPES **************************************

INSTRUCTIONS
1.	Copy and paste the commented out code
2.	Customize the fields
3.  Uncomment the code

Setting details found at:
http://codex.wordpress.org/Function_Reference/register_post_type

*****************************************************************************************/

function add_custom_post_types() {

	$custom_post_types = array();
	
// 	/****
// 	Post Type Name:  Custom Post Type Name
// 	Post Type Description:  This post type will be use to...
// 	*/
// 	$custom_post_types[] = array(
// 		'name'	=>	'Custom Post Type Name',
// 		'args' => array(
// 			'labels' => array(
// 				'name' => 'Books',
// 				'singular_name' => 'Book',
// 				'add_new' => 'Add New',
// 				'add_new_item' => 'Add New Book',
// 				'edit_item' => 'Edit Book',
// 				'new_item' => 'New Book',
// 				'all_items' => 'All Books',
// 				'view_item' => 'View Book',
// 				'search_items' => 'Search Books',
// 				'not_found' =>  'No books found',
// 				'not_found_in_trash' => 'No books found in Trash', 
// 				'parent_item_colon' => '',
// 				'menu_name' => 'Books'
// 			  ),
// 			'public' => true,
// 			'publicly_queryable' => true,
// 			'show_ui' => true, 
// 			'show_in_menu' => true, 
// 			'query_var' => true,
// 			'rewrite' => array( 'slug' => 'book' ),
// 			'capability_type' => 'post',
// 			'has_archive' => true, 
// 			'hierarchical' => false,
// 			'menu_position' => null,
// 			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
// 		)
// 	);
	

	// Register Custom Post Types

	foreach( $custom_post_types as $custom_post_type ) {	
		register_post_type( $custom_post_type['name'], $custom_post_type['args'] );
	}
}
add_action( 'init', 'add_custom_post_types' );

/*****************************************************************************************
*************************** ADD WP HELP TAB CONTENT **************************************

INSTRUCTIONS:
1.	Find "slug" of applicable post-type
2.  Copy and Paste the commented code
3.	Insert applicable information
4.	Uncomment Code

*****************************************************************************************/

function custom_help_tabs() {
	global $post_ID;
	$screen = get_current_screen();

	if( isset($_GET['post_type']) ) $post_type = $_GET['post_type'];
	else $post_type = get_post_type( $post_ID );

	switch( $post_type ) {
// 		case 'post-slug' :
// 			$screen->add_help_tab( array(
// 				'id' => 'you_custom_id', //unique id for the tab
// 				'title' => 'Custom  Help', //unique visible title for the tab
// 				'content' => '<h3>Help Title</h3><p>Help content</p>',  //actual help text
// 			));
// 		break;
		default:
		break;
	}

}

add_action('admin_head', 'custom_help_tabs');

?>