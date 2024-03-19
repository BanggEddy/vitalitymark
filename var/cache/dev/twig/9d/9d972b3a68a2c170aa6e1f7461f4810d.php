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
            box-shadow: 10px 10px 4px #7cdf7c; /* Ajout de l'ombre */
            max-width: 300px; /* Optionnel : limiter la largeur */
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
    </style>

    <h1>Promo index</h1>
    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_new");
        echo "\" class=\"btn btn-success\">Ajouter un produit en promotion</a>
    <br><br>
    <div class=\"row\">
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 60
            echo "            <div class=\"promo-card\">
                <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "images", [], "any", false, false, false, 61))), "html", null, true);
            echo "\" class=\"promo-image\">
                <div class=\"promo-details\">
                    <h3>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</h3>
                    <p class=\"promo-price\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "priceafterpromo", [], "any", false, false, false, 64), "html", null, true);
            echo " €</p>
                    <p>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "description", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
                    <p class=\"promo-quantity\">Quantité disponible: ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "quantity", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                    <p class=\"promo-category\">Catégorie: ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "category", [], "any", false, false, false, 67), "html", null, true);
            echo "</p>
                    <div class=\"promo-actions\">
                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir en détail</a>
                        <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Modifier</a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "            <div class=\"col-md-12\">
                <p>No records found</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return array (  188 => 79,  179 => 75,  169 => 70,  165 => 69,  160 => 67,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  139 => 61,  136 => 60,  131 => 59,  125 => 56,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
            box-shadow: 10px 10px 4px #7cdf7c; /* Ajout de l'ombre */
            max-width: 300px; /* Optionnel : limiter la largeur */
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
    </style>

    <h1>Promo index</h1>
    <a href=\"{{ path('app_promo_admin_new') }}\" class=\"btn btn-success\">Ajouter un produit en promotion</a>
    <br><br>
    <div class=\"row\">
        {% for promo in promos %}
            <div class=\"promo-card\">
                <img src=\"{{ asset('images/' ~ promo.images) }}\" class=\"promo-image\">
                <div class=\"promo-details\">
                    <h3>{{ promo.name }}</h3>
                    <p class=\"promo-price\">{{ promo.priceafterpromo }} €</p>
                    <p>{{ promo.description }}</p>
                    <p class=\"promo-quantity\">Quantité disponible: {{ promo.quantity }}</p>
                    <p class=\"promo-category\">Catégorie: {{ promo.category }}</p>
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
