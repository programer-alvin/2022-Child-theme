<?php
function tttc_register_cpt_member() {

	/**
	 * Post Type: Tests.
	 */

	$labels = [
		"name" => __( "Members", "twentytwentytwo" ),
		"singular_name" => __( "Member", "twentytwentytwo" ),
	];

	$args = [
		"label" => __( "Members", "twentytwentytwo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		/*//"show_in_rest" => true,
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
		"rewrite" => [ "slug" => "member", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,*/
	];

	register_post_type( "member", $args );
}

add_action( 'init', 'tttc_register_cpt_member' );

require_once $tttc_cpts_dir . '/members/field-group.php';
