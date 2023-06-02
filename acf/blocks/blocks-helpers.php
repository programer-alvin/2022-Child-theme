<?php
function tttc_convert_spacing_array_to_css($spacing_array) {
    $css = '';
    if(is_array($spacing_array)){
        foreach ($spacing_array as $key => $value) {
            switch ($key) {
                case 'top':
                    $css .= 'margin-top: ' . tttc_get_css_variable($value) . ';';
                    break;
                case 'right':
                    $css .= 'margin-right: ' . tttc_get_css_variable($value) . ';';
                    break;
                case 'bottom':
                    $css .= 'margin-bottom: ' . tttc_get_css_variable($value) . ';';
                    break;
                case 'left':
                    $css .= 'margin-left: ' . tttc_get_css_variable($value) . ';';
                    break;
            }
        }
    }
    return $css;
}

function tttc_get_css_variable($value) {
    $value_parts = explode('|', $value);
    if (count($value_parts) == 3 && $value_parts[0] == 'var:preset' && $value_parts[1] == 'spacing') {
        return 'var(--spacing-' . $value_parts[2] . ')';
    }
    return $value;
}