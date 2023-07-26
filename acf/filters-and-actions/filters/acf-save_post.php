<?php

//Bidirection 
add_action( 'acf/save_post', 'tttc_acf_save_post_bidirection_between_post_and_page' );
function tttc_acf_save_post_bidirection_between_post_and_page( $post_id ) {

	if ( 'post' == get_post_type( $post_id ) ) {

		$my_related_pages = get_field( 'my_related_pages', $post_id, false );
		foreach ( $my_related_pages as $page ) {//multi select in post object
			// selected page
			$related_posts = get_field( 'my_related_posts', $page, false );
			if ( ! $related_posts ) {
				update_field( 'my_related_posts', array( $post_id ), $page );
				continue;
			}
			if ( ! in_array( $post_id, $related_posts ) ) {
				array_push( $related_posts, $post_id );
				update_field( 'my_related_posts', $related_posts, $page );
			}
		}
	} elseif ( 'page' == get_post_type( $post_id ) ) {
		$my_related_posts = get_field( 'my_related_posts', $post_id, false );
		foreach ( $my_related_posts as $post ) {//multi select in post object
			// selected post
			$related_pages = get_field( 'my_related_pages', $post, false );
			if ( ! $related_pages ) {
				update_field( 'my_related_pages', array( $post_id ), $post );
				continue;
			}
			if ( ! in_array( $post_id, $related_pages ) ) {
				array_push( $related_pages, $post_id );
				update_field( 'my_related_pages', $related_pages, $post );
			}
		}
	}

}
