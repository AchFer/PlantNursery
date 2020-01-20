<?php

/* back.html.twig */
class __TwigTemplate_8b410ce6bb6a17d00d6eb23755ac9ee7bb5548444660ef0a7060afce797c30a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->

    <link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo ">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo ">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo ">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo ">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo ">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/adminlte.min.css"), "html", null, true);
        echo ">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo ">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo ">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo ">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">
    ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 443
        $this->displayBlock('footer', $context, $blocks);
        // line 452
        echo "
</div>
<script src=";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "></script>
<!-- jQuery UI 1.11.4 -->
<script src=";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
<!-- ChartJS -->
<script src=";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "></script>
<!-- Sparkline -->
<script src=";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "></script>
<!-- JQVMap -->
<script src=";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "></script>
<!-- jQuery Knob Chart -->
<script src=";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "></script>
<!-- daterangepicker -->
<script src=";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/moment/moment.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "></script>
<!-- Summernote -->
<script src=";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "></script>
<!-- overlayScrollbars -->
<script src=";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "></script>
<!-- AdminLTE App -->
<script src=";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/adminlte.js"), "html", null, true);
        echo "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/pages/dashboard.js"), "html", null, true);
        echo "></script>
<!-- AdminLTE for demo purposes -->
<script src=";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/demo.js"), "html", null, true);
        echo "></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"index3.html\" class=\"nav-link\">Home</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class=\"form-inline ml-3\">
            <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-navbar\" type=\"submit\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
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
                            <img alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle src=";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user1-128x128.jpg"), "html", null, true);
        echo " \">
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
                            <img alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\" src=";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user8-128x128.jpg"), "html", null, true);
        echo " >
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
                            <img alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\" src=";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo " >
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
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
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
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"index3.html\" class=\"brand-link\">
            <img alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\" src=";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/AdminLTELogo.png"), "html", null, true);
        echo " >
            <span class=\"brand-text font-weight-light\">Administrateur</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img class=\"img-circle elevation-2\" alt=\"User Image\" src=";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo " >
                </div>
                <div class=\"info\">
                    <a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"d-block\">Mayssa </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item has-treeview menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Produits
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./index.html"), "html", null, true);
        echo " class=\"nav-link active\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Tous les produits</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./index2.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Catégories</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./index2.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Plantes</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./index3.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Matériels de jardinage</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-copy\"></i>
                            <p>
                                Evénements
                                <i class=\"fas fa-angle-left right\"></i>
                                ";
        // line 227
        echo "                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/layout/top-nav.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Tous les événements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/layout/boxed.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ajouter un événement</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/layout/fixed-sidebar.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Réservations</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>
                            <p>
                                Commandes
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/charts/chartjs.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>En attente</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/charts/flot.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Validées</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                Service client
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/charts/chartjs.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Réclamations</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/charts/flot.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Services après vente</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/charts/flot.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Statistiques</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Conseils
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/forms/general.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Conseils beauté</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/forms/advanced.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Conseils de jardinage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                Services
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/tables/simple.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des Jardiniers</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/tables/data.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Demande</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Mailbox
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/mailbox/mailbox.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/mailbox/compose.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/mailbox/read-mail.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/examples/login.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/examples/register.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/examples/forgot-password.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Forgot Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/examples/recover-password.html"), "html", null, true);
        echo " class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Recover Password</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">LABELS</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-danger\"></i>
                            <p class=\"text\">Important</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-warning\"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-info\"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class=\"content-wrapper\">
        ";
        // line 438
        $this->displayBlock('content', $context, $blocks);
        // line 440
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 438
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 439
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 443
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 444
        echo "    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.0.1
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  732 => 444,  723 => 443,  713 => 439,  704 => 438,  692 => 440,  690 => 438,  654 => 405,  645 => 399,  636 => 393,  627 => 387,  607 => 370,  598 => 364,  589 => 358,  569 => 341,  560 => 335,  540 => 318,  531 => 312,  511 => 295,  502 => 289,  493 => 283,  473 => 266,  464 => 260,  444 => 243,  435 => 237,  426 => 231,  420 => 227,  403 => 212,  394 => 206,  385 => 200,  376 => 194,  354 => 175,  348 => 172,  336 => 163,  276 => 106,  257 => 90,  238 => 74,  197 => 35,  188 => 34,  175 => 486,  170 => 484,  165 => 482,  160 => 480,  155 => 478,  150 => 476,  145 => 474,  141 => 473,  136 => 471,  131 => 469,  127 => 468,  122 => 466,  117 => 464,  112 => 462,  103 => 456,  98 => 454,  94 => 452,  92 => 443,  90 => 34,  81 => 28,  76 => 26,  71 => 24,  66 => 22,  61 => 20,  56 => 18,  51 => 16,  46 => 14,  41 => 12,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->

    <link rel=\"stylesheet\" href={{ asset('back/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href={{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}>
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href={{ asset('back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- iCheck -->
    <link rel=\"stylesheet\" href={{ asset('back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href={{ asset('back/plugins/jqvmap/jqvmap.min.css') }}>
    <!-- Theme style -->
    <link rel=\"stylesheet\" href={{ asset('back/dist/css/adminlte.min.css') }}>
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href={{ asset('back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href={{ asset('back/plugins/daterangepicker/daterangepicker.css') }}>
    <!-- summernote -->
    <link rel=\"stylesheet\" href={{ asset('back/plugins/summernote/summernote-bs4.css') }}>
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">
    {% block header  %}
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"index3.html\" class=\"nav-link\">Home</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class=\"form-inline ml-3\">
            <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-navbar\" type=\"submit\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
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
                            <img alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle src={{ asset('back/dist/img/user1-128x128.jpg')}} \">
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
                            <img alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\" src={{ asset('back/dist/img/user8-128x128.jpg')}} >
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
                            <img alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\" src={{ asset('dist/img/user3-128x128.jpg') }} >
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
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
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
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"index3.html\" class=\"brand-link\">
            <img alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\" src={{ asset('back/dist/img/AdminLTELogo.png')}} >
            <span class=\"brand-text font-weight-light\">Administrateur</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img class=\"img-circle elevation-2\" alt=\"User Image\" src={{ asset('back/dist/img/user2-160x160.jpg')}} >
                </div>
                <div class=\"info\">
                    <a href=\"{{ path('fos_user_security_login') }}\" class=\"d-block\">Mayssa </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item has-treeview menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Produits
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href={{ asset('./index.html') }} class=\"nav-link active\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Tous les produits</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('./index2.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Catégories</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('./index2.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Plantes</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('./index3.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Matériels de jardinage</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-copy\"></i>
                            <p>
                                Evénements
                                <i class=\"fas fa-angle-left right\"></i>
                                {#<span class=\"badge badge-info right\">6</span>#}
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/layout/top-nav.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Tous les événements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/layout/boxed.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ajouter un événement</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/layout/fixed-sidebar.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Réservations</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>
                            <p>
                                Commandes
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/charts/chartjs.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>En attente</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/charts/flot.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Validées</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                Service client
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/charts/chartjs.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Réclamations</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/charts/flot.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Services après vente</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/charts/flot.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Statistiques</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Conseils
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/forms/general.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Conseils beauté</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/forms/advanced.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Conseils de jardinage</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                Services
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/tables/simple.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des Jardiniers</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/tables/data.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Demande</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Mailbox
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/mailbox/mailbox.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/mailbox/compose.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/mailbox/read-mail.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/examples/login.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/examples/register.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/examples/forgot-password.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Forgot Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href={{ asset('pages/examples/recover-password.html') }} class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Recover Password</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">LABELS</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-danger\"></i>
                            <p class=\"text\">Important</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-warning\"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-info\"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class=\"content-wrapper\">
        {% block content %}
        {% endblock %}
    </div>
</div>
{% endblock %}
{% block footer  %}
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.0.1
        </div>
    </footer>
{% endblock %}

</div>
<script src={{ asset('back/plugins/jquery/jquery.min.js')}}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ asset('back/plugins/jquery-ui/jquery-ui.min.js')}}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{ asset('back/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- ChartJS -->
<script src={{ asset('back/plugins/chart.js/Chart.min.js')}}></script>
<!-- Sparkline -->
<script src={{ asset('back/plugins/sparklines/sparkline.js')}}></script>
<!-- JQVMap -->
<script src={{ asset('back/plugins/jqvmap/jquery.vmap.min.js')}}></script>
<script src={{ asset('back/plugins/jqvmap/maps/jquery.vmap.usa.js')}}></script>
<!-- jQuery Knob Chart -->
<script src={{ asset('plugins/jquery-knob/jquery.knob.min.js')}}></script>
<!-- daterangepicker -->
<script src={{ asset('back/plugins/moment/moment.min.js')}}></script>
<script src={{ asset('back/plugins/daterangepicker/daterangepicker.js')}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{ asset('back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}></script>
<!-- Summernote -->
<script src={{ asset('back/plugins/summernote/summernote-bs4.min.js')}}></script>
<!-- overlayScrollbars -->
<script src={{ asset('back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{ asset('back/dist/js/adminlte.js')}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{ asset('back/dist/js/pages/dashboard.js')}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset('back/dist/js/demo.js')}}></script>
</body>
</html>", "back.html.twig", "C:\\wamp64\\www\\nursery\\app\\Resources\\views\\back.html.twig");
    }
}
