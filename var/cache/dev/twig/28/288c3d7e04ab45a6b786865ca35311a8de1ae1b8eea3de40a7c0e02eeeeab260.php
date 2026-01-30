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
        yield "<section class=\"bg-primary-dark text-white py-5 position-relative\" style=\"min-height: 550px;\">
    <div class=\"container\">
        <div class=\"row align-items-center min-vh-50\">
            <div class=\"col-lg-10 mx-auto text-center py-5 fade-in-up\">
                <h1 class=\"display-3 font-bold mb-4 scroll-reveal\">
                    <span class=\"irci-logo-text\">
                        <span class=\"irci-i-top\">I</span><span class=\"irci-letter\">RC</span><span class=\"irci-i-bottom\">I</span>
                    </span> : Votre partenaire événementiel<br>
                    <span class=\"text-primary-red-light\">à taille humaine</span>
                </h1>
                <p class=\"lead fs-4 mb-4 scroll-reveal\" style=\"max-width: 900px; margin: 0 auto;\">
                    Prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs.
                </p>
                
                <div class=\"row g-3 justify-content-center mb-5 mt-4 scroll-reveal\">
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-volume-up text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Son</p>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-lightbulb text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Lumière</p>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-tv text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Audiovisuel</p>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-qrcode text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Contrôle d'accès</p>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-check text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Location</p>
                        </div>
                    </div>
                </div>

                <div class=\"d-flex gap-3 justify-content-center flex-wrap scroll-reveal align-items-stretch\">
                    <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn btn-accent btn-lg d-flex align-items-center\">
                        <i class=\"fas fa-file-alt me-2\"></i>Demander un devis gratuit
                    </a>
                    <a href=\"#about-family\" class=\"btn btn-outline-light btn-lg d-flex align-items-center\">
                        <i class=\"fas fa-arrow-down me-2\"></i>Découvrir l'équipe
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 67
        yield "    <div class=\"scroll-indicator\">
        <a href=\"#about-family\" class=\"scroll-arrow\">
            <i class=\"fas fa-chevron-down\"></i>
        </a>
    </div>
</section>

";
        // line 75
        yield "<section id=\"about-family\" class=\"py-5 bg-accent-warm\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6 mb-4 mb-lg-0 scroll-reveal-left\">
                <div class=\"position-relative\">
                    <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/equipe/equipe-complete.jpg"), "html", null, true);
        yield "\" 
                         alt=\"Équipe familiale IRCI\" 
                         class=\"img-fluid rounded shadow-lg\">
                    <div class=\"position-absolute bottom-0 start-0 p-3 bg-primary-red text-white rounded-end\">
                        <i class=\"fas fa-users me-2\"></i>
                        <strong>Notre équipe</strong>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 scroll-reveal-right\">
                <h2 class=\"display-6 font-bold text-primary-dark mb-4\">
                    Une équipe familiale passionnée
                </h2>
                <p class=\"fs-5 text-dark-gray mb-3\">
                    <strong>Depuis plus de 25 ans, notre équipe</strong> 
                    met son expertise à votre service.
                </p>
                <p class=\"text-dark-gray mb-4\">
                    Nous privilégions une <strong class=\"text-primary-red\">approche humaine</strong>, une 
                    <strong class=\"text-primary-red\">relation directe</strong> et un 
                    <strong class=\"text-primary-red\">accompagnement personnalisé</strong> du premier brief 
                    jusqu'à la clôture de votre évènement.
                </p>
                
                ";
        // line 105
        yield "                <div class=\"alert alert-primary-red-soft border-start border-4 border-primary-red mb-4\">
                    <div class=\"d-flex align-items-start\">
                        <i class=\"fas fa-trophy text-primary-red fa-2x me-3 mt-1\"></i>
                        <div>
                            <h3 class=\"h5 font-bold text-primary-dark mb-2\">
                                Notre atout : Une expertise multi-métiers
                            </h3>
                            <p class=\"text-dark-gray mb-0\">
                                <strong class=\"text-primary-red\">Un interlocuteur unique pour 4 corps de métiers</strong> : 
                                équipement de salles de conférences (son, vidéo, lumière), multimédia, contrôle d'accès, régie technique. Cette polyvalence nous permet de coordonner 
                                l'ensemble de vos besoins techniques avec une vision globale et une cohérence parfaite, 
                                vous simplifiant ainsi la gestion de votre évènement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"bg-white p-4 rounded shadow-sm mb-4\">
                    <div class=\"row g-3 text-center\">
                        <div class=\"col-6\">
                            <div class=\"p-2\">
                                <h3 class=\"h2 font-bold text-primary-red mb-0\">25</h3>
                                <p class=\"small text-dark-gray mb-0\">Années d'expérience</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2\">
                                <h3 class=\"h2 font-bold text-primary-red mb-0\">70+</h3>
                                <p class=\"small text-dark-gray mb-0\">Clients satisfaits</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2\">
                                <h3 class=\"h2 font-bold text-primary-red mb-0\">55k</h3>
                                <p class=\"small text-dark-gray mb-0\">Visiteurs accueillis par an</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2\">
                                <h3 class=\"h2 font-bold text-primary-red mb-0\">100%</h3>
                                <p class=\"small text-dark-gray mb-0\">Sur-mesure</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\" class=\"btn btn-primary-custom btn-lg\">
                    <i class=\"fas fa-users me-2\"></i>Rencontrer l'équipe
                </a>
            </div>
        </div>
    </div>
