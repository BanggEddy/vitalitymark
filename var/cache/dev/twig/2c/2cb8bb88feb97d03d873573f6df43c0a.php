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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/compteadmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminproducts/compteadmin.html.twig", 1);
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
        echo "
<body>

    <header>
        <nav class=\"navbar navbar-expand-lg navbar-light navbar-custom\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Rayons</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\"><span style=\"color:red;\">Promos</span></a>
                    </li>
                                        <!-- Ajout de la liste déroulante -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Actions
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"/adminajouterproducts\">Ajouter</a>
                            <a class=\"dropdown-item\" href=\"/adminupdateproducts\">Modifier</a>
                            <a class=\"dropdown-item\" href=\"/admindeleteproducts\">Supprimer</a>
                        </div>
                    </li>
                    <!-- Fin de la liste déroulante -->
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <form class=\"form-inline my-2 my-lg-0 mr-auto\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"bio, viandes, lait\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Mon Panier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/compteadmin\">Mon Compte</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/logout\">Déconnexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\"><span style=\"color:red;\">0,00€</span></a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <section class=\"section\">
            ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "                <h1>Compte admin id: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
            echo "</h1>
            ";
        }
        // line 63
        echo "        </section>
    </header>
    </body>

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
        return array (  140 => 63,  134 => 61,  132 => 60,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}

<body>

    <header>
        <nav class=\"navbar navbar-expand-lg navbar-light navbar-custom\">
            <img src=\"{{ asset('images/logo.png') }}\">

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Rayons</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\"><span style=\"color:red;\">Promos</span></a>
                    </li>
                                        <!-- Ajout de la liste déroulante -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Actions
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"/adminajouterproducts\">Ajouter</a>
                            <a class=\"dropdown-item\" href=\"/adminupdateproducts\">Modifier</a>
                            <a class=\"dropdown-item\" href=\"/admindeleteproducts\">Supprimer</a>
                        </div>
                    </li>
                    <!-- Fin de la liste déroulante -->
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <form class=\"form-inline my-2 my-lg-0 mr-auto\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"bio, viandes, lait\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Mon Panier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/compteadmin\">Mon Compte</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/logout\">Déconnexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\"><span style=\"color:red;\">0,00€</span></a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <section class=\"section\">
            {% if app.user %}
                <h1>Compte admin id: {{ app.user.id }}</h1>
            {% endif %}
        </section>
    </header>
    </body>

{% endblock %}
", "admin/adminproducts/compteadmin.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\admin\\adminproducts\\compteadmin.html.twig");
    }
}
