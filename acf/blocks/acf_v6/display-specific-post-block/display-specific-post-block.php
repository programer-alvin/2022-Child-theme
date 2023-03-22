<?php
// register_block_type( '/acf/blocks/acf_v6/all-fields/all-fields-block.json' );

function tttc_display_specific_post_block() {
	register_block_type( __DIR__ . '/block.json' );
}
add_action( 'init', 'tttc_display_specific_post_block' );

// echo __DIR__ . '/all-fields-block.json';//for testing the file system path.


add_action( 'acf/init', 'tttc_display_specific_post_block_acf_init' );
function tttc_display_specific_post_block_acf_init() {
	require_once trailingslashit( get_stylesheet_directory() ) . '/acf/blocks/acf_v6/display-specific-post-block/field-group.php';
}

