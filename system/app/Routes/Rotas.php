<?php

namespace App\Routes;

use App\Controllers\TestControllers;
use App\Views\SiteViews;
use App\Views\AdminViews;
use App\Controllers\UserControllers;
use App\DB\postgresql\UserDao;
use Slim\App;

class Rotas {
   
    public static function rotas(App $app) {
        $app->get('/', SiteViews::class . ':home');

        $app->get('/admin', AdminViews::class . ':Home');

        $app->get('/admin/users/create', AdminViews::class . ':ShowCreateUser');

        $app->post('/admin/users/create', UserControllers::class . ':CreateUser');

        $app->get('/admin/users/{id}', AdminViews::class . ':ShowUpdateUser');

        $app->post('/admin/users/{id}', UserControllers::class . ':UpdateUser');

        $app->get('/admin/users/{id}/delete', UserControllers::class . ':DeleteUser');

        $app->get('/admin/users', AdminViews::class . ':ShowUsers');

        $app->get('/test', TestControllers::class . ':test');
        
    }
}


