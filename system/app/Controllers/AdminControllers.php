<?php

namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use App\Controllers\UserControllers;

class AdminControllers{

    public function home(Request $request, Response $response, $args)
    {
        $view = Twig::fromRequest($request);

        return $view->render($response, 'admin/home.html.twig');
    }

    public function ShowUsers(Request $request, Response $response, $args)
    {
        $users = UserControllers::getValuesUsersDB();
                
        $view = Twig::fromRequest($request);

        return $view->render($response, 'admin/users.html.twig', array("users" => $users));

    }

    public function ShowUpdateUser(Request $request, Response $response, $args)
    {
        $user = UserControllers::getValuesUserDB($args['id']);

        $view = Twig::fromRequest($request);

        return $view->render($response, 'admin/users-update.html.twig', array("user" => $user));
    }
}