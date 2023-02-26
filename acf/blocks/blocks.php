<?php
$tttc_acf_blocks_dir = trailingslashit( get_stylesheet_directory() ) . 'acf/blocks';
//useful functions in blocks
require_once $tttc_acf_blocks_dir . '/blocks-helpers.php';
// https://www.advancedcustomfields.com/resources/blocks/
require_once $tttc_acf_blocks_dir . '/testimonial/testimonial.php';
// https://www.advancedcustomfields.com/blog/acf-pro-6-0-beta-1/
require_once  $tttc_acf_blocks_dir . '/acf_v6/version_6.php';

require_once  $tttc_acf_blocks_dir . '/acf-restricted-block/acf-restricted.php';
