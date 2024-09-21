<?php

namespace App\Views;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class SiteViews extends Views{

    public function __construct() {

        parent::loaderPathTemplate(getenv('PATH_TEMPLATE_SITE'), getenv('PATH_CACHE_SITE'));
        
    }

    public function home(Request $request, Response $response, $args){
        $template = $this->twig->load('home.html.twig');

        echo $template->render();

        return $response;
    }
}