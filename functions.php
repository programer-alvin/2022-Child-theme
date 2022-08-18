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

// acf
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/acf.php';
