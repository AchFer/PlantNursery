<?php

/* @Plant/plantmaintaining/index.html.twig */
class __TwigTemplate_ca25ab8890444f22a25d0ce00af990386333b2b81ca9eb272eeab72d929d6778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Plant/plantmaintaining/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Plant/plantmaintaining/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Plant/plantmaintaining/index.html.twig"));

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
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plantmaintainings"]) ? $context["plantmaintainings"] : $this->getContext($context, "plantmaintainings")), 0, array(), "array"), "userplant", array()), "name", array()), "html", null, true);
        echo " history (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plantmaintainings"]) ? $context["plantmaintainings"] : $this->getContext($context, "plantmaintainings")), "getTotalItemCount", array()), "html", null, true);
        echo ")</h1>

    <table>
        <thead>
            <tr>
                <th>";
        // line 10
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plantmaintainings"]) ? $context["plantmaintainings"] : $this->getContext($context, "plantmaintainings")), "Date", "date");
        echo "</th>
                <th>";
        // line 11
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plantmaintainings"]) ? $context["plantmaintainings"] : $this->getContext($context, "plantmaintainings")), "Soil type", "soiltype");
        echo "</th>
                <th>Watered</th>
                <th>Humidity</th>
                <th>Temperature</th>
                <th>Luminosity</th>
                <th>";
        // line 16
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plantmaintainings"]) ? $context["plantmaintainings"] : $this->getContext($context, "plantmaintainings")), "Height", "height");
        echo "</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plantmaintainings"]) ? $context["plantmaintainings"] : $this->getContext($context, "plantmaintainings")));
        foreach ($context['_seq'] as $context["_key"] => $context["plantmaintaining"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plantmaintaining_show", array("id" => $this->getAttribute($context["plantmaintaining"], "id", array()))), "html", null, true);
            echo "\">";
            if ($this->getAttribute($context["plantmaintaining"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["plantmaintaining"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["plantmaintaining"], "soiltype", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["plantmaintaining"], "watered", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["plantmaintaining"], "humidity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["plantmaintaining"], "temperature", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["plantmaintaining"], "luminosity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["plantmaintaining"], "height", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 31
            if ( !twig_test_empty($this->getAttribute($context["plantmaintaining"], "photo", array()))) {
                // line 32
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Uploads/Images/" . $this->getAttribute($context["plantmaintaining"], "photo", array()))), "html", null, true);
                echo "\" >
                    ";
            }
            // line 34
            echo "                </td>                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plantmaintaining_show", array("id" => $this->getAttribute($context["plantmaintaining"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plantmaintaining_edit", array("id" => $this->getAttribute($context["plantmaintaining"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plantmaintaining'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

    ";
        // line 50
        echo "    <div class=\"navigation\">
        ";
        // line 51
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["plantmaintainings"]) ? $context["plantmaintainings"] : $this->getContext($context, "plantmaintainings")));
        echo "
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myplantmaintaining_new", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plantmaintainings"]) ? $context["plantmaintainings"] : $this->getContext($context, "plantmaintainings")), 0, array(), "array"), "userplant", array()), "id", array()))), "html", null, true);
        echo "\">Maintain the plant</a>
        </li>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userplant_index");
        echo "\">Back to my plant list</a>
        </li>
    </ul>
    </center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Plant/plantmaintaining/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 58,  172 => 55,  165 => 51,  162 => 50,  157 => 46,  145 => 40,  139 => 37,  134 => 34,  128 => 32,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  102 => 26,  98 => 25,  90 => 24,  87 => 23,  83 => 22,  74 => 16,  66 => 11,  62 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <center>
    <h1>{{ plantmaintainings[0].userplant.name  }} history ({{ plantmaintainings.getTotalItemCount }})</h1>

    <table>
        <thead>
            <tr>
                <th>{{ knp_pagination_sortable(plantmaintainings, 'Date', 'date') }}</th>
                <th>{{ knp_pagination_sortable(plantmaintainings, 'Soil type', 'soiltype') }}</th>
                <th>Watered</th>
                <th>Humidity</th>
                <th>Temperature</th>
                <th>Luminosity</th>
                <th>{{ knp_pagination_sortable(plantmaintainings, 'Height', 'height') }}</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for plantmaintaining in plantmaintainings %}
            <tr>
                <td><a href=\"{{ path('plantmaintaining_show', { 'id': plantmaintaining.id }) }}\">{% if plantmaintaining.date %}{{ plantmaintaining.date|date('Y-m-d') }}{% endif %}</a></td>
                <td>{{ plantmaintaining.soiltype }}</td>
                <td>{% if plantmaintaining.watered %}Yes{% else %}No{% endif %}</td>
                <td>{{ plantmaintaining.humidity }}</td>
                <td>{{ plantmaintaining.temperature }}</td>
                <td>{{ plantmaintaining.luminosity }}</td>
                <td>{{ plantmaintaining.height }}</td>
                <td> {% if plantmaintaining.photo is not empty %}
                        <img src=\"{{ asset('Uploads/Images/' ~ plantmaintaining.photo ) }}\" >
                    {% endif %}
                </td>                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('plantmaintaining_show', { 'id': plantmaintaining.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('plantmaintaining_edit', { 'id': plantmaintaining.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(plantmaintainings) }}
    </div>
    <ul>
        <li>
            <a href=\"{{ path('myplantmaintaining_new', { 'id': plantmaintainings[0].userplant.id }) }}\">Maintain the plant</a>
        </li>
        <li>
            <a href=\"{{ path('userplant_index')}}\">Back to my plant list</a>
        </li>
    </ul>
    </center>
{% endblock %}

", "@Plant/plantmaintaining/index.html.twig", "C:\\wamp64\\www\\adfitness\\src\\PlantBundle\\Resources\\views\\plantmaintaining\\index.html.twig");
    }
}
