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

/* prestations/index.html.twig */
class __TwigTemplate_422b3e2e3ac4885aaae861c3862c41afcc24506e84cf91948e37c1c78b0d9a1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta_description' => [$this, 'block_meta_description'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestations/index.html.twig", 1);
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
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        yield "Découvrez nos prestations : son, lumière, enregistrement, multimédia et location de matériel événementiel professionnel.";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "<section class=\"bg-primary-dark text-white py-5 position-relative\">
    <div class=\"container py-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-8 mx-auto text-center fade-in-up\">
                <h1 class=\"display-4 font-bold mb-3\">
                    <i class=\"fas fa-tools text-accent-gold me-3\"></i>
                    Nos Prestations
                </h1>
                <p class=\"lead mb-3\">Solutions techniques complètes pour vos événements professionnels</p>
                <div class=\"d-inline-block bg-primary-red text-white px-4 py-2 rounded-pill\">
                    <i class=\"fas fa-star me-2\"></i>
                    <strong>4 métiers, 1 seul interlocuteur</strong>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 27
        yield "    <div class=\"scroll-indicator\">
        <a href=\"#audiovisuel\" class=\"scroll-arrow\">
            <i class=\"fas fa-chevron-down\"></i>
        </a>
    </div>
</section>

";
        // line 35
        yield "<section class=\"bg-light-bg py-3 sticky-top border-bottom\">
    <div class=\"container\">
        <nav class=\"nav nav-pills justify-content-center flex-wrap\">
            <a class=\"nav-link text-dark\" href=\"#audiovisuel\">Equipement audiovisuel</a>
            <a class=\"nav-link text-dark\" href=\"#multimedia\">Multimédia</a>
            <a class=\"nav-link text-dark\" href=\"#controle-acces\">Contrôle d'accès</a>
            <a class=\"nav-link text-dark\" href=\"#regie-technique\">Régie technique</a>
            <a class=\"nav-link text-dark\" href=\"#location\">Location</a>
        </nav>
    </div>
</section>

";
        // line 48
        yield "<section id=\"audiovisuel\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 scroll-reveal-left\">
                <div class=\"pe-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-volume-up fa-4x text-accent-gold\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Equipement audiovisuel</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Équipement de vos salles de conférences/congrès
                    </p>
                    <p class=\"text-dark-gray\">
                        Nous vous proposons des solutions adaptées pour tout type de besoin. De l'éclairage à la vidéo en passant par le son nous optimisons votre espace.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 scroll-reveal-right\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Notre Matériel</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Projecteurs à découpe, barres LED</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Enceintes active large bande</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Enceintes compactes</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Microphones HF (main, cravate, serre tête)</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Tables de mixage numériques</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Pupitre sonorisé, micros cols de cygnes</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Captation du son</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Vidéoprojecteurs ultra-courte focale, longue distance</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Ecrans 4K UHD</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class=\"my-0\">

";
        // line 88
        yield "<section id=\"multimedia\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 order-lg-2 scroll-reveal-right\">
                <div class=\"ps-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-tv fa-4x text-accent-gold\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Multimédia</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Vidéoprojecteurs haute définition, écrans TV 4K, tablettes, ordinateurs. Nous vous proposons de nombreuses références d'équipements.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 order-lg-1 scroll-reveal-left\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Notre Matériel</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> TV 4K (7 références) + pieds</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Vidéoprojecteurs ultra-courte focale, longue distance</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Tablettes android ou Apple avec support</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Ordinateurs avec suite office (carte i3 au minimum)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class=\"my-0\">

";
        // line 120
        yield "<section id=\"controle-acces\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 scroll-reveal-left\">
                <div class=\"pe-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-qrcode fa-4x text-primary-blue\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Contrôle d'accès</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Enregistrement des visiteurs et contrôle d'accès de votre évènement
                    </p>
                    <p class=\"text-dark-gray\">
                        Nous mettons en place votre accueil visiteurs et exposants pour fluidifier au mieux leur enregistrement. Puis le contrôle d'accès de votre évènement et des différents espaces à l'intérieur.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 scroll-reveal-right\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Notre Matériel</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Ordinateurs portables</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Routeur 4G/5G</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Imprimantes lasers N&B ou couleurs</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Douchettes de contrôle d'accès (en temps réel ou non)</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Application Leads pour vos exposants (scan, qualification des fiches et récupération à tout moment)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class=\"my-0\">

