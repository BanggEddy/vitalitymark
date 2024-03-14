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

/* user/uservue/panierindex.html.twig */
class __TwigTemplate_f667f058f476abed85c56dfd71e83594 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/panierindex.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/panierindex.html.twig", 1);
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
        echo "    <div class=\"container\">
        <h1>Votre Panier</h1>
        ";
        // line 8
        if (twig_test_empty((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "            <p>Votre panier est vide.</p>
        ";
        } else {
            // line 11
            echo "            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                        <tr>
                            <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                            <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 24), "price", [], "any", false, false, false, 24), "html", null, true);
                echo " €</td>
                            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                            <td>";
                // line 26
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 26) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 26), "price", [], "any", false, false, false, 26)), "html", null, true);
                echo " €</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </tbody>
            </table>
            <p>Total du panier : ";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 31, $this->source); })()), "html", null, true);
            echo " €</p>
        ";
        }
        // line 33
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/uservue/panierindex.html.twig";
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
        return array (  132 => 33,  127 => 31,  123 => 29,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  99 => 22,  95 => 21,  83 => 11,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Votre Panier</h1>
        {% if panier is empty %}
            <p>Votre panier est vide.</p>
        {% else %}
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in panier %}
                        <tr>
                            <td>{{ item.product.name }}</td>
                            <td>{{ item.product.price }} €</td>
                            <td>{{ item.quantity }}</td>
                            <td>{{ item.quantity * item.product.price }} €</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
            <p>Total du panier : {{ total }} €</p>
        {% endif %}
    </div>
{% endblock %}
", "user/uservue/panierindex.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\user\\uservue\\panierindex.html.twig");
    }
}
