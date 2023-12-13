<?php
/*
* Template Name: Reupdate field in Posts
*  Template Post Type: post, page, careers, clasificaciones, contest
*
*/
?>
<?php
$args = array(
	'post_type'   => 'post',
	'post_status' => 'any',
);

$posts = get_posts( $args );
foreach ( $posts as $post ) {
	$field_name_key = 'field_name_a';
	$field_value    = get_field( $field_name_key, $post->ID, false );// retrieve value
	update_field( $field_name_key, $field_value, $post->ID );// reupdate it.
}
