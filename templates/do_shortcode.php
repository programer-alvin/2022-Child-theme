<?php
/*
 Template Name: Do Shortcode
*  Template Post Type: post
*/

?>
<?php
$content=get_field('shortcode_field');
$output=do_shortcode( $content );//https://developer.wordpress.org/reference/functions/do_shortcode/
