<?php

add_filter( 'block_categories_all', 'tttc_acf_category', 10, 2);
function tttc_acf_category( $block_categories, $editor_context  ) {
	if (! empty( $editor_context->post ) ) {
		array_push(
			$block_categories,
			array(
				
					'slug' => 'tttc-acf-category',
					'title' => __( 'TTTC ACF Blocks', 'twentytwentytwo' ),
					'icon' => 'welcome-widgets-menus', 
				
			)
		);
	}
	return $block_categories;
}