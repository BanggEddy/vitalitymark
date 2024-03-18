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

/* accueil/index.html.twig */
class __TwigTemplate_1b2e8f07a943e095b43aa25f223f207d extends Template
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
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AccueilController!";
        
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

.product-image {
    position: relative; /* Position relative pour positionner l'élément de superposition */
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.product-image::after {
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

.product-image:hover::after {
    opacity: 1; /* Opacité lorsque survolé */
}

.product-details {
    margin-top: 10px;
}

.product-price {
    font-size: 18px;
    font-weight: bold;
}

.product-quantity {
    color: #28a745;
}

.product-category {
    color: #6c757d;
}
</style>
<style>
/* CSS pour les cartes de promotion */
.promo-card {
    background-color: #f08080; /* Couleur de fond */
    border: 1px 10px solid #fa8072 ; /* Bordure */
    border-radius: 10px; /* Coins arrondis */
    padding: 20px; /* Espacement intérieur */
    margin-bottom: 20px; /* Marge en bas */
    box-shadow: 5px 5px 5px #888888; /* Ombre */
    transition: transform 0.3s ease-in-out; /* Transition de l'effet */
}

.promo-card:hover {
    transform: translateY(-5px); /* Déplacement vers le haut */
}

.promo-image {
    width: 100%; /* Largeur de l'image */
    max-height: 200px; /* Hauteur maximale de l'image */
    object-fit: cover; /* Redimensionner l'image pour couvrir la zone */
    border-radius: 10px; /* Coins arrondis */
}

.promo-details {
    margin-top: 10px; /* Marge en haut */
}

.promo-title {
    font-size: 18px; /* Taille du titre */
    font-weight: bold; /* Gras */
}

.promo-description {
    color: #555; /* Couleur du texte de la description */
}

.promo-date {
    color: #777; /* Couleur du texte de la date */
}

.promo-price {
    color: #333; /* Couleur du texte du prix */
    font-weight: bold; /* Gras */
}
</style>
<div class=\"container\">
    <br>
    <h1>Liste des produits</h1>
    <br>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <h2> En ce moment</h2>
                <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cardfront.png"), "html", null, true);
        echo "\" alt=\"";
        echo "photo";
        echo "\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>La sélection du moment</h3>
                    <p>Découvrez nos meilleures promotions, nos dernières nouveautés ou nos plus grands succès que nous avons sélectionnés.</p>
                    <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary\">J'en profite</a>
                </div>
            </div>
        </div>
        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 127
            echo "            <div class=\"col-md-4\">
                <div class=\"promo-card\">
                    <!-- Afficher les détails de la promotion -->
                    <img src=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "getImages", [], "method", false, false, false, 130))), "html", null, true);
            echo "\" class=\"promo-image\">
                    <div class=\"promo-details\">
                        <h5 class=\"promo-title\">";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 132), "html", null, true);
            echo "</h5>
                        <p class=\"promo-description\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDescription", [], "method", false, false, false, 133), "html", null, true);
            echo "</p>
                        <p class=\"promo-date\">Date de début: ";
            // line 134
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateDebut", [], "method", false, false, false, 134), "d/m/Y"), "html", null, true);
            echo "</p>
                        <p class=\"promo-date\">Date de fin: ";
            // line 135
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 135), "d/m/Y"), "html", null, true);
            echo "</p>
                        ";
            // line 137
            echo "                        ";
            $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d");
            // line 138
            echo "                        ";
            $context["remainingDays"] = ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 138), "U") - twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 138, $this->source); })()), "U")) / (24 * 3600));
            // line 139
            echo "                        ";
            if (((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 139, $this->source); })()) > 0)) {
                // line 140
                echo "                            <p class=\"promo-description\">Nombre de jours restants: ";
                echo twig_escape_filter($this->env, twig_round((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 140, $this->source); })()), 0, "floor"), "html", null, true);
                echo "</p>
                        ";
            } else {
                // line 142
                echo "                            <p class=\"promo-description\">Offre expirée</p>
                        ";
            }
            // line 144
            echo "                        <p class=\"promo-description\">Quantité disponible: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getQuantity", [], "method", false, false, false, 144), "html", null, true);
            echo "</p>
                        ";
            // line 146
            echo "                        <p class=\"promo-description\">Réduction de: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getReduction", [], "method", false, false, false, 146), "html", null, true);
            echo " %</p>

                        <p class=\"promo-price\">Prix après promotion: ";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "method", false, false, false, 148), "html", null, true);
            echo " €</p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 153, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 154
            echo "        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 156))), "html", null, true);
            echo "\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 158), "html", null, true);
            echo "</h3>
                    <p class=\"product-price\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 159), "html", null, true);
            echo " €</p>
                    <p>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 160), "html", null, true);
            echo "</p>
                    <p class=\"product-quantity\">Quantité disponible: ";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 161), "html", null, true);
            echo "</p>
                    <p class=\"product-category\">Catégorie: ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 162), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "accueil/index.html.twig";
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
        return array (  315 => 167,  304 => 162,  300 => 161,  296 => 160,  292 => 159,  288 => 158,  283 => 156,  279 => 154,  274 => 153,  263 => 148,  257 => 146,  252 => 144,  248 => 142,  242 => 140,  239 => 139,  236 => 138,  233 => 137,  229 => 135,  225 => 134,  221 => 133,  217 => 132,  212 => 130,  207 => 127,  203 => 126,  196 => 122,  187 => 118,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block title %}Hello AccueilController!{% endblock %}

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

