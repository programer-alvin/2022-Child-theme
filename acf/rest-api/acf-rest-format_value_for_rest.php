<?php
// Add field definitions to the REST API response.
/*
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
);*/

/**/
add_filter(
	'acf/rest/format_value_for_rest',
	function ( $value_formatted, $post_id, $field, $value, $format ) {
		if ( $field['name'] == 'field_name' ) {// Limiting to specific field name
			$post   = get_post( $post_id );// retrieve the post
			$blocks = parse_blocks( $post->post_content );// https://developer.wordpress.org/reference/functions/parse_blocks/
			return array(
				'value'  => $value_formatted,
				'field'  => $field,
				'blocks' => $blocks,
			);
		}
		return $value_formatted;
	},
	10,
	5
);

add_filter(
	'acf/rest/format_value_for_rest',
	function ( $value_formatted, $post_id, $field, $value, $format ) {
		if ( 'relationship' === $field['type'] ) {
			if ( is_array( $value_formatted ) ) {
				foreach ( $value_formatted as &$post ) {
					if ( ! is_int( $post ) ) {
						$post->acf = tttc_get_fields_by_post_id( $post->ID );
					}
				}
			}
			return $value_formatted;
		} elseif ( 'post_object' === $field['type'] ) {
			if ( is_array( $value_formatted ) ) {// multiple selection is enabled.
				foreach ( $value_formatted as &$post ) {
					if ( ! is_int( $post ) ) {// Ensure the only post objects are processed.
						$post->acf = tttc_get_fields_by_post_id( $post->ID );
					}
				}
			}
			if ( ! empty( $value_formatted ) && ! is_int( $value_formatted ) ) { // Ensure the only post objects are processed.
				$value_formatted->acf = tttc_get_fields_by_post_id( $value_formatted->ID );
			}
		}
		return $value_formatted;
	},
	10,
	5
);
