<?php
// https://www.advancedcustomfields.com/resources/repeater/#foreach-loop
if ( ! function_exists( 'tttc_acf_repeater_shortcode' ) ) {
	function tttc_acf_repeater_shortcode( $atts ) {
		$a       = shortcode_atts(
			array(
				'field'   => '', // It is recommended to hardcode this  instead of allowing users to access any field.
				'post_id' => false, // It is recommended to hardcode this instead of allowing users to access fields from any wordpress object.
			),
			$atts
		);
		$html    = ''; // Holds html content generated.
		$field   = $a['field'];
		$post_id = $a['post_id'];
		if ( '' !== $field ) {
			if ( function_exists( 'get_field' ) ) {
				$repeater_rows = get_field( $field, $post_id );// retrieve repeater data
				if ( $repeater_rows ) {
					$html .= '<ul class="slides">';
					foreach ( $repeater_rows as $row ) {
						$image = $row['image'];// subfield image set to return ID
						$html .= '<li>';
						$html .= wp_get_attachment_image( $image, 'full' );
						$html .= wpautop( $row['caption'] );
						$html .= '</li>';
					}
					$html .= '</ul>';

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
add_shortcode( 'tttc_acf_repeater', 'tttc_acf_repeater_shortcode' ); // Add shortcode.
// usage: [tttc_acf_repeater field="repeater"]
