<?php
$tttc_acf_filters_and_actions_dir = trailingslashit( get_stylesheet_directory() ) . 'acf/filters-and-actions';
// filters related code
require_once $tttc_acf_filters_and_actions_dir . '/filters/filters.php';
require_once $tttc_acf_filters_and_actions_dir . '/filters/acf-fields-post_object-query.php';
// actions related code
require_once $tttc_acf_filters_and_actions_dir . '/actions/actions.php';





