<?php
add_action(
	'acf/include_fields',
	function() {
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}

		// Check if the current user is an administrator.
		$current_user     = wp_get_current_user();
		$is_administrator = in_array( 'administrator', (array) $current_user->roles );

		acf_add_local_field_group(
			array(
				'key'                   => 'group_65ba861aacbfe',
				'title'                 => 'Test',
				'fields'                => array(
					array(
						'key'           => 'field_65ba861cd8c2b',
						'label'         => 'My taxonomy field(Only Admin can add terms)',
						'name'          => 'my_taxonomy_field_admin',
						'type'          => 'taxonomy',
						'taxonomy'      => 'category',
						'add_term'      => $is_administrator ? 1 : 0, // Set add_term to 1 for administrators.
						'return_format' => 'id',
						'field_type'    => 'checkbox',
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
	}
);
