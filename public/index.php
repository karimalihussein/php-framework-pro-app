<?php

declare (strict_types = 1);

use App\Http\Request;

require_once __DIR__ . '/../vendor/autoload.php';



// $root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

// define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
// define('FILES_PATH', $root . 'data' . DIRECTORY_SEPARATOR);
// define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);
// define('STORAGE_PATH', $root . 'storage' . DIRECTORY_SEPARATOR);

$request = Request::createFromGlobals();
dd($request);