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

/* accueil/index.html.twig */
class __TwigTemplate_1b2e8f07a943e095b43aa25f223f207d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AccueilController!";
        
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
.product-card {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #DBFFCA;
    border: 1px solid #ccc;
    box-shadow: 10px 10px 4px #7cdf7c; 
}

.product-image {
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.product-details {
    margin-top: 10px;
}

.product-price {
    font-size: 18px;
    font-weight: bold;
}

.product-quantity {
    color: #28a745;
}

.product-category {
    color: #6c757d;
}
</style>

<div class=\"container\">
<br>
    <h1>Liste des produits</h1>
<br>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <h2> En ce moment</h2>
                <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cardfront.png"), "html", null, true);
        echo "\" alt=\"";
        echo "photo";
        echo "\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>La sélection du moment</h3>
                    <p>Découvrez nos meilleures promotions, nos dernières nouveautés ou nos plus grands succès que nous avons sélectionnés.</p>
                    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary\">J'en profite</a>
                </div>
            </div>
        </div>
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 61
            echo "        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 63))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</h3>
                    <p class=\"product-price\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66), "html", null, true);
            echo " €</p>
                    <p>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 67), "html", null, true);
            echo "</p>
                    <p class=\"product-quantity\">Quantité disponible: ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
                    <p class=\"product-category\">Catégorie: ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "accueil/index.html.twig";
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
        return array (  179 => 74,  168 => 69,  164 => 68,  160 => 67,  156 => 66,  152 => 65,  145 => 63,  141 => 61,  137 => 60,  130 => 56,  121 => 52,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block title %}Hello AccueilController!{% endblock %}

{% block body %}
<style>
.product-card {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #DBFFCA;
    border: 1px solid #ccc;
    box-shadow: 10px 10px 4px #7cdf7c; 
}

.product-image {
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.product-details {
    margin-top: 10px;
}

.product-price {
    font-size: 18px;
    font-weight: bold;
}

.product-quantity {
    color: #28a745;
}

.product-category {
    color: #6c757d;
}
</style>

<div class=\"container\">
<br>
    <h1>Liste des produits</h1>
<br>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <h2> En ce moment</h2>
                <img src=\"{{ asset('images/cardfront.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>La sélection du moment</h3>
                    <p>Découvrez nos meilleures promotions, nos dernières nouveautés ou nos plus grands succès que nous avons sélectionnés.</p>
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\">J'en profite</a>
                </div>
            </div>
        </div>
        {% for product in products %}
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"{{ asset('images/' ~ product.images) }}\" alt=\"{{ product.name }}\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>{{ product.name }}</h3>
                    <p class=\"product-price\">{{ product.price }} €</p>
                    <p>{{ product.description }}</p>
                    <p class=\"product-quantity\">Quantité disponible: {{ product.quantity }}</p>
                    <p class=\"product-category\">Catégorie: {{ product.category }}</p>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "accueil/index.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\accueil\\index.html.twig");
    }
}
