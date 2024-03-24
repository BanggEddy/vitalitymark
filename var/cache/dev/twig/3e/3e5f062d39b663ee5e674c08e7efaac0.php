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

/* admin/adminproducts/index.html.twig */
class __TwigTemplate_ebd89cfeabc738fad1035fed1686f3db extends Template
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
        return "headeradmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminproducts/index.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/adminproducts/index.html.twig", 1);
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
        echo "

<div class=\"container\">
    <br>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <h2> En ce moment</h2>
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cardfront.png"), "html", null, true);
        echo "\" alt=\"";
        echo "photo";
        echo "\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>La sélection du moment</h3>
                    <p>Découvrez nos meilleures promotions, nos dernières nouveautés ou nos plus grands succès que nous avons sélectionnés.</p>
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary\">J'en profite</a>
                </div>
            </div>
        </div>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 24
            echo "            <div class=\"col-md-4\">
                    <div class=\"promo-card\">
                        <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["promo"], "getImages", [], "method", false, false, false, 26))), "html", null, true);
            echo "\" class=\"promo-image\">
                        <div class=\"promo-details\">
                            <h2 class=\"promo-title\" style=\"font-weight: bold;\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getName", [], "method", false, false, false, 28), "html", null, true);
            echo "</h2>
                            ";
            // line 29
            $context["now"] = twig_date_format_filter($this->env, "now", "Y-m-d");
            // line 30
            echo "                            ";
            $context["remainingDays"] = ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getDateFin", [], "method", false, false, false, 30), "U") - twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 30, $this->source); })()), "U")) / (24 * 3600));
            // line 31
            echo "                            ";
            if (((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 31, $this->source); })()) > 0)) {
                // line 32
                echo "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Nombre de jours restants: ";
                echo twig_escape_filter($this->env, twig_round((isset($context["remainingDays"]) || array_key_exists("remainingDays", $context) ? $context["remainingDays"] : (function () { throw new RuntimeError('Variable "remainingDays" does not exist.', 32, $this->source); })()), 0, "floor"), "html", null, true);
                echo "</p>
                            ";
            } else {
                // line 34
                echo "                                <p class=\"promo-description\" style=\"font-weight: bold;\">Offre expirée</p>
                            ";
            }
            // line 36
            echo "                            <p class=\"promo-description\">Quantité disponible: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getQuantity", [], "method", false, false, false, 36), "html", null, true);
            echo "</p>
                            <p class=\"promo-description\" style=\"font-weight: bold;color:red;\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getReduction", [], "method", false, false, false, 37), "html", null, true);
            echo " % de réduction</p>
                            <p class=\"promo-price\">Prix après promotion: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getPriceafterpromo", [], "method", false, false, false, 38), "html", null, true);
            echo " €</p>
                            <form action=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_quantity_promo", ["promoId" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" method=\"post\" class=\"mb-3\">
                                <div class=\"input-group\">
                                    <label for=\"add_quantity_promo\" class=\"input-group-text\">Ajouter Quantité:</label>
                                    <input type=\"number\" id=\"add_quantity_promo\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                                    <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
                                </div>
                            </form>
                            <form action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_quantity_promo", ["promoId" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" method=\"post\">
                                <div class=\"input-group\">
                                    <label for=\"remove_quantity_promo\" class=\"input-group-text\">Retirer Quantité:</label>
                                    <input type=\"number\" id=\"remove_quantity_promo\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                                    <button type=\"submit\" class=\"btn btn-danger\">Retirer</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 58
            echo "        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 60))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</h3>
                    <p class=\"product-price\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63), "html", null, true);
            echo " €</p>
                    <p>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
                    <p class=\"product-quantity\">Quantité disponible: ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
                    <p class=\"product-category\">Catégorie: ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                    
                    <!-- Formulaires pour ajouter et retirer la quantité -->
                    <form action=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_quantity", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" method=\"post\" class=\"mb-3\">
                        <div class=\"input-group\">
                            <label for=\"add_quantity\" class=\"input-group-text\">Ajouter Quantité:</label>
                            <input type=\"number\" id=\"add_quantity\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                            <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
                        </div>
                    </form>

                    <form action=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_quantity", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" method=\"post\">
                        <div class=\"input-group\">
                            <label for=\"remove_quantity\" class=\"input-group-text\">Retirer Quantité:</label>
                            <input type=\"number\" id=\"remove_quantity\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                            <button type=\"submit\" class=\"btn btn-danger\">Retirer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
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
        return "admin/adminproducts/index.html.twig";
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
        return array (  241 => 88,  224 => 77,  213 => 69,  207 => 66,  203 => 65,  199 => 64,  195 => 63,  191 => 62,  184 => 60,  180 => 58,  175 => 57,  158 => 46,  148 => 39,  144 => 38,  140 => 37,  135 => 36,  131 => 34,  125 => 32,  122 => 31,  119 => 30,  117 => 29,  113 => 28,  108 => 26,  104 => 24,  100 => 23,  93 => 19,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Hello AdminproductsController!{% endblock %}

{% block body %}


<div class=\"container\">
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
                            <form action=\"{{ path('add_quantity_promo', {'promoId': promo.id}) }}\" method=\"post\" class=\"mb-3\">
                                <div class=\"input-group\">
                                    <label for=\"add_quantity_promo\" class=\"input-group-text\">Ajouter Quantité:</label>
                                    <input type=\"number\" id=\"add_quantity_promo\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                                    <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
                                </div>
                            </form>
                            <form action=\"{{ path('remove_quantity_promo', {'promoId': promo.id}) }}\" method=\"post\">
                                <div class=\"input-group\">
                                    <label for=\"remove_quantity_promo\" class=\"input-group-text\">Retirer Quantité:</label>
                                    <input type=\"number\" id=\"remove_quantity_promo\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                                    <button type=\"submit\" class=\"btn btn-danger\">Retirer</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        {% endfor %}
        {% for product in products %}
        <div class=\"col-md-4\">
            <div class=\"product-card\">
                <img src=\"{{ asset('images/' ~ product.images) }}\" alt=\"{{ product.name }}\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>{{ product.name }}</h3>
                    <p class=\"product-price\">{{ product.price }} €</p>
                    <p>{{ product.description }}</p>
                    <p class=\"product-quantity\">Quantité disponible: {{ product.quantity }}</p>
                    <p class=\"product-category\">Catégorie: {{ product.category }}</p>
                    
                    <!-- Formulaires pour ajouter et retirer la quantité -->
                    <form action=\"{{ path('add_quantity', {'productId': product.id}) }}\" method=\"post\" class=\"mb-3\">
                        <div class=\"input-group\">
                            <label for=\"add_quantity\" class=\"input-group-text\">Ajouter Quantité:</label>
                            <input type=\"number\" id=\"add_quantity\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                            <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
                        </div>
                    </form>

                    <form action=\"{{ path('remove_quantity', {'productId': product.id}) }}\" method=\"post\">
                        <div class=\"input-group\">
                            <label for=\"remove_quantity\" class=\"input-group-text\">Retirer Quantité:</label>
                            <input type=\"number\" id=\"remove_quantity\" name=\"quantity\" class=\"form-control\" min=\"1\" value=\"1\">
                            <button type=\"submit\" class=\"btn btn-danger\">Retirer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {% endfor %}
        
    </div>
</div>
{% endblock %}
", "admin/adminproducts/index.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\admin\\adminproducts\\index.html.twig");
    }
}
