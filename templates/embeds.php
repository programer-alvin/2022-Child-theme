<?php
/*
 Template Name: Embeds
*  Template Post Type: post, page
*/
?>
<?php
get_header();
$url                = get_field( 'iframe_url' );
$iframe_title       = get_field( '' );
$iframe_width       = get_field( 'iframe_width' );
$iframe_height      = get_field( 'iframe_height' );
$div_class          = get_field( 'div_class' );
$iframe_class       = get_field( 'iframe_class' );
$iframe_frameborder = get_field( 'iframe_frameborder' );
if ( $url ) {
	embed_iframe( $url, $iframe_title = '', $iframe_width, $iframe_height, $div_class, $iframe_class, $iframe_frameborder );
}
get_footer();

