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

/* user/uservue/contact.html.twig */
class __TwigTemplate_508e7d22c6863578ca3d1769f485b9af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/contact.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<br>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\"> 
            <div class=\"card nature-card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Nous Contacter</h3>
                    <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_user_submit");
        echo "\" method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"name\">Votre Nom :</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Votre Email :</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"subject\">Sujet :</label>
                            <select class=\"form-select\" id=\"subject\" name=\"subject\" required>
                                <option value=\"\">Sélectionnez un sujet</option>
                                <option value=\"Livraison\">Livraison</option>
                                <option value=\"Produits\">Produits</option>
                                <option value=\"Programme de Fidélité\">Programme de Fidélité</option>
                                <option value=\"Magasins\">Magasins</option>
                                <option value=\"Stockage des Données\">Stockage des Données</option>
                                <option value=\"Autre\">Autre</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"message\">Votre Message :</label>
                            <textarea class=\"form-control\" id=\"message\" name=\"message\" required></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-details\">Envoyer le Message</button>
                    </form>
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
        return "user/uservue/contact.html.twig";
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
        return array (  68 => 12,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}


{% block body %}
<br>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\"> 
            <div class=\"card nature-card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Nous Contacter</h3>
                    <form action=\"{{ path('app_contact_user_submit') }}\" method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"name\">Votre Nom :</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Votre Email :</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"subject\">Sujet :</label>
                            <select class=\"form-select\" id=\"subject\" name=\"subject\" required>
                                <option value=\"\">Sélectionnez un sujet</option>
                                <option value=\"Livraison\">Livraison</option>
                                <option value=\"Produits\">Produits</option>
                                <option value=\"Programme de Fidélité\">Programme de Fidélité</option>
                                <option value=\"Magasins\">Magasins</option>
                                <option value=\"Stockage des Données\">Stockage des Données</option>
                                <option value=\"Autre\">Autre</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"message\">Votre Message :</label>
                            <textarea class=\"form-control\" id=\"message\" name=\"message\" required></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-details\">Envoyer le Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{% endblock %}
", "user/uservue/contact.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\user\\uservue\\contact.html.twig");
    }
}
