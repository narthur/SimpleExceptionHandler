<?php

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'exceptionHandler.php';

class CustomException extends Exception {}

print 'Throwing custom exception...';

throw new CustomException('Custom exception');