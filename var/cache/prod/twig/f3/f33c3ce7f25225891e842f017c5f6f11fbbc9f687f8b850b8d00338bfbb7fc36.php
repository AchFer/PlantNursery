<?php

/* @EcommerceEcommerce/produit/recherche.html.twig */
class __TwigTemplate_f420b53c41c9afe1b6e95d0d8c0e975da154d789606fffcfb9ba2ed0f576fcd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<form method=\"POST\" action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercheproduit");
        echo "\" class=\"navbar-form form-search pull-right\">
   ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recherche", array()), 'widget');
        echo "
    <button type=\"submit\" class=\"btn\">Rechercher</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/produit/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EcommerceEcommerce/produit/recherche.html.twig", "C:\\wamp64\\www\\adfitness\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\produit\\recherche.html.twig");
    }
}
