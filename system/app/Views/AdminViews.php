<?php

namespace App\Views;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use App\Controllers\UserControllers;

class AdminViews extends Views{

    public function __construct() {

        parent::loaderPathTemplate(getenv('PATH_TEMPLATE_ADMIN'), getenv('PATH_CACHE_ADMIN'));
        
    }

    public function Home(Request $request, Response $response, $args)
    {
        $template = $this->twig->load('home.html.twig');

        echo $template->render();

        return $response;
    }

    public function ShowUsers(Request $request, Response $response, $args)
    {
        $users = UserControllers::getValuesUsersDB();

        $template = $this->twig->load('users.html.twig');

        echo $template->render(array("users" => $users));
      
        return $response;

    }

    public function ShowUpdateUser(Request $request, Response $response, $args)
    {
        $user = UserControllers::getValuesUserDB($args['id']);

        $template = $this->twig->load('users-update.html.twig');

        echo $template->render(array("user" => $user));
      
        return $response;
    }

    public function ShowCreateUser(Request $request, Response $response, $args)
    {
        $template = $this->twig->load('users-create.html.twig');

        echo $template->render();
      
        return $response;
    }
}