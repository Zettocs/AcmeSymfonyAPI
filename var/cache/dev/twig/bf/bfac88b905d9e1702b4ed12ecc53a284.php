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

/* security/login.html.twig */
class __TwigTemplate_0de949cae93fc1681318eedf569089fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t<style>
\t\th1 {
\t\t\tmargin-top: 8%;
\t\t\tcolor: #27476E;
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 6%;
\t\t\tfont-size: 300%
\t\t}
\t\t.form-container {
\t\t\twidth: 40%;
\t\t\tmargin: 0 auto;
\t\t\ttext-align: center;
\t\t\theight: 40%;
\t\t}

\t\t.form-control {
\t\t\tborder-radius: 30px;
\t\t\tmargin-top: 7%;
\t\t\theight: 50px;
\t\t}

\t\t.bouton {
\t\t\tbackground-image: linear-gradient(to right, #27476E 0%, #4d6685 51%, #27476E 100%);
\t\t\tmargin-top: 10%;
\t\t\tborder-radius: 30px;
\t\t\tbackground-size: 200% auto;
\t\t\tcolor: white;
\t\t\twidth: 50%;
\t\t\theight: 50px;
\t\t\tborder: #27476E;
\t\t\tfont-size: 150%;
\t\t\tbox-shadow: 0 0 20px #eee;
\t\t\ttransition: 0.5s;
\t\t}
\t\t.bouton:hover {
\t\t\tbackground-position: right center; /* change the direction of the change here */
\t\t\tcolor: #fff;
\t\t\ttext-decoration: none;
\t\t}
\t\t@media(max-width: 720px) {
\t\t\t.form-container {
\t\t\t\twidth: 70%;
\t\t\t\theight: 40%;
\t\t\t}
\t\t\th1 {
\t\t\t\tmargin-top: 25%;
\t\t\t\tmargin-bottom: 20%;
\t\t\t\tfont-size: 250%
\t\t\t}
\t\t\t.form-control {
\t\t\t\tmargin-top: 12%;
\t\t\t}

\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
\t<h1>C o n n e x i o n</h1>

\t<div class=\"form-container\">
\t\t<form action=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_connexion");
        echo "\" method=\"POST\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input placeholder=\"Adresse Email\" required name=\"_username\" type=\"text\" class=\"form-control\" autocomplete=\"off\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<input placeholder=\"Mot de Passe\" required name=\"_password\" type=\"password\" class=\"form-control\" autocomplete=\"off\">
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"submit\" class=\"bouton\">Se connecter</button>

\t\t\t</div>
\t\t</form>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  144 => 61,  134 => 60,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
\t<style>
\t\th1 {
\t\t\tmargin-top: 8%;
\t\t\tcolor: #27476E;
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 6%;
\t\t\tfont-size: 300%
\t\t}
\t\t.form-container {
\t\t\twidth: 40%;
\t\t\tmargin: 0 auto;
\t\t\ttext-align: center;
\t\t\theight: 40%;
\t\t}

\t\t.form-control {
\t\t\tborder-radius: 30px;
\t\t\tmargin-top: 7%;
\t\t\theight: 50px;
\t\t}

\t\t.bouton {
\t\t\tbackground-image: linear-gradient(to right, #27476E 0%, #4d6685 51%, #27476E 100%);
\t\t\tmargin-top: 10%;
\t\t\tborder-radius: 30px;
\t\t\tbackground-size: 200% auto;
\t\t\tcolor: white;
\t\t\twidth: 50%;
\t\t\theight: 50px;
\t\t\tborder: #27476E;
\t\t\tfont-size: 150%;
\t\t\tbox-shadow: 0 0 20px #eee;
\t\t\ttransition: 0.5s;
\t\t}
\t\t.bouton:hover {
\t\t\tbackground-position: right center; /* change the direction of the change here */
\t\t\tcolor: #fff;
\t\t\ttext-decoration: none;
\t\t}
\t\t@media(max-width: 720px) {
\t\t\t.form-container {
\t\t\t\twidth: 70%;
\t\t\t\theight: 40%;
\t\t\t}
\t\t\th1 {
\t\t\t\tmargin-top: 25%;
\t\t\t\tmargin-bottom: 20%;
\t\t\t\tfont-size: 250%
\t\t\t}
\t\t\t.form-control {
\t\t\t\tmargin-top: 12%;
\t\t\t}

\t\t}
\t</style>
{% endblock %}

{% block body %}

\t<h1>C o n n e x i o n</h1>

\t<div class=\"form-container\">
\t\t<form action=\"{{ path('security_connexion') }}\" method=\"POST\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input placeholder=\"Adresse Email\" required name=\"_username\" type=\"text\" class=\"form-control\" autocomplete=\"off\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<input placeholder=\"Mot de Passe\" required name=\"_password\" type=\"password\" class=\"form-control\" autocomplete=\"off\">
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"submit\" class=\"bouton\">Se connecter</button>

\t\t\t</div>
\t\t</form>
\t</div>
{% endblock %}
", "security/login.html.twig", "C:\\EPSI Projet\\ACME Symfony\\templates\\security\\login.html.twig");
    }
}
