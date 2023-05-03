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

/* admin/admin.html.twig */
class __TwigTemplate_c7d2fe7ea2cc784bdea9e11e03ad7cc7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
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
        echo "
\t<style>
\t\t.bandeau {
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

\t\t.catalogue-wrapper {
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

\t\t.produit-wrapper button {
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


\t\t.pagination {
\t\t\tposition: fixed;
\t\t\tbottom: 2%;
\t\t\tleft: 0;
\t\t\tright: 0;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\tpadding: 20px 0;
\t\t}

\t\t.pagination a,
\t\t.pagination span {
\t\t\ttext-decoration: none;
\t\t\tcolor: #27476E;
\t\t\tmargin: 0 10px;
\t\t\tborder: none;
\t\t\tbackground-color: transparent;
\t\t\toutline: none;
\t\t\tfont-size: 20px;
\t\t\tcursor: pointer;
\t\t}

\t\t.pagination .current {
\t\t\tcolor: white;
\t\t\tbackground-color: #27476E;
\t\t\tborder-radius: 50%;
\t\t\twidth: 30px;
\t\t\theight: 30px;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t}

\t\t@media(max-width: 1000px) {
\t\t\t.catalogue-wrapper {
\t\t\t\tgrid-template-columns: repeat(3, 1fr);
\t\t\t}
\t\t}
\t\t@media(max-width: 700px) {
\t\t\t.catalogue-wrapper {
\t\t\t\tgrid-template-columns: repeat(2, 1fr);
\t\t\t}
\t\t}
\t\t@media(max-width: 500px) {
\t\t\t.catalogue-wrapper {
\t\t\t\tgrid-template-columns: repeat(1, 1fr);
\t\t\t}
\t\t}


\t\t/* Barre de défilement */
\t\t::-webkit-scrollbar {
\t\t\twidth: 12px;
\t\t}

\t\t/* Flèche bouton de défilement */
\t\t::-webkit-scrollbar-button {
\t\t\tbackground-color: #27476E;
\t\t}

\t\t/* Piste de la scrollbar */
\t\t::-webkit-scrollbar-track {
\t\t\tbackground-color: #27476E;
\t\t}

\t\t/* Thumb (barre de défilement) */
\t\t::-webkit-scrollbar-thumb {
\t\t\tbackground-color: white;
\t\t\tborder-radius: 5px;
\t\t}

\t\t/* Thumb-hover (barre de défilement au survol) */
\t\t::-webkit-scrollbar-thumb:hover {
\t\t\tbackground-color: #555;
\t\t}
\t</style>

\t<div class=\"bandeau\">
\t\t<h1>Collection glace</h1>
\t</div>


\t<div class=\"catalogue-wrapper\">

\t\t";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 179, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 180
            echo "
\t\t\t<div class=\"produit-wrapper\">


\t\t\t\t<div class=\"test\">
\t\t\t\t\t<img class=\"chaussures\" src=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/produits/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 185))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 185), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"nom\">";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 187), "html", null, true);
            echo "</h2>

\t\t\t\t<p class=\"reference\">Référence :
\t\t\t\t\t";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "référence", [], "any", false, false, false, 190), "html", null, true);
            echo "</p>

\t\t\t\t<p class=\"prix\">";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 192), "html", null, true);
            echo "€</p>
                <p class=\"prix\">";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 193), "html", null, true);
            echo " en stock</p>

\t\t\t\t<button class=\"afficher-article\">
\t\t\t\t\t<a href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_admin_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idproduit", [], "any", false, false, false, 196)]), "html", null, true);
            echo "\">Commander</a>
\t\t\t\t</button>


\t\t\t</div>


\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 204, $this->source); })())) > 0)) {
            // line 205
            echo "\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 206
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 206, $this->source); })()) > 1)) {
                // line 207
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_shop", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 207, $this->source); })()) - 1)]), "html", null, true);
                echo "\">Précédent</a>
\t\t\t\t";
            }
            // line 209
            echo "
\t\t\t\t";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ((int) floor((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 210, $this->source); })())) / 20)) + 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 211
                echo "\t\t\t\t\t";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 211, $this->source); })()))) {
                    // line 212
                    echo "\t\t\t\t\t\t<span class=\"current\">";
                    echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 214
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_shop", ["page" => $context["p"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 216
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "
\t\t\t\t";
            // line 218
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 218, $this->source); })()) < ((int) floor((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 218, $this->source); })())) / 20)) + 1))) {
                // line 219
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_shop", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 219, $this->source); })()) + 1)]), "html", null, true);
                echo "\">Suivant</a>
\t\t\t\t";
            }
            // line 221
            echo "\t\t\t</div>
