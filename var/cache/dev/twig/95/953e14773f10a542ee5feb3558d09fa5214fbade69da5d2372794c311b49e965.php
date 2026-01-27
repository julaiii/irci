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
        // line 11
        yield "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\">

    ";
        // line 15
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    
    ";
        // line 18
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    ";
        // line 23
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/fontawesome/css/all.min.css"), "html", null, true);
        yield "\">

    ";
        // line 26
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 29
        yield "</head>
<body>
    ";
        // line 32
        yield "    <nav class=\"navbar navbar-expand-lg navbar-light sticky-top\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
                <i class=\"fas fa-microphone-alt me-2\"></i>IRCI
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 43
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "attributes", [], "any", false, false, false, 43), "get", ["_route"], "method", false, false, false, 43), "home"))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Prestations</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">À Propos</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-accent ms-3\" href=\"#\">Demander un devis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    ";
        // line 63
        yield "    <div class=\"toast-container position-fixed top-0 end-0 p-3\">
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 65
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 66
                yield "                ";
                $context["bg_class"] = "bg-primary";
                // line 67
                yield "                ";
                if ((0 === CoreExtension::compare($context["type"], "success"))) {
                    // line 68
                    yield "                    ";
                    $context["bg_class"] = "bg-success";
                    // line 69
                    yield "                ";
                }
                // line 70
                yield "                ";
                if (((0 === CoreExtension::compare($context["type"], "error")) || (0 === CoreExtension::compare($context["type"], "danger")))) {
                    // line 71
                    yield "                    ";
                    $context["bg_class"] = "bg-danger";
                    // line 72
                    yield "                ";
                }
                // line 73
                yield "                ";
                if ((0 === CoreExtension::compare($context["type"], "warning"))) {
                    // line 74
                    yield "                    ";
                    $context["bg_class"] = "bg-warning";
                    // line 75
                    yield "                ";
                }
                // line 76
                yield "                
                <div class=\"toast align-items-center text-white ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg_class"]) || array_key_exists("bg_class", $context) ? $context["bg_class"] : (function () { throw new RuntimeError('Variable "bg_class" does not exist.', 77, $this->source); })()), "html", null, true);
                yield " border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"d-flex\">
                        <div class=\"toast-body\">
                            ";
                // line 80
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
            // line 86
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "    </div>

    ";
        // line 90
        yield "    <div class=\"container-fluid px-0\">
        ";
        // line 91
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 92
        yield "    </div>

    ";
        // line 95
        yield "    <footer class=\"mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">
                        <i class=\"fas fa-microphone-alt me-2\"></i>IRCI
                    </h5>
                    <p class=\"text-light-gray\">
                        Prestataire événementiel professionnel spécialisé en son, lumière, enregistrement et multimédia.
                    </p>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">Liens rapides</h5>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
                        <li><a href=\"#\">Prestations</a></li>
                        <li><a href=\"#\">À Propos</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">Contact</h5>
                    <ul class=\"list-unstyled\">
                        <li><i class=\"fas fa-phone me-2\"></i>À définir</li>
                        <li><i class=\"fas fa-envelope me-2\"></i>contact@irci.fr</li>
                        <li><i class=\"fas fa-map-marker-alt me-2\"></i>France</li>
                    </ul>
                </div>
            </div>
            <hr class=\"my-4 bg-light opacity-25\">
            <div class=\"text-center\">
                <p class=\"mb-0\">&copy; ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " IRCI - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    ";
        // line 132
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>

    ";
        // line 136
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 139
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
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        yield "IRCI, prestataire événementiel professionnel : son, lumière, enregistrement, multimédia et location de matériel.";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 136
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
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
        return array (  361 => 137,  354 => 136,  341 => 91,  330 => 27,  323 => 26,  299 => 9,  292 => 8,  278 => 5,  268 => 139,  265 => 136,  260 => 132,  252 => 126,  232 => 109,  216 => 95,  212 => 92,  210 => 91,  207 => 90,  203 => 87,  197 => 86,  185 => 80,  179 => 77,  176 => 76,  173 => 75,  170 => 74,  167 => 73,  164 => 72,  161 => 71,  158 => 70,  155 => 69,  152 => 68,  149 => 67,  146 => 66,  141 => 65,  137 => 64,  134 => 63,  108 => 43,  96 => 34,  92 => 32,  88 => 29,  85 => 26,  79 => 23,  73 => 18,  69 => 15,  64 => 12,  61 => 11,  59 => 8,  53 => 5,  47 => 1,);
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
        <meta name=\"description\" content=\"{% block meta_description %}IRCI, prestataire événementiel professionnel : son, lumière, enregistrement, multimédia et location de matériel.{% endblock %}\">
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
            <a class=\"navbar-brand\" href=\"{{ path('home') }}\">
                <i class=\"fas fa-microphone-alt me-2\"></i>IRCI
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
                        <a class=\"nav-link\" href=\"#\">Prestations</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">À Propos</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-accent ms-3\" href=\"#\">Demander un devis</a>
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
                        <i class=\"fas fa-microphone-alt me-2\"></i>IRCI
                    </h5>
                    <p class=\"text-light-gray\">
                        Prestataire événementiel professionnel spécialisé en son, lumière, enregistrement et multimédia.
                    </p>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">Liens rapides</h5>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"{{ path('home') }}\">Accueil</a></li>
                        <li><a href=\"#\">Prestations</a></li>
                        <li><a href=\"#\">À Propos</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4 mb-4\">
                    <h5 class=\"mb-3\">Contact</h5>
                    <ul class=\"list-unstyled\">
                        <li><i class=\"fas fa-phone me-2\"></i>À définir</li>
                        <li><i class=\"fas fa-envelope me-2\"></i>contact@irci.fr</li>
                        <li><i class=\"fas fa-map-marker-alt me-2\"></i>France</li>
                    </ul>
                </div>
            </div>
            <hr class=\"my-4 bg-light opacity-25\">
            <div class=\"text-center\">
                <p class=\"mb-0\">&copy; {{ \"now\"|date(\"Y\") }} IRCI - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    {# jQuery & Bootstrap JS via CDN #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>

    {# Webpack Encore JS #}
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
</body>
</html>
", "base.html.twig", "/home/vagrant/public_html/irci/templates/base.html.twig");
    }
}
