<?php
/*
* Template Name: Get Posts Since Last Saturday
*  Template Post Type: post, page, careers, clasificaciones, contest
*
*/
?>
<?php
$last_saturday = strtotime( 'last Saturday' );
$args          = array(
	'post_type'   => 'post',
	'post_status' => 'publish',
	'date_query'  => array(
		'after'     => date( 'Y-m-d', $last_saturday ),
		'inclusive' => true,
	),
);

echo '<pre>';
var_dump( get_posts( $args ) );
echo '</pre>';
