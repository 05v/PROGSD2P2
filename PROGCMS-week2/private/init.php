<?php

// 4. a b c
define('PROJECT_DIRECTORY', __DIR__);
define('PRIVATE_DIRECTORY', PROJECT_DIRECTORY . '/private');
define('SHARED_DIRECTORY', PRIVATE_DIRECTORY . '/shared');

// 6. a b c
echo '$_SERVER["SCRIPT_NAME"]: ' . $_SERVER['SCRIPT_NAME'] . '<br><br>';
echo '$_SERVER["DOCUMENT_ROOT"]: ' . $_SERVER['DOCUMENT_ROOT'] . '<br><br>';
echo '__FILE__: ' . __FILE__ . '<br><br>';

// 6. d constanten
echo 'PROJECT_DIRECTORY: ' . PROJECT_DIRECTORY . '<br><br>';
echo 'PRIVATE_DIRECTORY: ' . PRIVATE_DIRECTORY . '<br><br>';
echo 'SHARED_DIRECTORY: ' . SHARED_DIRECTORY . '<br><br>';