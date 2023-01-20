<?php
/*
 Template Name: Sort Repeater
*  Template Post Type: post, page, careers
*/
?>
<?php
$repeater_rows=get_field('repeater_to_sort');
function tttc_sort_repeater_rows_by_sub_field_3($a,$b)
{

return ($a['sub_field_3']<$b['sub_field_3']);
}

usort($repeater_rows,"tttc_sort_repeater_rows_by_sub_field_3");//https://www.w3schools.com/php/func_array_usort.asp
echo 'sub field 3<pre>';
var_dump($repeater_rows);
echo '</pre>';

function tttc_sort_repeater_rows_by_sub_field_2($a,$b)
{

return ($a['sub_field_2']<$b['sub_field_2']);
}

usort($repeater_rows,"tttc_sort_repeater_rows_by_sub_field_2");//https://www.w3schools.com/php/func_array_usort.asp
echo 'sub field 2<pre>';
var_dump($repeater_rows);
echo '</pre>';

function tttc_sort_repeater_rows_by_sub_field_1($a,$b)
{

return ($a['sub_field_1']<$b['sub_field_1']);
}

usort($repeater_rows,"tttc_sort_repeater_rows_by_sub_field_1");//https://www.w3schools.com/php/func_array_usort.asp
echo 'sub field 1<pre>';
var_dump($repeater_rows);
echo '</pre>';



