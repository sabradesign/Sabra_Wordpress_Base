<?php

/**
 * 
 * Template Name: One Pager - Google Map
 *
 */
 
 ?>

<?php global $post, $prefix; ?>

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id() ); ?>

<?php $location = get_post_meta( get_the_ID(), "{$prefix}map_location", true ); ?>

<?php $classes = implode( ' ', get_post_meta( get_the_ID(), "{$prefix}additional_classes", false ) ); ?>

<section id="page-<?php echo $post->post_name; ?>" class="gmap <?php echo $classes; ?>" data-location="<?php echo $location; ?>">

	

</section>