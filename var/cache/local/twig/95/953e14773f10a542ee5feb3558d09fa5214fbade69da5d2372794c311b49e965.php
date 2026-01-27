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

/* base.html.twig */
class __TwigTemplate_1bb434520a3c154d277cdc834fcb0a7c769ad24b4605bd0a94c6c881283a1c22 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'meta_description' => [$this, 'block_meta_description'],
            'og_title' => [$this, 'block_og_title'],
            'og_description' => [$this, 'block_og_description'],
            'twitter_title' => [$this, 'block_twitter_title'],
            'twitter_description' => [$this, 'block_twitter_description'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 22
        yield "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\">

    ";
        // line 26
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    
    ";
        // line 29
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    ";
        // line 34
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/fontawesome/css/all.min.css"), "html", null, true);
        yield "\">

    ";
        // line 37
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 40
        yield "</head>
<body>
    ";
        // line 43
        yield "    <nav class=\"navbar navbar-expand-lg navbar-light sticky-top\">
        <div class=\"container\">
            <a class=\"navbar-brand d-flex align-items-center\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
                <img src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/irci.jpg"), "html", null, true);
        yield "\" 
                     alt=\"Logo IRCI\" 
                     height=\"40\" 
                     class=\"me-2\"
                     style=\"width: auto; object-fit: contain;\">
                <span class=\"logo-text fw-bold\">IRCI</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 59
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "attributes", [], "any", false, false, false, 59), "get", ["_route"], "method", false, false, false, 59), "home"))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 62
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62), "get", ["_route"], "method", false, false, false, 62), "prestations"))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestations");
        yield "\">Prestations</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 65
        if ((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65)) && is_string($__internal_compile_1 = "rental") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rental");
        yield "\">Location matériel</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 68
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68), "about"))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\">À Propos</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 71
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "attributes", [], "any", false, false, false, 71), "get", ["_route"], "method", false, false, false, 71), "gallery"))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        yield "\">Galerie</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 74
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "attributes", [], "any", false, false, false, 74), "get", ["_route"], "method", false, false, false, 74), "contact"))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-accent ms-3\" href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Demander un devis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    ";
        // line 85
        yield "    <div class=\"toast-container position-fixed top-0 end-0 p-3\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "flashes", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 87
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 88
                yield "                ";
                $context["bg_class"] = "bg-primary";
                // line 89
                yield "                ";
                if ((0 === CoreExtension::compare($context["type"], "success"))) {
                    // line 90
                    yield "                    ";
                    $context["bg_class"] = "bg-success";
                    // line 91
                    yield "                ";
                }
                // line 92
                yield "                ";
                if (((0 === CoreExtension::compare($context["type"], "error")) || (0 === CoreExtension::compare($context["type"], "danger")))) {
                    // line 93
                    yield "                    ";
                    $context["bg_class"] = "bg-danger";
                    // line 94
                    yield "                ";
                }
                // line 95
                yield "                ";
                if ((0 === CoreExtension::compare($context["type"], "warning"))) {
                    // line 96
                    yield "                    ";
                    $context["bg_class"] = "bg-warning";
                    // line 97
                    yield "                ";
                }
                // line 98
                yield "                
                <div class=\"toast align-items-center text-white ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg_class"]) || array_key_exists("bg_class", $context) ? $context["bg_class"] : (function () { throw new RuntimeError('Variable "bg_class" does not exist.', 99, $this->source); })()), "html", null, true);
                yield " border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"d-flex\">
                        <div class=\"toast-body\">
                            ";
                // line 102
                yield $context["message"];
                yield "
                        </div>
                        <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "    </div>

    ";
        // line 112
        yield "    <div class=\"container-fluid px-0\">
        ";
        // line 113
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 114
        yield "    </div>

    ";
        // line 117
        yield "    <footer class=\"mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">
                        <span class=\"irci-logo-footer\">
                            <span class=\"irci-i-top-footer\">I</span><span class=\"irci-letter\">RC</span><span class=\"irci-i-bottom-footer\">I</span>
                        </span>
                    </h5>
                    <p class=\"text-light-gray\">
                        Prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs.
                    </p>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">Liens rapides</h5>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
                        <li><a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestations");
        yield "\">Prestations</a></li>
                        <li><a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rental");
        yield "\">Location matériel</a></li>
                        <li><a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\">À Propos</a></li>
                        <li><a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        yield "\">Galerie</a></li>
                        <li><a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">Contact</h5>
                    <ul class=\"list-unstyled\">
                        <li><i class=\"fas fa-phone me-2\"></i>06 68 56 38 43</li>
                        <li><i class=\"fas fa-envelope me-2\"></i>contact@irci-salon.fr</li>
                        <li><i class=\"fas fa-map-marker-alt me-2\"></i>Marseille, France</li>
                        <li class=\"mt-2\">
                            <a href=\"https://fr.linkedin.com/company/irci-salon\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"text-light-gray\">
                                <i class=\"fab fa-linkedin me-2\"></i>LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class=\"my-4 bg-light opacity-25\">
            <div class=\"text-center\">
                <p class=\"mb-2\">&copy; ";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " IRCI - Tous droits réservés</p>
                <p class=\"mb-0\">
                    <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("legal");
        yield "\" class=\"text-light-gray small\">Mentions légales</a>
                </p>
            </div>
        </div>
    </footer>

    ";
        // line 166
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>

    ";
        // line 170
        yield "    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"LocalBusiness\",
        \"name\": \"IRCI\",
        \"description\": \"Prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs\",
        \"url\": \"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "request", [], "any", false, false, false, 176), "schemeAndHttpHost", [], "any", false, false, false, 176), "html", null, true);
        yield "\",
        \"logo\": \"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/irci.jpg")), "html", null, true);
        yield "\",
        \"image\": \"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/irci.jpg")), "html", null, true);
        yield "\",
        \"email\": \"contact@irci-salon.fr\",
        \"telephone\": \"06 68 56 38 43\",
        \"address\": {
            \"@type\": \"PostalAddress\",
            \"addressLocality\": \"Marseille\",
            \"addressCountry\": \"FR\",
            \"addressRegion\": \"France\"
        },
        \"priceRange\": \"€€\",
        \"openingHours\": \"Mo-Fr 09:00-18:00\",
        \"sameAs\": [
            \"https://fr.linkedin.com/company/irci-salon\"
        ],
        \"hasOfferCatalog\": {
            \"@type\": \"OfferCatalog\",
            \"name\": \"Prestations événementielles\",
            \"itemListElement\": [
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Sonorisation professionnelle\",
                        \"description\": \"Solutions audio complètes pour tous types d'événements\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Éclairage événementiel\",
                        \"description\": \"Lumière scénique, architecturale et d'ambiance\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Équipement audiovisuel\",
                        \"description\": \"Matériel de sonorisation professionnel, poursuites lumières, vidéoprojecteurs ou écrans UHD\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Multimédia\",
                        \"description\": \"Location d'équipements multimédia, TV UHD, tablettes, ordinateurs\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Contrôle d'accès\",
                        \"description\": \"Matériel pour l'enregistrement des visiteurs, contrôle d'accès avec stats en temps réel\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Régie technique\",
                        \"description\": \"Supervision de votre montage, gestion des prestataires d'installation, coordination des équipes\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Location de matériel audiovisuel\",
                        \"description\": \"Large catalogue de matériel professionnel\"
                    }
                }
            ]
        }
    }
    </script>

    ";
        // line 258
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 261
        yield "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "IRCI - Prestataire Événementiel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 8
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 9
        yield "        <meta name=\"description\" content=\"";
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        yield "\">
        <meta name=\"keywords\" content=\"prestataire évènementiel, sonorisation, éclairage, lumière, audiovisuel, multimédia, contrôle d'accès, régie technique, location matériel audiovisuel, événements professionnels, salons, congrès, Marseille\">
        <meta name=\"author\" content=\"IRCI\">
        <meta name=\"robots\" content=\"index, follow\">
        <meta property=\"og:title\" content=\"";
        // line 13
        yield from $this->unwrap()->yieldBlock('og_title', $context, $blocks);
        yield "\">
        <meta property=\"og:description\" content=\"";
        // line 14
        yield from $this->unwrap()->yieldBlock('og_description', $context, $blocks);
        yield "\">
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "uri", [], "any", false, false, false, 16), "html", null, true);
        yield "\">
        <meta property=\"og:image\" content=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/irci.jpg")), "html", null, true);
        yield "\">
        <meta name=\"twitter:card\" content=\"summary_large_image\">
        <meta name=\"twitter:title\" content=\"";
        // line 19
        yield from $this->unwrap()->yieldBlock('twitter_title', $context, $blocks);
        yield "\">
        <meta name=\"twitter:description\" content=\"";
        // line 20
        yield from $this->unwrap()->yieldBlock('twitter_description', $context, $blocks);
        yield "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 9
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        yield "IRCI, prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs.";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 13
    public function block_og_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "og_title"));

        yield "IRCI - Prestataire Événementiel Professionnel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 14
    public function block_og_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "og_description"));

        yield "Solutions techniques complètes pour vos événements : son, lumière, enregistrement, multimédia.";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 19
    public function block_twitter_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twitter_title"));

        yield "IRCI - Prestataire Événementiel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 20
    public function block_twitter_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twitter_description"));

        yield "Son • Lumière • Enregistrement • Multimédia";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 37
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 113
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 258
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 259
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  631 => 259,  624 => 258,  611 => 113,  600 => 38,  593 => 37,  579 => 20,  565 => 19,  551 => 14,  537 => 13,  523 => 9,  513 => 20,  509 => 19,  504 => 17,  500 => 16,  495 => 14,  491 => 13,  483 => 9,  476 => 8,  462 => 5,  452 => 261,  449 => 258,  367 => 178,  363 => 177,  359 => 176,  351 => 170,  346 => 166,  337 => 159,  332 => 157,  310 => 138,  306 => 137,  302 => 136,  298 => 135,  294 => 134,  290 => 133,  272 => 117,  268 => 114,  266 => 113,  263 => 112,  259 => 109,  253 => 108,  241 => 102,  235 => 99,  232 => 98,  229 => 97,  226 => 96,  223 => 95,  220 => 94,  217 => 93,  214 => 92,  211 => 91,  208 => 90,  205 => 89,  202 => 88,  197 => 87,  193 => 86,  190 => 85,  180 => 77,  170 => 74,  160 => 71,  150 => 68,  140 => 65,  130 => 62,  120 => 59,  104 => 46,  100 => 45,  96 => 43,  92 => 40,  89 => 37,  83 => 34,  77 => 29,  73 => 26,  68 => 23,  65 => 22,  63 => 8,  57 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}IRCI - Prestataire Événementiel{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    
    {% block meta %}
        <meta name=\"description\" content=\"{% block meta_description %}IRCI, prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs.{% endblock %}\">
        <meta name=\"keywords\" content=\"prestataire évènementiel, sonorisation, éclairage, lumière, audiovisuel, multimédia, contrôle d'accès, régie technique, location matériel audiovisuel, événements professionnels, salons, congrès, Marseille\">
        <meta name=\"author\" content=\"IRCI\">
        <meta name=\"robots\" content=\"index, follow\">
        <meta property=\"og:title\" content=\"{% block og_title %}IRCI - Prestataire Événementiel Professionnel{% endblock %}\">
        <meta property=\"og:description\" content=\"{% block og_description %}Solutions techniques complètes pour vos événements : son, lumière, enregistrement, multimédia.{% endblock %}\">
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"{{ app.request.uri }}\">
        <meta property=\"og:image\" content=\"{{ absolute_url(asset('images/irci.jpg')) }}\">
        <meta name=\"twitter:card\" content=\"summary_large_image\">
        <meta name=\"twitter:title\" content=\"{% block twitter_title %}IRCI - Prestataire Événementiel{% endblock %}\">
        <meta name=\"twitter:description\" content=\"{% block twitter_description %}Son • Lumière • Enregistrement • Multimédia{% endblock %}\">
    {% endblock %}

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">

    {# Bootstrap 5.3.3 CDN #}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    
    {# Google Fonts #}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    {# FontAwesome local #}
    <link rel=\"stylesheet\" href=\"{{ asset('build/assets/fontawesome/css/all.min.css') }}\">

    {# Webpack Encore CSS #}
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>
<body>
    {# Navigation #}
    <nav class=\"navbar navbar-expand-lg navbar-light sticky-top\">
        <div class=\"container\">
            <a class=\"navbar-brand d-flex align-items-center\" href=\"{{ path('home') }}\">
                <img src=\"{{ asset('images/irci.jpg') }}\" 
                     alt=\"Logo IRCI\" 
                     height=\"40\" 
                     class=\"me-2\"
                     style=\"width: auto; object-fit: contain;\">
                <span class=\"logo-text fw-bold\">IRCI</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'home' %}active{% endif %}\" href=\"{{ path('home') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'prestations' %}active{% endif %}\" href=\"{{ path('prestations') }}\">Prestations</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') starts with 'rental' %}active{% endif %}\" href=\"{{ path('rental') }}\">Location matériel</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'about' %}active{% endif %}\" href=\"{{ path('about') }}\">À Propos</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'gallery' %}active{% endif %}\" href=\"{{ path('gallery') }}\">Galerie</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.attributes.get('_route') == 'contact' %}active{% endif %}\" href=\"{{ path('contact') }}\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-accent ms-3\" href=\"{{ path('contact') }}\">Demander un devis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {# Toast notifications #}
    <div class=\"toast-container position-fixed top-0 end-0 p-3\">
        {% for type, messages in app.flashes %}
            {% for message in messages %}
                {% set bg_class = 'bg-primary' %}
                {% if type == 'success' %}
                    {% set bg_class = 'bg-success' %}
                {% endif %}
                {% if type == 'error' or type == 'danger' %}
                    {% set bg_class = 'bg-danger' %}
                {% endif %}
                {% if type == 'warning' %}
                    {% set bg_class = 'bg-warning' %}
                {% endif %}
                
                <div class=\"toast align-items-center text-white {{ bg_class }} border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"d-flex\">
                        <div class=\"toast-body\">
                            {{ message|raw }}
                        </div>
                        <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    {# Main content #}
    <div class=\"container-fluid px-0\">
        {% block body %}{% endblock %}
    </div>

    {# Footer #}
    <footer class=\"mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">
                        <span class=\"irci-logo-footer\">
                            <span class=\"irci-i-top-footer\">I</span><span class=\"irci-letter\">RC</span><span class=\"irci-i-bottom-footer\">I</span>
                        </span>
                    </h5>
                    <p class=\"text-light-gray\">
                        Prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs.
                    </p>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">Liens rapides</h5>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"{{ path('home') }}\">Accueil</a></li>
                        <li><a href=\"{{ path('prestations') }}\">Prestations</a></li>
                        <li><a href=\"{{ path('rental') }}\">Location matériel</a></li>
                        <li><a href=\"{{ path('about') }}\">À Propos</a></li>
                        <li><a href=\"{{ path('gallery') }}\">Galerie</a></li>
                        <li><a href=\"{{ path('contact') }}\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">Contact</h5>
                    <ul class=\"list-unstyled\">
                        <li><i class=\"fas fa-phone me-2\"></i>06 68 56 38 43</li>
                        <li><i class=\"fas fa-envelope me-2\"></i>contact@irci-salon.fr</li>
                        <li><i class=\"fas fa-map-marker-alt me-2\"></i>Marseille, France</li>
                        <li class=\"mt-2\">
                            <a href=\"https://fr.linkedin.com/company/irci-salon\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"text-light-gray\">
                                <i class=\"fab fa-linkedin me-2\"></i>LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class=\"my-4 bg-light opacity-25\">
            <div class=\"text-center\">
                <p class=\"mb-2\">&copy; {{ \"now\"|date(\"Y\") }} IRCI - Tous droits réservés</p>
                <p class=\"mb-0\">
                    <a href=\"{{ path('legal') }}\" class=\"text-light-gray small\">Mentions légales</a>
                </p>
            </div>
        </div>
    </footer>

    {# jQuery & Bootstrap JS via CDN #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>

    {# Schema.org Structured Data #}
    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"LocalBusiness\",
        \"name\": \"IRCI\",
        \"description\": \"Prestataire évènementiel spécialisé en audiovisuel, multimédia et gestion des flux visiteurs\",
        \"url\": \"{{ app.request.schemeAndHttpHost }}\",
        \"logo\": \"{{ absolute_url(asset('images/irci.jpg')) }}\",
        \"image\": \"{{ absolute_url(asset('images/irci.jpg')) }}\",
        \"email\": \"contact@irci-salon.fr\",
        \"telephone\": \"06 68 56 38 43\",
        \"address\": {
            \"@type\": \"PostalAddress\",
            \"addressLocality\": \"Marseille\",
            \"addressCountry\": \"FR\",
            \"addressRegion\": \"France\"
        },
        \"priceRange\": \"€€\",
        \"openingHours\": \"Mo-Fr 09:00-18:00\",
        \"sameAs\": [
            \"https://fr.linkedin.com/company/irci-salon\"
        ],
        \"hasOfferCatalog\": {
            \"@type\": \"OfferCatalog\",
            \"name\": \"Prestations événementielles\",
            \"itemListElement\": [
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Sonorisation professionnelle\",
                        \"description\": \"Solutions audio complètes pour tous types d'événements\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Éclairage événementiel\",
                        \"description\": \"Lumière scénique, architecturale et d'ambiance\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Équipement audiovisuel\",
                        \"description\": \"Matériel de sonorisation professionnel, poursuites lumières, vidéoprojecteurs ou écrans UHD\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Multimédia\",
                        \"description\": \"Location d'équipements multimédia, TV UHD, tablettes, ordinateurs\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Contrôle d'accès\",
                        \"description\": \"Matériel pour l'enregistrement des visiteurs, contrôle d'accès avec stats en temps réel\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Régie technique\",
                        \"description\": \"Supervision de votre montage, gestion des prestataires d'installation, coordination des équipes\"
                    }
                },
                {
                    \"@type\": \"Offer\",
                    \"itemOffered\": {
                        \"@type\": \"Service\",
                        \"name\": \"Location de matériel audiovisuel\",
                        \"description\": \"Large catalogue de matériel professionnel\"
                    }
                }
            ]
        }
    }
    </script>

    {# Webpack Encore JS #}
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
</body>
</html>
", "base.html.twig", "/home/vagrant/public_html/irci/templates/base.html.twig");
    }
}
