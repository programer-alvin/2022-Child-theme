<?php
/*
*   Template Name: Update Field Repeater
*   Template Post Type: post, page, careers
*/

?>
<?php
$field_name = 'repeater_field';
$value      = array(
	array(// row
		'text'       => 'test 1', // replace the subfield key
		'file_field' => '1823',
	),
	array(// row
		'text'       => 'test 2', // replace the subfield key
		'file_field' => '1823',
	),
);
$post_id    = get_the_ID();// replace with actual post ID.
update_field( $field_name, $value, $post_id, );

echo '<pre>';
var_export( get_field( 'repeater_field', false, false ) );
echo '</pre>';



