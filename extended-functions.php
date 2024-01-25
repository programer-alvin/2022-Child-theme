<?php

// Function to require all PHP files in a directory and its subdirectories
function tttc_require_all_PHP_files_directory($directory) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
    $phpFiles = new RegexIterator($iterator, '/\.php$/');

    foreach ($phpFiles as $phpFile) {
        require_once $phpFile->getPathname();
    }
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
		//exclude ACF local files from the custom logic.
		if ( tttc_has_prefix( 'group_', $filename ) || tttc_has_prefix( 'post_type_', $filename ) || tttc_has_prefix( 'taxonomy_', $filename ) || tttc_has_prefix( 'ui_options_page_', $filename ) ) {
			return $filename;// the file is returned as it is
		}
		//Do something here.
		return $filename;
	},
	10,
	2
);