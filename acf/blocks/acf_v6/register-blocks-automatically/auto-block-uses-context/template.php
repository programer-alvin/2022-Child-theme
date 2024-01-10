Uses Context
<?php
/**
 * This block re-renders on "parent" block input change
 *
 * More info: https://www.advancedcustomfields.com/resources/acf_register_block_type/
 * https://www.advancedcustomfields.com/resources/whats-new-with-acf-blocks-in-acf-6/#block-context-changes
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$block_id = 'acf-auto-block-uses-context-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'acf-auto-block-uses-context';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

?>


<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_html( $class_name ); ?>">

	<div >
			<?php

			// Restrict InnerBlocks to allowed block list.
			if(isset($context['acf/fields'])){
				echo 'context<pre>';
				var_dump($context['acf/fields']);
				echo '</pre>';
					//access field value.
				if(isset($context['acf/fields']['field_659ed18699b67'])){
					$field_value=$context['acf/fields']['field_659ed18699b67'];
					echo $field_value;
				}elseif(isset($context['acf/fields']['a_simple_number'])){
					$field_value=$context['acf/fields']['a_simple_number'];
					echo $field_value;
				}		
			}

			?>
	</div> 

</div>
