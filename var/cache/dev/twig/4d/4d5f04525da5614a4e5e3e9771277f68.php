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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1 class=\"mt-4 mb-4\">User Panier</h1>
    <h2>Produits :</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Product Name</th>
                <th scope=\"col\">Price</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Subtotal</th>
                <th scope=\"col\">Reduction</th> ";
        // line 18
        echo "            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panierDetail"]) {
            // line 22
            echo "                <tr>
                    <td>
                        <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["panierDetail"], "images", [], "array", false, false, false, 24))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "name", [], "array", false, false, false, 24), "html", null, true);
            echo "\" class=\"product-image\">
                    </td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "name", [], "array", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "price", [], "array", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "quantity", [], "array", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "subtotal", [], "array", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 31
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["panierDetail"], "reduction", [], "array", false, false, false, 31))) {
                echo " ";
                // line 32
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "reduction", [], "array", false, false, false, 32), "html", null, true);
                echo "% ";
                // line 33
                echo "                        ";
            } else {
                // line 34
                echo "                            N/A ";
                // line 35
                echo "                        ";
            }
            // line 36
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panierDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    <h3>Total Price: ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</h3>
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
        return array (  150 => 41,  146 => 39,  138 => 36,  135 => 35,  133 => 34,  130 => 33,  126 => 32,  123 => 31,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  99 => 24,  95 => 22,  91 => 21,  86 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"mt-4 mb-4\">User Panier</h1>
    <h2>Produits :</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Product Name</th>
                <th scope=\"col\">Price</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Subtotal</th>
                <th scope=\"col\">Reduction</th> {# Nouvelle colonne pour afficher la réduction #}
            </tr>
        </thead>
        <tbody>
            {% for panierDetail in panierDetails %}
                <tr>
                    <td>
                        <img src=\"{{ asset('images/' ~ panierDetail['images']) }}\" alt=\"{{ panierDetail['name'] }}\" class=\"product-image\">
                    </td>
                    <td>{{ panierDetail['name'] }}</td>
                    <td>{{ panierDetail['price'] }}</td>
                    <td>{{ panierDetail['quantity'] }}</td>
                    <td>{{ panierDetail['subtotal'] }}</td>
                    <td>
                        {% if panierDetail['reduction'] is not null %} {# Vérifier s'il y a une réduction #}
                            {{ panierDetail['reduction'] }}% {# Afficher la réduction en pourcentage #}
                        {% else %}
                            N/A {# Afficher N/A si aucune réduction n'est disponible #}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <h3>Total Price: {{ totalPrice }}</h3>
</div>
{% endblock %}
", "user/uservue/indexpanier.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\user\\uservue\\indexpanier.html.twig");
    }
}
