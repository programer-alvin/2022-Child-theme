<?php
// https://drive.google.com/file/d/1OlHHf6fmLbEmnn3RFmuaiklvlZdXxakI/view?usp=sharing
if ( ! function_exists( 'tttc_get_data_from_current_user_shortcode' ) ) {
	function tttc_get_data_from_current_user_shortcode( $atts ) {
		$a       = shortcode_atts(
			array(
				'field' => '', // It is recommended to hardcode this  instead of allowing users to access any field.
			),
			$atts
		);
		$html    = ''; // Holds html content generated.
		$field   = $a['field'];
		$user_id = get_current_user_id();// https://developer.wordpress.org/reference/functions/get_current_user_id/
		$post_id = 'user_' . $user_id;// this exposes user meta data. You might need to hardcode $field to restrict data exposed to everyone.
		if ( '' !== $field ) {
			if ( function_exists( 'get_field' ) ) {
				$value = get_field( $field, $post_id, false );// retrieve images ids
				if ( $value ) {
					if ( is_string( $value ) ) {
						$html = $value;
					} else {
						$html = json_encode( $value );
					}
				} else {
					$html .= 'No value found';
				}
			} else {
				$html .= 'Please ensure ACF is installed and activated.';
			}
		} else {
			$html .= 'field attribute is empty. Please add it';
		}
		return $html; // Return content.
	}
}
add_shortcode( 'tttc_get_data_from_current_user', 'tttc_get_data_from_current_user_shortcode' ); // Add shortcode.
// usage: [tttc_get_data_from_current_user field="text"]
