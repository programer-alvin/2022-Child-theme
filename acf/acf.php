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
//Settings related code
require_once $tttc_acf_dir.'/settings.php';
//Global field groups
require_once $tttc_acf_dir.'/field_groups.php';
//Options pages related code
require_once $tttc_acf_dir.'/options-pages/options-pages.php';
//Custom shortcode related code
require_once $tttc_acf_dir.'/custom-shortcodes/custom-shortcodes.php';
//filters and actions related code
require_once $tttc_acf_dir.'/filters-and-actions/filters-and-actions.php';
//custom function that have ACF related code.
require_once $tttc_acf_dir.'/custom-functions.php/functions.php';
//PHP translations
require_once $tttc_acf_dir.'/gettext/gettext.php';
//CPTs
require_once $tttc_acf_dir.'/cpts.php';