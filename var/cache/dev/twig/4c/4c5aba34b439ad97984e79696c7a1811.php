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

/* admin/admin_produit_detail.html.twig */
class __TwigTemplate_847cba7e97b8ae7bbc51e030d6a2e90c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_produit_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_produit_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_produit_detail.html.twig", 1);
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
\t<img class=\"chaussures\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/produits/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 114, $this->source); })()), "photo", [], "any", false, false, false, 114))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 114, $this->source); })()), "nom", [], "any", false, false, false, 114), "html", null, true);
        echo "\">
</div>

<h2 class=\"nom\">";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 117, $this->source); })()), "nom", [], "any", false, false, false, 117), "html", null, true);
        echo "</h2>

<p class=\"reference\">Référence :
\t";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 120, $this->source); })()), "référence", [], "any", false, false, false, 120), "html", null, true);
        echo "</p>

<p class=\"prix\">";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 122, $this->source); })()), "prix", [], "any", false, false, false, 122), "html", null, true);
        echo "€</p>

<form method=\"POST\" action=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_stock_admin");
        echo "\">
    <input type=\"hidden\" name=\"idProduit\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 125, $this->source); })()), "idProduit", [], "any", false, false, false, 125), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"nom\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 126, $this->source); })()), "nom", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"prix\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 127, $this->source); })()), "prix", [], "any", false, false, false, 127), "html", null, true);
        echo "\">
\t<input name=\"quantite\">
    <button type=\"submit\" class=\"afficher-article\" name=\"modifier_stock_admin\">
        Modifier stock
    </button>
</form>

<form method=\"POST\" action=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_admin_supprimer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 134, $this->source); })()), "idProduit", [], "any", false, false, false, 134)]), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"idProduit\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 135, $this->source); })()), "idProduit", [], "any", false, false, false, 135), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"nom\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 136, $this->source); })()), "nom", [], "any", false, false, false, 136), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"prix\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 137, $this->source); })()), "prix", [], "any", false, false, false, 137), "html", null, true);
        echo "\">
    <button type=\"submit\" class=\"afficher-article\" name=\"produit_admin_supprimer\">
        Supprimer produit
    </button>

";
        // line 142
        if (array_key_exists("message", $context)) {
            // line 143
            echo "\t<div class=\"message\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 143, $this->source); })()), "html", null, true);
            echo "</div>
";
        }
        // line 145
        echo "
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_produit_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 145,  248 => 143,  246 => 142,  238 => 137,  234 => 136,  230 => 135,  226 => 134,  216 => 127,  212 => 126,  208 => 125,  204 => 124,  199 => 122,  194 => 120,  188 => 117,  180 => 114,  68 => 4,  58 => 3,  35 => 1,);
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
\t<img class=\"chaussures\" src=\"{{ asset('images/produits/' ~ produit.photo) }}\" alt=\"{{ produit.nom }}\">
</div>

<h2 class=\"nom\">{{ produit.nom }}</h2>

<p class=\"reference\">Référence :
\t{{ produit.référence }}</p>

<p class=\"prix\">{{ produit.prix }}€</p>

<form method=\"POST\" action=\"{{ path('modifier_stock_admin') }}\">
    <input type=\"hidden\" name=\"idProduit\" value=\"{{ produit.idProduit }}\">
    <input type=\"hidden\" name=\"nom\" value=\"{{ produit.nom }}\">
    <input type=\"hidden\" name=\"prix\" value=\"{{ produit.prix }}\">
\t<input name=\"quantite\">
    <button type=\"submit\" class=\"afficher-article\" name=\"modifier_stock_admin\">
        Modifier stock
    </button>
</form>

<form method=\"POST\" action=\"{{ path('produit_admin_supprimer', {'id': produit.idProduit}) }}\">
    <input type=\"hidden\" name=\"idProduit\" value=\"{{ produit.idProduit }}\">
    <input type=\"hidden\" name=\"nom\" value=\"{{ produit.nom }}\">
    <input type=\"hidden\" name=\"prix\" value=\"{{ produit.prix }}\">
    <button type=\"submit\" class=\"afficher-article\" name=\"produit_admin_supprimer\">
        Supprimer produit
    </button>

{% if message is defined %}
\t<div class=\"message\">{{ message }}</div>
{% endif %}

</div>

{% endblock %}


", "admin/admin_produit_detail.html.twig", "C:\\Projets\\Php\\AcmeSymfonyAPI\\templates\\admin\\admin_produit_detail.html.twig");
    }
}
