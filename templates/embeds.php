<?php
/*
 Template Name: Embeds
*  Template Post Type: post, page
*/
?>
<?php
get_header();
//Field group: https://github.com/programer-alvin/2022-Child-theme/blob/ef4af2f9887703b414f1f52212b316ed087382d6/acf/field_groups.php#L1820C1-L1993C6
$url                = get_field( 'iframe_url' );
$iframe_title       = get_field( '' );
$iframe_width       = get_field( 'iframe_width' );
$iframe_height      = get_field( 'iframe_height' );
$div_class          = get_field( 'div_class' );
$iframe_class       = get_field( 'iframe_class' );
$iframe_frameborder = get_field( 'iframe_frameborder' );
if ( $url ) {
	tttc_embed_iframe( $url, $iframe_title = '', $iframe_width, $iframe_height, $div_class, $iframe_class, $iframe_frameborder );
}
get_footer();

