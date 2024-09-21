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

/* users-create.html.twig */
class __TwigTemplate_4cf8ec8b356f92c9896b92620e1c3414 extends Template
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
        $this->parent = $this->loadTemplate("base.html", "users-create.html.twig", 1);
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
        yield "    <title>Create User</title>
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
<section class=\"content-header\">
  <h1>
    Lista de Usuários
  </h1>
  <ol class=\"breadcrumb\">
    <li><a href=\"/admin\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
    <li><a href=\"/admin/users\">Usuários</a></li>
    <li class=\"active\"><a href=\"/admin/users/create\">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class=\"content\">

  <div class=\"row\">
  \t<div class=\"col-md-12\">
  \t\t<div class=\"box box-success\">
        <div class=\"box-header with-border\">
          <h3 class=\"box-title\">Novo Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role=\"form\" action=\"/admin/users/create\" method=\"post\">
          <div class=\"box-body\">
            <div class=\"form-group\">
              <label for=\"desperson\">Nome</label>
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Digite o nome\">
            </div>
            <div class=\"form-group\">
              <label for=\"desperson\">Nome</label>
              <input type=\"text\" class=\"form-control\" id=\"surname\" name=\"surname\" placeholder=\"Digite o Sobrenome\">
            </div>
            <div class=\"form-group\">
              <label for=\"deslogin\">Login</label>
              <input type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" placeholder=\"Digite o login\">
            </div>
            <div class=\"form-group\">
              <label for=\"nrphone\">Telefone</label>
              <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"Digite o telefone\">
            </div>
            <div class=\"form-group\">
              <label for=\"desemail\">E-mail</label>
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Digite o e-mail\">
            </div>
            <div class=\"form-group\">
              <label for=\"despassword\">Senha</label>
              <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Digite a senha\">
            </div>
            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"admin\" value=\"1\"> Acesso de Administrador
              </label>
            </div>
          </div>
          <!-- /.box-body -->
          <div class=\"box-footer\">
            <button type=\"submit\" class=\"btn btn-success\">Cadastrar</button>
          </div>
        </form>
      </div>
  \t</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->   


   
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "users-create.html.twig";
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
    <title>Create User</title>
{% endblock %}
    
{% block body %}

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
<!-- Content Header (Page header) -->
<section class=\"content-header\">
  <h1>
    Lista de Usuários
  </h1>
  <ol class=\"breadcrumb\">
    <li><a href=\"/admin\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
    <li><a href=\"/admin/users\">Usuários</a></li>
    <li class=\"active\"><a href=\"/admin/users/create\">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class=\"content\">

  <div class=\"row\">
  \t<div class=\"col-md-12\">
  \t\t<div class=\"box box-success\">
        <div class=\"box-header with-border\">
          <h3 class=\"box-title\">Novo Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role=\"form\" action=\"/admin/users/create\" method=\"post\">
          <div class=\"box-body\">
            <div class=\"form-group\">
              <label for=\"desperson\">Nome</label>
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Digite o nome\">
            </div>
            <div class=\"form-group\">
              <label for=\"desperson\">Nome</label>
              <input type=\"text\" class=\"form-control\" id=\"surname\" name=\"surname\" placeholder=\"Digite o Sobrenome\">
            </div>
            <div class=\"form-group\">
              <label for=\"deslogin\">Login</label>
              <input type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" placeholder=\"Digite o login\">
            </div>
            <div class=\"form-group\">
              <label for=\"nrphone\">Telefone</label>
              <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"Digite o telefone\">
            </div>
            <div class=\"form-group\">
              <label for=\"desemail\">E-mail</label>
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Digite o e-mail\">
            </div>
            <div class=\"form-group\">
              <label for=\"despassword\">Senha</label>
              <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Digite a senha\">
            </div>
            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"admin\" value=\"1\"> Acesso de Administrador
              </label>
            </div>
          </div>
          <!-- /.box-body -->
          <div class=\"box-footer\">
            <button type=\"submit\" class=\"btn btn-success\">Cadastrar</button>
          </div>
        </form>
      </div>
  \t</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->   


   
{% endblock %}", "users-create.html.twig", "/var/www/public/src/admin/views/users-create.html.twig");
    }
}
