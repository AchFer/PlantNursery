<?php

/* @EcommerceEcommerce/produit/l.html.twig */
class __TwigTemplate_b160411da06225a38694ab66b5d37adae90d4057f0864d8c981b0d519f56f4e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "@EcommerceEcommerce/produit/l.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/produit/l.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EcommerceEcommerce/produit/l.html.twig", "C:\\wamp64\\www\\adfitness\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\produit\\l.html.twig");
    }
}
