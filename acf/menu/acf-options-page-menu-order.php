<?php
//https://drive.google.com/file/d/1Uhp_HNQVCLwIrdh_QSqySyZ3vOgDufjU/view?usp=sharing
//https://support.advancedcustomfields.com/forums/topic/change-menu-position-of-options-page/
function custom_menu_order( $menu_ord ) {  
    
    if (!$menu_ord) return true;  
    
    /*echo '<pre>';
    print_r( $menu_ord );
    echo '</pre>';
    die;*/
    // vars
	//$menu = 'edit.php?post_type=acf-field-group';
	$menu = 'theme-general-settings';
    
    
    // remove from current menu
    $menu_ord = array_diff($menu_ord, array( $menu ));
    
    
    // append after index.php [0]
    array_splice( $menu_ord, 1, 0, array( $menu ) );
    
    
    // return
    return $menu_ord;
}  
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order  
add_filter('menu_order', 'custom_menu_order');
