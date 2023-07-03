<?php
function tttc_default_time_value( $value, $post_id, $field ) {
	if(empty($value)){
		$value='14:30:00';// Default value.
	}
	return $value;
}

add_filter( 'acf/load_value/name=time', 'tttc_default_time_value', 10, 3 );