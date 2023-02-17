<?php
// https://www.advancedcustomfields.com/resources/acf-load_field/
function tttc_acf_load_field( $field ) {
	//tttc_log( $field );
    if($field['label']=='accordion'){// label of your accordion field.
        $field['label'] = get_field('text');// update the label
    }
	return $field;
}

// Apply to accordion fields.
 add_filter( 'acf/load_field/type=accordion', 'tttc_acf_load_field' );
