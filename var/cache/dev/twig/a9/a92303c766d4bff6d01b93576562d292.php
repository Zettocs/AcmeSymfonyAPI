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

/* acme/panier.html.twig */
class __TwigTemplate_141e84890b0da4a5baa228af3c69b6cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acme/panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acme/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "acme/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .container {
            margin-top: 70px;
            margin-bottom: 50px;
        }
        
        .table {
            background-color: #fff;
            border: 2px solid #aaa;
            border-radius : 10px;
        }
        
        .table th,
        .table td {
            border: 2px solid #aaa;
        }
        
        .btn-confirm {
            display: block;
            margin: 0 auto;
            margin-top: 10px;
        }


        h1 {
            margin-left: 20px;
        }

        .btn-primary {
            margin-left: 20px;
        }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "
<div class=\"container\">
    <h1>Votre panier</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 57
        if ( !twig_test_empty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 57, $this->source); })()))) {
            // line 58
            echo "                ";
            $context["total"] = 0;
            // line 59
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["index"] => $context["produit"]) {
                // line 60
                echo "                    ";
                $context["subtotal"] = (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 60) * twig_get_attribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 60));
                // line 61
                echo "                    ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()) + (isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 61, $this->source); })()));
                // line 62
                echo "                    <tr>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                        <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 64), "html", null, true);
                echo " €</td>
                        <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                        <td>";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 66, $this->source); })()), "html", null, true);
                echo " €</td>
                        <td><a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_supprimer", ["index" => $context["index"]]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 74, $this->source); })()), "html", null, true);
            echo " €</td>
                    <td></td>
                </tr>
            ";
        } else {
            // line 78
            echo "                <tr>
                    <td colspan=\"5\">Votre panier est vide.</td>
                </tr>
            ";
        }
        // line 82
        echo "        </tbody>
    </table>

    ";
        // line 85
        if ( !twig_test_empty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 85, $this->source); })()))) {
            // line 86
            echo "        <form method=\"POST\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valider_commande");
            echo "\">
            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["index"] => $context["produit"]) {
                // line 88
                echo "                <input type=\"hidden\" name=\"panier[";
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "][idproduit]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idproduit", [], "any", false, false, false, 88), "html", null, true);
                echo "\" />
                <input type=\"hidden\" name=\"panier[";
                // line 89
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "][nom]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 89), "html", null, true);
                echo "\" />
                <input type=\"hidden\" name=\"panier[";
                // line 90
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "][prix]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 90), "html", null, true);
                echo "\" />
                <input type=\"hidden\" name=\"panier[";
                // line 91
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "][stock]\" value=\"1\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            <button type=\"submit\" class=\"btn btn-primary\">Confirmer la commande</button>
        </form>
    ";
        }
        // line 96
        echo "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "acme/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 96,  267 => 93,  259 => 91,  253 => 90,  247 => 89,  240 => 88,  236 => 87,  231 => 86,  229 => 85,  224 => 82,  218 => 78,  211 => 74,  205 => 70,  196 => 67,  192 => 66,  188 => 65,  184 => 64,  180 => 63,  177 => 62,  174 => 61,  171 => 60,  166 => 59,  163 => 58,  161 => 57,  145 => 43,  135 => 42,  116 => 40,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .container {
            margin-top: 70px;
            margin-bottom: 50px;
        }
        
        .table {
            background-color: #fff;
            border: 2px solid #aaa;
            border-radius : 10px;
        }
        
        .table th,
        .table td {
            border: 2px solid #aaa;
        }
        
        .btn-confirm {
            display: block;
            margin: 0 auto;
            margin-top: 10px;
        }


        h1 {
            margin-left: 20px;
        }

        .btn-primary {
            margin-left: 20px;
        }

    </style>
{% endblock %}

{% block title %}Panier{% endblock %}

{% block body %}

<div class=\"container\">
    <h1>Votre panier</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            {% if produits is not empty %}
                {% set total = 0 %}
                {% for index, produit in produits %}
                    {% set subtotal = produit.prix * produit.stock %}
                    {% set total = total + subtotal %}
                    <tr>
                        <td>{{ produit.nom }}</td>
                        <td>{{ produit.prix }} €</td>
                        <td>{{ produit.stock }}</td>
                        <td>{{ subtotal }} €</td>
                        <td><a href=\"{{ path('panier_supprimer', {'index': index}) }}\" class=\"btn btn-danger\">Supprimer</a></td>
                    </tr>
                {% endfor %}
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td>{{ total }} €</td>
                    <td></td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">Votre panier est vide.</td>
                </tr>
            {% endif %}
        </tbody>
    </table>

    {% if produits is not empty %}
        <form method=\"POST\" action=\"{{ path('valider_commande') }}\">
            {% for index, produit in produits %}
                <input type=\"hidden\" name=\"panier[{{ index }}][idproduit]\" value=\"{{ produit.idproduit }}\" />
                <input type=\"hidden\" name=\"panier[{{ index }}][nom]\" value=\"{{ produit.nom }}\" />
                <input type=\"hidden\" name=\"panier[{{ index }}][prix]\" value=\"{{ produit.prix }}\" />
                <input type=\"hidden\" name=\"panier[{{ index }}][stock]\" value=\"1\" />
            {% endfor %}
            <button type=\"submit\" class=\"btn btn-primary\">Confirmer la commande</button>
        </form>
    {% endif %}
</div>

{% endblock %}
", "acme/panier.html.twig", "C:\\Projets\\Php\\AcmeSymfonyAPI\\templates\\acme\\panier.html.twig");
    }
}
