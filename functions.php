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

// inc
require_once trailingslashit( get_stylesheet_directory() ) . '/inc/inc.php';

// cpts
require_once trailingslashit( get_stylesheet_directory() ) . '/cpts/cpts.php';

// acf
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/acf.php';


// todo: Find a way to enqueue the script in acf/slick-slider-block and have the preview fired. Then remove the code below
function tttc_slick_slider_block_scripts() {
	wp_enqueue_script( 'block-slider', get_stylesheet_directory_uri() . '/acf/blocks/acf_v6/slick-slider/script.js', array(), '1.0.0', true );
}
 add_action( 'admin_enqueue_scripts', 'tttc_slick_slider_block_scripts' );// allows acf/slick-slider-block block preview to be fired in the admin




function my_acf_add_local_field_groups() {

	acf_add_local_field_group(
		array(
			'key'      => 'group_1',
			'title'    => 'My Group',
			'fields'   => array(
				array(
					'key'   => 'field_1',
					'label' => 'Sub Title',
					'name'  => 'sub_title',
					'type'  => 'text',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'post',
					),
				),
			),
		)
	);

}

   add_action( 'acf/init', 'my_acf_add_local_field_groups' );




   // [bartag foo="foo-value"]
function bartag_func( $atts ) {
	$a = shortcode_atts(
		array(
			'foo' => 'something',
			'bar' => 'something else',
		),
		$atts
	);

	//global $query;
	//$query->the_post();
	return 'shortcode test: ' + json_encode(get_the_ID());
}
add_shortcode( 'our_test', 'bartag_func' );
