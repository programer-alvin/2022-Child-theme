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
	?>
	<?php
	$featured_posts = get_field('book_relationship');
	if( $featured_posts ): ?>
		<ul>
		<?php foreach( $featured_posts as $featured_post ): 
			$permalink = get_permalink( $featured_post->ID );
			$title = get_the_title( $featured_post->ID );
			$custom_field = get_field( 'field_name', $featured_post->ID );
			?>
			<li>
				<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
				<span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
			</li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
	<?php
	
}

