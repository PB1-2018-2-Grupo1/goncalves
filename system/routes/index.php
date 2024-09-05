<?php

namespace routes;

use App\Controllers\SiteControllers;
use App\Controllers\AdminControllers;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$app = AppFactory::create();

$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

// Create Twig
$twig = Twig::create('views', ['cache' => false]);

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));

// My first Route
$app->get('/', SiteControllers::class . ':home');

$app->get('/admin', AdminControllers::class . ':home');

$app->get('/admin/users', AdminControllers::class . ':ShowUsers');

$app->get('/admin/users/{$user.id}', AdminControllers::class . ':ShowUpdateUser');

$app->run();