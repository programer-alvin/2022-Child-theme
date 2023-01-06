<?php
add_filter( 'acf/ajax/shortcode_capability', function($capability){
    return false;//overriding $capability to allow access even for non logged in users
} );
