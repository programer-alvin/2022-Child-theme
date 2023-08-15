<?php

function tttc_acf_fields_relationship_result_concat_post_id($text, $post, $field, $post_id) {
	$attachment_id=get_field('image', $post,false);
	$thumbnail_html='';
	if($attachment_id){
		$thumbnail_html = wp_get_attachment_image($attachment_id, 'thumbnail',array( "class" => "tttc-img-in-relationship-field-type" )).' ';
	}
	$text = $thumbnail_html. $post->ID . ': ' . $text;
	return $text;
}


add_filter( 'acf/fields/relationship/result', 'tttc_acf_fields_relationship_result_concat_post_id', 10, 4 );//https://www.advancedcustomfields.com/resources/acf-fields-relationship-result/
