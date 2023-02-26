<?php
/*
echo 'test block';
echo get_field('author');
echo '<pre>';
var_export($block);

echo '</pre>';*/


if ( get_field( 'is_example' ) ) {// https://support.advancedcustomfields.com/forums/topic/register-block-preview-image-with-acf_register_block_type/
	/* Render preview screenshot/html on this section*/
	if ( array_key_exists( 'example', $block ) ) {
		$example = $block['example'];
		if ( array_key_exists( 'attributes', $example ) ) {
			$attributes = $example['attributes'];
			if ( array_key_exists( 'cover', $attributes ) ) {
				$cover = $attributes['cover'];
			}
		}
	}

	if ( $cover ) {
		echo '<img src="' . $cover . '" alt="block-preview-screenshot">';
	}
} else {
	$clone_block_heading = get_field( 'block_heading_block_heading' );// clone field name

	echo '<p>Get Field using key</p>';
	echo '<pre>';
	var_export( get_field( 'field_616c12495b1da' ) );
	echo '</pre>';


	echo '<p>Get Field using name</p>';
	echo '<pre>';
	var_export( get_field( 'text' ) );
	echo '</pre>';


	echo '<p>Class Name contains selected style</p>';
	echo '<pre>';
	var_export( $block['className'] );
	echo '</pre>';

	echo '<p>Styles</p>';
	echo '<pre>';
	var_export( $block['styles'] );
	echo '</pre>';

	echo '<p>block_heading</p>';
	echo '<pre>';
	var_export( $clone_block_heading );
	echo '</pre>';


	/* Render live block HTML on this section*/
	echo "<p>['style']['spacing']['margin']</p>";
	echo '<pre>';
	var_export( $block['style']['spacing']['margin'] );
	echo '</pre>';
	echo "<p>Block Gap: ['style']['spacing']['blockGap']</p>";
	echo '<pre>';
	var_export( $block['style']['spacing']['blockGap'] );
	echo '</pre>';
	echo "<p>Style: ['style']</p>";
	echo '<pre>';
	var_export( $block['style'] );
	echo '</pre>';
	echo '<p>Link color</p>';
	echo '<pre>';

	$spacing_css = tttc_convert_spacing_array_to_css( $block['style']['spacing']['margin'] );// acf/blocks/blocks-helpers.php
	$block_css = '.' . $block['className'] . ' {' . $spacing_css . '}';
	echo '<p>Code Generated Spacing css</p>';
	echo '<pre>';
	var_dump( $block_css );
	echo '</pre>';

	var_export( $block['style']['elements']['link']['color'] );
	echo '</pre>';
	echo '<p>backgroundColor</p>';
	echo '<pre>';
	var_export( $block['backgroundColor'] );
	echo '</pre>';
	echo '<p>textColor</p>';
	echo '<pre>';
	var_export( $block['textColor'] );
	echo '</pre>';

	echo '<p>Block</p>';
	echo '<pre>';
	var_export( $block );
	echo '</pre>';
	echo '<p>Test</p>';

	// var_dump($block['example']['attributes']['cover']);


	if ( get_field( 'true_false_field_name' ) ) {
		// Do something.
		if ( ! function_exists( 'wpdocs_theme_name_scripts' ) ) {
			function wpdocs2test_theme_name_scripts() {
				wp_enqueue_style( 'style-name', get_stylesheet_uri() );
				wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
			}
			add_action( 'wp_enqueue_scripts', 'wpdoc_theme_name_scripts' );

		}
	}
}









