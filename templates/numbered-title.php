<?php
/*
 Template Name: Numbered title
*  Template Post Type: post, page, member
*/
?>
<?php
$args= array(
    'posts_per_page' => 5,
    'orderby'        => 'rand'
);
$posts=get_posts($args); //https://developer.wordpress.org/reference/functions/get_posts/
$number_of_post=count($posts);
for($i=0;$i<$number_of_post; $i++ ){
    $post=$posts[$i];
    $number=$i+1;
    echo $number.'-'.$post->post_title.'<br>';
}