<?php
// 4. a b c
define('PRIVATE_DIRECTORY', dirname(__FILE__));
define('PROJECT_DIRECTORY', dirname(PRIVATE_DIRECTORY));
define('SHARED_DIRECTORY', PRIVATE_DIRECTORY . '/shared');
define('PUBLIC_DIRECTORY', PROJECT_DIRECTORY . '/public');
define('CONTENTBEHEER_DIRECTORY', PUBLIC_DIRECTORY . '/contentbeheer');
// echo PUBLIC_DIRECTORY;
// 6. a b c
// echo '$_SERVER["SCRIPT_NAME"]: ' . $_SERVER['SCRIPT_NAME'] . '<br><br>';
// echo '$_SERVER["DOCUMENT_ROOT"]: ' . $_SERVER['DOCUMENT_ROOT'] . '<br><br>';
// echo '__FILE__: ' . __FILE__ . '<br><br>';

// // 6. d constanten
// echo 'PROJECT_DIRECTORY: ' . PROJECT_DIRECTORY . '<br><br>';
// echo 'PRIVATE_DIRECTORY: ' . PRIVATE_DIRECTORY . '<br><br>';
// echo 'SHARED_DIRECTORY: ' . SHARED_DIRECTORY . '<br><br>';

$root = substr(
    $_SERVER['SCRIPT_NAME'],
    0,
    strpos($_SERVER['SCRIPT_NAME'], '/public') + 7
);
define("ROOT_URL", $root);

function url_path($path)
{
    if ($path[0] != '/') {
        $path = "/" . $path;
    }
    return ROOT_URL . $path;
}