<?php

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'exceptionHandler.php';

print 'Throwing standard exception...';

throw new Exception('Standard exception');