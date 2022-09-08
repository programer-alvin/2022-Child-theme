<?php
function tttc_all_inner_block() {
	register_block_type( __DIR__ . '/inner-block.json' );
}
add_action( 'init', 'tttc_all_inner_block' );