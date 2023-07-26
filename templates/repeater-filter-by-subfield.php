<?php
/*
 Template Name: Repeater Filter Sub Field
*  Template Post Type: post, page, careers
*/

?>
<?php
function get_filtered_repeater_by_subfield( $sub_2_value ) {
	$repeater_data = get_field( 'repeater_field' ); // Replace 'repeater_field' with the actual field name used in the field group.

	if ( empty( $repeater_data ) ) {
		return array();
	}

	// Use array_filter to filter the repeater data based on 'sub_2' value.
	$filtered_repeater_data = array_filter(
		$repeater_data,
		function ( $item ) use ( $sub_2_value ) {
			return $item['sub_2'] === $sub_2_value;
		}
	);

	return $filtered_repeater_data;
}

$sub_2_value_to_filter = 'Value to filter'; // Replace this with the value you want to filter.

$filtered_repeater = get_filtered_repeater_by_subfield($sub_2_value_to_filter);

echo '<pre>';
var_dump($filtered_repeater);
echo '</pre>';

// Now you have the filtered repeater data containing items where 'sub_2' matches the given value.
