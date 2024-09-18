<?php

namespace App\Routes;

use App\Controllers\SiteControllers;
use App\Controllers\AdminControllers;
use App\Controllers\UserControllers;
use Slim\App;

class Rotas {
   
    public static function Rotas(App $app) {
        $app->get('/', SiteControllers::class . ':home');

        $app->get('/admin', AdminControllers::class . ':home');

        $app->get('/admin/users', AdminControllers::class . ':ShowUsers')->setName('users');

        $app->get('/admin/users/{id}', AdminControllers::class . ':ShowUpdateUser');

        $app->post('/admin/users/{id}', UserControllers::class . ':updateUser');
        
    }
}


