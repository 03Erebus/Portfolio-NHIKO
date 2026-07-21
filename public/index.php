<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Cores\Application;
use App\Controllers\SiteController;

$app = new Application();

// When a user goes to '/', create a SiteController object and run the 'home' method
$app->router->get('/', [SiteController::class, 'home']);

// When a user goes to '/gallery', create a SiteController object and run 'gallery'
$app->router->get('/gallery', [SiteController::class, 'gallery']);

$app->router->get('/software', [SiteController::class, 'software']);

$app->run();