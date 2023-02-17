<?php
$tttc_acf_restricted_block_dir = trailingslashit( get_stylesheet_directory() ) . 'acf/blocks/acf-restricted-block';
require_once  $tttc_acf_restricted_block_dir . '/field-group.php';
add_action( 'acf/init', 'tttc_acf_init_blocks' );
function tttc_acf_init_blocks() {

	// Check function exists.
	if ( function_exists( 'acf_register_block_type' ) ) {

		// Register a restricted block.
		acf_register_block_type(
			array(
				'name'            => 'restricted',
				'title'           => 'Restricted',
				'description'     => 'A restricted content block.',
				'category'        => 'formatting',
				'mode'            => 'preview',
				'supports'        => array(
					'align' => true,
					'mode'  => 'auto',// set it to false when you want to disable edit/preview mode
					'jsx'   => true,
				),
				'example'         => array(
					'attributes' => array(
						'cover'  => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
						'author' => 'Alvin Muthui',
						'data'   => array(
							'text'       => 'This is an example text field',
							'text_area'  => 'This is an example text area field',
							'is_example' => true,
							'is_preview'    => true,//https://www.advancedcustomfields.com/resources/acf_register_block_type/#functionsphp
						),
					),
				),
				'render_template' => 'acf/blocks/acf-restricted-block/template.php',////template-parts/blocks/restricted/restricted.php
			)
		);
	}
}
