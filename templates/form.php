<?php
/*
 Template Name: Form
*  Template Post Type: post, page, test
*/
?>
<?php acf_form_head(); ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<?php
		acf_form(
			array(
				'post_id'      => 1,
				'post_title'   => true,
				'post_content' => true,
				'new_post'     => array(
					'post_type'   => 'post',
					'post_status' => 'publish',
				),
				'uploader' => 'wp', 
				'submit_value' => 'Submit',
			)
		);
		?>
	<?php endwhile; ?>

	
	</div><!-- #content -->
</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
