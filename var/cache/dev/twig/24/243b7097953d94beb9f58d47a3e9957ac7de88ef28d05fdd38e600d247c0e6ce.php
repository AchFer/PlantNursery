<?php

/* front.html.twig */
class __TwigTemplate_e0807c4d937d45a6550120e874024d2eb1f1511f6d2b7108035298d6e8f6a4d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 143
        echo "

";
        // line 145
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('footer', $context, $blocks);
        // line 215
        $this->displayBlock('javascripts', $context, $blocks);
        // line 216
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "evergreen";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <!-- include the site Google Fonts stylesheet -->
        <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&amp;display=swap\" rel=\"stylesheet\">
        <!-- include the site bootstrap stylesheet -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
        <!-- include the site fontawesome stylesheet -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fontawesome.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" >
        <!-- include the site stylesheet -->
        <link href=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" >
        <!-- include theme plugins setting stylesheet -->
        <link  href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
        <!-- include theme color setting stylesheet -->
        <link  href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/color.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- include theme responsive setting stylesheet -->
        <link  href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "
    <header id=\"header\" class=\"position-relative\">
        <!-- headerHolderCol -->
        <div class=\"headerHolderCol pt-lg-4 pb-lg-5 py-3\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-sm-4\">
                        <a href=\"javascript:void(0);\" class=\"tel d-flex align-items-end\"><i class=\"icon-call mr-2\"></i>  Hotline: (602) 462 8889</a>
                    </div>
                    <div class=\"col-12 col-sm-4 text-center\">
                        <span class=\"txt d-block\">Welcome To EverGreen</span>
                    </div>
                    <div class=\"col-12 col-sm-4\">
                        <!-- langListII -->
                        <ul class=\"nav nav-tabs langListII justify-content-end border-bottom-0\">
                            <li class=\"dropdown\">
                                <span>Currency: </span>
                                <a class=\"d-inline dropdown-toggle text-uppercase\" data-toggle=\"dropdown\" href=\"javascript:void(0);\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">USD</a>
                                <div class=\"dropdown-menu text-uppercase pl-4 pr-4 border-0\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">USD</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">VND</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">euro</a>
                                </div>
                            </li>
                            <li class=\"dropdown m-0\">
                                <span>Languages: </span>
                                <a class=\"d-inline dropdown-toggle text-uppercase\" data-toggle=\"dropdown\" href=\"javascript:void(0);\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">EN</a>
                                <div class=\"dropdown-menu pl-4 pr-4\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">English</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Vietnamese</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">French</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- headerHolder -->
        <div class=\"headerHolder container pt-lg-5 pb-lg-7 py-4\">
            <div class=\"row\">
                <div class=\"col-6 col-sm-2\">
                    <!-- mainLogo -->
                    <div class=\"logo\">
                        <a href=\"home.html\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Botanical\" class=\"img-fluid\"></a>
                    </div>
                </div>
                <div class=\"col-6 col-sm-7 col-lg-8 static-block\">
                    <!-- mainHolder -->
                    <div class=\"mainHolder pt-lg-5 pt-3 justify-content-center\">
                        <!-- pageNav2 -->
                        <nav class=\"navbar navbar-expand-lg navbar-light p-0 pageNav2 position-static\">
                            <button type=\"button\" class=\"navbar-toggle collapsed position-relative\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                                <ul class=\"navbar-nav mx-auto text-uppercase d-inline-block\">
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"dropdown-toggle d-block\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">home</a>
                                        <ul class=\"list-unstyled text-capitalize dropdown-menu mt-0 py-0\">
                                            <li class=\"d-block mx-0\"><a href=\"home.html\">Home 1</a></li>
                                            <li class=\"d-block mx-0\"><a href=\"home2.html\">Home 2</a></li>
                                            <li class=\"d-block mx-0\"><a href=\"home3.html\">Home 3</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"dropdown-toggle d-block\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Store</a>
                                        <ul class=\"list-unstyled text-capitalize dropdown-menu mt-0 py-0\">
                                            <li class=\"d-block mx-0\"><a href=\"shop.html\">Shop Left Sidebar</a></li>
                                            <li class=\"d-block mx-0\"><a href=\"shop-detail.html\">Single Product</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class=\"nav-item\">
                                        <a class=\"d-block\" href=\"javascript:void(0);\">About</a>
                                    </li> -->
                                    <li class=\"nav-item active dropdown\">
                                        <a class=\"dropdown-toggle d-block\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog</a>
                                        <ul class=\"list-unstyled text-capitalize dropdown-menu mt-0 py-0\">
                                            <li class=\"d-block mx-0\"><a href=\"blog.html\">Blog Left Sidebar</a></li>

                                            <li class=\"d-block mx-0\"><a href=\"blog-detail.html\">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"dropdown-toggle d-block\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                        <ul class=\"list-unstyled text-capitalize dropdown-menu mt-0 py-0\">
                                            <li class=\"d-block mx-0\"><a href=\"cart-page.html\">Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class=\"nav-item\">
                                        <a class=\"d-block\" href=\"javascript:void(0);\">contact</a>
                                    </li> -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class=\"col-sm-3 col-lg-2\">
                    <!-- wishListII -->
                    <ul class=\"nav nav-tabs wishListII pt-5 justify-content-end border-bottom-0\">
                        <li class=\"nav-item ml-0\"><a class=\"nav-link icon-search\" href=\"javascript:void(0);\"></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link position-relative icon-cart\" href=\"javascript:void(0);\"><span class=\"num rounded d-block\">2</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link icon-profile\" href=\"javascript:void(0);\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 146
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 151
        echo "    <!-- footerHolder -->
    <aside class=\"footerHolder overflow-hidden bg-lightGray pt-xl-23 pb-xl-8 pt-lg-10 pb-lg-8 pt-md-12 pb-md-8 pt-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-lg-4 mb-lg-0 mb-4\">
                    <h3 class=\"headingVI fwEbold text-uppercase mb-7\">Contact Us</h3>
                    <ul class=\"list-unstyled footerContactList mb-3\">
                        <li class=\"mb-3 d-flex flex-nowrap pr-xl-20 pr-0\"><span class=\"icon icon-place mr-3\"></span> <address class=\"fwEbold m-0\">Address: London Oxford Street, 012 United Kingdom.</address></li>
                        <li class=\"mb-3 d-flex flex-nowrap\"><span class=\"icon icon-phone mr-3\"></span> <span class=\"leftAlign\">Phone : <a href=\"javascript:void(0);\">(+032) 3456 7890</a></span></li>
                        <li class=\"email d-flex flex-nowrap\"><span class=\"icon icon-email mr-2\"></span> <span class=\"leftAlign\">Email:  <a href=\"javascript:void(0);\">Botanicalstore@gmail.com</a></span></li>
                    </ul>
                    <ul class=\"list-unstyled followSocailNetwork d-flex flex-nowrap\">
                        <li class=\"fwEbold mr-xl-11 mr-md-8 mr-3\">Follow  us:</li>
                        <li class=\"mr-xl-6 mr-md-5 mr-2\"><a href=\"javascript:void(0);\" class=\"fab fa-facebook-f\"></a></li>
                        <li class=\"mr-xl-6 mr-md-5 mr-2\"><a href=\"javascript:void(0);\" class=\"fab fa-twitter\"></a></li>
                        <li class=\"mr-xl-6 mr-md-5 mr-2\"><a href=\"javascript:void(0);\" class=\"fab fa-pinterest\"></a></li>
                        <li class=\"mr-2\"><a href=\"javascript:void(0);\" class=\"fab fa-google-plus-g\"></a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3 pl-xl-14 mb-lg-0 mb-4\">
                    <h3 class=\"headingVI fwEbold text-uppercase mb-6\">Information</h3>
                    <ul class=\"list-unstyled footerNavList\">
                        <li class=\"mb-1\"><a href=\"javascript:void(0);\">New Products</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Top Sellers</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Our Blog</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">About Our Shop</a></li>
                        <li><a href=\"javascript:void(0);\">Privacy policy</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3 pl-xl-12 mb-lg-0 mb-4\">
                    <h3 class=\"headingVI fwEbold text-uppercase mb-7\">My Account</h3>
                    <ul class=\"list-unstyled footerNavList\">
                        <li class=\"mb-1\"><a href=\"javascript:void(0);\">My account</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Discount</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Orders history</a></li>
                        <li><a href=\"javascript:void(0);\">Personal information</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-2 pl-xl-18 mb-lg-0 mb-4\">
                    <h3 class=\"headingVI fwEbold text-uppercase mb-5\">PRODUCTS</h3>
                    <ul class=\"list-unstyled footerNavList\">
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Delivery</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Legal notice</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Prices drop</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">New products</a></li>
                        <li><a href=\"javascript:void(0);\">Best sales</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    </main>
    <!-- footer -->
    <footer id=\"footer\" class=\"overflow-hidden bg-dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 copyRightHolder v-II text-center pt-md-3 pb-md-4 py-2\">
                    <p class=\"mb-0\">Coppyright 2019 by <a href=\"javascript:void(0);\">Botanical Store</a> - All right reserved</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 215,  314 => 151,  305 => 150,  293 => 146,  284 => 145,  203 => 72,  157 => 28,  148 => 27,  136 => 22,  131 => 20,  126 => 18,  121 => 16,  116 => 14,  111 => 12,  106 => 9,  97 => 8,  79 => 7,  67 => 216,  65 => 215,  63 => 150,  60 => 149,  58 => 145,  54 => 143,  52 => 27,  45 => 24,  43 => 8,  39 => 7,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}evergreen{% endblock %}</title>
    {% block stylesheets %}
        <!-- include the site Google Fonts stylesheet -->
        <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&amp;display=swap\" rel=\"stylesheet\">
        <!-- include the site bootstrap stylesheet -->
        <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" >
        <!-- include the site fontawesome stylesheet -->
        <link href=\"{{ asset('css/fontawesome.css') }} \" rel=\"stylesheet\" >
        <!-- include the site stylesheet -->
        <link href=\" {{ asset('style.css') }} \" rel=\"stylesheet\" >
        <!-- include theme plugins setting stylesheet -->
        <link  href=\"{{ asset('css/plugins.css') }}\" rel=\"stylesheet\" >
        <!-- include theme color setting stylesheet -->
        <link  href=\"{{ asset('css/color.css') }}\" rel=\"stylesheet\">
        <!-- include theme responsive setting stylesheet -->
        <link  href=\"{{ asset('css/responsive.css') }}\" rel=\"stylesheet\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block header %}

    <header id=\"header\" class=\"position-relative\">
        <!-- headerHolderCol -->
        <div class=\"headerHolderCol pt-lg-4 pb-lg-5 py-3\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-sm-4\">
                        <a href=\"javascript:void(0);\" class=\"tel d-flex align-items-end\"><i class=\"icon-call mr-2\"></i>  Hotline: (602) 462 8889</a>
                    </div>
                    <div class=\"col-12 col-sm-4 text-center\">
                        <span class=\"txt d-block\">Welcome To EverGreen</span>
                    </div>
                    <div class=\"col-12 col-sm-4\">
                        <!-- langListII -->
                        <ul class=\"nav nav-tabs langListII justify-content-end border-bottom-0\">
                            <li class=\"dropdown\">
                                <span>Currency: </span>
                                <a class=\"d-inline dropdown-toggle text-uppercase\" data-toggle=\"dropdown\" href=\"javascript:void(0);\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">USD</a>
                                <div class=\"dropdown-menu text-uppercase pl-4 pr-4 border-0\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">USD</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">VND</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">euro</a>
                                </div>
                            </li>
                            <li class=\"dropdown m-0\">
                                <span>Languages: </span>
                                <a class=\"d-inline dropdown-toggle text-uppercase\" data-toggle=\"dropdown\" href=\"javascript:void(0);\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">EN</a>
                                <div class=\"dropdown-menu pl-4 pr-4\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">English</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Vietnamese</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">French</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- headerHolder -->
        <div class=\"headerHolder container pt-lg-5 pb-lg-7 py-4\">
            <div class=\"row\">
                <div class=\"col-6 col-sm-2\">
                    <!-- mainLogo -->
                    <div class=\"logo\">
                        <a href=\"home.html\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"Botanical\" class=\"img-fluid\"></a>
                    </div>
                </div>
                <div class=\"col-6 col-sm-7 col-lg-8 static-block\">
                    <!-- mainHolder -->
                    <div class=\"mainHolder pt-lg-5 pt-3 justify-content-center\">
                        <!-- pageNav2 -->
                        <nav class=\"navbar navbar-expand-lg navbar-light p-0 pageNav2 position-static\">
                            <button type=\"button\" class=\"navbar-toggle collapsed position-relative\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                                <ul class=\"navbar-nav mx-auto text-uppercase d-inline-block\">
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"dropdown-toggle d-block\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">home</a>
                                        <ul class=\"list-unstyled text-capitalize dropdown-menu mt-0 py-0\">
                                            <li class=\"d-block mx-0\"><a href=\"home.html\">Home 1</a></li>
                                            <li class=\"d-block mx-0\"><a href=\"home2.html\">Home 2</a></li>
                                            <li class=\"d-block mx-0\"><a href=\"home3.html\">Home 3</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"dropdown-toggle d-block\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Store</a>
                                        <ul class=\"list-unstyled text-capitalize dropdown-menu mt-0 py-0\">
                                            <li class=\"d-block mx-0\"><a href=\"shop.html\">Shop Left Sidebar</a></li>
                                            <li class=\"d-block mx-0\"><a href=\"shop-detail.html\">Single Product</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class=\"nav-item\">
                                        <a class=\"d-block\" href=\"javascript:void(0);\">About</a>
                                    </li> -->
                                    <li class=\"nav-item active dropdown\">
                                        <a class=\"dropdown-toggle d-block\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog</a>
                                        <ul class=\"list-unstyled text-capitalize dropdown-menu mt-0 py-0\">
                                            <li class=\"d-block mx-0\"><a href=\"blog.html\">Blog Left Sidebar</a></li>

                                            <li class=\"d-block mx-0\"><a href=\"blog-detail.html\">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"dropdown-toggle d-block\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                        <ul class=\"list-unstyled text-capitalize dropdown-menu mt-0 py-0\">
                                            <li class=\"d-block mx-0\"><a href=\"cart-page.html\">Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class=\"nav-item\">
                                        <a class=\"d-block\" href=\"javascript:void(0);\">contact</a>
                                    </li> -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class=\"col-sm-3 col-lg-2\">
                    <!-- wishListII -->
                    <ul class=\"nav nav-tabs wishListII pt-5 justify-content-end border-bottom-0\">
                        <li class=\"nav-item ml-0\"><a class=\"nav-link icon-search\" href=\"javascript:void(0);\"></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link position-relative icon-cart\" href=\"javascript:void(0);\"><span class=\"num rounded d-block\">2</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link icon-profile\" href=\"javascript:void(0);\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>



