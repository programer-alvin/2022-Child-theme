<?php
/**
 * Template Name: Next and previous links
 * Template Post Type: post, page, book
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<nav class="navigation post-navigation" role="navigation">
		<div class="nav-links">
			<div class="nav-previous">
				<?php previous_post_link( '%link', '&laquo; %title' ); ?>
			</div>
			<div class="nav-next">
				<?php next_post_link( '%link', '%title &raquo;' ); ?>
			</div>
		</div>
	</nav>
</article>

	<?php
endwhile;

get_footer();
?>
