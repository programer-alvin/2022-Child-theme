<?php
/*
 Template Name: email
*  Template Post Type: post, page, test
*/
?>
<?php
$email=get_field('email');
//https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_link_mailto
if($email){
    echo '<p><a href="mailto:'.$email.'">Send email</a></p>';
}
?>
