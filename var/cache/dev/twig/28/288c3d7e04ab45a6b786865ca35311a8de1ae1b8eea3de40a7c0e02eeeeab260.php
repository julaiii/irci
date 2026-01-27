<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_b1a26529c2df476ce3a441f3ed757fc31cdb746021127a7f03a4de365e2084cc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 3, $this->source); })()), "html", null, true);
        yield " - IRCI";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<section class=\"bg-primary-dark text-white py-5\" style=\"min-height: 500px;\">
    <div class=\"container\">
        <div class=\"row align-items-center min-vh-50\">
            <div class=\"col-lg-8 mx-auto text-center py-5\">
                <h1 class=\"display-3 font-bold mb-4\">
                    <i class=\"fas fa-microphone-alt text-accent-gold me-3\"></i>
                    IRCI Événementiel
                </h1>
                <p class=\"lead fs-4 mb-4\">
                    Prestataire technique professionnel pour vos événements
                </p>
                <p class=\"fs-5 mb-5\">
                    Son • Lumière • Enregistrement • Multimédia • Location de matériel
                </p>
                <div class=\"d-flex gap-3 justify-content-center\">
                    <a href=\"#\" class=\"btn btn-accent btn-lg\">
                        <i class=\"fas fa-file-alt me-2\"></i>Demander un devis
                    </a>
                    <a href=\"#services\" class=\"btn btn-outline-light btn-lg\">
                        <i class=\"fas fa-arrow-down me-2\"></i>Nos prestations
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"services\" class=\"py-5 bg-white\">
    <div class=\"container py-5\">
        <div class=\"text-center mb-5\">
            <h2 class=\"display-5 font-bold text-primary-blue mb-3\">Nos Prestations</h2>
            <p class=\"lead text-dark-gray\">Des solutions techniques complètes pour tous vos événements professionnels</p>
        </div>
        
        <div class=\"row g-4\">
                        <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-lightbulb fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Lumière</h3>
                        <p class=\"text-dark-gray\">
                            Éclairage scénique, architectural et d'ambiance. Projecteurs LED, lyres, consoles DMX pour sublimer vos événements.
                        </p>
                    </div>
                </div>
            </div>

                        <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-volume-up fa-4x text-accent-orange\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Sonorisation</h3>
                        <p class=\"text-dark-gray\">
                            Sonorisation professionnelle pour concerts, conférences et salons. Enceintes, micros HF, tables de mixage.
                        </p>
                    </div>
                </div>
            </div>

                        <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-record-vinyl fa-4x text-primary-blue\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Enregistrement</h3>
                        <p class=\"text-dark-gray\">
                            Captation audio multi-pistes et studio mobile pour des enregistrements de qualité professionnelle.
                        </p>
                    </div>
                </div>
            </div>

                        <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-video fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Multimédia</h3>
                        <p class=\"text-dark-gray\">
                            Vidéo, écrans LED, projection mapping. Solutions visuelles innovantes pour des événements mémorables.
                        </p>
                    </div>
                </div>
            </div>

                        <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-truck fa-4x text-accent-orange\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Location de Matériel</h3>
                        <p class=\"text-dark-gray\">
                            Large catalogue de matériel audiovisuel professionnel disponible à la location avec livraison.
                        </p>
                    </div>
                </div>
            </div>

                        <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-users fa-4x text-primary-blue\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Accompagnement</h3>
                        <p class=\"text-dark-gray\">
                            Équipe expérimentée pour un accompagnement personnalisé à chaque étape de votre événement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"py-5 bg-primary-blue text-white\">
    <div class=\"container py-5 text-center\">
        <h2 class=\"display-5 font-bold mb-4\">Prêt à donner vie à votre événement ?</h2>
        <p class=\"lead mb-4\">Contactez-nous pour un devis personnalisé et gratuit</p>
        <a href=\"#\" class=\"btn btn-accent btn-lg\">
            <i class=\"fas fa-envelope me-2\"></i>Nous contacter
        </a>
    </div>
