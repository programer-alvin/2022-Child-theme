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


function does_current_user_belong_to_role( $user_role ) {
	$current_user     = wp_get_current_user();
	return in_array( $user_role, (array) $current_user->roles );
}

//It is recommend to split the fields in different field groups and use current user rule as shown at \Note images\Post type and current user role admin or editor.png
add_action(
	'acf/include_fields',
	function() {
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}

		$fields = array(
			array(
				'key'                        => 'field_65c20f9627082',
				'label'                      => 'All user roles field',
				'name'                       => 'all_user_roles_field',
				'aria-label'                 => '',
				'type'                       => 'text',
				'instructions'               => '',
				'required'                   => 0,
				'conditional_logic'          => 0,
				'wrapper'                    => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'              => '',
				'readonly'                   => 0,
				'disabled'                   => 0,
				'maxlength'                  => '',
				'placeholder'                => '',
				'prepend'                    => '',
				'append'                     => '',
				'bidirectional_custom_notes' => '',
			),

		);

				// Add the second field if the user is an editor.
		if ( does_current_user_belong_to_role( 'editor' ) ) {
			$fields[] = array(
				'key'                        => 'field_65c20fad27083',
				'label'                      => 'Editor user role field',
				'name'                       => 'editor_user_role_field',
				'aria-label'                 => '',
				'type'                       => 'text',
				'instructions'               => '',
				'required'                   => 0,
				'conditional_logic'          => 0,
				'wrapper'                    => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'              => '',
				'readonly'                   => 0,
				'disabled'                   => 0,
				'maxlength'                  => '',
				'placeholder'                => '',
				'prepend'                    => '',
				'append'                     => '',
				'bidirectional_custom_notes' => '',
			);
		}

				// Add the third field if the user is an admin.
		if ( does_current_user_belong_to_role( 'administrator' ) ) {
			$fields[] = array(
				'key'                        => 'field_65c20fd127084',
				'label'                      => 'Admin user role field',
				'name'                       => 'admin_user_role_field',
				'aria-label'                 => '',
				'type'                       => 'text',
				'instructions'               => '',
				'required'                   => 0,
				'conditional_logic'          => 0,
				'wrapper'                    => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'              => '',
				'readonly'                   => 0,
				'disabled'                   => 0,
				'maxlength'                  => '',
				'placeholder'                => '',
				'prepend'                    => '',
				'append'                     => '',
				'bidirectional_custom_notes' => '',
			);
		}

		acf_add_local_field_group(
			array(
				'key'                   => 'group_65c20f947b79d',
				'title'                 => 'Display Fields according to user roles',
				'fields'                => $fields,
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
