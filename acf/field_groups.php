<?php
if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
		array(
			'key'                   => 'group_6169596eef822',
			'title'                 => 'All Fields Types',
			'fields'                => array(
				array(
					'key'               => 'field_618a6ae800781',
					'label'             => 'Basic',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'admin_only'        => 0,
					'placement'         => 'left',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_616c12495b1da',
					'label'             => 'text',
					'name'              => 'text',
					'aria-label'        => '',
					'type'              => 'text',
					'instructions'      => 'Please enter text...',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
				array(
					'key'               => 'field_617b831d5a315',
					'label'             => 'number',
					'name'              => 'number',
					'aria-label'        => '',
					'type'              => 'number',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => array(
						array(
							array(
								'field'    => 'field_617564937e7af',
								'operator' => '!=empty',
							),
						),
					),
					'wrapper'           => array(
						'width' => '',
						'class' => 'the_class',
						'id'    => 'the_id',
					),
					'default_value'     => '',
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => 'KG',
					'min'               => '',
					'max'               => '',
					'step'              => '',
				),
				array(
					'key'               => 'field_617564937e7af',
					'label'             => 'text_area',
					'name'              => 'text_area',
					'aria-label'        => '',
					'type'              => 'textarea',
					'instructions'      => '',
					'required'          => 1,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
					'maxlength'         => '',
					'rows'              => '',
					'new_lines'         => '',
				),
				array(
					'key'               => 'field_6176c0ad2e6ea',
					'label'             => 'range',
					'name'              => 'range',
					'aria-label'        => '',
					'type'              => 'range',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => 'customRange2',
						'id'    => '',
					),
					'default_value'     => 70,
					'min'               => '',
					'max'               => '',
					'step'              => '',
					'prepend'           => '',
					'append'            => '',
				),
				array(
					'key'               => 'field_618a6b7200783',
					'label'             => 'Content',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'admin_only'        => 0,
					'placement'         => 'left',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_619fe6e1b00c9',
					'label'             => 'wysiwyg',
					'name'              => 'wysiwyg',
					'aria-label'        => '',
					'type'              => 'wysiwyg',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'tabs'              => 'all',
					'toolbar'           => 'my_toobar',
					'media_upload'      => 1,
					'delay'             => 1,
				),
				array(
					'key'               => 'field_6169597e66595',
					'label'             => 'file',
					'name'              => 'file',
					'aria-label'        => '',
					'type'              => 'file',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => ' form-row',
						'id'    => '',
					),
					'return_format'     => 'id',
					'library'           => 'all',
					'min_size'          => '',
					'max_size'          => '',
					'mime_types'        => '',
				),
				array(
					'key'               => 'field_6183f164b5f74',
					'label'             => 'image',
					'name'              => 'image',
					'aria-label'        => '',
					'type'              => 'image',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'id',
					'preview_size'      => 'medium',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
				),
				array(
					'key'               => 'field_616d3b8c08dc7',
					'label'             => 'gallery',
					'name'              => 'gallery',
					'aria-label'        => '',
					'type'              => 'gallery',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => ' form-row',
						'id'    => '',
					),
					'admin_only'        => 0,
					'return_format'     => 'array',
					'preview_size'      => 'medium',
					'insert'            => 'append',
					'library'           => 'all',
					'min'               => '',
					'max'               => '',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
				),
				array(
					'key'               => 'field_617144745f31c',
					'label'             => 'oembed',
					'name'              => 'oembed',
					'aria-label'        => '',
					'type'              => 'oembed',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'width'             => '',
					'height'            => '',
				),
				array(
					'key'               => 'field_618a6bb800784',
					'label'             => 'Choice',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'admin_only'        => 0,
					'placement'         => 'left',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_618e50d89531e',
					'label'             => 'radio button',
					'name'              => 'radio_button',
					'aria-label'        => '',
					'type'              => 'radio',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'choices'           => array(
						'value' => 'Label',
						'test'  => 'Test',
					),
					'allow_null'        => 0,
					'other_choice'      => 0,
					'default_value'     => '',
					'layout'            => 'vertical',
					'return_format'     => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key'               => 'field_6172c2696fa7a',
					'label'             => 'select',
					'name'              => 'select',
					'aria-label'        => '',
					'type'              => 'select',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => ' form-row form-row',
						'id'    => '',
					),
					'choices'           => array(
						'article' => 'article',
						'blog'    => 'blog',
					),
					'default_value'     => array(
						0 => 'blue',
					),
					'allow_null'        => 0,
					'multiple'          => 1,
					'ui'                => 1,
					'ajax'              => 0,
					'return_format'     => 'array',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_61798066158ff',
					'label'             => 'true_false',
					'name'              => 'true_false',
					'aria-label'        => '',
					'type'              => 'true_false',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'message'           => '',
					'default_value'     => 0,
					'ui'                => 1,
					'ui_on_text'        => '',
					'ui_off_text'       => '',
				),
				array(
					'key'               => 'field_616bd8151ac19',
					'label'             => 'checkbox',
					'name'              => 'checkbox',
					'aria-label'        => '',
					'type'              => 'checkbox',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => 'my-custom-class',
						'id'    => '',
					),
					'choices'           => array(
						'article' => 'My Article',
						'blog'    => 'My Blog',
					),
					'allow_custom'      => 0,
					'default_value'     => array(),
					'layout'            => 'vertical',
					'toggle'            => 1,
					'return_format'     => 'value',
					'save_custom'       => 0,
				),
				array(
					'key'               => 'field_61e16afc2a331',
					'label'             => 'button_group',
					'name'              => 'button_group',
					'aria-label'        => '',
					'type'              => 'button_group',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'choices'           => array(
						'value'    => 'Label',
						'test1'    => 'Test1',
						'test2'    => 'Test2',
						'test3'    => 'Test3',
						'arch'     => '<i class="icon icon-arch-landscape"></i>',
						'location' => '<span class="dashicons dashicons-location-alt"></span>',
					),
					'allow_null'        => 0,
					'default_value'     => '',
					'layout'            => 'horizontal',
					'return_format'     => 'value',
				),
				array(
					'key'               => 'field_618a6b5a00782',
					'label'             => 'Relational',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'admin_only'        => 0,
					'placement'         => 'left',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_61701f6b7a382',
					'label'             => 'link',
					'name'              => 'link',
					'aria-label'        => '',
					'type'              => 'link',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => ' form-row form-row',
						'id'    => '',
					),
					'return_format'     => 'array',
					'disabled'          => 1,
					'readonly'          => 1,
				),
				array(
					'key'               => 'field_616984c24ded1',
					'label'             => 'url',
					'name'              => 'url',
					'aria-label'        => '',
					'type'              => 'url',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_6250566e0dfc3',
					'label'             => 'Page Link',
					'name'              => 'page_link',
					'aria-label'        => '',
					'type'              => 'page_link',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'post_type'         => '',
					'taxonomy'          => '',
					'allow_null'        => 0,
					'allow_archives'    => 1,
					'multiple'          => 0,
				),
				array(
					'key'               => 'field_6175547f145ee',
					'label'             => 'post_object',
					'name'              => 'post_object',
					'aria-label'        => '',
					'type'              => 'post_object',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'post_type'         => '',
					'taxonomy'          => '',
					'return_format'     => 'object',
					'multiple'          => 0,
					'allow_null'        => 0,
					'ui'                => 1,
				),
				array(
					'key'               => 'field_617d25b1f0079',
					'label'             => 'relationship',
					'name'              => 'relationship',
					'aria-label'        => '',
					'type'              => 'relationship',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'post_type'         => '',
					'taxonomy'          => '',
					'filters'           => array(
						0 => 'search',
						1 => 'post_type',
						2 => 'taxonomy',
					),
					'elements'          => '',
					'min'               => '',
					'max'               => '',
					'return_format'     => 'object',
				),
				array(
					'key'               => 'field_628b278e0e06c',
					'label'             => 'taxonomy',
					'name'              => 'taxonomy',
					'aria-label'        => '',
					'type'              => 'taxonomy',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'taxonomy'          => 'category',
					'field_type'        => 'checkbox',
					'add_term'          => 1,
					'save_terms'        => 0,
					'load_terms'        => 0,
					'return_format'     => 'id',
					'multiple'          => 0,
					'allow_null'        => 0,
				),
				array(
					'key'               => 'field_61aa3624493d0',
					'label'             => 'user',
					'name'              => 'user',
					'aria-label'        => '',
					'type'              => 'user',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'role'              => '',
					'allow_null'        => 0,
					'multiple'          => 0,
					'return_format'     => 'object',
				),
				array(
					'key'               => 'field_618a6bdb00785',
					'label'             => 'JQuery',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'admin_only'        => 0,
					'placement'         => 'left',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_6170025af29e7',
					'label'             => 'google map',
					'name'              => 'google_map',
					'aria-label'        => '',
					'type'              => 'google_map',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'center_lat'        => '',
					'center_lng'        => '',
					'zoom'              => '',
					'height'            => '',
				),
				array(
					'key'               => 'field_617060968cbed',
					'label'             => 'date_picker',
					'name'              => 'date_picker',
					'aria-label'        => '',
					'type'              => 'date_picker',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => ' form-row form-row form-row',
						'id'    => '',
					),
					'admin_only'        => 0,
					'display_format'    => 'd/m/Y',
					'return_format'     => 'd/m/Y',
					'first_day'         => 1,
				),
				array(
					'key'               => 'field_617120fd61220',
					'label'             => 'date_time_picker',
					'name'              => 'date_time_picker',
					'aria-label'        => '',
					'type'              => 'date_time_picker',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => ' form-row form-row form-row form-row',
						'id'    => '',
					),
					'display_format'    => 'd/m/Y g:i a',
					'return_format'     => 'c',
					'first_day'         => 1,
				),
				array(
					'key'               => 'field_622eff5ce2e54',
					'label'             => 'time_picker',
					'name'              => 'time_picker',
					'aria-label'        => '',
					'type'              => 'time_picker',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'display_format'    => 'g:i a',
					'return_format'     => 'g:i a',
				),
				array(
					'key'               => 'field_61b62c3760db2',
					'label'             => 'color_picker',
					'name'              => 'color_picker',
					'aria-label'        => '',
					'type'              => 'color_picker',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'enable_opacity'    => 1,
					'return_format'     => 'string',
				),
				array(
					'key'               => 'field_618a6c0200786',
					'label'             => 'Layout',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'admin_only'        => 0,
					'placement'         => 'left',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_6194d07ee2dc3',
					'label'             => 'Flexible Content',
					'name'              => 'flexible_content',
					'aria-label'        => '',
					'type'              => 'flexible_content',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'admin_only'        => 0,
					'layouts'           => array(
						'layout_6194d0a509bc3' => array(
							'key'        => 'layout_6194d0a509bc3',
							'name'       => 'flexible_text_area',
							'label'      => 'Text Area',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'               => 'field_61d86cf2dc2f6',
									'label'             => 'sub_field1',
									'name'              => 'sub_field1',
									'aria-label'        => '',
									'type'              => 'textarea',
									'instructions'      => '',
									'required'          => 0,
									'conditional_logic' => 0,
									'wrapper'           => array(
										'width' => '',
										'class' => '',
										'id'    => '',
									),
									'default_value'     => '',
									'placeholder'       => '',
									'maxlength'         => '',
									'rows'              => '',
									'new_lines'         => '',
								),
								array(
									'key'               => 'field_61d86d08dc2f7',
									'label'             => 'sub_field2',
									'name'              => 'sub_field2',
									'aria-label'        => '',
									'type'              => 'text',
									'instructions'      => '',
									'required'          => 0,
									'conditional_logic' => 0,
									'wrapper'           => array(
										'width' => '',
										'class' => '',
										'id'    => '',
									),
									'default_value'     => '',
									'placeholder'       => '',
									'prepend'           => '',
									'append'            => '',
									'maxlength'         => '',
								),
							),
							'min'        => '',
							'max'        => '',
						),
						'layout_619566b1d4b15' => array(
							'key'        => 'layout_619566b1d4b15',
							'name'       => 'flexible_repeater',
							'label'      => 'Repeater',
							'display'    => 'block',
							'sub_fields' => array(
								array(
									'key'               => 'field_6280938c77fde',
									'label'             => 'repeater_subfield',
									'name'              => 'repeater_subfield',
									'aria-label'        => '',
									'type'              => 'text',
									'instructions'      => '',
									'required'          => 0,
									'conditional_logic' => 0,
									'wrapper'           => array(
										'width' => '',
										'class' => '',
										'id'    => '',
									),
									'default_value'     => '',
									'placeholder'       => '',
									'prepend'           => '',
									'append'            => '',
									'maxlength'         => '',
								),
							),
							'min'        => '',
							'max'        => '',
						),
					),
					'button_label'      => 'Add Row',
					'min'               => '',
					'max'               => '',
				),
				array(
					'key'               => 'field_617527ae816c0',
					'label'             => 'Repeater',
					'name'              => 'repeater',
					'aria-label'        => '',
					'type'              => 'repeater',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'layout'            => 'table',
					'pagination'        => 1,
					'rows_per_page'     => 5,
					'min'               => 0,
					'max'               => 0,
					'collapsed'         => '',
					'button_label'      => 'Add Row',
					'sub_fields'        => array(
						array(
							'key'               => 'field_63b82e82bd87c',
							'label'             => 'Sub Field 1',
							'name'              => 'sub_field_1',
							'aria-label'        => '',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'maxlength'         => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'parent_repeater'   => 'field_617527ae816c0',
						),
						array(
							'key'               => 'field_63b82e8fbd87d',
							'label'             => 'Sub Field 2',
							'name'              => 'sub_field_2',
							'aria-label'        => '',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'maxlength'         => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'parent_repeater'   => 'field_617527ae816c0',
						),
						array(
							'key'               => 'field_623ef4772a244',
							'label'             => 'image',
							'name'              => 'image',
							'aria-label'        => '',
							'type'              => 'image',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'id',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => '',
							'preview_size'      => 'medium',
							'parent_repeater'   => 'field_617527ae816c0',
						),
						array(
							'key'               => 'field_624da4b831947',
							'label'             => 'caption',
							'name'              => 'caption',
							'aria-label'        => '',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'maxlength'         => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'parent_repeater'   => 'field_617527ae816c0',
						),
					),
				),
				array(
					'key'               => 'field_61a4eb5bdf65a',
					'label'             => 'accordion',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'accordion',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'open'              => 0,
					'multi_expand'      => 0,
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_618b992034d16',
					'label'             => 'message',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'message',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'message'           => '<p>Hey there </p>
<style>
p{
color : red;
}

</style>

<input type="text" value="test">',
					'new_lines'         => 'wpautop',
					'esc_html'          => 0,
				),
				array(
					'key'               => 'field_63b82db5b6be9',
					'label'             => 'clone',
					'name'              => 'clone',
					'aria-label'        => '',
					'type'              => 'clone',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'clone'             => array(
						0 => 'field_616c12495b1da',
					),
					'display'           => 'seamless',
					'layout'            => 'block',
					'prefix_label'      => 0,
					'prefix_name'       => 1,
				),
				array(
					'key'               => 'field_63b82e08e38fa',
					'label'             => 'Group',
					'name'              => 'group',
					'aria-label'        => '',
					'type'              => 'group',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'layout'            => 'block',
					'sub_fields'        => array(
						array(
							'key'               => 'field_63b82e27e38fb',
							'label'             => 'Sub Field 1',
							'name'              => 'sub_field_1',
							'aria-label'        => '',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'maxlength'         => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
						),
						array(
							'key'               => 'field_63b82e52e38fc',
							'label'             => 'Sub Field 2',
							'name'              => 'sub_field_2',
							'aria-label'        => '',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'maxlength'         => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
						),
					),
				),
				array(
					'key'               => 'field_6405b6429a55d',
					'label'             => 'Endpoint Accordion',
					'name'              => '',
					'aria-label'        => '',
					'type'              => 'accordion',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'open'              => 0,
					'multi_expand'      => 0,
					'endpoint'          => 1,
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'post',
					),
				),
				array(
					array(
						'param'    => 'user_form',
						'operator' => '==',
						'value'    => 'all',
					),
				),
				array(
					array(
						'param'    => 'attachment',
						'operator' => '==',
						'value'    => 'all',
					),
				),
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'page',
					),
				),
				array(
					array(
						'param'    => 'block',
						'operator' => '==',
						'value'    => 'all',
					),
				),
				array(
					array(
						'param'    => 'nav_menu_item',
						'operator' => '==',
						'value'    => 'all',
					),
				),
			),
			'menu_order'            => -3,
			'position'              => 'side',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => '',
			'show_in_rest'          => 1,
		)
	);

