<?php

//Bidirection
//Field Group: https://github.com/programer-alvin/2022-Child-theme/blob/bbc8f599ed5979879ac8c420c061d58f0d269481/acf/field_groups.php#L1347
add_action( 'acf/save_post', 'tttc_acf_save_post_bidirection_between_post_and_page' );//https://www.advancedcustomfields.com/resources/acf-save_post/#applied-after-save
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

//Bidirection
//Field Group: 
add_action( 'acf/save_post', 'tttc_acf_save_post_biderection_between_book_and_user' );//https://www.advancedcustomfields.com/resources/acf-save_post/#applied-after-save
function tttc_acf_save_post_biderection_between_book_and_user($post_id){
	if ( 'book' == get_post_type( $post_id ) ) {
		$book_author = get_field( 'book_author', $post_id, false );//get selected user ID
		if($book_author){
			$books=get_field( 'books', 'user_'.$book_author, false );
			if(!$books){
				update_field('books', array($post_id),'user_'.$book_author );
			}
			if ( ! in_array( $post_id, $books ) ) {
				//$post_id.='';//convert to string.
				array_push( $books, $post_id );
				update_field( 'books', $books, $post_id );
			}
		}
		
	}elseif(preg_match('/user_(\d+)/', $post_id, $matches)){
		$user_id= $matches[1];
		$books=get_field( 'books', $post_id, false );
		foreach($books as $book){
			update_field('book_author', $user_id, $book);
		}
	}
}
