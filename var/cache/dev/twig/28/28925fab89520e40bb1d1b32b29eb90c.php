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

/* accueil/search.html.twig */
class __TwigTemplate_f8f3557b72e4c84f2d1ef58e85515a62 extends Template
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
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/search.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/search.html.twig", 1);
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
    transition: transform 0.3s ease-in-out; 
}

.product-card:hover {
    transform: translateY(-10px); 
}

.product-card img {
    position: relative; 
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
    background-color: rgba(0, 128, 0, 0.5); 
    border-radius: 10px; 
    opacity: 0; 
    transition: opacity 0.3s ease-in-out;
}

.product-card:hover img::after {
    opacity: 1;
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
    background-color: #f08080; 
    border: 1px 10px solid #fa8072; 
    border-radius: 10px; 
    padding: 20px; 
    margin-bottom: 20px; 
    box-shadow: 5px 5px 5px #888888; 
    transition: transform 0.3s ease-in-out; 
}

.promo-card:hover {
    transform: translateY(-5px); 
}

.promo-card img {
    width: 100%; 
    max-height: 200px; 
    object-fit: cover; 
    border-radius: 10px; 
}

.promo-card-details {
    margin-top: 10px;
}

.promo-card-title {
    font-weight: bold; 
}

.promo-card-description {
    color: #555; 
}

.promo-card-price {
    color: #333; 
    font-weight: bold; 
}

.btn-details {
    background-color: #fff;
    color: #000;
    border: none; 
    border-radius: 5px; 
    padding: 8px 16px; 
    font-size: 14px;
}

.btn-details:hover {
    background-color: #000; 
    color:#fff;
}
</style>

<div class=\"container\">
    <br>
    <h1>Résultats de la recherche</h1>
    <br>

    ";
        // line 121
        if ( !twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 121, $this->source); })()))) {
            // line 122
            echo "    <h2>Produits</h2>
    <div class=\"row\">
        ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 124, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 125
                echo "        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 127))), "html", null, true);
                echo "\" class=\"product-card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 127), "html", null, true);
                echo "\">
                <div class=\"product-card-details\">
                    <h3 class=\"product-card-title\">";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129), "html", null, true);
                echo "</h3>
                    <p class=\"product-card-text\">";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 130), "html", null, true);
                echo "</p>
                    <p class=\"product-card-price\">";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 131), "html", null, true);
                echo " €</p>
                    <p class=\"product-card-category\">Catégorie: ";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 132), "html", null, true);
                echo "</p>
                    <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_produit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 133)]), "html", null, true);
                echo "\" class=\"btn btn-details\">Voir les détails</a>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "    </div>
    ";
        }
        // line 140
        echo "
    ";
        // line 141
        if ( !twig_test_empty((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 141, $this->source); })()))) {
            // line 142
            echo "    <h2>Promotions</h2>
    <div class=\"row\">
        ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 144, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 145
                echo "        <div class=\"col-md-4\">
            <div class=\"promo-card\">
                <img src=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "getImages", [], "method", false, false, false, 147))), "html", null, true);
                echo "\" class=\"promo-card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 147), "html", null, true);
                echo "\">
                <div class=\"promo-card-details\">
                    <h3 class=\"promo-card-title\">";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 149), "html", null, true);
                echo "</h3>
                    <p class=\"promo-card-description\">";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDescription", [], "method", false, false, false, 150), "html", null, true);
                echo "</p>
                    <p class=\"promo-card-price\">";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "method", false, false, false, 151), "html", null, true);
                echo " €</p>
                    <a href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 152)]), "html", null, true);
                echo "\" class=\"btn btn-details\">Voir les détails</a>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "    </div>
    ";
        }
        // line 159
        echo "
    ";
        // line 160
        if ((twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 160, $this->source); })())) && twig_test_empty((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 160, $this->source); })())))) {
            // line 161
            echo "    <p>Aucun résultat trouvé.</p>
    ";
        }
        // line 163
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "accueil/search.html.twig";
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
        return array (  290 => 163,  286 => 161,  284 => 160,  281 => 159,  277 => 157,  266 => 152,  262 => 151,  258 => 150,  254 => 149,  247 => 147,  243 => 145,  239 => 144,  235 => 142,  233 => 141,  230 => 140,  226 => 138,  215 => 133,  211 => 132,  207 => 131,  203 => 130,  199 => 129,  192 => 127,  188 => 125,  184 => 124,  180 => 122,  178 => 121,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

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
    transition: transform 0.3s ease-in-out; 
}

.product-card:hover {
    transform: translateY(-10px); 
}

.product-card img {
    position: relative; 
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
    background-color: rgba(0, 128, 0, 0.5); 
    border-radius: 10px; 
    opacity: 0; 
    transition: opacity 0.3s ease-in-out;
}

.product-card:hover img::after {
    opacity: 1;
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
    background-color: #f08080; 
    border: 1px 10px solid #fa8072; 
    border-radius: 10px; 
    padding: 20px; 
    margin-bottom: 20px; 
    box-shadow: 5px 5px 5px #888888; 
    transition: transform 0.3s ease-in-out; 
}

.promo-card:hover {
    transform: translateY(-5px); 
}

.promo-card img {
    width: 100%; 
    max-height: 200px; 
    object-fit: cover; 
    border-radius: 10px; 
}

.promo-card-details {
    margin-top: 10px;
}

.promo-card-title {
    font-weight: bold; 
}

.promo-card-description {
    color: #555; 
}

.promo-card-price {
    color: #333; 
    font-weight: bold; 
}

.btn-details {
    background-color: #fff;
    color: #000;
    border: none; 
    border-radius: 5px; 
    padding: 8px 16px; 
    font-size: 14px;
}

.btn-details:hover {
    background-color: #000; 
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
", "accueil/search.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\accueil\\search.html.twig");
    }
}
