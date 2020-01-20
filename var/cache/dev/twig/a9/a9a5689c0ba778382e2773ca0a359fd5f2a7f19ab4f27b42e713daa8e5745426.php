<?php

/* @Plant/plant/index2.html.twig */
class __TwigTemplate_b651f26ea6b28d6354247bacc1af56be54c23599fe28d92f923ca5adee0a53ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Plant/plant/index2.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Plant/plant/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Plant/plant/index2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   <table>
       <tr>
           <td></center>

    <div class=\"sidebar-search\">
    <div class=\"input-group custom-search-form\">
        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search...\">
    </div>
    <!-- /input-group -->
    </div>
    <ul class=\"nav\" id=\"side-menu\">
        <li>
            <a href=\"#\"> <span class=\"fa arrow\"></span></a>
            <ul class=\"nav nav-second-level\" id=\"entitiesNav\" >
            </ul>
        </li>
    </ul>
               <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           </td>
<td>
           <center>
    <table>
        <thead>
        <tr>
            <th>";
        // line 30
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")), "Plantname", "plantname");
        echo "</th>
            <th>";
        // line 31
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")), "Binomialname", "binomialname");
        echo "</th>
            <th>Clades</th>
            <th>";
        // line 33
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")), "Order", "plantorder");
        echo " </th>
            <th>";
        // line 34
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")), "Family", "family");
        echo " </th>
            <th>";
        // line 35
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")), "Subfamily", "subfamily");
        echo "</th>
            <th>";
        // line 36
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")), "Tribe", "tribe");
        echo "</th>
            <th>";
        // line 37
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")), "Genus", "genus");
        echo "</th>
            <th>";
        // line 38
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")), "Species", "spacies");
        echo "</th>
            <th>Watering in sandy soil</th>
            <th>Watering in clay soil</th>
            <th>Photo</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <center><h1>Plants list (";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")), "getTotalItemCount", array()), "html", null, true);
        echo ")</h1>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")));
        foreach ($context['_seq'] as $context["_key"] => $context["plant"]) {
            // line 48
            echo "            <tr>
                <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plant_show", array("id" => $this->getAttribute($context["plant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "plantname", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "binomialname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "clade1", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "clade2", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "clade3", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "plantorder", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "family", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "subfamily", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "tribe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "genus", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["plant"], "species", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["plant"], "wateringsandysoil", array()) . " time every ") . $this->getAttribute($context["plant"], "frequencywateringsandysoil", array())) . " ") . $this->getAttribute($context["plant"], "periodofwateringsandysoil", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["plant"], "wateringclaysoil", array()) . " time every ") . $this->getAttribute($context["plant"], "frequencywateringclaysoil", array())) . " ") . $this->getAttribute($context["plant"], "periodofwateringclaysoil", array())), "html", null, true);
            echo "</td>
                <td> ";
            // line 60
            if ( !twig_test_empty($this->getAttribute($context["plant"], "photo", array()))) {
                // line 61
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Uploads/Images/" . $this->getAttribute($context["plant"], "photo", array()))), "html", null, true);
                echo "\" >
                    ";
            }
            // line 63
            echo "                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plant_show", array("id" => $this->getAttribute($context["plant"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        ";
            // line 69
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 70
                echo "                            <li>
                                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plant_edit", array("id" => $this->getAttribute($context["plant"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>
                        ";
            }
            // line 74
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </tbody>
        </td>
        </tr>
    </table>
    ";
        // line 83
        echo "    <div class=\"navigation\">
        ";
        // line 84
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["plants"]) ? $context["plants"] : $this->getContext($context, "plants")));
        echo "
    </div>
    <ul>
        ";
        // line 87
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 88
            echo "            <li>
                <a href=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plant_new");
            echo "\">Create a new plant</a>
            </li>
        ";
        }
        // line 92
        echo "
    </ul>
   </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 2;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search");
        echo "\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                entitySelector.append('<a href=\"/Nursery_v0.2/web/plant/plant/'+id+'/show\">'+value+'</a><br>');
                                            } else {
                                                entitySelector.append(\"<li class='errorLi'>\"+value+\"</li>\");
                                            }

                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Plant/plant/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 115,  285 => 98,  276 => 97,  263 => 92,  257 => 89,  254 => 88,  252 => 87,  246 => 84,  243 => 83,  237 => 78,  228 => 74,  222 => 71,  219 => 70,  217 => 69,  212 => 67,  206 => 63,  200 => 61,  198 => 60,  194 => 59,  190 => 58,  186 => 57,  182 => 56,  178 => 55,  174 => 54,  170 => 53,  166 => 52,  158 => 51,  154 => 50,  148 => 49,  145 => 48,  141 => 47,  137 => 46,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  101 => 31,  97 => 30,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" />
{% endblock %}
{% block body %}
   <table>
       <tr>
           <td></center>

    <div class=\"sidebar-search\">
    <div class=\"input-group custom-search-form\">
        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search...\">
    </div>
    <!-- /input-group -->
    </div>
    <ul class=\"nav\" id=\"side-menu\">
        <li>
            <a href=\"#\"> <span class=\"fa arrow\"></span></a>
            <ul class=\"nav nav-second-level\" id=\"entitiesNav\" >
            </ul>
        </li>
    </ul>
               <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           </td>
<td>
           <center>
    <table>
        <thead>
        <tr>
            <th>{{ knp_pagination_sortable(plants, 'Plantname', 'plantname') }}</th>
            <th>{{ knp_pagination_sortable(plants, 'Binomialname', 'binomialname') }}</th>
            <th>Clades</th>
            <th>{{ knp_pagination_sortable(plants, 'Order', 'plantorder') }} </th>
            <th>{{ knp_pagination_sortable(plants, 'Family', 'family') }} </th>
            <th>{{ knp_pagination_sortable(plants, 'Subfamily', 'subfamily') }}</th>
            <th>{{ knp_pagination_sortable(plants, 'Tribe', 'tribe') }}</th>
            <th>{{ knp_pagination_sortable(plants, 'Genus', 'genus') }}</th>
            <th>{{ knp_pagination_sortable(plants, 'Species', 'spacies') }}</th>
            <th>Watering in sandy soil</th>
            <th>Watering in clay soil</th>
            <th>Photo</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <center><h1>Plants list ({{ plants.getTotalItemCount }})</h1>
        {% for plant in plants %}
            <tr>
                <td><a href=\"{{ path('plant_show', { 'id': plant.id }) }}\">{{ plant.plantname }}</a></td>
                <td>{{ plant.binomialname }}</td>
                <td>{{ plant.clade1 }} {{ plant.clade2 }} {{ plant.clade3 }}</td>
                <td>{{ plant.plantorder }}</td>
                <td>{{ plant.family }}</td>
                <td>{{ plant.subfamily }}</td>
                <td>{{ plant.tribe }}</td>
                <td>{{ plant.genus }}</td>
                <td>{{ plant.species }}</td>
                <td>{{ plant.wateringsandysoil ~ \" time every \" ~ plant.frequencywateringsandysoil ~\" \"~ plant.periodofwateringsandysoil}}</td>
                <td>{{ plant.wateringclaysoil  ~ \" time every \" ~ plant.frequencywateringclaysoil ~\" \"~ plant.periodofwateringclaysoil}}</td>
                <td> {% if plant.photo is not empty %}
                        <img src=\"{{ asset('Uploads/Images/' ~ plant.photo ) }}\" >
                    {% endif %}
                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('plant_show', { 'id': plant.id }) }}\">show</a>
                        </li>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li>
                                <a href=\"{{ path('plant_edit', { 'id': plant.id }) }}\">edit</a>
                            </li>
                        {% endif %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
        </td>
        </tr>
    </table>
    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(plants) }}
    </div>
    <ul>
        {% if is_granted('ROLE_ADMIN') %}
            <li>
                <a href=\"{{ path('plant_new') }}\">Create a new plant</a>
            </li>
        {% endif %}

    </ul>
   </table>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 2;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('ajax_search') }}\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                entitySelector.append('<a href=\"/Nursery_v0.2/web/plant/plant/'+id+'/show\">'+value+'</a><br>');
                                            } else {
                                                entitySelector.append(\"<li class='errorLi'>\"+value+\"</li>\");
                                            }

                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
{% endblock %}
", "@Plant/plant/index2.html.twig", "C:\\wamp64\\www\\adfitness\\src\\PlantBundle\\Resources\\views\\plant\\index2.html.twig");
    }
}