";
        // line 156
        yield "<section id=\"regie-technique\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 order-lg-2 scroll-reveal-right\">
                <div class=\"ps-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-cogs fa-4x text-accent-gold\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Régie technique</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Supervision et coordination de votre montage
                    </p>
                    <p class=\"text-dark-gray\">
                        Supervision de votre montage, gestion des prestataires d'installation, coordination des équipes.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 order-lg-1 scroll-reveal-left\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Nos Services</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Supervision de votre montage</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Gestion des prestataires d'installation</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Coordination des équipes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class=\"my-0\">

";
        // line 190
        yield "<section id=\"location\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 scroll-reveal-left\">
                <div class=\"pe-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-check fa-4x text-accent-orange\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Location de Matériel</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Large catalogue disponible à la location
                    </p>
                    <p class=\"text-dark-gray\">
                        IRCI met à votre disposition un catalogue de matériel audiovisuel professionnel de marques reconnues. Sonorisation, éclairage, vidéo, informatique : tout ce dont vous avez besoin pour réussir votre évènement.
                    </p>
                    <p class=\"text-dark-gray\">
                        Livraison, installation et reprise possible. Support technique inclus pour vous accompagner dans votre projet.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 scroll-reveal-right\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Conditions de Location</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\">
                            <strong class=\"text-primary-blue d-block mb-1\">Tarification</strong>
                            <span class=\"text-dark-gray\">Devis personnalisé selon matériel et durée</span>
                        </li>
                        <li class=\"mb-3\">
                            <strong class=\"text-primary-blue d-block mb-1\">Livraison</strong>
                            <span class=\"text-dark-gray\">Disponible sur toute la région</span>
                        </li>
                        <li class=\"mb-3\">
                            <strong class=\"text-primary-blue d-block mb-1\">Assistance</strong>
                            <span class=\"text-dark-gray\">Support technique disponible</span>
                        </li>
                    </ul>
                    <a href=\"";
        // line 227
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn btn-accent mt-2\">Demander un devis</a>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 235
        yield "<section class=\"py-5 bg-primary-blue text-white\">
    <div class=\"container py-5 text-center scroll-reveal\">
        <h2 class=\"display-5 font-bold mb-4\">Un projet en tête ?</h2>
        <p class=\"lead mb-4\">Discutons ensemble de vos besoins techniques</p>
        <div class=\"d-flex gap-3 justify-content-center flex-wrap align-items-stretch\">
            <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn btn-accent btn-lg d-flex align-items-center\">
                <i class=\"fas fa-file-alt me-2\"></i>Demander un devis
            </a>
            <a href=\"";
        // line 243
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn btn-outline-light btn-lg d-flex align-items-center\">
                <i class=\"fas fa-phone me-2\"></i>Nous appeler
            </a>
        </div>
    </div>
</section>

<style>
.nav-pills .nav-link {
    color: var(--dark-gray);
    font-weight: 500;
    transition: all 0.3s ease;
    border-radius: 8px;
    padding: 10px 20px !important;
}

.nav-pills .nav-link:hover,
.nav-pills .nav-link.active {
    background-color: var(--primary-red);
    color: white !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(220, 20, 60, 0.3);
}

section[id] {
    scroll-margin-top: 100px;
}

.d-flex.gap-3 > .btn {
    min-height: 48px;
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
        return "prestations/index.html.twig";
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
        return array (  341 => 243,  335 => 240,  328 => 235,  318 => 227,  279 => 190,  244 => 156,  207 => 120,  174 => 88,  133 => 48,  119 => 35,  110 => 27,  91 => 9,  84 => 7,  70 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }} - IRCI{% endblock %}

