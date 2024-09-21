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

/* home.html.twig */
class __TwigTemplate_154599ce0e07d0622ea4efe1d172466c extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html", "home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <title>Viveiro Gonçalves</title>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <div class=\"slider-area\">
        \t<!-- Slider -->
\t\t\t<div class=\"block-slider block-slider4\">
\t\t\t\t<ul class=\"\" id=\"bxslider-home4\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"img/h4-slide.jpg\" alt=\"Slide\">
\t\t\t\t\t\t<div class=\"caption-group\">
\t\t\t\t\t\t\t<h2 class=\"caption title\">
\t\t\t\t\t\t\t\tiPhone <span class=\"primary\">6 <strong>Plus</strong></span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h4 class=\"caption subtitle\">Dual SIM</h4>
\t\t\t\t\t\t\t<a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li><img src=\"img/h4-slide2.jpg\" alt=\"Slide\">
\t\t\t\t\t\t<div class=\"caption-group\">
\t\t\t\t\t\t\t<h2 class=\"caption title\">
\t\t\t\t\t\t\t\tby one, get one <span class=\"primary\">50% <strong>off</strong></span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h4 class=\"caption subtitle\">school supplies & backpacks.*</h4>
\t\t\t\t\t\t\t<a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li><img src=\"img/h4-slide3.jpg\" alt=\"Slide\">
\t\t\t\t\t\t<div class=\"caption-group\">
\t\t\t\t\t\t\t<h2 class=\"caption title\">
\t\t\t\t\t\t\t\tApple <span class=\"primary\">Store <strong>Ipod</strong></span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h4 class=\"caption subtitle\">Select Item</h4>
\t\t\t\t\t\t\t<a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li><img src=\"img/h4-slide4.png\" alt=\"Slide\">
\t\t\t\t\t\t<div class=\"caption-group\">
\t\t\t\t\t\t  <h2 class=\"caption title\">
\t\t\t\t\t\t\t\tPalmeira <span class=\"primary\">Azul</span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h4 class=\"caption subtitle\">& Palmeira</h4>
\t\t\t\t\t\t\t<a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class=\"promo-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo1\">
                        <i class=\"fa fa-refresh\"></i>
                        <p>1 ano de garantia</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo2\">
                        <i class=\"fa fa-truck\"></i>
                        <p>Frete grátis</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo3\">
                        <i class=\"fa fa-lock\"></i>
                        <p>Pagamento seguro</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo4\">
                        <i class=\"fa fa-gift\"></i>
                        <p>Novos produtos</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class=\"maincontent-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"latest-product\">
                        <h2 class=\"section-title\">Produtos</h2>
                        <div class=\"product-carousel\">
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-1.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"#\">Samsung Galaxy s5- 2015</a></h2>
                                
                                <div class=\"product-carousel-price\">
                                    <ins>\$700.00</ins> <del>\$100.00</del>
                                </div> 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-2.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>Nokia Lumia 1320</h2>
                                <div class=\"product-carousel-price\">
                                    <ins>\$899.00</ins> <del>\$999.00</del>
                                </div> 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-3.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>LG Leon 2015</h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$400.00</ins> <del>\$425.00</del>
                                </div>                                 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-4.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"#\">Sony microsoft</a></h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$200.00</ins> <del>\$225.00</del>
                                </div>                            
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-5.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>iPhone 6</h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$1200.00</ins> <del>\$1355.00</del>
                                </div>                                 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-6.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"#\">Samsung gallaxy note 4</a></h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$400.00</ins>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class=\"brands-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"brand-wrapper\">
                        <div class=\"brand-list\">
                            <img src=\"img/brand1.png\" alt=\"\">
                            <img src=\"img/brand2.png\" alt=\"\">
                            <img src=\"img/brand3.png\" alt=\"\">
                            <img src=\"img/brand4.png\" alt=\"\">
                            <img src=\"img/brand5.png\" alt=\"\">
                            <img src=\"img/brand6.png\" alt=\"\">
                            <img src=\"img/brand1.png\" alt=\"\">
                            <img src=\"img/brand2.png\" alt=\"\">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  72 => 8,  65 => 7,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html\" %}