{% endblock %}


{% block body %}


{% endblock %}

{% block footer %}
    <!-- footerHolder -->
    <aside class=\"footerHolder overflow-hidden bg-lightGray pt-xl-23 pb-xl-8 pt-lg-10 pb-lg-8 pt-md-12 pb-md-8 pt-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-lg-4 mb-lg-0 mb-4\">
                    <h3 class=\"headingVI fwEbold text-uppercase mb-7\">Contact Us</h3>
                    <ul class=\"list-unstyled footerContactList mb-3\">
                        <li class=\"mb-3 d-flex flex-nowrap pr-xl-20 pr-0\"><span class=\"icon icon-place mr-3\"></span> <address class=\"fwEbold m-0\">Address: London Oxford Street, 012 United Kingdom.</address></li>
                        <li class=\"mb-3 d-flex flex-nowrap\"><span class=\"icon icon-phone mr-3\"></span> <span class=\"leftAlign\">Phone : <a href=\"javascript:void(0);\">(+032) 3456 7890</a></span></li>
                        <li class=\"email d-flex flex-nowrap\"><span class=\"icon icon-email mr-2\"></span> <span class=\"leftAlign\">Email:  <a href=\"javascript:void(0);\">Botanicalstore@gmail.com</a></span></li>
                    </ul>
                    <ul class=\"list-unstyled followSocailNetwork d-flex flex-nowrap\">
                        <li class=\"fwEbold mr-xl-11 mr-md-8 mr-3\">Follow  us:</li>
                        <li class=\"mr-xl-6 mr-md-5 mr-2\"><a href=\"javascript:void(0);\" class=\"fab fa-facebook-f\"></a></li>
                        <li class=\"mr-xl-6 mr-md-5 mr-2\"><a href=\"javascript:void(0);\" class=\"fab fa-twitter\"></a></li>
                        <li class=\"mr-xl-6 mr-md-5 mr-2\"><a href=\"javascript:void(0);\" class=\"fab fa-pinterest\"></a></li>
                        <li class=\"mr-2\"><a href=\"javascript:void(0);\" class=\"fab fa-google-plus-g\"></a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3 pl-xl-14 mb-lg-0 mb-4\">
                    <h3 class=\"headingVI fwEbold text-uppercase mb-6\">Information</h3>
                    <ul class=\"list-unstyled footerNavList\">
                        <li class=\"mb-1\"><a href=\"javascript:void(0);\">New Products</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Top Sellers</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Our Blog</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">About Our Shop</a></li>
                        <li><a href=\"javascript:void(0);\">Privacy policy</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-3 pl-xl-12 mb-lg-0 mb-4\">
                    <h3 class=\"headingVI fwEbold text-uppercase mb-7\">My Account</h3>
                    <ul class=\"list-unstyled footerNavList\">
                        <li class=\"mb-1\"><a href=\"javascript:void(0);\">My account</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Discount</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Orders history</a></li>
                        <li><a href=\"javascript:void(0);\">Personal information</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-lg-2 pl-xl-18 mb-lg-0 mb-4\">
                    <h3 class=\"headingVI fwEbold text-uppercase mb-5\">PRODUCTS</h3>
                    <ul class=\"list-unstyled footerNavList\">
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Delivery</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Legal notice</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">Prices drop</a></li>
                        <li class=\"mb-2\"><a href=\"javascript:void(0);\">New products</a></li>
                        <li><a href=\"javascript:void(0);\">Best sales</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    </main>
    <!-- footer -->
    <footer id=\"footer\" class=\"overflow-hidden bg-dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 copyRightHolder v-II text-center pt-md-3 pb-md-4 py-2\">
                    <p class=\"mb-0\">Coppyright 2019 by <a href=\"javascript:void(0);\">Botanical Store</a> - All right reserved</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "front.html.twig", "C:\\wamp64\\www\\adfitness\\app\\Resources\\views\\front.html.twig");
    }
}
