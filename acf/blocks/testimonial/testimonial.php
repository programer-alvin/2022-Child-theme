<?php
// fields
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/blocks/testimonial/field-group.php';

add_action( 'acf/init', 'my_acf_init_block_types' );
function my_acf_init_block_types() {

	// Check function exists.
	if ( function_exists( 'acf_register_block_type' ) ) {

		// register a testimonial block.
		acf_register_block_type(
			array(
				'name'            => 'testimonial',
				'title'           => __( 'Testimonial' ),
				'description'     => __( 'A custom testimonial block.' ),
				'render_template' => 'acf/blocks/testimonial/template.php',
				'category'        => 'formatting',
				'icon'            => 'admin-comments',
				'keywords'        => array( 'testimonial', 'quote' ),
			)
		);
	}
}

