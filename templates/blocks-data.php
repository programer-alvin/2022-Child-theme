<?php
/*
 Template Name: Get block data from a post
*  Template Post Type: post, page, careers
*/

?>

<?php
//https://www.billerickson.net/access-gutenberg-block-data/
global $post;
$blocks = parse_blocks( $post->post_content );
foreach( $blocks as $block ) {
    if( 'acf/slick-slider-block' !== $block['blockName'] )//acf\blocks\acf_v6\slick-slider\block.json
        continue;//go to the next block
    echo '<pre>';
    var_dump($block);
    echo '</pre>';
}


?>