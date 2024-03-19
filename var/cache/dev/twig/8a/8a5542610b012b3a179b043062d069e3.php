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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .product-details, .promo-details {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
        margin-bottom: 20px;
    }

    .product-image, .promo-image {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .promo-details h2, .product-details h2 {
        margin-top: 0;
    }

    /* CSS pour la transition de l'image */
    .image-transition {
        transition: transform 0.3s ease-in-out;
    }

    .image-transition:hover {
        transform: scale(1.1); /* Zoom au survol */
    }
</style>
<br><br>
<div class=\"container\">
    <div class=\"row\">
        ";
        // line 37
        if (array_key_exists("product", $context)) {
            // line 38
            echo "            <div class=\"col-md-6\">
                <div class=\"border p-3\">
                    <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "images", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" class=\"img-fluid product-image image-transition\" alt=\"Image du produit\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"product-details\">
                    <h2>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</h2>
                    <p>Prix: ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "price", [], "any", false, false, false, 46), "html", null, true);
            echo " €</p>
                    <p>Quantité disponible: ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "quantity", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                    <p>Description:</p>
                    <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        } elseif (        // line 52
array_key_exists("promo", $context)) {
            // line 53
            echo "            <div class=\"col-md-6\">
                <div class=\"border p-3\">
                    <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 55, $this->source); })()), "idproduct", [], "any", false, false, false, 55), "images", [], "any", false, false, false, 55))), "html", null, true);
            echo "\" class=\"img-fluid promo-image image-transition\" alt=\"Image de la promotion\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"promo-details\">
                    <h2>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</h2>
                    <p>Réduction: ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 61, $this->source); })()), "reduction", [], "any", false, false, false, 61), "html", null, true);
            echo "%</p>
                    <p>Date de début: ";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 62, $this->source); })()), "dateDebut", [], "any", false, false, false, 62), "d/m/Y"), "html", null, true);
            echo "</p>
                    <p>Date de fin: ";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 63, $this->source); })()), "dateFin", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true);
            echo "</p>
                    <p>Prix après promotion: ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 64, $this->source); })()), "priceafterpromo", [], "any", false, false, false, 64), "html", null, true);
            echo " €</p>
                    <p>Description:</p>
                    <p>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        // line 70
        echo "                            <a class=\"nav-link\" href=\"/\">< Retour</a>

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
        return array (  181 => 70,  174 => 66,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  145 => 55,  141 => 53,  139 => 52,  133 => 49,  128 => 47,  124 => 46,  120 => 45,  112 => 40,  108 => 38,  106 => 37,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block title %}Détails du Produit ou de la Promotion{% endblock %}

{% block body %}
<style>
    .product-details, .promo-details {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
        margin-bottom: 20px;
    }

    .product-image, .promo-image {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .promo-details h2, .product-details h2 {
        margin-top: 0;
    }

    /* CSS pour la transition de l'image */
    .image-transition {
        transition: transform 0.3s ease-in-out;
    }

    .image-transition:hover {
        transform: scale(1.1); /* Zoom au survol */
    }
</style>
<br><br>
<div class=\"container\">
    <div class=\"row\">
        {% if product is defined %}
            <div class=\"col-md-6\">
                <div class=\"border p-3\">
                    <img src=\"{{ asset('images/' ~ product.images) }}\" class=\"img-fluid product-image image-transition\" alt=\"Image du produit\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"product-details\">
                    <h2>{{ product.name }}</h2>
                    <p>Prix: {{ product.price }} €</p>
                    <p>Quantité disponible: {{ product.quantity }}</p>
                    <p>Description:</p>
                    <p>{{ product.description }}</p>
                </div>
            </div>
        {% elseif promo is defined %}
            <div class=\"col-md-6\">
                <div class=\"border p-3\">
                    <img src=\"{{ asset('images/' ~ promo.idproduct.images) }}\" class=\"img-fluid promo-image image-transition\" alt=\"Image de la promotion\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"promo-details\">
                    <h2>{{ promo.name }}</h2>
                    <p>Réduction: {{ promo.reduction }}%</p>
                    <p>Date de début: {{ promo.dateDebut|date('d/m/Y') }}</p>
                    <p>Date de fin: {{ promo.dateFin|date('d/m/Y') }}</p>
                    <p>Prix après promotion: {{ promo.priceafterpromo }} €</p>
                    <p>Description:</p>
                    <p>{{ promo.description }}</p>
                </div>
            </div>
        {% endif %}
                            <a class=\"nav-link\" href=\"/\">< Retour</a>

    </div>
    
</div>

<script>
    // Ajout d'un effet de transition sur les images au survol
    \$('.image-transition').hover(function() {
        \$(this).toggleClass('scale-up'); // Zoom au survol
    });
</script>
{% endblock %}
", "accueil/indexproduit.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\accueil\\indexproduit.html.twig");
    }
}
