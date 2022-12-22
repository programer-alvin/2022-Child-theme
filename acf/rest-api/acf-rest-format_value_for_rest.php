<?php
// Add field definitions to the REST API response.
add_filter(
	'acf/rest/format_value_for_rest',
	function ( $value_formatted, $post_id, $field, $value, $format ) {
		return array(
			'value' => $value_formatted,
			'field' => $field,
		);
	},
	10,
	5
);

add_filter(
	'acf/rest/format_value_for_rest',
	function ( $value_formatted, $post_id, $field, $value, $format ) {
		if ($field['name'] == 'text' ) {//Limiting to specific field name 
			$post   = get_post( $post_id );// retrieve the post
			$blocks = parse_blocks( $post->post_content );//https://developer.wordpress.org/reference/functions/parse_blocks/
			return array(
				'value' => $value_formatted,
				'field' => $field,
				'blocks' => $blocks,
			);
		}
		return $value_formatted;
	},
	10,
	5
);

