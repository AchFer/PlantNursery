<?php

/* event/index.html.twig */
class __TwigTemplate_730c43519d12ae7b69ec2854a55e97bc72220267350a7b389286edafb90fbe6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/index.html.twig"));

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
        echo "   <center><h1>Events list</h1></center>
<center>
    <table id=\"tableac\" class=\"table table-bordered table-hover\">
            <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js2/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <input type=\"text\" id=\"search\" placeholder=\"CHERCHER EVENT NAME ...\">
            <thead>
        <thead>
            <tr>
                <th>Id</th>
                <th>Namee</th>
                <th>Description</th>
                <th>Datee</th>
                <th>Lieue</th>
                <th>Nbp</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 23
            echo "
            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nameE", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["event"], "dateE", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateE", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "lieuE", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nbP", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>

                            <button type=\"button\" class=\"btn btn-outline-danger\" > <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">show</a></button>
                    </ul>
                    <ul>

                            <button type=\"button\" class=\"btn btn-outline-primary\" > <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_edit", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">edit</a></button></li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
</center>

    <ul>

        <button type=\"button\" class=\"btn btn-outline-warning\" > <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_new");
        echo "\">Create a new event</a></button>

    </ul>

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
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 49,  129 => 43,  118 => 38,  111 => 34,  104 => 30,  100 => 29,  94 => 28,  90 => 27,  86 => 26,  80 => 25,  76 => 23,  72 => 22,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
            <script src=\"{{ asset('js2/jquery.min.js') }}\"></script>
            <input type=\"text\" id=\"search\" placeholder=\"CHERCHER EVENT NAME ...\">
            <thead>
        <thead>
            <tr>
                <th>Id</th>
                <th>Namee</th>
                <th>Description</th>
                <th>Datee</th>
                <th>Lieue</th>
                <th>Nbp</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for event in events %}

            <tr>
                <td><a href=\"{{ path('event_show', { 'id': event.id }) }}\">{{ event.id }}</a></td>
                <td>{{ event.nameE }}</td>
                <td>{{ event.description }}</td>
                <td>{% if event.dateE %}{{ event.dateE|date('Y-m-d') }}{% endif %}</td>
                <td>{{ event.lieuE }}</td>
                <td>{{ event.nbP }}</td>
                <td>
                    <ul>

                            <button type=\"button\" class=\"btn btn-outline-danger\" > <a href=\"{{ path('event_show', { 'id': event.id }) }}\">show</a></button>
                    </ul>
                    <ul>

                            <button type=\"button\" class=\"btn btn-outline-primary\" > <a href=\"{{ path('event_edit', { 'id': event.id }) }}\">edit</a></button></li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</center>

    <ul>

        <button type=\"button\" class=\"btn btn-outline-warning\" > <a href=\"{{ path('event_new') }}\">Create a new event</a></button>

    </ul>

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
", "event/index.html.twig", "C:\\wamp64\\www\\nursery\\app\\Resources\\views\\event\\index.html.twig");
    }
}
