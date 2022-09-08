<?php
// https://www.advancedcustomfields.com/resources/acf_form/
// https://www.advancedcustomfields.com/resources/acf_register_form/
get_header();
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
				'post_id'      => 123,
				'post_title'   => false,
				'post_content' => false,
				'submit_value' => __( 'Update meta' ),
				// 'fields'       => array( 'field_62fea3edd36a3' ),
				'field_groups' => array( 'group_62fea3503ab1e' ),
				'uploader'     => 'basic',
			)
		);
		?>
	<?php endwhile; ?>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php
get_footer();
