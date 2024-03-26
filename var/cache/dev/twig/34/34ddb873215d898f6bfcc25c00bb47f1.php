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

/* accueil/categorie.html.twig */
class __TwigTemplate_a90f3dc8d92c41e51869ae94dc8098eb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/categorie.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "accueil/categorie.html.twig", 1);
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
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cardfront.png"), "html", null, true);
        echo "\" alt=\"";
        echo "photo";
        echo "\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>La sélection du moment</h3>
                    <p>Découvrez nos meilleures promotions, nos dernières nouveautés ou nos plus grands succès que nous avons sélectionnés.</p>
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary\">J'en profite</a>
                </div>
            </div>
        </div>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 25
            echo "            <div class=\"col-md-4\">
                    <div class=\"promo-card\">
                        <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "getImages", [], "method", false, false, false, 27))), "html", null, true);
            echo "\" class=\"promo-image\">
                        <div class=\"promo-details\">
                            <h2 class=\"promo-title\" style=\"font-weight: bold;\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 29), "html", null, true);
            echo "</h2>
                            ";
            // line 30
            $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d");
            // line 31
            echo "                            ";
            $context["remainingDays"] = ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 31), "U") - twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 31, $this->source); })()), "U")) / (24 * 3600));
            // line 32
            echo "                            ";
            if (((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 32, $this->source); })()) > 0)) {
                // line 33
                echo "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Nombre de jours restants: ";
                echo twig_escape_filter($this->env, twig_round((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 33, $this->source); })()), 0, "floor"), "html", null, true);
                echo "</p>
                            ";
            } else {
                // line 35
                echo "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            ";
            }
            // line 37
            echo "                            <p class=\"promo-description\">Quantité disponible: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getQuantity", [], "method", false, false, false, 37), "html", null, true);
            echo "</p>
                            <p class=\"promo-description\" style=\"font-weight: bold;color:red;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getReduction", [], "method", false, false, false, 38), "html", null, true);
            echo " % de réduction</p>
                            <p class=\"promo-price\">Prix après promotion: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "method", false, false, false, 39), "html", null, true);
            echo " €</p>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-details\">Voir les détails</a>
                        </div>
                    </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 46
            echo "        <div class=\"col-md-4\">
                <div class=\"product-card\">
                    <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 48))), "html", null, true);
            echo "\" class=\"product-image\">
                    <div class=\"product-details\">
                        <h3 style=\"font-weight: bold;\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</h3>
                        <p class=\"product-price\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51), "html", null, true);
            echo " €</p>
                        <p>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                        <p class=\"product-quantity\">Quantité disponible: ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                        <p class=\"product-category\">Catégorie: ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_produit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-details\">Voir les détails</a>
                    </div>
                </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return "accueil/categorie.html.twig";
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
        return array (  193 => 60,  182 => 55,  178 => 54,  174 => 53,  170 => 52,  166 => 51,  162 => 50,  157 => 48,  153 => 46,  148 => 45,  137 => 40,  133 => 39,  129 => 38,  124 => 37,  120 => 35,  114 => 33,  111 => 32,  108 => 31,  106 => 30,  102 => 29,  97 => 27,  93 => 25,  89 => 24,  82 => 20,  73 => 16,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block body %}
<style>

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
                            <a href=\"{{ path('details_promotion', {'id': promo.id}) }}\" class=\"btn btn-details\">Voir les détails</a>
                        </div>
                    </div>
            </div>
        {% endfor %}
        {% for product in products %}
        <div class=\"col-md-4\">
                <div class=\"product-card\">
                    <img src=\"{{ asset('images/' ~ product.images) }}\" class=\"product-image\">
                    <div class=\"product-details\">
                        <h3 style=\"font-weight: bold;\">{{ product.name }}</h3>
                        <p class=\"product-price\">{{ product.price }} €</p>
                        <p>{{ product.description }}</p>
                        <p class=\"product-quantity\">Quantité disponible: {{ product.quantity }}</p>
                        <p class=\"product-category\">Catégorie: {{ product.category }}</p>
                        <a href=\"{{ path('details_produit', {'id': product.id}) }}\" class=\"btn btn-details\">Voir les détails</a>
                    </div>
                </div>
        </div>
        {% endfor %}
        
    </div>
</div>
{% endblock %}
", "accueil/categorie.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\accueil\\categorie.html.twig");
    }
}
