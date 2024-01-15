<?php
// https://www.advancedcustomfields.com/resources/relationship/#display-list-of-posts-without-setuppostdata
if ( ! function_exists( 'tttc_acf_relationship_shortcode' ) ) {
	function tttc_acf_relationship_shortcode( $atts ) {
		$a       = shortcode_atts(
			array(
				'field'   => '', // It is recommended to hardcode this  instead of allowing users to access any field.
				'post_id' => false, // It is recommended to hardcode this instead of allowing users to access fields from any wordpress object.
			),
			$atts
		);
		$html    = ''; // Holds html content generated.
		$field   = $a['field'];
		$post_id = $a['post_id'];
		if ( '' !== $field ) {
			if ( function_exists( 'get_field' ) ) {
				$featured_posts = get_field( $field, $post_id );
				ob_start();
				if ( $featured_posts ) : ?>
					<ul>
					<?php
					foreach ( $featured_posts as $featured_post ) :
						$permalink    = get_permalink( $featured_post->ID );
						$title        = get_the_title( $featured_post->ID );
						$custom_field = get_field( 'field_name', $featured_post->ID );
						?>
						<li>
							<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
							<span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
						</li>
					<?php endforeach; ?>
					</ul>
					<?php
				endif;
				return ob_get_clean();
			} else {
				$html .= 'Please ensure ACF is installed and activated.';
			}
		} else {
			$html .= 'field attribute is empty. Please add it';
		}
		return $html; // Return content.
	}
}
add_shortcode( 'tttc_acf_relationship', 'tttc_acf_relationship_shortcode' ); // Add shortcode.
// usage: [tttc_acf_relationship field="relationship_field"]



//ACF to add page banners

$bannerTitle = [
'key' => 'field_abcdef0000001',
'label' => 'Page Title',
'name' => 'page_title',
'type' => 'text',
'instructions' => 'If you want the banner title to be the name of your page, leave this blank. If you want an alternative title, add it here.',
];

$bannerImage = [
'key' => 'field_abcdef0000002',
'label' => 'Image',
'name' => 'banner_picture',
'type' => 'image',
'instructions' => 'Add your image. Use the crop featured image tool to crop the image to Page Banner size',
'return_format' => 'array', // Return the image as an array
];

$placement_on_mobile = [
'key' => 'field_abcdef0000003',
'label' => 'placement',
'name' => 'placement',
'type' => 'radio',
'required' => 'true',
'instructions' => 'Select the focus you want on your banner image on small screen.',
'choices' => [
'left' => 'left',
'center' => 'center',
'right' => 'right',
],
'layout' => 0,
'default_value' => 'center',

];

$bannerFields = [$bannerImage, $bannerTitle, $placement_on_mobile];


if ($banner == 'yes') {

	if (function_exists('acf_add_local_field_group')) {
	acf_add_local_field_group([
	'key' => 'page_banner',
	'title' => 'Page Banner',
	'fields' => $bannerFields,
	'location' => [
	[
	[
	'param' => 'page_template',
	'operator' => '==',
	'value' => 'all',
	],
	],
	],
	]);
	}
	}
	
	//taxonomy banner
	$categoryBanner = get_theme_mod('category_banner_image');

	$bannerFields[0]['key']='field_abcdef0000004';//trying to change the field keys for the taxonomy field group
	$bannerFields[1]['key']='field_abcdef0000005';//trying to change the field keys for the taxonomy field group
	$bannerFields[2]['key']='field_abcdef0000006';//trying to change the field keys for the taxonomy field group

	//var_dump($bannerFields);// please confirm if the keys were changed.
	if ($categoryBanner == 'yes') {
	
	if (function_exists('acf_add_local_field_group')) {
	acf_add_local_field_group([
	'key' => 'taxonomy_banner',
	'title' => 'Taxonomy Banner',
	'fields' => $bannerFields,
	'location' => [
	[
	[
	'param' => 'taxonomy',
	'operator' => '==',
	'value' => 'all',
	],
	],
	],
	]);
	}
	}
