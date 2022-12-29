<?php
// https://www.advancedcustomfields.com/resources/get_field_objects/
// https://drive.google.com/file/d/190Wpa8b7ZlrZgtg3UxswZw5ZY21Kaqhe/view?usp=sharing
/**
 * Custom method to retrieve fields associated with a particular post ID
 *
 * @param [type] $post_id
 * @return void
 */
function tttc_get_fields_by_post_id( $post_id ) {
	$groups = acf_get_field_groups( array( 'post_id' => $post_id ) );// retrieve groups associated with post.

	foreach ( $groups as &$group ) {
		$fields = acf_get_fields( $group['key'] );// retrieve fields associated with group.
		foreach ( $fields as &$field ) {
			$field['value'] = get_field( $field['key'], $post_id );// retrieve field value.
		}
		 $group['fields'] = $fields;
	}
	return $groups;

}
