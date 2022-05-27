<?php

namespace routes;

use App\DB\mysql\Conect;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

// My first Route
$app->get('/', function (Request $request, Response $response, $args) {

    $mysql = new Conect();

    $result = $mysql->select('SELECT * FROM tb_persons');

    var_dump($result);

    $response->getBody()->write('');
    return $response;
});

$app->run();