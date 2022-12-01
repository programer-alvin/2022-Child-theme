<?php
if ( ! function_exists( 'tttc_log' ) ) {
	function tttc_log( $entry, $mode = 'a', $file = 'plugin' ) {
		// Retrieve WordPress uploads dir.
		$upload_dir = wp_upload_dir();
		$upload_dir = $upload_dir['basedir'];

		// json_encode if entry passed is array.
		if ( is_array( $entry ) ) {
			$entry = json_encode( $entry );
		}

		// Write the log file.
		$file  = $upload_dir . '/' . $file . '.log';
		$file  = fopen( $file, $mode );
		$bytes = fwrite( $file, current_time( 'mysql' ) . '::' . $entry . "\n" );
		fclose( $file );

		return $bytes;
	}
}
