<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentytwelve_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

$comments_options = get_option( 'commenting_system' );

switch( $comments_options ) {
	case 'wordpress':
		get_template_part( 'comments/comments', 'wordpress' );
		break;
	case 'facebook':
	default:
		get_template_part( 'comments/comments', 'facebook' );
}