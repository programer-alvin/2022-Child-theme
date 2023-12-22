<?php
function tttc_default_time_value( $value, $post_id, $field ) {
	if ( empty( $value ) ) {
		$value = '14:30:00';// Default value.
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

function tttc_default_image_value( $value, $post_id, $field ) {
	if ( empty( $value ) ) {
		$value = 274;// Default value. //replace the value with a known image ID.
	}
	return $value;
}

add_filter( 'acf/load_value/name=image', 'tttc_default_image_value', 10, 3 );// https://www.advancedcustomfields.com/resources/acf-load_value/

function tttc_default_gallery_value( $value, $post_id, $field ) {
	if ( empty( $value ) ) {
		$value = array( 274, 288 );// Default value. //replace the value with a known image ID.
	}
	return $value;
}

add_filter( 'acf/load_value/name=gallery', 'tttc_default_gallery_value', 10, 3 );// https://www.advancedcustomfields.com/resources/acf-load_value/

function tttc_default_repeater_value( $value, $post_id, $field ) {
	if(!$value){
		// acf/field_groups.php line 779
		$value= array(
			array(//row
			'field_63b82e82bd87c' => 'some text on sub field 1', // sub field 1.
			'field_63b82e8fbd87d' => 'some text on sub field 2', // sub field 2.
			'field_623ef4772a244'=> 288, // image. Replace attachment id 288 with valid image attachment Id.
			'field_624da4b831947'=>'some text on caption', // sub field 2.
			)
		);
	}
	return $value;
}

add_filter( 'acf/load_value/name=repeater', 'tttc_default_repeater_value', 10, 3 );// https://www.advancedcustomfields.com/resources/acf-load_value/

function tttc_default_taxonomy_value( $value, $post_id, $field ) {
	if(empty($value)){
		return array(7);//replace 7 with actual term ID.
	}
	return $value;
}

add_filter('acf/load_value/name=my_taxonomy', 'tttc_default_taxonomy_value', 10, 3);