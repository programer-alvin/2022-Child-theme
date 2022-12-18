<?php
//https://drive.google.com/file/d/1OlHHf6fmLbEmnn3RFmuaiklvlZdXxakI/view?usp=sharing
if ( ! function_exists( 'tttc_acf_gallery_shortcode' ) ) {
	function tttc_acf_gallery_shortcode( $atts ) {
		$a       = shortcode_atts(
			array(
				'field'   => '',
				'post_id' => false,
			),
			$atts
		);
		$html    = ''; // Holds html content generated.
		$field   = $a['field'];
		$post_id = $a['post_id'];
		if ( '' !== $field ) {
			if ( function_exists( 'get_field' ) ) {
				$gallery = get_field( $field, $post_id, false );// retrieve images ids
				if ( $gallery ) {
					$html .= '<div >';
					foreach ( $gallery as $image_id ) {

						$url = esc_attr( wp_get_attachment_url( $image_id ) );// https://developer.wordpress.org/reference/functions/wp_get_attachment_url/

						$html .= '<img src="' . $url . '" alt="image" />';
					}
					$html .= '</div>';
				} else {
					$html .= 'No images found';
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
add_shortcode( 'tttc_acf_gallery', 'tttc_acf_gallery_shortcode' ); // Add shortcode.
// usage: [tttc_acf_gallery field="gallery"]
