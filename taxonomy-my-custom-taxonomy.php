<?php
/**
 * The template for displaying my-custom-taxonomy
 */
?>
<?php
$taxonomy_slug = 'my-custom-taxonomy';
$terms         = get_terms( $taxonomy_slug );
var_dump($terms );

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	echo '<ul>';
	foreach ( $terms as $term ) {
		echo '<li><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';
	}
	echo '</ul>';
}
