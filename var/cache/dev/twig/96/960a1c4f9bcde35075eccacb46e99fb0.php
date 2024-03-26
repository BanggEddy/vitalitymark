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

/* admin/promo_admin/show.html.twig */
class __TwigTemplate_b5a76d06c6c5c18f89e6de010ac0cba1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promo_admin/show.html.twig"));

        $this->parent = $this->loadTemplate("headeradmin.html.twig", "admin/promo_admin/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Promo";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .promo-card {
            background-color: #e0f2f1; 
            border: 1px solid #7cdf7c; 
            border-radius: 10px;
            padding: 20px;
            box-shadow: 5px 5px 2px #7cdf7c; 
            max-width: 400px; 
            margin: auto; 
            margin-top: 50px; 
            transition: transform 0.3s ease;
        }

        .promo-card:hover {
            transform: scale(1.05);
            box-shadow: 8px 8px 4px #7cdf7c;
            transition: 0.5s;
        }

        .promo-details {
            margin-top: 10px;
        }

        .promo-price {
            font-size: 18px;
            font-weight: bold;
        }

        .promo-quantity {
            color: #28a745; 
        }

        .promo-category {
            color: #28a745; 
        }

        .promo-actions a {
            margin-right: 10px;
        }

        .promo-actions a:hover {
            box-shadow: 2px 2px 2px #28a745;
            transform: translateY(-1px);
            transition: 0.5s;
        }
    </style>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"promo-card\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Reduction</th>
                                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 64, $this->source); })()), "reduction", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Id du Produit</th>
                                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 68, $this->source); })()), "idproduct", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Date Fin</th>
                                <td>";
        // line 72
        ((twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 72, $this->source); })()), "dateFin", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 72, $this->source); })()), "dateFin", [], "any", false, false, false, 72), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                            </tr>
                            <tr>
                                <th>Date Début</th>
                                <td>";
        // line 76
        ((twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 76, $this->source); })()), "dateDebut", [], "any", false, false, false, 76)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 76, $this->source); })()), "dateDebut", [], "any", false, false, false, 76), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                            </tr>
                            <tr>
                                <th>Prix après promo</th>
                                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 80, $this->source); })()), "priceafterpromo", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Quantité</th>
                                <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 88, $this->source); })()), "quantity", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Prix</th>
                                <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 92, $this->source); })()), "price", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Images</th>
                                <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 96, $this->source); })()), "images", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Nom</th>
                                <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 100, $this->source); })()), "name", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Catégorie</th>
                                <td>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 104, $this->source); })()), "category", [], "any", false, false, false, 104), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>

                    <div style=\"text-align: center; margin-top: 20px;\">
                        <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_index");
        echo "\" class=\"btn btn-primary\">Retour à la liste</a>
                        <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promo_admin_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
        echo "\" class=\"btn btn-info\">Modifier</a>
                            ";
        // line 112
        echo twig_include($this->env, $context, "admin/promo_admin/_delete_form.html.twig");
        echo "
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
        return "admin/promo_admin/show.html.twig";
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
        return array (  223 => 112,  219 => 111,  215 => 110,  206 => 104,  199 => 100,  192 => 96,  185 => 92,  178 => 88,  171 => 84,  164 => 80,  157 => 76,  150 => 72,  143 => 68,  136 => 64,  129 => 60,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeradmin.html.twig' %}

{% block title %}Promo{% endblock %}

{% block body %}
    <style>
        .promo-card {
            background-color: #e0f2f1; 
            border: 1px solid #7cdf7c; 
            border-radius: 10px;
            padding: 20px;
            box-shadow: 5px 5px 2px #7cdf7c; 
            max-width: 400px; 
            margin: auto; 
            margin-top: 50px; 
            transition: transform 0.3s ease;
        }

        .promo-card:hover {
            transform: scale(1.05);
            box-shadow: 8px 8px 4px #7cdf7c;
            transition: 0.5s;
        }

        .promo-details {
            margin-top: 10px;
        }

        .promo-price {
            font-size: 18px;
            font-weight: bold;
        }

        .promo-quantity {
            color: #28a745; 
        }

        .promo-category {
            color: #28a745; 
        }

        .promo-actions a {
            margin-right: 10px;
        }

        .promo-actions a:hover {
            box-shadow: 2px 2px 2px #28a745;
            transform: translateY(-1px);
            transition: 0.5s;
        }
    </style>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"promo-card\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ promo.id }}</td>
                            </tr>
                            <tr>
                                <th>Reduction</th>
                                <td>{{ promo.reduction }}</td>
                            </tr>
                            <tr>
                                <th>Id du Produit</th>
                                <td>{{ promo.idproduct.id }}</td>
                            </tr>
                            <tr>
                                <th>Date Fin</th>
                                <td>{{ promo.dateFin ? promo.dateFin|date('Y-m-d') : '' }}</td>
                            </tr>
                            <tr>
                                <th>Date Début</th>
                                <td>{{ promo.dateDebut ? promo.dateDebut|date('Y-m-d') : '' }}</td>
                            </tr>
                            <tr>
                                <th>Prix après promo</th>
                                <td>{{ promo.priceafterpromo }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ promo.description }}</td>
                            </tr>
                            <tr>
                                <th>Quantité</th>
                                <td>{{ promo.quantity }}</td>
                            </tr>
                            <tr>
                                <th>Prix</th>
                                <td>{{ promo.price }}</td>
                            </tr>
                            <tr>
                                <th>Images</th>
                                <td>{{ promo.images }}</td>
                            </tr>
                            <tr>
                                <th>Nom</th>
                                <td>{{ promo.name }}</td>
                            </tr>
                            <tr>
                                <th>Catégorie</th>
                                <td>{{ promo.category }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div style=\"text-align: center; margin-top: 20px;\">
                        <a href=\"{{ path('app_promo_admin_index') }}\" class=\"btn btn-primary\">Retour à la liste</a>
                        <a href=\"{{ path('app_promo_admin_edit', {'id': promo.id}) }}\" class=\"btn btn-info\">Modifier</a>
                            {{ include('admin/promo_admin/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "admin/promo_admin/show.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\admin\\promo_admin\\show.html.twig");
    }
}
