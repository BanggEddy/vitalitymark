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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\">
      <div class=\"card nature-card\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-3\">Profil utilisateur</h1>
          <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user_profile");
        echo "\" method=\"post\">
            <div class=\"form-group\">
              <label for=\"email\">Email :</label>
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"name\">Nom :</label>
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"adresse\">Adresse :</label>
              <input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "adresse", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"civilite\">Civilité :</label>
              <select class=\"form-control\" id=\"civilite\" name=\"civilite\">
                <option value=\"M.\" ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "civilite", [], "any", false, false, false, 28) == "M.")) {
            echo " selected ";
        }
        echo ">M.</option>
                <option value=\"Mme.\" ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "civilite", [], "any", false, false, false, 29) == "Mme.")) {
            echo " selected ";
        }
        echo ">Mme.</option>
                <option value=\"Autre\" ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "civilite", [], "any", false, false, false, 30) == "Autre")) {
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
        return array (  108 => 30,  102 => 29,  96 => 28,  88 => 23,  81 => 19,  74 => 15,  68 => 12,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}


{% block body %}

<div class=\"container mt-4\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\">
      <div class=\"card nature-card\">
        <div class=\"card-body\">
          <h1 class=\"card-title mb-3\">Profil utilisateur</h1>
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
            <button type=\"submit\" class=\"btn btn-details\">Enregistrer les modifications</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "user/uservue/user.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\user\\uservue\\user.html.twig");
    }
}
