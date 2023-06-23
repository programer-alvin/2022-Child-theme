<?php
/*
 Template Name: Adding ACF form to Existing Form tag
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

		<form >
			<label for="fname">First name:</label><br>
			<input type="text" id="fname" name="fname" value="John"><br>
			<label for="lname">Last name:</label><br>
			<input type="text" id="lname" name="lname" value="Doe"><br><br>
			

			<?php
			acf_form(
				array(
					'post_id' => get_the_ID(),
					// 'field_groups' => array( 'group_62fea3503ab1e' ),
					'fields'  => array( 'field_6169597e66595' ), // file field from field group at acf\field_groups.php
					'form'    => true,
				)
			);

			?>
			
		</form> 
	<?php endwhile; ?>

	
	</div><!-- #content -->
</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>