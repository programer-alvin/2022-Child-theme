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

	if ( strlen( $value ) > 8 ) {
		return __( 'Exceeds char limit.' );
	}
	return $valid;
}

// Apply to all fields.
 add_filter( 'acf/validate_value/type=password', 'tttc_limit_password_size', 10, 4 );
 add_filter( 'acf/validate_value/name=text_area', 'tttc_limit_password_size', 10000, 4 );

 /**
 * Function to check if a given string is a valid tel: link
 *
 * @param string $telLink The input string to check for a valid tel: link.
 *
 * @return bool Returns true if the input is a valid tel: link, otherwise false.
 */
function is_tel_link($telLink) {
    // Define the regex pattern for a tel: link
    $pattern = '/^tel:(\+?\d{1,}|(\(\d{1,}\))?\d{1,})$/'; // Modify pattern to meet your requirements

    // Use preg_match to check if the $telLink matches the pattern
    if (preg_match($pattern, $telLink)) {
        return true;
    }
    return false;
}

/**
 * Function to check if a given string is a valid mailto link
 *
 * @param string $mail_link The input string to check for a valid mailto link.
 *
 * @return bool Returns true if the input is a valid mailto link, otherwise false.
 */
function is_mail_link($mail_link) {
    // Define the regex pattern for a mailto link
    $pattern = '/^mailto:[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    // Use preg_match to check if the $mail_link matches the pattern
    return preg_match($pattern, $mail_link) === 1;
}

/**
 * Custom ACF validation function
 *
 * @param bool   $valid      The current validation status.
 * @param mixed  $value      The value of the field being validated.
 * @param array  $field      The ACF field array.
 * @param string $input_name The name of the input field.
 *
 * @return bool Returns true if the value is valid, otherwise returns the original validation status.
 */
function tttc_acf_validate_url_value($valid, $value, $field, $input_name) {
    // Bail early if the value is already invalid.
    if ($valid !== true) {
        // Check if the value is a valid tel: or mailto link
        if (is_tel_link($value) || is_mail_link($value)) {
            return true;
        }
        // If not a tel: or mailto link, return the original validation status
        return $valid;
    }

    // If the value is valid, return the original validation status
    return $valid;
}

// Apply custom validation to all fields of type "url" using ACF filter
add_filter('acf/validate_value/type=url', 'tttc_acf_validate_url_value', 10, 4);
// More information about ACF validation: https://www.advancedcustomfields.com/resources/acf-validate_value/#example
