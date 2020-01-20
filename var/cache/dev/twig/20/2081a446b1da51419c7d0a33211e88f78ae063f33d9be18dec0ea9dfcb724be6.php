<?php

/* @Plant/plantmaintaining/show.html.twig */
class __TwigTemplate_dfed71c890b6f305d1d58d0a4240d48cf285aa1e81e7b7803ec64612ce051dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Plant/plantmaintaining/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Plant/plantmaintaining/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Plant/plantmaintaining/show.html.twig"));

        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE")) {
            // line 3
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "userplant", array()), "user", array()), "id", array()))) {
            }
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        if ( !twig_test_empty($this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "photo", array()))) {
            // line 7
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Uploads/Images/" . $this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "photo", array()))), "html", null, true);
            echo "\" >
        ";
        }
        // line 9
        echo "        </tr>Plantmaintaining</h1>

    <table>
        <tbody>
            <tr>
                <th>Plant Name</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "userplant", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 19
        if ($this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Soiltype</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "soiltype", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Watered</th>
                <td>";
        // line 27
        if ($this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "watered", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Humidity</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "humidity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Temperature</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "temperature", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Luminosity</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "luminosity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "height", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myplantmaintaining_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "userplant", array()), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "userplant", array()), "name", array()), "html", null, true);
        echo " history</a>
        </li>
        <li>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userplant_index");
        echo "\">Back to my plant list</a>
        </li>
        <li>
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plantmaintaining_edit", array("id" => $this->getAttribute((isset($context["plantmaintaining"]) ? $context["plantmaintaining"] : $this->getContext($context, "plantmaintaining")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Plant/plantmaintaining/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 63,  160 => 61,  154 => 58,  148 => 55,  140 => 52,  128 => 43,  121 => 39,  114 => 35,  107 => 31,  96 => 27,  89 => 23,  80 => 19,  73 => 15,  65 => 9,  59 => 7,  56 => 6,  47 => 5,  37 => 1,  33 => 3,  31 => 2,  11 => 1,);
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
{% if is_granted(\"ROLE\") %}
    {%  if  app.user.id == plantmaintaining.userplant.user.id %}

{% block body %}
    <h1>{% if plantmaintaining.photo is not empty %}
            <img src=\"{{ asset('Uploads/Images/' ~ plantmaintaining.photo ) }}\" >
        {% endif %}
        </tr>Plantmaintaining</h1>

    <table>
        <tbody>
            <tr>
                <th>Plant Name</th>
                <td>{{ plantmaintaining.userplant.name }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if plantmaintaining.date %}{{ plantmaintaining.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Soiltype</th>
                <td>{{ plantmaintaining.soiltype }}</td>
            </tr>
            <tr>
                <th>Watered</th>
                <td>{% if plantmaintaining.watered %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Humidity</th>
                <td>{{ plantmaintaining.humidity }}</td>
            </tr>
            <tr>
                <th>Temperature</th>
                <td>{{ plantmaintaining.temperature }}</td>
            </tr>
            <tr>
                <th>Luminosity</th>
                <td>{{ plantmaintaining.luminosity }}</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>{{ plantmaintaining.height }}</td>
            </tr>
            <tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('myplantmaintaining_index',{'id':plantmaintaining.userplant.id}) }}\"> {{ plantmaintaining.userplant.name }} history</a>
        </li>
        <li>
            <a href=\"{{ path('userplant_index')}}\">Back to my plant list</a>
        </li>
        <li>
            <a href=\"{{ path('plantmaintaining_edit', { 'id': plantmaintaining.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
    {% endif %}
{% endif %}
", "@Plant/plantmaintaining/show.html.twig", "C:\\wamp64\\www\\adfitness\\src\\PlantBundle\\Resources\\views\\plantmaintaining\\show.html.twig");
    }
}
