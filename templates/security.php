<?php
/*
*  Template Name: Security Test
*  Template Post Type: post, page, careers
*/
?>
<?php
$field_name      = 'kses';
the_field($field_name);
$unescaped_value = get_field( $field_name );
// $escaped_value   = wp_kses( $unescaped_value );
$escaped_value = acf_esc_html( $unescaped_value );



function findStringDifference( $str1, $str2 ) {
	$len1   = strlen( $str1 );
	$len2   = strlen( $str2 );
	$maxLen = max( $len1, $len2 );

	$difference = '';

	for ( $i = 0; $i < $maxLen; $i++ ) {
		$char1 = ( $i < $len1 ) ? $str1[ $i ] : '';
		$char2 = ( $i < $len2 ) ? $str2[ $i ] : '';

		if ( $char1 !== $char2 ) {
			$difference .= "<span style='color:red'>$char1</span>";
		} else {
			$difference .= $char1;
		}
	}

	return $difference;
}

$string1 = $unescaped_value;
$string2 = $escaped_value;

$difference = findStringDifference( $string1, $string2 );

/*echo "String 1: $string1 <br>";
echo "String 2: $string2 <br>";
echo "Difference: $difference";*/
