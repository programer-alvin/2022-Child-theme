<?php
add_filter( 'acf/post_type/registration_args', 'tttc_add_text_domain_to_post_types', 10, 2 );

function tttc_add_text_domain_to_post_types( $args, $post ) {
	$text_domain = 'tttc';
	foreach ( $args['labels'] as &$label ) {
		$label = esc_html__( $label, $text_domain );
	}
	return $args;
}
