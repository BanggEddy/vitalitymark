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

/* user/uservue/user.html.twig */
class __TwigTemplate_190929de6880c2ca9916cfb7acf16091 extends Template
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
        return "headeruser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/user.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profil utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-6\">
        <h1 class=\"mb-3\">Profil utilisateur</h1>
        <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user_profile");
        echo "\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"email\">Email :</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"name\">Nom :</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"adresse\">Adresse :</label>
            <input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "adresse", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"civilite\">Civilité :</label>
            <select class=\"form-control\" id=\"civilite\" name=\"civilite\">
              <option value=\"M.\" ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "civilite", [], "any", false, false, false, 26) == "M.")) {
            echo " selected ";
        }
        echo ">M.</option>
              <option value=\"Mme.\" ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "civilite", [], "any", false, false, false, 27) == "Mme.")) {
            echo " selected ";
        }
        echo ">Mme.</option>
              <option value=\"Autre\" ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "civilite", [], "any", false, false, false, 28) == "Autre")) {
            echo " selected ";
        }
        echo ">Autre</option>
            </select>
          </div>
          <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
        </form>
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
        return "user/uservue/user.html.twig";
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
        return array (  119 => 28,  113 => 27,  107 => 26,  99 => 21,  92 => 17,  85 => 13,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Profil utilisateur{% endblock %}

{% block body %}
  <div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-6\">
        <h1 class=\"mb-3\">Profil utilisateur</h1>
        <form action=\"{{ path('edit_user_profile') }}\" method=\"post\">
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
          <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
        </form>
      </div>
    </div>
  </div>
{% endblock %}
", "user/uservue/user.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\user\\uservue\\user.html.twig");
    }
}
