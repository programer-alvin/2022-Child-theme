<?php
/*
 Template Name: Sort Events By Repeater Dates
*  Template Post Type: post, page, event
*/
?>
<?php
//field group on acf/field_groups.php line 1580
$events = get_posts( array(
    'posts_per_page' => -1,
    'post_type'      => 'event',
    'post_status'    => 'publish'
) );

//prepare array
$dates_event=array();//array to hold dates and event post object
foreach($events as $event){
    $dates= get_field('dates', $event, false);
    if(is_array($dates)){
        foreach($dates as $date){
            $key='d'.$date['field_64f029d01e246'];
           // $date_event[$key]=$event; 
            array_push($dates_event, array($key=>$event));
        }
    }  
}
echo '<pre>';
var_dump($dates_event);
echo '</pre>';
//sort
function tttc_callback_for_comparison($a, $b){
    $a_key='';
    $b_key='';
    foreach($a as $a_key=>$a_event){

    }
    foreach($b as $b_key=>$b_event){

    }
  return $a_key>$b_key;
}

usort($dates_event, 'tttc_callback_for_comparison');

//display
foreach($dates_event as $date_event){
    foreach($date_event as $key=>$event){
        $date = substr($key, 1); // Extract from the second character to the end
        echo $date.': '.$event->post_title.'<br>';
    }
}