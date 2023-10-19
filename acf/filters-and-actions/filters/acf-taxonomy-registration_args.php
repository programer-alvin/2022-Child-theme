<?php

//add_filter( 'acf/taxonomy/registration_args', 'tttc_disable_show_ui', 10, 2 );

function tttc_disable_show_ui( $args, $post ) {
	$args['show_ui'] = false;
	return $args;
}
