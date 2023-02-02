<?php
// https://www.advancedcustomfields.com/resources/acf-fields-post_object-query/
add_filter( 'acf/fields/post_object/query', 'tttc_acf_fields_post_object_query', 10, 3 );
function tttc_acf_fields_post_object_query( $args, $field, $post_id ) {

	// show post only for the current user.
	// https://stackoverflow.com/questions/54797398/i-want-get-posts-to-return-only-posts-of-logged-in-user
	$current_user   = wp_get_current_user();
	$args['author'] = $current_user->ID;

	return $args;
}
