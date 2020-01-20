<?php

/* @EcommerceEcommerce/produit/produits.html.twig */
class __TwigTemplate_eebba16ad99a532393aa0156658751c57b34de11fb101533e96dda4fb3291a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EcommerceEcommerce/layout.html.twig", "@EcommerceEcommerce/produit/produits.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/produit/produits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/produit/produits.html.twig"));

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

                <div class=\"span3\">
                    ";
        // line 12
        echo twig_include($this->env, $context, "@EcommerceEcommerce/modules/navigation.html.twig");
        echo "
                      ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            echo "
                        ";
            // line 15
            $this->loadTemplate("@UtilisateurUtilisateur/modules/utilisateurconnecte.html.twig", "@EcommerceEcommerce/produit/produits.html.twig", 15)->display($context);
            // line 16
            echo "
                ";
        } else {
            // line 18
            echo "
                        ";
            // line 19
            $this->loadTemplate("@UtilisateurUtilisateur/modules/usernoncon.html.twig", "@EcommerceEcommerce/produit/produits.html.twig", 19)->display($context);
            // line 20
            echo "
                ";
        }
        // line 22
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceEcommerceBundle:Panier:menupanier"));
        echo "
            </div>

            <div class=\"span9\">
                ";
        // line 26
        if ((twig_length_filter($this->env, ($context["produits"] ?? $this->getContext($context, "produits"))) != 0)) {
            // line 27
            echo "                <ul class=\"thumbnails\">
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 29
                echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
                echo "\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                                <div class=\"caption\">
                                    <h4>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                                    <p>";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extention\ProduitExtention')->calcultva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo "DT</p>
                                    <a class=\"btn btn-primary\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                    ";
                // line 36
                if ( !$this->getAttribute(($context["panier"] ?? null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 37
                    echo "                                    <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouteraupanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">Ajouter au panier</a>
                                    ";
                }
                // line 39
                echo "                                </div>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>
                ";
        } else {
            // line 56
            echo " <p>aucun produit</p>
                ";
        }
        // line 58
        echo "            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/produit/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  155 => 56,  139 => 43,  130 => 39,  124 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  105 => 31,  101 => 29,  97 => 28,  94 => 27,  92 => 26,  84 => 22,  80 => 20,  78 => 19,  75 => 18,  71 => 16,  69 => 15,  66 => 14,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
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

                <div class=\"span3\">
                    {{ include('@EcommerceEcommerce/modules/navigation.html.twig') }}
                      {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                        {% include ('@UtilisateurUtilisateur/modules/utilisateurconnecte.html.twig')%}

                {% else %}

                        {% include ('@UtilisateurUtilisateur/modules/usernoncon.html.twig')%}

                {% endif %}
                    {{ render(controller('EcommerceEcommerceBundle:Panier:menupanier')) }}
            </div>

            <div class=\"span9\">
                {% if produits|length !=0 %}
                <ul class=\"thumbnails\">
                    {% for produit in produits %}
                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"{{ produit.image.path }}\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                                <div class=\"caption\">
                                    <h4>{{  produit.nom }}</h4>
                                    <p>{{ produit.prix|tva(produit.tva.multiplicate) }}DT</p>
                                    <a class=\"btn btn-primary\" href=\"{{ path('presentation',{'id':produit.id}) }}\">Plus d'infos</a>
                                    {% if panier[produit.id] is not defined %}
                                    <a class=\"btn btn-success\" href=\"{{ path('ajouteraupanier',{'id':produit.id}) }}\">Ajouter au panier</a>
                                    {% endif%}
                                </div>
                            </div>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>
                {% else %} <p>aucun produit</p>
                {% endif %}
            </div>
        </div>
    </div>


{% endblock %}
", "@EcommerceEcommerce/produit/produits.html.twig", "C:\\wamp64\\www\\nursery\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\produit\\produits.html.twig");
    }
}