.product-image {
    position: relative; /* Position relative pour positionner l'élément de superposition */
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.product-image::after {
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

.product-image:hover::after {
    opacity: 1; /* Opacité lorsque survolé */
}

.product-details {
    margin-top: 10px;
}

.product-price {
    font-size: 18px;
    font-weight: bold;
}

.product-quantity {
    color: #28a745;
}

.product-category {
    color: #6c757d;
}
</style>
<style>
/* CSS pour les cartes de promotion */
.promo-card {
    background-color: #f08080; /* Couleur de fond */
    border: 1px 10px solid #fa8072 ; /* Bordure */
    border-radius: 10px; /* Coins arrondis */
    padding: 20px; /* Espacement intérieur */
    margin-bottom: 20px; /* Marge en bas */
    box-shadow: 5px 5px 5px #888888; /* Ombre */
    transition: transform 0.3s ease-in-out; /* Transition de l'effet */
}

.promo-card:hover {
    transform: translateY(-5px); /* Déplacement vers le haut */
}

.promo-image {
    width: 100%; /* Largeur de l'image */
    max-height: 200px; /* Hauteur maximale de l'image */
    object-fit: cover; /* Redimensionner l'image pour couvrir la zone */
    border-radius: 10px; /* Coins arrondis */
}

.promo-details {
    margin-top: 10px; /* Marge en haut */
}

.promo-title {
    font-size: 18px; /* Taille du titre */
    font-weight: bold; /* Gras */
}

.promo-description {
    color: #555; /* Couleur du texte de la description */
}

.promo-date {
    color: #777; /* Couleur du texte de la date */
}

.promo-price {
    color: #333; /* Couleur du texte du prix */
    font-weight: bold; /* Gras */
}
</style>
<div class=\"container\">
    <br>
    <h1>Liste des produits</h1>
    <br>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <h2> En ce moment</h2>
                <img src=\"{{ asset('images/cardfront.png') }}\" alt=\"{{ 'photo' }}\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>La sélection du moment</h3>
                    <p>Découvrez nos meilleures promotions, nos dernières nouveautés ou nos plus grands succès que nous avons sélectionnés.</p>
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\">J'en profite</a>
                </div>
            </div>
        </div>
        {% for promo in promotions %}
            <div class=\"col-md-4\">
                <div class=\"promo-card\">
                    <!-- Afficher les détails de la promotion -->
                    <img src=\"{{ asset('images/' ~ promo.getImages()) }}\" class=\"promo-image\">
                    <div class=\"promo-details\">
                        <h5 class=\"promo-title\">{{ promo.getName() }}</h5>
                        <p class=\"promo-description\">{{ promo.getDescription() }}</p>
                        <p class=\"promo-date\">Date de début: {{ promo.getDateDebut()|date('d/m/Y') }}</p>
                        <p class=\"promo-date\">Date de fin: {{ promo.getDateFin()|date('d/m/Y') }}</p>
                        {# Calcul du nombre de jours restants #}
                        {% set now = 'now'|date('Y-m-d') %}
                        {% set remainingDays = (promo.getDateFin()|date('U') - now|date('U')) / (24 * 3600) %}
                        {% if remainingDays > 0 %}
                            <p class=\"promo-description\">Nombre de jours restants: {{ remainingDays|round(0, 'floor') }}</p>
                        {% else %}
                            <p class=\"promo-description\">Offre expirée</p>
                        {% endif %}
                        <p class=\"promo-description\">Quantité disponible: {{ promo.getQuantity() }}</p>
                        {# Calcul du prix après promotion #}
                        <p class=\"promo-description\">Réduction de: {{ promo.getReduction() }} %</p>

                        <p class=\"promo-price\">Prix après promotion: {{ promo.getPriceafterpromo() }} €</p>
                    </div>
                </div>
            </div>
        {% endfor %}
        {% for product in products %}
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"{{ asset('images/' ~ product.images) }}\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>{{ product.name }}</h3>
                    <p class=\"product-price\">{{ product.price }} €</p>
                    <p>{{ product.description }}</p>
                    <p class=\"product-quantity\">Quantité disponible: {{ product.quantity }}</p>
                    <p class=\"product-category\">Catégorie: {{ product.category }}</p>
                </div>
            </div>
        </div>
        {% endfor %}
        
    </div>
</div>
{% endblock %}
", "accueil/index.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\accueil\\index.html.twig");
    }
}
