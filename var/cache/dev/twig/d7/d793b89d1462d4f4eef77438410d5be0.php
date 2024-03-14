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
        box-shadow: 10px 10px 2px #7cdf7c; 
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
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cardfront.png"), "html", null, true);
        echo "\" alt=\"";
        echo "photo";
        echo "\" class=\"product-image\">
                <div class=\"product-details\">
                    <h3>La sélection du moment</h3>
                    <p>Découvrez nos meilleures promotions, nos dernières nouveautés ou nos plus grands succès que nous avons sélectionnés.</p>
                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary\">J'en profite</a>
                </div>
            </div>
        </div>
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 60
            echo "        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100 product-card\">
                <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 62))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
                <div class=\"card-body\">
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
                <div class=\"card-footer\">
                    <form action=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"quantity\">Quantité :</label>
                            <select name=\"quantity\" id=\"quantity\" class=\"form-control\">
                                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 74)));
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
        return array (  204 => 85,  191 => 77,  180 => 75,  176 => 74,  169 => 70,  163 => 67,  159 => 66,  155 => 65,  151 => 64,  144 => 62,  140 => 60,  136 => 59,  129 => 55,  120 => 51,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
        box-shadow: 10px 10px 2px #7cdf7c; 
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
        {% for product in products %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100 product-card\">
                <img src=\"{{ asset('images/' ~ product.images) }}\" class=\"card-img-top\" alt=\"{{ product.name }}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ product.name }}</h5>
                    <p class=\"card-text\">{{ product.description }}</p>
                    <p class=\"card-text\"><strong>Prix :</strong> {{ product.price }} €</p>
                    <p class=\"card-text\"><strong>Quantité disponible :</strong> {{ product.quantity }}</p>
                </div>
                <div class=\"card-footer\">
                    <form action=\"{{ path('add_to_cart', {'id': product.id}) }}\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"quantity\">Quantité :</label>
                            <select name=\"quantity\" id=\"quantity\" class=\"form-control\">
                                {% for qty in 1..product.quantity %}
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
