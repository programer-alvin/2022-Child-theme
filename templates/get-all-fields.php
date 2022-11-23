<?php
/*
 Template Name: Get all fields
*  Template Post Type: post, page, careers
*/

?>

<?php
// https://www.advancedcustomfields.com/resources/get_field_objects/
//a different setup https://drive.google.com/file/d/190Wpa8b7ZlrZgtg3UxswZw5ZY21Kaqhe/view?usp=sharing
//https://drive.google.com/file/d/1SR6YncUVDC6dz64yR6Zswztah5gB1V9t/view?usp=sharing
function get_all_fields( $post_id ) {
	$groups = acf_get_field_groups(  );// retrieve all groups

	foreach ( $groups as &$group ) {
		$fields = acf_get_fields( $group['key'] );// retrieve fields associated with group.
		foreach ( $fields as &$field ) {
			$field['value'] = get_field( $field['key'], $post_id );// retrieve field value.
		}
		 $group['fields'] = $fields;
	}
	return $groups;

}

?>

Custom soln<pre>
<?php var_export( get_all_fields( false) ); ?>
</pre>
