<?php
function tttt_register_my_cpts_test() {

	/**
	 * Post Type: Tests.
	 */

	$labels = [
		"name" => __( "Tests", "twentytwentytwo" ),
		"singular_name" => __( "Test", "twentytwentytwo" ),
	];

	$args = [
		"label" => __( "Tests", "twentytwentytwo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		//"rest_base" => "",
		//"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "test", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "test", $args );
}

add_action( 'init', 'tttt_register_my_cpts_test' );
