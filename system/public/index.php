<?php

use App\Routes\Rotas;
use Slim\Factory\AppFactory;

require_once('../vendor/autoload.php');
require_once('../env.php');

$app = AppFactory::create();

$app->addRoutingMiddleware();

$app->addErrorMiddleware(true, true, true);

Rotas::rotas($app);

$app->run();