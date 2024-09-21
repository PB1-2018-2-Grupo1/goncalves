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

/* users-update.html.twig */
class __TwigTemplate_7f9527ab16c121754f2161893bdcde26 extends Template
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
        $this->parent = $this->loadTemplate("base.html", "users-update.html.twig", 1);
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
    <section class=\"content-header\">
    <h1>
        Lista de Usuários
    </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Editar Usuário</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role=\"form\" action=\"/admin/users/";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "\" method=\"post\">
            <div class=\"box-body\">
                <div class=\"form-group\">
                <label for=\"name\">Nome</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
                </div>
                <div class=\"form-group\">
                <label for=\"surname\">Sobrenome</label>
                <input type=\"text\" class=\"form-control\" id=\"surname\" name=\"surname\" placeholder=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 37), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 37), "html", null, true);
        yield "\">
                </div>
                <div class=\"form-group\">
                <label for=\"login\">Login</label>
                <input type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" placeholder=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "login", [], "any", false, false, false, 41), "html", null, true);
        yield "\"  value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "login", [], "any", false, false, false, 41), "html", null, true);
        yield "\">
                </div>
                <div class=\"form-group\">
                <label for=\"password\">Senha</label>
                <input type=\"text\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "password", [], "any", false, false, false, 45), "html", null, true);
        yield "\"  value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "password", [], "any", false, false, false, 45), "html", null, true);
        yield "\">
                </div>
                <div class=\"form-group\">
                <label for=\"phone\">Telefone</label>
                <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 49), "html", null, true);
        yield "\"  value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 49), "html", null, true);
        yield "\">
                </div>
                <div class=\"form-group\">
                <label for=\"email\">E-mail</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 53), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 53), "html", null, true);
        yield "\">
                </div>
                <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"admin\" value=\"1\" ";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "admin", [], "any", false, false, false, 57) == true)) {
            yield "checked";
        }
        yield "> Acesso de Administrador
                </label>
                </div>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Salvar</button>
            </div>
            </form>
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
        return "users-update.html.twig";
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
        return array (  156 => 57,  147 => 53,  138 => 49,  129 => 45,  120 => 41,  111 => 37,  102 => 33,  95 => 29,  72 => 8,  65 => 7,  59 => 4,  52 => 3,  41 => 1,);
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
    <section class=\"content-header\">
    <h1>
        Lista de Usuários
    </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Editar Usuário</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role=\"form\" action=\"/admin/users/{{ user.id }}\" method=\"post\">
            <div class=\"box-body\">
                <div class=\"form-group\">
                <label for=\"name\">Nome</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"{{ user.name }}\" value=\"{{ user.name }}\">
                </div>
                <div class=\"form-group\">
                <label for=\"surname\">Sobrenome</label>
                <input type=\"text\" class=\"form-control\" id=\"surname\" name=\"surname\" placeholder=\"{{ user.surname }}\" value=\"{{ user.surname }}\">
                </div>
                <div class=\"form-group\">
                <label for=\"login\">Login</label>
                <input type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" placeholder=\"{{ user.login }}\"  value=\"{{ user.login }}\">
                </div>
                <div class=\"form-group\">
                <label for=\"password\">Senha</label>
                <input type=\"text\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"{{ user.password }}\"  value=\"{{ user.password }}\">
                </div>
                <div class=\"form-group\">
                <label for=\"phone\">Telefone</label>
                <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"{{ user.phone }}\"  value=\"{{ user.phone }}\">
                </div>
                <div class=\"form-group\">
                <label for=\"email\">E-mail</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"{{ user.email }}\" value=\"{{ user.email }}\">
                </div>
                <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"admin\" value=\"1\" {% if user.admin == true %}checked{% endif %}> Acesso de Administrador
                </label>
                </div>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Salvar</button>
            </div>
            </form>
        </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


   
{% endblock %}", "users-update.html.twig", "/var/www/public/src/admin/views/users-update.html.twig");
    }
}
