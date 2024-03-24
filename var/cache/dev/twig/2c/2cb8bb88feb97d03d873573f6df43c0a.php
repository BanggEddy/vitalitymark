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

/* admin/adminproducts/compteadmin.html.twig */
class __TwigTemplate_a915cfb309a90679af2b6b3da0e8e368 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/compteadmin.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/adminproducts/compteadmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
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
.nature-card {
  background-color: #e5f4e7; /* Couleur de fond verte */
  border: 2px solid #8fc580; /* Bordure verte */
  border-radius: 10px; /* Coins arrondis */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre */
}

.nature-card .card-body {
  padding: 2rem; /* Espacement du contenu à l'intérieur de la carte */
}

.nature-card .card-title {
  color: #4e7d4e; /* Couleur du titre */
}

/* Style pour le bouton */
.btn-details {
  background-color: #4e7d4e; /* Couleur de fond du bouton */
  border: none; /* Suppression de la bordure */
  color: white; /* Couleur du texte */
  padding: 0.5rem 1rem; /* Espacement du bouton */
  border-radius: 5px; /* Coins arrondis */
}

/* Style pour le bouton au survol */
.btn-details:hover {
  background-color: #426e42; /* Couleur de fond du bouton au survol */
}

</style>
<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\"> <!-- Changement ici pour agrandir la largeur -->
      <div class=\"card nature-card\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-3\">Profil administrateur</h1>
          <form action=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_admin_profile");
        echo "\" method=\"post\">
            <div class=\"form-group\">
              <label for=\"email\">Email :</label>
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"name\">Nom :</label>
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"adresse\">Adresse :</label>
              <input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "adresse", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"civilite\">Civilité :</label>
              <select class=\"form-control\" id=\"civilite\" name=\"civilite\">
                <option value=\"M.\" ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "civilite", [], "any", false, false, false, 59) == "M.")) {
            echo " selected ";
        }
        echo ">M.</option>
                <option value=\"Mme.\" ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "civilite", [], "any", false, false, false, 60) == "Mme.")) {
            echo " selected ";
        }
        echo ">Mme.</option>
                <option value=\"Autre\" ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "civilite", [], "any", false, false, false, 61) == "Autre")) {
            echo " selected ";
        }
        echo ">Autre</option>
              </select>
            </div>
            <button type=\"submit\" class=\"btn btn-details\">Enregistrer les modifications</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/adminproducts/compteadmin.html.twig";
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
        return array (  152 => 61,  146 => 60,  140 => 59,  132 => 54,  125 => 50,  118 => 46,  112 => 43,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<style>
.nature-card {
  background-color: #e5f4e7; /* Couleur de fond verte */
  border: 2px solid #8fc580; /* Bordure verte */
  border-radius: 10px; /* Coins arrondis */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre */
}

.nature-card .card-body {
  padding: 2rem; /* Espacement du contenu à l'intérieur de la carte */
}

.nature-card .card-title {
  color: #4e7d4e; /* Couleur du titre */
}

/* Style pour le bouton */
.btn-details {
  background-color: #4e7d4e; /* Couleur de fond du bouton */
  border: none; /* Suppression de la bordure */
  color: white; /* Couleur du texte */
  padding: 0.5rem 1rem; /* Espacement du bouton */
  border-radius: 5px; /* Coins arrondis */
}

/* Style pour le bouton au survol */
.btn-details:hover {
  background-color: #426e42; /* Couleur de fond du bouton au survol */
}

</style>
<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\"> <!-- Changement ici pour agrandir la largeur -->
      <div class=\"card nature-card\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-3\">Profil administrateur</h1>
          <form action=\"{{ path('edit_admin_profile') }}\" method=\"post\">
            <div class=\"form-group\">
              <label for=\"email\">Email :</label>
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ user.email }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"name\">Nom :</label>
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"{{ user.name }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"adresse\">Adresse :</label>
              <input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" value=\"{{ user.adresse }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"civilite\">Civilité :</label>
              <select class=\"form-control\" id=\"civilite\" name=\"civilite\">
                <option value=\"M.\" {% if user.civilite == 'M.' %} selected {% endif %}>M.</option>
                <option value=\"Mme.\" {% if user.civilite == 'Mme.' %} selected {% endif %}>Mme.</option>
                <option value=\"Autre\" {% if user.civilite == 'Autre' %} selected {% endif %}>Autre</option>
              </select>
            </div>
            <button type=\"submit\" class=\"btn btn-details\">Enregistrer les modifications</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "admin/adminproducts/compteadmin.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\admin\\adminproducts\\compteadmin.html.twig");
    }
}
