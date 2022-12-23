<?php
/*
 Template Name: Members
*  Template Post Type: page, member
*/
?>

<?php
$current_date = date( 'md' ); // first load the current date into a variable, formatted as md

$employee_birthdays = new WP_Query(
	array(
		'posts_per_page' => -1,
		'post_type'      => 'member', // employee
		'meta_query'     => array(
			array(
				'key'     => 'birthday', // assumes the date picker field is called birthday. Stored in Ymd format.
				'value'   => '\d\d\d\d'.$current_date,
                'compare' => 'REGEXP',
			),
		),
	)
);
while ( $employee_birthdays->have_posts() ) {
	$employee_birthdays->the_post();
	echo '<li>' . get_the_title() . ' : '.get_field('birthday', get_the_ID()).'</li>';
}
