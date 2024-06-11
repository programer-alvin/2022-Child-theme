<?php
/*
*  Template Name: Security Test
*  Template Post Type: post, page, careers
*/
?>
<?php
$field_name = 'kses';

// $unescaped_value = get_field( $field_name );
// $escaped_value   = wp_kses( $unescaped_value );
// $escaped_value = acf_esc_html( $unescaped_value );

// echo $escaped_value;

the_field( $field_name );
echo '<br>';
//the_field( 'wysiw' );

