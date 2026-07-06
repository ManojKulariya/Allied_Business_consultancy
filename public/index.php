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
// root .htaccess rewrite. Present the front controller as living at the
// subdirectory root so Symfony detects base URL "/allied-business" —
// route matching, request URLs, intended redirects and pagination links
// all then carry the prefix correctly.
if (str_starts_with($_SERVER['REQUEST_URI'] ?? '', '/allied-business')) {
    $_SERVER['SCRIPT_NAME'] = '/allied-business/index.php';
}

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
