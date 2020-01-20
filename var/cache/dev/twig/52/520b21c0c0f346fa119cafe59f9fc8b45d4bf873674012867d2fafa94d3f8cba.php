<?php

/* article/index.html.twig */
class __TwigTemplate_6a649594ab828bd163efabd0d4ceee96c56c426bb23cdc6753f711290d99842d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

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
    <style>
        th, td {
            border-bottom: 1px solid #ddd;
            align-content: center;
        }
        tr:hover {background-color: #f5f5f5;}
        th {
            background-color: #36a729;
            color: white;
        }
        .link{
            color: #36a729;
        }
    </style>
    </head>

    <div class=\"col-12 col-lg-3 order-lg-1\">

            <!-- widget -->
            <section class=\"widget overflow-hidden mb-md-6 mb-3\">
                <ul class=\"list-unstyled archiveList mb-0\">
                    <li class=\"mb-3\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_index");
        echo "\" class=\"d-block\">My Comments</a></li>

                </ul>
            </section>


    </div>

    <center>
    <h1>My Articles</h1>

    <table>
        <col width=\"250\">
        <col width=\"150\">
        <col width=\"150\">
        <col width=\"100\">
        <col width=\"50\">
        <col width=\"50\">
        <col width=\"50\">
        <col width=\"50\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Date</th>
                <th><center>Views</center></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 60
            echo "            <tr>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            if ($this->getAttribute($context["article"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td><center>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "views", array()), "html", null, true);
            echo "</center></td>
                <td>
                    <center>

                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("idA" => $this->getAttribute($context["article"], "idA", array()))), "html", null, true);
            echo "\" class=\"link\">view</a>

                    </center>

                </td>
                <td>
                    <center>

                        <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("idA" => $this->getAttribute($context["article"], "idA", array()))), "html", null, true);
            echo "\" class=\"link\">edit</a>


                    </center>

                </td>
                <td>
                    <center>

                        <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("idA" => $this->getAttribute($context["article"], "idA", array()))), "html", null, true);
            echo "\" class=\"link\">delete</a>

                    </center>

                </td>




            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        </tbody>
    </table>
        <br>
        <div align=\"center\">
            <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\" class=\"btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3\">Create a new article<i class=\"fas fa-arrow-right ml-2\"></i></a>
        </div>

    </center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 101,  181 => 97,  164 => 86,  152 => 77,  141 => 69,  134 => 65,  128 => 64,  124 => 63,  120 => 62,  116 => 61,  113 => 60,  109 => 59,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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

    <style>
        th, td {
            border-bottom: 1px solid #ddd;
            align-content: center;
        }
        tr:hover {background-color: #f5f5f5;}
        th {
            background-color: #36a729;
            color: white;
        }
        .link{
            color: #36a729;
        }
    </style>
    </head>

    <div class=\"col-12 col-lg-3 order-lg-1\">

            <!-- widget -->
            <section class=\"widget overflow-hidden mb-md-6 mb-3\">
                <ul class=\"list-unstyled archiveList mb-0\">
                    <li class=\"mb-3\"><a href=\"{{path('commentaire_index')}}\" class=\"d-block\">My Comments</a></li>

                </ul>
            </section>


    </div>

    <center>
    <h1>My Articles</h1>

    <table>
        <col width=\"250\">
        <col width=\"150\">
        <col width=\"150\">
        <col width=\"100\">
        <col width=\"50\">
        <col width=\"50\">
        <col width=\"50\">
        <col width=\"50\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Date</th>
                <th><center>Views</center></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for article in articles %}
            <tr>
                <td>{{ article.title }}</td>
                <td>{{ article.author }}</td>
                <td>{{ article.category }}</td>
                <td>{% if article.date %}{{ article.date|date('Y-m-d') }}{% endif %}</td>
                <td><center>{{ article.views }}</center></td>
                <td>
                    <center>

                            <a href=\"{{ path('article_show', { 'idA': article.idA }) }}\" class=\"link\">view</a>

                    </center>

                </td>
                <td>
                    <center>

                        <a href=\"{{ path('article_edit', { 'idA': article.idA }) }}\" class=\"link\">edit</a>


                    </center>

                </td>
                <td>
                    <center>

                        <a href=\"{{ path('article_delete', { 'idA': article.idA }) }}\" class=\"link\">delete</a>

                    </center>

                </td>




            </tr>
        {% endfor %}
        </tbody>
    </table>
        <br>
        <div align=\"center\">
            <a href=\"{{ path('article_new') }}\" class=\"btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3\">Create a new article<i class=\"fas fa-arrow-right ml-2\"></i></a>
        </div>

    </center>
{% endblock %}
", "article/index.html.twig", "C:\\wamp64\\www\\adfitness\\app\\Resources\\views\\article\\index.html.twig");
    }
}
