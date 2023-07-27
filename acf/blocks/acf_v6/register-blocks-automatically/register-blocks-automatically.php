<?php

function tttc_get_directories($dir_path){
    return array_filter(scandir($dir_path), function($item) use ($dir_path) {
        return is_dir($dir_path . '/' . $item) && !in_array($item, array('.', '..'));
    });
}
function tttc_register_blocks_automatically() {

    $directories=tttc_get_directories(__DIR__);

    foreach($directories as $dir){
        register_block_type( __DIR__ . '/'.$dir.'/block.json' );
    }
}
add_action( 'init', 'tttc_register_blocks_automatically' );
