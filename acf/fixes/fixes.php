<?php

// https://github.com/piklist/piklist  parts\js\admin.js causes issue with wysiwyg editor where cursor moves to first line.
add_action( 'wp_enqueue_scripts', 'remove_piklist_admin', 99 );
add_action( 'admin_enqueue_scripts', 'remove_piklist_admin', 99 );
function remove_piklist_admin() {
	wp_dequeue_script( 'piklist-admin-js' );
}
