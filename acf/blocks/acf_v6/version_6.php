<?php
$tttc_acf_v6_dir = trailingslashit( get_stylesheet_directory() ) . 'acf/blocks/acf_v6/';
require_once $tttc_acf_v6_dir . 'all-fields/all-fields-block.php';
require_once $tttc_acf_v6_dir . 'inner-block/inner-block.php';
require_once $tttc_acf_v6_dir . 'slick-slider/slick-slider-block.php';
require_once $tttc_acf_v6_dir . 'allowed-inner-blocks/allowed-inner-blocks.php';
require_once $tttc_acf_v6_dir . 'args-block/args-block.php';
if( file_exists($tttc_acf_v6_dir . 'private-test-block/private-test-block.php')){
    require_once $tttc_acf_v6_dir . 'private-test-block/private-test-block.php';
}