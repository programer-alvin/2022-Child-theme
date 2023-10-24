<?php
/*
* Template Name: Custom Query Loop
*  Template Post Type: post, page, careers, clasificaciones, contest, cattron-product, books, cpt
*
*/

?>
<?php
if ( ! function_exists( 'my_custom_post_query_loop' ) ) {
	function my_custom_post_query_loop( $atts ) {
		// https://developer.wordpress.org/reference/functions/get_posts/
		// https://www.advancedcustomfields.com/resources/orde-posts-by-custom-fields/
		$args = array(
			'post_type'  => 'post',
			'meta_query' => array(
				'custom_clause' => array(
					'key' => 'my_custom_date',
				),

			),
			'orderby'    => array(
				'custom_clause' => 'DESC',
			),
		);
		$posts = get_posts( $args );
		ob_start();
		?>
		<div class="my-posts">
			<?php
			foreach ( $posts as $post ) {
				?>
				<div class="post">
					<div class="title">
						<h2><?php echo esc_html( get_the_title( $post ) ); // https://developer.wordpress.org/reference/functions/get_the_title/ ?></h2>
					</div>
					<div class="excerpt">
						<p><?php echo esc_html( get_the_excerpt( $post ) ); // https://developer.wordpress.org/reference/functions/get_the_excerpt/ ?></p>
					</div>
					<div class="custom-value">
						<p><?php echo esc_html( get_field( 'my_custom_date', $post->ID ) ); // https://www.advancedcustomfields.com/resources/get_field/ ?></p>
					</div>
				</div>
				<?php
			}
			?>
		</div>
		<?php
		return ob_get_clean();
	}
}
add_shortcode( 'my_query_loop', 'my_custom_post_query_loop' ); // Add shortcode.
