<?php
// 4. a b c
define('PRIVATE_DIRECTORY', dirname(__FILE__));
define('PROJECT_DIRECTORY', dirname(PRIVATE_DIRECTORY));
define('SHARED_DIRECTORY', PRIVATE_DIRECTORY . '/shared');
define('PUBLIC_DIRECTORY', PROJECT_DIRECTORY . '/public');
define('CONTENTBEHEER_DIRECTORY', PUBLIC_DIRECTORY . '/contentbeheer');

include SHARED_DIRECTORY . '/functions.php';