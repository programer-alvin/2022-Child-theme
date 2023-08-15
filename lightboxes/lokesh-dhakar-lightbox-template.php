<?php
/*
 Template Name: Lokesh Dhakar Lightbox
*  Template Post Type: post, page, book
*/
//Lightbox library by Lokesh Dhakar at https://lokeshdhakar.com/projects/lightbox2/#examples
get_header();
$attachment_id=get_field('image',false,false);
if($attachment_id):
    		// Get the thumbnail URL
		$thumbnail_size = 'thumbnail'; // You can change this to 'medium', 'large', or any custom image size you have defined
		$thumbnail_data = wp_get_attachment_image_src($attachment_id, $thumbnail_size);
		$thumbnail_url = $thumbnail_data[0];

		// Get the full-size image URL
		$full_size_data = wp_get_attachment_image_src($attachment_id, 'full'); // 'full' will get the full-size image
		$full_size_url = $full_size_data[0];
?>
<a class="example-image-link" href="<?php echo $full_size_url?>" data-lightbox="example-1"><img class="example-image" src="<?php echo $thumbnail_url?>" alt="image-1" /></a>
<?php
endif;
get_footer( );
