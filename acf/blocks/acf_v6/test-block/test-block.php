<?php
function tttc_test_block_render_callback() {
	echo 'tttc_test_block_render_callback Test';
}
function tttc_register_test_block() {
    //https://developer.wordpress.org/reference/classes/wp_block_type/__construct/
	$args = array(
		'render_callback' => 'tttc_test_block_render_callback',
	);
	register_block_type( __DIR__ . '/block.json', $args );//https://developer.wordpress.org/reference/functions/register_block_type/
}
add_action( 'init', 'tttc_register_test_block' );
