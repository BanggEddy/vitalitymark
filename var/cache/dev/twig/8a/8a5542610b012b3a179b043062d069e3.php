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
        background-color:#fff;
    }

    .product-image, .promo-image {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .promo-details h2, .product-details h2 {
        margin-top: 0;
    }
</style>
<br><br>
<div class=\"container\">
    <div class=\"row\">
        ";
        // line 29
        if (array_key_exists("product", $context)) {
            // line 30
            echo "            <div class=\"col-md-6\">
                <div class=\"border p-3\">
                    <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "images", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" class=\"img-fluid product-image image-transition\" alt=\"Image du produit\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"product-details\">
                    <h2>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</h2>
                    <p>Prix: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "price", [], "any", false, false, false, 38), "html", null, true);
            echo " €</p>
                    <p>Quantité disponible: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "quantity", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                    <p>Description:</p>
                    <p>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        } elseif (        // line 44
array_key_exists("promo", $context)) {
            // line 45
            echo "            <div class=\"col-md-6\">
                <div class=\"border p-3\">
                    <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 47, $this->source); })()), "idproduct", [], "any", false, false, false, 47), "images", [], "any", false, false, false, 47))), "html", null, true);
            echo "\" class=\"img-fluid promo-image image-transition\" alt=\"Image de la promotion\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"promo-details\">
                    <h2>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
            echo "</h2>
                    <p>Réduction: ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 53, $this->source); })()), "reduction", [], "any", false, false, false, 53), "html", null, true);
            echo "%</p>
                    <p>Date de début: ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 54, $this->source); })()), "dateDebut", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
            echo "</p>
                    <p>Date de fin: ";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 55, $this->source); })()), "dateFin", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
            echo "</p>
                    <p>Prix après promotion: ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 56, $this->source); })()), "priceafterpromo", [], "any", false, false, false, 56), "html", null, true);
            echo " €</p>
                    <p>Description:</p>
                    <p>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        // line 62
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
        return array (  173 => 62,  166 => 58,  161 => 56,  157 => 55,  153 => 54,  149 => 53,  145 => 52,  137 => 47,  133 => 45,  131 => 44,  125 => 41,  120 => 39,  116 => 38,  112 => 37,  104 => 32,  100 => 30,  98 => 29,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
        background-color:#fff;
    }

    .product-image, .promo-image {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .promo-details h2, .product-details h2 {
        margin-top: 0;
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
