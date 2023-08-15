<?php
add_action( 'acf/field_group/render_field_settings_tab/advanced', 'tttc_render_field_settings_add_note');

function tttc_render_field_settings_add_note( $field ) {
	acf_render_field_setting(
		$field,
		array(
			'type'         => 'textarea',
			'name'         => 'bidirectional_custom_notes',
			'label'        => __( 'Bidirectional Notes', 'tttc' ),
			'instructions' => __( 'Add some notes about the relationship.', 'tttc' ),
			'class'        => 'bidirectional_notes',
			'conditions'   => array(
				'field'    => 'bidirectional',
				'operator' => '==',
				'value'    => 1,
			),
		),
		true
	);
}
