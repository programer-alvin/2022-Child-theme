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

// extended-functions
require_once trailingslashit( get_stylesheet_directory() ) . '/extended-functions.php';

// inc
require_once trailingslashit( get_stylesheet_directory() ) . '/inc/inc.php';

// cpts
require_once trailingslashit( get_stylesheet_directory() ) . '/cpts/cpts.php';

// acf
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/acf.php';

// actions-and-filters
require_once trailingslashit( get_stylesheet_directory() ) . '/actions-and-filters/actions-and-filters.php';

// Lightboxes.
require_once trailingslashit( get_stylesheet_directory() ) . '/lightboxes/lightboxes.php';


if ( file_exists( trailingslashit( get_stylesheet_directory() ) . 'test-functions.php' ) ) {
	require_once trailingslashit( get_stylesheet_directory() ) . 'test-functions.php';
}

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

add_filter( 'should_load_separate_core_block_assets', '__return_true' );// Allows assets to be loaded separately in themes such as Twenty Twenty One.


function add_event_date_to_permalink( $permalink, $post, $leavename ) {
	if ( $post->post_type == 'event' ) {
		$event_date = get_post_meta( $post->ID, 'event_date', true );
		if ( $event_date ) {
			$event_date = tttc_convert_date_from_one_format_to_another( $event_date, 'Ymd', 'd-m-Y' );
			if ( $event_date ) {
				$permalink = str_replace( '%event_date%', $event_date, $permalink );
			}
		}
	}
	return $permalink;
}
// add_filter( 'post_type_link', 'add_event_date_to_permalink', 10, 3 );


function tttc_register_cpt_event() {

	/**
	 * Post Type: Events.
	 */

	$labels = array(
		'name'          => esc_html__( 'Events', 'twentytwentytwo' ),
		'singular_name' => esc_html__( 'Event', 'twentytwentytwo' ),
	);

	$args = array(
		'label'                 => esc_html__( 'Events', 'twentytwentytwo' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'rest_namespace'        => 'wp/v2',
		'has_archive'           => false,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'can_export'            => false,
		// 'rewrite'               => array( 'slug' => 'event/%postname%-%event_date%' ), // set permalink structure for specific cpt
		'query_var'             => true,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'show_in_graphql'       => false,
	);

	register_post_type( 'event', $args );
}

add_action( 'init', 'tttc_register_cpt_event' );


?>

<?php
// Set the post ID where you want to insert the block
$post_id = 1;

// Set the block to be inserted
$block = array(
	'blockName' => 'core/paragraph',
	'attrs'     => array(
		'content' => 'This is the content of the paragraph block from insert_block() function.',
	),
);

// Insert the block
// insert_block( $block, '', $post_id );



add_shortcode( 'tttc_test', 'tttc_test_shortcode' );
function tttc_test_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'foo' => 'no foo',
			'baz' => 'default baz',
		),
		$atts,
		'bartag'
	);

	return "foo = {$atts['foo']}";
}

add_action( 'init', 'tttc_add_post_formats' );

function tttc_add_post_formats() {
	// https://wordpress.org/documentation/article/post-formats/#:~:text=A%20Post%20Format%20is%20a,every%20format%20on%20the%20list.
	add_theme_support( 'post-formats', array( 'audio', 'video', 'aside', 'gallery' ) );
	// https://wordpress.org/documentation/article/post-formats/#adding-post-type-support
	add_post_type_support( 'page', 'post-formats' );
	add_post_type_support( 'post', 'post-formats' );
}




if ( function_exists( 'acf_add_options_sub_page' ) ) {

	acf_add_options_sub_page(
		array(
			'page_title'  => 'Theme Header Settings',
			'menu_title'  => 'Header Test',
			'parent_slug' => 'themes.php',
		)
	);

}

function my_admin_notice() {
	?>
	<div class="error" style="width:100%;">
		<p>Search engines are blocked.</p>
	</div>
	<?php
}
// add_action( 'admin_notices', 'my_admin_notice' );


function tttc_enqueue_admin_script() {
	// Enqueue the admin script
	wp_enqueue_script( 'my-admin-script', get_stylesheet_directory_uri() . '/js/select-descendants-on-selecting-parent-term.js', array( 'jquery' ), '1.0', true );
}
add_action( 'admin_enqueue_scripts', 'tttc_enqueue_admin_script' );

function add_custom_oembed_provider() {
	wp_oembed_add_provider( 'http://localhost/counter/', 'http://localhost/counter/api/oembed/' );
}
add_action( 'init', 'add_custom_oembed_provider' );

add_filter( 'pre_oembed_result', 'tttc_custom_oembed_caching', 10, 3 );

function tttc_custom_oembed_caching( $html, $url, $args ) {
	$cache_key      = 'oembed_' . md5( $url );
	$cached_content = get_transient( $cache_key );

	if ( $cached_content !== false ) {
		// Content found in cache, return it
		return $cached_content->html;
	}

	// Bypass wp_oembed_get() to avoid infinite loop
	remove_filter( 'pre_oembed_result', 'tttc_custom_oembed_caching', 10 );

	$content = wp_oembed_get( $url );

	// Restore the filter after fetching the oEmbed data
	add_filter( 'pre_oembed_result', 'tttc_custom_oembed_caching', 10, 3 );

	if ( $content !== false ) {
		// Cache the content for 1 day
		set_transient( $cache_key, $content, DAY_IN_SECONDS );
	}

	return $content;
}




add_filter( 'tttc/registered_fields_via_php/key=group_abcdef1', 'tttc_modify_field_group', 10, 2 );

function tttc_modify_field_group( $fields, $group_key ) {
	foreach ( $fields as &$field ) {
		if ( $field['key'] === 'field_abcdef1' ) {// repeater
			// add subfield to repeater
			array_push(
				$field['sub_fields'],
				array(
					'key'   => 'field_abcdef6',
					'label' => 'Sub 5',
					'name'  => 'sub_5',
					'type'  => 'text',
				)
			);
		}
	}
	return $fields;
}

function tttc_add_default_background_class_if_not_exist( $wrapper_attributes, $background_color_class ) {
	if ( strpos( $wrapper_attributes, 'has-background' ) !== false ) {
		return $wrapper_attributes;
	} else {
		return $wrapper_attributes . ' ' . $background_color_class;
	}
}

