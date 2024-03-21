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

/* loyalty_card/show.html.twig */
class __TwigTemplate_efc7de2c28f28254d5c70690bb50194c extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loyalty_card/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "loyalty_card/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "LoyaltyCard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>LoyaltyCard</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Card_number</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 16, $this->source); })()), "cardNumber", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Card_type</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 20, $this->source); })()), "cardType", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Points</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 24, $this->source); })()), "points", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coupon</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 28, $this->source); })()), "coupon", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Personalized_offer</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 32, $this->source); })()), "personalizedOffer", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loyalty_card_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loyalty_card_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["loyalty_card"]) || array_key_exists("loyalty_card", $context) ? $context["loyalty_card"] : (function () { throw new RuntimeError('Variable "loyalty_card" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "loyalty_card/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "loyalty_card/show.html.twig";
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
        return array (  134 => 41,  129 => 39,  124 => 37,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LoyaltyCard{% endblock %}

{% block body %}
    <h1>LoyaltyCard</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ loyalty_card.id }}</td>
            </tr>
            <tr>
                <th>Card_number</th>
                <td>{{ loyalty_card.cardNumber }}</td>
            </tr>
            <tr>
                <th>Card_type</th>
                <td>{{ loyalty_card.cardType }}</td>
            </tr>
            <tr>
                <th>Points</th>
                <td>{{ loyalty_card.points }}</td>
            </tr>
            <tr>
                <th>Coupon</th>
                <td>{{ loyalty_card.coupon }}</td>
            </tr>
            <tr>
                <th>Personalized_offer</th>
                <td>{{ loyalty_card.personalizedOffer }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_loyalty_card_index') }}\">back to list</a>

    <a href=\"{{ path('app_loyalty_card_edit', {'id': loyalty_card.id}) }}\">edit</a>

    {{ include('loyalty_card/_delete_form.html.twig') }}
{% endblock %}
", "loyalty_card/show.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\loyalty_card\\show.html.twig");
    }
}
