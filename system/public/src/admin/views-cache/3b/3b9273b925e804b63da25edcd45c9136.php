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
class __TwigTemplate_edc920500801367f8a038d8c3a648f00 extends Template
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
        yield "    <title>Admin</title>
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
        yield "
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1 class=\"m-0\">Starter Page</h1>
          </div><!-- /.col -->
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"card\">
              <div class=\"card-body\">
                <h5 class=\"card-title\">Card title</h5>

                <p class=\"card-text\">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href=\"#\" class=\"card-link\">Card link</a>
                <a href=\"#\" class=\"card-link\">Another link</a>
              </div>
            </div>

            <div class=\"card card-primary card-outline\">
              <div class=\"card-body\">
                <h5 class=\"card-title\">Card title</h5>

                <p class=\"card-text\">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href=\"#\" class=\"card-link\">Card link</a>
                <a href=\"#\" class=\"card-link\">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class=\"col-lg-6\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h5 class=\"m-0\">Featured</h5>
              </div>
              <div class=\"card-body\">
                <h6 class=\"card-title\">Special title treatment</h6>

                <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
              </div>
            </div>

            <div class=\"card card-primary card-outline\">
              <div class=\"card-header\">
                <h5 class=\"m-0\">Featured</h5>
              </div>
              <div class=\"card-body\">
                <h6 class=\"card-title\">Special title treatment</h6>

                <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
    <div class=\"p-3\">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

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
    <title>Admin</title>
{% endblock %}

{% block body %}

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1 class=\"m-0\">Starter Page</h1>
          </div><!-- /.col -->
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"card\">
              <div class=\"card-body\">
                <h5 class=\"card-title\">Card title</h5>

                <p class=\"card-text\">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href=\"#\" class=\"card-link\">Card link</a>
                <a href=\"#\" class=\"card-link\">Another link</a>
              </div>
            </div>

            <div class=\"card card-primary card-outline\">
              <div class=\"card-body\">
                <h5 class=\"card-title\">Card title</h5>

                <p class=\"card-text\">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href=\"#\" class=\"card-link\">Card link</a>
                <a href=\"#\" class=\"card-link\">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class=\"col-lg-6\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h5 class=\"m-0\">Featured</h5>
              </div>
              <div class=\"card-body\">
                <h6 class=\"card-title\">Special title treatment</h6>

                <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
              </div>
            </div>

            <div class=\"card card-primary card-outline\">
              <div class=\"card-header\">
                <h5 class=\"m-0\">Featured</h5>
              </div>
              <div class=\"card-body\">
                <h6 class=\"card-title\">Special title treatment</h6>

                <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
    <div class=\"p-3\">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

{% endblock %}", "home.html.twig", "/var/www/public/src/admin/views/home.html.twig");
    }
}
