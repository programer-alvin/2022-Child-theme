<?php
/*
* Template Name: Get Posts by Year in Datepicker
*  Template Post Type: post, page, careers, clasificaciones, contest
*
*/
?>
<?php
$year = date( 'Y' );// Load only the year like 2023
$args = array(
	'post_type'      => 'post',
	'orderby'        => 'meta_value',
	'order'          => 'ASC',
	'meta_key'       => 'event-date',
	'meta_query'     => array(
		array(
			'key'     => 'date_picker',
			'value'   => $year . '\d\d\d\d',
			'compare' => 'REGEXP',
		),
	),
);

$posts=get_posts($args);
echo '<pre>';
var_dump($posts);
echo '</pre>';