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

/* registration/register.html.twig */
class __TwigTemplate_feabe48252275fc14e76b0e9a8427c23 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        /* Style pour le formulaire */
        .card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 30px 30px 2px rgba(10, 10, 10, 0.1);
            padding: 20px;
            width: 400px;
            margin: 0 auto; /* Pour centrer le formulaire horizontalement */
            background-color: #DBFFCA;
            transition: transform 0.3s ease; /* Transition pour l'effet de survol */
        }

        .card:hover {
            transform: translateY(-7px); /* Translation vers le haut au survol */
        }


        .form-group {
            margin-bottom: 20px;
        }

        .image-container img {
            width: 100%;
            height: 100vh; /* Pour occuper toute la hauteur de l'écran */
            object-fit: cover; /* Pour couvrir tout l'espace du conteneur */
        }

        /* Style pour la partie du formulaire */
        .green-background {
            background-color: #8CD769;
            padding: 20px;
            border-radius: 0 10px 10px 0;
            display: flex;
            justify-content: center; /* Pour centrer le contenu horizontalement */
            align-items: center; /* Pour centrer le contenu verticalement */
            height: 100vh; /* Pour occuper toute la hauteur de l'écran */
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
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">&lt;- Retour</a>

                            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width: 120px; height: auto; display: block; margin: 0 auto; border-radius: 5px;\" alt=\"Votre image\">

                            <h2 class=\"text-center\">Inscription</h2>

                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), 'errors');
        echo "

                            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "plainPassword", [], "any", false, false, false, 64), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        // line 67
        echo "
                                </div>
                                <div class=\"form-group form-check\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "agreeTerms", [], "any", false, false, false, 70), 'row', ["label" => "Accepter les termes", "attr" => ["class" => "form-check-input", "style" => "margin-left: 20px;"]]);
        echo "
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "agreeTerms", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        echo "
                                </div>

                                <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
                                <p>*Champs obligatoire</p>
                            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), 'form_end');
        echo "

                            <p class=\"mt-3 text-center\">Déjà un compte Vitality.fr ?  <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous ici</a></p>
                            <p class=\"mt-3 text-center\"><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Besoin d'aide ?</a></p>

                        </div>
                    </div>
                </div>
                <!-- Colonne pour l'image -->
                <div class=\"col-md-6 p-0\">
                    <div class=\"image-container\">
                        <img src=\"";
        // line 87
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
        return "registration/register.html.twig";
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
        return array (  175 => 87,  164 => 79,  160 => 78,  155 => 76,  147 => 71,  143 => 70,  138 => 67,  136 => 64,  130 => 61,  125 => 59,  120 => 57,  113 => 53,  108 => 51,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <style>
        /* Style pour le formulaire */
        .card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 30px 30px 2px rgba(10, 10, 10, 0.1);
            padding: 20px;
            width: 400px;
            margin: 0 auto; /* Pour centrer le formulaire horizontalement */
            background-color: #DBFFCA;
            transition: transform 0.3s ease; /* Transition pour l'effet de survol */
        }

        .card:hover {
            transform: translateY(-7px); /* Translation vers le haut au survol */
        }


        .form-group {
            margin-bottom: 20px;
        }

        .image-container img {
            width: 100%;
            height: 100vh; /* Pour occuper toute la hauteur de l'écran */
            object-fit: cover; /* Pour couvrir tout l'espace du conteneur */
        }

        /* Style pour la partie du formulaire */
        .green-background {
            background-color: #8CD769;
            padding: 20px;
            border-radius: 0 10px 10px 0;
            display: flex;
            justify-content: center; /* Pour centrer le contenu horizontalement */
            align-items: center; /* Pour centrer le contenu verticalement */
            height: 100vh; /* Pour occuper toute la hauteur de l'écran */
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

                            {{ form_start(registrationForm, {'attr': {'class': 'form'}}) }}
                                <div class=\"form-group\">
                                    {{ form_row(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
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

                                <button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire</button>
                                <p>*Champs obligatoire</p>
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
", "registration/register.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\registration\\register.html.twig");
    }
}
