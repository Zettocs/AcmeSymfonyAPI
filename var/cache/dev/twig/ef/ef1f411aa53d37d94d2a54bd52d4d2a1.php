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

/* accueil/index.html.twig */
class __TwigTemplate_768e7a1f248a33d1c33a722911ae2a3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<style>
\t\t.body {
\t\t\theight: 100%
\t\t}
\t\t.gauche {
\t\t\tposition: absolute;
\t\t\tmargin-left: 0;
\t\t\twidth: 60%;
\t\t\theight: 89.7%;
\t\t}
\t\t.droite {
\t\t\tposition: absolute;
\t\t\tmargin-left: 60%;
\t\t\twidth: 40%;
\t\t\theight: 89.7%;
\t\t}
\t\t.titreg {
\t\t\tfont-size: 500%;
\t\t\tcolor: #27476E;
\t\t}
\t\t.p1 {
\t\t\tcolor: black;
\t\t\tmargin-bottom: -2%;
\t\t\tfont-size: 200%;
\t\t\tfont-weight: 200;
\t\t}
\t\t.background_carousel {
\t\t\tpadding-top: 4%;
\t\t\tbackground-color: white;
\t\t\twidth: 90%;
\t\t\theight: 90%;
\t\t\tmargin-top: 5%;
\t\t\tmargin-left: 5%;
\t\t\tborder-radius: 5%
\t\t}
\t\t.backgroun_shoes {
\t\t\tbackground-color: #92BDDB;
\t\t\twidth: 90%;
\t\t\theight: 70%;
\t\t\tborder-radius: 5%;
\t\t\tposition: relative;
\t\t\tmargin-left: 5%;
\t\t}
\t\t.texte {
\t\t\tmargin-left: 20%;
\t\t\tmargin-top: 20%;
\t\t}
\t\t.image {
\t\t\tmargin-left: -45%;
\t\t\tmargin-top: -10%;
\t\t\twidth: 150%
\t\t}
\t\t@media(max-width: 720px) {
\t\t\t.droite {
\t\t\t\tmargin: 0 auto;
\t\t\t\twidth: 100%;
\t\t\t\tposition: absolute;
\t\t\t}
\t\t\t.gauche {
\t\t\t\tmargin-left: ;
\t\t\t\ttext-align: center;
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.background_carousel {
\t\t\t\theight: 65%;
\t\t\t\tmargin-top: 47%;
\t\t\t\twidth: 75%;
\t\t\t\tmargin-left: 12%;
\t\t\t}
\t\t\t.texte {
\t\t\t\tmargin-left: 0;
\t\t\t}
\t\t\t.image {
\t\t\t\tmargin-left: -15%;
\t\t\t\tmargin-top: 5%;
\t\t\t\twidth: 120%
\t\t\t}
\t\t\t.titreg {
\t\t\t\tfont-size: 400%;
\t\t\t\tmargin-top: -10%;
\t\t\t}
\t\t\t.p1 {
\t\t\t\tfont-size: 100%;
\t\t\t}
\t\t\t.backgroun_shoes {
\t\t\t\theight: 80%;
\t\t\t\tmargin-left: 5%;
\t\t\t}
\t\t}
\t</style>
\t<div class=\"gauche\">
\t\t<div class=\"texte\">
\t\t\t<h1 class=\"titreg\">A C M E</h1>
\t\t\t<p class=\"p1\">LE LUXE DE PORTER DU</p>
\t\t</br>
\t\t<p class=\"p1\">STREETWEAR.</p>
\t</div>
</div>
<div class=\"droite\">
\t<div class=\"background_carousel\">
\t\t<div class=\"backgroun_shoes\"><img class=\"image\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/chaussure_accueil1.png"), "html", null, true);
        echo "\"></div>
\t</div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 108,  89 => 8,  79 => 7,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Accueil
{% endblock %}

{% block body %}
\t<style>
\t\t.body {
\t\t\theight: 100%
\t\t}
\t\t.gauche {
\t\t\tposition: absolute;
\t\t\tmargin-left: 0;
\t\t\twidth: 60%;
\t\t\theight: 89.7%;
\t\t}
\t\t.droite {
\t\t\tposition: absolute;
\t\t\tmargin-left: 60%;
\t\t\twidth: 40%;
\t\t\theight: 89.7%;
\t\t}
\t\t.titreg {
\t\t\tfont-size: 500%;
\t\t\tcolor: #27476E;
\t\t}
\t\t.p1 {
\t\t\tcolor: black;
\t\t\tmargin-bottom: -2%;
\t\t\tfont-size: 200%;
\t\t\tfont-weight: 200;
\t\t}
\t\t.background_carousel {
\t\t\tpadding-top: 4%;
\t\t\tbackground-color: white;
\t\t\twidth: 90%;
\t\t\theight: 90%;
\t\t\tmargin-top: 5%;
\t\t\tmargin-left: 5%;
\t\t\tborder-radius: 5%
\t\t}
\t\t.backgroun_shoes {
\t\t\tbackground-color: #92BDDB;
\t\t\twidth: 90%;
\t\t\theight: 70%;
\t\t\tborder-radius: 5%;
\t\t\tposition: relative;
\t\t\tmargin-left: 5%;
\t\t}
\t\t.texte {
\t\t\tmargin-left: 20%;
\t\t\tmargin-top: 20%;
\t\t}
\t\t.image {
\t\t\tmargin-left: -45%;
\t\t\tmargin-top: -10%;
\t\t\twidth: 150%
\t\t}
\t\t@media(max-width: 720px) {
\t\t\t.droite {
\t\t\t\tmargin: 0 auto;
\t\t\t\twidth: 100%;
\t\t\t\tposition: absolute;
\t\t\t}
\t\t\t.gauche {
\t\t\t\tmargin-left: ;
\t\t\t\ttext-align: center;
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.background_carousel {
\t\t\t\theight: 65%;
\t\t\t\tmargin-top: 47%;
\t\t\t\twidth: 75%;
\t\t\t\tmargin-left: 12%;
\t\t\t}
\t\t\t.texte {
\t\t\t\tmargin-left: 0;
\t\t\t}
\t\t\t.image {
\t\t\t\tmargin-left: -15%;
\t\t\t\tmargin-top: 5%;
\t\t\t\twidth: 120%
\t\t\t}
\t\t\t.titreg {
\t\t\t\tfont-size: 400%;
\t\t\t\tmargin-top: -10%;
\t\t\t}
\t\t\t.p1 {
\t\t\t\tfont-size: 100%;
\t\t\t}
\t\t\t.backgroun_shoes {
\t\t\t\theight: 80%;
\t\t\t\tmargin-left: 5%;
\t\t\t}
\t\t}
\t</style>
\t<div class=\"gauche\">
\t\t<div class=\"texte\">
\t\t\t<h1 class=\"titreg\">A C M E</h1>
\t\t\t<p class=\"p1\">LE LUXE DE PORTER DU</p>
\t\t</br>
\t\t<p class=\"p1\">STREETWEAR.</p>
\t</div>
</div>
<div class=\"droite\">
\t<div class=\"background_carousel\">
\t\t<div class=\"backgroun_shoes\"><img class=\"image\" src=\"{{ asset ('images/chaussure_accueil1.png') }}\"></div>
\t</div>
</div>{% endblock %}
", "accueil/index.html.twig", "C:\\EPSI Projet\\Symfony\\AcmeSymfonyAPI\\templates\\accueil\\index.html.twig");
    }
}
