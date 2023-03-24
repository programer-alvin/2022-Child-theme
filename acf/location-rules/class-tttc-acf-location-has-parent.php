<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class My_ACF_Location_Has_Parent extends ACF_Location {

	public function initialize() {
		$this->name        = 'has_parent';
		$this->label       = __( 'Has Parent', 'acf' );
		$this->category    = 'page';
		$this->object_type = 'post';
	}

	public function get_values( $rule ) {
		$choices = array(
			'top_level' => __( 'Top Level Page (no parent)', 'acf' ),
			'child'     => __( 'Child Page (has parent)', 'acf' ),
		);

		return $choices;
	}

	public function match( $rule, $screen, $field_group ) {

		// Check screen args for "post_id" which will exist when editing a post.
		// Return false for all other edit screens.
		if ( isset( $screen['post_id'] ) ) {
			$post_id = $screen['post_id'];
		} else {
			return false;
		}

		// Load the post object for this edit screen.
		$post = get_post( $post_id );
		if ( ! $post ) {
			return false;
		}

		// Compare.
		switch ( $rule['value'] ) {

			case 'top_level':
				$page_parent = (int) ( isset( $screen['page_parent'] ) ? $screen['page_parent'] : $post->post_parent );
				$result      = ( $page_parent === 0 );
				break;

			case 'child':
				$page_parent = (int) ( isset( $screen['page_parent'] ) ? $screen['page_parent'] : $post->post_parent );
				$result      = ( $page_parent !== 0 );
				break;

			default:
				return false;
		}

			// Reverse result for "!=" operator.
		if ( $rule['operator'] === '!=' ) {
			return ! $result;
		}
			return $result;
	}
}



