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

/* accueil/start.html.twig */
class __TwigTemplate_eccad6c108bb98c690270cc866307d0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/start.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/start.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/start.html.twig", 1);
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
        echo "    <div id=\"google-map\" style=\"height: 800px; width: 100%;\"></div>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCAzPX599Akl0aL4UhXlHTPxfIHte49kWM&callback=initMap\" async defer></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/maps.js"), "html", null, true);
        echo "\"></script>

        <section class=\"page-section portfolio\" id=\"portfolio\">
            <div class=\"container\">
                <!-- Portfolio Section Heading-->
                <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">Portfolio</h2>
                <!-- Icon Divider-->
                <div class=\"divider-custom\">
                    <div class=\"divider-custom-line\"></div>
                    <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                    <div class=\"divider-custom-line\"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class=\"row justify-content-center\">
                    <!-- Portfolio Item 1-->
                    <div class=\"col-md-6 col-lg-4 mb-5\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal1\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/cabin.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class=\"col-md-6 col-lg-4 mb-5\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal2\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/cake.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class=\"col-md-6 col-lg-4 mb-5\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal3\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/circus.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class=\"col-md-6 col-lg-4 mb-5 mb-lg-0\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal4\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/game.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class=\"col-md-6 col-lg-4 mb-5 mb-md-0\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal5\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/safe.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal6\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/submarine.png\" alt=\"...\" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div id=\"google-map\" style=\"height: 800px; width: 100%;\"></div>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCAzPX599Akl0aL4UhXlHTPxfIHte49kWM&callback=initMap\" async defer></script>
    <script src=\"{{ asset('js/maps.js') }}\"></script>

        <section class=\"page-section portfolio\" id=\"portfolio\">
            <div class=\"container\">
                <!-- Portfolio Section Heading-->
                <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">Portfolio</h2>
                <!-- Icon Divider-->
                <div class=\"divider-custom\">
                    <div class=\"divider-custom-line\"></div>
                    <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                    <div class=\"divider-custom-line\"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class=\"row justify-content-center\">
                    <!-- Portfolio Item 1-->
                    <div class=\"col-md-6 col-lg-4 mb-5\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal1\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/cabin.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class=\"col-md-6 col-lg-4 mb-5\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal2\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/cake.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class=\"col-md-6 col-lg-4 mb-5\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal3\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/circus.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class=\"col-md-6 col-lg-4 mb-5 mb-lg-0\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal4\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/game.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class=\"col-md-6 col-lg-4 mb-5 mb-md-0\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal5\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/safe.png\" alt=\"...\" />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"portfolio-item mx-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#portfolioModal6\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div>
                            <img class=\"img-fluid\" src=\"assets/img/portfolio/submarine.png\" alt=\"...\" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


{% endblock %}
", "accueil/start.html.twig", "C:\\Projets\\Php\\AcmeSymfonyAPI\\templates\\accueil\\start.html.twig");
    }
}
