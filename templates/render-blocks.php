<?php
/*
*  Template Name: Render blocks
*  Template Post Type: post, page, careers
*/
?>
<?php
get_header();
global $post;
$blocks = parse_blocks( $post->post_content );
if ( $blocks ) {
	foreach ( $blocks as $block ) {
		echo apply_filters( 'the_content', render_block( $block ) );
	}
}
get_footer();
