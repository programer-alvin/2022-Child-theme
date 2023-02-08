<?php
// https://www.advancedcustomfields.com/resources/options-page/
if ( function_exists( 'acf_add_options_page' ) ) {

	$tttc_option_icon_from_wp = 'dashicons-buddicons-replies';
    //https://icon-sets.iconify.design/material-symbols/display-settings-rounded/
	$tttc_option_svg_icon     = 'data:image/svg+xml;base64,' . base64_encode( '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M15 11h1.5V9.75H18v-1.5h-1.5V7H15ZM6 9.75h8v-1.5H6ZM7.5 15H9v-4H7.5v1.25H6v1.5h1.5Zm2.5-1.25h8v-1.5h-8ZM9 21q-.425 0-.712-.288Q8 20.425 8 20v-1H4q-.825 0-1.412-.587Q2 17.825 2 17V5q0-.825.588-1.413Q3.175 3 4 3h16q.825 0 1.413.587Q22 4.175 22 5v12q0 .825-.587 1.413Q20.825 19 20 19h-4v1q0 .425-.287.712Q15.425 21 15 21Z"/></svg>' ); // phpcs:ignore WordPress.PHP.DiscouragedPHPFunctions.obfuscation_base64_encode
    $tttc_option_png_icon_by_url=get_stylesheet_directory_uri().'/asset/icons8-settings-24.png';
  
    //asset\icons8-settings-48.png
	acf_add_options_page(
		array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug'  => 'theme-general-settings',
			'icon_url'   =>$tttc_option_png_icon_by_url,//$tttc_option_icon_from_wp, $tttc_option_svg_icon
			'capability' => 'edit_posts',
			'redirect'   => false,
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title'  => 'Theme Header Settings',
			'menu_title'  => 'Header',
			'parent_slug' => 'theme-general-settings',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title'  => 'Theme Footer Settings',
			'menu_title'  => 'Footer',
			'parent_slug' => 'theme-general-settings',
		)
	);

}
