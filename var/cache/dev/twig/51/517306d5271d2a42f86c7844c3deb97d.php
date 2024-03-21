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

/* user/uservue/card.html.twig */
class __TwigTemplate_058969131b1ced473dbddb077d3ddc46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/card.html.twig"));

        // line 2
        echo "
<h1>Carte de fidélité</h1>
<ul>
    <li><strong>Numéro de carte:</strong> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 5, $this->source); })()), "cardNumber", [], "any", false, false, false, 5), "html", null, true);
        echo "</li>
    <li><strong>Type de carte:</strong> ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 6, $this->source); })()), "cardType", [], "any", false, false, false, 6), "html", null, true);
        echo "</li>
    <li><strong>Points de fidélité:</strong> ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 7, $this->source); })()), "points", [], "any", false, false, false, 7), "html", null, true);
        echo "</li>
    <li><strong>Offre personnalisée:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 8, $this->source); })()), "personalizedOffer", [], "any", false, false, false, 8), "html", null, true);
        echo "</li>
    ";
        // line 10
        echo "</ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/uservue/card.html.twig";
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
        return array (  61 => 10,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/user/uservue/card.html.twig #}

<h1>Carte de fidélité</h1>
<ul>
    <li><strong>Numéro de carte:</strong> {{ loyaltyCard.cardNumber }}</li>
    <li><strong>Type de carte:</strong> {{ loyaltyCard.cardType }}</li>
    <li><strong>Points de fidélité:</strong> {{ loyaltyCard.points }}</li>
    <li><strong>Offre personnalisée:</strong> {{ loyaltyCard.personalizedOffer }}</li>
    {# Ajoutez d'autres informations de la carte de fidélité ici #}
</ul>
", "user/uservue/card.html.twig", "C:\\Users\\David\\Desktop\\vitalitymark\\templates\\user\\uservue\\card.html.twig");
    }
}
