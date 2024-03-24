<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/promo_admin/index.html.twig */
class __TwigTemplate_51ff15b64e2b2cf75861620d5641f4bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "headeradmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promo_admin/index.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/promo_admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Promo index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .promo-card {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            background-color: #DBFFCA;
            border: 1px solid #ccc;
            box-shadow: 5px 5px 2px #7cdf7c; 
            max-width: 300px;
            transition: transform 0.3s ease; 
        }

        .promo-card:hover {
            transform: scale(1.05); 
            box-shadow: 8px 8px 4px #7cdf7c; 
            transition: 0.5s;
        }

        .promo-image {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .promo-details {
            margin-top: 10px;
        }

        .promo-price {
            font-size: 18px;
            font-weight: bold;
        }

        .promo-quantity {
            color: #28a745;
        }

        .promo-category {
            color: #6c757d;
        }

        .promo-actions a {
            margin-right: 10px;
        }

        .promo-actions a:hover {
            box-shadow: 2px 2px 2px #7cdf7c; 
            transform: translateY(-1px);
            transition:0.5s 
        }
    </style>

    <h1>Liste des articles en promotions</h1>
    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_new");
        echo "\" class=\"btn btn-success\">Ajouter un produit en promotion</a>
    <br><br>
    <div class=\"row\">
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 72, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 73
            echo "            <div class=\"promo-card\">
                <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "images", [], "any", false, false, false, 74))), "html", null, true);
            echo "\" class=\"promo-image\">
                <div class=\"promo-details\">
                            <h2 class=\"promo-title\" style=\"font-weight: bold;\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 76), "html", null, true);
            echo "</h2>
                            ";
            // line 77
            $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d");
            // line 78
            echo "                            ";
            $context["remainingDays"] = ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 78), "U") - twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 78, $this->source); })()), "U")) / (24 * 3600));
            // line 79
            echo "                            ";
            if (((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 79, $this->source); })()) > 0)) {
                // line 80
                echo "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Nombre de jours restants: ";
                echo twig_escape_filter($this->env, twig_round((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 80, $this->source); })()), 0, "floor"), "html", null, true);
                echo "</p>
                            ";
            } else {
                // line 82
                echo "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            ";
            }
            // line 84
            echo "                            <p class=\"promo-description\">Quantité disponible: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getQuantity", [], "method", false, false, false, 84), "html", null, true);
            echo "</p>
                            <p class=\"promo-description\" style=\"font-weight: bold;color:red;\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getReduction", [], "method", false, false, false, 85), "html", null, true);
            echo " % de réduction</p>
                            <p class=\"promo-price\">Prix après promotion: ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "method", false, false, false, 86), "html", null, true);
            echo " €</p>
                    <div class=\"promo-actions\">
                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir en détail</a>
                        <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Modifier</a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "            <div class=\"col-md-12\">
                <p>No records found</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/promo_admin/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  216 => 98,  207 => 94,  197 => 89,  193 => 88,  188 => 86,  184 => 85,  179 => 84,  175 => 82,  169 => 80,  166 => 79,  163 => 78,  161 => 77,  157 => 76,  152 => 74,  149 => 73,  144 => 72,  138 => 69,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Promo index{% endblock %}

{% block body %}
    <style>
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .promo-card {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            background-color: #DBFFCA;
            border: 1px solid #ccc;
            box-shadow: 5px 5px 2px #7cdf7c; 
            max-width: 300px;
            transition: transform 0.3s ease; 
        }

        .promo-card:hover {
            transform: scale(1.05); 
            box-shadow: 8px 8px 4px #7cdf7c; 
            transition: 0.5s;
        }

        .promo-image {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .promo-details {
            margin-top: 10px;
        }

        .promo-price {
            font-size: 18px;
            font-weight: bold;
        }

        .promo-quantity {
            color: #28a745;
        }

        .promo-category {
            color: #6c757d;
        }

        .promo-actions a {
            margin-right: 10px;
        }

        .promo-actions a:hover {
            box-shadow: 2px 2px 2px #7cdf7c; 
            transform: translateY(-1px);
            transition:0.5s 
        }
    </style>

    <h1>Liste des articles en promotions</h1>
    <a href=\"{{ path('app_promo_admin_new') }}\" class=\"btn btn-success\">Ajouter un produit en promotion</a>
    <br><br>
    <div class=\"row\">
        {% for promo in promos %}
            <div class=\"promo-card\">
                <img src=\"{{ asset('images/' ~ promo.images) }}\" class=\"promo-image\">
                <div class=\"promo-details\">
                            <h2 class=\"promo-title\" style=\"font-weight: bold;\">{{ promo.getName() }}</h2>
                            {% set now = 'now'|date('Y-m-d') %}
                            {% set remainingDays = (promo.getDateFin()|date('U') - now|date('U')) / (24 * 3600) %}
                            {% if remainingDays > 0 %}
                                <p class=\"promo-description\" style=\"font-weight: bold;\">Nombre de jours restants: {{ remainingDays|round(0, 'floor') }}</p>
                            {% else %}
                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            {% endif %}
                            <p class=\"promo-description\">Quantité disponible: {{ promo.getQuantity() }}</p>
                            <p class=\"promo-description\" style=\"font-weight: bold;color:red;\">{{ promo.getReduction() }} % de réduction</p>
                            <p class=\"promo-price\">Prix après promotion: {{ promo.getPriceafterpromo() }} €</p>
                    <div class=\"promo-actions\">
                        <a href=\"{{ path('app_promo_admin_show', {'id': promo.id}) }}\" class=\"btn btn-primary\">Voir en détail</a>
                        <a href=\"{{ path('app_promo_admin_edit', {'id': promo.id}) }}\" class=\"btn btn-info\">Modifier</a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-md-12\">
                <p>No records found</p>
            </div>
        {% endfor %}
    </div>

{% endblock %}
", "admin/promo_admin/index.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\admin\\promo_admin\\index.html.twig");
    }
}
