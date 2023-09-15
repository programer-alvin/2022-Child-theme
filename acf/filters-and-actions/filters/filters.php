<?php
$tttc_acf_filters_dir = trailingslashit( get_stylesheet_directory() ) . 'acf/filters-and-actions/filters';
require_once $tttc_acf_filters_dir . '/acf-field_group-disable_field_settings_tabs.php';
require_once $tttc_acf_filters_dir . '/wp_kses_allowed_html.php';
require_once $tttc_acf_filters_dir . '/acf-validate_value.php';
require_once $tttc_acf_filters_dir . '/acf-ajax-shortcode_capability.php';
require_once $tttc_acf_filters_dir . '/acf-shortcode-allow_in_block_themes_outside_content.php';
require_once $tttc_acf_filters_dir . '/acf-load_field.php';
require_once $tttc_acf_filters_dir . '/acf-load_field-type-flexible_content.php';
require_once $tttc_acf_filters_dir . '/acf-fields-relationship-result.php';
require_once $tttc_acf_filters_dir . '/acf-validate_value.php';
require_once $tttc_acf_filters_dir . '/acf-render_field_settings.php';
require_once $tttc_acf_filters_dir . '/acf-save_post.php';
require_once $tttc_acf_filters_dir . '/acf-field_group-render_field_settings_tab.php';
require_once $tttc_acf_filters_dir . '/acf-post_type-registration_args.php';
require_once $tttc_acf_filters_dir . '/acf-load_value.php';
require_once $tttc_acf_filters_dir . '/acf-settings-load_json.php';
require_once $tttc_acf_filters_dir . '/acf-json-save_paths.php';