<?php
//sort repeater layouts by label on Add new button
function my_acf_load_field( $field ) {
	/*echo 'Before<pre>';
	var_dump( $field['layouts'] );
	echo '</pre>';*/
    //https://www.php.net/manual/en/function.usort.php
	usort($field['layouts'],function($layout_a, $layout_b){
		return ($layout_a['label'] >  $layout_b['label']);// sort by label ASC
	});
	/*echo 'After<pre>';
	var_dump( $field['layouts'] );
	echo '</pre>';
	die;*/
	return $field;
}

add_filter( 'acf/load_field/type=flexible_content', 'my_acf_load_field' );// https://www.advancedcustomfields.com/resources/acf-load_field/
