<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/' || $uri === '' ||  $uri === '/index.php') {
    $uri = '/login.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");
//require_once("/home/evandro/projectInNOut/src/controllers/day_records.php");
