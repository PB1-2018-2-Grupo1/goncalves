<?php

namespace App\controllers;

use App\DB\mysql\UserDao;

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