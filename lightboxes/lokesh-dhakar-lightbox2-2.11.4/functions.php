<?php
add_action( 'wp_enqueue_scripts', 'tttc_lokesh_dhakar_lightbox_scripts' );
function tttc_lokesh_dhakar_lightbox_scripts() {
    $ver='2.11.4';
	wp_register_script(
		'lokesh_dhakar_lightbox_script',
		get_stylesheet_directory_uri() . '/lightboxes/lokesh-dhakar-lightbox2-2.11.4/dist/js/lightbox.min.js',
		array( 'jquery' ),
		$ver,
        true
	);
	wp_enqueue_script( 'lokesh_dhakar_lightbox_script' );

    wp_enqueue_style( 
        'lokesh_dhakar_lightbox_style', 
        get_stylesheet_directory_uri() . '/lightboxes/lokesh-dhakar-lightbox2-2.11.4/dist/css/lightbox.min.css', 
        array(), 
        $ver 
    );

}