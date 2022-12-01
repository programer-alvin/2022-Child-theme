<?php
//Add field definitions to the REST API response.
add_filter('acf/rest/format_value_for_rest', function ($value_formatted, $post_id, $field, $value, $format){
    return  array(
        'value'=>$value_formatted,
        'field'=>$field
    );
}, 10, 5);