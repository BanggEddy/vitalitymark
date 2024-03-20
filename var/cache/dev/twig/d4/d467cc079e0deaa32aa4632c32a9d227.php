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

/* Auth/security/login.html.twig */
class __TwigTemplate_ee26b9be2e32bd37a4677cc096937bff extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Auth/security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Auth/security/login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<style>
    .card {
        background-color: white;
        border-radius: 15px;
        box-shadow: 30px 30px 2px rgba(10, 10, 10, 0.1);
        padding: 20px;
        width: 400px;
        margin: 0 auto; 
        background-color: #DBFFCA;
        transition: transform 0.3s ease; 
    }

    .card:hover {
        transform: translateY(-7px); 
    }

    .form-group {
        margin-bottom: 20px;
    }

    .image-container img {
        width: 100%;
        height: 100vh; 
        object-fit: cover; 
    }

    .green-background {
        background-color: #6495ED;
        padding: 20px;
        border-radius: 0 10px 10px 0;
        display: flex;
        justify-content: center;
        align-items: center; 
        height: 100vh; 
    }

    .form-control:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease; 
    }

    .form-control:focus {
        transform: translateY(0); 
        transition: transform 0.5s ease; 
    }
</style>


    <body>
    <div class=\"container-fluid\">
        <div class=\"row\">
                    <!-- Colonne pour le formulaire -->
            <div class=\"col-md-6 p-0\">
                <div class=\"green-background\">
                    <div class=\"card\">
                        <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">&lt;- Retour</a>
                        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width: 120px; height: auto; display: block; margin: 0 auto; border-radius: 5px;\" alt=\"Votre image\">
                        <h3 class=\"text-center text-primary mb-4\">Connectez vous</h3>

                        <form method=\"post\" class=\"mt-5\">
                            ";
        // line 67
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 67, $this->source); })())) {
            // line 68
            echo "                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 68, $this->source); })()), "messageKey", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 68, $this->source); })()), "messageData", [], "any", false, false, false, 68), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 70
        echo "
                            ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71)) {
            // line 72
            echo "                                <div class=\"mb-3\">
                                    Vous êtes connecté en tant que ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "userIdentifier", [], "any", false, false, false, 73), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                                </div>
                            ";
        }
        // line 76
        echo "
                            <input type=\"email\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Adresse email\">
                            <br>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required autofocus placeholder=\"Mot de passe\">
                            <br>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                            <div class=\"checkbox mb-3\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                                </label>
                            </div>

                            <button class=\"btn btn-primary btn-block\">Se connecter</button>
                        </form>
                        <p class=\"mt-3\">Vous n'avez pas de compte? <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Inscrivez-vous ici</a></p>
                        <p class=\"mt-3 text-center\"><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Besoin d'aide ?</a></p>
                    </div>
                </div>
            </div>
            <!-- Colonne pour l'image -->
            <div class=\"col-md-6 p-0\">
                <div class=\"image-container\">
                    <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connectetregister.png"), "html", null, true);
        echo "\" alt=\"Votre image\">
                </div>
            </div>
        </div>
    </div>
    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Auth/security/login.html.twig";
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
        return array (  202 => 99,  192 => 92,  188 => 91,  175 => 81,  168 => 77,  165 => 76,  157 => 73,  154 => 72,  152 => 71,  149 => 70,  143 => 68,  141 => 67,  134 => 63,  130 => 62,  73 => 7,  66 => 6,  53 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<style>
    .card {
        background-color: white;
        border-radius: 15px;
        box-shadow: 30px 30px 2px rgba(10, 10, 10, 0.1);
        padding: 20px;
        width: 400px;
        margin: 0 auto; 
        background-color: #DBFFCA;
        transition: transform 0.3s ease; 
    }

    .card:hover {
        transform: translateY(-7px); 
    }

    .form-group {
        margin-bottom: 20px;
    }

    .image-container img {
        width: 100%;
        height: 100vh; 
        object-fit: cover; 
    }

    .green-background {
        background-color: #6495ED;
        padding: 20px;
        border-radius: 0 10px 10px 0;
        display: flex;
        justify-content: center;
        align-items: center; 
        height: 100vh; 
    }

    .form-control:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease; 
    }

    .form-control:focus {
        transform: translateY(0); 
        transition: transform 0.5s ease; 
    }
</style>


    <body>
    <div class=\"container-fluid\">
        <div class=\"row\">
                    <!-- Colonne pour le formulaire -->
            <div class=\"col-md-6 p-0\">
                <div class=\"green-background\">
                    <div class=\"card\">
                        <a href=\"{{ path('app_register') }}\">&lt;- Retour</a>
                        <img src=\"{{ asset('images/logo.png') }}\" style=\"width: 120px; height: auto; display: block; margin: 0 auto; border-radius: 5px;\" alt=\"Votre image\">
                        <h3 class=\"text-center text-primary mb-4\">Connectez vous</h3>

                        <form method=\"post\" class=\"mt-5\">
                            {% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}

                            {% if app.user %}
                                <div class=\"mb-3\">
                                    Vous êtes connecté en tant que {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
                                </div>
                            {% endif %}

                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"Adresse email\">
                            <br>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required autofocus placeholder=\"Mot de passe\">
                            <br>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                            <div class=\"checkbox mb-3\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                                </label>
                            </div>

                            <button class=\"btn btn-primary btn-block\">Se connecter</button>
                        </form>
                        <p class=\"mt-3\">Vous n'avez pas de compte? <a href=\"{{ path('app_register') }}\">Inscrivez-vous ici</a></p>
                        <p class=\"mt-3 text-center\"><a href=\"{{ path('app_login') }}\">Besoin d'aide ?</a></p>
                    </div>
                </div>
            </div>
            <!-- Colonne pour l'image -->
            <div class=\"col-md-6 p-0\">
                <div class=\"image-container\">
                    <img src=\"{{ asset('images/connectetregister.png') }}\" alt=\"Votre image\">
                </div>
            </div>
        </div>
    </div>
    </body>

{% endblock %}
", "Auth/security/login.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\Auth\\security\\login.html.twig");
    }
}
