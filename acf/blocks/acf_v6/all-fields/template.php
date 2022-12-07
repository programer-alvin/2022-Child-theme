<?php
/*
echo 'test block';
echo get_field('author');
echo '<pre>';
var_export($block);

echo '</pre>';*/



if ( get_field( 'is_example' ) ) {
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
	/* Render live block HTML on this section*/
	echo '<pre>';
	var_export( $block['style']['spacing']['margin'] );

	echo '</pre>';
	echo '<p>Test</p>';

	// var_dump($block['example']['attributes']['cover']);
}


if( get_field('true_false_field_name') ) {
    // Do something.
    if(!function_exists('wpdocs_theme_name_scripts')){
        function wpdocs2test_theme_name_scripts() {
            wp_enqueue_style( 'style-name', get_stylesheet_uri() );
            wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
        }
        add_action( 'wp_enqueue_scripts', 'wpdoc_theme_name_scripts' );

    }

}