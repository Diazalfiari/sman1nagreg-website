<?php

/**
 * Vercel Serverless Entry Point for Laravel
 * 
 * This file serves as the entry point for Laravel application
 * running on Vercel's serverless platform.
 */

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Set up temporary directories for serverless
if (!is_dir('/tmp/storage')) {
    mkdir('/tmp/storage', 0755, true);
}
if (!is_dir('/tmp/storage/framework')) {
    mkdir('/tmp/storage/framework', 0755, true);
}
if (!is_dir('/tmp/storage/framework/sessions')) {
    mkdir('/tmp/storage/framework/sessions', 0755, true);
}
if (!is_dir('/tmp/storage/framework/cache')) {
    mkdir('/tmp/storage/framework/cache', 0755, true);
}
if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0755, true);
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
} else {
    // Fallback for development
    require __DIR__.'/../vendor/autoload.php';
}

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
