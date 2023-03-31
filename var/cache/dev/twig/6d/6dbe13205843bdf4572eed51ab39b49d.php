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

/* _layout/navbar.html.twig */
class __TwigTemplate_ec22eb1e31c63f678520519afbd34007 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_layout/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_layout/navbar.html.twig"));

        // line 1
        echo "<style>
\tnav {
\t\toverflow: hidden;
\t\theight: 80px;
\t\tdisplay: flex;
\t\tjustify-content: flex-end;
\t\twidth: 100%;
\t\tbackground-color: #27476E;
\t}
\t.navbar-brand img {
\t\twidth: 100px;
\t}
\t@media(max-width: 991.5px) {
\t\tnav {
\t\t\tbackground-color: #92BDDB;
\t\t}
\t\t.navbar-brand img {
\t\t\tmax-width: 50px;
\t\t\tmax-height: 50px;
\t\t\tcontent: url(";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/burger.png"), "html", null, true);
        echo ");

\t\t}

\t}
\t.show-navbar {
\t\tdisplay: flex;
\t\tjustify-content: center;
\t\talign-items: center;
\t\tbackground-color: #1E2E45;
\t\tposition: absolute;
\t\ttop: 0;
\t\tleft: 0;
\t\tright: 0;
\t\tbottom: 0;
\t\tz-index: 999;
\t}
\t.hide-navbar {
\t\tdisplay: none;
\t}
\t.close-navbar-button {
\t\twidth: 100px;
\t\tbackground-color: #1E2E45;
\t\tborder: none;
\t\tcursor: pointer;
\t\tposition: absolute;
\t\ttop: 4%;
\t\tleft: -2%;
\t}
\t.burger2 {
\t\twidth: 50%
\t}
\t.centre {
\t\ttext-align: center;
\t\tlist-style-type: none;
\t}
\tul {
\t\tlist-style-type: none;
\t}
\t.boutons_nav {
\t\tcolor: white;
\t\ttext-decoration: none;
\t\tfont-size: 200%;
\t}
</style>

<body>
\t<nav class=\"navbar navbar-expand-lg\">
\t\t<div class=\"container-fluid\">
\t\t\t";
        // line 69
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) {
            // line 70
            echo "\t\t\t\t<a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\" onclick=\"if (window.innerWidth > 991) { return true; } toggleNavbar(); return false;\"><img style=\"width:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/acme.png"), "html", null, true);
            echo "\"></a>

\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t<a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_shop");
            echo "\" onclick=\"if (window.innerWidth > 991) { return true; } toggleNavbar(); return false;\"><img style=\"width:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/acme.png"), "html", null, true);
            echo "\"></a>
\t\t\t";
        }
        // line 75
        echo "\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\" style=\"margin-left :70%\">
\t\t\t\t\t";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) {
            // line 78
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_connexion");
            echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<button style=\"font-size: 150%; text-transform: none; color:white; display: inline-block; border:none; background-color:#27476E\">
\t\t\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_inscription");
            echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<button style=\"font-size: 150%; text-transform: none; color:white; display: inline-block; border:none; background-color:#27476E\">
\t\t\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
            echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<button style=\"font-size: 150%; text-transform: none; color:white; display: inline-block; border:none; background-color:#27476E; margin-left:0%;\">
\t\t\t\t\t\t\t\t\tPanier
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_deconnexion");
            echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<button style=\"font-size: 150%; text-transform: none; color:white; display: inline-block; border:none; background-color:#27476E; margin-left:20%\">
\t\t\t\t\t\t\t\t\tDéconnexion
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div class=\"show-navbar hide-navbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">

\t\t\t\t\t<button class=\"close-navbar-button\" onclick=\"toggleNavbar();\"><img class=\"burger2\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/burger2.png"), "html", null, true);
        echo "\"></button>
\t\t\t\t\t<div class=\"centre\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 123
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123)) {
            // line 124
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"boutons_nav\" href=\"";
            // line 125
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">A c c u e i l</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div style=\"background-color: white; width: 30%; height: 2px; display: inline-block;\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</br>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"boutons_nav\" href=\"";
            // line 134
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_connexion");
            echo "\">C o n n e x i o n</a>
\t\t\t\t\t</li>
\t\t\t\t</br>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div style=\"background-color: white; width: 30%; height: 2px; display: inline-block;\"></div>
\t\t\t</li>
\t\t</br>
\t</body>
</body></li><li>
<a class=\"boutons_nav\" href=\"";
            // line 144
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_inscription");
            echo "\">I n s c r i p t i o n</a></li>";
        } else {
            echo "<li>
<a class=\"boutons_nav\" href=\"";
            // line 145
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_shop");
            echo "\">A c c u e i l</a></li></br></li><li><div style=\"background-color: white; width: 30%; height: 2px; display: inline-block;\"></div></li></br><li><a class=\"boutons_nav\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
            echo "\">P a n i e r</a></li></br></li><li><div style=\"background-color: white; width: 30%; height: 2px; display: inline-block;\"></div></li></br><li><a class=\"boutons_nav\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_deconnexion");
            echo "\">D é c o n n e x i o n</a></li>";
        }
        echo "</body> </ul></div></body></div></div></div></body></body></div><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/navbar.js"), "html", null, true);
        echo "\"></script></body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_layout/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 145,  237 => 144,  224 => 134,  212 => 125,  209 => 124,  207 => 123,  201 => 120,  189 => 110,  179 => 103,  169 => 96,  166 => 95,  155 => 87,  144 => 79,  141 => 78,  139 => 77,  135 => 75,  127 => 73,  118 => 70,  116 => 69,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
