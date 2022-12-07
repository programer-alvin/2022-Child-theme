<?php
// register_block_type( '/acf/blocks/acf_v6/all-fields/all-fields-block.json' );
// https://www.advancedcustomfields.com/blog/building-a-custom-slider-block-in-30-minutes-with-acf/

require_once trailingslashit( get_stylesheet_directory() ) . '/acf/blocks/acf_v6/slick-slider/field-group.php';



function tttc_register_slick_slider_block() {
	register_block_type( __DIR__ . '/block.json' );
}
add_action( 'init', 'tttc_register_slick_slider_block' );

// echo __DIR__ . '/all-fields-block.json';//for testing the file system path.


function tttc_slick_slider_no_fields_assigned_message( $message, $block_name ) {
	if ( $block_name == 'acf/slick-slider-block' ) {
		return 'Optional';
	}
	return $message;

}

// add_filter( 'acf/blocks/no_fields_assigned_message','tttc_slick_slider_no_fields_assigned_message',10,2 );

add_action( 'acf/init', 'my_acf_init_slick_slider' );
function my_acf_init_slick_slider() {
	require_once trailingslashit( get_stylesheet_directory() ) . '/acf/blocks/acf_v6/all-fields/field-group.php';
}





