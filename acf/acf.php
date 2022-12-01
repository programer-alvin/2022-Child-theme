<?php
$tttc_acf_dir=trailingslashit( get_stylesheet_directory() ) . '/acf';
// blocks
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/blocks/blocks.php';
// Forms init
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/forms/forms.php';
// Javascript
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/javascript/javascript.php';
// fixes
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/fixes/fixes.php';
// Custom location rules
require_once trailingslashit( get_stylesheet_directory() ) . '/acf/location-rules/location-rules.php';
//REST API related code
require_once $tttc_acf_dir.'/rest-api/rest-api.php';
//Menu related code
require_once $tttc_acf_dir.'/menu/menu.php';