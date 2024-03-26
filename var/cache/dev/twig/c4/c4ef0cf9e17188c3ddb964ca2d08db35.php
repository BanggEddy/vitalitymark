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

/* headeradmin.html.twig */
class __TwigTemplate_d9e3e563c7d0e7b674d2cc4d039fd807 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headeradmin.html.twig"));

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

<body>

    <header>
        <nav class=\"navbar navbar-expand-lg navbar-light navbar-custom\">
            <a href=\"/adminproducts\" style=\"text-decoration: none;\">
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px; height: auto; border-radius: 50%; border: 4px solid #4CAF50; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s;\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    ";
        // line 25
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25), ["app_promo_admin_edit", "app_promo_admin_new"])) {
            // line 26
            echo "                        <li class=\"nav-item\">
                            ";
            // line 27
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["class" => "form-inline my-2 my-lg-0"]]);
            echo "
                            ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "category", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Rechercher", "aria-label" => "Search"]]);
            echo "
                            <button type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                                    <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                                </svg>
                            </button>
                            ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
            echo "
                        </li>
                    ";
        }
        // line 37
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/promo/admin/\"><span style=\"color:red;\">Promo</span></a>
                    </li>
                    <!-- Ajout de la liste déroulante -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Actions
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"/adminajouterproducts\">Ajouter un produit</a>
                            <a class=\"dropdown-item\" href=\"/adminupdateproducts\">Modifier un produit</a>
                            <a class=\"dropdown-item\" href=\"/admindeleteproducts\">Supprimer un produit</a>
                        </div>
                    </li>
                    <!-- Fin de la liste déroulante -->
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <form action=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_admin");
        echo "\" method=\"post\" class=\"form-inline my-2 my-lg-0 mr-auto\">
                        <input class=\"form-control\" type=\"text\" name=\"keyword\" placeholder=\"Rechercher un produit\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
                    </form>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/compte/admin\">Mon Compte</a>
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
                <h1>Admin</h1>
            </div>
        </section>
    </header>

    ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "<br>
<br>

<section2 class=\"justify-content-around\">
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
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "headeradmin.html.twig";
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
        return array (  238 => 79,  231 => 78,  219 => 10,  206 => 5,  153 => 80,  151 => 78,  124 => 54,  105 => 37,  99 => 34,  90 => 28,  86 => 27,  83 => 26,  81 => 25,  71 => 18,  62 => 11,  60 => 10,  56 => 9,  49 => 5,  43 => 1,);
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

<body>

    <header>
        <nav class=\"navbar navbar-expand-lg navbar-light navbar-custom\">
            <a href=\"/adminproducts\" style=\"text-decoration: none;\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" style=\"width: 150px; height: auto; border-radius: 50%; border: 4px solid #4CAF50; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s;\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    {% if app.request.attributes.get('_route') not in ['app_promo_admin_edit', 'app_promo_admin_new'] %}
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
                    {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/promo/admin/\"><span style=\"color:red;\">Promo</span></a>
                    </li>
                    <!-- Ajout de la liste déroulante -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Actions
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"/adminajouterproducts\">Ajouter un produit</a>
                            <a class=\"dropdown-item\" href=\"/adminupdateproducts\">Modifier un produit</a>
                            <a class=\"dropdown-item\" href=\"/admindeleteproducts\">Supprimer un produit</a>
                        </div>
                    </li>
                    <!-- Fin de la liste déroulante -->
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <form action=\"{{ path('search_admin') }}\" method=\"post\" class=\"form-inline my-2 my-lg-0 mr-auto\">
                        <input class=\"form-control\" type=\"text\" name=\"keyword\" placeholder=\"Rechercher un produit\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
                    </form>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/compte/admin\">Mon Compte</a>
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
                <h1>Admin</h1>
            </div>
        </section>
    </header>

    {% block body %}
    {% endblock %}
<br>
<br>

<section2 class=\"justify-content-around\">
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
</body>
</html>
", "headeradmin.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\headeradmin.html.twig");
    }
}
