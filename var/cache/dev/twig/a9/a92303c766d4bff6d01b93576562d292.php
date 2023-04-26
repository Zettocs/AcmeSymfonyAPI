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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "
<div class=\"container\">
    <h1>Votre panier</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 53
        if ( !twig_test_empty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["index"] => $context["produit"]) {
                // line 55
                echo "                    <tr>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
                        <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 57), "html", null, true);
                echo " €</td>
                        <td><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_supprimer", ["index" => $context["index"]]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                <tr>
                    <td>Total</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 63, $this->source); })()), "html", null, true);
            echo " €</td>
                    <td></td>
                </tr>
            ";
        } else {
            // line 67
            echo "                <tr>
                    <td colspan=\"3\">Votre panier est vide</td>
                </tr>
            ";
        }
        // line 71
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valider_commande");
        echo "\" class=\"btn btn-primary\">Confirmer la commande</a>
</div> 



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
        return array (  187 => 73,  183 => 71,  177 => 67,  170 => 63,  166 => 61,  157 => 58,  153 => 57,  149 => 56,  146 => 55,  141 => 54,  139 => 53,  125 => 41,  115 => 40,  69 => 4,  59 => 3,  36 => 1,);
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

{% block body %}

<div class=\"container\">
    <h1>Votre panier</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            {% if produits is not empty %}
                {% for index, produit in produits %}
                    <tr>
                        <td>{{ produit.nom }}</td>
                        <td>{{ produit.prix }} €</td>
                        <td><a href=\"{{ path('panier_supprimer', {'index': index}) }}\" class=\"btn btn-danger\">Supprimer</a></td>
                    </tr>
                {% endfor %}
                <tr>
                    <td>Total</td>
                    <td>{{ total }} €</td>
                    <td></td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">Votre panier est vide</td>
                </tr>
            {% endif %}
        </tbody>
    </table>
    <a href=\"{{ path('valider_commande') }}\" class=\"btn btn-primary\">Confirmer la commande</a>
</div> 



{% endblock %}
", "acme/panier.html.twig", "C:\\EPSI Projet\\Symfony\\AcmeSymfonyAPI\\templates\\acme\\panier.html.twig");
    }
}
