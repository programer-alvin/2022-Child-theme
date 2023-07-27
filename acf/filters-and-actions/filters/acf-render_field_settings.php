<?php
add_action( 'acf/render_field_settings/type=text', 'tttc_add_readonly_and_disabled_to_text_field' );
add_action( 'acf/render_field_settings/type=textarea', 'tttc_add_readonly_and_disabled_to_text_field' );
function tttc_add_readonly_and_disabled_to_text_field( $field ) {
	acf_render_field_setting(
		$field,
		array(
			'label'        => __( 'Read Only?', 'acf' ),
			'instructions' => 'Visible but not editable',
			'type'         => 'radio',
			'name'         => 'readonly',
			'choices'      => array(
				1 => __( 'Yes', 'acf' ),
				0 => __( 'No', 'acf' ),
			),
			'layout'       => 'horizontal',
		)
	);
	acf_render_field_setting(
		$field,
		array(
			'label'        => __( 'Disabled?', 'acf' ),
			'instructions' => 'Hidden from the display',
			'type'         => 'radio',
			'name'         => 'disabled',
			'choices'      => array(
				1 => __( 'Yes', 'acf' ),
				0 => __( 'No', 'acf' ),
			),
			'layout'       => 'horizontal',
		)
	);
}

function tttc_disable_post_object_field( $field ) {
	if ( is_admin() ) {
		$field['disabled'] = 'disabled';
	}

	return $field;
}
add_filter( 'acf/load_field/type=post_object', 'tttc_disable_post_object_field' );
