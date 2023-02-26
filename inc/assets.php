<?php
//enqueues JS and CSS
function test_style() {
	wp_enqueue_style( 'index-style', get_stylesheet_directory_uri() . '/inc/styles/index.css' );
	//wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
}
add_action( 'init', 'test_style' );