endif;


if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
		array(
			'key'                   => 'group_63ca6f6822661',
			'title'                 => 'Repeater to sort',
			'fields'                => array(
				array(
					'key'               => 'field_63ca6f6a62cff',
					'label'             => 'Repeater to sort',
					'name'              => 'repeater_to_sort',
					'aria-label'        => '',
					'type'              => 'repeater',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'layout'            => 'table',
					'pagination'        => 0,
					'min'               => 0,
					'max'               => 0,
					'collapsed'         => '',
					'button_label'      => 'Add Row',
					'rows_per_page'     => 20,
					'sub_fields'        => array(
						array(
							'key'               => 'field_63ca6f9c62d00',
							'label'             => 'Sub Field 1',
							'name'              => 'sub_field_1',
							'aria-label'        => '',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'maxlength'         => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'parent_repeater'   => 'field_63ca6f6a62cff',
						),
						array(
							'key'               => 'field_63ca6fcc62d01',
							'label'             => 'Sub Field 2',
							'name'              => 'sub_field_2',
							'aria-label'        => '',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'maxlength'         => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'parent_repeater'   => 'field_63ca6f6a62cff',
						),
						array(
							'key'               => 'field_63ca6fd962d02',
							'label'             => 'Sub Field 3',
							'name'              => 'sub_field_3',
							'aria-label'        => '',
							'type'              => 'date_picker',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'display_format'    => 'd/m/Y',
							'return_format'     => 'd/m/Y',
							'first_day'         => 1,
							'parent_repeater'   => 'field_63ca6f6a62cff',
						),
					),
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'post',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => '',
			'show_in_rest'          => 0,
		)
	);

	endif;
#------------------------------------------------------------------------------------------------------------------------
if ( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_64302bd747ad8',
		'title' => 'Validate two date fields',
		'fields' => array(
			array(
				'key' => 'field_64302bd842b7e',
				'label' => 'start date',
				'name' => 'start_date',
				'aria-label' => '',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
			array(
				'key' => 'field_64302c1942b7f',
				'label' => 'End Date',
				'name' => 'end_date',
				'aria-label' => '',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
	
	endif;
		