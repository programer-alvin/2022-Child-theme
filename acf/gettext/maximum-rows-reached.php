<?php
// https://developer.wordpress.org/reference/hooks/gettext/
function tttc_custom_maximum_rows_reached( string $translation, string $text, string $domain ) {
    tttc_log($translation);
	return str_replace( 'Maximum rows reached', 'Custom maximum rows reached Text', $translation );
}
add_filter( 'gettext', 'tttc_custom_maximum_rows_reached', 10, 3 );
