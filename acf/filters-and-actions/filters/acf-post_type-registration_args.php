<?php
add_filter( 'acf/post_type/registration_args', 'tttc_add_text_domain_to_post_types', 10, 2 );

function tttc_add_text_domain_to_post_types( $args, $post ) {
	$text_domain = 'tttc';
	foreach ( $args['labels'] as &$label ) {
		$label = esc_html__( $label, $text_domain );
	}
	return $args;
}

add_filter( 'acf/post_type/registration_args', 'tttc_cpt_permalink_with_no_post_key', 10, 2 );

function tttc_cpt_permalink_with_no_post_key( $args, $post ) {
	$cpt_key='book';//replace cpt key.
	if($post['post_type']==$cpt_key){
		$args['rewrite'] = array(
			'slug'       => '/',
			'with_front' => false,
		);
	}
	return $args;
}
