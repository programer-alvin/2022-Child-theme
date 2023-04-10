<?php
function tttc_without_fields_block() {
	register_block_type( __DIR__ . '/block.json' );
}
add_action( 'init', 'tttc_without_fields_block' );

// echo __DIR__ . '/all-fields-block.json';//for testing the file system path.


function tttc_without_fields_block_no_fields_assigned_message( $message, $block_name ) {
	if ( $block_name == 'acf/without-fields-block' ) {
		return 'Optional';
	}
	return $message;

}

add_filter( 'acf/blocks/no_fields_assigned_message','tttc_without_fields_block_no_fields_assigned_message',10,2 );
