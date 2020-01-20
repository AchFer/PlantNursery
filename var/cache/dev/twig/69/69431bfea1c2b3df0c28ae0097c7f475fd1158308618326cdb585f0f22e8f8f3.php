<?php

/* @EcommerceEcommerce/panier/panier.html.twig */
class __TwigTemplate_b3ce25b220b40225e9c1ac3b5f662c279d18a837617f5656953ace954ea9c302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EcommerceEcommerce/layout.html.twig", "@EcommerceEcommerce/panier/panier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/panier/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/panier/panier.html.twig"));

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

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"span9\">
                    <h2>Votre parnier</h2>
                    <form>
                        <table class=\"table table-striped table-hover\">
                            <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 24
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) == 0)) {
            // line 25
            echo "                            <tr>
                            <td colspan=\"4\">Aucun article dans votre panier</td>
                            </tr>
                            ";
        } else {
            // line 29
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 30
                echo "                                <tr></tr>
                            <tr>
                                <form action=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouteraupanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo " \" method=\"get\">
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <select name=\"qte\" class=\"span1\" onchange=\"this.form.submit()\">
                                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 37
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" ";
                    if (($context["i"] == $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                                    </select>&nbsp;

                                    <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerpanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo "DT</td>
                                <td>";
                // line 44
                echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
                echo "DT</td>
                                    ";
                // line 45
                $context["pht"] = ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"));
                // line 46
                echo "                                    ";
                $context["pat"] = $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extention\ProduitExtention')->calcultva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array()));
                // line 47
                echo "                                </form>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                         ";
        }
        // line 51
        echo "                            </tbody>
                        </table>
                    </form>

                    <dl class=\"dl-horizontal pull-right\">
                        <dt> prixHT  :</dt>
                        <dd>";
        // line 57
        echo twig_escape_filter($this->env, ($context["totalHT"] ?? $this->getContext($context, "totalHT")), "html", null, true);
        echo " DT</dd>
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listtva"] ?? $this->getContext($context, "listtva")));
        foreach ($context['_seq'] as $context["_key"] => $context["tvaproduit"]) {
            // line 59
            echo "                        <dt>Valeur Tva :</dt>

                            <dd> ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvaproduit"], "valeur", array()), "html", null, true);
            echo "%</dd>

                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tvaproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
                        <dt>Total:</dt>
                        <dd>";
        // line 66
        echo twig_escape_filter($this->env, ($context["prixTTC"] ?? $this->getContext($context, "prixTTC")), "html", null, true);
        echo " DT</dd>
                    </dl>
                    <div class=\"clearfix\"></div>
                    <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                    <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ecommerce_homepage");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
                </div>

            </div>
        </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 70,  190 => 69,  184 => 66,  180 => 64,  171 => 61,  167 => 59,  163 => 58,  159 => 57,  151 => 51,  148 => 50,  140 => 47,  137 => 46,  135 => 45,  131 => 44,  127 => 43,  122 => 41,  118 => 39,  103 => 37,  99 => 36,  93 => 33,  89 => 32,  85 => 30,  80 => 29,  74 => 25,  72 => 24,  49 => 3,  40 => 2,  11 => 1,);
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

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"span9\">
                    <h2>Votre parnier</h2>
                    <form>
                        <table class=\"table table-striped table-hover\">
                            <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% if produits|length ==0 %}
                            <tr>
                            <td colspan=\"4\">Aucun article dans votre panier</td>
                            </tr>
                            {% else %}
                            {% for produit in produits %}
                                <tr></tr>
                            <tr>
                                <form action=\"{{ path('ajouteraupanier',{'id':produit.id}) }} \" method=\"get\">
                                <td>{{ produit.nom }}</td>
                                <td>
                                    <select name=\"qte\" class=\"span1\" onchange=\"this.form.submit()\">
                                        {% for i in 1..10 %}
                                        <option value=\"{{ i }}\" {% if i==panier[produit.id] %} selected=\"selected\"{% endif %}>{{ i }}</option>
                                    {% endfor %}
                                    </select>&nbsp;

                                    <a href=\"{{ path('supprimerpanier',{'id':produit.id}) }}\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>{{ produit.prix }}DT</td>
                                <td>{{ produit.prix * panier[produit.id] }}DT</td>
                                    {% set pht= produit.prix * panier[produit.id]  %}
                                    {% set pat= (produit.prix * panier[produit.id])|tva(produit.tva.multiplicate) %}
                                </form>
                            </tr>
                            {% endfor %}
                         {% endif %}
                            </tbody>
                        </table>
                    </form>

                    <dl class=\"dl-horizontal pull-right\">
                        <dt> prixHT  :</dt>
                        <dd>{{  totalHT}} DT</dd>
                        {% for tvaproduit in listtva %}
                        <dt>Valeur Tva :</dt>

                            <dd> {{ tvaproduit.valeur }}%</dd>

                       {% endfor %}

                        <dt>Total:</dt>
                        <dd>{{ prixTTC }} DT</dd>
                    </dl>
                    <div class=\"clearfix\"></div>
                    <a href=\"{{ path('livraison') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                    <a href=\"{{ path('ecommerce_homepage') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
                </div>

            </div>
        </div>


{% endblock %}
", "@EcommerceEcommerce/panier/panier.html.twig", "C:\\wamp64\\www\\nursery\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\panier\\panier.html.twig");
    }
}