\tnav {
\t\toverflow: hidden;
\t\theight: 80px;
\t\tdisplay: flex;
\t\tjustify-content: flex-end;
\t\twidth: 100%;
\t\tbackground-color: #27476E;
\t}
\t.navbar-brand img {
\t\twidth: 100px;
\t}
\t@media(max-width: 991.5px) {
\t\tnav {
\t\t\tbackground-color: #92BDDB;
\t\t}
\t\t.navbar-brand img {
\t\t\tmax-width: 50px;
\t\t\tmax-height: 50px;
\t\t\tcontent: url({{asset('images/burger.png')}});

\t\t}

\t}
\t.show-navbar {
\t\tdisplay: flex;
\t\tjustify-content: center;
\t\talign-items: center;
\t\tbackground-color: #1E2E45;
\t\tposition: absolute;
\t\ttop: 0;
\t\tleft: 0;
\t\tright: 0;
\t\tbottom: 0;
\t\tz-index: 999;
\t}
\t.hide-navbar {
\t\tdisplay: none;
\t}
\t.close-navbar-button {
\t\twidth: 100px;
\t\tbackground-color: #1E2E45;
\t\tborder: none;
\t\tcursor: pointer;
\t\tposition: absolute;
\t\ttop: 4%;
\t\tleft: -2%;
\t}
\t.burger2 {
\t\twidth: 50%
\t}
\t.centre {
\t\ttext-align: center;
\t\tlist-style-type: none;
\t}
\tul {
\t\tlist-style-type: none;
\t}
\t.boutons_nav {
\t\tcolor: white;
\t\ttext-decoration: none;
\t\tfont-size: 200%;
\t}
</style>

<body>
\t<nav class=\"navbar navbar-expand-lg\">
\t\t<div class=\"container-fluid\">
\t\t\t{% if not app.user %}
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('accueil') }}\" onclick=\"if (window.innerWidth > 991) { return true; } toggleNavbar(); return false;\"><img style=\"width:100px\" src=\"{{asset ('images/acme.png')}}\"></a>

\t\t\t{% else %}
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('accueil_shop') }}\" onclick=\"if (window.innerWidth > 991) { return true; } toggleNavbar(); return false;\"><img style=\"width:100px\" src=\"{{asset ('images/acme.png')}}\"></a>
\t\t\t{% endif %}
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\" style=\"margin-left :70%\">
\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('security_connexion') }}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<button style=\"font-size: 150%; text-transform: none; color:white; display: inline-block; border:none; background-color:#27476E\">
\t\t\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('security_inscription') }}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<button style=\"font-size: 150%; text-transform: none; color:white; display: inline-block; border:none; background-color:#27476E\">
\t\t\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('panier') }}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<button style=\"font-size: 150%; text-transform: none; color:white; display: inline-block; border:none; background-color:#27476E; margin-left:0%;\">
\t\t\t\t\t\t\t\t\tPanier
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('security_deconnexion') }}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<button style=\"font-size: 150%; text-transform: none; color:white; display: inline-block; border:none; background-color:#27476E; margin-left:20%\">
\t\t\t\t\t\t\t\t\tDéconnexion
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div class=\"show-navbar hide-navbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">

\t\t\t\t\t<button class=\"close-navbar-button\" onclick=\"toggleNavbar();\"><img class=\"burger2\" src=\"{{asset ('images/burger2.png')}}\"></button>
\t\t\t\t\t<div class=\"centre\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"boutons_nav\" href=\"{{ path('accueil') }}\">A c c u e i l</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div style=\"background-color: white; width: 30%; height: 2px; display: inline-block;\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</br>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"boutons_nav\" href=\"{{ path('security_connexion') }}\">C o n n e x i o n</a>
\t\t\t\t\t</li>
\t\t\t\t</br>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div style=\"background-color: white; width: 30%; height: 2px; display: inline-block;\"></div>
\t\t\t</li>
\t\t</br>
\t</body>
</body></li><li>
<a class=\"boutons_nav\" href=\"{{ path('security_inscription') }}\">I n s c r i p t i o n</a></li>{% else %}<li>
<a class=\"boutons_nav\" href=\"{{ path('accueil_shop') }}\">A c c u e i l</a></li></br></li><li><div style=\"background-color: white; width: 30%; height: 2px; display: inline-block;\"></div></li></br><li><a class=\"boutons_nav\" href=\"{{ path('panier') }}\">P a n i e r</a></li></br></li><li><div style=\"background-color: white; width: 30%; height: 2px; display: inline-block;\"></div></li></br><li><a class=\"boutons_nav\" href=\"{{ path('security_deconnexion') }}\">D é c o n n e x i o n</a></li>{% endif %}</body> </ul></div></body></div></div></div></body></body></div><script src=\"{{ asset ('js/navbar.js') }}\"></script></body>", "_layout/navbar.html.twig", "C:\\EPSI Projet\\ACME Symfony\\templates\\_layout\\navbar.html.twig");
    }
}
