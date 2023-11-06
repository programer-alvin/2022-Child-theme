<?php
/*
 Template Name: Replace block with another
*  Template Post Type: post, page
*/
?>
<?php
    function retrieveAcfAllFieldsBlock($content) {
        $pattern = '/<!-- wp:acf\/all-fields-block {(.*?)} \/-->/s';
        preg_match($pattern, $content, $matches);
    
        if (isset($matches[1])) {
            return '<!-- wp:acf/all-fields-block {' . $matches[1] . '} /-->';
        } else {
            return ''; // Return an empty string if the block is not found
        }
    }

    function retrieveAcfGridBlock($content) {
        $pattern = '/<!-- wp:acf\/auto-block-gallery {(.*?)} \/-->/s';
        preg_match($pattern, $content, $matches);
    
        if (isset($matches[1])) {
            return '<!-- wp:acf/auto-block-gallery {' . $matches[1] . '} /-->';
        } else {
            return ''; // Return an empty string if the block is not found
        }
    }

    function extractAcfData($blockString) {
        $pattern = '/"data":\s*({.*?})/';
        preg_match($pattern, $blockString, $matches);
    
        if (isset($matches[1])) {
            return $matches[1];
        } else {
            return ''; // Return an empty string if "data" is not found
        }
    }

    function convertJSONtoArray($str){
        // Convert the data string to an associative array
        return json_decode('{' . $str . '}', true);
    }

    function replaceAcfData($blockString, $newData) {
        $pattern = '/"data":\s*({.*?})/';
        $replacement = '"data": ' . $newData;
        $newBlockString = preg_replace($pattern, $replacement, $blockString);
    
        return $newBlockString;
    }




    /**/$post_id            = 3726; // Replace with your post ID
    $post               = get_post( $post_id );
    $existing_content   = $post->post_content;

    $all_fields_block_content=retrieveAcfAllFieldsBlock($existing_content);


    $all_fields_block_acfData = extractAcfData($all_fields_block_content);
    //in case you want to process data further
    /*$all_fields_block_acf_json_Data=  '"data":'.$all_fields_block_acfData;

    
    $all_fields_block_acf_array_Data=convertJSONtoArray($all_fields_block_acf_json_Data);
    var_export($all_fields_block_acf_array_Data);//proccess this data if need*/
    
    //you can also create block on fly 
    //$new_block='<!-- wp:acf/auto-block-gallery {"name":"acf/auto-block-gallery",'.$all_fields_block_acf_json_Data.' ,"mode":"preview","alignText":"left"} /-->';

    //Grid block
    $grid_block_content=retrieveAcfGridBlock($existing_content);
    $grid_block_content= replaceAcfData($grid_block_content, $all_fields_block_acfData);//replace data. It might need further processing before replacing if the fields are not the same.


    $new_content        = $existing_content . $grid_block_content;// append the block and delete the original block from backend if needed.
    // $new_content        = $block_data . $new_block;

    $post->post_content = $existing_content;
    wp_update_post( $post );
?>
<?php
