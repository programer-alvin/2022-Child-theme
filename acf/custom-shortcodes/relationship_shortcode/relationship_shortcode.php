<?php
// https://www.advancedcustomfields.com/resources/relationship/#display-list-of-posts-without-setuppostdata
if ( ! function_exists( 'tttc_acf_relationship_shortcode' ) ) {
	function tttc_acf_relationship_shortcode( $atts ) {
		$a       = shortcode_atts(
			array(
				'field'   => '', // It is recommended to hardcode this  instead of allowing users to access any field.
				'post_id' => false, // It is recommended to hardcode this instead of allowing users to access fields from any wordpress object.
			),
			$atts
		);
		$html    = ''; // Holds html content generated.
		$field   = $a['field'];
		$post_id = $a['post_id'];
		if ( '' !== $field ) {
			if ( function_exists( 'get_field' ) ) {
				$featured_posts = get_field( $field, $post_id );
				ob_start();
				if ( $featured_posts ) : ?>
					<ul>
					<?php
					foreach ( $featured_posts as $featured_post ) :
						$permalink    = get_permalink( $featured_post->ID );
						$title        = get_the_title( $featured_post->ID );
						$custom_field = get_field( 'field_name', $featured_post->ID );
						?>
						<li>
							<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
							<span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
						</li>
					<?php endforeach; ?>
					</ul>
					<?php
				endif;
				return ob_get_clean();
			} else {
				$html .= 'Please ensure ACF is installed and activated.';
			}
		} else {
			$html .= 'field attribute is empty. Please add it';
		}
		return $html; // Return content.
	}
}
add_shortcode( 'tttc_acf_relationship', 'tttc_acf_relationship_shortcode' ); // Add shortcode.
// usage: [tttc_acf_relationship field="relationship_field"]

