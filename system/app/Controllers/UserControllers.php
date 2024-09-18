<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteContext;
use App\DB\postgresql\UserDao;
use App\Models\User;

class UserControllers {

    /**
     * getUsers
     * 
     * Retorna um Array com os usuários cadastrados no banco.
     * @param void
     * @return array
     */
    public static function getValuesUsersDB()
    {
        $userDao = new UserDao();

        $users = $userDao->getUsers();
        
        return $users;
    }

    /**
     * getUsers
     * 
     * Retorna um Array com os atributos do usuário, dono do id fornecido.
     * @param int
     * @return array
     */
    public static function getValuesUserDB($id)
    {
        $userDao = new UserDao();

        $users = $userDao->getUserById($id);
        
        return $users;
    }

    /**
     * updateUsers
     * 
     * Recebi os valores e faz um update no banco de dados.
     * @param array
     * @return void
     */
    public static function updateUser(Request $request, Response $response, $args)
    {
        $contents = (array)$request->getParsedBody();

        $contents['id'] = $args['id'];

        $user = new User();

        $user->setValues($contents);

        $userDao = new UserDao();
        
        $userDao->updateUser($user);

        return $response
                ->withHeader('Location', '/admin/users')
                ->withStatus(302);


    }
}

?> 