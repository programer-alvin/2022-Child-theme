<?php
/*
 Template Name: Get Field
*  Template Post Type: post, page, careers
*/

?>
<?php
if(function_exists('get_field')){

    echo get_field('text');

}else{
    echo 'get_field() doesn\'t exists';
}

$my_current_post_id = get_the_ID();// retrieve id
	if ( get_post_type() == 'revision' ) {// check if the rendered post is a revision
		$my_current_post_id = get_post_parent()->ID;// update ID with the parents post
	}
var_dump($my_current_post_id);


?>
