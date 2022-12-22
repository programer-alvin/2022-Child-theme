<?php
add_filter( 'wp_kses_allowed_html', 'tttc_acf_add_allowed_p_tag', 10, 2 );
function tttc_acf_add_allowed_p_tag( $tags, $context ) {
	if ( $context === 'acf' ) {
		$tags['p'] = array(
			'value' => true,
			'type'  => true,
			'name'  => true,
			'class' => true,
		);

	}

	return $tags;
}


add_filter( 'wp_kses_allowed_html', 'tttc_acf_add_allowed_style_tag', 10, 2 );
function tttc_acf_add_allowed_style_tag( $tags, $context ) {
	if ( $context === 'acf' ) {
		$tags['style'] = true;

	}

	return $tags;
}

add_filter( 'wp_kses_allowed_html', 'tttc_acf_add_allowed_svg_tag', 10, 2 );

function tttc_acf_add_allowed_svg_tag( $tags, $context ) {
	if ( $context === 'acf' ) {
		$tags['svg'] = true;

	}

	return $tags;
}