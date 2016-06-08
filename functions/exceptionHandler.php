<?php

set_exception_handler ( function(Throwable $e) {
    $filename = '../log.txt';
    file_put_contents($filename, $e->getMessage() . ' - ' . date("F j, Y, g:i a") . "\n", FILE_APPEND);
} );