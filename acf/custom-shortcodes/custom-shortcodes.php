<?php
// https://www.advancedcustomfields.com/resources/shortcode/
// https://codex.wordpress.org/Shortcode_API
$tttc_acf_custom_shortcodes_dir = trailingslashit( get_stylesheet_directory() ) . 'acf/custom-shortcodes';

require_once $tttc_acf_custom_shortcodes_dir . '/gallery_shortcode/gallery_shortcode.php';
require_once $tttc_acf_custom_shortcodes_dir . '/repeater_shortcode/repeater_shortcode.php';
require_once $tttc_acf_custom_shortcodes_dir . '/tttc_acf_current_post_text_shortcode/tttc_acf_current_post_text_shortcode.php';
