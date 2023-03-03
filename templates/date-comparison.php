<?php
/*
 Template Name: Date comparison
*  Template Post Type: post, page, careers
*/

?>
<?php

// strtotime()-> Be aware of dates in the m/d/y or d-m-y formats; if the separator is a slash (/), then the American m/d/y is assumed. If the separator is a dash (-) or a dot (.), then the European d-m-y format is assumed. To avoid potential errors, you should YYYY-MM-DD dates or date_create_from_format() when possible.
$date_from_field = '04/03/23';// d/m/y format.
$current_date    = date( 'm/d/y' );// strtotime() understands m/d/y.
// convert date to the desired time format for strtotime() that is m/d/y.
$date_from_field = tttc_convert_date_from_one_format_to_another( $date_from_field, 'd/m/y', 'm/d/y' );
// convert to timestamp and compare
if ( strtotime( $current_date ) > strtotime( $date_from_field ) ) {
	echo 'Current date is greater than the event date';
} else {
	echo 'Current date is less than or equal to the event date';
}
