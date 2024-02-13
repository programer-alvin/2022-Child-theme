<?php
function tttc_no_cpt_key_in_permalink_remove_404_parse_request( $query ) {
	$cpt_key = 'book';// replace with CPT key.

	if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
		return;
	}

	if ( ! empty( $query->query['name'] ) ) {
		$query->set( 'post_type', array( 'post', $cpt_key, 'page' ) );
	}
}
add_action( 'pre_get_posts', 'tttc_no_cpt_key_in_permalink_remove_404_parse_request' );
// https://wordpress.stackexchange.com/questions/203951/remove-slug-from-custom-post-type-post-urls

/**
 * Allow CPT to be displayed on category and tag achieve.
 */
// Add this code to your theme's functions.php file or in a custom plugin

function tttc_custom_post_type_on_category_archive( $query ) {
	if ( $query->is_category() && $query->is_main_query() ) {
		// Replace 'your_custom_post_type' with the name of your custom post type
		$query->set( 'post_type', array( 'post', 'your_custom_post_type' ) );//replace your_custom_post_type with you CPT key
	}
}
add_action( 'pre_get_posts', 'tttc_custom_post_type_on_category_archive' );

// Add this code to your theme's functions.php file or in a custom plugin

function tttc_custom_post_type_on_tag_archive( $query ) {
	if ( $query->is_tag() && $query->is_main_query() ) {
		// Replace 'your_custom_post_type' with the name of your custom post type
		$query->set( 'post_type', array( 'post', 'your_custom_post_type' ) );//replace your_custom_post_type with you CPT key
	}
}
add_action( 'pre_get_posts', 'tttc_custom_post_type_on_tag_archive' );
