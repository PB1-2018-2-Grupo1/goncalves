<?php

use App\Routes\Rotas;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require_once('../vendor/autoload.php');
require_once('../env.php');

$app = AppFactory::create();

$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

// Create Twig
$twig = Twig::create('views', ['cache' => false]);

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));

Rotas::Rotas($app);

$app->run();