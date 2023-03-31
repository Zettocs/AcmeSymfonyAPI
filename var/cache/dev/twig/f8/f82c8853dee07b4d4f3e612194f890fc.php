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

/* security/inscription.html.twig */
class __TwigTemplate_0298d90373d0dbaaa9a7a85dc98facb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/inscription.html.twig", 1);
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
        echo "<style>

h1 {
  margin-top: 2%;
\tcolor: #27476E;
\ttext-align: center;
\tmargin-bottom: 2%;
\tfont-size: 300%
}

.princi {
  width: 100%;
\tmargin: 0 auto;
\ttext-align: center;
}

.blop{
  position: absolute;
  margin-left: 5%;
  width: 40%;
  margin-bottom: 5%;
}

.blip {
  position: absolute;
  margin-left: 55%;
  width: 40%;
  margin-bottom: 5%;
}

input {
\tborder-radius: 30px;
\tmargin-top: 1%;
\theight: 50px;
\tborder: none;
\tbackground-color: white;
\tlabel: none;
}

\t\t.bouton {
\t\t\tbackground-image: linear-gradient(to right, #27476E 0%, #4d6685 51%, #27476E 100%);
\t\t\tmargin-top: 25%;
\t\t\tborder-radius: 30px;
\t\t\tbackground-size: 200% auto;
\t\t\tcolor: white;
\t\t\twidth: 30%;
\t\t\theight: 50px;
\t\t\tborder: #27476E;
\t\t\tfont-size: 150%;
\t\t\tbox-shadow: 0 0 20px #eee;
\t\t\ttransition: 0.5s;
\t\t}
\t\t.bouton:hover {
\t\t\tbackground-position: right center;
\t\t\tcolor: #fff;
\t\t\ttext-decoration: none;
\t\t}

\t\t@media(max-width: 720px) {
\t\t\t.bouton {
\t\t\t\tfont-size: 1.2rem; 
\t\t\t\tpadding: 0.5rem 1rem;
\t\t\t\tmargin-top:70%;
\t\t\t\t
\t\t\t}
\t\t}

</style>

    <h1>Inscription</h1>

<div class=\"princi\">
    ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_start');
        echo "

  <div class=\"blop\">
    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "username", [], "any", false, false, false, 78), 'row', ["label" => "Nom de famille", "attr" => ["class" => "princi", "placeholder" => "Nom de famille"]]);
        echo "

    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "firstname", [], "any", false, false, false, 80), 'row', ["label" => "Prénom", "attr" => ["class" => "princi", "placeholder" => "Prénom"]]);
        echo "

    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "Email", [], "any", false, false, false, 82), 'row', ["label" => "Adresse email", "attr" => ["class" => "princi", "placeholder" => "Adresse email"]]);
        echo "

    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "Adresse", [], "any", false, false, false, 84), 'row', ["label" => "Adresse postale", "attr" => ["class" => "princi", "placeholder" => "Adresse postale"]]);
        echo "
  </div>

  <div class=\"blip\">
    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "Ville", [], "any", false, false, false, 88), 'row', ["label" => "Ville", "attr" => ["class" => "princi", "placeholder" => "Ville"]]);
        echo "

    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "Pays", [], "any", false, false, false, 90), 'row', ["label" => "Pays", "attr" => ["class" => "princi", "placeholder" => "Pays"]]);
        echo "

    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "Password", [], "any", false, false, false, 92), 'row', ["label" => "Mot de passe", "attr" => ["class" => "princi", "placeholder" => "Mot de passe"]]);
        echo "

    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "PasswordVerification", [], "any", false, false, false, 94), 'row', ["label" => "Vérification du mot de passe", "attr" => ["class" => "princi", "placeholder" => "Vérification du mot de passe"]]);
        echo "
  </div>


  <button type=\"submit\" class=\"bouton\">Confirmer</button>
</div>

";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 101,  185 => 94,  180 => 92,  175 => 90,  170 => 88,  163 => 84,  158 => 82,  153 => 80,  148 => 78,  142 => 75,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<style>

h1 {
  margin-top: 2%;
\tcolor: #27476E;
\ttext-align: center;
\tmargin-bottom: 2%;
\tfont-size: 300%
}

.princi {
  width: 100%;
\tmargin: 0 auto;
\ttext-align: center;
}

.blop{
  position: absolute;
  margin-left: 5%;
  width: 40%;
  margin-bottom: 5%;
}

.blip {
  position: absolute;
  margin-left: 55%;
  width: 40%;
  margin-bottom: 5%;
}

input {
\tborder-radius: 30px;
\tmargin-top: 1%;
\theight: 50px;
\tborder: none;
\tbackground-color: white;
\tlabel: none;
}

\t\t.bouton {
\t\t\tbackground-image: linear-gradient(to right, #27476E 0%, #4d6685 51%, #27476E 100%);
\t\t\tmargin-top: 25%;
\t\t\tborder-radius: 30px;
\t\t\tbackground-size: 200% auto;
\t\t\tcolor: white;
\t\t\twidth: 30%;
\t\t\theight: 50px;
\t\t\tborder: #27476E;
\t\t\tfont-size: 150%;
\t\t\tbox-shadow: 0 0 20px #eee;
\t\t\ttransition: 0.5s;
\t\t}
\t\t.bouton:hover {
\t\t\tbackground-position: right center;
\t\t\tcolor: #fff;
\t\t\ttext-decoration: none;
\t\t}

\t\t@media(max-width: 720px) {
\t\t\t.bouton {
\t\t\t\tfont-size: 1.2rem; 
\t\t\t\tpadding: 0.5rem 1rem;
\t\t\t\tmargin-top:70%;
\t\t\t\t
\t\t\t}
\t\t}

</style>

    <h1>Inscription</h1>

<div class=\"princi\">
    {{form_start(form)}}

  <div class=\"blop\">
    {{form_row(form.username, {'label':'Nom de famille' ,'attr':{'class':'princi','placeholder': 'Nom de famille'}})}}

    {{form_row(form.firstname, {'label':'Prénom' ,'attr':{'class':'princi','placeholder': 'Prénom'}})}}

    {{form_row(form.Email, {'label':'Adresse email' ,'attr':{'class':'princi','placeholder': 'Adresse email'}})}}

    {{form_row(form.Adresse, {'label':'Adresse postale' ,'attr':{'class':'princi','placeholder': 'Adresse postale'}})}}
  </div>

  <div class=\"blip\">
    {{form_row(form.Ville, {'label':'Ville' ,'attr':{'class':'princi','placeholder': 'Ville'}})}}

    {{form_row(form.Pays, {'label':'Pays' ,'attr':{'class':'princi','placeholder': 'Pays'}})}}

    {{form_row(form.Password, {'label':'Mot de passe' ,'attr':{'class':'princi','placeholder': 'Mot de passe'}})}}

    {{form_row(form.PasswordVerification, {'label':'Vérification du mot de passe' ,'attr':{'class':'princi','placeholder': 'Vérification du mot de passe'}})}}
  </div>


  <button type=\"submit\" class=\"bouton\">Confirmer</button>
</div>

{{form_end(form)}}
{% endblock %}", "security/inscription.html.twig", "C:\\EPSI Projet\\ACME Symfony\\templates\\security\\inscription.html.twig");
    }
}
