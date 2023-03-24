<?php

add_action( 'acf/init', 'tttc_acf_init_location_types' );
function tttc_acf_init_location_types() {

	// Check function exists, then include and register the custom location type class.
	if ( function_exists( 'acf_register_location_type' ) ) {
		include_once trailingslashit( get_stylesheet_directory() ) . '/acf/location-rules/class-my-acf-location-post-author-role.php';
		acf_register_location_type( 'My_ACF_Location_Post_Author_Role' );
	}
}

// https://www.advancedcustomfields.com/resources/custom-location-rules/
add_action( 'acf/init', 'tttc_acf_init_location_types_2' );
function tttc_acf_init_location_types_2() {

	// Check function exists, then include and register the custom location type class.
	if ( function_exists( 'acf_register_location_type' ) ) {
		include_once trailingslashit( get_stylesheet_directory() ) . '/acf/location-rules/class-tttc-acf-location-has-parent.php';
		// require_once trailingslashit( get_stylesheet_directory() ) . '/acf/location-rules/location-rules.php';
		acf_register_location_type( 'My_ACF_Location_Has_Parent' );
	}
}

// https://www.advancedcustomfields.com/resources/custom-location-rules/
add_action( 'acf/init', 'tttc_acf_init_location_types_3' );// To be used in themes that support menus like 2021
function tttc_acf_init_location_types_3() {

	// Check function exists, then include and register the custom location type class.
	if ( function_exists( 'acf_register_location_type' ) ) {
		include_once trailingslashit( get_stylesheet_directory() ) . '/acf/location-rules/class-tttc-acf-location-menu-item-depth.php';
		// require_once trailingslashit( get_stylesheet_directory() ) . '/acf/location-rules/location-rules.php';
		acf_register_location_type( 'My_ACF_Location_Menu_Item_Depth' );
	}
}