\t\t";
        }
        // line 223
        echo "\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 223,  353 => 221,  347 => 219,  345 => 218,  342 => 217,  336 => 216,  328 => 214,  322 => 212,  319 => 211,  315 => 210,  312 => 209,  306 => 207,  304 => 206,  301 => 205,  298 => 204,  284 => 196,  278 => 193,  274 => 192,  269 => 190,  263 => 187,  256 => 185,  249 => 180,  245 => 179,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<style>
\t\t.bandeau {
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

\t\t.catalogue-wrapper {
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

\t\t.produit-wrapper button {
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


\t\t.pagination {
\t\t\tposition: fixed;
\t\t\tbottom: 2%;
\t\t\tleft: 0;
\t\t\tright: 0;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\tpadding: 20px 0;
\t\t}

\t\t.pagination a,
\t\t.pagination span {
\t\t\ttext-decoration: none;
\t\t\tcolor: #27476E;
\t\t\tmargin: 0 10px;
\t\t\tborder: none;
\t\t\tbackground-color: transparent;
\t\t\toutline: none;
\t\t\tfont-size: 20px;
\t\t\tcursor: pointer;
\t\t}

\t\t.pagination .current {
\t\t\tcolor: white;
\t\t\tbackground-color: #27476E;
\t\t\tborder-radius: 50%;
\t\t\twidth: 30px;
\t\t\theight: 30px;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t}

\t\t@media(max-width: 1000px) {
\t\t\t.catalogue-wrapper {
\t\t\t\tgrid-template-columns: repeat(3, 1fr);
\t\t\t}
\t\t}
\t\t@media(max-width: 700px) {
\t\t\t.catalogue-wrapper {
\t\t\t\tgrid-template-columns: repeat(2, 1fr);
\t\t\t}
\t\t}
\t\t@media(max-width: 500px) {
\t\t\t.catalogue-wrapper {
\t\t\t\tgrid-template-columns: repeat(1, 1fr);
\t\t\t}
\t\t}


\t\t/* Barre de défilement */
\t\t::-webkit-scrollbar {
\t\t\twidth: 12px;
\t\t}

\t\t/* Flèche bouton de défilement */
\t\t::-webkit-scrollbar-button {
\t\t\tbackground-color: #27476E;
\t\t}

\t\t/* Piste de la scrollbar */
\t\t::-webkit-scrollbar-track {
\t\t\tbackground-color: #27476E;
\t\t}

\t\t/* Thumb (barre de défilement) */
\t\t::-webkit-scrollbar-thumb {
\t\t\tbackground-color: white;
\t\t\tborder-radius: 5px;
\t\t}

\t\t/* Thumb-hover (barre de défilement au survol) */
\t\t::-webkit-scrollbar-thumb:hover {
\t\t\tbackground-color: #555;
\t\t}
\t</style>

\t<div class=\"bandeau\">
\t\t<h1>Collection glace</h1>
\t</div>


\t<div class=\"catalogue-wrapper\">

\t\t{% for produit in pagination %}

\t\t\t<div class=\"produit-wrapper\">


\t\t\t\t<div class=\"test\">
\t\t\t\t\t<img class=\"chaussures\" src=\"{{ asset('images/produits/' ~ produit.photo) }}\" alt=\"{{ produit.nom }}\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"nom\">{{ produit.nom }}</h2>

\t\t\t\t<p class=\"reference\">Référence :
\t\t\t\t\t{{ produit.référence }}</p>

\t\t\t\t<p class=\"prix\">{{ produit.prix }}€</p>
                <p class=\"prix\">{{ produit.stock }} en stock</p>

\t\t\t\t<button class=\"afficher-article\">
\t\t\t\t\t<a href=\"{{ path('produit_admin_detail', { 'id': produit.idproduit }) }}\">Commander</a>
\t\t\t\t</button>


\t\t\t</div>


\t\t{% endfor %}
\t\t{% if produits|length > 0 %}
\t\t\t<div class=\"pagination\">
\t\t\t\t{% if page > 1 %}
\t\t\t\t\t<a href=\"{{ path('accueil_shop', { 'page': page - 1 }) }}\">Précédent</a>
\t\t\t\t{% endif %}

\t\t\t\t{% for p in range(1, produits|length // 20 + 1) %}
\t\t\t\t\t{% if p == page %}
\t\t\t\t\t\t<span class=\"current\">{{ p }}</span>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ path('accueil_shop', { 'page': p }) }}\">{{ p }}</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}

\t\t\t\t{% if page < produits|length // 20 + 1 %}
\t\t\t\t\t<a href=\"{{ path('accueil_shop', { 'page': page + 1 }) }}\">Suivant</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endif %}
\t</div>


{% endblock %}
", "admin/admin.html.twig", "C:\\EPSI Projet\\Symfony\\AcmeSymfonyAPI\\templates\\admin\\admin.html.twig");
    }
}