</section>

<style>
.hover-shadow {
    transition: all 0.3s ease;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.min-vh-50 {
    min-height: 50vh;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  76 => 7,  69 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }} - IRCI{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"bg-primary-dark text-white py-5\" style=\"min-height: 500px;\">
    <div class=\"container\">
        <div class=\"row align-items-center min-vh-50\">
            <div class=\"col-lg-8 mx-auto text-center py-5\">
                <h1 class=\"display-3 font-bold mb-4\">
                    <i class=\"fas fa-microphone-alt text-accent-gold me-3\"></i>
                    IRCI Événementiel
                </h1>
                <p class=\"lead fs-4 mb-4\">
                    Prestataire technique professionnel pour vos événements
                </p>
                <p class=\"fs-5 mb-5\">
                    Son • Lumière • Enregistrement • Multimédia • Location de matériel
                </p>
                <div class=\"d-flex gap-3 justify-content-center\">
                    <a href=\"#\" class=\"btn btn-accent btn-lg\">
                        <i class=\"fas fa-file-alt me-2\"></i>Demander un devis
                    </a>
                    <a href=\"#services\" class=\"btn btn-outline-light btn-lg\">
                        <i class=\"fas fa-arrow-down me-2\"></i>Nos prestations
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{# Services Section #}
<section id=\"services\" class=\"py-5 bg-white\">
    <div class=\"container py-5\">
        <div class=\"text-center mb-5\">
            <h2 class=\"display-5 font-bold text-primary-blue mb-3\">Nos Prestations</h2>
            <p class=\"lead text-dark-gray\">Des solutions techniques complètes pour tous vos événements professionnels</p>
        </div>
        
        <div class=\"row g-4\">
            {# Service: Lumière #}
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-lightbulb fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Lumière</h3>
                        <p class=\"text-dark-gray\">
                            Éclairage scénique, architectural et d'ambiance. Projecteurs LED, lyres, consoles DMX pour sublimer vos événements.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Son #}
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-volume-up fa-4x text-accent-orange\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Sonorisation</h3>
                        <p class=\"text-dark-gray\">
                            Sonorisation professionnelle pour concerts, conférences et salons. Enceintes, micros HF, tables de mixage.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Enregistrement #}
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-record-vinyl fa-4x text-primary-blue\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Enregistrement</h3>
                        <p class=\"text-dark-gray\">
                            Captation audio multi-pistes et studio mobile pour des enregistrements de qualité professionnelle.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Multimédia #}
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-video fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Multimédia</h3>
                        <p class=\"text-dark-gray\">
                            Vidéo, écrans LED, projection mapping. Solutions visuelles innovantes pour des événements mémorables.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Location #}
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-truck fa-4x text-accent-orange\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Location de Matériel</h3>
                        <p class=\"text-dark-gray\">
                            Large catalogue de matériel audiovisuel professionnel disponible à la location avec livraison.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Accompagnement #}
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-users fa-4x text-primary-blue\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Accompagnement</h3>
                        <p class=\"text-dark-gray\">
                            Équipe expérimentée pour un accompagnement personnalisé à chaque étape de votre événement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{# CTA Section #}
<section class=\"py-5 bg-primary-blue text-white\">
    <div class=\"container py-5 text-center\">
        <h2 class=\"display-5 font-bold mb-4\">Prêt à donner vie à votre événement ?</h2>
        <p class=\"lead mb-4\">Contactez-nous pour un devis personnalisé et gratuit</p>
        <a href=\"#\" class=\"btn btn-accent btn-lg\">
            <i class=\"fas fa-envelope me-2\"></i>Nous contacter
        </a>
    </div>
</section>

<style>
.hover-shadow {
    transition: all 0.3s ease;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.min-vh-50 {
    min-height: 50vh;
}
</style>
{% endblock %}
", "home/index.html.twig", "/home/vagrant/public_html/irci/templates/home/index.html.twig");
    }
}
