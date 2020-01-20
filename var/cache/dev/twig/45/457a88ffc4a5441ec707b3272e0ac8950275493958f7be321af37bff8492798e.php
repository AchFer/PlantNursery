<?php

/* event/participation.html.twig */
class __TwigTemplate_bef71c607ddcf1438a3adbd07e187931143ff7dcdd743d20452349974db14c5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/participation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/participation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/participation.html.twig"));

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
        echo "    <center><h1>Events list</h1></center>
    <center>



        <table id=\"tableac\" class=\"table table-bordered table-hover\">
            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js22/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <input type=\"text\" id=\"search\" placeholder=\"CHERCHER EVENT NAME ...\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Namee</th>
                <th>Description</th>
                <th>Datee</th>
                <th>Lieue</th>
                <th>Nbp</th>
                <th>Actions</th>
                <th>Comment</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 27
            echo "                <tr>
                    <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td><span class=\"badge badge-danger navbar-badge\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nameE", array()), "html", null, true);
            echo "</span></td>
                    <td><span class=\"badge badge-warning navbar-badge\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</span></td>
                    <td><span class=\"badge badge-success navbar-badge\">";
            // line 31
            if ($this->getAttribute($context["event"], "dateE", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateE", array()), "Y-m-d"), "html", null, true);
            }
            echo "</span></td>
                    <td><span class=\"badge badge-info navbar-badge\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "lieuE", array()), "html", null, true);
            echo "</span></td>
                    <td><span class=\"badge badge-secondary navbar-badge\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nbP", array()), "html", null, true);
            echo "</span></td>

                    <td>
                        <ul>
                            <button type=\"button\" class=\"btn btn-outline-danger\" ><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterservation", array("idEvent" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">Participer</a></button>
                        </ul>
                         <ul>
                                <button type=\"button\" class=\"btn btn-outline-primary\" ><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annuleservation", array("idEvent" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">annuler participation</a></button>
                        </ul>
                    </td>
                    <td>
                        <button type=\"button\" class=\"btn btn-outline-warning\" ><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addcomm", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">Comment</a></button>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
    </center>
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/participation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  127 => 44,  120 => 40,  114 => 37,  107 => 33,  103 => 32,  97 => 31,  93 => 30,  89 => 29,  83 => 28,  80 => 27,  76 => 26,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <center><h1>Events list</h1></center>
    <center>



        <table id=\"tableac\" class=\"table table-bordered table-hover\">
            <script src=\"{{ asset('js22/jquery.min.js') }}\"></script>
            <input type=\"text\" id=\"search\" placeholder=\"CHERCHER EVENT NAME ...\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Namee</th>
                <th>Description</th>
                <th>Datee</th>
                <th>Lieue</th>
                <th>Nbp</th>
                <th>Actions</th>
                <th>Comment</th>

            </tr>
            </thead>
            <tbody>
            {% for event in events %}
                <tr>
                    <td><a href=\"{{ path('event_show', { 'id': event.id }) }}\">{{ event.id }}</a></td>
                    <td><span class=\"badge badge-danger navbar-badge\">{{ event.nameE }}</span></td>
                    <td><span class=\"badge badge-warning navbar-badge\">{{ event.description }}</span></td>
                    <td><span class=\"badge badge-success navbar-badge\">{% if event.dateE %}{{ event.dateE|date('Y-m-d') }}{% endif %}</span></td>
                    <td><span class=\"badge badge-info navbar-badge\">{{ event.lieuE }}</span></td>
                    <td><span class=\"badge badge-secondary navbar-badge\">{{ event.nbP }}</span></td>

                    <td>
                        <ul>
                            <button type=\"button\" class=\"btn btn-outline-danger\" ><a href=\"{{ path('ajouterservation', { 'idEvent': event.id }) }}\">Participer</a></button>
                        </ul>
                         <ul>
                                <button type=\"button\" class=\"btn btn-outline-primary\" ><a href=\"{{ path('annuleservation', { 'idEvent': event.id }) }}\">annuler participation</a></button>
                        </ul>
                    </td>
                    <td>
                        <button type=\"button\" class=\"btn btn-outline-warning\" ><a href=\"{{ path('addcomm', { 'id': event.id }) }}\">Comment</a></button>

                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </center>
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>
{% endblock %}
", "event/participation.html.twig", "C:\\wamp64\\www\\nursery\\app\\Resources\\views\\event\\participation.html.twig");
    }
}