{% block meta_description %}Découvrez nos prestations : son, lumière, enregistrement, multimédia et location de matériel événementiel professionnel.{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"bg-primary-dark text-white py-5 position-relative\">
    <div class=\"container py-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-8 mx-auto text-center fade-in-up\">
                <h1 class=\"display-4 font-bold mb-3\">
                    <i class=\"fas fa-tools text-accent-gold me-3\"></i>
                    Nos Prestations
                </h1>
                <p class=\"lead mb-3\">Solutions techniques complètes pour vos événements professionnels</p>
                <div class=\"d-inline-block bg-primary-red text-white px-4 py-2 rounded-pill\">
                    <i class=\"fas fa-star me-2\"></i>
                    <strong>4 métiers, 1 seul interlocuteur</strong>
                </div>
            </div>
        </div>
    </div>
    
    {# Flèche animée #}
    <div class=\"scroll-indicator\">
        <a href=\"#audiovisuel\" class=\"scroll-arrow\">
            <i class=\"fas fa-chevron-down\"></i>
        </a>
    </div>
</section>

{# Navigation Prestations #}
<section class=\"bg-light-bg py-3 sticky-top border-bottom\">
    <div class=\"container\">
        <nav class=\"nav nav-pills justify-content-center flex-wrap\">
            <a class=\"nav-link text-dark\" href=\"#audiovisuel\">Equipement audiovisuel</a>
            <a class=\"nav-link text-dark\" href=\"#multimedia\">Multimédia</a>
            <a class=\"nav-link text-dark\" href=\"#controle-acces\">Contrôle d'accès</a>
            <a class=\"nav-link text-dark\" href=\"#regie-technique\">Régie technique</a>
            <a class=\"nav-link text-dark\" href=\"#location\">Location</a>
        </nav>
    </div>
</section>

{# Prestation: Audiovisuel #}
<section id=\"audiovisuel\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 scroll-reveal-left\">
                <div class=\"pe-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-volume-up fa-4x text-accent-gold\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Equipement audiovisuel</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Équipement de vos salles de conférences/congrès
                    </p>
                    <p class=\"text-dark-gray\">
                        Nous vous proposons des solutions adaptées pour tout type de besoin. De l'éclairage à la vidéo en passant par le son nous optimisons votre espace.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 scroll-reveal-right\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Notre Matériel</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Projecteurs à découpe, barres LED</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Enceintes active large bande</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Enceintes compactes</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Microphones HF (main, cravate, serre tête)</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Tables de mixage numériques</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Pupitre sonorisé, micros cols de cygnes</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Captation du son</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Vidéoprojecteurs ultra-courte focale, longue distance</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Ecrans 4K UHD</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class=\"my-0\">

{# Prestation: Multimédia #}
<section id=\"multimedia\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 order-lg-2 scroll-reveal-right\">
                <div class=\"ps-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-tv fa-4x text-accent-gold\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Multimédia</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Vidéoprojecteurs haute définition, écrans TV 4K, tablettes, ordinateurs. Nous vous proposons de nombreuses références d'équipements.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 order-lg-1 scroll-reveal-left\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Notre Matériel</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> TV 4K (7 références) + pieds</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Vidéoprojecteurs ultra-courte focale, longue distance</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Tablettes android ou Apple avec support</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Ordinateurs avec suite office (carte i3 au minimum)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class=\"my-0\">

{# Prestation: Contrôle d'accès #}
<section id=\"controle-acces\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 scroll-reveal-left\">
                <div class=\"pe-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-qrcode fa-4x text-primary-blue\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Contrôle d'accès</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Enregistrement des visiteurs et contrôle d'accès de votre évènement
                    </p>
                    <p class=\"text-dark-gray\">
                        Nous mettons en place votre accueil visiteurs et exposants pour fluidifier au mieux leur enregistrement. Puis le contrôle d'accès de votre évènement et des différents espaces à l'intérieur.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 scroll-reveal-right\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Notre Matériel</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Ordinateurs portables</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Routeur 4G/5G</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Imprimantes lasers N&B ou couleurs</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Douchettes de contrôle d'accès (en temps réel ou non)</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-primary-blue me-2\"></i> Application Leads pour vos exposants (scan, qualification des fiches et récupération à tout moment)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class=\"my-0\">

{# Prestation: Régie technique #}
<section id=\"regie-technique\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 order-lg-2 scroll-reveal-right\">
                <div class=\"ps-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-cogs fa-4x text-accent-gold\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Régie technique</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Supervision et coordination de votre montage
                    </p>
                    <p class=\"text-dark-gray\">
                        Supervision de votre montage, gestion des prestataires d'installation, coordination des équipes.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 order-lg-1 scroll-reveal-left\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Nos Services</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Supervision de votre montage</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Gestion des prestataires d'installation</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-accent-gold me-2\"></i> Coordination des équipes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class=\"my-0\">

{# Prestation: Location #}
<section id=\"location\" class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center mb-4\">
            <div class=\"col-lg-6 scroll-reveal-left\">
                <div class=\"pe-lg-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-check fa-4x text-accent-orange\"></i>
                    </div>
                    <h2 class=\"display-6 font-bold text-primary-blue mb-3\">Location de Matériel</h2>
                    <p class=\"lead text-dark-gray mb-4\">
                        Large catalogue disponible à la location
                    </p>
                    <p class=\"text-dark-gray\">
                        IRCI met à votre disposition un catalogue de matériel audiovisuel professionnel de marques reconnues. Sonorisation, éclairage, vidéo, informatique : tout ce dont vous avez besoin pour réussir votre évènement.
                    </p>
                    <p class=\"text-dark-gray\">
                        Livraison, installation et reprise possible. Support technique inclus pour vous accompagner dans votre projet.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-6 scroll-reveal-right\">
                <div class=\"bg-light-bg p-4 rounded\">
                    <h3 class=\"h5 font-bold text-primary-blue mb-3\">Conditions de Location</h3>
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-3\">
                            <strong class=\"text-primary-blue d-block mb-1\">Tarification</strong>
                            <span class=\"text-dark-gray\">Devis personnalisé selon matériel et durée</span>
                        </li>
                        <li class=\"mb-3\">
                            <strong class=\"text-primary-blue d-block mb-1\">Livraison</strong>
                            <span class=\"text-dark-gray\">Disponible sur toute la région</span>
                        </li>
                        <li class=\"mb-3\">
                            <strong class=\"text-primary-blue d-block mb-1\">Assistance</strong>
                            <span class=\"text-dark-gray\">Support technique disponible</span>
                        </li>
                    </ul>
                    <a href=\"{{ path('contact') }}\" class=\"btn btn-accent mt-2\">Demander un devis</a>
                </div>
            </div>
        </div>
    </div>
</section>

{# CTA Section #}
<section class=\"py-5 bg-primary-blue text-white\">
    <div class=\"container py-5 text-center scroll-reveal\">
        <h2 class=\"display-5 font-bold mb-4\">Un projet en tête ?</h2>
        <p class=\"lead mb-4\">Discutons ensemble de vos besoins techniques</p>
        <div class=\"d-flex gap-3 justify-content-center flex-wrap align-items-stretch\">
            <a href=\"{{ path('contact') }}\" class=\"btn btn-accent btn-lg d-flex align-items-center\">
                <i class=\"fas fa-file-alt me-2\"></i>Demander un devis
            </a>
            <a href=\"{{ path('contact') }}\" class=\"btn btn-outline-light btn-lg d-flex align-items-center\">
                <i class=\"fas fa-phone me-2\"></i>Nous appeler
            </a>
        </div>
    </div>
</section>

<style>
.nav-pills .nav-link {
    color: var(--dark-gray);
    font-weight: 500;
    transition: all 0.3s ease;
    border-radius: 8px;
    padding: 10px 20px !important;
}

.nav-pills .nav-link:hover,
.nav-pills .nav-link.active {
    background-color: var(--primary-red);
    color: white !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(220, 20, 60, 0.3);
}

section[id] {
    scroll-margin-top: 100px;
}

.d-flex.gap-3 > .btn {
    min-height: 48px;
}
</style>
{% endblock %}
", "prestations/index.html.twig", "/home/vagrant/public_html/irci/templates/prestations/index.html.twig");
    }
}
