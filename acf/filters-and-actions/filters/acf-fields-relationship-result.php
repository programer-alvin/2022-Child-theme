<?php

function tttc_acf_fields_relationship_result_concat_post_id($text, $post, $field, $post_id) {
	$text = $post->ID . ': ' . $text;
	return $text;
}


add_filter( 'acf/fields/relationship/result', 'tttc_acf_fields_relationship_result_concat_post_id', 10, 4 );//https://www.advancedcustomfields.com/resources/acf-fields-relationship-result/
