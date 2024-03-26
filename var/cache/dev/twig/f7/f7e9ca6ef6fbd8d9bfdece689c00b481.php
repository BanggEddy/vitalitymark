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

/* Auth/registration/register.html.twig */
class __TwigTemplate_16b6049568e4873bb6cfb6416a9ef1fc extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Auth/registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Auth/registration/register.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        background-color: #8CD769;
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
    .btn-details {
        background-color: #8CD769; 
        color: #fff; 
        border: none; 
        border-radius: 5px; 
        padding: 8px 42%; 
        font-size: 14px; 
    }

    .btn-details:hover {
        background-color: #fff;
        color:#8CD769;
        transform: scale(1.05);
        transition: 0.5s; 


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
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">&lt;- Retour</a>

                            <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width: 120px; height: auto; display: block; margin: 0 auto; border-radius: 5px;\" alt=\"Votre image\">

                            <h2 class=\"text-center\">Inscription</h2>

                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), 'errors');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "civilite", [], "any", false, false, false, 86), 'row');
        echo "
                            </div>
                            ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
                            <div class=\"form-group\">
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, false, 90), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prénom et Nom"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "plainPassword", [], "any", false, false, false, 96), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        // line 99
        echo "
                            </div>
                            <div class=\"form-group form-check\">
                                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "agreeTerms", [], "any", false, false, false, 102), 'row', ["label" => "Accepter les termes", "attr" => ["class" => "form-check-input", "style" => "margin-left: 20px;"]]);
        echo "
                                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), "agreeTerms", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        echo "
                            </div>

                            <button type=\"submit\" class=\"btn btn-details\">S'inscrire</button>
                            <p>*Champs obligatoires</p>
                            ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 108, $this->source); })()), 'form_end');
        echo "

                            <p class=\"mt-3 text-center\">Déjà un compte Vitality.fr ?  <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous ici</a></p>
                            <p class=\"mt-3 text-center\"><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Besoin d'aide ?</a></p>

                        </div>
                    </div>
                </div>
                <!-- Colonne pour l'image -->
                <div class=\"col-md-6 p-0\">
                    <div class=\"image-container\">
                        <img src=\"";
        // line 119
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
        return "Auth/registration/register.html.twig";
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
        return array (  211 => 119,  200 => 111,  196 => 110,  191 => 108,  183 => 103,  179 => 102,  174 => 99,  172 => 96,  166 => 93,  160 => 90,  155 => 88,  150 => 86,  145 => 84,  138 => 80,  133 => 78,  59 => 6,  52 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/registration/register.html.twig #}

{% extends 'base.html.twig' %}

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
        background-color: #8CD769;
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
    .btn-details {
        background-color: #8CD769; 
        color: #fff; 
        border: none; 
        border-radius: 5px; 
        padding: 8px 42%; 
        font-size: 14px; 
    }

    .btn-details:hover {
        background-color: #fff;
        color:#8CD769;
        transform: scale(1.05);
        transition: 0.5s; 


    }
</style>


    <body>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <!-- Colonne pour le formulaire -->
                <div class=\"col-md-6 p-0\">
                    <div class=\"green-background\">
                        <div class=\"card\">
                            <a href=\"{{ path('app_logout') }}\">&lt;- Retour</a>

                            <img src=\"{{ asset('images/logo.png') }}\" style=\"width: 120px; height: auto; display: block; margin: 0 auto; border-radius: 5px;\" alt=\"Votre image\">

                            <h2 class=\"text-center\">Inscription</h2>

                            {{ form_errors(registrationForm) }}
                            <div class=\"form-group\">
                                {{ form_row(registrationForm.civilite) }}
                            </div>
                            {{ form_start(registrationForm, {'attr': {'class': 'form'}}) }}
                            <div class=\"form-group\">
                                {{ form_row(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
                            </div>
                            <div class=\"form-group\">
                            {{ form_row(registrationForm.name, {'attr': {'class': 'form-control', 'placeholder': 'Prénom et Nom'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(registrationForm.plainPassword, {
                                    'label': 'Mot de passe',
                                    'attr': {'class': 'form-control', 'placeholder': 'Mot de passe'}
                                }) }}
                            </div>
                            <div class=\"form-group form-check\">
                                {{ form_row(registrationForm.agreeTerms, {'label': 'Accepter les termes', 'attr': {'class': 'form-check-input', 'style': 'margin-left: 20px;'}}) }}
                                {{ form_label(registrationForm.agreeTerms, null, {'label_attr': {'class': 'form-check-label'}}) }}
                            </div>

                            <button type=\"submit\" class=\"btn btn-details\">S'inscrire</button>
                            <p>*Champs obligatoires</p>
                            {{ form_end(registrationForm) }}

                            <p class=\"mt-3 text-center\">Déjà un compte Vitality.fr ?  <a href=\"{{ path('app_login') }}\">Connectez-vous ici</a></p>
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
", "Auth/registration/register.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\Auth\\registration\\register.html.twig");
    }
}
