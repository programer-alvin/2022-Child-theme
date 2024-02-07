<?php
if ( ! function_exists( 'tttc_acf_iframe_shortcode' ) ) {
	function tttc_acf_iframe_shortcode( $atts ) {
		$a       = shortcode_atts(
			array(
				'url_field'   => '', // It is recommended to hardcode this  instead of allowing users to access any field.
				'post_id' => false, // It is recommended to hardcode this instead of allowing users to access fields from any wordpress object.
			),
			$atts
		);
		$html    = ''; // Holds html content generated.
		$field   = $a['url_field'];
		$post_id = $a['post_id'];
		if ( '' !== $field ) {
			if ( function_exists( 'get_field' ) ) {
				$url = get_field( $field, $post_id );// retrieve url
				if ( $url ) {
					ob_start();
					tttc_embed_iframe( $url );
					$html.= ob_get_clean();
				}
			} else {
				$html .= 'Please ensure ACF is installed and activated.';
			}
		} else {
			$html .= 'url_field attribute is empty. Please add it';
		}
		return $html; // Return content.
	}
}
add_shortcode( 'tttc_acf_iframe', 'tttc_acf_iframe_shortcode' ); // Add shortcode.
// usage: [tttc_acf_iframe url_field="iframe_url"]


