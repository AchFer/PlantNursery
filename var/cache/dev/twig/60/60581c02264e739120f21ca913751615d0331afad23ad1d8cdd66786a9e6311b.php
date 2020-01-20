<?php

/* @EcommerceEcommerce/Default/index.html.twig */
class __TwigTemplate_a73418f688c0e61dcc0f71407cc50c140d6a512fef8bcbae6df58fb3b1f3c1ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EcommerceEcommerce/layout.html.twig", "@EcommerceEcommerce/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/Default/index.html.twig"));

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
    <iframe src=\"https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2FPipini%25C3%25A9re-100747938036540%2F%3Fmodal%3Dadmin_todo_tour&layout=button_count&size=small&appId=314998105776905&width=91&height=20\" width=\"91\" height=\"20\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>
    <div class=\"container\">

        <div class=\"row\">


            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "                <div class=\"span3 pull-left\">
                    ";
            // line 12
            echo twig_include($this->env, $context, "@UtilisateurUtilisateur/modules/utilisateurconnecte.html.twig");
            echo "
                </div>

            ";
        } else {
            // line 16
            echo "                <div class=\"span3\">
                    ";
            // line 17
            echo twig_include($this->env, $context, "@UtilisateurUtilisateur/modules/usernoncon.html.twig");
            echo "
                </div>
            ";
        }
        // line 20
        echo "

                <ul class=\"thumbnails\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">

                                <div class=\"caption\">
                                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "alt", array()))), "html", null, true);
            echo "\" width=\"500\" height=\"500\">
                                    <h4>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</h4>   <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "alt", array()), "html", null, true);
            echo "</h4>
                                    <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extention\ProduitExtention')->calcultva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
            echo "DT/p>
                                        <a class=\"btn btn-primary\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                        ";
            // line 32
            if ( !$this->getAttribute(($context["panier"] ?? null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                // line 33
                echo "                                        <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouteraupanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Ajouter au panier</a>
                                        ";
            } else {
                // line 34
                echo " <p>aucun produit</p>
                                    ";
            }
            // line 36
            echo "                                </div>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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

            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  124 => 36,  120 => 34,  114 => 33,  112 => 32,  108 => 31,  104 => 30,  98 => 29,  94 => 28,  88 => 24,  84 => 23,  79 => 20,  73 => 17,  70 => 16,  63 => 12,  60 => 11,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
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

    <iframe src=\"https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2FPipini%25C3%25A9re-100747938036540%2F%3Fmodal%3Dadmin_todo_tour&layout=button_count&size=small&appId=314998105776905&width=91&height=20\" width=\"91\" height=\"20\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>
    <div class=\"container\">

        <div class=\"row\">


            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <div class=\"span3 pull-left\">
                    {{  include ('@UtilisateurUtilisateur/modules/utilisateurconnecte.html.twig') }}
                </div>

            {% else %}
                <div class=\"span3\">
                    {{ include ('@UtilisateurUtilisateur/modules/usernoncon.html.twig') }}
                </div>
            {% endif %}


                <ul class=\"thumbnails\">
                    {% for produit in produits %}
                        <li class=\"span3\">
                            <div class=\"thumbnail\">

                                <div class=\"caption\">
                                    <img src=\"{{ asset('uploads/'~ produit.image.alt)}}\" width=\"500\" height=\"500\">
                                    <h4>{{  produit.nom }}</h4>   <h4>{{ produit.image.alt  }}</h4>
                                    <p>{{ produit.prix|tva(produit.tva.multiplicate) }}DT/p>
                                        <a class=\"btn btn-primary\" href=\"{{ path('presentation',{'id':produit.id}) }}\">Plus d'infos</a>
                                        {% if panier[produit.id] is not defined %}
                                        <a class=\"btn btn-success\" href=\"{{ path('ajouteraupanier',{'id':produit.id}) }}\">Ajouter au panier</a>
                                        {% else %} <p>aucun produit</p>
                                    {% endif %}
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

            </div>
        </div>
    </div>


{% endblock %}
", "@EcommerceEcommerce/Default/index.html.twig", "C:\\wamp64\\www\\adfitness\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
