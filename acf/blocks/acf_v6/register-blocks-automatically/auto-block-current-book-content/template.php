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
	$post_id=get_the_ID();// https://developer.wordpress.org/reference/functions/get_the_id/
	if($post_id){
		$post_type=get_post_type( $post_id);
		if('book'===$post_type){
			$title=get_field('title', $post_id);
			if($title){
				echo $title;
			}
		}else{
			echo  'This block should be added on a book post type';
		}
	}


}
