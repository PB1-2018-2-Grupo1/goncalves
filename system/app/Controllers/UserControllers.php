<?php

namespace App\controllers;

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
}

?> 