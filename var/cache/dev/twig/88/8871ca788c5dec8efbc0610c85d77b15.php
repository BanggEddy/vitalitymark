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
        echo "

<div class=\"container\">
    <br>
    <h1>Résultats de la recherche</h1>
    <br>
    ";
        // line 12
        if ( !twig_test_empty((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "    <h2>Promotions</h2>
    <div class=\"row\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 16
                echo "            <div class=\"col-md-4\">
                <div class=\"promo-card\">
                    <!-- Afficher les détails de la promotion -->
                    <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "getImages", [], "method", false, false, false, 19))), "html", null, true);
                echo "\" class=\"promo-image\">
                    <div class=\"promo-details\">
                        <h5 class=\"promo-title\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 21), "html", null, true);
                echo "</h5>
                        <p class=\"promo-description\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDescription", [], "method", false, false, false, 22), "html", null, true);
                echo "</p>
                        <p class=\"promo-date\">Date de début: ";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateDebut", [], "method", false, false, false, 23), "d/m/Y"), "html", null, true);
                echo "</p>
                        <p class=\"promo-date\">Date de fin: ";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 24), "d/m/Y"), "html", null, true);
                echo "</p>
                        ";
                // line 26
                echo "                        ";
                $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d");
                // line 27
                echo "                        ";
                $context["remainingDays"] = ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 27), "U") - twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 27, $this->source); })()), "U")) / (24 * 3600));
                // line 28
                echo "                        ";
                if (((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 28, $this->source); })()) > 0)) {
                    // line 29
                    echo "                            <p class=\"promo-description\">Nombre de jours restants: ";
                    echo twig_escape_filter($this->env, twig_round((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 29, $this->source); })()), 0, "floor"), "html", null, true);
                    echo "</p>
                        ";
                } else {
                    // line 31
                    echo "                            <p class=\"promo-description\">Offre expirée</p>
                        ";
                }
                // line 33
                echo "                        <p class=\"promo-description\">Quantité disponible: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getQuantity", [], "method", false, false, false, 33), "html", null, true);
                echo "</p>
                        ";
                // line 35
                echo "                        <p class=\"promo-description\">Réduction de: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getReduction", [], "method", false, false, false, 35), "html", null, true);
                echo " %</p>

                        <p class=\"promo-price\">Prix après promotion: ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "method", false, false, false, 37), "html", null, true);
                echo " €</p>

                        <form action=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "getId", [], "method", false, false, false, 39)]), "html", null, true);
                echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"quantity\">Quantité :</label>
                                <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                    ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_get_attribute($this->env, $this->source, $context["promo"], "getQuantity", [], "method", false, false, false, 43)));
                foreach ($context['_seq'] as $context["_key"] => $context["qty"]) {
                    // line 44
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
                // line 46
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
            // line 54
            echo "    </div>
    ";
        }
        // line 56
        echo "    ";
        if ( !twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 56, $this->source); })()))) {
            // line 57
            echo "    <h2>Produits</h2>
    <div class=\"row\">
        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 60
                echo "        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 62))), "html", null, true);
                echo "\" class=\"card-img-top product-image\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62), "html", null, true);
                echo "\">
                <div class=\"product-details\">
                    <h5 class=\"card-title\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "</h5>
                    <p class=\"card-text\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 65), "html", null, true);
                echo "</p>
                    <p class=\"card-text\"><strong>Prix :</strong> ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66), "html", null, true);
                echo " €</p>
                    <p class=\"card-text\"><strong>Quantité disponible :</strong> ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 67), "html", null, true);
                echo "</p>
                </div>
                <div class=\"product-footer\">
                    <form action=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"quantity\">Quantité :</label>
                            <select name=\"quantity\" id=\"quantity\" class=\"form-control custom-select\">
                                ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 74)));
                foreach ($context['_seq'] as $context["_key"] => $context["qty"]) {
                    // line 75
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
                // line 77
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
            // line 85
            echo "    </div>
    ";
        }
        // line 87
        echo "
    ";
        // line 88
        if ((twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 88, $this->source); })())) && twig_test_empty((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 88, $this->source); })())))) {
            // line 89
            echo "    <p>Aucun résultat trouvé.</p>
    ";
        }
        // line 91
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
        return array (  279 => 91,  275 => 89,  273 => 88,  270 => 87,  266 => 85,  253 => 77,  242 => 75,  238 => 74,  231 => 70,  225 => 67,  221 => 66,  217 => 65,  213 => 64,  206 => 62,  202 => 60,  198 => 59,  194 => 57,  191 => 56,  187 => 54,  174 => 46,  163 => 44,  159 => 43,  152 => 39,  147 => 37,  141 => 35,  136 => 33,  132 => 31,  126 => 29,  123 => 28,  120 => 27,  117 => 26,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  96 => 19,  91 => 16,  87 => 15,  83 => 13,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Résultats de la recherche{% endblock %}

{% block body %}


<div class=\"container\">
    <br>
    <h1>Résultats de la recherche</h1>
    <br>
    {% if promos is not empty %}
    <h2>Promotions</h2>
    <div class=\"row\">
        {% for promo in promos %}
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
                                    {% for qty in 0..promo.getQuantity() %}
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
    {% endif %}
    {% if products is not empty %}
    <h2>Produits</h2>
    <div class=\"row\">
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
    {% endif %}

    {% if products is empty and promos is empty %}
    <p>Aucun résultat trouvé.</p>
    {% endif %}
</div>
{% endblock %}
", "user/uservue/search.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\user\\uservue\\search.html.twig");
    }
}
