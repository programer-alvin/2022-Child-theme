<?php
$tttc_acf_actions_dir = trailingslashit( get_stylesheet_directory() ) . 'acf/filters-and-actions/actions';
require_once $tttc_acf_actions_dir . '/acf-save_post.php';
require_once $tttc_acf_actions_dir . '/acf-validate_save_post.php';
require_once $tttc_acf_actions_dir . '/acf-input-admin_footer.php';
require_once $tttc_acf_actions_dir . '/acf-post_type-basic_settings.php';
require_once $tttc_acf_actions_dir . '/acf-include_fields.php';
require_once $tttc_acf_actions_dir . '/acf-init.php';

