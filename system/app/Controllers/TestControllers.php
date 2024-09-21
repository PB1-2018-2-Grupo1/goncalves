<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TestControllers {

    public function test(Request $request, Response $response, array $args) {
        return $response->withHeader('Location', '/admin/users')->withStatus(302);

    }
}