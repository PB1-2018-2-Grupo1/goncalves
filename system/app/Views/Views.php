<?php

namespace App\Views;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Views {

    private $loader;
    protected $twig;

    /**
     * loaderPathTemplate
     * 
     * Função que carregará o caminho dos arquivos do templates, e configura o 
     * ambiente do utilizados pelo Twig.
     * 
     * @param string caminho dos templates
     * @param string caminho do cahe
     * @return void
     */
    protected function loaderPathTemplate($pathTemplate, $pathCache) {
        
        $this->loader = new FilesystemLoader($pathTemplate);
        
        $this->twig = new Environment( $this->loader, [
            'cache' => $pathCache,
            'debug' => true,
            'auto_reload' => true
        ]);
        
    }
}