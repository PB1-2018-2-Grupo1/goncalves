<?php

namespace App\Views;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class SiteViews extends Views{

    /**
     * __construct
     * 
     * Função que chama o método da classe pai, e fornece os caminhos do template
     * e cache.
     * 
     * @param void
     * @return void
     */
    public function __construct() {

        parent::loaderPathTemplate(getenv('PATH_TEMPLATE_SITE'), getenv('PATH_CACHE_SITE'));
        
    }

    /**
     * home
     * 
     * Método que exibirá o template da home do site.
     * 
     * @param Request 
     * @param Response
     * @param array
     * @return Response
     */
    public function home(Request $request, Response $response, $args){
        $template = $this->twig->load('home.html.twig');

        echo $template->render();

        return $response;
    }
}