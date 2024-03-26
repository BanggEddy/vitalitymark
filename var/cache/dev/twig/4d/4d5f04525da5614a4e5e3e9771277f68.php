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
    <h2>Produits Normaux :</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">Product Name</th>
                <th scope=\"col\">Price</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panierDetail"]) {
            // line 20
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["panierDetail"], "price", [], "any", true, true, false, 20)) {
                // line 21
                echo "                    <tr>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "product_name", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "price", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "quantity", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                        <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "subtotal", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 28
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panierDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
</div>

<div class=\"container\">
    <h2>Produits en Promotion :</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">Product Name</th>
                <th scope=\"col\">Price After Promo</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panierDetails"]) || array_key_exists("panierDetails", $context) ? $context["panierDetails"] : (function () { throw new RuntimeError('Variable "panierDetails" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panierDetail"]) {
            // line 46
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["panierDetail"], "price_after_promo", [], "any", true, true, false, 46)) {
                // line 47
                echo "                    <tr>
                        <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "product_name", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "price_after_promo", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "quantity", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panierDetail"], "subtotal", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 54
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panierDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
    <h3>Total Price: ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "</h3>
</div>
</body>
</html>
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
        return array (  178 => 57,  174 => 55,  168 => 54,  162 => 51,  158 => 50,  154 => 49,  150 => 48,  147 => 47,  144 => 46,  140 => 45,  122 => 29,  116 => 28,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  95 => 21,  92 => 20,  88 => 19,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"mt-4 mb-4\">User Panier</h1>
    <h2>Produits Normaux :</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">Product Name</th>
                <th scope=\"col\">Price</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            {% for panierDetail in panierDetails %}
                {% if panierDetail.price is defined %}
                    <tr>
                        <td>{{ panierDetail.product_name }}</td>
                        <td>{{ panierDetail.price }}</td>
                        <td>{{ panierDetail.quantity }}</td>
                        <td>{{ panierDetail.subtotal }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
        </tbody>
    </table>
</div>

<div class=\"container\">
    <h2>Produits en Promotion :</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">Product Name</th>
                <th scope=\"col\">Price After Promo</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            {% for panierDetail in panierDetails %}
                {% if panierDetail.price_after_promo is defined %}
                    <tr>
                        <td>{{ panierDetail.product_name }}</td>
                        <td>{{ panierDetail.price_after_promo }}</td>
                        <td>{{ panierDetail.quantity }}</td>
                        <td>{{ panierDetail.subtotal }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
        </tbody>
    </table>
    <h3>Total Price: {{ totalPrice }}</h3>
</div>
</body>
</html>
{% endblock %}
", "user/uservue/indexpanier.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\user\\uservue\\indexpanier.html.twig");
    }
}
