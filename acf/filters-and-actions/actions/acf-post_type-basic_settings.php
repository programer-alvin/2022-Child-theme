<?php
add_action( 'acf/post_type/basic_settings', 'tttc_post_type_basic_settings' );

function tttc_post_type_basic_settings($acf_ui_options_page){
	
	acf_render_field_wrap(
		array(
			'label'    => __( 'Parent Page Link', 'acf' ),
			'type'     => 'text',
			'name'     => 'parent_slug',
			'key'      => 'parent_slug',
			'class'    => 'acf-options-page-parent_slug_link',
			'prefix'   => 'acf_ui_options_page',
			'value'    => $acf_ui_options_page['parent_slug'],
			'choices'  => $acf_parent_page_choices,
			'required' => true,
		),
		'div',
		'field'
	);
}