<?php
function tttc_no_cpt_key_in_permalink_remove_404_parse_request( $query ) {
	$cpt_key='book';//replace with CPT key.

	if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
		return;
	}

	if ( ! empty( $query->query['name'] ) ) {
		$query->set( 'post_type', array( 'post', $cpt_key, 'page' ) );
	}
}
add_action( 'pre_get_posts', 'tttc_no_cpt_key_in_permalink_remove_404_parse_request' );
//https://wordpress.stackexchange.com/questions/203951/remove-slug-from-custom-post-type-post-urls
