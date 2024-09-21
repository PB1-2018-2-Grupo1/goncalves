<?php

namespace App\Views;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Views {

    private $loader;
    protected $twig;

    protected function loaderPathTemplate($pathTemplate, $pathCache) {
        
        $this->loader = new FilesystemLoader($pathTemplate);
        
        $this->twig = new Environment( $this->loader, [
            'cache' => $pathCache,
            'debug' => true,
            'auto_reload' => true
        ]);
        
    }
}