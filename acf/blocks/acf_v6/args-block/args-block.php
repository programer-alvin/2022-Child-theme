<?php
function tttc_args_block_render_callback() {
	echo 'tttc_args_block_render_callback Test';
}
function tttc_register_args_block() {
	// https://developer.wordpress.org/reference/classes/wp_block_type/__construct/
	$args = array(
		'title'           => 'Test Block Title From Args', // overrides title in block.json
		'category'        => 'tttc-acf-category',
		'render_callback' => 'tttc_args_block_render_callback',
		'description'     => 'Test block description from Args',
		'keywords'        => array( 'test', 'block', 'args' ),
		// 'icon'         => 'admin-comments',
		'supports'        => array(
			'align'     => false,
			'alignWide' => false,
			'html'      => false,
			//'multiple'  => false,
		),

	);
	register_block_type( __DIR__ . '/block.json', $args );// https://developer.wordpress.org/reference/functions/register_block_type/
}
add_action( 'init', 'tttc_register_args_block' );
