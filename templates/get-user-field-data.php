<?php
/*
* Template Name: Get User Field Data
*  Template Post Type: post, page, careers, clasificaciones, contest
*
*/
?>
<?php
$user_id = get_current_user_id();// https://developer.wordpress.org/reference/functions/get_current_user_id/
$value   = get_field( 'text', 'user_' . $user_id );// https://www.advancedcustomfields.com/resources/get_field/#get-a-value-from-different-objects
echo $value;
