<?php
/*
* Template Name: get_field_objects
* Template Post Type: post, page
*
*/
?>
<?php
/*$field_objects=get_field_objects();//https://www.advancedcustomfields.com/resources/get_field_objects/
echo '<pre>';
var_export($field_objects);
echo '</pre>';*/
$field_object=get_field_object('field_65156800c5ea6_field_65156800c5ea7');//https://www.advancedcustomfields.com/resources/get_field_object/
echo '<pre>';
var_export($field_object);
echo '</pre>';

echo '<pre>';
var_export(get_field('field_65156800c5ea6_field_65156800c5ea7'));
echo '</pre>';