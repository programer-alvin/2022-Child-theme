<?php
/*
 Template Name: Test
*  Template Post Type: post, page, careers
*/

?>

<?php

function get_term_id_by_name( $term_name ) {
	$term = get_term_by( 'name', $term_name, 'careers_cat' );// https://developer.wordpress.org/reference/functions/get_term_by/
	var_dump( $term );// remove
	if ( $term ) {
		return $term->term_id;
	}
	return -1;

}

/*
$posts = get_posts(
	array(
		'numberposts' => -1,
		'post_type'   => 'careers',
		'meta_query'  => array(
			'relation' => 'AND',
			array(
				'key'     => 'field_1',
				'value'   => get_term_id_by_name( '2 year degree' ),
				'compare' => 'LIKE',
			),
			array(
				'key'     => 'field_2',
				'value'   => get_term_id_by_name( 'Mostly Inside' ),
				'compare' => 'LIKE',
			),
		),
	)
);*/
?>
<pre>
	<?php // var_dump( $posts ); ?>
</pre>



<?php

function concat_prepend_value_append() {

}

var_dump( concat_prepend_value_append() );
echo '<pre>';
 var_dump( get_field_object( 'field_name', 1 ) );
// var_dump( get_fields() );
echo '</pre>';

$args            = array(
	'post_type'      => 'page',
	'posts_per_page' => -1,
	'meta_query'     => array(
		'relation' => 'AND',
		array(
			'key'     => 'rel', // relations field name.
			 // ID of the current post.
			'compare' => 'LIKE',
		),
	),
);
	$medewerkers = get_posts( $args );


echo '<pre>';
 var_dump( $medewerkers );
// var_dump( get_fields() );
echo '</pre>';
