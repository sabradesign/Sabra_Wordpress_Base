<?php

/*****************************************************************************************
************************ REGISTER CUSTOM TAXONOMIES **************************************

INSTRUCTIONS
1.	Copy and paste the commented out code
2.	Customize the fields
3.  Uncomment the code

Setting details found at:
http://codex.wordpress.org/Function_Reference/register_taxonomy

*****************************************************************************************/

function custom_taxonomies() {

	$custom_taxes = array();

// 	$custom_taxes[] = array(
// 		'slug'			=>	'tax-slug',	// The unique slug of the taxonomy
// 		'post_types'	=>	array( 'post', 'custom-post-type-slug' ),	// Which post types should this taxonomy be used for
// 		'args'			=>	array(
// 		   'hierarchical'            => false,	// Whether this should behave like categories or tags
// 		   'labels'                  => array(
// 		   		'name'                         => _x( 'Cards', 'taxonomy general name' ),
// 				'singular_name'                => _x( 'Card', 'taxonomy singular name' ),
// 				'search_items'                 => __( 'Search Cards' ),
// 				'popular_items'                => __( 'Popular Cards' ),
// 				'all_items'                    => __( 'All Cards' ),
// 				'parent_item'                  => null,
// 				'parent_item_colon'            => null,
// 				'edit_item'                    => __( 'Edit Card' ), 
// 				'update_item'                  => __( 'Update Card' ),
// 				'add_new_item'                 => __( 'Add New Card' ),
// 				'new_item_name'                => __( 'New Card Name' ),
// 				'separate_items_with_commas'   => __( 'Separate cards with commas' ),
// 				'add_or_remove_items'          => __( 'Add or remove cards' ),
// 				'choose_from_most_used'        => __( 'Choose from the most used cards' ),
// 				'not_found'                    => __( 'No cards found.' ),
// 				'menu_name'                    => __( 'Cards' )
// 		   ),
// 		   'show_ui'                 => true,	// Whether this taxonomy should be visible in the WP back end
// 		   'show_admin_column'       => true,
// 		   'update_count_callback'   => '_update_post_term_count',
// 		   'query_var'               => true,
// 		   'rewrite'                 => array( 'slug' => 'cards-tax' )  // Used for permalink rewriting on the index of this tax
// 		 );
// 		 
//  	 );
 	 
 	 foreach( $custom_taxes as $tax ) {
 	 
 	 	register_taxonomy( $tax['slug'], $tax['post_types'], $tax['args'] );
 	 
 	 }


}
add_action( 'init', 'custom_taxonomies');
?>