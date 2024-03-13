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
        echo "<div class=\"container\">
    <h1>Édition d'un produit</h1>
    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_product", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"name\">Nom du produit</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"price\">Prix</label>
            <input type=\"number\" class=\"form-control\" id=\"price\" name=\"price\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "price", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"category\">Catégorie</label>
            <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "category", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"quantity\">Quantité disponible</label>
            <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "quantity", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Description</label>
            <textarea class=\"form-control\" id=\"description\" name=\"description\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
    </form>
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
        return array (  111 => 27,  104 => 23,  97 => 19,  90 => 15,  83 => 11,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Édition d'un produit{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Édition d'un produit</h1>
    <form action=\"{{ path('app_edit_product', {'id': product.id}) }}\" method=\"post\">
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
            <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" value=\"{{ product.category }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"quantity\">Quantité disponible</label>
            <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\" value=\"{{ product.quantity }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Description</label>
            <textarea class=\"form-control\" id=\"description\" name=\"description\">{{ product.description }}</textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
    </form>
</div>
{% endblock %}
", "admin/adminproducts/formedit.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\admin\\adminproducts\\formedit.html.twig");
    }
}
