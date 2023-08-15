<?php
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
	$field_value=get_field('textarea','options');
	if($field_value){
		echo '<div>'.$field_value.'</div>';
	}
	
}

