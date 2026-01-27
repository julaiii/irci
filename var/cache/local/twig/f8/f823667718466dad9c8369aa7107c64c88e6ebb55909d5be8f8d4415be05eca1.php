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

/* rental/index.html.twig */
class __TwigTemplate_ac78e47538762900e9da6e8f31d53bd801cd7457499880f402a90f74ca666c0d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rental/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rental/index.html.twig", 1);
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

        yield "Location de matériel audiovisuel professionnel : son, lumière, vidéo, effets. Catalogue complet pour vos événements.";
        
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
                    <i class=\"fas fa-shopping-cart text-primary-red me-3\"></i>
                    Location de Matériel
                </h1>
                <p class=\"lead mb-3\">Louez du matériel audiovisuel professionnel pour vos événements</p>
                <div class=\"d-inline-block bg-primary-red text-white px-4 py-2 rounded-pill\">
                    <i class=\"fas fa-star me-2\"></i>
                    <strong>Matériel haut de gamme testé et préparé</strong>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 27
        yield "    <div class=\"scroll-indicator\">
        <a href=\"#intro\" class=\"scroll-arrow\">
            <i class=\"fas fa-chevron-down\"></i>
        </a>
    </div>
</section>

";
        // line 35
        yield "<section id=\"intro\" class=\"pt-5 pb-3 bg-white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto text-center scroll-reveal\">
                <h2 class=\"h3 font-bold text-primary-dark mb-4\">
                    <i class=\"fas fa-box-open text-primary-red me-2\"></i>
                    Un parc matériel complet et régulièrement renouvelé
                </h2>
                <p class=\"lead text-dark-gray mb-3\">
                    IRCI met à votre disposition un catalogue de matériel audiovisuel professionnel de marques reconnues. 
                    Sonorisation, éclairage, vidéo, informatique : tout ce dont vous avez besoin pour réussir votre évènement.
                </p>
                <p class=\"text-dark-gray\">
                    <strong class=\"text-primary-red\">Livraison, installation et reprise incluses.</strong> 
                    Support technique disponible pour vous accompagner dans votre projet.
                </p>
            </div>
        </div>
    </div>
</section>

";
        // line 57
        yield "<section class=\"py-4 bg-light-bg sticky-top border-bottom\" style=\"top: 76px; z-index: 999;\">
    <div class=\"container\">
        <div class=\"nav nav-pills justify-content-center flex-wrap\">
            <a class=\"nav-link active\" href=\"#all\" data-filter=\"all\" style=\"color: white; background-color: var(--primary-red);\">Tout</a>
            <a class=\"nav-link\" href=\"#sonorisation\" data-filter=\"sonorisation\" style=\"color: white; background-color: var(--primary-red);\">Sonorisation</a>
            <a class=\"nav-link\" href=\"#lumiere\" data-filter=\"lumiere\" style=\"color: white; background-color: var(--primary-red);\">Lumière</a>
            <a class=\"nav-link\" href=\"#multimedia\" data-filter=\"multimedia\" style=\"color: white; background-color: var(--primary-red);\">Multimédia</a>
            <a class=\"nav-link\" href=\"#controle-acces\" data-filter=\"controle-acces\" style=\"color: white; background-color: var(--primary-red);\">Contrôle d'accès</a>
        </div>
    </div>
</section>

