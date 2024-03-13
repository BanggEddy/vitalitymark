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

/* admin/adminproducts/new.html.twig */
class __TwigTemplate_6014f0c1f25ca7ab336ac9093467b158 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/new.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/adminproducts/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un nouveau produit";
        
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
    <h1>Ajouter un nouveau produit</h1>
    <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_product");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"name\">Nom du produit:</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"price\">Prix:</label>
            <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"category\">Catégorie:</label>
            <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"quantity\">Quantité:</label>
            <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Image:</label>
            <input type=\"file\" id=\"image\" name=\"image\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Description:</label>
            <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\" required></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
    </form>
</div>>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/adminproducts/new.html.twig";
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
        return array (  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Ajouter un nouveau produit{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Ajouter un nouveau produit</h1>
    <form action=\"{{ path('app_create_product') }}\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"name\">Nom du produit:</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"price\">Prix:</label>
            <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"category\">Catégorie:</label>
            <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"quantity\">Quantité:</label>
            <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Image:</label>
            <input type=\"file\" id=\"image\" name=\"image\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Description:</label>
            <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\" required></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
    </form>
</div>>
{% endblock %}
", "admin/adminproducts/new.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\admin\\adminproducts\\new.html.twig");
    }
}
