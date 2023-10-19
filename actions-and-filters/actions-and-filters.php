<?php

// Function to require all PHP files in a directory and its subdirectories
function tttc_require_all_PHP_files_directory($directory) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
    $phpFiles = new RegexIterator($iterator, '/\.php$/');

    foreach ($phpFiles as $phpFile) {
        require_once $phpFile->getPathname();
    }
}

$rootDirectory = __DIR__;
tttc_require_all_PHP_files_directory($rootDirectory);




