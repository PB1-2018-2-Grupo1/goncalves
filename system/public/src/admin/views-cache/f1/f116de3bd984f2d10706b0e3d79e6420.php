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

/* users.html.twig */
class __TwigTemplate_7074e4cee7f42aaf2b6a0dd4e7a697e2 extends Template
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
        $this->parent = $this->loadTemplate("base.html", "users.html.twig", 1);
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
        yield "    <title>Admin Users</title>
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
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
        <li class=\"active\"><a href=\"/admin/users\">Usuários</a></li>
    </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                
                <div class=\"box-header\">
                <a href=\"/admin/users/create\" class=\"btn btn-success\">Cadastrar Usuário</a>
                </div>

                <div class=\"box-body no-padding\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th style=\"width: 10px\">#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Login</th>
                        <th style=\"width: 60px\">Admin</th>
                        <th style=\"width: 140px\">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody> 
                    <tr>
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 49
            yield "                        <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "</th>
                        <th>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 50), "html", null, true);
            yield "</th>
                        <th>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 51), "html", null, true);
            yield "</th>
                        <th>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 52), "html", null, true);
            yield "</th>
                        <th>";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "admin", [], "any", false, false, false, 53) == 1)) {
                yield "Sim";
            } else {
                yield "Não";
            }
            yield "</th>
                        <th class=\"d-grid gap-2 d-md-block\">
                            <a href=\"/admin/users/";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-edit\"></i> Editar</a>
                            <a href=\"/admin/users/";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 56), "html", null, true);
            yield "/delete\" onclick=\"return confirm('Deseja realmente excluir este registro?')\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\"></i> Excluir</a>
                        </th>                        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                    </tr>
                    </tbody>
                </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
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
        return "users.html.twig";
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
        return array (  156 => 59,  147 => 56,  143 => 55,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  117 => 49,  113 => 48,  72 => 9,  65 => 8,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html\" %}

{% block title %}
    <title>Admin Users</title>
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
        <li class=\"active\"><a href=\"/admin/users\">Usuários</a></li>
    </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                
                <div class=\"box-header\">
                <a href=\"/admin/users/create\" class=\"btn btn-success\">Cadastrar Usuário</a>
                </div>

                <div class=\"box-body no-padding\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th style=\"width: 10px\">#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Login</th>
                        <th style=\"width: 60px\">Admin</th>
                        <th style=\"width: 140px\">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody> 
                    <tr>
                    {% for user in users %}
                        <th>{{ user.id }}</th>
                        <th>{{ user.name }}</th>
                        <th>{{ user.email }}</th>
                        <th>{{ user.login }}</th>
                        <th>{% if user.admin == 1 %}Sim{% else %}Não{% endif %}</th>
                        <th class=\"d-grid gap-2 d-md-block\">
                            <a href=\"/admin/users/{{ user.id }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-edit\"></i> Editar</a>
                            <a href=\"/admin/users/{{ user.id }}/delete\" onclick=\"return confirm('Deseja realmente excluir este registro?')\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\"></i> Excluir</a>
                        </th>                        
                    {% endfor %}
                    </tr>
                    </tbody>
                </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

{% endblock %}", "users.html.twig", "/var/www/src/admin/views/users.html.twig");
    }
}
