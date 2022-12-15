<?php

function tttc_register_my_custom_menu_page() {
	add_menu_page(
		__( 'Custom Menu Title', 'textdomain' ),
		'custom menu',
		'manage_options',
		'custompage',
		'my_custom_menu_page_callback',
		plugins_url( 'myplugin/images/icon.png' ),
		6
	);
}
add_action( 'admin_menu', 'tttc_register_my_custom_menu_page' );

/**
 * Display a custom menu page
 */
function my_custom_menu_page_callback() {
	esc_html_e( 'Admin Page Test', 'textdomain' );
	echo '<pre>';
	var_dump( get_field( 'repeater', 1 ) );
	echo '</pre>';
}
