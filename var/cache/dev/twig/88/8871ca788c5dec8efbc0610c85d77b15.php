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

/* user/uservue/search.html.twig */
class __TwigTemplate_5d70646561012edb71c1851b09ad8747 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/search.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Résultats de la recherche";
        
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
.product-card {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #DBFFCA;
    border: 1px solid #ccc;
    box-shadow: 10px 10px 4px #7cdf7c;
    transition: transform 0.3s ease-in-out; /* Transition de l'effet */
}

.product-card:hover {
    transform: translateY(-10px); /* Déplacement vers le haut */
}

.product-card img {
    position: relative; /* Position relative pour positionner l'élément de superposition */
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.product-card img::after {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 128, 0, 0.5); /* Couleur de fond semi-transparente */
    border-radius: 10px; /* Coins arrondis */
    opacity: 0; /* Opacité initiale */
    transition: opacity 0.3s ease-in-out; /* Transition de l'opacité */
}

.product-card:hover img::after {
    opacity: 1; /* Opacité lorsque survolé */
}

.product-card-details {
    margin-top: 10px;
}

.product-card-title {
    font-weight: bold;
}

.product-card-price {
    font-size: 18px;
    font-weight: bold;
}

.product-card-category {
    color: #6c757d;
}

.promo-card {
    background-color: #f08080; /* Couleur de fond */
    border: 1px 10px solid #fa8072; /* Bordure */
    border-radius: 10px; /* Coins arrondis */
    padding: 20px; /* Espacement intérieur */
    margin-bottom: 20px; /* Marge en bas */
    box-shadow: 5px 5px 5px #888888; /* Ombre */
    transition: transform 0.3s ease-in-out; /* Transition de l'effet */
}

.promo-card:hover {
    transform: translateY(-5px); /* Déplacement vers le haut */
}

.promo-card img {
    width: 100%; /* Largeur de l'image */
    max-height: 200px; /* Hauteur maximale de l'image */
    object-fit: cover; /* Redimensionner l'image pour couvrir la zone */
    border-radius: 10px; /* Coins arrondis */
}

.promo-card-details {
    margin-top: 10px; /* Marge en haut */
}

.promo-card-title {
    font-weight: bold; /* Gras */
}

.promo-card-description {
    color: #555; /* Couleur du texte de la description */
}

.promo-card-price {
    color: #333; /* Couleur du texte du prix */
    font-weight: bold; /* Gras */
}

.btn-details {
    background-color: #fff; /* Couleur de fond */
    color: #000; /* Couleur du texte */
    border: none; /* Suppression de la bordure */
    border-radius: 5px; /* Coins arrondis */
    padding: 8px 16px; /* Espacement interne */
    font-size: 14px; /* Taille de la police */
}

.btn-details:hover {
    background-color: #000; /* Couleur de fond au survol */
    color:#fff;
}
</style>

