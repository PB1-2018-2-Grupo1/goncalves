<?php

namespace App\Routes;

use App\Controllers\TestControllers;
use App\Views\SiteViews;
use App\Views\AdminViews;
use App\Controllers\UserControllers;
use Slim\App;

class Rotas {
   
    public static function rotas(App $app) {
        $app->get('/', SiteViews::class . ':home');

        $app->get('/admin', AdminViews::class . ':home');

        $app->get('/admin/users', AdminViews::class . ':ShowUsers');

        $app->get('/admin/users/{id}', AdminViews::class . ':ShowUpdateUser');

        $app->post('/admin/users/{id}', UserControllers::class . ':updateUser');

        $app->get('/arroz', UserControllers::class . ':test2');

        $app->get('/test', TestControllers::class . ':test');
        
    }
}


