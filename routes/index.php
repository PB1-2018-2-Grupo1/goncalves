<?php

namespace routes;

use App\controllers\SiteControllers;
use App\controllers\AdminControllers;
use App\controllers\UserControllers;
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

$app->get('/admin/users', UserControllers::class . ':getUsers');

$app->run();