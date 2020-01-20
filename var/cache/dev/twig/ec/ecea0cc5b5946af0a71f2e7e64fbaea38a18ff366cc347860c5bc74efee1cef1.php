<?php

/* @Plant/plant/show.html.twig */
class __TwigTemplate_f413c0377f6afb430a1a2aff5119d7cddc78e6037c34d20a22a96651b14e246c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Plant/plant/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Plant/plant/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Plant/plant/show.html.twig"));

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
        echo "    <h1>";
        if ( !twig_test_empty($this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "photo", array()))) {
            // line 5
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Uploads/Images/" . $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "photo", array()))), "html", null, true);
            echo "\" >
        ";
        }
        // line 7
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "plantname", array()), "html", null, true);
        echo "
    </h1>

    <table>
        <tbody>
            <tr>
                <th>Binomialname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "binomialname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Clade(s)</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "clade1", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "clade2", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "clade3", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Order</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "plantorder", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Family</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "family", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Subfamily</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "subfamily", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tribe</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "tribe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Genus</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "genus", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Species</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "species", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td> ";
        // line 46
        echo $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "description", array());
        echo " </td>
            </tr>
            <tr>
                <th>Watering in sandy soil</th>
                <td> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "wateringsandysoil", array()), "html", null, true);
        echo " every ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "frequencywateringsandysoil", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "periodofwateringsandysoil", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Watering in clays oil</th>
                <td> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "wateringclaysoil", array()), "html", null, true);
        echo " every ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "frequencywateringclaysoil", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "periodofwateringclaysoil", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>

            </tr>
        </tbody>
    </table>



    <ul>
        <li>
            <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plant_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plant_edit", array("id" => $this->getAttribute(($context["plant"] ?? $this->getContext($context, "plant")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Plant/plant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 74,  178 => 72,  172 => 69,  166 => 66,  147 => 54,  136 => 50,  129 => 46,  122 => 42,  115 => 38,  108 => 34,  101 => 30,  94 => 26,  87 => 22,  76 => 18,  69 => 14,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{% if plant.photo is not empty %}
        <img src=\"{{ asset('Uploads/Images/' ~ plant.photo ) }}\" >
        {% endif %}
        {{ plant.plantname }}
    </h1>

    <table>
        <tbody>
            <tr>
                <th>Binomialname</th>
                <td>{{ plant.binomialname }}</td>
            </tr>
            <tr>
                <th>Clade(s)</th>
                <td>{{ plant.clade1 }} {{ plant.clade2 }} {{ plant.clade3 }}</td>
            </tr>
            <tr>
                <th>Order</th>
                <td>{{ plant.plantorder }}</td>
            </tr>
            <tr>
                <th>Family</th>
                <td>{{ plant.family }}</td>
            </tr>
            <tr>
                <th>Subfamily</th>
                <td>{{ plant.subfamily }}</td>
            </tr>
            <tr>
                <th>Tribe</th>
                <td>{{ plant.tribe }}</td>
            </tr>
            <tr>
                <th>Genus</th>
                <td>{{ plant.genus }}</td>
            </tr>
            <tr>
                <th>Species</th>
                <td>{{ plant.species }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td> {{ plant.description |raw }} </td>
            </tr>
            <tr>
                <th>Watering in sandy soil</th>
                <td> {{ plant.wateringsandysoil }} every {{ plant.frequencywateringsandysoil }} {{ plant.periodofwateringsandysoil }}</td>
            </tr>
            <tr>
                <th>Watering in clays oil</th>
                <td> {{ plant.wateringclaysoil }} every {{ plant.frequencywateringclaysoil }} {{ plant.periodofwateringclaysoil }}</td>
            </tr>
            <tr>

            </tr>
        </tbody>
    </table>



    <ul>
        <li>
            <a href=\"{{ path('plant_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('plant_edit', { 'id': plant.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Plant/plant/show.html.twig", "C:\\wamp64\\www\\nursery\\src\\PlantBundle\\Resources\\views\\plant\\show.html.twig");
    }
}
