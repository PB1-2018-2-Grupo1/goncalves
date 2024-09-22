<?php

namespace App\Views;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use App\Controllers\UserControllers;

class AdminViews extends Views{

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

        parent::loaderPathTemplate(getenv('PATH_TEMPLATE_ADMIN'), getenv('PATH_CACHE_ADMIN'));
        
    }

    
    /**
     * home
     * 
     * Método que exibirá o template da home do admin.
     * 
     * @param Request 
     * @param Response
     * @param array
     * @return Response
     */
    public function Home(Request $request, Response $response, $args)
    {
        $template = $this->twig->load('home.html.twig');

        echo $template->render();

        return $response;
    }

    /**
     * ShowUsers
     * 
     * Método que exibirá o template do admin, que apresenta os usuários cadastrados.
     * 
     * @param Request 
     * @param Response
     * @param array
     * @return Response
     */
    public function ShowUsers(Request $request, Response $response, $args)
    {
        $users = UserControllers::getValuesUsersDB();

        $template = $this->twig->load('users.html.twig');

        echo $template->render(array("users" => $users));
      
        return $response;

    }

    /**
     * ShowUpdateUser
     * 
     * Método que exibirá o template do admin, que apresentará o formulário de atulização
     * cadastral do usuário.
     * 
     * @param Request 
     * @param Response
     * @param array
     * @return Response
     */
    public function ShowUpdateUser(Request $request, Response $response, $args)
    {
        $user = UserControllers::getValuesUserDB($args['id']);

        $template = $this->twig->load('users-update.html.twig');

        echo $template->render(array("user" => $user));
      
        return $response;
    }

    /**
     * ShowCreateUser
     * 
     * Método que exibirá o template do admin, que apresenta o formulário de cadastro
     * de usuário.
     * 
     * @param Request 
     * @param Response
     * @param array
     * @return Response
     */
    public function ShowCreateUser(Request $request, Response $response, $args)
    {
        $template = $this->twig->load('users-create.html.twig');

        echo $template->render();
      
        return $response;
    }
}