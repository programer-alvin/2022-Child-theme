<?php
function tttc_disable_specific_field_groups_acf_json_load_point( $paths ) {
	// Append the new path and return it.
	// error_log('key test');
	return $paths;
}
// add_filter( 'acf/settings/load_json', 'tttc_disable_specific_field_groups_acf_json_load_point' );// https://www.advancedcustomfields.com/resources/local-json/#loading-explained
