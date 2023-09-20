<?php
/*
* Template Name: Related Posts
*  Template Post Type: page
*
*/

?>
<?php
$args = array(
    'numberposts' => -1,
    'post_type'   => 'page'
  );
  
  $pages = get_posts( $args );// https://developer.wordpress.org/reference/functions/get_posts/

  foreach($pages as $page){
    echo '<h1>'.$page->post_title.'</h1><br>';
    $related_posts=get_field('my_related_posts',$page->ID);//acf\field_groups.php line 1372
    foreach($related_posts as $post){
        echo '<p>'.$post->post_title.'</p><br>';
    }

  }
