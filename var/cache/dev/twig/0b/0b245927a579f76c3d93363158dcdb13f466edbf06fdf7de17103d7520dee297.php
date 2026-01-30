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

/* rental/product.html.twig */
class __TwigTemplate_4b873b2d4de4469952cff76e9756d691bba271099bab9c7931a916d90bab45bf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rental/product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rental/product.html.twig", 1);
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
        yield " - Location - IRCI";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 5
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "short_description", [], "any", false, false, false, 5), "html", null, true);
        
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
        yield "<section class=\"bg-light-bg py-3\">
    <div class=\"container\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rental");
        yield "\">Location de matériel</a></li>
                <li class=\"breadcrumb-item\"><span class=\"text-primary-red\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "category", [], "any", false, false, false, 15), "html", null, true);
        yield "</span></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</li>
            </ol>
        </nav>
    </div>
</section>

";
        // line 23
        yield "<section class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row g-5\">
            ";
        // line 27
        yield "            <div class=\"col-lg-6 scroll-reveal-left\">
                <div class=\"product-detail-image\">
                    <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29)), "html", null, true);
        yield "\" 
                         alt=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
        yield "\" 
                         class=\"img-fluid rounded shadow-lg product-img\"
                         onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                    <div class=\"product-image-placeholder rounded shadow-lg\" style=\"display: none;\">
                        <i class=\"fas fa-image fa-5x text-muted\"></i>
                    </div>
                    <span class=\"product-detail-badge\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "category", [], "any", false, false, false, 36), "html", null, true);
        yield "</span>
                </div>
            </div>

            ";
        // line 41
        yield "            <div class=\"col-lg-6 scroll-reveal-right\">
                <div class=\"product-detail-info\">
                    <h1 class=\"display-5 font-bold text-primary-dark mb-3\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        yield "</h1>
                    
                    <div class=\"product-meta mb-4\">
                        <span class=\"meta-item\">
                            <i class=\"fas fa-tag text-primary-red me-2\"></i>
                            <strong>Catégorie :</strong> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 48, $this->source); })()), "category", [], "any", false, false, false, 48), "html", null, true);
        yield "
                        </span>
                    </div>

                    <div class=\"product-short-desc mb-4\">
                        <h2 class=\"h5 font-bold text-primary-dark mb-3\">
                            <i class=\"fas fa-star text-primary-red me-2\"></i>
                            Description
                        </h2>
                        <p class=\"lead text-dark-gray\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "short_description", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
                    </div>

                    <div class=\"product-description mb-4\">
                        <p class=\"text-dark-gray\">";
        // line 61
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61);
        yield "</p>
                    </div>

                    <div class=\"product-cta\">
                        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn btn-primary-custom btn-lg me-3\">
                            <i class=\"fas fa-envelope me-2\"></i>Demander un devis
                        </a>
                        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rental");
        yield "\" class=\"btn btn-outline-primary-custom btn-lg\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour au catalogue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 79
        yield "<section class=\"py-5 bg-light-bg\">
    <div class=\"container py-4\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto scroll-reveal\">
                <div class=\"features-card\">
                    <div class=\"features-header\">
                        <i class=\"fas fa-cogs fa-3x text-primary-red mb-3\"></i>
                        <h2 class=\"h3 font-bold text-primary-dark mb-4\">Caractéristiques Techniques</h2>
                    </div>
                    <div class=\"row g-3\">
                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 89, $this->source); })()), "features", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 90
            yield "                            <div class=\"col-md-6\">
                                <div class=\"feature-item\">
                                    <i class=\"fas fa-check-circle text-primary-red me-2\"></i>
                                    <span>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["feature"], "html", null, true);
            yield "</span>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 105
        yield "<section class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <div class=\"text-center mb-5 scroll-reveal\">
                    <h2 class=\"h3 font-bold text-primary-dark mb-3\">
                        <i class=\"fas fa-shield-alt text-primary-red me-2\"></i>
                        Pourquoi louer chez <span class=\"irci-logo-title irci-logo-title-small\"><span class=\"irci-i-top-title\">I</span><span class=\"irci-letter\">RC</span><span class=\"irci-i-bottom-title\">I</span></span> ?
                    </h2>
                    <p class=\"lead text-dark-gray\">Les avantages de notre service de location</p>
                </div>

                <div class=\"row g-4 justify-content-center\">
                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-tools fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Matériel testé</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                Chaque équipement est vérifié et préparé avant livraison
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\" style=\"animation-delay: 0.1s;\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-check fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Livraison possible</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                (transport, installation et reprise du matériel)
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\" style=\"animation-delay: 0.2s;\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-headset fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Support technique</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                Assistance disponible pendant toute la durée de location
                            </p>
                        </div>
                    </div>
                </div>

                <div class=\"row g-4 justify-content-center mt-1\">
                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\" style=\"animation-delay: 0.3s;\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-medal fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Qualité pro</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                Marques reconnues et matériel haut de gamme
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\" style=\"animation-delay: 0.4s;\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-file-alt fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Fiche technique</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                Informations pratiques et conseils d'utilisation pour chaque matériel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 176
        yield "<section class=\"py-5 bg-primary-red text-white\">
    <div class=\"container py-4 text-center scroll-reveal\">
        <h2 class=\"h3 font-bold mb-3\">Intéressé par ce produit ?</h2>
        <p class=\"lead mb-4\">Contactez-nous pour obtenir un devis personnalisé pour ";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 179, $this->source); })()), "name", [], "any", false, false, false, 179), "html", null, true);
        yield "</p>
        <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn btn-light btn-lg\">
            <i class=\"fas fa-envelope me-2\"></i>Demander un devis gratuit
        </a>
    </div>