</section>

";
        // line 158
        yield "<section id=\"services\" class=\"py-5 bg-white\">
    <div class=\"container py-5\">
        <div class=\"text-center mb-5 scroll-reveal\">
            <h2 class=\"display-5 font-bold text-primary-blue mb-3\">Nos Prestations</h2>
            <p class=\"lead text-dark-gray\">Des solutions techniques complètes pour tous vos événements professionnels</p>
        </div>
        
        <div class=\"row g-4\">
            ";
        // line 167
        yield "            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\">
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

            ";
        // line 182
        yield "            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.1s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-volume-up fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Sonorisation</h3>
                        <p class=\"text-dark-gray\">
                            Sonorisation professionnelle pour concerts, conférences et salons. Enceintes, micros HF, tables de mixage.
                        </p>
                    </div>
                </div>
            </div>

            ";
        // line 197
        yield "            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.2s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-tv fa-4x text-primary-blue\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Audiovisuel</h3>
                        <p class=\"text-dark-gray\">
                            Équipement de vos salles de conférences/congrès. Matériel de sonorisation professionnel, poursuites lumières, vidéoprojecteurs ou écrans UHD.
                        </p>
                    </div>
                </div>
            </div>

            ";
        // line 212
        yield "            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.3s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-tv fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Multimédia</h3>
                        <p class=\"text-dark-gray\">
                            Location d'équipements multimédia, TV UHD, tablettes, ordinateurs, sur pied ou en fixation murale.
                        </p>
                    </div>
                </div>
            </div>

            ";
        // line 227
        yield "            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.4s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-qrcode fa-4x text-primary-blue\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Contrôle d'accès</h3>
                        <p class=\"text-dark-gray\">
                            Matériel pour l'enregistrement des visiteurs, contrôle d'accès avec stats en temps réel, application de scans pour vos exposants.
                        </p>
                    </div>
                </div>
            </div>

            ";
        // line 242
        yield "            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.5s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-cogs fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Régie technique</h3>
                        <p class=\"text-dark-gray\">
                            Supervision de votre montage, gestion des prestataires d'installation, coordination des équipes.
                        </p>
                    </div>
                </div>
            </div>

            ";
        // line 257
        yield "            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.6s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-check fa-4x text-accent-orange\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Location de Matériel</h3>
                        <p class=\"text-dark-gray\">
                            Large catalogue de matériel disponible à la location, pour les professionnels ou les particuliers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 275
        yield "<section class=\"py-5 bg-primary-blue text-white\">
    <div class=\"container py-5 text-center\">
        <h2 class=\"display-5 font-bold mb-4\">Prêt à donner vie à votre événement ?</h2>
        <p class=\"lead mb-4\">Contactez-nous pour un devis personnalisé et gratuit</p>
        <a href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn btn-accent btn-lg\">
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
        return array (  371 => 279,  365 => 275,  346 => 257,  330 => 242,  314 => 227,  298 => 212,  282 => 197,  266 => 182,  250 => 167,  240 => 158,  229 => 149,  183 => 105,  156 => 80,  149 => 75,  140 => 67,  126 => 55,  76 => 7,  69 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }} - IRCI{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"bg-primary-dark text-white py-5 position-relative\" style=\"min-height: 550px;\">
    <div class=\"container\">
        <div class=\"row align-items-center min-vh-50\">
            <div class=\"col-lg-10 mx-auto text-center py-5 fade-in-up\">
                <h1 class=\"display-3 font-bold mb-4 scroll-reveal\">
                    <span class=\"irci-logo-text\">
                        <span class=\"irci-i-top\">I</span><span class=\"irci-letter\">RC</span><span class=\"irci-i-bottom\">I</span>
                    </span> : Votre partenaire événementiel<br>
                    <span class=\"text-primary-red-light\">à taille humaine</span>
                </h1>
                <p class=\"lead fs-4 mb-4 scroll-reveal\" style=\"max-width: 900px; margin: 0 auto;\">
                    Prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs.
                </p>
                
                <div class=\"row g-3 justify-content-center mb-5 mt-4 scroll-reveal\">
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-volume-up text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Son</p>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-lightbulb text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Lumière</p>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-tv text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Audiovisuel</p>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-qrcode text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Contrôle d'accès</p>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"bg-white bg-opacity-10 p-3 rounded\">
                            <i class=\"fas fa-check text-primary-red-light fa-2x mb-2\"></i>
                            <p class=\"mb-0 small\">Location</p>
                        </div>
                    </div>
                </div>

                <div class=\"d-flex gap-3 justify-content-center flex-wrap scroll-reveal align-items-stretch\">
                    <a href=\"{{ path('contact') }}\" class=\"btn btn-accent btn-lg d-flex align-items-center\">
                        <i class=\"fas fa-file-alt me-2\"></i>Demander un devis gratuit
                    </a>
                    <a href=\"#about-family\" class=\"btn btn-outline-light btn-lg d-flex align-items-center\">
                        <i class=\"fas fa-arrow-down me-2\"></i>Découvrir l'équipe
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    {# Flèche animée pour scroller vers le bas #}
    <div class=\"scroll-indicator\">
        <a href=\"#about-family\" class=\"scroll-arrow\">
            <i class=\"fas fa-chevron-down\"></i>
        </a>
    </div>
</section>

{# Section Entreprise Familiale #}
<section id=\"about-family\" class=\"py-5 bg-accent-warm\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6 mb-4 mb-lg-0 scroll-reveal-left\">
                <div class=\"position-relative\">
                    <img src=\"{{ asset('images/equipe/equipe-complete.jpg') }}\" 
                         alt=\"Équipe familiale IRCI\" 
                         class=\"img-fluid rounded shadow-lg\">
                    <div class=\"position-absolute bottom-0 start-0 p-3 bg-primary-red text-white rounded-end\">
                        <i class=\"fas fa-users me-2\"></i>
                        <strong>Notre équipe</strong>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 scroll-reveal-right\">
                <h2 class=\"display-6 font-bold text-primary-dark mb-4\">
                    Une équipe familiale passionnée
                </h2>
                <p class=\"fs-5 text-dark-gray mb-3\">
                    <strong>Depuis plus de 25 ans, notre équipe</strong> 
                    met son expertise à votre service.
                </p>
                <p class=\"text-dark-gray mb-4\">
                    Nous privilégions une <strong class=\"text-primary-red\">approche humaine</strong>, une 
                    <strong class=\"text-primary-red\">relation directe</strong> et un 
                    <strong class=\"text-primary-red\">accompagnement personnalisé</strong> du premier brief 
                    jusqu'à la clôture de votre évènement.
                </p>
                
                {# Encadré atout commercial #}
                <div class=\"alert alert-primary-red-soft border-start border-4 border-primary-red mb-4\">
                    <div class=\"d-flex align-items-start\">
                        <i class=\"fas fa-trophy text-primary-red fa-2x me-3 mt-1\"></i>
                        <div>
                            <h3 class=\"h5 font-bold text-primary-dark mb-2\">
                                Notre atout : Une expertise multi-métiers
                            </h3>
                            <p class=\"text-dark-gray mb-0\">
                                <strong class=\"text-primary-red\">Un interlocuteur unique pour 4 corps de métiers</strong> : 
                                équipement de salles de conférences (son, vidéo, lumière), multimédia, contrôle d'accès, régie technique. Cette polyvalence nous permet de coordonner 
                                l'ensemble de vos besoins techniques avec une vision globale et une cohérence parfaite, 
                                vous simplifiant ainsi la gestion de votre évènement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"bg-white p-4 rounded shadow-sm mb-4\">
                    <div class=\"row g-3 text-center\">
                        <div class=\"col-6\">
                            <div class=\"p-2\">
                                <h3 class=\"h2 font-bold text-primary-red mb-0\">25</h3>
                                <p class=\"small text-dark-gray mb-0\">Années d'expérience</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2\">
                                <h3 class=\"h2 font-bold text-primary-red mb-0\">70+</h3>
                                <p class=\"small text-dark-gray mb-0\">Clients satisfaits</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2\">
                                <h3 class=\"h2 font-bold text-primary-red mb-0\">55k</h3>
                                <p class=\"small text-dark-gray mb-0\">Visiteurs accueillis par an</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2\">
                                <h3 class=\"h2 font-bold text-primary-red mb-0\">100%</h3>
                                <p class=\"small text-dark-gray mb-0\">Sur-mesure</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=\"{{ path('about') }}\" class=\"btn btn-primary-custom btn-lg\">
                    <i class=\"fas fa-users me-2\"></i>Rencontrer l'équipe
                </a>
            </div>
        </div>
    </div>
</section>

{# Services Section #}
<section id=\"services\" class=\"py-5 bg-white\">
    <div class=\"container py-5\">
        <div class=\"text-center mb-5 scroll-reveal\">
            <h2 class=\"display-5 font-bold text-primary-blue mb-3\">Nos Prestations</h2>
            <p class=\"lead text-dark-gray\">Des solutions techniques complètes pour tous vos événements professionnels</p>
        </div>
        
        <div class=\"row g-4\">
            {# Service: Lumière #}
            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\">
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
            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.1s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-volume-up fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Sonorisation</h3>
                        <p class=\"text-dark-gray\">
                            Sonorisation professionnelle pour concerts, conférences et salons. Enceintes, micros HF, tables de mixage.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Audiovisuel #}
            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.2s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-tv fa-4x text-primary-blue\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Audiovisuel</h3>
                        <p class=\"text-dark-gray\">
                            Équipement de vos salles de conférences/congrès. Matériel de sonorisation professionnel, poursuites lumières, vidéoprojecteurs ou écrans UHD.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Multimédia #}
            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.3s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-tv fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Multimédia</h3>
                        <p class=\"text-dark-gray\">
                            Location d'équipements multimédia, TV UHD, tablettes, ordinateurs, sur pied ou en fixation murale.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Contrôle d'accès #}
            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.4s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-qrcode fa-4x text-primary-blue\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Contrôle d'accès</h3>
                        <p class=\"text-dark-gray\">
                            Matériel pour l'enregistrement des visiteurs, contrôle d'accès avec stats en temps réel, application de scans pour vos exposants.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Régie technique #}
            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.5s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-cogs fa-4x text-accent-gold\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Régie technique</h3>
                        <p class=\"text-dark-gray\">
                            Supervision de votre montage, gestion des prestataires d'installation, coordination des équipes.
                        </p>
                    </div>
                </div>
            </div>

            {# Service: Location #}
            <div class=\"col-md-6 col-lg-4 scroll-reveal-card\" style=\"animation-delay: 0.6s;\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow\">
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-check fa-4x text-accent-orange\"></i>
                        </div>
                        <h3 class=\"h4 font-bold text-primary-blue mb-3\">Location de Matériel</h3>
                        <p class=\"text-dark-gray\">
                            Large catalogue de matériel disponible à la location, pour les professionnels ou les particuliers.
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
        <a href=\"{{ path('contact') }}\" class=\"btn btn-accent btn-lg\">
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

.d-flex.gap-3 > .btn {
    min-height: 48px;
}
</style>
{% endblock %}
", "home/index.html.twig", "/home/vagrant/public_html/irci/templates/home/index.html.twig");
    }
}
