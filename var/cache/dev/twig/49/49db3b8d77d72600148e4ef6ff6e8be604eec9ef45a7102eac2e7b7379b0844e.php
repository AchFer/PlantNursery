<?php

/* event/new.html.twig */
class __TwigTemplate_6a5e3dc3198a408b179b551c184547513422933dcc3db5d9fd822fedb4b65352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/new.html.twig"));

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
<div class=\"modal-content\">
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"modal-header\">
        <h1 style=\"color: #003147\"><b><i><center>Event creation</center></i></b></h1>
    </div>

    <div class=\"modal-body\">
        <div class=\"row\">
            <div class=\"form-group col-xs-5\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameE", array()), 'label', array("attr" => array("class" => "control-label"), "label" => "nameE : "));
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameE", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group col-xs-3\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateE", array()), 'label', array("attr" => array("class" => "control-label"), "label" => "dateE : "));
        echo "

            <div class=\"input-group date\">
                <div class=\"input-group-addon\">
                    <i class=\"fa fa-calendar\"></i>
                </div>
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateE", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-xs-5\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label', array("attr" => array("class" => "control-label"), "label" => "description : "));
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieuE", array()), 'label', array("attr" => array("class" => "control-label"), "label" => "lieuE : "));
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieuE", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbP", array()), 'label', array("attr" => array("class" => "control-label"), "label" => "nbP : "));
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbP", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

            </div>
    </div>

    </div>

    <button type=\"button\" class=\"btn btn-outline-danger\" >  <input type=\"submit\" value=\"Create\" /></button>
    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
            <button type=\"button\" class=\"btn btn-outline-danger\" ><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Back to the list</a></button>

    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  123 => 43,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  84 => 25,  75 => 19,  68 => 15,  64 => 14,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

<div class=\"modal-content\">
    {{ form_start(form) }}
    <div class=\"modal-header\">
        <h1 style=\"color: #003147\"><b><i><center>Event creation</center></i></b></h1>
    </div>

    <div class=\"modal-body\">
        <div class=\"row\">
            <div class=\"form-group col-xs-5\">
                {{ form_label(form.nameE, 'nameE : ',{'attr': {'class': 'control-label'}})  }}
                {{ form_widget(form.nameE,  {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group col-xs-3\">
            {{ form_label(form.dateE, 'dateE : ',{'attr': {'class': 'control-label'}}) }}

            <div class=\"input-group date\">
                <div class=\"input-group-addon\">
                    <i class=\"fa fa-calendar\"></i>
                </div>
                {{ form_widget(form.dateE, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-xs-5\">
                {{ form_label(form.description, 'description : ',{'attr': {'class': 'control-label'}})  }}
                {{ form_widget(form.description,  {'attr': {'class': 'form-control'}}) }}
                {{ form_label(form.lieuE, 'lieuE : ',{'attr': {'class': 'control-label'}})  }}
                {{ form_widget(form.lieuE,  {'attr': {'class': 'form-control'}}) }}
                {{ form_label(form.nbP, 'nbP : ',{'attr': {'class': 'control-label'}})  }}
                {{ form_widget(form.nbP,  {'attr': {'class': 'form-control'}}) }}

            </div>
    </div>

    </div>

    <button type=\"button\" class=\"btn btn-outline-danger\" >  <input type=\"submit\" value=\"Create\" /></button>
    {{ form_end(form) }}

    <ul>
            <button type=\"button\" class=\"btn btn-outline-danger\" ><a href=\"{{ path('event_index') }}\">Back to the list</a></button>

    </ul>
</div>
{% endblock %}
", "event/new.html.twig", "C:\\wamp64\\www\\nursery\\app\\Resources\\views\\event\\new.html.twig");
    }
}
