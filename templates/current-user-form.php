<?php
/*
* Template Name: Current User Form
* Template Post Type: post, page
*
*/
?>
<?php if ( is_user_logged_in() ) : ?>
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
					'post_id'      => 'user_' . get_current_user_id(),
					'post_title'   => false,
					'post_content' => false,
                    'field_groups'=> array( 'group_6169596eef822'),
					'submit_value' => __( 'Update User' ),
                    'uploader'				=> 'basic',
				)
			);
			?>
		<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
<?php else : ?>
	<p>Not logged in</p>
<?php endif; ?>
