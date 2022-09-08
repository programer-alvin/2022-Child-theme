<?php
add_action('acf/init', 'my_acf_init_blocks');
function my_acf_init_blocks() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a restricted block.
        acf_register_block_type(array(
            'name'              => 'restricted',
            'title'             => 'Restricted',
            'description'       => 'A restricted content block.',
            'category'          => 'formatting',
            'mode'              => 'preview',
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
            'render_template' => 'template-parts/blocks/restricted/restricted.php',
        ));
    }
}