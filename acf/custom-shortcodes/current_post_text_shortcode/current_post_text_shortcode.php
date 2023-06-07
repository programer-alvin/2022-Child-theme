<?php
if ( ! function_exists( 'tttc_acf_current_post_text_shortcode' ) ) {
	function tttc_acf_current_post_text_shortcode( $atts ) {
		$a     = shortcode_atts(
			array(
				'field' => '', // It is recommended to hardcode this  instead of allowing users to access any field.
			),
			$atts
		);
		$html  = ''; // Holds html content generated.
		$field = $a['field'];
		// One might need to use get_queried_object_id for other objects https://developer.wordpress.org/reference/functions/get_queried_object_id/
		$post_id = get_the_ID();// https://developer.wordpress.org/reference/functions/get_the_id/
		if ( is_numeric( $post_id ) ) {// https://www.php.net/manual/en/function.is-numeric.php
			if ( '' !== $field ) {
				if ( function_exists( 'get_field' ) ) {
					$html .= get_field( $field, $post_id );// retrieve field data
				} else {
					$html .= 'Please ensure ACF is installed and activated.';
				}
			} else {
				$html .= 'field attribute is empty. Please add it';
			}
		} else {
			$html .= 'No valid post id is retrieved';
		}
		return $html; // Return content.
	}
}
add_shortcode( 'tttc_acf_current_post_text', 'tttc_acf_current_post_text_shortcode' ); // Add shortcode.
// usage: [tttc_acf_current_post_text field="text"]
