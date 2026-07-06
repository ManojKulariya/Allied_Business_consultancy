<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Served from a subdirectory (http://localhost/allied-business) behind a
// root .htaccess rewrite: strip the prefix so route matching sees clean
// paths. URL generation stays correct via URL::forceRootUrl(APP_URL).
if (str_starts_with($_SERVER['REQUEST_URI'] ?? '', '/allied-business')) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen('/allied-business')) ?: '/';
}

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
