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

/* accueil/contact.html.twig */
class __TwigTemplate_73487eeab7377ad83f5b80be2031c9c3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/contact.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
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
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa; /* Couleur de fond */
    }

    .container {
        width: 80%;
        margin: 20px auto;
        background-color: #fff; /* Fond du conteneur */
        padding: 20px;
        border-radius: 10px; /* Coins arrondis */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
        transition: transform 0.3s ease; /* Transition douce */
    }

    .container:hover {
        transform: translateY(-5px); /* Translation vers le haut */
    }

    h2 {
        color: #4CAF50; /* Couleur de titre */
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type=\"text\"],
    input[type=\"email\"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease, transform 0.3s ease; /* Transition douce */
    }

    input[type=\"text\"]:focus,
    input[type=\"email\"]:focus,
    textarea:focus {
        border-color: #4CAF50; /* Bordure couleur verte lors du focus */
    }

    input[type=\"text\"]:hover,
    input[type=\"email\"]:hover,
    textarea:hover {
        transform: translateY(-5px); /* Translation vers le haut au survol */
    }

    button {
        padding: 10px 20px;
        background-color: #4CAF50; /* Couleur de fond du bouton */
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease; /* Transition douce */
    }

    button:hover {
        background-color: #45a049; /* Couleur de fond du bouton au survol */
    }
</style>

<br>
<div class=\"container\">
    <h2>Nous Contacter</h2>
    <form action=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_submit");
        echo "\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"name\">Votre Nom :</label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Votre Email :</label>
            <input type=\"email\" id=\"email\" name=\"email\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"subject\">Sujet :</label>
            <select id=\"subject\" name=\"subject\" class=\"form-select\" required>
                <option value=\"\">Sélectionnez un sujet</option>
                <option value=\"Livraison\">Livraison</option>
                <option value=\"Produits\">Produits</option>
                <option value=\"Programme de Fidélité\">Programme de Fidélité</option>
                <option value=\"Magasins\">Magasins</option>
                <option value=\"Stockage des Données\">Stockage des Données</option>
                <option value=\"Autre\">Autre</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"message\">Votre Message :</label>
            <textarea id=\"message\" name=\"message\" required></textarea>
        </div>
        <button type=\"submit\">Envoyer le Message</button>
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
        return "accueil/contact.html.twig";
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
        return array (  150 => 81,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa; /* Couleur de fond */
    }

    .container {
        width: 80%;
        margin: 20px auto;
        background-color: #fff; /* Fond du conteneur */
        padding: 20px;
        border-radius: 10px; /* Coins arrondis */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
        transition: transform 0.3s ease; /* Transition douce */
    }

    .container:hover {
        transform: translateY(-5px); /* Translation vers le haut */
    }

    h2 {
        color: #4CAF50; /* Couleur de titre */
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type=\"text\"],
    input[type=\"email\"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease, transform 0.3s ease; /* Transition douce */
    }

    input[type=\"text\"]:focus,
    input[type=\"email\"]:focus,
    textarea:focus {
        border-color: #4CAF50; /* Bordure couleur verte lors du focus */
    }

    input[type=\"text\"]:hover,
    input[type=\"email\"]:hover,
    textarea:hover {
        transform: translateY(-5px); /* Translation vers le haut au survol */
    }

    button {
        padding: 10px 20px;
        background-color: #4CAF50; /* Couleur de fond du bouton */
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease; /* Transition douce */
    }

    button:hover {
        background-color: #45a049; /* Couleur de fond du bouton au survol */
    }
</style>

<br>
<div class=\"container\">
    <h2>Nous Contacter</h2>
    <form action=\"{{ path('app_contact_submit') }}\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"name\">Votre Nom :</label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Votre Email :</label>
            <input type=\"email\" id=\"email\" name=\"email\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"subject\">Sujet :</label>
            <select id=\"subject\" name=\"subject\" class=\"form-select\" required>
                <option value=\"\">Sélectionnez un sujet</option>
                <option value=\"Livraison\">Livraison</option>
                <option value=\"Produits\">Produits</option>
                <option value=\"Programme de Fidélité\">Programme de Fidélité</option>
                <option value=\"Magasins\">Magasins</option>
                <option value=\"Stockage des Données\">Stockage des Données</option>
                <option value=\"Autre\">Autre</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"message\">Votre Message :</label>
            <textarea id=\"message\" name=\"message\" required></textarea>
        </div>
        <button type=\"submit\">Envoyer le Message</button>
    </form>
</div>
{% endblock %}
", "accueil/contact.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\accueil\\contact.html.twig");
    }
}
