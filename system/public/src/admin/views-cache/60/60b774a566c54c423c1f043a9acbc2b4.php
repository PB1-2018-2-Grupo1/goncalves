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
class __TwigTemplate_e56a621071875956474a8e5c0f902318 extends Template
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
            'style' => [$this, 'block_style'],
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
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  ";
        // line 10
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 11
        yield "
  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https:/fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"../../src/admin/adminlte/plugins/fontawesome-free/css/all.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"../../src/admin/adminlte/dist/css/adminlte.min.css\">
  ";
        // line 18
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 19
        yield "</head>
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"../../src/admin/adminlte/index3.html\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Navbar Search -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
          <i class=\"fas fa-search\"></i>
        </a>
        <div class=\"navbar-search-block\">
          <form class=\"form-inline\">
            <div class=\"input-group input-group-sm\">
              <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-navbar\" type=\"submit\">
                  <i class=\"fas fa-search\"></i>
                </button>
                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                  <i class=\"fas fa-times\"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-comments\"></i>
          <span class=\"badge badge-danger navbar-badge\">3</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"../../src/admin/adminlte/dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Brad Diesel
                  <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">Call me whenever you can...</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"../../src/admin/adminlte/dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  John Pierce
                  <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">I got your message bro</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"../../src/admin/adminlte/dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Nora Silvester
                  <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">The subject goes here</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-bell\"></i>
          <span class=\"badge badge-warning navbar-badge\">15</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <span class=\"dropdown-header\">15 Notifications</span>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
            <span class=\"float-right text-muted text-sm\">3 mins</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-users mr-2\"></i> 8 friend requests
            <span class=\"float-right text-muted text-sm\">12 hours</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-file mr-2\"></i> 3 new reports
            <span class=\"float-right text-muted text-sm\">2 days</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
          <i class=\"fas fa-expand-arrows-alt\"></i>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
          <i class=\"fas fa-th-large\"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"../../src/admin/adminlte/index3.html\" class=\"brand-link\">
      <img src=\"../../src/admin/adminlte/dist/img/AdminLTELogo.png\" alt=\"../../src/admin/LTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"../../src/admin/adminlte/dist/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class=\"form-inline\">
        <div class=\"input-group\" data-widget=\"sidebar-search\">
          <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-sidebar\">
              <i class=\"fas fa-search fa-fw\"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item menu-open\">
            <a href=\"#\" class=\"nav-link active\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              <p>
                Starter Pages
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link active\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a href=\"/admin/users\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-users\"></i>
              <p>
                Usuátios
                <span class=\"right badge badge-danger\">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  ";
        // line 237
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 238
        yield "
  <!-- Main Footer -->
  <footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"float-right d-none d-sm-inline\">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href=\"https:/adminlte.io\">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src=\"../../src/admin/adminlte/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../src/admin/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../src/admin/adminlte/dist/js/adminlte.min.js\"></script>
";
        // line 259
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 260
        yield "</body>
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

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 237
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 259
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
        return array (  353 => 259,  343 => 237,  333 => 18,  323 => 10,  317 => 260,  315 => 259,  292 => 238,  290 => 237,  70 => 19,  68 => 18,  59 => 11,  57 => 10,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  {% block title %}{% endblock %}

  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https:/fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"../../src/admin/adminlte/plugins/fontawesome-free/css/all.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"../../src/admin/adminlte/dist/css/adminlte.min.css\">
  {% block style %}{% endblock %}
</head>
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"../../src/admin/adminlte/index3.html\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Navbar Search -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
          <i class=\"fas fa-search\"></i>
        </a>
        <div class=\"navbar-search-block\">
          <form class=\"form-inline\">
            <div class=\"input-group input-group-sm\">
              <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-navbar\" type=\"submit\">
                  <i class=\"fas fa-search\"></i>
                </button>
                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                  <i class=\"fas fa-times\"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-comments\"></i>
          <span class=\"badge badge-danger navbar-badge\">3</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"../../src/admin/adminlte/dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Brad Diesel
                  <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">Call me whenever you can...</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"../../src/admin/adminlte/dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  John Pierce
                  <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">I got your message bro</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"../../src/admin/adminlte/dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Nora Silvester
                  <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">The subject goes here</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-bell\"></i>
          <span class=\"badge badge-warning navbar-badge\">15</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <span class=\"dropdown-header\">15 Notifications</span>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
            <span class=\"float-right text-muted text-sm\">3 mins</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-users mr-2\"></i> 8 friend requests
            <span class=\"float-right text-muted text-sm\">12 hours</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-file mr-2\"></i> 3 new reports
            <span class=\"float-right text-muted text-sm\">2 days</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
          <i class=\"fas fa-expand-arrows-alt\"></i>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
          <i class=\"fas fa-th-large\"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"../../src/admin/adminlte/index3.html\" class=\"brand-link\">
      <img src=\"../../src/admin/adminlte/dist/img/AdminLTELogo.png\" alt=\"../../src/admin/LTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"../../src/admin/adminlte/dist/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class=\"form-inline\">
        <div class=\"input-group\" data-widget=\"sidebar-search\">
          <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-sidebar\">
              <i class=\"fas fa-search fa-fw\"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item menu-open\">
            <a href=\"#\" class=\"nav-link active\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              <p>
                Starter Pages
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link active\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a href=\"/admin/users\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-users\"></i>
              <p>
                Usuátios
                <span class=\"right badge badge-danger\">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  {% block body %}{% endblock %}

  <!-- Main Footer -->
  <footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"float-right d-none d-sm-inline\">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href=\"https:/adminlte.io\">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src=\"../../src/admin/adminlte/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../src/admin/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../src/admin/adminlte/dist/js/adminlte.min.js\"></script>
{% block script %}{% endblock %}
</body>
</html>", "base.html", "/var/www/public/src/admin/views/base.html");
    }
}
