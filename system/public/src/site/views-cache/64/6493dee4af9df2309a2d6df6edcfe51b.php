<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html */
class __TwigTemplate_1edd311e8760ea6e967e24722925694e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<!--
    Hcode Store by hcode.com.br
-->
<html lang=\"pt-br\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 11
        yield "    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"src/site/views/css/bootstrap.min.css\">
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"src/site/views/css/font-awesome.min.css\">
    
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"src/site/views/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"src/site/views/css/style.css\">
    <link rel=\"stylesheet\" href=\"src/site/views/css/responsive.css\">
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 28
        yield "
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class=\"header-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"user-menu\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Minha Conta</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-heart\"></i> Lista de Desejos</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> Meu Carrinho</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-lock\"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class=\"col-md-4\">
                    <div class=\"header-right\">
                        <ul class=\"list-unstyled list-inline\">
                            <li class=\"dropdown dropdown-small\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><span class=\"key\">moeda :</span><span class=\"value\">BRL </span><b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">BRL</a></li>
                                    <li><a href=\"#\">USD</a></li>
                                </ul>
                            </li>

                            <li class=\"dropdown dropdown-small\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><span class=\"key\">linguagem :</span><span class=\"value\">Português </span><b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Português</a></li>
                                    <li><a href=\"#\">Inglês</a></li>
                                    <li><a href=\"#\">Espanhol</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class=\"site-branding-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"logo\">
                        <h1><a href=\"#\"><img src=\"src/site/views/img/logo.png\"></a></h1>
                    </div>
                </div>
                
                <div class=\"col-sm-6\">
                    <div class=\"shopping-item\">
                        <a href=\"src/site/views/carrinho.html\">Carrinho - <span class=\"cart-amunt\">R\$100</span> <i class=\"fa fa-shopping-cart\"></i> <span class=\"product-count\">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class=\"mainmenu-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div> 
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Produtos</a></li>
                        <li><a href=\"#\">Carrinho</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->




    ";
        // line 121
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 122
        yield "




    <div class=\"footer-top-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-about-us\">
                        <h2>Hcode Store</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class=\"footer-social\">
                            <a href=\"https://www.facebook.com/hcodebr\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"https://twitter.com/hcodebr\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"https://www.youtube.com/channel/UCjWENuSH2gX55-y7QSZiWxA\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-menu\">
                        <h2 class=\"footer-wid-title\">Navegação </h2>
                        <ul>
                            <li><a href=\"#\">Minha Conta</a></li>
                            <li><a href=\"#\">Meus Pedidos</a></li>
                            <li><a href=\"#\">Lista de Desejos</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-menu\">
                        <h2 class=\"footer-wid-title\">Categorias</h2>
                        <ul>
                            <li><a href=\"#\">Categoria Um</a></li>
                            <li><a href=\"#\">Categoria Dois</a></li>
                            <li><a href=\"#\">Categoria Três</a></li>
                            <li><a href=\"#\">Categoria Quarto</a></li>
                            <li><a href=\"#\">Categoria Cinco</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-newsletter\">
                        <h2 class=\"footer-wid-title\">Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus!</p>
                        <div class=\"newsletter-form\">
                            <form action=\"#\">
                                <input type=\"email\" placeholder=\"Type your email\">
                                <input type=\"submit\" value=\"Subscribe\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class=\"footer-bottom-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"copyright\">
                        <p>&copy; 2017 Hcode Treinamentos. <a href=\"http://www.hcode.com.br\" target=\"_blank\">hcode.com.br</a></p>
                    </div>
                </div>
                
                <div class=\"col-md-4\">
                    <div class=\"footer-card-icon\">
                        <i class=\"fa fa-cc-discover\"></i>
                        <i class=\"fa fa-cc-mastercard\"></i>
                        <i class=\"fa fa-cc-paypal\"></i>
                        <i class=\"fa fa-cc-visa\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src=\"https://code.jquery.com/jquery.min.js\"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    
    <!-- jQuery sticky menu -->
    <script src=\"src/site/views/js/owl.carousel.min.js\"></script>
    <script src=\"src/site/views/js/jquery.sticky.js\"></script>
    
    <!-- jQuery easing -->
    <script src=\"src/site/views/js/jquery.easing.1.3.min.js\"></script>
    
    <!-- Main Script -->
    <script src=\"src/site/views/js/main.js\"></script>
    
    <!-- Slider -->
    <script type=\"text/javascript\" src=\"src/site/views/js/bxslider.min.js\"></script>
\t  <script type=\"text/javascript\" src=\"src/site/views/js/script.slider.js\"></script>

    ";
        // line 224
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 225
        yield "  </body>