";
        // line 70
        yield "<section class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row g-4\" id=\"products-grid\">
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 73, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            yield "                ";
            $context["categorySlug"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 74)), [" " => "-", "é" => "e", "è" => "e", "ê" => "e", "à" => "a", "ô" => "o", "ç" => "c", "'" => ""]);
            // line 75
            yield "                <div class=\"col-md-6 col-lg-4 product-item scroll-reveal-card\" data-category=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categorySlug"]) || array_key_exists("categorySlug", $context) ? $context["categorySlug"] : (function () { throw new RuntimeError('Variable "categorySlug" does not exist.', 75, $this->source); })()), "html", null, true);
            yield "\" style=\"animation-delay: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 75) * 0.1), "html", null, true);
            yield "s;\">
                    <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rental_product", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                        <div class=\"product-card h-100\">
                            <div class=\"product-image\">
                                <img src=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 79)), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80), "html", null, true);
            yield "\" 
                                     class=\"img-fluid\"
                                     onerror=\"this.src='";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder.jpg"), "html", null, true);
            yield "'\">
                                <span class=\"product-badge ";
            // line 83
            if ((0 === CoreExtension::compare((isset($context["categorySlug"]) || array_key_exists("categorySlug", $context) ? $context["categorySlug"] : (function () { throw new RuntimeError('Variable "categorySlug" does not exist.', 83, $this->source); })()), "lumiere"))) {
                yield "badge-light";
            } elseif ((0 === CoreExtension::compare((isset($context["categorySlug"]) || array_key_exists("categorySlug", $context) ? $context["categorySlug"] : (function () { throw new RuntimeError('Variable "categorySlug" does not exist.', 83, $this->source); })()), "multimedia"))) {
                yield "badge-video";
            } elseif ((0 === CoreExtension::compare((isset($context["categorySlug"]) || array_key_exists("categorySlug", $context) ? $context["categorySlug"] : (function () { throw new RuntimeError('Variable "categorySlug" does not exist.', 83, $this->source); })()), "controle-acces"))) {
                yield "badge-effects";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 83), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"product-body\">
                                <h3 class=\"product-title\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86), "html", null, true);
            yield "</h3>
                                <p class=\"product-description\">
                                    ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "short_description", [], "any", false, false, false, 88), "html", null, true);
            yield "
                                </p>
                                <div class=\"product-footer\">
                                    <span class=\"product-link\">Voir détails <i class=\"fas fa-arrow-right ms-2\"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "        </div>
    </div>
</section>

";
        // line 103
        yield "<section class=\"py-5 bg-primary-red text-white\">
    <div class=\"container py-4 text-center scroll-reveal\">
        <h2 class=\"h3 font-bold mb-3\">Besoin d'un devis personnalisé ?</h2>
        <p class=\"lead mb-4\">Contactez-nous pour discuter de vos besoins en location de matériel</p>
        <div class=\"d-flex gap-3 justify-content-center flex-wrap\">
            <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn btn-light btn-lg\">
                <i class=\"fas fa-envelope me-2\"></i>Demander un devis
            </a>
            <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestations");
        yield "\" class=\"btn btn-outline-light btn-lg\">
                <i class=\"fas fa-tools me-2\"></i>Nos prestations complètes
            </a>
        </div>
    </div>
</section>

<style>
/* Product Card Styles */
.product-card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(220, 20, 60, 0.15);
}

.product-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.1);
}

.product-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--primary-red);
    color: white;
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    z-index: 2;
}

.product-badge.badge-light {
    background: #FFA500;
}

.product-badge.badge-video {
    background: #9B59B6;
}

.product-badge.badge-effects {
    background: #16A085;
}

.product-badge {
    color: white;
    font-weight: 600;
}

.product-body {
    padding: 25px;
}

.product-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 12px;
    min-height: 50px;
}

.product-description {
    font-size: 14px;
    color: var(--dark-gray);
    margin-bottom: 20px;
    line-height: 1.6;
    min-height: 65px;
}

.product-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 15px;
    border-top: 2px solid rgba(220, 20, 60, 0.1);
}


.product-link {
    color: var(--primary-red);
    font-weight: 600;
    font-size: 14px;
}

.product-card:hover .product-link {
    text-decoration: underline;
}

/* Navigation pills personnalisée */
.nav-pills .nav-link {
    color: white;
    background-color: var(--primary-red);
    font-weight: 500;
    padding: 10px 20px;
    border-radius: 25px;
    transition: all 0.3s ease;
    margin: 0 5px;
    opacity: 0.8;
}

.nav-pills .nav-link:hover,
.nav-pills .nav-link.active {
    background: var(--primary-red);
    color: white;
    opacity: 1;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(220, 20, 60, 0.3);
}
</style>

