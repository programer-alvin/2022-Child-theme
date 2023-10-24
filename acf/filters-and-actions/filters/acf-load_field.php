<?php
// https://www.advancedcustomfields.com/resources/acf-load_field/
function tttc_acf_load_field( $field ) {
	// tttc_log( $field );
	if ( $field['label'] == 'accordion' ) {// label of your accordion field.
		$field['label'] = get_field( 'text' );// update the label
	}
	return $field;
}
// Apply to accordion fields.
 add_filter( 'acf/load_field/type=accordion', 'tttc_acf_load_field' );

function tttc_disable_post_object_field( $field ) {
	if ( is_admin() ) {
		$field['disabled'] = 'disabled';
	}

	return $field;
}
// add_filter( 'acf/load_field/type=post_object', 'tttc_disable_post_object_field' );

function tttc_get_decades( $min, $max ) {
	$decades = array();
	for ( $i = $min;$i <= $max;$i += 10 ) {
		$decades = array_merge( $decades, array( $i . '_' => $i . '\'s' ) );
	}
	return $decades;
}

function tttc_acf_load_field_select( $field ) {
	$field['required'] = true;
	$field['choices']  = tttc_get_decades( 1880, 2050 );
	return $field;
}

// add_filter( 'acf/load_field/type=select', 'tttc_acf_load_field_select' );


function tttc_get_choices_from_options(){
	$choices=array();
	// acf\field_groups.php 1727
	$repeater_value=get_field('choices', 'options');// \acf\options-pages\theme-general-settings.php L2
	if($repeater_value){
		foreach($repeater_value as $row){
			$choices[$row['value']]=$row['label'];
		}
	}
	return $choices;
}

function tttc_acf_load_field_select_choices_from_options_page( $field ) {
	$field['choices']  = tttc_get_choices_from_options();
	return $field;
}

add_filter( 'acf/load_field/name=select', 'tttc_acf_load_field_select_choices_from_options_page' );