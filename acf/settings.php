<?php
add_action( 'acf/init', 'tttc_acf_init_settings' );
function tttc_acf_init_settings() {
	// https://www.advancedcustomfields.com/resources/acf-settings/
	acf_update_setting( 'capability', 'manage_options' );//Default is manage_options. One can also add user roles author. Example: acf_update_setting( 'capability', 'author' );
}
