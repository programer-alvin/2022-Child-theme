<?php
/**
 * Allows to filter by meta key(text_area) and meta value.
 */

 $post_type='post';

 add_filter( 'rest_'.$post_type.'_query', 'filter_posts_by_source_field', 999, 2 );
function filter_posts_by_source_field( $args, $request ) {
    $meta_key='text_area';
	if ( ! isset( $request[$meta_key] )  ) {
		return $args;
	}
	
	$meta_value = sanitize_text_field( $request[$meta_key] );
	$source_meta_query = array(
		'key' => $meta_key,
		'value' => $meta_value
	);
	
	if ( isset( $args['meta_query'] ) ) {
		$args['meta_query']['relation'] = 'AND';
		$args['meta_query'][] = $source_meta_query;
	} else {
		$args['meta_query'] = array();
		$args['meta_query'][] = $source_meta_query;
	}
	
	return $args;
}