<div class=\"container\">
    <br>
    <h1>Résultats de la recherche</h1>
    <br>

    ";
        // line 123
        if ( !twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 123, $this->source); })()))) {
            // line 124
            echo "    <h2>Produits</h2>
    <div class=\"row\">
        ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 126, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 127
                echo "        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 129))), "html", null, true);
                echo "\" class=\"product-card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129), "html", null, true);
                echo "\">
                <div class=\"product-card-details\">
                    <h3 class=\"product-card-title\">";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 131), "html", null, true);
                echo "</h3>
                    <p class=\"product-card-text\">";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 132), "html", null, true);
                echo "</p>
                    <p class=\"product-card-price\">";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 133), "html", null, true);
                echo " €</p>
                    <p class=\"product-card-category\">Catégorie: ";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 134), "html", null, true);
                echo "</p>
                    <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_produit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                echo "\" class=\"btn btn-details\">Voir les détails</a>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "    </div>
    ";
        }
        // line 142
        echo "
    ";
        // line 143
        if ( !twig_test_empty((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 143, $this->source); })()))) {
            // line 144
            echo "    <h2>Promotions</h2>
    <div class=\"row\">
        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 146, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 147
                echo "        <div class=\"col-md-4\">
            <div class=\"promo-card\">
                <img src=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "getImages", [], "method", false, false, false, 149))), "html", null, true);
                echo "\" class=\"promo-card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 149), "html", null, true);
                echo "\">
                <div class=\"promo-card-details\">
                    <h3 class=\"promo-card-title\">";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 151), "html", null, true);
                echo "</h3>
                    <p class=\"promo-card-description\">";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDescription", [], "method", false, false, false, 152), "html", null, true);
                echo "</p>
                    <p class=\"promo-card-price\">";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "method", false, false, false, 153), "html", null, true);
                echo " €</p>
                    <a href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 154)]), "html", null, true);
                echo "\" class=\"btn btn-details\">Voir les détails</a>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "    </div>
    ";
        }
        // line 161
        echo "
    ";
        // line 162
        if ((twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 162, $this->source); })())) && twig_test_empty((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 162, $this->source); })())))) {
            // line 163
            echo "    <p>Aucun résultat trouvé.</p>
    ";
        }
        // line 165
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/uservue/search.html.twig";
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
        return array (  304 => 165,  300 => 163,  298 => 162,  295 => 161,  291 => 159,  280 => 154,  276 => 153,  272 => 152,  268 => 151,  261 => 149,  257 => 147,  253 => 146,  249 => 144,  247 => 143,  244 => 142,  240 => 140,  229 => 135,  225 => 134,  221 => 133,  217 => 132,  213 => 131,  206 => 129,  202 => 127,  198 => 126,  194 => 124,  192 => 123,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Résultats de la recherche{% endblock %}

{% block body %}
<style>
.product-card {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #DBFFCA;
    border: 1px solid #ccc;
    box-shadow: 10px 10px 4px #7cdf7c;
    transition: transform 0.3s ease-in-out; /* Transition de l'effet */
}

.product-card:hover {
    transform: translateY(-10px); /* Déplacement vers le haut */
}

.product-card img {
    position: relative; /* Position relative pour positionner l'élément de superposition */
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.product-card img::after {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 128, 0, 0.5); /* Couleur de fond semi-transparente */
    border-radius: 10px; /* Coins arrondis */
    opacity: 0; /* Opacité initiale */
    transition: opacity 0.3s ease-in-out; /* Transition de l'opacité */
}

.product-card:hover img::after {
    opacity: 1; /* Opacité lorsque survolé */
}

.product-card-details {
    margin-top: 10px;
}

.product-card-title {
    font-weight: bold;
}

.product-card-price {
    font-size: 18px;
    font-weight: bold;
}

.product-card-category {
    color: #6c757d;
}

.promo-card {
    background-color: #f08080; /* Couleur de fond */
    border: 1px 10px solid #fa8072; /* Bordure */
    border-radius: 10px; /* Coins arrondis */
    padding: 20px; /* Espacement intérieur */
    margin-bottom: 20px; /* Marge en bas */
    box-shadow: 5px 5px 5px #888888; /* Ombre */
    transition: transform 0.3s ease-in-out; /* Transition de l'effet */
}

.promo-card:hover {
    transform: translateY(-5px); /* Déplacement vers le haut */
}

.promo-card img {
    width: 100%; /* Largeur de l'image */
    max-height: 200px; /* Hauteur maximale de l'image */
    object-fit: cover; /* Redimensionner l'image pour couvrir la zone */
    border-radius: 10px; /* Coins arrondis */
}

.promo-card-details {
    margin-top: 10px; /* Marge en haut */
}

.promo-card-title {
    font-weight: bold; /* Gras */
}

.promo-card-description {
    color: #555; /* Couleur du texte de la description */
}

.promo-card-price {
    color: #333; /* Couleur du texte du prix */
    font-weight: bold; /* Gras */
}

.btn-details {
    background-color: #fff; /* Couleur de fond */
    color: #000; /* Couleur du texte */
    border: none; /* Suppression de la bordure */
    border-radius: 5px; /* Coins arrondis */
    padding: 8px 16px; /* Espacement interne */
    font-size: 14px; /* Taille de la police */
}

.btn-details:hover {
    background-color: #000; /* Couleur de fond au survol */
    color:#fff;
}
</style>

<div class=\"container\">
    <br>
    <h1>Résultats de la recherche</h1>
    <br>

    {% if products is not empty %}
    <h2>Produits</h2>
    <div class=\"row\">
        {% for product in products %}
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"{{ asset('images/' ~ product.images) }}\" class=\"product-card-img-top\" alt=\"{{ product.name }}\">
                <div class=\"product-card-details\">
                    <h3 class=\"product-card-title\">{{ product.name }}</h3>
                    <p class=\"product-card-text\">{{ product.description }}</p>
                    <p class=\"product-card-price\">{{ product.price }} €</p>
                    <p class=\"product-card-category\">Catégorie: {{ product.category }}</p>
                    <a href=\"{{ path('details_produit', {'id': product.id}) }}\" class=\"btn btn-details\">Voir les détails</a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    {% endif %}

    {% if promos is not empty %}
    <h2>Promotions</h2>
    <div class=\"row\">
        {% for promo in promos %}
        <div class=\"col-md-4\">
            <div class=\"promo-card\">
                <img src=\"{{ asset('images/' ~ promo.getImages()) }}\" class=\"promo-card-img-top\" alt=\"{{ promo.getName() }}\">
                <div class=\"promo-card-details\">
                    <h3 class=\"promo-card-title\">{{ promo.getName() }}</h3>
                    <p class=\"promo-card-description\">{{ promo.getDescription() }}</p>
                    <p class=\"promo-card-price\">{{ promo.getPriceafterpromo() }} €</p>
                    <a href=\"{{ path('details_promotion', {'id': promo.id}) }}\" class=\"btn btn-details\">Voir les détails</a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    {% endif %}

    {% if products is empty and promos is empty %}
    <p>Aucun résultat trouvé.</p>
    {% endif %}
</div>
{% endblock %}
", "user/uservue/search.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\user\\uservue\\search.html.twig");
    }
}
