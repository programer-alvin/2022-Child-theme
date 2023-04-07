<?php
add_action( 'acf/validate_save_post', 'my_acf_validate_save_post' );
function my_acf_validate_save_post() {
	// Remove all errors if user is an administrator.
	if ( current_user_can( 'manage_options' ) ) {
		acf_reset_validation_errors();
	}
	if ( array_key_exists( 'acf', $_POST ) ) {
		$acf_data = $_POST['acf'];
		if ( array_key_exists( 'field_64302bd842b7e', $acf_data ) && array_key_exists( 'field_64302c1942b7f', $acf_data ) ) {
			$start_date = $acf_data['field_64302bd842b7e'];
			$end_date   = $acf_data['field_64302c1942b7f'];
			if ( $start_date > $end_date ) {
				acf_add_validation_error( 'acf[field_64302bd842b7e]', 'The start date should be equal to end date or earlier' );
			}
		}
	}

}
