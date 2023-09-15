<?php
function tttc_disable_specific_field_groups_acf_json_save_paths( $paths, $post ) {
	$keys_for_groups_to_disable = array(// groups not to be saved
		'group_64ba35c37eb4c',
		'group_64ba3551e4ce1',
	);
	$key                        = $post['key'];
	if ( in_array( $key, $keys_for_groups_to_disable ) ) {
		// Remove the original acf-json path
		unset( $paths[0] );
	}
	return $paths;
}
add_filter( 'acf/json/save_paths', 'tttc_disable_specific_field_groups_acf_json_save_paths', 10, 2 );// https://www.advancedcustomfields.com/resources/local-json/#:~:text=ACF%206.2%20also
