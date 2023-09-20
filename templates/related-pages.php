<?php
/*
* Template Name: Related Pages
*  Template Post Type: post
*
*/

?>
<?php
$args = array(
    'numberposts' => -1,
    'post_type'   => 'post'
  );
  
  $posts = get_posts( $args );// https://developer.wordpress.org/reference/functions/get_posts/

  foreach($posts as $post){
    echo '<h1>'.$post->post_title.'</h1><br>';
    $related_pages=get_field('my_related_page',$post->ID);//acf\field_groups.php line 1423
    foreach($related_pages as $page){
        echo '<p>'.$page->post_title.'</p><br>';
    }
  }
