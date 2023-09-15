<?php
function tttc_form_get_header( $name ) {
	//if ( ! is_admin() ) {
		acf_form_head();
	//}
}
add_action( 'get_header', 'tttc_form_get_header' );


if ( ! function_exists( 'tttc_acf_form_shortcode' ) ) {
	function tttc_acf_form_shortcode( $atts ) {
		$a = shortcode_atts(
			array(),
			$atts
		);
		ob_start();?>
		<div  class="tttc-form">
            <?php
            // https://www.advancedcustomfields.com/resources/acf_form/
            acf_form(
                array(
                    'post_id'      => 1,
                    'post_title'   => false,
                    'post_content' => false,
                    'submit_value' => __( 'Update meta' ),
                )
            );
            ?>
		</div>
		<?php
		return ob_get_clean();
	}
}
add_shortcode( 'tttc_acf_form', 'tttc_acf_form_shortcode' ); // Add shortcode.
// usage: [tttc_acf_form]

