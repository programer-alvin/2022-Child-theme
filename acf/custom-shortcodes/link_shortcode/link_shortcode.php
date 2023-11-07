<?php
if ( ! function_exists( 'tttc_acf_link_shortcode' ) ) {
	function tttc_acf_link_shortcode( $atts ) {
		$a       = shortcode_atts(
			array(
				'field'   => '', // It is recommended to hardcode this  instead of allowing users to access any field.
				'post_id' => false, // It is recommended to hardcode this instead of allowing users to access fields from any wordpress object.
			),
			$atts
		);
		$field   = $a['field'];
		$post_id = $a['post_id'];
		if ( '' !== $field ) {
			if ( function_exists( 'get_field' ) ) {
				$link = get_field( $field, $post_id );
				if ( $link ) {
                    //https://www.advancedcustomfields.com/resources/link/
                    ob_start();
                    if(is_string($link)){
                        ?>
                        <a class="button" href="<?php echo esc_url( $link ); ?>">Custom Link</a>
                        <?php
                    }else{// then it is array
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php
                    }
                    return ob_get_clean();
				} else {
					return 'No value found';
				}
			} else {
				return 'Please ensure ACF is installed and activated.';
			}
		} else {
			return 'field attribute is empty. Please add it';
		}
		return ''; // Return content.
	}
}
add_shortcode( 'tttc_acf_link', 'tttc_acf_link_shortcode' ); // Add shortcode.
// usage: [tttc_acf_link field="field_name"]
