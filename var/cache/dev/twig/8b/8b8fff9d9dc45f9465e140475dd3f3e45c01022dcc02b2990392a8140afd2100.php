<?php

/* @EcommerceEcommerce/produit/presentation.html.twig */
class __TwigTemplate_38570cb9aa8e13bd2d1e9a106612f4230eab6424d0a28d9327bb5f6cc4fdec87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EcommerceEcommerce/layout.html.twig", "@EcommerceEcommerce/produit/presentation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EcommerceEcommerce/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/produit/presentation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/produit/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 9
        echo twig_include($this->env, $context, "@EcommerceEcommerce/modules/navigation.html.twig");
        echo "
            </div>

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        <h5>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
                        <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                        <h4>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extention\ProduitExtention')->calcultva($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo "DT</h4>
                        ";
        // line 23
        if ( !$this->getAttribute(($context["panier"] ?? null), $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", array()), array(), "array", true, true)) {
            // line 24
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouteraupanier", array("id" => $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", array()))), "html", null, true);
            echo " \" method=\"get\">


                            <select name=\"qte\" class=\"span1\">
                                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                            </select>

                            <div>

                                <button  class=\"btn btn-primary\">Ajouter au panier</button>

                            </div>
                        </form>
                            ";
        } else {
            // line 40
            echo "                                <div>

                                    <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\" class=\"btn btn-primary\">Le produits est deja dans vitre panier</a>

                                </div>
                        ";
        }
        // line 46
        echo "                    </div>
                </div>


            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/produit/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  129 => 42,  125 => 40,  114 => 31,  103 => 29,  99 => 28,  91 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  66 => 15,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@EcommerceEcommerce/layout.html.twig' %}
{% block body%}



    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                {{ include('@EcommerceEcommerce/modules/navigation.html.twig') }}
            </div>

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"{{ produit.image.path }}\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>{{ produit.nom }}</h4>
                        <h5>{{ produit.categorie.nom }}</h5>
                        <p>{{ produit.description }}</p>
                        <h4>{{ produit.prix|tva(produit.tva.multiplicate) }}DT</h4>
                        {% if panier[produit.id] is not defined %}
                        <form action=\"{{ path('ajouteraupanier',{'id':produit.id}) }} \" method=\"get\">


                            <select name=\"qte\" class=\"span1\">
                                {% for i in 1..10 %}
                                <option value=\"{{ i }}\">{{ i }}</option>
                                {% endfor %}
                            </select>

                            <div>

                                <button  class=\"btn btn-primary\">Ajouter au panier</button>

                            </div>
                        </form>
                            {% else %}
                                <div>

                                    <a href=\"{{ path('panier') }}\" class=\"btn btn-primary\">Le produits est deja dans vitre panier</a>

                                </div>
                        {% endif %}
                    </div>
                </div>


            </div>
        </div>
    </div>


{% endblock %}
", "@EcommerceEcommerce/produit/presentation.html.twig", "C:\\wamp64\\www\\nursery\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\produit\\presentation.html.twig");
    }
}
