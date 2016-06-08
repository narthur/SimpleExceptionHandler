<?php

set_exception_handler ( function($e) {
    $filename = 'log.txt';
    $logLine = "Exception type: " . get_class($e) . "\nThrown with message: " . $e->getMessage() . "\nOn: " . date("F j, Y, g:i a") . "\n\n";
    file_put_contents($filename, $logLine, FILE_APPEND);
} );