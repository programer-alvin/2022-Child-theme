<?php
//Applied before save
//https://www.advancedcustomfields.com/resources/acf-save_post/#applied-before-save
add_action('acf/save_post', 'tttc_acf_applied_before_save_post', 5);
function tttc_acf_applied_before_save_post( $post_id ) {
    //tttc_log('tttc_acf_applied_before_save_post Fired');
    // Get previous values.
    $prev_values = get_fields( $post_id );

    // Get submitted values.
    $values = $_POST['acf'];

    // Check if a specific value was updated.
    if( isset($_POST['acf']['field_abc123']) ) {
        // Do something.
    }
}

// Applied after save
//https://www.advancedcustomfields.com/resources/acf-save_post/#applied-after-save
add_action('acf/save_post', 'tttc_acf_applied_after_save_post');
function tttc_acf_applied_after_save_post( $post_id ) {
    //tttc_log('tttc_acf_applied_after_save_post Fired');
    // Get newly saved values.
    $values = get_fields( $post_id );

    // Check the new value of a specific field.
    $hero_image = get_field('hero_image', $post_id);
    if( $hero_image ) {
        // Do something...
    }
}

/**
 * A function that retrieves file Url and saves in in the URL field
 *
 * @param mixed $post_id id of the current object.
 * @return void
 */
function tttc_retrieve_file_url_and_save_it_on_url( $post_id ) {
	$file_id = get_post_meta( $post_id, 'file', true );
	if ( $file_id ) {
		$url=wp_get_attachment_url( $file_id  );// https://developer.wordpress.org/reference/functions/wp_get_attachment_url/
		update_field( 'url', $url, $post_id );
	}
}
add_action( 'acf/save_post', 'tttc_retrieve_file_url_and_save_it_on_url' );

add_action('acf/save_post','tttc_test_old_value',5);//test old value
function tttc_test_old_value($post_id ){
	$old_value = get_field('field_617564937e7af', $post_id);
	error_log(json_encode($old_value));
}