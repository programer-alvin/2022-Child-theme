<?php
add_action(
	'acf/init',
	function() {
		if ( is_admin() ) {
			$user_id = get_current_user_id();
			acf_add_options_page(
				array(
					'page_title' => 'User Specific Options',
					'menu_slug'  => 'user-specific-options',
					'position'   => '',
					'redirect'   => false,
					'capability' => 'edit_posts', // https://wordpress.org/documentation/article/roles-and-capabilities/
					'post_id'    => 'user_' . $user_id,
				)
			);
		}
	}
);
