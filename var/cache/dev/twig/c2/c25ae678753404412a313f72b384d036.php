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

/* admin/coupon/show.html.twig */
class __TwigTemplate_779e1773293202955bb64b41ffc8f50e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coupon/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/coupon/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coupon";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Coupon</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Start_date</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 24, $this->source); })()), "startDate", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 24, $this->source); })()), "startDate", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>End_date</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 28, $this->source); })()), "endDate", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 28, $this->source); })()), "endDate", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Reduction</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 32, $this->source); })()), "reduction", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coupon_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "admin/coupon/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/coupon/show.html.twig";
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

{% block title %}Coupon{% endblock %}

{% block body %}
    <h1>Coupon</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ coupon.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ coupon.type }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ coupon.description }}</td>
            </tr>
            <tr>
                <th>Start_date</th>
                <td>{{ coupon.startDate ? coupon.startDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>End_date</th>
                <td>{{ coupon.endDate ? coupon.endDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Reduction</th>
                <td>{{ coupon.reduction }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_coupon_index') }}\">back to list</a>

    <a href=\"{{ path('app_coupon_edit', {'id': coupon.id}) }}\">edit</a>

    {{ include('admin/coupon/_delete_form.html.twig') }}
{% endblock %}
", "admin/coupon/show.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\admin\\coupon\\show.html.twig");
    }
}
