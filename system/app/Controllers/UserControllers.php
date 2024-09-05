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
}

?> 