</html>";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 224
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  318 => 224,  308 => 121,  298 => 27,  288 => 10,  282 => 225,  280 => 224,  176 => 122,  174 => 121,  79 => 28,  77 => 27,  59 => 11,  57 => 10,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<!--
    Hcode Store by hcode.com.br
-->
<html lang=\"pt-br\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block title %}{% endblock %}
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"src/site/views/css/bootstrap.min.css\">
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"src/site/views/css/font-awesome.min.css\">
    
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"src/site/views/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"src/site/views/css/style.css\">
    <link rel=\"stylesheet\" href=\"src/site/views/css/responsive.css\">
    {% block css %}{% endblock %}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class=\"header-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"user-menu\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Minha Conta</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-heart\"></i> Lista de Desejos</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i> Meu Carrinho</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-lock\"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class=\"col-md-4\">
                    <div class=\"header-right\">
                        <ul class=\"list-unstyled list-inline\">
                            <li class=\"dropdown dropdown-small\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><span class=\"key\">moeda :</span><span class=\"value\">BRL </span><b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">BRL</a></li>
                                    <li><a href=\"#\">USD</a></li>
                                </ul>
                            </li>

                            <li class=\"dropdown dropdown-small\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><span class=\"key\">linguagem :</span><span class=\"value\">Português </span><b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Português</a></li>
                                    <li><a href=\"#\">Inglês</a></li>
                                    <li><a href=\"#\">Espanhol</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class=\"site-branding-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"logo\">
                        <h1><a href=\"#\"><img src=\"src/site/views/img/logo.png\"></a></h1>
                    </div>
                </div>
                
                <div class=\"col-sm-6\">
                    <div class=\"shopping-item\">
                        <a href=\"src/site/views/carrinho.html\">Carrinho - <span class=\"cart-amunt\">R\$100</span> <i class=\"fa fa-shopping-cart\"></i> <span class=\"product-count\">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class=\"mainmenu-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div> 
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Produtos</a></li>
                        <li><a href=\"#\">Carrinho</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->




    {% block body %}{% endblock %}





    <div class=\"footer-top-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-about-us\">
                        <h2>Hcode Store</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class=\"footer-social\">
                            <a href=\"https://www.facebook.com/hcodebr\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"https://twitter.com/hcodebr\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"https://www.youtube.com/channel/UCjWENuSH2gX55-y7QSZiWxA\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-menu\">
                        <h2 class=\"footer-wid-title\">Navegação </h2>
                        <ul>
                            <li><a href=\"#\">Minha Conta</a></li>
                            <li><a href=\"#\">Meus Pedidos</a></li>
                            <li><a href=\"#\">Lista de Desejos</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-menu\">
                        <h2 class=\"footer-wid-title\">Categorias</h2>
                        <ul>
                            <li><a href=\"#\">Categoria Um</a></li>
                            <li><a href=\"#\">Categoria Dois</a></li>
                            <li><a href=\"#\">Categoria Três</a></li>
                            <li><a href=\"#\">Categoria Quarto</a></li>
                            <li><a href=\"#\">Categoria Cinco</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-newsletter\">
                        <h2 class=\"footer-wid-title\">Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus!</p>
                        <div class=\"newsletter-form\">
                            <form action=\"#\">
                                <input type=\"email\" placeholder=\"Type your email\">
                                <input type=\"submit\" value=\"Subscribe\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class=\"footer-bottom-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"copyright\">
                        <p>&copy; 2017 Hcode Treinamentos. <a href=\"http://www.hcode.com.br\" target=\"_blank\">hcode.com.br</a></p>
                    </div>
                </div>
                
                <div class=\"col-md-4\">
                    <div class=\"footer-card-icon\">
                        <i class=\"fa fa-cc-discover\"></i>
                        <i class=\"fa fa-cc-mastercard\"></i>
                        <i class=\"fa fa-cc-paypal\"></i>
                        <i class=\"fa fa-cc-visa\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src=\"https://code.jquery.com/jquery.min.js\"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    
    <!-- jQuery sticky menu -->
    <script src=\"src/site/views/js/owl.carousel.min.js\"></script>
    <script src=\"src/site/views/js/jquery.sticky.js\"></script>
    
    <!-- jQuery easing -->
    <script src=\"src/site/views/js/jquery.easing.1.3.min.js\"></script>
    
    <!-- Main Script -->
    <script src=\"src/site/views/js/main.js\"></script>
    
    <!-- Slider -->
    <script type=\"text/javascript\" src=\"src/site/views/js/bxslider.min.js\"></script>
\t  <script type=\"text/javascript\" src=\"src/site/views/js/script.slider.js\"></script>

    {% block script %}{% endblock %}
  </body>
</html>", "base.html", "/var/www/public/src/site/views/base.html");
    }
}
