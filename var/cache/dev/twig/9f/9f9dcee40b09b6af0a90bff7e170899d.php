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

/* headeruser.html.twig */
class __TwigTemplate_5af85cd571fb2d59629b6141d1e64961 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headeruser.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <!-- Inclure Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
    <style>
        /* Ajout des transitions pour les boutons */
        .nav-item .btn-outline-danger {
            transition: all 0.3s ease;
        }
        .nav-item .btn-outline-danger:hover {
            color: white;
            background-color: #DBFFCA;
            border-color: #DBFFCA;
        }
    </style>
<body>
    <header>
<nav class=\"navbar navbar-expand-lg navbar-light navbar-custom\">
    <a href=\"/uservue\" style=\"text-decoration: none;\">
        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px; height: auto; border-radius: 50%; border: 4px solid #4CAF50; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s;\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "form-inline my-2 my-lg-0"]]);
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "category", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Rechercher", "aria-label" => "Search"]]);
        echo "
                <button type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                    </svg>
                </button>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_panier");
        echo "\">Voir le panier</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_promo");
        echo "\"><span style=\"color:red;\">Promos</span></a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <form action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_user");
        echo "\" method=\"post\" class=\"form-inline my-2 my-lg-0 mr-auto\">
                    <input class=\"form-control\" type=\"text\" name=\"keyword\" placeholder=\"Rechercher un produit\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                            <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                        </svg>
                    </button>
                </form>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/contact/user\">Aide et Contact</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_loyalty_card", ["id" => (isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new RuntimeError('Variable "user_id" does not exist.', 66, $this->source); })())]), "html", null, true);
        echo "\">Ma carte de fidélité</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/user/profile\">Mon Compte</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/logout\">Déconnexion</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-outline-danger\" href=\"#\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"red\" class=\"bi bi-cart\" style=\"margin-bottom:4px\" viewBox=\"0 0 16 16\">
                        <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2\"/>
                    </svg>
                    <span class=\"text-danger\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "€</span>
                </a>                   
            </li>
        </ul>
    </div>
</nav>

        <section class=\"section\">
            <div>
                <h1>Bienvenue :)</h1>
                <p>Drive, Piéton, Cliquez Collectez, Livraison... C'est à vous de décider !</p>
            </div>
        </section>
    </header>

            ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "<br>
<br>

<section2 class=\"row justify-content-around\">
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Obtenir de l'aide</h2>
                <p>Des experts sont là pour vous aider.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Trouver un magasin</h2>
                <p>Localisez nos magasins près de chez vous.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Télécharger l'application</h2>
                <p>Accédez à nos services où que vous soyez.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>FAQ & Questions?</h2>
                <p>Trouver des réponses à vos questions.</p>
            </div>
        </div>
    </div>
</section2>

    <!-- Inclure Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryForm = document.getElementById('categoryForm');
    const categorySelect = document.getElementById('category');

    categoryForm.addEventListener('submit', function(event) {
        // Vérifiez si une catégorie est sélectionnée
        if (!categorySelect.value) {
            event.preventDefault(); // Empêche l'envoi du formulaire si aucune catégorie n'est sélectionnée
            alert('Veuillez sélectionner une catégorie.'); // Affiche un message d'erreur
        }
    });
});
</script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "VitalityMarket";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 95
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "headeruser.html.twig";
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
        return array (  273 => 95,  266 => 94,  254 => 10,  241 => 5,  176 => 96,  174 => 94,  156 => 79,  140 => 66,  124 => 53,  116 => 48,  110 => 45,  104 => 42,  95 => 36,  91 => 35,  80 => 27,  62 => 11,  60 => 10,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}VitalityMarket{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <!-- Inclure Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    {% block stylesheets %}{% endblock %}
</head>
    <style>
        /* Ajout des transitions pour les boutons */
        .nav-item .btn-outline-danger {
            transition: all 0.3s ease;
        }
        .nav-item .btn-outline-danger:hover {
            color: white;
            background-color: #DBFFCA;
            border-color: #DBFFCA;
        }
    </style>
<body>
    <header>
<nav class=\"navbar navbar-expand-lg navbar-light navbar-custom\">
    <a href=\"/uservue\" style=\"text-decoration: none;\">
        <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" style=\"width: 150px; height: auto; border-radius: 50%; border: 4px solid #4CAF50; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s;\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                {{ form_start(form, {'attr': {'class': 'form-inline my-2 my-lg-0'}}) }}
                {{ form_row(form.category, {'attr': {'class': 'form-control', 'placeholder': 'Rechercher', 'aria-label': 'Search'}}) }}
                <button type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                    </svg>
                </button>
                {{ form_end(form) }}
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('user_panier') }}\">Voir le panier</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_user_promo') }}\"><span style=\"color:red;\">Promos</span></a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <form action=\"{{ path('search_user') }}\" method=\"post\" class=\"form-inline my-2 my-lg-0 mr-auto\">
                    <input class=\"form-control\" type=\"text\" name=\"keyword\" placeholder=\"Rechercher un produit\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                            <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                        </svg>
                    </button>
                </form>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/contact/user\">Aide et Contact</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('user_loyalty_card', {'id': user_id}) }}\">Ma carte de fidélité</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/user/profile\">Mon Compte</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/logout\">Déconnexion</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-outline-danger\" href=\"#\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"red\" class=\"bi bi-cart\" style=\"margin-bottom:4px\" viewBox=\"0 0 16 16\">
                        <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2\"/>
                    </svg>
                    <span class=\"text-danger\">{{ totalPrice }}€</span>
                </a>                   
            </li>
        </ul>
    </div>
</nav>

        <section class=\"section\">
            <div>
                <h1>Bienvenue :)</h1>
                <p>Drive, Piéton, Cliquez Collectez, Livraison... C'est à vous de décider !</p>
            </div>
        </section>
    </header>

            {% block body %}
        {% endblock %}
<br>
<br>

<section2 class=\"row justify-content-around\">
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Obtenir de l'aide</h2>
                <p>Des experts sont là pour vous aider.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Trouver un magasin</h2>
                <p>Localisez nos magasins près de chez vous.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>Télécharger l'application</h2>
                <p>Accédez à nos services où que vous soyez.</p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2>FAQ & Questions?</h2>
                <p>Trouver des réponses à vos questions.</p>
            </div>
        </div>
    </div>
</section2>

    <!-- Inclure Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryForm = document.getElementById('categoryForm');
    const categorySelect = document.getElementById('category');

    categoryForm.addEventListener('submit', function(event) {
        // Vérifiez si une catégorie est sélectionnée
        if (!categorySelect.value) {
            event.preventDefault(); // Empêche l'envoi du formulaire si aucune catégorie n'est sélectionnée
            alert('Veuillez sélectionner une catégorie.'); // Affiche un message d'erreur
        }
    });
});
</script>
</body>
</html>
", "headeruser.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\headeruser.html.twig");
    }
}
