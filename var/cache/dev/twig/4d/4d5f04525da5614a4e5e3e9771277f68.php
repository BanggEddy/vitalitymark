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

/* user/uservue/indexpanier.html.twig */
class __TwigTemplate_d8d43dcca3672e227bceadcee4794bcd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/indexpanier.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/indexpanier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Votre panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        /* CSS pour le thème de la nature */
        .nature-theme {
            background-color: #f3f5f6;
            color: #33403e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .nature-theme h1,
        .nature-theme h2,
        .nature-theme h3,
        .nature-theme h4,
        .nature-theme h5,
        .nature-theme h6 {
            color: #4a4a4a;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "<div class=\"container nature-theme\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">
            <h1 class=\"mt-4 mb-4\">User Panier</h1>
            <h2>Produits :</h2>
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panierDetail"]) {
            // line 35
            echo "                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["panierDetail"], "images", [], "array", false, false, false, 37))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "name", [], "array", false, false, false, 37), "html", null, true);
            echo "\" class=\"img-fluid\" style=\"max-width: 100px; max-height: 100px;\">
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <h5 style=\"font-size: 16px;\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "name", [], "array", false, false, false, 42), "html", null, true);
            echo "</h5>
                                <p style=\"font-size: 14px;\">Quantity: ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "quantity", [], "array", false, false, false, 43), "html", null, true);
            echo "</p>
                                <form method=\"POST\" action=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_quantity");
            echo "\" class=\"quantity-form\">
                                    <input type=\"hidden\" name=\"panierId\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "id", [], "array", false, false, false, 45), "html", null, true);
            echo "\">
                                    <button type=\"submit\" name=\"action\" value=\"add\" class=\"btn btn-primary btn-sm\">+</button>
                                    <button type=\"submit\" name=\"action\" value=\"subtract\" class=\"btn btn-primary btn-sm\">-</button>
                                </form>
                            </div>

                            <div class=\"col-md-4 text-right\">
                                <p style=\"font-size: 14px;\">Price: ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "price", [], "array", false, false, false, 52), "html", null, true);
            echo "</p>
                                ";
            // line 53
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["panierDetail"], "reduction", [], "array", false, false, false, 53))) {
                // line 54
                echo "                                    <p style=\"font-size: 14px;\">Reduction: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "reduction", [], "array", false, false, false, 54), "html", null, true);
                echo "%</p>
                                ";
            } else {
                // line 56
                echo "                                    <p style=\"font-size: 14px;\">Reduction: N/A</p>
                                ";
            }
            // line 58
            echo "                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <p style=\"font-size: 14px;\">Subtotal: ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "subtotal", [], "array", false, false, false, 62), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panierDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            <div class=\"row justify-content-end mb-4\">
                <div class=\"col-md-6 text-right\">
                    <p style=\"font-size: 16px;\">Nombre d'articles: ";
        // line 70
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 70, $this->source); })())), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-6 text-right\"> <!-- Changed to col-md-6 -->
                    <h3 style=\"font-size: 18px;\">Total Price: ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</h3> <!-- Moved total price here -->
                    <button type=\"button\" class=\"btn btn-success\">Valider mon panier</button>
                </div>
            </div>
        </div>
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
        return "user/uservue/indexpanier.html.twig";
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
        return array (  201 => 73,  195 => 70,  191 => 68,  179 => 62,  173 => 58,  169 => 56,  163 => 54,  161 => 53,  157 => 52,  147 => 45,  143 => 44,  139 => 43,  135 => 42,  125 => 37,  121 => 35,  117 => 34,  110 => 29,  103 => 28,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* CSS pour le thème de la nature */
        .nature-theme {
            background-color: #f3f5f6;
            color: #33403e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .nature-theme h1,
        .nature-theme h2,
        .nature-theme h3,
        .nature-theme h4,
        .nature-theme h5,
        .nature-theme h6 {
            color: #4a4a4a;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container nature-theme\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">
            <h1 class=\"mt-4 mb-4\">User Panier</h1>
            <h2>Produits :</h2>
            {% for panierDetail in panierDetails %}
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <img src=\"{{ asset('images/' ~ panierDetail['images']) }}\" alt=\"{{ panierDetail['name'] }}\" class=\"img-fluid\" style=\"max-width: 100px; max-height: 100px;\">
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <h5 style=\"font-size: 16px;\">{{ panierDetail['name'] }}</h5>
                                <p style=\"font-size: 14px;\">Quantity: {{ panierDetail['quantity'] }}</p>
                                <form method=\"POST\" action=\"{{ path('update_quantity') }}\" class=\"quantity-form\">
                                    <input type=\"hidden\" name=\"panierId\" value=\"{{ panierDetail['id'] }}\">
                                    <button type=\"submit\" name=\"action\" value=\"add\" class=\"btn btn-primary btn-sm\">+</button>
                                    <button type=\"submit\" name=\"action\" value=\"subtract\" class=\"btn btn-primary btn-sm\">-</button>
                                </form>
                            </div>

                            <div class=\"col-md-4 text-right\">
                                <p style=\"font-size: 14px;\">Price: {{ panierDetail['price'] }}</p>
                                {% if panierDetail['reduction'] is not null %}
                                    <p style=\"font-size: 14px;\">Reduction: {{ panierDetail['reduction'] }}%</p>
                                {% else %}
                                    <p style=\"font-size: 14px;\">Reduction: N/A</p>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <p style=\"font-size: 14px;\">Subtotal: {{ panierDetail['subtotal'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
            <div class=\"row justify-content-end mb-4\">
                <div class=\"col-md-6 text-right\">
                    <p style=\"font-size: 16px;\">Nombre d'articles: {{ panierDetails|length }}</p>
                </div>
                <div class=\"col-md-6 text-right\"> <!-- Changed to col-md-6 -->
                    <h3 style=\"font-size: 18px;\">Total Price: {{ totalPrice }}</h3> <!-- Moved total price here -->
                    <button type=\"button\" class=\"btn btn-success\">Valider mon panier</button>
                </div>
            </div>
        </div>
    </div>
</div>


{% endblock %}
", "user/uservue/indexpanier.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\user\\uservue\\indexpanier.html.twig");
    }
}
