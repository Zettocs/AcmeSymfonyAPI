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

/* admin/admin_ajouter_produit.html.twig */
class __TwigTemplate_78002d54174ba7401938ed99f53ac22d extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_ajouter_produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_ajouter_produit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_ajouter_produit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
\t.article {
\t\tdisplay : grid;
\t\tbackground-color: white;
\t\tjustify-content: center;
\t\twidth: 90%;
\t\tborder-radius: 30px;
\t\tmargin-top: 5%;
\t\tmargin-left: 5%;
\t\tmargin-bottom: 5%;
\t}

\t.bandeau {
\t\tdisplay: flex;
\t\tjustify-content: center;
\t\talign-items: center;
\t\theight: 150px;
\t\tbackground-color: white;
\t}

\th1 {
\t\tcolor: #27476E;
\t\ttext-align: center;
\t\ttext-transform: none;
\t\tfont-size: 300%;
\t}

\t.chaussures {
\t\twidth: 100%;
\t\tbackground-color: white;
\t\tborder-radius: 30px
\t}

\t.test {
\t\twidth: 100%;
\t\theight: 50%;
\t}

\t.catalogue-wrapper {
\t\tposition: relative;
\t\tdisplay: grid;
\t\tgrid-template-columns: repeat(4, 1fr);
\t\tgrid-gap: 100px;
\t\tmargin: 5% 0 5% 4%;
\t}

\t.produit-wrapper {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tborder-radius: 30px;
\t\tbackground-color: white;
\t\twidth: 80%;
\t\theight: 300px;
\t\tcolor: #27476E;
\t}

\t.produit-wrapper h2 {
\t\tmargin-top: 5%;
\t\ttext-transform: none;
\t\tfont-size: 100%;
\t\ttext-align: center;
\t\tcolor: #27476E;
\t}

\t.produit-wrapper .nom {
\t\theight: 5%;
\t\twidth: 100%;
\t\tfont-size: 70%;
\t}

\t.produit-wrapper .prix {
\t\tfont-size: 120%;
\t\tfont-weight: bold;
\t}

\t.produit-wrapper .reference {
\t\theight: 5%;
\t\tfont-size: 70%;
\t}

\t.article button {
\t\tmargin-bottom: 2%;
\t\tbackground-color: #27476E;
\t\tcolor: white;
\t\tborder: none;
\t\tborder-radius: 30px;
\t\twidth: 90%;
\t\theight: 40px;
\t}

\t.produit-wrapper a {
\t\tcolor: white;
\t\ttext-decoration: none;
\t}

\t#pointure {
\t\tmargin-top: 2%;
\t\tmargin-bottom: 5%;
\t}

\t.prix {
\t\tfont-size: 2em;
\t}
</style>

<div class=\"article\">

\t<div class=\"test\">
\t<input class=\"chaussures\" type=\"file\" accept=\"jpg, png\" name=\"image\" placeholder=\"Sélectionnez l'image\">
</div>

<form method=\"POST\" action=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_produit");
        echo "\">
    <input name=\"nom\" placeholder=\"Nom du produit\">
    <input name=\"reference\" placeholder=\"référence du produit\">
    <input name=\"prix\" placeholder=\"Prix du produit\">
\t<input name=\"quantite\" placeholder=\"Quantité à ajouter\">
    <button type=\"submit\" class=\"afficher-article\" name=\"modifier_stock_admin\">
        Modifier stock
    </button>
</form>

";
        // line 127
        if (array_key_exists("message", $context)) {
            // line 128
            echo "\t<div class=\"message\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "</div>
";
        }
        // line 130
        echo "
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_ajouter_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 130,  198 => 128,  196 => 127,  183 => 117,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
\t.article {
\t\tdisplay : grid;
\t\tbackground-color: white;
\t\tjustify-content: center;
\t\twidth: 90%;
\t\tborder-radius: 30px;
\t\tmargin-top: 5%;
\t\tmargin-left: 5%;
\t\tmargin-bottom: 5%;
\t}

\t.bandeau {
\t\tdisplay: flex;
\t\tjustify-content: center;
\t\talign-items: center;
\t\theight: 150px;
\t\tbackground-color: white;
\t}

\th1 {
\t\tcolor: #27476E;
\t\ttext-align: center;
\t\ttext-transform: none;
\t\tfont-size: 300%;
\t}

\t.chaussures {
\t\twidth: 100%;
\t\tbackground-color: white;
\t\tborder-radius: 30px
\t}

\t.test {
\t\twidth: 100%;
\t\theight: 50%;
\t}

\t.catalogue-wrapper {
\t\tposition: relative;
\t\tdisplay: grid;
\t\tgrid-template-columns: repeat(4, 1fr);
\t\tgrid-gap: 100px;
\t\tmargin: 5% 0 5% 4%;
\t}

\t.produit-wrapper {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tborder-radius: 30px;
\t\tbackground-color: white;
\t\twidth: 80%;
\t\theight: 300px;
\t\tcolor: #27476E;
\t}

\t.produit-wrapper h2 {
\t\tmargin-top: 5%;
\t\ttext-transform: none;
\t\tfont-size: 100%;
\t\ttext-align: center;
\t\tcolor: #27476E;
\t}

\t.produit-wrapper .nom {
\t\theight: 5%;
\t\twidth: 100%;
\t\tfont-size: 70%;
\t}

\t.produit-wrapper .prix {
\t\tfont-size: 120%;
\t\tfont-weight: bold;
\t}

\t.produit-wrapper .reference {
\t\theight: 5%;
\t\tfont-size: 70%;
\t}

\t.article button {
\t\tmargin-bottom: 2%;
\t\tbackground-color: #27476E;
\t\tcolor: white;
\t\tborder: none;
\t\tborder-radius: 30px;
\t\twidth: 90%;
\t\theight: 40px;
\t}

\t.produit-wrapper a {
\t\tcolor: white;
\t\ttext-decoration: none;
\t}

\t#pointure {
\t\tmargin-top: 2%;
\t\tmargin-bottom: 5%;
\t}

\t.prix {
\t\tfont-size: 2em;
\t}
</style>

<div class=\"article\">

\t<div class=\"test\">
\t<input class=\"chaussures\" type=\"file\" accept=\"jpg, png\" name=\"image\" placeholder=\"Sélectionnez l'image\">
</div>

<form method=\"POST\" action=\"{{ path('ajout_produit') }}\">
    <input name=\"nom\" placeholder=\"Nom du produit\">
    <input name=\"reference\" placeholder=\"référence du produit\">
    <input name=\"prix\" placeholder=\"Prix du produit\">
\t<input name=\"quantite\" placeholder=\"Quantité à ajouter\">
    <button type=\"submit\" class=\"afficher-article\" name=\"modifier_stock_admin\">
        Modifier stock
    </button>
</form>

{% if message is defined %}
\t<div class=\"message\">{{ message }}</div>
{% endif %}

</div>

{% endblock %}


", "admin/admin_ajouter_produit.html.twig", "C:\\EPSI Projet\\Symfony\\AcmeSymfonyAPI\\templates\\admin\\admin_ajouter_produit.html.twig");
    }
}
