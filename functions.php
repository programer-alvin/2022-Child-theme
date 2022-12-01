<?php
add_action( 'woocommerce_before_single_product', 'test_woo', 10 );

function test_woo() {

	global $product;
	$id = $product->get_id();

	var_dump( $id );
	echo get_field( 'text_area', $id );
	echo '<br>';

	echo 'abc';
}

//inc
require_once trailingslashit( get_stylesheet_directory() ) . '/inc/inc.php';

// cpts
require_once trailingslashit( get_stylesheet_directory() ) . '/cpts/cpts.php';

// acf
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/acf.php';
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/blocks/acf-test-block/acf-test.php';
