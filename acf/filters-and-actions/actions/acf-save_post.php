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