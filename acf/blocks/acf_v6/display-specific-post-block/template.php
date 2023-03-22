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
	$selected_post_to_display = get_field( 'select_post_to_display' );// 
	if($selected_post_to_display){
	?>

		<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>"  ?>">
			<div class="block-title">
				<h2>
					<?php echo esc_html($selected_post_to_display->post_title)?>
				</h2>
			</div>
			<div class="block-content">
			<?php echo esc_html(do_shortcode( $selected_post_to_display->post_content ))?>
			</div>
		</div>
	<?php
	}else{
		echo 'No post is selected';
	}
}









