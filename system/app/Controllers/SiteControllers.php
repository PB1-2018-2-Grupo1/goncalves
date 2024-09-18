<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class SiteControllers{

    public function home(Request $request, Response $response, $args){
        $view = Twig::fromRequest($request);

        return $view->render($response, 'site/home.html.twig');
    }
}