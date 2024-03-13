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

/* front_connectionet_register/index.html.twig */
class __TwigTemplate_ead64bcbe28bc1db80877fd1d780dc0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_connectionet_register/index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Pour occuper toute la hauteur de l'écran */
            display: flex;
        }

        .image-container {
            flex: 1; /* Pour occuper tout l'espace disponible */
        }

        .green-background {
            flex: 1; /* Pour occuper tout l'espace disponible */
            background-color: green;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Pour s'assurer que l'image prend tout l'espace du conteneur */
        .image-container img {
            width: 100%;
            height: 100vh; /* Pour occuper toute la hauteur de l'écran */
            object-fit: cover; /* Pour couvrir tout l'espace du conteneur */
        }

        /* Style pour le formulaire */
        form {
            background-color: white;
            padding: 40px; /* Augmentation de la hauteur du formulaire */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Largeur du formulaire */
        }

        input[type=\"text\"],
        input[type=\"password\"] {
            width: 100%;
            padding: 15px; /* Augmentation de la hauteur des champs de saisie */
            margin-bottom: 15px; /* Espacement entre les champs de saisie */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type=\"submit\"] {
            width: 100%;
            padding: 15px; /* Augmentation de la hauteur du bouton */
            border: none;
            background-color: green;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type=\"submit\"]:hover {
            background-color: darkgreen;
        }

    </style>

    <body>
        <div class=\"image-container\">
            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connectetregister.png"), "html", null, true);
        echo "\" alt=\"Votre image\">
        </div>
        <div class=\"green-background\">
        <div class=\"card\">
        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">

        <p> Content de vous (re)voir ! <p>
            <form action=\"/login\" method=\"post\">
                <input type=\"text\" name=\"username\" placeholder=\"Nom d'utilisateur\" required>
                <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\" required>
                <input type=\"submit\" value=\"Se connecter\">
            </form>
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
        return "front_connectionet_register/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  127 => 70,  120 => 66,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Pour occuper toute la hauteur de l'écran */
            display: flex;
        }

        .image-container {
            flex: 1; /* Pour occuper tout l'espace disponible */
        }

        .green-background {
            flex: 1; /* Pour occuper tout l'espace disponible */
            background-color: green;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Pour s'assurer que l'image prend tout l'espace du conteneur */
        .image-container img {
            width: 100%;
            height: 100vh; /* Pour occuper toute la hauteur de l'écran */
            object-fit: cover; /* Pour couvrir tout l'espace du conteneur */
        }

        /* Style pour le formulaire */
        form {
            background-color: white;
            padding: 40px; /* Augmentation de la hauteur du formulaire */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Largeur du formulaire */
        }

        input[type=\"text\"],
        input[type=\"password\"] {
            width: 100%;
            padding: 15px; /* Augmentation de la hauteur des champs de saisie */
            margin-bottom: 15px; /* Espacement entre les champs de saisie */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type=\"submit\"] {
            width: 100%;
            padding: 15px; /* Augmentation de la hauteur du bouton */
            border: none;
            background-color: green;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type=\"submit\"]:hover {
            background-color: darkgreen;
        }

    </style>

    <body>
        <div class=\"image-container\">
            <img src=\"{{ asset('images/connectetregister.png') }}\" alt=\"Votre image\">
        </div>
        <div class=\"green-background\">
        <div class=\"card\">
        <img src=\"{{ asset('images/logo.png') }}\">

        <p> Content de vous (re)voir ! <p>
            <form action=\"/login\" method=\"post\">
                <input type=\"text\" name=\"username\" placeholder=\"Nom d'utilisateur\" required>
                <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\" required>
                <input type=\"submit\" value=\"Se connecter\">
            </form>
        </div>
        </div>
    </body>
{% endblock %}
", "front_connectionet_register/index.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\front_connectionet_register\\index.html.twig");
    }
}