</section>

<style>
/* Product Detail Styles */
.product-detail-image {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    background-color: #f8f9fa;
    min-height: 400px;
}

.product-detail-image img {
    border-radius: 12px;
}

.product-image-placeholder {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f8f9fa;
    border-radius: 12px;
}

.product-detail-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: var(--primary-red);
    color: white;
    padding: 10px 25px;
    border-radius: 30px;
    font-weight: 700;
    font-size: 16px;
    box-shadow: 0 4px 12px rgba(220, 20, 60, 0.4);
}

.product-meta {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    padding: 20px;
    background: var(--light-bg);
    border-radius: 8px;
}

.meta-item {
    font-size: 15px;
    color: var(--dark-gray);
}

.product-short-desc {
    padding: 25px;
    background: var(--light-bg);
    border-left: 4px solid var(--primary-red);
    border-radius: 8px;
}

/* Features Card */
.features-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.features-header {
    text-align: center;
    margin-bottom: 30px;
}

.feature-item {
    display: flex;
    align-items: center;
    padding: 12px;
    background: var(--light-bg);
    border-radius: 6px;
    font-size: 15px;
    color: var(--dark-gray);
}

.feature-item i {
    flex-shrink: 0;
}

/* Advantage Cards */
.advantage-card {
    background: white;
    padding: 30px 20px;
    border-radius: 12px;
    border: 2px solid rgba(220, 20, 60, 0.1);
    transition: all 0.3s ease;
    height: 100%;
}

.advantage-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(220, 20, 60, 0.15);
    border-color: var(--primary-red);
}

/* Breadcrumb custom */
.breadcrumb {
    background: transparent;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: \"›\";
    color: var(--dark-gray);
}

.breadcrumb-item a {
    color: var(--dark-gray);
    text-decoration: none;
}

.breadcrumb-item a:hover {
    color: var(--primary-red);
}

