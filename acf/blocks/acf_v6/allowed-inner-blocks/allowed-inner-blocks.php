<?php
function tttc_allowed_inner_blocks() {
	register_block_type( __DIR__ . '/block.json' );
}
add_action( 'init', 'tttc_allowed_inner_blocks' );