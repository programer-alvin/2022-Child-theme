<?php
// https://www.advancedcustomfields.com/resources/acf-validate_value/
function tttc_unique_value( $valid, $value, $field, $input_name ) {

	// Bail early if value is already invalid.
	if ( $valid !== true ) {
		return $valid;
	}

	// Prevent value from saving if it contains the companies old name.
	if ( is_string( $value ) && ! tttc_is_unique( $field['name'], $value ) ) {
		return __( 'The field value already exists".' );

	}
	return $valid;
}

// Apply to all fields.
// add_filter( 'acf/validate_value/name=text', 'tttc_unique_value', 10, 4 );


function tttc_is_unique( $field, $value ) {
	$args  = array(
		'numberposts' => -1,
		'post_status' => 'any',
	);
	$posts = get_posts( $args );
	foreach ( $posts as $post ) {
		if ( get_field( $field, $post->ID ) == $value ) {
			return false;
		}
	}
	return true;
}


function tttc_limit_password_size( $valid, $value, $field, $input_name ) {

	// Bail early if value is already invalid.
	if ( $valid !== true ) {
		return $valid;
	}

	if(strlen($value)>8){
		return __( 'Exceeds char limit.' );
	}
	return $valid;
}

// Apply to all fields.
 add_filter( 'acf/validate_value/type=password', 'tttc_limit_password_size', 10, 4 );
 add_filter( 'acf/validate_value/name=text_area', 'tttc_limit_password_size', 10000, 4 );

