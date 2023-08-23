<?php
function tttc_default_time_value( $value, $post_id, $field ) {
	if(empty($value)){
		$value='14:30:00';// Default value.
	}
	return $value;
}

add_filter( 'acf/load_value/name=time', 'tttc_default_time_value', 10, 3 );

add_filter( 'acf/load_value/name=repeater_field_name', 'tttc_load_first_row_if_empty_repeater', 10, 3 );// https://www.advancedcustomfields.com/resources/acf-load_value/

	function tttc_load_first_row_if_empty_repeater( $value, $post_id, $field ) {
		echo '<pre>';
		var_export( $value );
		echo '</pre>';
		if ( empty( $value ) && is_admin() ) {
			$value = array(
				array(// row
					'field_64ddf874b98b0' => '', // subfield value
					'field_64ddf874b98b1' => '', // subfield value
				),
			);
		}
		return $value;
	}