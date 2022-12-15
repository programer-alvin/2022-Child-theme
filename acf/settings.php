<?php
add_action( 'acf/init', 'tttc_acf_init_settings' );
function tttc_acf_init_settings() {
	// https://www.advancedcustomfields.com/resources/acf-settings/
	acf_update_setting( 'capability', 'author' );//Default is manage_options
}
