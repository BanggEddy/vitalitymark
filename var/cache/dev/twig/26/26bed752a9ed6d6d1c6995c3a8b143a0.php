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

/* accueil/indexpromo.html.twig */
class __TwigTemplate_507b11e72898be42ff24d05bd8fcac03 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/indexpromo.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/indexpromo.html.twig", 1);
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
                        <img src=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "getImages", [], "method", false, false, false, 129))), "html", null, true);
            echo "\" class=\"promo-image\">
                        <div class=\"promo-details\">
                            <h2 class=\"promo-title\" style=\"font-weight: bold;\">";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 131), "html", null, true);
            echo "</h2>
                            ";
            // line 132
            $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d");
            // line 133
            echo "                            ";
            $context["remainingDays"] = ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 133), "U") - twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 133, $this->source); })()), "U")) / (24 * 3600));
            // line 134
            echo "                            ";
            if (((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 134, $this->source); })()) > 0)) {
                // line 135
                echo "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Nombre de jours restants: ";
                echo twig_escape_filter($this->env, twig_round((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 135, $this->source); })()), 0, "floor"), "html", null, true);
                echo "</p>
                            ";
            } else {
                // line 137
                echo "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            ";
            }
            // line 139
            echo "                            <p class=\"promo-description\">Quantité disponible: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getQuantity", [], "method", false, false, false, 139), "html", null, true);
            echo "</p>
                            <p class=\"promo-description\" style=\"font-weight: bold;color:red;\">";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getReduction", [], "method", false, false, false, 140), "html", null, true);
            echo " % de réduction</p>
                            <p class=\"promo-price\">Prix après promotion: ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "method", false, false, false, 141), "html", null, true);
            echo " €</p>
                            <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            echo "\" class=\"btn btn-light\">Voir les détails</a>
                        </div>
                    </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "accueil/indexpromo.html.twig";
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
        return array (  262 => 147,  251 => 142,  247 => 141,  243 => 140,  238 => 139,  234 => 137,  228 => 135,  225 => 134,  222 => 133,  220 => 132,  216 => 131,  211 => 129,  207 => 127,  203 => 126,  196 => 122,  187 => 118,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
                        <img src=\"{{ asset('images/' ~ promo.getImages()) }}\" class=\"promo-image\">
                        <div class=\"promo-details\">
                            <h2 class=\"promo-title\" style=\"font-weight: bold;\">{{ promo.getName() }}</h2>
                            {% set now = 'now'|date('Y-m-d') %}
                            {% set remainingDays = (promo.getDateFin()|date('U') - now|date('U')) / (24 * 3600) %}
                            {% if remainingDays > 0 %}
                                <p class=\"promo-description\" style=\"font-weight: bold;\">Nombre de jours restants: {{ remainingDays|round(0, 'floor') }}</p>
                            {% else %}
                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            {% endif %}
                            <p class=\"promo-description\">Quantité disponible: {{ promo.getQuantity() }}</p>
                            <p class=\"promo-description\" style=\"font-weight: bold;color:red;\">{{ promo.getReduction() }} % de réduction</p>
                            <p class=\"promo-price\">Prix après promotion: {{ promo.getPriceafterpromo() }} €</p>
                            <a href=\"{{ path('details_promotion', {'id': promo.id}) }}\" class=\"btn btn-light\">Voir les détails</a>
                        </div>
                    </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "accueil/indexpromo.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\accueil\\indexpromo.html.twig");
    }
}
