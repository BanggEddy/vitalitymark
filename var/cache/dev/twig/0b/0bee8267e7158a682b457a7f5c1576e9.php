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
            'stylesheets' => [$this, 'block_stylesheets'],
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
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #eaf5e1; /* Couleur verte pâle */
            font-family: 'Arial', sans-serif; /* Police de caractère */
        }

        .container {
            background-color: #fff; /* Fond blanc */
            padding: 20px;
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
            margin-top: 50px; /* Espace en haut */
            transition: margin-top 0.3s ease; /* Transition de l'animation */
        }

        .container:hover {
            margin-top: 40px; /* Déplacement vers le haut au survol */
        }

        h1 {
            text-align: center; /* Centré */
        }

        label {
            color: #4caf50; /* Vert foncé */
        }

        .form-group input {
            border: 1px solid #4caf50; /* Bordure verte */
            transition: transform 0.4s ease; /* Transition de l'animation */
            padding: 10px; /* Ajout de marge interne pour éviter les chevauchements */
            margin-bottom: 20px; /* Espacement entre les champs */
        }

        .form-group input:focus {
            transform: translateY(0); /* Annuler le déplacement vers le haut lorsqu'il est sélectionné */
        }

        .form-group input:hover {
            transform: translateY(-5px); /* Déplacement vers le haut au survol */
        }

        .btn-primary {
            background-color: #4caf50; /* Fond vert */
            border-color: #4caf50; /* Bordure verte */
        }

        .btn-primary:hover {
            background-color: #388e3c; /* Fond vert foncé au survol */
            border-color: #388e3c; /* Bordure verte foncée au survol */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "<div class=\"container\">
    <h1>Ajouter un nouveau produit</h1>
    <form action=\"";
        // line 66
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
</div>
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
        return array (  147 => 66,  143 => 64,  136 => 63,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Ajouter un nouveau produit{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body {
            background-color: #eaf5e1; /* Couleur verte pâle */
            font-family: 'Arial', sans-serif; /* Police de caractère */
        }

        .container {
            background-color: #fff; /* Fond blanc */
            padding: 20px;
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
            margin-top: 50px; /* Espace en haut */
            transition: margin-top 0.3s ease; /* Transition de l'animation */
        }

        .container:hover {
            margin-top: 40px; /* Déplacement vers le haut au survol */
        }

        h1 {
            text-align: center; /* Centré */
        }

        label {
            color: #4caf50; /* Vert foncé */
        }

        .form-group input {
            border: 1px solid #4caf50; /* Bordure verte */
            transition: transform 0.4s ease; /* Transition de l'animation */
            padding: 10px; /* Ajout de marge interne pour éviter les chevauchements */
            margin-bottom: 20px; /* Espacement entre les champs */
        }

        .form-group input:focus {
            transform: translateY(0); /* Annuler le déplacement vers le haut lorsqu'il est sélectionné */
        }

        .form-group input:hover {
            transform: translateY(-5px); /* Déplacement vers le haut au survol */
        }

        .btn-primary {
            background-color: #4caf50; /* Fond vert */
            border-color: #4caf50; /* Bordure verte */
        }

        .btn-primary:hover {
            background-color: #388e3c; /* Fond vert foncé au survol */
            border-color: #388e3c; /* Bordure verte foncée au survol */
        }
    </style>
{% endblock %}



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
</div>
{% endblock %}
", "admin/adminproducts/new.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\admin\\adminproducts\\new.html.twig");
    }
}
