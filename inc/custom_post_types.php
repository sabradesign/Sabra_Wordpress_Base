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
// 		'name'	=>	'custom_post_type_name',
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
// 		),
// 		'parallel-tax'	=>	true,  // Whether there should be a parallel taxonomy
// 		'tax_post_types'	=>	array( 'post' ), // ADD THE POST TYPES THAT THIS TAXONOMY WILL APPLY TO
// 		'show_tax_ui'	=>	false // Whether taxonomy should be accessible through the UI
// 	);

	/****
	Post Type Name:  Flex Slider slides
	Post Type Description:  This post type will be used to create custom slides for the flexslider shortcode
	*/
	$custom_post_types[] = array(
		'name'	=>	'slides',
		'args' => array(
			'labels' => array(
				'name' => 'Slides',
				'singular_name' => 'Slide',
				'add_new' => 'Add New Slide',
				'add_new_item' => 'Add New Slide',
				'edit_item' => 'Edit Slide',
				'new_item' => 'New Slide',
				'all_items' => 'All Slides',
				'view_item' => 'View Slide',
				'search_items' => 'Search Slides',
				'not_found' =>  'No slides found',
				'not_found_in_trash' => 'No slides found in Trash', 
				'parent_item_colon' => '',
				'menu_name' => 'Slides'
			  ),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'show_in_menu' => true, 
			'query_var' => true,
			'rewrite' => array( 'slug' => 'slides' ),
			'capability_type' => 'post',
			'has_archive' => true, 
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array( 'title', 'editor' )
		),
		'parallel-tax'	=>	false,
		'tax_post_types'	=>	array( 'post' ), // ADD THE POST TYPES THAT THIS TAXONOMY WILL APPLY TO
		'show_tax_ui'	=>	false
	);
	

	// Register Custom Post Types
	
	$parallel_taxes = get_option('sabra_parallel_tax');

	foreach( $custom_post_types as $custom_post_type ) {	
		register_post_type( $custom_post_type['name'], $custom_post_type['args'] );
		
		if ( isset($custom_post_type['parallel-tax']) && $custom_post_type['parallel-tax'] ) {
		
			if ( is_array( $parallel_taxes ) ) {
			
				if ( !in_array( $custom_post_type['name'], $parallel_taxes ) ) $parallel_taxes[] = $custom_post_type['name'];
			
			} else {
			
				$parallel_taxes[] = $custom_post_type['name'];
			
			}
			
			update_option( 'sabra_parallel_tax', $parallel_taxes );
			
			$custom_tax = array(
				'slug'			=>	$custom_post_type['name'].'-tax',	// The unique slug of the taxonomy
				'post_types'	=>	$custom_post_type['tax_post_types'],	// Which post types should this taxonomy be used for
				'args'			=>	array(
				   'hierarchical'            => false,	// Whether this should behave like categories or tags
				   'labels'                  => array(
						'name'                         => $custom_post_type['args']['labels']['name'],
						'singular_name'                => $custom_post_type['args']['labels']['singular_name'],
						'search_items'                 => 'Search '.$custom_post_type['args']['labels']['name'],
						'popular_items'                => 'Popular '.$custom_post_type['args']['labels']['name'],
						'all_items'                    => 'All '.$custom_post_type['args']['labels']['name'],
						'parent_item'                  => null,
						'parent_item_colon'            => null,
						'edit_item'                    => 'Edit '.$custom_post_type['args']['labels']['singular_name'], 
						'update_item'                  => 'Update '.$custom_post_type['args']['labels']['singular_name'],
						'add_new_item'                 => 'Add New '.$custom_post_type['args']['labels']['singular_name'],
						'new_item_name'                => 'New '.$custom_post_type['args']['labels']['singular_name'].' Name',
						'separate_items_with_commas'   => 'Separate '.$custom_post_type['args']['labels']['name'].' with commas',
						'add_or_remove_items'          => 'Add or remove '.$custom_post_type['args']['labels']['name'],
						'choose_from_most_used'        => 'Choose from the most used '.$custom_post_type['args']['labels']['name'],
						'not_found'                    => $custom_post_type['args']['labels']['not_found'],
						'menu_name'                    => $custom_post_type['args']['labels']['name'].' Tax'
				   ),
				   'public'					 => false,
				   'show_ui'                 => $custom_post_type['show_tax_ui'],	// Whether this taxonomy should be visible in the WP back end
				   'show_admin_column'       => true,
				   'update_count_callback'   => '_update_post_term_count',
				   'query_var'               => true,
				   'rewrite'                 => array( 'slug' => $custom_post_type['args']['rewrite']['slug'].'-tax' )  // Used for permalink rewriting on the index of this tax
				 )
		 
			 );
			 
			 register_taxonomy( $custom_tax['slug'], $custom_tax['post_types'], $custom_tax['args'] );
		
		}
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

/*****************************************************************************************
*************************** PARALLEL TAXONOMY FUNCTIONS **********************************
*****************************************************************************************/

function create_parallel_tax( $post_id, $post ) {
	
	if ( !current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	if ( isset($_GET['post_id']) ) {
		$post_id = $_GET['post_id'];
		$post = get_post( $post_id );	
	}
	
	if ( wp_is_post_revision( $post_id ) ) {
		$post_id = wp_is_post_revision( $post_id );
		$post = get_post( $post_id );
	}
	
	if ( wp_is_post_autosave( $post_id ) ) return;
	
	if ( get_post_status( $post_id ) == 'auto-draft' ) return;
	
	$parallel_taxes = get_option( 'sabra_parallel_tax' );
	
	if ( is_array( $parallel_taxes ) && in_array( $post->post_type, $parallel_taxes ) ) {
		
		$term_args = array(
			'description'	=>	$post->post_title,
			'slug'	=>	$post_id,
			'name'	=>	$post->post_title
		);
		
		$term_info = array();
		
		$name = $post->post_title;
		$term_info['name'] = $name;
		$term_info['term_args'] = $term_args;
		
		$term_info = apply_filters( 'reality_before_create_parallel_cards_tax', $term_info, $name, $term_args );
		
		if ( $term = get_term_by( 'slug', $post_id, $post->post_type.'-tax' ) ) {
			
			if ( !wp_update_term( $term->term_id, $post->post_type.'-tax', $term_info['term_args'] ) ) {
				die('Could not update term!');
			};
			
		} else {
		
			wp_insert_term( $term_info['name'], $post->post_type.'-tax', $term_info['term_args'] );
		
		}
		
		
	} else {
		return;
	}

}
add_action( 'save_post', 'create_parallel_tax', 20, 2);



/**
 * Delete a card or award parallel taxonomy whenever a card or award is deleted.
 */

function delete_parallel_tax( $post_id ) {
	
	if ( !current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	if ( isset($_GET['post']) ) {
		$post_id = $_GET['post'];
	}
	
	$post = get_post( $post_id );
	
	$postType = get_post_type( $post_id );
	$postTitle = get_the_title( $post_id );
	
	$parallel_taxes = get_option( 'sabra_parallel_tax' );
	
	if ( is_array( $parallel_taxes) && in_array( $postType, $parallel_taxes ) ) {
		
		if ( $term = get_term_by( 'slug', $post_id, $post->post_type.'-tax' ) ) {
			wp_delete_term( $term->term_id, $postType.'-tax' );
		}
	
	} else {
	
		return;
	
	}

}
add_action( 'before_delete_post', 'delete_parallel_tax' );

?>