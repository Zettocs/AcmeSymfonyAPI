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

/* accueil_shop/produit_detail.html.twig */
class __TwigTemplate_673c4476f76c0006080e92052fc0e56d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil_shop/produit_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil_shop/produit_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil_shop/produit_detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<style>
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
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\theight: 150px;
\t\t\tbackground-color: white;
\t\t}
\t\th1 {
\t\t\tcolor: #27476E;
\t\t\ttext-align: center;
\t\t\ttext-transform: none;
\t\t\tfont-size: 300%;
\t\t}
\t\t.chaussures {
\t\t\twidth: 100%;
\t\t\tbackground-color: white;
\t\t\tborder-radius: 30px
\t\t}
\t\t.test {
\t\t\twidth: 100%;
\t\t\theight: 50%;
\t\t}
\t.catalogue-wrapper {
\t\t\tposition: relative;
\t\t\tdisplay: grid;
\t\t\tgrid-template-columns: repeat(4, 1fr);
\t\t\tgrid-gap: 100px;
\t\t\tmargin: 5% 0 5% 4%;
\t\t}
\t\t.produit-wrapper {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tborder-radius: 30px;
\t\t\tbackground-color: white;
\t\t\twidth: 80%;
\t\t\theight: 300px;
\t\t\tcolor: #27476E;
\t\t}
\t\t.produit-wrapper h2 {
\t\t\tmargin-top: 5%;
\t\t\ttext-transform: none;
\t\t\tfont-size: 100%;
\t\t\ttext-align: center;
\t\t\tcolor: #27476E;
\t\t}
\t\t.produit-wrapper .nom {
\t\t\theight: 5%;
\t\t\twidth: 100%;
\t\t\tfont-size: 70%;
\t\t}
\t\t.produit-wrapper .prix {
\t\t\tfont-size: 120%;
\t\t\tfont-weight: bold;
\t\t}
\t\t.produit-wrapper .reference {
\t\t\theight: 5%;
\t\t\tfont-size: 70%;
\t\t}
\t\t.article button {
\t\t\tmargin-bottom: 2%;
\t\t\tbackground-color: #27476E;
\t\t\tcolor: white;
\t\t\tborder: none;
\t\t\tborder-radius: 30px;
\t\t\twidth: 90%;
\t\t\theight: 40px;
\t\t}
\t\t.produit-wrapper a {
\t\t\tcolor: white;
\t\t\ttext-decoration: none;
\t\t}
\t\t#pointure {
\t\t\tmargin-top: 2%;
\t\t\tmargin-bottom: 5%;
\t\t}
\t\t.prix {
\t\t\tfont-size: 2em;
\t\t}
\t\t
\t</style>

\t<div class=\"article\">

\t<div class=\"test\">
\t\t<img class=\"chaussures\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/produits/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 101, $this->source); })()), "photo", [], "any", false, false, false, 101))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 101, $this->source); })()), "nom", [], "any", false, false, false, 101), "html", null, true);
        echo "\">
\t</div>
\t<h2 class=\"nom\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 103, $this->source); })()), "nom", [], "any", false, false, false, 103), "html", null, true);
        echo "</h2>

\t<p class=\"reference\">Référence :
\t\t";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 106, $this->source); })()), "référence", [], "any", false, false, false, 106), "html", null, true);
        echo "</p>

\t<p class=\"prix\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 108, $this->source); })()), "prix", [], "any", false, false, false, 108), "html", null, true);
        echo "€</p>

\t<label for=\"pointure\">Choisissez une pointure</label>

  \t\t<select name=\"pointure\" id=\"pointure\">

    \t\t<optgroup label=\"Pointures\">
      \t\t\t<option value=\"37\">37</option>
      \t\t\t<option value=\"38\">38</option>
\t\t\t\t<option value=\"39\">39</option>
\t\t\t\t<option value=\"40\">40</option>
\t\t\t\t<option value=\"41\">41</option>
\t\t\t\t<option value=\"42\">42</option>
\t\t\t\t<option value=\"43\">43</option>
\t\t\t\t<option value=\"44\">44</option>
\t\t\t\t<option value=\"45\">45</option>
\t\t\t\t<option value=\"46\">46</option>
\t\t\t\t<option value=\"47\">47</option>
\t\t\t\t<option value=\"48\">48</option>
    \t\t</optgroup>

  \t\t</select>

\t<button class=\"afficher-article\">
\t\t\t\t\t<a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 132, $this->source); })()), "idproduit", [], "any", false, false, false, 132)]), "html", null, true);
        echo "\">Ajouter au panier</a>
