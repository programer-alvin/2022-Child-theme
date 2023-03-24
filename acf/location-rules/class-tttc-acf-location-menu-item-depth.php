<?php
// To be used in themes that support menus like 2021.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class My_ACF_Location_Menu_Item_Depth extends ACF_Location {

	public function initialize() {
		$this->name        = 'menu_item_depth';
		$this->label       = __( 'Menu Item Depth', 'acf' );
		$this->category    = 'forms';
		$this->object_type = 'menu_item';
	}

	public function get_values( $rule ) {
		$choices = array(
			'top_level' => __( 'Top Level Page (no parent)', 'acf' ),
			'child'     => __( 'Child Page (has parent)', 'acf' ),
		);

		return $choices;
	}

	public function match( $rule, $screen, $field_group ) {

		// Check screen args.
		if ( !isset( $screen['nav_menu_item'] )  || !array_key_exists('nav_menu_item_depth',$screen)) {
			return false;
		}

		// Compare.
		switch ( $rule['value'] ) {

			case 'top_level':
				$result      = ( $screen['nav_menu_item_depth'] === 0 );
				break;
			case 'child':
				$result      = ( $screen['nav_menu_item_depth']  !== 0 );
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



