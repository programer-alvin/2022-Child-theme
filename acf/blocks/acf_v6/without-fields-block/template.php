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
	echo 'A block without fields';
}









