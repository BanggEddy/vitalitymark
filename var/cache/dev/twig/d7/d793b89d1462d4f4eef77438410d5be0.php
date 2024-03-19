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

/* user/uservue/index.html.twig */
class __TwigTemplate_ef781f65281f748ec82349c5b1698d8a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/index.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminproductsController!";
        
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
    }

    .product-image {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        border-radius: 10px;
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
    .custom-select {
        font-size: 14px;
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
    <br><br>
    <h1>Liste des produits</h1>
    <br><br>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <h2>En ce moment</h2>
                <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cardfront.png"), "html", null, true);
        echo "\" alt=\"";
        echo "photo";
        echo "\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>La sélection du moment</h3>
                    <p>Découvrez nos meilleures promotions, nos dernières nouveautés ou nos plus grands succès que nous avons sélectionnés.</p>
                    <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary\">J'en profite</a>
                </div>
            </div>
        </div>
        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 107
            echo "            <div class=\"col-md-4\">
                <div class=\"promo-card\">
                    <!-- Afficher les détails de la promotion -->
                    <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "getImages", [], "method", false, false, false, 110))), "html", null, true);
            echo "\" class=\"promo-image\">
                    <div class=\"promo-details\">
                        <h5 class=\"promo-title\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 112), "html", null, true);
            echo "</h5>
                        <p class=\"promo-description\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDescription", [], "method", false, false, false, 113), "html", null, true);
            echo "</p>
                        <p class=\"promo-date\">Date de début: ";
            // line 114
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateDebut", [], "method", false, false, false, 114), "d/m/Y"), "html", null, true);
            echo "</p>
                        <p class=\"promo-date\">Date de fin: ";
            // line 115
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 115), "d/m/Y"), "html", null, true);
            echo "</p>
                        ";
            // line 117
            echo "                        ";
            $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d");
            // line 118
            echo "                        ";
            $context["remainingDays"] = ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 118), "U") - twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 118, $this->source); })()), "U")) / (24 * 3600));
            // line 119
            echo "                        ";
            if (((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 119, $this->source); })()) > 0)) {
                // line 120
                echo "                            <p class=\"promo-description\">Nombre de jours restants: ";
                echo twig_escape_filter($this->env, twig_round((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 120, $this->source); })()), 0, "floor"), "html", null, true);
                echo "</p>
                        ";
            } else {
                // line 122
                echo "                            <p class=\"promo-description\">Offre expirée</p>
                        ";
            }
            // line 124
            echo "                        <p class=\"promo-description\">Quantité disponible: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getQuantity", [], "method", false, false, false, 124), "html", null, true);
            echo "</p>
                        ";
            // line 126
            echo "                        <p class=\"promo-description\">Réduction de: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getReduction", [], "method", false, false, false, 126), "html", null, true);
            echo " %</p>

                        <p class=\"promo-price\">Prix après promotion: ";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "method", false, false, false, 128), "html", null, true);
            echo " €</p>

                        <form action=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "getId", [], "method", false, false, false, 130)]), "html", null, true);
            echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"quantity\">Quantité :</label>
                                <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                    ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["promo"], "getQuantity", [], "method", false, false, false, 134)));
            foreach ($context['_seq'] as $context["_key"] => $context["qty"]) {
                // line 135
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["qty"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["qty"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qty'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 146
            echo "        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 148))), "html", null, true);
            echo "\" class=\"card-img-top product-image\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 148), "html", null, true);
            echo "\">
                <div class=\"product-details\">
                    <h5 class=\"card-title\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 150), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 151), "html", null, true);
            echo "</p>
                    <p class=\"card-text\"><strong>Prix :</strong> ";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 152), "html", null, true);
            echo " €</p>
                    <p class=\"card-text\"><strong>Quantité disponible :</strong> ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 153), "html", null, true);
            echo "</p>
                </div>
                <div class=\"product-footer\">
                    <form action=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            echo "\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"quantity\">Quantité :</label>
                            <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 160)));
            foreach ($context['_seq'] as $context["_key"] => $context["qty"]) {
                // line 161
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["qty"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["qty"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qty'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                            </select>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
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
        return "user/uservue/index.html.twig";
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
        return array (  352 => 171,  339 => 163,  328 => 161,  324 => 160,  317 => 156,  311 => 153,  307 => 152,  303 => 151,  299 => 150,  292 => 148,  288 => 146,  283 => 145,  270 => 137,  259 => 135,  255 => 134,  248 => 130,  243 => 128,  237 => 126,  232 => 124,  228 => 122,  222 => 120,  219 => 119,  216 => 118,  213 => 117,  209 => 115,  205 => 114,  201 => 113,  197 => 112,  192 => 110,  187 => 107,  183 => 106,  176 => 102,  167 => 98,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Hello AdminproductsController!{% endblock %}

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
    }

    .product-image {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        border-radius: 10px;
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
    .custom-select {
        font-size: 14px;
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
    <br><br>
    <h1>Liste des produits</h1>
    <br><br>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <h2>En ce moment</h2>
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

                        <form action=\"{{ path('add_to_cart', {'id': promo.getId()}) }}\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"quantity\">Quantité :</label>
                                <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                    {% for qty in 1..promo.getQuantity() %}
                                        <option value=\"{{ qty }}\">{{ qty }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
                        </form>
                    </div>
                </div>
            </div>
        {% endfor %}
        {% for product in products %}
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"{{ asset('images/' ~ product.images) }}\" class=\"card-img-top product-image\" alt=\"{{ product.name }}\">
                <div class=\"product-details\">
                    <h5 class=\"card-title\">{{ product.name }}</h5>
                    <p class=\"card-text\">{{ product.description }}</p>
                    <p class=\"card-text\"><strong>Prix :</strong> {{ product.price }} €</p>
                    <p class=\"card-text\"><strong>Quantité disponible :</strong> {{ product.quantity }}</p>
                </div>
                <div class=\"product-footer\">
                    <form action=\"{{ path('add_to_cart', {'id': product.id}) }}\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"quantity\">Quantité :</label>
                            <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                {% for qty in 0..product.quantity %}
                                <option value=\"{{ qty }}\">{{ qty }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "user/uservue/index.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\user\\uservue\\index.html.twig");
    }
}
