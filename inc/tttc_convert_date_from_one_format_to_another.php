<?php
/**
 * Converts date from one format to another
 *
 * @param [type] $date_string Date string.
 * @param [type] $current_date_format the date format for $date_string.
 * @param [type] $new_date_format the new desired date format.
 * @return string
 */
function tttc_convert_date_from_one_format_to_another( $date_string, $current_date_format, $new_date_format ) {
	$date           = DateTime::createFromFormat( $current_date_format, $date_string ); // Create a DateTime object from the date string.
	$date_formatted = $date->format( $new_date_format ); // Format the date as needed.
	return $date_formatted; // Output the formatted date.
}
