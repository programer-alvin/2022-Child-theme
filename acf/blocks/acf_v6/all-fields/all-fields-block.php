<?php
// register_block_type( '/acf/blocks/acf_v6/all-fields/all-fields-block.json' );
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/blocks/acf_v6/all-fields/field-group.php';

function tttc_all_fields_block() {
	register_block_type( __DIR__ . '/block.json' );
}
add_action( 'init', 'tttc_all_fields_block' );

// echo __DIR__ . '/all-fields-block.json';//for testing the file system path.


function tttc_no_fields_assigned_message( $message, $block_name ) {
	if ( $block_name == 'acf/all-fields-block' ) {
		return 'Optional';
	}
	return $message;

}

// add_filter( 'acf/blocks/no_fields_assigned_message','tttc_no_fields_assigned_message',10,2 );

add_action( 'acf/init', 'my_acf_init' );
function my_acf_init() {
	require_once trailingslashit( get_stylesheet_directory() ) . '/acf/blocks/acf_v6/all-fields/field-group.php';
}

