<?php

/* article/list.html.twig */
class __TwigTemplate_2ff0d7067f1118f36fd8d08a8071314d122e8bc6a1081306ef3cd3a5225b424f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<main>
    <!-- introBannerHolder -->
    <section class=\"introBannerHolder d-flex w-100 bgCover\" style=\"background-image: url(";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/b-bg7.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center\">
                    <h1 class=\"headingIV fwEbold playfair mb-4\">Blog</h1>
                    <ul class=\"list-unstyled breadCrumbs d-flex justify-content-center\">
                        <li class=\"mr-2\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                        <li class=\"mr-2\">/</li>
                        <li class=\"active\">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- twoColumns -->
    <div class=\"twoColumns container pt-lg-23 pb-lg-20 pt-md-16 pb-md-4 pt-10 pb-4\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-9 order-lg-3\">
                <!-- content -->
                <article id=\"content\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 28
            echo "                    <!-- newsBlogColumn -->
                        <div class=\"newsBlogColumn mb-md-9 mb-6\">
                            <div class=\"imgHolder position-relative mb-6\">
                                <a href=\"blog-detail.html\">
                                    <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Uploads/Images/" . $this->getAttribute($context["article"], "image", array()))), "html", null, true);
            echo "\" alt=\"image description\" class=\"img-fluid\">
                                </a>
                            </div>
                            <div class=\"textHolder d-flex align-items-start\">
                                <time class=\"time text-center text-uppercase py-sm-3 py-1 px-1\" datetime=";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d-m-y"), "html", null, true);
            echo "> <strong class=\"fwEbold d-block mb-1\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "F"), "html", null, true);
            echo "</time>
                                <div class=\"alignLeft pl-sm-6 pl-3\">
                                    <h2 class=\"headingV fwEbold mb-2\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("idA" => $this->getAttribute($context["article"], "idA", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo " </a></h2>
                                    <span class=\"postBy d-block pb-sm-6 pb-2 mb-3\">Post by: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</a></span>
                                </div>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                    <div class=\"col-12 mb-sm-0 mb-6\">
                        <!-- pagination -->
                        <ul class=\"list-unstyled pagination d-flex justify-content-center align-items-end\">
                            <li><a href=\"javascript:void(0);\"><i class=\"fas fa-chevron-left\"></i></a></li>
                            <li class=\"active\"><a href=\"javascript:void(0);\">1</a></li>
                            <li><a href=\"javascript:void(0);\">2</a></li>
                            <li>...</li>
                            <li><a href=\"javascript:void(0);\"><i class=\"fas fa-chevron-right\"></i></a></li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class=\"col-12 col-lg-3 order-lg-1\">
                <!-- sidebar -->
                <aside id=\"sidebar\">
                    <!-- widget -->
                    <section class=\"widget overflow-hidden mb-md-9 mb-6\">
                        <h3 class=\"headingVII fwEbold text-uppercase mb-4\">Search</h3>
                        <form action=\"javascript:void(0);\" class=\"searchForm position-relative border\">
                            <fieldset>
                                <input type=\"search\" class=\"form-control\" placeholder=\"Search article...\">
                                <button type=\"submit\" class=\"position-absolute\"><i class=\"icon-search\"></i></button>
                            </fieldset>
                        </form>
                    </section>

                    <!-- widget -->
                    <section class=\"widget overflow-hidden mb-md-5 mb-3\">
                        <h3 class=\"headingVII fwEbold text-uppercase mb-4\">CATEGORIES</h3>
                        <ul class=\"list-unstyled archiveList mb-0\">
                            <li class=\"mb-3\"><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_listCat1");
        echo "\" class=\"d-block\">Garden Care</a></li>
                            <li class=\"mb-3\"><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_listCat2");
        echo "\" class=\"d-block\">Garden Tech</a></li>
                            <li class=\"mb-3\"><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_listCat3");
        echo "\" class=\"d-block\">Plants</a></li>
                            <li class=\"mb-3\"><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_listCat4");
        echo "\" class=\"d-block\">HousePlants</a></li>
                            <li class=\"mb-3\"><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_listCat5");
        echo "\" class=\"d-block\">Seeds & Bulbs</a></li>
                            <li class=\"mb-3\"><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_listCat6");
        echo "\" class=\"d-block\">Trees & Shrubs</a></li>
                            <li class=\"mb-3\"><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_listCat7");
        echo "\" class=\"d-block\">DIY</a></li>
                            <li class=\"mb-3\"><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_listCat8");
        echo "\" class=\"d-block\">Uncategorized</a></li>
                        </ul>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</main>
    <script>
        \$(document).ready(function () {
            var searchRequest = null;
            \$(\".js-user-search\").keyup(function () {
                var minlength = 1;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search");
        echo "\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function (msg) {
                            //we need to check if the value is the same
                            if (value == \$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                entitySelector.append('<li><a href=\"/daten/' + id + '\">' +
                                                    ' <div class=\"autho\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images"), "html", null, true);
        echo "' + value[2] + '></div>' +
                                                    '<div class=\"notification-event\">' +
                                                    '<span class=\"h6 notification-friend\"></a>' + value[0] + '</span>' + ' ' +
                                                    '<span class=\"chat-message-item\">' + '<b>' + value[1] + '</b>' + '</span>' + '</br>' +
                                                    '</div>\\n' +
                                                    '<span class=\"notification-icon\"><svg class=\"\\' + escape(item.icon) + \\'\"><use xlink:href=\"icons/icons.svg#\\' + escape(item.icon) + \\'\"></use></svg></span>' + '</a></li>');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">' + value + '</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 118,  209 => 104,  185 => 83,  181 => 82,  177 => 81,  173 => 80,  169 => 79,  165 => 78,  161 => 77,  157 => 76,  124 => 45,  112 => 39,  106 => 38,  97 => 36,  90 => 32,  84 => 28,  80 => 27,  63 => 13,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<main>
    <!-- introBannerHolder -->
    <section class=\"introBannerHolder d-flex w-100 bgCover\" style=\"background-image: url({{ asset('images/b-bg7.jpg') }});\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center\">
                    <h1 class=\"headingIV fwEbold playfair mb-4\">Blog</h1>
                    <ul class=\"list-unstyled breadCrumbs d-flex justify-content-center\">
                        <li class=\"mr-2\"><a href=\"{{path('homepage')}}\">Home</a></li>
                        <li class=\"mr-2\">/</li>
                        <li class=\"active\">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- twoColumns -->
    <div class=\"twoColumns container pt-lg-23 pb-lg-20 pt-md-16 pb-md-4 pt-10 pb-4\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-9 order-lg-3\">
                <!-- content -->
                <article id=\"content\">
                    {% for article in articles %}
                    <!-- newsBlogColumn -->
                        <div class=\"newsBlogColumn mb-md-9 mb-6\">
                            <div class=\"imgHolder position-relative mb-6\">
                                <a href=\"blog-detail.html\">
                                    <img src=\"{{asset('Uploads/Images/' ~article.image )}}\" alt=\"image description\" class=\"img-fluid\">
                                </a>
                            </div>
                            <div class=\"textHolder d-flex align-items-start\">
                                <time class=\"time text-center text-uppercase py-sm-3 py-1 px-1\" datetime={{article.date | date('d-m-y')}}> <strong class=\"fwEbold d-block mb-1\">{{article.date | date('d')}}</strong> {{article.date | date('F')}}</time>
                                <div class=\"alignLeft pl-sm-6 pl-3\">
                                    <h2 class=\"headingV fwEbold mb-2\"><a href=\"{{ path('article_show', { 'idA': article.idA }) }}\"> {{article.title}} </a></h2>
                                    <span class=\"postBy d-block pb-sm-6 pb-2 mb-3\">Post by: {#<a href=\"blog-detail.html\">#}{{article.author}}</a></span>
                                </div>
                            </div>
                        </div>

                    {% endfor %}

                    <div class=\"col-12 mb-sm-0 mb-6\">
                        <!-- pagination -->
                        <ul class=\"list-unstyled pagination d-flex justify-content-center align-items-end\">
                            <li><a href=\"javascript:void(0);\"><i class=\"fas fa-chevron-left\"></i></a></li>
                            <li class=\"active\"><a href=\"javascript:void(0);\">1</a></li>
                            <li><a href=\"javascript:void(0);\">2</a></li>
                            <li>...</li>
                            <li><a href=\"javascript:void(0);\"><i class=\"fas fa-chevron-right\"></i></a></li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class=\"col-12 col-lg-3 order-lg-1\">
                <!-- sidebar -->
                <aside id=\"sidebar\">
                    <!-- widget -->
                    <section class=\"widget overflow-hidden mb-md-9 mb-6\">
                        <h3 class=\"headingVII fwEbold text-uppercase mb-4\">Search</h3>
                        <form action=\"javascript:void(0);\" class=\"searchForm position-relative border\">
                            <fieldset>
                                <input type=\"search\" class=\"form-control\" placeholder=\"Search article...\">
                                <button type=\"submit\" class=\"position-absolute\"><i class=\"icon-search\"></i></button>
                            </fieldset>
                        </form>
                    </section>

                    <!-- widget -->
                    <section class=\"widget overflow-hidden mb-md-5 mb-3\">
                        <h3 class=\"headingVII fwEbold text-uppercase mb-4\">CATEGORIES</h3>
                        <ul class=\"list-unstyled archiveList mb-0\">
                            <li class=\"mb-3\"><a href=\"{{ path('article_listCat1') }}\" class=\"d-block\">Garden Care</a></li>
                            <li class=\"mb-3\"><a href=\"{{ path('article_listCat2') }}\" class=\"d-block\">Garden Tech</a></li>
                            <li class=\"mb-3\"><a href=\"{{ path('article_listCat3') }}\" class=\"d-block\">Plants</a></li>
                            <li class=\"mb-3\"><a href=\"{{ path('article_listCat4') }}\" class=\"d-block\">HousePlants</a></li>
                            <li class=\"mb-3\"><a href=\"{{ path('article_listCat5') }}\" class=\"d-block\">Seeds & Bulbs</a></li>
                            <li class=\"mb-3\"><a href=\"{{ path('article_listCat6') }}\" class=\"d-block\">Trees & Shrubs</a></li>
                            <li class=\"mb-3\"><a href=\"{{ path('article_listCat7') }}\" class=\"d-block\">DIY</a></li>
                            <li class=\"mb-3\"><a href=\"{{ path('article_listCat8') }}\" class=\"d-block\">Uncategorized</a></li>
                        </ul>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</main>
    <script>
        \$(document).ready(function () {
            var searchRequest = null;
            \$(\".js-user-search\").keyup(function () {
                var minlength = 1;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('ajax_search') }}\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function (msg) {
                            //we need to check if the value is the same
                            if (value == \$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                entitySelector.append('<li><a href=\"/daten/' + id + '\">' +
                                                    ' <div class=\"autho\"><img src=\"{{ asset('uploads/images') }}' + value[2] + '></div>' +
                                                    '<div class=\"notification-event\">' +
                                                    '<span class=\"h6 notification-friend\"></a>' + value[0] + '</span>' + ' ' +
                                                    '<span class=\"chat-message-item\">' + '<b>' + value[1] + '</b>' + '</span>' + '</br>' +
                                                    '</div>\\n' +
                                                    '<span class=\"notification-icon\"><svg class=\"\\' + escape(item.icon) + \\'\"><use xlink:href=\"icons/icons.svg#\\' + escape(item.icon) + \\'\"></use></svg></span>' + '</a></li>');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">' + value + '</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
{% endblock %}
", "article/list.html.twig", "C:\\wamp64\\www\\nursery\\app\\Resources\\views\\article\\list.html.twig");
    }
}
