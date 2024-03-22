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

/* user/uservue/categorie.html.twig */
class __TwigTemplate_355b2a2fb9a4618a98890ef7438c8ea7 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/categorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/uservue/categorie.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produits de la catégorie ";
        echo twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Produits de la catégorie ";
        echo twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        ";
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 13
            echo "            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                        <p class=\"card-text\">Prix: ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19), "html", null, true);
            echo " €</p>
                        <a href=\"#\" class=\"btn btn-primary\">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        ";
        // line 27
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 28
            echo "            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                        <p class=\"card-text\">Prix après promo: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "priceAfterPromo", [], "any", false, false, false, 33), "html", null, true);
            echo " €</p>
                        <a href=\"#\" class=\"btn btn-primary\">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/uservue/categorie.html.twig";
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
        return array (  150 => 39,  138 => 33,  134 => 32,  130 => 31,  125 => 28,  120 => 27,  117 => 25,  105 => 19,  101 => 18,  97 => 17,  90 => 15,  86 => 13,  81 => 12,  74 => 8,  67 => 7,  53 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/user/uservue/categorie.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Produits de la catégorie {{ category }}{% endblock %}

{% block body %}
    <h1>Produits de la catégorie {{ category }}</h1>

    <div class=\"row\">
        {# Affichage des produits #}
        {% for product in products %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ product.images }}\" class=\"card-img-top\" alt=\"{{ product.name }}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ product.name }}</h5>
                        <p class=\"card-text\">{{ product.description }}</p>
                        <p class=\"card-text\">Prix: {{ product.price }} €</p>
                        <a href=\"#\" class=\"btn btn-primary\">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        {% endfor %}

        {# Affichage des promotions associées #}
        {% for promotion in promotions %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ promotion.name }}</h5>
                        <p class=\"card-text\">{{ promotion.description }}</p>
                        <p class=\"card-text\">Prix après promo: {{ promotion.priceAfterPromo }} €</p>
                        <a href=\"#\" class=\"btn btn-primary\">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "user/uservue/categorie.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\user\\uservue\\categorie.html.twig");
    }
}
