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

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/uservue/card.html.twig"));

        $this->parent = $this->loadTemplate("headeruser.html.twig", "user/uservue/card.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
.loyalty-card-container {
    padding: 50px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.card-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333; 
}

.loyalty-card {
    display: flex;
    align-items: center;
    background-color: #fff; 
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    max-width: 600px; 
    margin-top: 20px; 
}

.loyalty-card:hover {
    transform: scale(1.05);
}

.loyalty-card-image {
    flex: 1;
    padding: 20px;
}

.card-image {
    width: 200px;
    height: auto;
    border-radius: 50%;
    border: 4px solid #4CAF50;
    transition: transform 0.3s;
}

.card-image:hover {
    transform: rotate(360deg);
}

.loyalty-card-details {
    flex: 2;
    padding: 20px;
}

.card-info {
    font-size: 16px;
    margin-bottom: 10px;
}

.card-detail {
    font-weight: bold;
    color: #4CAF50;
}
</style>

";
        // line 69
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 73
        echo "
<div class=\"loyalty-card-container\">
    <h1 class=\"card-title\">Carte de fidélité</h1>
    <div class=\"loyalty-card\">
        <div class=\"loyalty-card-image\">
            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"card-image\">
        </div>
        <div class=\"loyalty-card-details\">
            <p class=\"card-info\">Numéro de carte: <span class=\"card-detail\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 81, $this->source); })()), "cardNumber", [], "any", false, false, false, 81), "html", null, true);
        echo "</span></p>
            <p class=\"card-info\">Type de carte: <span class=\"card-detail\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 82, $this->source); })()), "cardType", [], "any", false, false, false, 82), "html", null, true);
        echo "</span></p>
            <p class=\"card-info\">Points de fidélité: <span class=\"card-detail\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 83, $this->source); })()), "points", [], "any", false, false, false, 83), "html", null, true);
        echo "</span></p>
            <p class=\"card-info\">Offre personnalisée: <span class=\"card-detail\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loyaltyCard"]) || array_key_exists("loyaltyCard", $context) ? $context["loyaltyCard"] : (function () { throw new RuntimeError('Variable "loyaltyCard" does not exist.', 84, $this->source); })()), "personalizedOffer", [], "any", false, false, false, 84), "html", null, true);
        echo "</span></p>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 69
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 70
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/loyalty-card.css"), "html", null, true);
        echo "\">
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
        return array (  178 => 71,  173 => 70,  166 => 69,  154 => 84,  150 => 83,  146 => 82,  142 => 81,  136 => 78,  129 => 73,  127 => 69,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'headeruser.html.twig' %}

{% block body %}
<style>
.loyalty-card-container {
    padding: 50px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.card-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333; 
}

.loyalty-card {
    display: flex;
    align-items: center;
    background-color: #fff; 
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    max-width: 600px; 
    margin-top: 20px; 
}

.loyalty-card:hover {
    transform: scale(1.05);
}

.loyalty-card-image {
    flex: 1;
    padding: 20px;
}

.card-image {
    width: 200px;
    height: auto;
    border-radius: 50%;
    border: 4px solid #4CAF50;
    transition: transform 0.3s;
}

.card-image:hover {
    transform: rotate(360deg);
}

.loyalty-card-details {
    flex: 2;
    padding: 20px;
}

.card-info {
    font-size: 16px;
    margin-bottom: 10px;
}

.card-detail {
    font-weight: bold;
    color: #4CAF50;
}
</style>

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/loyalty-card.css') }}\">
{% endblock %}

<div class=\"loyalty-card-container\">
    <h1 class=\"card-title\">Carte de fidélité</h1>
    <div class=\"loyalty-card\">
        <div class=\"loyalty-card-image\">
            <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" class=\"card-image\">
        </div>
        <div class=\"loyalty-card-details\">
            <p class=\"card-info\">Numéro de carte: <span class=\"card-detail\">{{ loyaltyCard.cardNumber }}</span></p>
            <p class=\"card-info\">Type de carte: <span class=\"card-detail\">{{ loyaltyCard.cardType }}</span></p>
            <p class=\"card-info\">Points de fidélité: <span class=\"card-detail\">{{ loyaltyCard.points }}</span></p>
            <p class=\"card-info\">Offre personnalisée: <span class=\"card-detail\">{{ loyaltyCard.personalizedOffer }}</span></p>
        </div>
    </div>
</div>
{% endblock %}", "user/uservue/card.html.twig", "C:\\Users\\lidav\\OneDrive\\Bureau\\vitalitymark\\templates\\user\\uservue\\card.html.twig");
    }
}
