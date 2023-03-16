<?php
/*
 Template Name: Page Link
*  Template Post Type: post, page, member
*/
?>
<?php
$page_link=get_field('page_link');
$post_id=url_to_postid($page_link);// https://developer.wordpress.org/reference/functions/url_to_postid/
$post=get_post($post_id);
echo 'Post ID '.$post_id.'<pre>';
var_dump($post->post_title);
echo '</pre>';
?>
<a href="<?php echo esc_url( $page_link ); ?>"><?php echo esc_html( $post->post_title ); ?></a>