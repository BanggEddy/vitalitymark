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

/* admin/adminproducts/formedit.html.twig */
class __TwigTemplate_bf74e39579bd64fb38e6f689b8f1cfd1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/formedit.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/adminproducts/formedit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Édition d'un produit";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br>
<div class=\"container nature-card\">
<br>
    <h1>Édition d'un produit</h1>
    <br>
    <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_product", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"name\">Nom du produit</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"price\">Prix</label>
            <input type=\"number\" class=\"form-control\" id=\"price\" name=\"price\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "price", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"category\">Catégorie</label>
            <select class=\"form-control\" id=\"category\" name=\"category\">
                <option value=\"\">Sélectionner une catégorie</option>
                <option value=\"Produits frais\" ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "category", [], "any", false, false, false, 24) == "Produits frais")) {
            echo " selected ";
        }
        echo ">Produits frais</option>
                <option value=\"Épicerie\" ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25) == "Épicerie")) {
            echo " selected ";
        }
        echo ">Épicerie</option>
                <option value=\"Boulangerie\" ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26) == "Boulangerie")) {
            echo " selected ";
        }
        echo ">Boulangerie</option>
                <option value=\"Surgelés\" ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "category", [], "any", false, false, false, 27) == "Surgelés")) {
            echo " selected ";
        }
        echo ">Surgelés</option>
                <option value=\"Boissons\" ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "category", [], "any", false, false, false, 28) == "Boissons")) {
            echo " selected ";
        }
        echo ">Boissons</option>
                <option value=\"Produits d'hygiène et de beauté\" ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "category", [], "any", false, false, false, 29) == "Produits d'hygiène et de beauté")) {
            echo " selected ";
        }
        echo ">Produits d'hygiène et de beauté</option>
                <option value=\"Entretien ménager\" ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "category", [], "any", false, false, false, 30) == "Entretien ménager")) {
            echo " selected ";
        }
        echo ">Entretien ménager</option>
                <option value=\"Articles pour bébés et enfants\" ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "category", [], "any", false, false, false, 31) == "Articles pour bébés et enfants")) {
            echo " selected ";
        }
        echo ">Articles pour bébés et enfants</option>
                <option value=\"Produits de santé\" ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "category", [], "any", false, false, false, 32) == "Produits de santé")) {
            echo " selected ";
        }
        echo ">Produits de santé</option>
                <option value=\"Articles pour animaux de compagnie\" ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "category", [], "any", false, false, false, 33) == "Articles pour animaux de compagnie")) {
            echo " selected ";
        }
        echo ">Articles pour animaux de compagnie</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Image du produit</label>
            <input type=\"file\" class=\"form-control-file\" id=\"image\" name=\"image\">
            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "images", [], "any", false, false, false, 39)) {
            // line 40
            echo "                <small class=\"form-text text-muted\">Image actuelle : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "images", [], "any", false, false, false, 40), "html", null, true);
            echo "</small>
            ";
        } else {
            // line 42
            echo "                <small class=\"form-text text-muted\">Aucune image associée</small>
            ";
        }
        // line 44
        echo "        </div>
        <div class=\"form-group\">
            <label for=\"quantity\">Quantité disponible</label>
            <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "quantity", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Description</label>
            <textarea class=\"form-control\" id=\"description\" name=\"description\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), "html", null, true);
        echo "</textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-details\">Enregistrer</button>
        <br>
    </form>
    <br>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/adminproducts/formedit.html.twig";
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
        return array (  191 => 51,  184 => 47,  179 => 44,  175 => 42,  169 => 40,  167 => 39,  156 => 33,  150 => 32,  144 => 31,  138 => 30,  132 => 29,  126 => 28,  120 => 27,  114 => 26,  108 => 25,  102 => 24,  93 => 18,  86 => 14,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Édition d'un produit{% endblock %}

{% block body %}
<br>
<div class=\"container nature-card\">
<br>
    <h1>Édition d'un produit</h1>
    <br>
    <form action=\"{{ path('app_edit_product', {'id': product.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"name\">Nom du produit</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"{{ product.name }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"price\">Prix</label>
            <input type=\"number\" class=\"form-control\" id=\"price\" name=\"price\" value=\"{{ product.price }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"category\">Catégorie</label>
            <select class=\"form-control\" id=\"category\" name=\"category\">
                <option value=\"\">Sélectionner une catégorie</option>
                <option value=\"Produits frais\" {% if product.category == 'Produits frais' %} selected {% endif %}>Produits frais</option>
                <option value=\"Épicerie\" {% if product.category == 'Épicerie' %} selected {% endif %}>Épicerie</option>
                <option value=\"Boulangerie\" {% if product.category == 'Boulangerie' %} selected {% endif %}>Boulangerie</option>
                <option value=\"Surgelés\" {% if product.category == 'Surgelés' %} selected {% endif %}>Surgelés</option>
                <option value=\"Boissons\" {% if product.category == 'Boissons' %} selected {% endif %}>Boissons</option>
                <option value=\"Produits d'hygiène et de beauté\" {% if product.category == 'Produits d\\'hygiène et de beauté' %} selected {% endif %}>Produits d'hygiène et de beauté</option>
                <option value=\"Entretien ménager\" {% if product.category == 'Entretien ménager' %} selected {% endif %}>Entretien ménager</option>
                <option value=\"Articles pour bébés et enfants\" {% if product.category == 'Articles pour bébés et enfants' %} selected {% endif %}>Articles pour bébés et enfants</option>
                <option value=\"Produits de santé\" {% if product.category == 'Produits de santé' %} selected {% endif %}>Produits de santé</option>
                <option value=\"Articles pour animaux de compagnie\" {% if product.category == 'Articles pour animaux de compagnie' %} selected {% endif %}>Articles pour animaux de compagnie</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Image du produit</label>
            <input type=\"file\" class=\"form-control-file\" id=\"image\" name=\"image\">
            {% if product.images %}
                <small class=\"form-text text-muted\">Image actuelle : {{ product.images }}</small>
            {% else %}
                <small class=\"form-text text-muted\">Aucune image associée</small>
            {% endif %}
        </div>
        <div class=\"form-group\">
            <label for=\"quantity\">Quantité disponible</label>
            <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\" value=\"{{ product.quantity }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Description</label>
            <textarea class=\"form-control\" id=\"description\" name=\"description\">{{ product.description }}</textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-details\">Enregistrer</button>
        <br>
    </form>
    <br>
</div>
{% endblock %}
", "admin/adminproducts/formedit.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\admin\\adminproducts\\formedit.html.twig");
    }
}