/* Responsive */
@media (max-width: 768px) {
    .product-meta {
        flex-direction: column;
        gap: 15px;
    }
    
    .product-cta {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .product-cta .btn {
        width: 100%;
        margin: 0 !important;
    }
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
        return "rental/product.html.twig";
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
        return array (  325 => 180,  321 => 179,  316 => 176,  244 => 105,  235 => 97,  225 => 93,  220 => 90,  216 => 89,  204 => 79,  191 => 68,  185 => 65,  178 => 61,  171 => 57,  159 => 48,  151 => 43,  147 => 41,  140 => 36,  131 => 30,  127 => 29,  123 => 27,  118 => 23,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  91 => 9,  84 => 7,  70 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }} - Location - IRCI{% endblock %}

{% block meta_description %}{{ product.short_description }}{% endblock %}

{% block body %}
{# Breadcrumb #}
<section class=\"bg-light-bg py-3\">
    <div class=\"container\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home') }}\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('rental') }}\">Location de matériel</a></li>
                <li class=\"breadcrumb-item\"><span class=\"text-primary-red\">{{ product.category }}</span></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ product.name }}</li>
            </ol>
        </nav>
    </div>
</section>

{# Product Header #}
<section class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row g-5\">
            {# Image produit #}
            <div class=\"col-lg-6 scroll-reveal-left\">
                <div class=\"product-detail-image\">
                    <img src=\"{{ asset(product.image) }}\" 
                         alt=\"{{ product.name }}\" 
                         class=\"img-fluid rounded shadow-lg product-img\"
                         onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                    <div class=\"product-image-placeholder rounded shadow-lg\" style=\"display: none;\">
                        <i class=\"fas fa-image fa-5x text-muted\"></i>
                    </div>
                    <span class=\"product-detail-badge\">{{ product.category }}</span>
                </div>
            </div>

            {# Informations produit #}
            <div class=\"col-lg-6 scroll-reveal-right\">
                <div class=\"product-detail-info\">
                    <h1 class=\"display-5 font-bold text-primary-dark mb-3\">{{ product.name }}</h1>
                    
                    <div class=\"product-meta mb-4\">
                        <span class=\"meta-item\">
                            <i class=\"fas fa-tag text-primary-red me-2\"></i>
                            <strong>Catégorie :</strong> {{ product.category }}
                        </span>
                    </div>

                    <div class=\"product-short-desc mb-4\">
                        <h2 class=\"h5 font-bold text-primary-dark mb-3\">
                            <i class=\"fas fa-star text-primary-red me-2\"></i>
                            Description
                        </h2>
                        <p class=\"lead text-dark-gray\">{{ product.short_description }}</p>
                    </div>

                    <div class=\"product-description mb-4\">
                        <p class=\"text-dark-gray\">{{ product.description|raw }}</p>
                    </div>

                    <div class=\"product-cta\">
                        <a href=\"{{ path('contact') }}\" class=\"btn btn-primary-custom btn-lg me-3\">
                            <i class=\"fas fa-envelope me-2\"></i>Demander un devis
                        </a>
                        <a href=\"{{ path('rental') }}\" class=\"btn btn-outline-primary-custom btn-lg\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour au catalogue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{# Caractéristiques techniques #}
<section class=\"py-5 bg-light-bg\">
    <div class=\"container py-4\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto scroll-reveal\">
                <div class=\"features-card\">
                    <div class=\"features-header\">
                        <i class=\"fas fa-cogs fa-3x text-primary-red mb-3\"></i>
                        <h2 class=\"h3 font-bold text-primary-dark mb-4\">Caractéristiques Techniques</h2>
                    </div>
                    <div class=\"row g-3\">
                        {% for feature in product.features %}
                            <div class=\"col-md-6\">
                                <div class=\"feature-item\">
                                    <i class=\"fas fa-check-circle text-primary-red me-2\"></i>
                                    <span>{{ feature }}</span>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{# Pourquoi louer chez IRCI #}
<section class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <div class=\"text-center mb-5 scroll-reveal\">
                    <h2 class=\"h3 font-bold text-primary-dark mb-3\">
                        <i class=\"fas fa-shield-alt text-primary-red me-2\"></i>
                        Pourquoi louer chez <span class=\"irci-logo-title irci-logo-title-small\"><span class=\"irci-i-top-title\">I</span><span class=\"irci-letter\">RC</span><span class=\"irci-i-bottom-title\">I</span></span> ?
                    </h2>
                    <p class=\"lead text-dark-gray\">Les avantages de notre service de location</p>
                </div>

                <div class=\"row g-4 justify-content-center\">
                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-tools fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Matériel testé</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                Chaque équipement est vérifié et préparé avant livraison
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\" style=\"animation-delay: 0.1s;\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-check fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Livraison possible</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                (transport, installation et reprise du matériel)
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\" style=\"animation-delay: 0.2s;\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-headset fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Support technique</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                Assistance disponible pendant toute la durée de location
                            </p>
                        </div>
                    </div>
                </div>

                <div class=\"row g-4 justify-content-center mt-1\">
                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\" style=\"animation-delay: 0.3s;\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-medal fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Qualité pro</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                Marques reconnues et matériel haut de gamme
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-3 scroll-reveal-card\" style=\"animation-delay: 0.4s;\">
                        <div class=\"advantage-card text-center\">
                            <i class=\"fas fa-file-alt fa-2x text-primary-red mb-3\"></i>
                            <h3 class=\"h6 font-bold text-primary-dark mb-2\">Fiche technique</h3>
                            <p class=\"small text-dark-gray mb-0\">
                                Informations pratiques et conseils d'utilisation pour chaque matériel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{# CTA Final #}
<section class=\"py-5 bg-primary-red text-white\">
    <div class=\"container py-4 text-center scroll-reveal\">
        <h2 class=\"h3 font-bold mb-3\">Intéressé par ce produit ?</h2>
        <p class=\"lead mb-4\">Contactez-nous pour obtenir un devis personnalisé pour {{ product.name }}</p>
        <a href=\"{{ path('contact') }}\" class=\"btn btn-light btn-lg\">
            <i class=\"fas fa-envelope me-2\"></i>Demander un devis gratuit
        </a>
    </div>
</section>

<style>
/* Product Detail Styles */
.product-detail-image {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    background-color: #f8f9fa;
    min-height: 400px;
}

.product-detail-image img {
    border-radius: 12px;
}

.product-image-placeholder {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f8f9fa;
    border-radius: 12px;
}

.product-detail-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: var(--primary-red);
    color: white;
    padding: 10px 25px;
    border-radius: 30px;
    font-weight: 700;
    font-size: 16px;
    box-shadow: 0 4px 12px rgba(220, 20, 60, 0.4);
}

.product-meta {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    padding: 20px;
    background: var(--light-bg);
    border-radius: 8px;
}

.meta-item {
    font-size: 15px;
    color: var(--dark-gray);
}

.product-short-desc {
    padding: 25px;
    background: var(--light-bg);
    border-left: 4px solid var(--primary-red);
    border-radius: 8px;
}

/* Features Card */
.features-card {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.features-header {
    text-align: center;
    margin-bottom: 30px;
}

.feature-item {
    display: flex;
    align-items: center;
    padding: 12px;
    background: var(--light-bg);
    border-radius: 6px;
    font-size: 15px;
    color: var(--dark-gray);
}

.feature-item i {
    flex-shrink: 0;
}

/* Advantage Cards */
.advantage-card {
    background: white;
    padding: 30px 20px;
    border-radius: 12px;
    border: 2px solid rgba(220, 20, 60, 0.1);
    transition: all 0.3s ease;
    height: 100%;
}

.advantage-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(220, 20, 60, 0.15);
    border-color: var(--primary-red);
}

/* Breadcrumb custom */
.breadcrumb {
    background: transparent;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: \"›\";
    color: var(--dark-gray);
}

.breadcrumb-item a {
    color: var(--dark-gray);
    text-decoration: none;
}

.breadcrumb-item a:hover {
    color: var(--primary-red);
}

/* Responsive */
@media (max-width: 768px) {
    .product-meta {
        flex-direction: column;
        gap: 15px;
    }
    
    .product-cta {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .product-cta .btn {
        width: 100%;
        margin: 0 !important;
    }
}
</style>
{% endblock %}
", "rental/product.html.twig", "/home/vagrant/public_html/irci/templates/rental/product.html.twig");
    }
}
