<?php
/**
 * ACF Call to Action example block template.
 *
 * More info: https://www.advancedcustomfields.com/resources/acf_register_block_type/
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 *
 */

// Create id attribute allowing for custom "anchor" value.
$block_id = 'acf-call-to-action-block-demo-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'acf-call-to-action-demo';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

?>


<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_html( $class_name ); ?>">

	<div class="cta__inner">
			<?php

			// Set up innerBlocks and provide a template.

			// Restrict InnerBlocks to allowed block list.
			$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons' );

			// Start InnerBlocks with a template.
			$template = array(
				array(
					'core/heading',
					array(
						'placeholder' => __( 'Heading', 'locale' ),
						'align'       => 'center',
						'level'       => '2',
						'lock'        => array(
							'move'   => true, // Block may nto be moved.
							'remove' => true, // Block may not be removed.
						),
					),
				),
				array(
					'core/paragraph',
					array(
						'placeholder' => __( 'Add CTA text here', 'locale' ),
						'align'       => 'center',
					),
				),
				array(
					'core/buttons',
					array(
						'placeholder' => __( 'Add CTA buttons here', 'locale' ),
						'align'       => 'center',
						'lock'        => array(
							'move'   => true, // Block may not be moved.
							'remove' => true, // Block may not be removed.
						),
					),
					array(
						array(
							'core/button',
							array(
								'text' => __( 'Take action', 'locale' ),
							),
						),
						array(
							'core/button',
							array(
								'text' => __( 'Learn more', 'locale' ),
							),
						),
					),
				),
			);
			// Echo out our JSX InnerBlocks compoennt for the editor.
			echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
			?>
	</div> 

</div>