<script>
// Filtrage des produits par catégorie
document.addEventListener('DOMContentLoaded', function() {
    const filterLinks = document.querySelectorAll('[data-filter]');
    const productItems = document.querySelectorAll('.product-item');
    
    filterLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Update active link
            filterLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            
            productItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                    setTimeout(() => item.classList.add('scroll-reveal-card', 'revealed'), 10);
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "rental/index.html.twig";
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
        return array (  269 => 111,  263 => 108,  256 => 103,  250 => 98,  226 => 88,  221 => 86,  207 => 83,  203 => 82,  198 => 80,  194 => 79,  188 => 76,  181 => 75,  178 => 74,  161 => 73,  156 => 70,  142 => 57,  119 => 35,  110 => 27,  91 => 9,  84 => 7,  70 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }} - IRCI{% endblock %}

{% block meta_description %}Location de matériel audiovisuel professionnel : son, lumière, vidéo, effets. Catalogue complet pour vos événements.{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"bg-primary-dark text-white py-5 position-relative\">
    <div class=\"container py-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-8 mx-auto text-center fade-in-up\">
                <h1 class=\"display-4 font-bold mb-3\">
                    <i class=\"fas fa-shopping-cart text-primary-red me-3\"></i>
                    Location de Matériel
                </h1>
                <p class=\"lead mb-3\">Louez du matériel audiovisuel professionnel pour vos événements</p>
                <div class=\"d-inline-block bg-primary-red text-white px-4 py-2 rounded-pill\">
                    <i class=\"fas fa-star me-2\"></i>
                    <strong>Matériel haut de gamme testé et préparé</strong>
                </div>
            </div>
        </div>
    </div>
    
    {# Flèche animée #}
    <div class=\"scroll-indicator\">
        <a href=\"#intro\" class=\"scroll-arrow\">
            <i class=\"fas fa-chevron-down\"></i>
        </a>
    </div>
</section>

{# Introduction #}
<section id=\"intro\" class=\"pt-5 pb-3 bg-white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto text-center scroll-reveal\">
                <h2 class=\"h3 font-bold text-primary-dark mb-4\">
                    <i class=\"fas fa-box-open text-primary-red me-2\"></i>
                    Un parc matériel complet et régulièrement renouvelé
                </h2>
                <p class=\"lead text-dark-gray mb-3\">
                    IRCI met à votre disposition un catalogue de matériel audiovisuel professionnel de marques reconnues. 
                    Sonorisation, éclairage, vidéo, informatique : tout ce dont vous avez besoin pour réussir votre évènement.
                </p>
                <p class=\"text-dark-gray\">
                    <strong class=\"text-primary-red\">Livraison, installation et reprise incluses.</strong> 
                    Support technique disponible pour vous accompagner dans votre projet.
                </p>
            </div>
        </div>
    </div>
</section>

{# Filtres par catégorie #}
<section class=\"py-4 bg-light-bg sticky-top border-bottom\" style=\"top: 76px; z-index: 999;\">
    <div class=\"container\">
        <div class=\"nav nav-pills justify-content-center flex-wrap\">
            <a class=\"nav-link active\" href=\"#all\" data-filter=\"all\" style=\"color: white; background-color: var(--primary-red);\">Tout</a>
            <a class=\"nav-link\" href=\"#sonorisation\" data-filter=\"sonorisation\" style=\"color: white; background-color: var(--primary-red);\">Sonorisation</a>
            <a class=\"nav-link\" href=\"#lumiere\" data-filter=\"lumiere\" style=\"color: white; background-color: var(--primary-red);\">Lumière</a>
            <a class=\"nav-link\" href=\"#multimedia\" data-filter=\"multimedia\" style=\"color: white; background-color: var(--primary-red);\">Multimédia</a>
            <a class=\"nav-link\" href=\"#controle-acces\" data-filter=\"controle-acces\" style=\"color: white; background-color: var(--primary-red);\">Contrôle d'accès</a>
        </div>
    </div>
</section>

{# Catalogue Produits #}
<section class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row g-4\" id=\"products-grid\">
            {% for product in products %}
                {% set categorySlug = product.category|lower|replace({' ': '-', 'é': 'e', 'è': 'e', 'ê': 'e', 'à': 'a', 'ô': 'o', 'ç': 'c', '\\'': ''}) %}
                <div class=\"col-md-6 col-lg-4 product-item scroll-reveal-card\" data-category=\"{{ categorySlug }}\" style=\"animation-delay: {{ loop.index0 * 0.1 }}s;\">
                    <a href=\"{{ path('rental_product', {'slug': product.slug}) }}\" class=\"text-decoration-none\">
                        <div class=\"product-card h-100\">
                            <div class=\"product-image\">
                                <img src=\"{{ asset(product.image) }}\" 
                                     alt=\"{{ product.name }}\" 
                                     class=\"img-fluid\"
                                     onerror=\"this.src='{{ asset('images/placeholder.jpg') }}'\">
                                <span class=\"product-badge {% if categorySlug == 'lumiere' %}badge-light{% elseif categorySlug == 'multimedia' %}badge-video{% elseif categorySlug == 'controle-acces' %}badge-effects{% endif %}\">{{ product.category }}</span>
                            </div>
                            <div class=\"product-body\">
                                <h3 class=\"product-title\">{{ product.name }}</h3>
                                <p class=\"product-description\">
                                    {{ product.short_description }}
                                </p>
                                <div class=\"product-footer\">
                                    <span class=\"product-link\">Voir détails <i class=\"fas fa-arrow-right ms-2\"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>
</section>

{# CTA Section #}
<section class=\"py-5 bg-primary-red text-white\">
    <div class=\"container py-4 text-center scroll-reveal\">
        <h2 class=\"h3 font-bold mb-3\">Besoin d'un devis personnalisé ?</h2>
        <p class=\"lead mb-4\">Contactez-nous pour discuter de vos besoins en location de matériel</p>
        <div class=\"d-flex gap-3 justify-content-center flex-wrap\">
            <a href=\"{{ path('contact') }}\" class=\"btn btn-light btn-lg\">
                <i class=\"fas fa-envelope me-2\"></i>Demander un devis
            </a>
            <a href=\"{{ path('prestations') }}\" class=\"btn btn-outline-light btn-lg\">
                <i class=\"fas fa-tools me-2\"></i>Nos prestations complètes
            </a>
        </div>
    </div>
</section>

<style>
/* Product Card Styles */
.product-card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(220, 20, 60, 0.15);
}

.product-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.1);
}

.product-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--primary-red);
    color: white;
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    z-index: 2;
}

.product-badge.badge-light {
    background: #FFA500;
}

.product-badge.badge-video {
    background: #9B59B6;
}

.product-badge.badge-effects {
    background: #16A085;
}

.product-badge {
    color: white;
    font-weight: 600;
}

.product-body {
    padding: 25px;
}

.product-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 12px;
    min-height: 50px;
}

.product-description {
    font-size: 14px;
    color: var(--dark-gray);
    margin-bottom: 20px;
    line-height: 1.6;
    min-height: 65px;
}

.product-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 15px;
    border-top: 2px solid rgba(220, 20, 60, 0.1);
}


.product-link {
    color: var(--primary-red);
    font-weight: 600;
    font-size: 14px;
}

.product-card:hover .product-link {
    text-decoration: underline;
}

/* Navigation pills personnalisée */
.nav-pills .nav-link {
    color: white;
    background-color: var(--primary-red);
    font-weight: 500;
    padding: 10px 20px;
    border-radius: 25px;
    transition: all 0.3s ease;
    margin: 0 5px;
    opacity: 0.8;
}

.nav-pills .nav-link:hover,
.nav-pills .nav-link.active {
    background: var(--primary-red);
    color: white;
    opacity: 1;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(220, 20, 60, 0.3);
}
</style>

<script>
// Filtrage des produits par catégorie
document.addEventListener('DOMContentLoaded', function() {
    const filterLinks = document.querySelectorAll('[data-filter]');
    const productItems = document.querySelectorAll('.product-item');
    
    filterLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Update active link
            filterLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            
            productItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                    setTimeout(() => item.classList.add('scroll-reveal-card', 'revealed'), 10);
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
{% endblock %}
", "rental/index.html.twig", "/home/vagrant/public_html/irci/templates/rental/index.html.twig");
    }
}