\t\t\t\t</button>

\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil_shop/produit_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 132,  186 => 108,  181 => 106,  175 => 103,  168 => 101,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

\t<style>
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
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\theight: 150px;
\t\t\tbackground-color: white;
\t\t}
\t\th1 {
\t\t\tcolor: #27476E;
\t\t\ttext-align: center;
\t\t\ttext-transform: none;
\t\t\tfont-size: 300%;
\t\t}
\t\t.chaussures {
\t\t\twidth: 100%;
\t\t\tbackground-color: white;
\t\t\tborder-radius: 30px
\t\t}
\t\t.test {
\t\t\twidth: 100%;
\t\t\theight: 50%;
\t\t}
\t.catalogue-wrapper {
\t\t\tposition: relative;
\t\t\tdisplay: grid;
\t\t\tgrid-template-columns: repeat(4, 1fr);
\t\t\tgrid-gap: 100px;
\t\t\tmargin: 5% 0 5% 4%;
\t\t}
\t\t.produit-wrapper {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tborder-radius: 30px;
\t\t\tbackground-color: white;
\t\t\twidth: 80%;
\t\t\theight: 300px;
\t\t\tcolor: #27476E;
\t\t}
\t\t.produit-wrapper h2 {
\t\t\tmargin-top: 5%;
\t\t\ttext-transform: none;
\t\t\tfont-size: 100%;
\t\t\ttext-align: center;
\t\t\tcolor: #27476E;
\t\t}
\t\t.produit-wrapper .nom {
\t\t\theight: 5%;
\t\t\twidth: 100%;
\t\t\tfont-size: 70%;
\t\t}
\t\t.produit-wrapper .prix {
\t\t\tfont-size: 120%;
\t\t\tfont-weight: bold;
\t\t}
\t\t.produit-wrapper .reference {
\t\t\theight: 5%;
\t\t\tfont-size: 70%;
\t\t}
\t\t.article button {
\t\t\tmargin-bottom: 2%;
\t\t\tbackground-color: #27476E;
\t\t\tcolor: white;
\t\t\tborder: none;
\t\t\tborder-radius: 30px;
\t\t\twidth: 90%;
\t\t\theight: 40px;
\t\t}
\t\t.produit-wrapper a {
\t\t\tcolor: white;
\t\t\ttext-decoration: none;
\t\t}
\t\t#pointure {
\t\t\tmargin-top: 2%;
\t\t\tmargin-bottom: 5%;
\t\t}
\t\t.prix {
\t\t\tfont-size: 2em;
\t\t}
\t\t
\t</style>

\t<div class=\"article\">

\t<div class=\"test\">
\t\t<img class=\"chaussures\" src=\"{{ asset('images/produits/' ~ produit.photo) }}\" alt=\"{{ produit.nom }}\">
\t</div>
\t<h2 class=\"nom\">{{ produit.nom }}</h2>

\t<p class=\"reference\">Référence :
\t\t{{ produit.référence }}</p>

\t<p class=\"prix\">{{ produit.prix }}€</p>

\t<label for=\"pointure\">Choisissez une pointure</label>

  \t\t<select name=\"pointure\" id=\"pointure\">

    \t\t<optgroup label=\"Pointures\">
      \t\t\t<option value=\"37\">37</option>
      \t\t\t<option value=\"38\">38</option>
\t\t\t\t<option value=\"39\">39</option>
\t\t\t\t<option value=\"40\">40</option>
\t\t\t\t<option value=\"41\">41</option>
\t\t\t\t<option value=\"42\">42</option>
\t\t\t\t<option value=\"43\">43</option>
\t\t\t\t<option value=\"44\">44</option>
\t\t\t\t<option value=\"45\">45</option>
\t\t\t\t<option value=\"46\">46</option>
\t\t\t\t<option value=\"47\">47</option>
\t\t\t\t<option value=\"48\">48</option>
    \t\t</optgroup>

  \t\t</select>

\t<button class=\"afficher-article\">
\t\t\t\t\t<a href=\"{{ path('produit_detail', { 'id': produit.idproduit }) }}\">Ajouter au panier</a>
\t\t\t\t</button>

\t</div>
{% endblock %}", "accueil_shop/produit_detail.html.twig", "C:\\EPSI Projet\\Symfony\\AcmeSymfonyAPI\\templates\\accueil_shop\\produit_detail.html.twig");
    }
}
