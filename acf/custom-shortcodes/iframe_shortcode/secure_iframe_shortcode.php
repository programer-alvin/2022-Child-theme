<?php
// https://codex.wordpress.org/Shortcode_API
function tttc_my_iframe( $atts ) {
	$url                = get_field( 'iframe_url' );
	$iframe_title       = get_field( '' );
	$iframe_width       = get_field( 'iframe_width' );
	$iframe_height      = get_field( 'iframe_height' );
	$div_class          = get_field( 'div_class' );
	$iframe_class       = get_field( 'iframe_class' );
	$iframe_frameborder = get_field( 'iframe_frameborder' );
	ob_start();
	if ( $url ) {
		tttc_embed_iframe( $url, $iframe_title = '', $iframe_width, $iframe_height, $div_class, $iframe_class, $iframe_frameborder );
	}
	return ob_get_clean();
}
add_shortcode( 'tttc_embed_iframe', 'tttc_my_iframe' );
//Usage [tttc_embed_iframe ]