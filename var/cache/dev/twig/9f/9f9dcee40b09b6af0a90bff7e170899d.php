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
  section2 {
    background-color: #DBFFCA;
    padding: 20px;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  
  .card {
    background-color: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 10px 4px 6px rgba(0, 0, 0, 0.1);
    width: 200px;
    text-align: center;
  }
</style>
<body>
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-light navbar-custom\">
            <img src=\"";
        // line 33
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
                        <a class=\"nav-link\" href=\"#\">Mon Panier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\"><span style=\"color:red;\">Promos</span></a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <form class=\"form-inline my-2 my-lg-0 mr-auto\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"bio, viandes, lait\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Aide et Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/login\">Mon Compte</a>
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
            <div>
                <h1>Bienvenue :)</h1>
                <p>Drive, Piéton, Cliquez Collectez, Livraison... C'est à vous de décider !</p>
            </div>
        </section>
    </header>

            ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "<br>
<br>

    <section2>
    <div class=\"card\">
        <h2>Obtenir de l'aide</h2>
        <p>Des experts sont là pour vous aider.</p>
    </div>
    <div class=\"card\">
        <h2>Trouver un magasin</h2>
        <p>Localisez nos magasins près de chez vous.</p>
    </div>
    <div class=\"card\">
        <h2>Télécharger l'application</h2>
        <p>Accédez à nos services où que vous soyez.</p>
    </div>
    <div class=\"card\">
        <h2>FAQ & Questions?</h2>
        <p>Trouver des réponses à vos questions.</p>
    </div>
    </section2>
    <!-- Inclure Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
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

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
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
        return array (  202 => 79,  195 => 78,  183 => 10,  170 => 5,  136 => 80,  134 => 78,  86 => 33,  62 => 11,  60 => 10,  56 => 9,  49 => 5,  43 => 1,);
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
  section2 {
    background-color: #DBFFCA;
    padding: 20px;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  
  .card {
    background-color: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 10px 4px 6px rgba(0, 0, 0, 0.1);
    width: 200px;
    text-align: center;
  }
</style>
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
                        <a class=\"nav-link\" href=\"#\">Mon Panier</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\"><span style=\"color:red;\">Promos</span></a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <form class=\"form-inline my-2 my-lg-0 mr-auto\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"bio, viandes, lait\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Aide et Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/login\">Mon Compte</a>
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

    <section2>
    <div class=\"card\">
        <h2>Obtenir de l'aide</h2>
        <p>Des experts sont là pour vous aider.</p>
    </div>
    <div class=\"card\">
        <h2>Trouver un magasin</h2>
        <p>Localisez nos magasins près de chez vous.</p>
    </div>
    <div class=\"card\">
        <h2>Télécharger l'application</h2>
        <p>Accédez à nos services où que vous soyez.</p>
    </div>
    <div class=\"card\">
        <h2>FAQ & Questions?</h2>
        <p>Trouver des réponses à vos questions.</p>
    </div>
    </section2>
    <!-- Inclure Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</body>
</html>
", "headeruser.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\headeruser.html.twig");
    }
}