{% block title %}
    <title>Viveiro Gonçalves</title>
{% endblock %}

{% block body %}
    <div class=\"slider-area\">
        \t<!-- Slider -->
\t\t\t<div class=\"block-slider block-slider4\">
\t\t\t\t<ul class=\"\" id=\"bxslider-home4\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"img/h4-slide.jpg\" alt=\"Slide\">
\t\t\t\t\t\t<div class=\"caption-group\">
\t\t\t\t\t\t\t<h2 class=\"caption title\">
\t\t\t\t\t\t\t\tiPhone <span class=\"primary\">6 <strong>Plus</strong></span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h4 class=\"caption subtitle\">Dual SIM</h4>
\t\t\t\t\t\t\t<a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li><img src=\"img/h4-slide2.jpg\" alt=\"Slide\">
\t\t\t\t\t\t<div class=\"caption-group\">
\t\t\t\t\t\t\t<h2 class=\"caption title\">
\t\t\t\t\t\t\t\tby one, get one <span class=\"primary\">50% <strong>off</strong></span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h4 class=\"caption subtitle\">school supplies & backpacks.*</h4>
\t\t\t\t\t\t\t<a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li><img src=\"img/h4-slide3.jpg\" alt=\"Slide\">
\t\t\t\t\t\t<div class=\"caption-group\">
\t\t\t\t\t\t\t<h2 class=\"caption title\">
\t\t\t\t\t\t\t\tApple <span class=\"primary\">Store <strong>Ipod</strong></span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h4 class=\"caption subtitle\">Select Item</h4>
\t\t\t\t\t\t\t<a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li><img src=\"img/h4-slide4.png\" alt=\"Slide\">
\t\t\t\t\t\t<div class=\"caption-group\">
\t\t\t\t\t\t  <h2 class=\"caption title\">
\t\t\t\t\t\t\t\tPalmeira <span class=\"primary\">Azul</span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h4 class=\"caption subtitle\">& Palmeira</h4>
\t\t\t\t\t\t\t<a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class=\"promo-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo1\">
                        <i class=\"fa fa-refresh\"></i>
                        <p>1 ano de garantia</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo2\">
                        <i class=\"fa fa-truck\"></i>
                        <p>Frete grátis</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo3\">
                        <i class=\"fa fa-lock\"></i>
                        <p>Pagamento seguro</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo4\">
                        <i class=\"fa fa-gift\"></i>
                        <p>Novos produtos</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class=\"maincontent-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"latest-product\">
                        <h2 class=\"section-title\">Produtos</h2>
                        <div class=\"product-carousel\">
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-1.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"#\">Samsung Galaxy s5- 2015</a></h2>
                                
                                <div class=\"product-carousel-price\">
                                    <ins>\$700.00</ins> <del>\$100.00</del>
                                </div> 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-2.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>Nokia Lumia 1320</h2>
                                <div class=\"product-carousel-price\">
                                    <ins>\$899.00</ins> <del>\$999.00</del>
                                </div> 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-3.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>LG Leon 2015</h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$400.00</ins> <del>\$425.00</del>
                                </div>                                 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-4.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"#\">Sony microsoft</a></h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$200.00</ins> <del>\$225.00</del>
                                </div>                            
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-5.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>iPhone 6</h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$1200.00</ins> <del>\$1355.00</del>
                                </div>                                 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"img/product-6.jpg\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"#\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"#\">Samsung gallaxy note 4</a></h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$400.00</ins>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class=\"brands-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"brand-wrapper\">
                        <div class=\"brand-list\">
                            <img src=\"img/brand1.png\" alt=\"\">
                            <img src=\"img/brand2.png\" alt=\"\">
                            <img src=\"img/brand3.png\" alt=\"\">
                            <img src=\"img/brand4.png\" alt=\"\">
                            <img src=\"img/brand5.png\" alt=\"\">
                            <img src=\"img/brand6.png\" alt=\"\">
                            <img src=\"img/brand1.png\" alt=\"\">
                            <img src=\"img/brand2.png\" alt=\"\">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
{% endblock %}", "home.html.twig", "/var/www/src/site/views/home.html.twig");
    }
}
