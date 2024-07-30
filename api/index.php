<?php

// Set the path to your Laravel project directory
$laravel_project_path = dirname(__DIR__);

// Change the working directory to the Laravel project path
chdir($laravel_project_path);

// Include the Laravel autoload file
require $laravel_project_path . '/vendor/autoload.php';

// Run the Laravel application
$app = require_once $laravel_project_path . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
