<?php

namespace App\controllers;

use App\DB\postgresql\UserDao;

class UserControllers {

    public function getUsers()
    {
        $userDao = new UserDao();

        $users = $userDao->getUsers();

        var_dump($users);

        exit;

    }
}

?> 