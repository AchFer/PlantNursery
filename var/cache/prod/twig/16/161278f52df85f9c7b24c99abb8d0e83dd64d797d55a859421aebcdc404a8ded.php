<?php

/* layout/layout.html.twig */
class __TwigTemplate_ba1fc3df48002ae86df11c0debfe2fb287ccec1886efdd51dbcbdcf38c5f170c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'conttainer' => array($this, 'block_conttainer'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "}</title>
    <!--meta tags -->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"keywords\" content=\"Gym-plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
    <script>
        addEventListener(\"load\", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    <!-- //font-awesome icons -->
    <!--lightbox slider-->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
    <!-- lightbox slider-->
    <!--Animation-effects-css-->
    <link href='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/aos.css"), "html", null, true);
        echo "' rel='stylesheet prefetch' type=\"text/css\" media=\"all\" />
    <!--//Animation-effects-css-->
    <!--stylesheets-->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' media=\"all\">
    <!--//stylesheets-->
    <link href=\"//fonts.googleapis.com/css?family=Oswald:400,500,600\" rel=\"stylesheet\">
    <link href=\"//fonts.googleapis.com/css?family=PT+Sans\" rel=\"stylesheet\">

    <!--/-------------------------------------------------------------------/ecomerce------------------------------------------------------------------------------------------------------------------>

    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerceecommerce/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerceecommerce/css/font-awesome.css"), "html", null, true);
        echo "\" />

</head>
<body>
<div class=\"header-outs\" id=\"header\">

    <div class=\"header-w3layouts\">
        ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 97
        echo "
    <!--banner -->
    <div class=\"container\">

        <div class=\"banner-slide-img\" data-aos=\"fade-up\">
            <!-- Slideshow 4 -->

            <div class=\"slider\">
                <div class=\"callbacks_container\">
                    <ul class=\"rslides\" id=\"slider4\">
                        <li>
                            <div class=\"slider-img\">
                                <div class=\"slider-info \">
                                    <h4>The Best Fitness</h4>
                                    <h5> Grow Your Strength</h5>
                                    <div class=\"mt-3 outs_more-buttn\">
                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModalLive\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"slider-img\">
                                <div class=\"slider-info \">
                                    <h4>Fitness And Stronger </h4>
                                    <h5>Real Athletes</h5>
                                    <div class=\"mt-3 outs_more-buttn\">
                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModalLive\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"slider-img\">
                                <div class=\"slider-info\">
                                    <h4>Fitness And Health</h4>
                                    <h5>With Double Power</h5>
                                    <div class=\"mt-3 outs_more-buttn\">
                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModalLive\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- This is here just to demonstrate the callbacks -->
            </div>
            <!-- //Slideshow 4 -->
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>

<!-- //banner -->
<!-- About-one -->
<section class=\"about \" id=\"about\">
    ";
        // line 153
        $this->displayBlock('body', $context, $blocks);
        // line 171
        echo "</section>

<!-- //About-one -->
<!--service-->
";
        // line 175
        $this->displayBlock('conttainer', $context, $blocks);
        // line 550
        echo "<!--//contact -->
<!-- footer -->

<footer class=\"py-lg-4 py-md-3 py-sm-3 py-3\">
    <div class=\"container py-lg-5 py-md-5 py-sm-4 py-3\">
        <div class=\"row \">
            <div class=\"dance-agile-info col-lg-4 col-md-3 col-sm-3\" >
                <h4 class=\"pb-md-4 pb-3\">Nav Links</h4>
                <nav class=\"border-line\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"index.html\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#about\" class=\"nav-link scroll\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#service\" class=\"nav-link scroll\">Services</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#gallery\" class=\"nav-link scroll\">Gallery</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#team\" class=\"nav-link scroll\">Team</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class=\"col-lg-4 col-md-5 col-sm-4 dance-agile-info\">
                <h4 class=\"pb-md-4 pb-3\">Our Posts</h4>
                <div class=\"footer-post d-flex mb-2\">
                    <div class=\"agileinfo_footer_grid1 mr-2\">
                        <a href=\"#about\" class=\" scroll\">
                            <img src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f1.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                    <div class=\"agileinfo_footer_grid1 mr-2\">
                        <a href=\"#about\" class=\"scroll\">
                            <img src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                    <div class=\"agileinfo_footer_grid1\">
                        <a href=\"#about\" class=\"scroll\">
                            <img src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
                <div class=\"footer-post d-flex mb-2\">
                    <div class=\"agileinfo_footer_grid1 mr-2\">
                        <a href=\"#about\" class=\"scroll\">
                            <img src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                    <div class=\"agileinfo_footer_grid1 mr-2\">
                        <a href=\"#about\" class=\" scroll\">
                            <img src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                    <div class=\"agileinfo_footer_grid1\">
                        <a href=\"#about\" class=\" scroll\">
                            <img src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f1.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
                <div class=\"footer-post d-flex\">
                    <div class=\"agileinfo_footer_grid1 mr-2\">
                        <a href=\"#about\" class=\"scroll\">
                            <img src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                    <div class=\"agileinfo_footer_grid1 mr-2\">
                        <a href=\"#about\" class=\" scroll\">
                            <img src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                    <div class=\"agileinfo_footer_grid1\">
                        <a href=\"#about\" class=\" scroll\">
                            <img src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f1.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"dance-agile-info col-lg-4 col-md-4 col-sm-5\">
                <h4 class=\"pb-md-4 pb-3\">Our Times</h4>
                <div class=\"wls-hours-list\">
                    <ul>
                        <li class=\"d-flex\">Monday-Friday<span class=\"time ml-auto\"> 9:30-18:30</span></li>
                        <li class=\"d-flex\">Saturday <span class=\"time ml-auto\">10:30-14:30</span></li>
                        <li class=\"d-flex\">Sunday   <span class=\"time ml-auto\">     closed</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 645
        $this->displayBlock('footer', $context, $blocks);
        // line 660
        echo "</footer>

<!-- //footer -->
<!--model-->
<div id=\"exampleModalLive\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLiveLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\" id=\"exampleModalLiveLabel\">Gym-Plus</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <img src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/b1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                    eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellu
                </p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div>





";
        // line 691
        $this->displayBlock('javascript', $context, $blocks);
        // line 784
        echo "

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Gym-plus a Sports Category Category Bootstrap Responsive web Template| Home :: w3layouts";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "        <div class=\"container-fluid\">
            <!--//navigation section -->
            <nav class=\"navbar navbar-expand-lg navbar-light\">
                <div class=\"hedder-up \" >
                    <h1><a class=\"navbar-brand\" href=\"index.html\" data-aos=\"fade-right\">Adfitness</a></h1>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\" data-aos=\"fade-left\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#about\" class=\"nav-link scroll\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#produit\"  class=\"nav-link scroll\">Inscription</a>
                        </li>
                        -
                        <li class=\"nav-item\">
                            <a href=\"#event\" class=\"nav-link scroll\">Evenement</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#service\" class=\"nav-link scroll\">Service</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#gallery\" class=\"nav-link scroll\">Gallery</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#client\" class=\"nav-link scroll\">Clients</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#contact\" class=\"nav-link scroll\">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <!--//navigation section -->

            <div class=\"clearfix\"> </div>
        </div>
    </div>
";
    }

    // line 153
    public function block_body($context, array $blocks = array())
    {
        // line 154
        echo "    <div class=\"container\">
        <div class=\"row effcet-about\">
            <div class=\"col-lg-7 jst-about py-lg-5 pt-md-5 pt-sm-4 pt-3\" data-aos=\"fade-right\">
                <h2 class=\"mb-lg-5 mb-lg-4 mb-3\">Fitness And Health</h2>
                <div class=\"agile-about-para\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
                <div class=\"mt-lg-3 mt-2 agile-about-para\">
                    <p>incididunt ut labore et Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
            </div>
            <div class=\"col-lg-5 about-States-list\" data-aos=\"fade-left\">
                <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/ab1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
            </div>
        </div>
    </div>
    ";
    }

    // line 175
    public function block_conttainer($context, array $blocks = array())
    {
        // line 176
        echo "<section class=\"service py-lg-4 py-md-3 py-sm-3 py-3\" id=\"service\">
    <div class=\"container py-lg-5 py-md-5 py-sm-4 py-3\">

        <h3 class=\"title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3\">Our Services</h3>
        <div class=\"row top-service pb-lg-4 pb-md-3 pb-2\">
            <div class=\"col-lg-8 col-md-8 service-agile-info-left\"  data-aos=\"fade-right\"
                 data-aos-offset=\"250\"
                 data-aos-easing=\"ease-in-sine\">
                <h4 class=\"mb-lg-4 mb-3\"> Body Builder Classes</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet</p>
                <div class=\"mt-3 outs_more-buttn\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModalLive\">Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 ser-icon text-center\">
                <div class=\"service-icon-w3layouts\">
                    <span class=\"far fa-thumbs-up\"></span>
                </div>
            </div>
        </div>
        <div class=\" my-lg-5 my-md-4 my-3 row mid-service\">
            <div class=\"col-lg-4 col-md-4 ser-icon text-center\">
                <div class=\"service-icon-w3layouts move-right\">
                    <span class=\"fab fa-apple\"></span>
                </div>
            </div>
            <div class=\"col-lg-8 col-md-8 service-agile-info-left\" data-aos=\"fade-left\"
                 data-aos-offset=\"200\"
                 data-aos-easing=\"ease-in-sine\">
                <h4 class=\"mb-lg-4 mb-3\">Weight Loss Classes</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet</p>
                <div class=\"mt-3 outs_more-buttn\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModalLive\">Read More</a>
                </div>
            </div>
        </div>
        <div class=\"row bottom-service pt-lg-4 pt-md-3 pt-2\" >
            <div class=\"col-lg-8 col-md-8 service-agile-info-left\" data-aos=\"fade-right\"
                 data-aos-offset=\"150\"
                 data-aos-easing=\"ease-in-sine\">
                <h4 class=\"mb-lg-4 mb-3\">Indoor Cycling Classes</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet,</p>
                <div class=\"mt-3 outs_more-buttn\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModalLive\">Read More</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 ser-icon text-center\">
                <div class=\"service-icon-w3layouts\">
                    <span class=\"fas fa-bicycle\"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//service-->
<!--clients-->
<section class=\"client py-lg-4 py-md-3 py-sm-3 py-3\" id=\"client\">
    <div class=\"container py-lg-5 py-md-5 py-sm-4 py-3\">
        <h3 class=\"title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3\">Our Clients</h3>
        <div class=\"flexslider\">
            <ul class=\"slides\">
                <li>
                    <div class=\"row client-slider-slide\">
                        <div class=\"col-lg-6 col-md-6 w3layouts-txt-says\">
                            <div class=\"clients-color-agile text-center\">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                </p>
                                <div class=\"clients-txt-agile\">
                                    <h4 class=\"mt-3\">Sam Will</h4>
                                </div>
                                <div class=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img-position mt-3"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/c1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                                </div >
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 w3layouts-txt-says\">
                            <div class=\"clients-color-agile text-center\">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                </p>
                                <div class=\"clients-txt-agile\">
                                    <h4 class=\"mt-3\">Jack Son</h4>
                                </div>
                                <div class=\"img-position mt-3\">
                                    <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/c4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                                </div >
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"row client-slider-slide\">
                        <div class=\"col-lg-6 col-md-6 w3layouts-txt-says\">
                            <div class=\"clients-color-agile text-center\">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                </p>
                                <div class=\"clients-txt-agile\">
                                    <h4 class=\"mt-3\">Jilly Son</h4>
                                </div>
                                <div class=\"img-position mt-3\">
                                    <img src=\"images/c3.jpg\" alt=\"\" class=\"img-fluid\">
                                </div >
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 w3layouts-txt-says\">
                            <div class=\"clients-color-agile text-center\">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                </p>
                                <div class=\"clients-txt-agile\">
                                    <h4 class=\"mt-3\">Nike Deo</h4>
                                </div>
                                <div class=\"img-position mt-3\">
                                    <img src=\"images/c2.jpg\" alt=\"\" class=\"img-fluid\">
                                </div >
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"row client-slider-slide\">
                        <div class=\"col-lg-6 col-md-6 w3layouts-txt-says\">
                            <div class=\"clients-color-agile text-center\">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                </p>
                                <div class=\"clients-txt-agile\">
                                    <h4 class=\" mt-3\">Sam Will</h4>
                                </div>
                                <div class=\"img-position mt-3\">
                                    <img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/c4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                                </div >
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 w3layouts-txt-says\">
                            <div class=\"clients-color-agile text-center\">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                </p>
                                <div class=\"clients-txt-agile\">
                                    <h4 class=\"mt-3\">Jack Will</h4>
                                </div>
                                <div class=\"img-position mt-3\">
                                    <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/c2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                                </div >
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--<div class=\"custom-navigation\">
          <a href=\"#\" class=\"flex-prev\">Prev</a>
          <div class=\"custom-controls-container\"></div>
          <a href=\"#\" class=\"flex-next\">Next</a>-->
    </div>
</section>
<!--//clients-->
<!-- team -->
<section class=\"team  py-lg-4 py-md-3 py-sm-3 py-3\" id=\"team\">
    <div class=\"container py-lg-5 py-md-4 py-sm-4 py-3\">
        <h3 class=\"title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3\">Our Traines</h3>
        <div class=\"row text-center \">
            <div class=\"col-lg-3 col-md-6 col-sm-6 news-img\" data-aos=\"fade-up\"
                 data-aos-duration=\"3000\">
                <div class=\"team-agile-group\">
                    <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"image-fluid\">
                    <h4 class=\"mt-3 mb-2\">Sam Will
                    </h4>
                    <span class=\"wls-client-title\">Body Builder</span>
                    <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                        Lorem ipsum
                    </p>
                    <div class=\"icons-footer mt-lg-4 mt-md-3 mt-3\">
                        <ul>
                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fas fa-envelope\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6 news-img\" data-aos=\"fade-down\"
                 data-aos-duration=\"2500\">
                <div class=\"team-agile-group\">
                    <img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"image-fluid\">
                    <h4 class=\"mt-3 mb-2\">Sara kent
                    </h4>
                    <span class=\"wls-client-title\">Fitness Trainer</span>
                    <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                        Lorem ipsum
                    </p>
                    <div class=\"icons-footer mt-lg-4 mt-md-3 mt-3\">
                        <ul>
                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fas fa-envelope\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6 news-img\" data-aos=\"fade-up\"
                 data-aos-duration=\"2000\">
                <div class=\"team-agile-group\">
                    <img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"image-fluid\">
                    <h4 class=\"mt-3 mb-2\">Rose Will
                    </h4>
                    <span class=\"wls-client-title\">Weight Trainer</span>
                    <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                        Lorem ipsum
                    </p>
                    <div class=\"icons-footer mt-lg-4 mt-md-3 mt-3\">
                        <ul>
                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fas fa-envelope\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6 news-img\" data-aos=\"fade-down\"
                 data-aos-duration=\"1500\">
                <div class=\"team-agile-group\">
                    <img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"image-fluid\">
                    <h4 class=\"mt-3 mb-2\">Max Will
                    </h4>
                    <span class=\"wls-client-title\">Body Builder</span>
                    <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                        Lorem ipsum
                    </p>
                    <div class=\"icons-footer mt-lg-4 mt-md-3 mt-3\">
                        <ul>
                            <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fas fa-envelope\"></span></a></li>
                            <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//team -->
<!--portfolio -->
<section class=\"gallery py-lg-4 py-md-3 py-sm-3 py-3\" id=\"gallery\">
    <div class=\"container py-lg-5 py-md-5 py-sm-4 py-3\">
        <h3 class=\"title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3\">Our Gallery</h3>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 p-0 snap-img\" >
                <div class=\" agileits_w3layouts_gallery_grid1\" data-aos=\"zoom-in-up\">
                    <div class=\"w3_agile_gallery_effect\">
                        <a href=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g1.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\" data-title=\"Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.\">
                            <img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g1.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
                <div class=\"agileits_w3layouts_gallery_grid1\" data-aos=\"zoom-in-up\">
                    <div class=\"w3_agile_gallery_effect\">
                        <a href=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g2.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\" data-title=\"Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.\">
                            <img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 p-0 snap-img\">
                <div class=\" agileits_w3layouts_gallery_grid1\" data-aos=\"zoom-in-up\">
                    <div class=\"w3_agile_gallery_effect\">
                        <a href=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g3.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\" data-title=\"Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.\">
                            <img src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
                <div class=\"agileits_w3layouts_gallery_grid1\" data-aos=\"zoom-in-up\">
                    <div class=\"w3_agile_gallery_effect\">
                        <a href=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g6.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\" data-title=\"Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.\">
                            <img src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g6.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 p-0 snap-img\">
                <div class=\"agileits_w3layouts_gallery_grid1 \" data-aos=\"zoom-in-up\">
                    <div class=\"w3_agile_gallery_effect\">
                        <a href=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g4.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\" data-title=\"Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.\">
                            <img src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g4.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
                <div class=\"agileits_w3layouts_gallery_grid1 \" data-aos=\"zoom-in-up\">
                    <div class=\"w3_agile_gallery_effect\">
                        <a href=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g2.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\" data-title=\"Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.\">
                            <img src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
                <div class=\"agileits_w3layouts_gallery_grid1\" data-aos=\"zoom-in-up\">
                    <div class=\"w3_agile_gallery_effect\">
                        <a href=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g3.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\" data-title=\"Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.\">
                            <img src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-fluid\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //gallery -->
<div class=\"address_mail_footer_grids\" data-aos=\"fade-up\">
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555\"></iframe>
</div>
<!--contact -->
<Section class=\"contact py-lg-4 py-md-3 py-sm-3 py-3\" id=\"contact\">
    <div class=\"container py-lg-5 py-md-5 py-sm-4 py-3\">
        <h3 class=\"title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3\">Contact Us</h3>
        <div class=\"mb-lg-5 mb-md-4 mb-3 row contact-right \">
            <div class=\"col-lg-4 col-md-5 footer_grid_left text-center\" data-aos=\"fade-right\"
                 data-aos-offset=\"100\"
                 data-aos-easing=\"ease-in-sine\">
                <div class=\"contact_footer_grid_left text-center mb-3\">
                    <span class=\"fas fa-map-marker-alt\"></span>
                </div>
                <p> Broome St,10002,Canada<br>New York City 90210.</p>
            </div>
            <div class=\"col-lg-4 col-md-3 footer_grid_left text-center\"  data-aos=\"fade-right\"
                 data-aos-offset=\"110\"
                 data-aos-easing=\"ease-in-sine\">
                <div class=\"contact_footer_grid_left text-center mb-3\">
                    <span class=\"fas fa-phone-volume\"></span>
                </div>
                <p>+(000) 123 4565 32<br>+(010) 123 455 354</p>
            </div>
            <div class=\"col-lg-4 col-md-4 footer_grid_left text-center\" data-aos=\"fade-right\"
                 data-aos-offset=\"120\"
                 data-aos-easing=\"ease-in-sine\">
                <div class=\"contact_footer_grid_left text-center mb-3\">
                    <span class=\"fas fa-at\"></span>
                </div>
                <p><a href=\"mailto:info@example.com\">info@example1.com</a>
                    <br><a href=\"mailto:info@example.com\">info@example2.com</a>
                </p>
            </div>
        </div>
        <div class=\" contact-form aos-init aos-animate\" data-aos=\"fade-left\"
             data-aos-offset=\"100\"
             data-aos-easing=\"ease-in-sine\">
            <form action=\"#\" method=\"post\">
                <div class=\"row text-center contact-wls-detail\">
                    <div class=\"col-md-4 form-group contact-forms\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Your Name\" required=\"\">
                    </div>
                    <div class=\"col-md-4 form-group contact-forms\">
                        <input type=\"email\" class=\"form-control\" placeholder=\"Your Email\" required=\"\">
                    </div>
                    <div class=\"col-md-4 form-group contact-forms\">
                        <input type=\"text\" name=\"Phone\" class=\"form-control\" placeholder=\"Phone \" required=\"\">
                    </div>
                </div>
                <div class=\"form-group contact-forms\">
                    <textarea class=\"form-control\" rows=\"3\" placeholder=\"Your Message\" required=\"\"></textarea>
                </div>
                <button type=\"submit\" class=\"btn sent-butnn\">Send</button>
            </form>
        </div>
    </div>
</section>
";
    }

    // line 645
    public function block_footer($context, array $blocks = array())
    {
        // line 646
        echo "    <div class=\"copy-agile-right text-center pt-lg-4 pt-3\">
        <p>
            © 2018 Gym-Plus. All Rights Reserved | Design by <a href=\"http://www.W3Layouts.com\" target=\"_blank\">W3Layouts</a>
        </p>
        <div class=\"icons-footer mt-lg-4 mt-md-3 mt-3\">
            <ul>
                <li><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                <li><a href=\"#\"><span class=\"fas fa-envelope\"></span></a></li>
                <li><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                <li><a href=\"#\"><span class=\"fab fa-pinterest-p\"></span></a></li>
            </ul>
        </div>
    </div>
    ";
    }

    // line 691
    public function block_javascript($context, array $blocks = array())
    {
        // line 692
        echo "  <!--//model-->
    <!--js working-->
    <script src='";
        // line 694
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "'></script>
    <!--//js working-->
    <!--  light box js -->
    <script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"> </script>
    <!-- //light box js-->
    <!--responsiveslides banner-->
    <script src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        // You can also use \"\$(window).load(function() {\"
        \$(function () {
            // Slideshow 4
            \$(\"#slider4\").responsiveSlides({
                auto: true,
                pager:true,
                nav:false ,
                speed: 900,
                namespace: \"callbacks\",
                before: function () {
                    \$('.events').append(\"<li>before event fired.</li>\");
                },
                after: function () {
                    \$('.events').append(\"<li>after event fired.</li>\");
                }
            });

        });
    </script>
    <!--// responsiveslides banner-->
    <!--animation body -->
    <script src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration:1200
        });
    </script>
    <!-- //animation body -->
    <!-- start-smoth-scrolling -->
    <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(document).ready(function (\$) {
            \$(\".scroll\").click(function (event) {
                event.preventDefault();
                \$('html,body').animate({
                    scrollTop: \$(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- here stars scrolling icon -->
    <script>
        \$(document).ready(function () {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            \$().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- FlexSlider -->
    <script src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            SyntaxHighlighter.all();
        });
        \$(window).load(function(){
            \$('.flexslider').flexslider({
                animation: \"slide\",
                controlsContainer: \$(\".custom-controls-container\"),
                customDirectionNav: \$(\".custom-navigation a\"),
                start: function(slider){
                    \$('body').removeClass('loading');
                }
            });
        });
    </script>
    <!--//FlexSlider -->
    <!--bootstrap working-->
    <script src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- //bootstrap working-->
";
    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1009 => 781,  988 => 763,  955 => 733,  951 => 732,  939 => 723,  913 => 700,  907 => 697,  901 => 694,  897 => 692,  894 => 691,  877 => 646,  874 => 645,  802 => 482,  798 => 481,  789 => 475,  785 => 474,  776 => 468,  772 => 467,  761 => 459,  757 => 458,  748 => 452,  744 => 451,  733 => 443,  729 => 442,  720 => 436,  716 => 435,  685 => 407,  663 => 388,  641 => 369,  619 => 350,  593 => 327,  576 => 313,  523 => 263,  506 => 249,  502 => 248,  428 => 176,  425 => 175,  416 => 166,  402 => 154,  399 => 153,  349 => 50,  346 => 49,  340 => 5,  333 => 784,  331 => 691,  311 => 674,  295 => 660,  293 => 645,  272 => 627,  264 => 622,  256 => 617,  246 => 610,  238 => 605,  230 => 600,  220 => 593,  212 => 588,  204 => 583,  169 => 550,  167 => 175,  161 => 171,  159 => 153,  101 => 97,  99 => 49,  89 => 42,  85 => 41,  75 => 34,  69 => 31,  63 => 28,  57 => 25,  51 => 22,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/layout.html.twig", "C:\\wamp64\\www\\adfitness\\app\\Resources\\views\\layout\\layout.html.twig");
    }
}
