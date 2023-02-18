<?php
/**
 * Restricted Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create class attribute allowing for custom "className" and "align" values.
$classes = '';
if ( ! empty( $block['className'] ) ) {
	$classes .= sprintf( ' %s', $block['className'] );
}
if ( ! empty( $block['align'] ) ) {
	$classes .= sprintf( ' align%s', $block['align'] );
}


?>
<div>
	This block can hold another block.
</div>
<div class="inner-block <?php echo esc_attr( $classes ); ?>">
	<span class="inner-block-notification"><?php echo esc_html( $notification ); ?></span>
	<div class="inner-block-container">
		<InnerBlocks  />
	</div>
</div>
