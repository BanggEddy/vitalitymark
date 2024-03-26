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

/* accueil/indexproduit.html.twig */
class __TwigTemplate_748b28bc49f55d9cde3742c3f16c468f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/indexproduit.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/indexproduit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Détails du Produit ou de la Promotion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <style>
/* Styles pour les cards */
.nature-card {
    background-color: #e5f4e7;
    border: 2px solid #8fc580;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.nature-card .card-body {
    padding: 2rem;
}

.nature-card .card-title {
    color: #4e7d4e;
    font-size: 24px;
    margin-bottom: 10px;
}

.nature-card p {
    margin-bottom: 10px;
}

/* Hover effect */
.image-transition {
    transition: transform 0.3s ease-in-out;
}

.image-transition:hover {
    transform: scale(1.05);
}

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "    <br><br>
    <div class=\"container nature\">
        <div class=\"row\">
            ";
        // line 46
        if (array_key_exists("product", $context)) {
            // line 47
            echo "                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "images", [], "any", false, false, false, 49))), "html", null, true);
            echo "\" class=\"img-fluid product-image image-transition\" alt=\"Image du produit\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product-details nature-card\">
                        <h2 class=\"card-title\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</h2>
                        <p>Prix: ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55), "html", null, true);
            echo " €</p>
                        <p>Quantité disponible: ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "quantity", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
                        <p>Description:</p>
                        <p>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        } elseif (        // line 61
array_key_exists("promo", $context)) {
            // line 62
            echo "                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 64, $this->source); })()), "idproduct", [], "any", false, false, false, 64), "images", [], "any", false, false, false, 64))), "html", null, true);
            echo "\" class=\"img-fluid promo-image image-transition\" alt=\"Image de la promotion\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"promo-details nature-card\">
                        <h2 class=\"card-title\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</h2>
                        <p>Réduction: ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 70, $this->source); })()), "reduction", [], "any", false, false, false, 70), "html", null, true);
            echo "%</p>
                        <p>Date de début: ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 71, $this->source); })()), "dateDebut", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
            echo "</p>
                        <p>Date de fin: ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 72, $this->source); })()), "dateFin", [], "any", false, false, false, 72), "d/m/Y"), "html", null, true);
            echo "</p>
                        <p>Prix après promotion: ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 73, $this->source); })()), "priceafterpromo", [], "any", false, false, false, 73), "html", null, true);
            echo " €</p>
                        <p>Description:</p>
                        <p>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        // line 79
        echo "            <a href=\"/\" class=\"btn btn-details\">< Retour</a>
        </div>
    </div>

    <script>
        // Ajout d'un effet de transition sur les images au survol
        \$('.image-transition').hover(function() {
            \$(this).toggleClass('scale-up'); // Zoom au survol
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "accueil/indexproduit.html.twig";
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
        return array (  202 => 79,  195 => 75,  190 => 73,  186 => 72,  182 => 71,  178 => 70,  174 => 69,  166 => 64,  162 => 62,  160 => 61,  154 => 58,  149 => 56,  145 => 55,  141 => 54,  133 => 49,  129 => 47,  127 => 46,  122 => 43,  115 => 42,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block title %}Détails du Produit ou de la Promotion{% endblock %}

{% block stylesheets %}
    <style>
/* Styles pour les cards */
.nature-card {
    background-color: #e5f4e7;
    border: 2px solid #8fc580;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.nature-card .card-body {
    padding: 2rem;
}

.nature-card .card-title {
    color: #4e7d4e;
    font-size: 24px;
    margin-bottom: 10px;
}

.nature-card p {
    margin-bottom: 10px;
}

/* Hover effect */
.image-transition {
    transition: transform 0.3s ease-in-out;
}

.image-transition:hover {
    transform: scale(1.05);
}

    </style>
{% endblock %}

{% block body %}
    <br><br>
    <div class=\"container nature\">
        <div class=\"row\">
            {% if product is defined %}
                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"{{ asset('images/' ~ product.images) }}\" class=\"img-fluid product-image image-transition\" alt=\"Image du produit\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product-details nature-card\">
                        <h2 class=\"card-title\">{{ product.name }}</h2>
                        <p>Prix: {{ product.price }} €</p>
                        <p>Quantité disponible: {{ product.quantity }}</p>
                        <p>Description:</p>
                        <p>{{ product.description }}</p>
                    </div>
                </div>
            {% elseif promo is defined %}
                <div class=\"col-md-6\">
                    <div class=\"border p-3 nature-card\">
                        <img src=\"{{ asset('images/' ~ promo.idproduct.images) }}\" class=\"img-fluid promo-image image-transition\" alt=\"Image de la promotion\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"promo-details nature-card\">
                        <h2 class=\"card-title\">{{ promo.name }}</h2>
                        <p>Réduction: {{ promo.reduction }}%</p>
                        <p>Date de début: {{ promo.dateDebut|date('d/m/Y') }}</p>
                        <p>Date de fin: {{ promo.dateFin|date('d/m/Y') }}</p>
                        <p>Prix après promotion: {{ promo.priceafterpromo }} €</p>
                        <p>Description:</p>
                        <p>{{ promo.description }}</p>
                    </div>
                </div>
            {% endif %}
            <a href=\"/\" class=\"btn btn-details\">< Retour</a>
        </div>
    </div>

    <script>
        // Ajout d'un effet de transition sur les images au survol
        \$('.image-transition').hover(function() {
            \$(this).toggleClass('scale-up'); // Zoom au survol
        });
    </script>
{% endblock %}
", "accueil/indexproduit.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\accueil\\indexproduit.html.twig");
    }
}
