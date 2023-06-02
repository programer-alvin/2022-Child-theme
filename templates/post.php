<?php
/*
 Template Name: Custom Post Template-All Fields
*  Template Post Type: post, page, test
*/
?>
<?php acf_form_head(); ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
	<?php 
		$rows = get_field('repeater');
		echo '<pre>';
		var_dump($rows);
		echo '</pre>';
		if( $rows ) {
			echo '<ul class="slides">';
			foreach( $rows as $row ) {
				$image = $row['image'];
				echo '<li>';
					echo wp_get_attachment_image( $image, 'full' );
					echo wpautop( $row['caption'] );
				echo '</li>';
			}
			echo '</ul>';
		}
		?>

	
	</div><!-- #content -->
</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
