<?php

// Function to require all PHP files in a directory and its subdirectories
function tttc_require_all_PHP_files_directory( $directory ) {
	$iterator = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $directory ) );
	$phpFiles = new RegexIterator( $iterator, '/\.php$/' );

	foreach ( $phpFiles as $phpFile ) {
		require_once $phpFile->getPathname();
	}
}

function tttc_has_suffix( $suffix, $content ) {
	// Use the `substr` function to extract the substring with length equal to the length of the suffix
	$contentSuffix = substr( $content, -strlen( $suffix ) );

	// Compare the extracted suffix with the provided suffix
	return $contentSuffix === $suffix;
}

function tttc_has_prefix( $prefix, $content ) {
	// Use the `substr` function to extract the substring with length equal to the length of the prefix
	$contentPrefix = substr( $content, 0, strlen( $prefix ) );

	// Compare the extracted prefix with the provided prefix
	return $contentPrefix === $prefix;
}

add_filter(
	'sanitize_file_name',
	function( string $filename, string $filename_raw ) {
		// exclude ACF local files from the custom logic.
		if ( tttc_has_suffix( '.json', $filename ) && ( tttc_has_prefix( 'group_', $filename ) || tttc_has_prefix( 'post_type_', $filename ) || tttc_has_prefix( 'taxonomy_', $filename ) || tttc_has_prefix( 'ui_options_page_', $filename ) ) ) {
			return $filename;// the file is returned as it is
		}
		// Do something here.
		return $filename;
	},
	10,
	2
);

/**
 * Embeds iFrames
 *
 * Usage: embed_iframe(https://www.youtube.com/embed/egf-6m9mOgo?si=UzMlJ_1vxk8XXqAV);
 *
 * @param [type] $url
 * @param string $iframe_title
 * @param string $iframe_width
 * @param string $iframe_height
 * @param string $div_class
 * @param string $iframe_class
 * @param string $iframe_frameborder
 * @return void
 */
function embed_iframe( $url, $iframe_title = '', $iframe_width = '560', $iframe_height = '315', $div_class = 'tttc-div-iframe', $iframe_class = 'tttc-iframe', $iframe_frameborder = '0' ) {
	?>
	<div class="<?php echo esc_attr( $div_class ); ?>">
	<iframe class="<?php echo esc_attr( $div_class ); ?>" width="<?php echo esc_attr( $iframe_width ); ?>" height="<?php echo esc_attr( $iframe_height ); ?>" src="<?php echo esc_url( $url ); ?>" title="<?php echo esc_attr( $iframe_title ); ?>" frameborder="<?php echo esc_attr( $iframe_frameborder ); ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<?php
}

