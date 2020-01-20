<?php

/* avis/addcom.html.twig */
class __TwigTemplate_acec054d15146e1c1907efe0bf26543a8d788f862b4e5055d826cca4100c05de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("front.html.twig", "avis/addcom.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "avis/addcom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "avis/addcom.html.twig"));

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
        echo "    <center>
        <h1 style=\"color: #003147\"><b><i><center>Event </center></i></b></h1>

        <table id=\"example2\" class=\"table table-bordered table-hover\">
            <tbody>
            <tr>
                <th style=\"color: #003147\"><b><i>Id</i></b></th>
                <td><span class=\"badge badge-danger navbar-badge\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Namee</i></b></th>
                <td><span class=\"badge badge-warning navbar-badge\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "nameE", array()), "html", null, true);
        echo "</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Description</i></b></th>
                <td><span class=\"badge badge-success navbar-badge\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Datee</i></b></th>
                <td><span class=\"badge badge-info navbar-badge\">";
        // line 23
        if ($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "dateE", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "dateE", array()), "Y-m-d"), "html", null, true);
        }
        echo "</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Lieue</i></b></th>
                <td><span class=\"badge badge-secondary navbar-badge\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "lieuE", array()), "html", null, true);
        echo "</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Nbp</i></b></th>
                <td><span class=\"badge badge-danger navbar-badge\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "nbP", array()), "html", null, true);
        echo "</span></td>
            </tr>
            </tbody>
        </table>

        <ul>
            <form method=\"POST\">

                <input id=\"cmt\" name=\"cmt\" type=\"text\">

            </form>
                <button type=\"button\" class=\"btn btn-outline-danger\" > <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avis_new", array("id" => $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\">commenter</a></button>

            ";
        // line 45
        echo "            ";
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        // line 48
        echo "            ";
        // line 49
        echo "        </ul>
    </center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avis/addcom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  120 => 48,  118 => 47,  116 => 46,  114 => 45,  109 => 42,  95 => 31,  88 => 27,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'front.html.twig' %}

{% block body %}
    <center>
        <h1 style=\"color: #003147\"><b><i><center>Event </center></i></b></h1>

        <table id=\"example2\" class=\"table table-bordered table-hover\">
            <tbody>
            <tr>
                <th style=\"color: #003147\"><b><i>Id</i></b></th>
                <td><span class=\"badge badge-danger navbar-badge\">{{ event.id }}</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Namee</i></b></th>
                <td><span class=\"badge badge-warning navbar-badge\">{{ event.nameE }}</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Description</i></b></th>
                <td><span class=\"badge badge-success navbar-badge\">{{ event.description }}</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Datee</i></b></th>
                <td><span class=\"badge badge-info navbar-badge\">{% if event.dateE %}{{ event.dateE|date('Y-m-d') }}{% endif %}</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Lieue</i></b></th>
                <td><span class=\"badge badge-secondary navbar-badge\">{{ event.lieuE }}</span></td>
            </tr>
            <tr>
                <th style=\"color: #003147\"><b><i>Nbp</i></b></th>
                <td><span class=\"badge badge-danger navbar-badge\">{{ event.nbP }}</span></td>
            </tr>
            </tbody>
        </table>

        <ul>
            <form method=\"POST\">

                <input id=\"cmt\" name=\"cmt\" type=\"text\">

            </form>
                <button type=\"button\" class=\"btn btn-outline-danger\" > <a href=\"{{ path('avis_new', { 'id': event.id }) }}\">commenter</a></button>

            {#        <li>#}
            {#            {{ form_start(delete_form) }}#}
            {#                <input type=\"submit\" value=\"Delete\">#}
            {#            {{ form_end(delete_form) }}#}
            {#        </li>#}
        </ul>
    </center>
{% endblock %}
", "avis/addcom.html.twig", "C:\\wamp64\\www\\nursery\\app\\Resources\\views\\avis\\addcom.html.twig");
    }
}
