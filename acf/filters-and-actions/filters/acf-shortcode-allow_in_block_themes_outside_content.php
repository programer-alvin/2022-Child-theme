<?php
add_filter( 'acf/shortcode/allow_in_block_themes_outside_content', function($value){
    return true;// Allow shortcode outside content.
});
