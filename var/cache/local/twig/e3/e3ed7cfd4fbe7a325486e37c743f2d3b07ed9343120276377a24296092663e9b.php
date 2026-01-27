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

/* legal/index.html.twig */
class __TwigTemplate_a6fde3b5de813de681c408a5d8145d6bcd52438724acad024624bfe57a4b9524 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "legal/index.html.twig", 1);
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

        yield "Mentions légales du site IRCI - Informations légales et coordonnées de l'entreprise.";
        
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
                    <i class=\"fas fa-gavel text-primary-red-light me-3\"></i>
                    Mentions Légales
                </h1>
                <p class=\"lead mb-3\">Informations légales et coordonnées de l'entreprise</p>
            </div>
        </div>
    </div>
</section>

";
        // line 24
        yield "<section class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <div class=\"legal-content\">
                    <h2 class=\"h3 font-bold text-primary-dark mb-4\">1. Informations légales</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\"><strong>Raison sociale :</strong> IRCI</p>
                        <p class=\"mb-2\"><strong>Forme juridique :</strong> SARL</p>
                        <p class=\"mb-2\"><strong>Capital social :</strong> 1 000 €</p>
                        <p class=\"mb-2\"><strong>SIRET :</strong> 930 547 385 00011</p>
                        <p class=\"mb-2\"><strong>RCS :</strong> Marseille</p>
                        <p class=\"mb-2\"><strong>N° TVA intracommunautaire :</strong> FR15930547385</p>
                        <p class=\"mb-0\"><strong>Directeur de la publication :</strong> Pierre ROUSSEL</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">2. Coordonnées</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\"><strong>Adresse :</strong> Marseille, France</p>
                        <p class=\"mb-2\"><strong>Téléphone :</strong> 06 68 56 38 43</p>
                        <p class=\"mb-0\"><strong>Email :</strong> contact@irci-salon.fr</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">3. Hébergement</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-0\">Les informations concernant l'hébergeur seront complétées lors du déploiement en production.</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">4. Propriété intellectuelle</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\">L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle.</p>
                        <p class=\"mb-0\">Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">5. Protection des données personnelles</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\">Conformément à la loi « Informatique et Libertés » du 6 janvier 1978 modifiée et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification, de suppression et d'opposition aux données personnelles vous concernant.</p>
                        <p class=\"mb-2\">Pour exercer ce droit, vous pouvez nous contacter à l'adresse : <strong>contact@irci-salon.fr</strong></p>
                        <p class=\"mb-0\">Les données collectées via le formulaire de contact sont utilisées uniquement pour répondre à vos demandes et ne sont en aucun cas transmises à des tiers.</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">6. Cookies</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-0\">Ce site utilise des cookies techniques nécessaires au bon fonctionnement du site. Aucun cookie de suivi ou de publicité n'est utilisé.</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">7. Responsabilité</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\">IRCI s'efforce d'assurer l'exactitude et la mise à jour des informations diffusées sur ce site, dont elle se réserve le droit de corriger, à tout moment et sans préavis, le contenu.</p>
                        <p class=\"mb-0\">Toutefois, IRCI ne peut garantir l'exactitude, la précision ou l'exhaustivité des informations mises à disposition sur ce site. En conséquence, IRCI décline toute responsabilité pour tout dommage résultant d'une confiance accordée à ces informations ou de leur utilisation.</p>
                    </div>

                    <div class=\"alert alert-primary-red-soft border-0 mt-5\">
                        <p class=\"mb-0\"><strong>Dernière mise à jour :</strong> ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 86
        yield "<section class=\"py-5 bg-primary-red text-white\">
    <div class=\"container py-4 text-center scroll-reveal\">
        <h2 class=\"h3 font-bold mb-3\">Des questions ?</h2>
        <p class=\"lead mb-4\">N'hésitez pas à nous contacter</p>
        <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn btn-light btn-lg\">
            <i class=\"fas fa-envelope me-2\"></i>Nous contacter
        </a>
    </div>
</section>

<style>
.legal-content h2 {
    border-bottom: 3px solid var(--primary-red);
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.legal-content p {
    line-height: 1.8;
    color: var(--dark-gray);
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
        return "legal/index.html.twig";
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
        return array (  179 => 90,  173 => 86,  162 => 77,  107 => 24,  91 => 9,  84 => 7,  70 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }} - IRCI{% endblock %}

{% block meta_description %}Mentions légales du site IRCI - Informations légales et coordonnées de l'entreprise.{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"bg-primary-dark text-white py-5 position-relative\">
    <div class=\"container py-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-8 mx-auto text-center fade-in-up\">
                <h1 class=\"display-4 font-bold mb-3\">
                    <i class=\"fas fa-gavel text-primary-red-light me-3\"></i>
                    Mentions Légales
                </h1>
                <p class=\"lead mb-3\">Informations légales et coordonnées de l'entreprise</p>
            </div>
        </div>
    </div>
</section>

{# Contenu Mentions Légales #}
<section class=\"py-5 bg-white\">
    <div class=\"container py-4\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <div class=\"legal-content\">
                    <h2 class=\"h3 font-bold text-primary-dark mb-4\">1. Informations légales</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\"><strong>Raison sociale :</strong> IRCI</p>
                        <p class=\"mb-2\"><strong>Forme juridique :</strong> SARL</p>
                        <p class=\"mb-2\"><strong>Capital social :</strong> 1 000 €</p>
                        <p class=\"mb-2\"><strong>SIRET :</strong> 930 547 385 00011</p>
                        <p class=\"mb-2\"><strong>RCS :</strong> Marseille</p>
                        <p class=\"mb-2\"><strong>N° TVA intracommunautaire :</strong> FR15930547385</p>
                        <p class=\"mb-0\"><strong>Directeur de la publication :</strong> Pierre ROUSSEL</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">2. Coordonnées</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\"><strong>Adresse :</strong> Marseille, France</p>
                        <p class=\"mb-2\"><strong>Téléphone :</strong> 06 68 56 38 43</p>
                        <p class=\"mb-0\"><strong>Email :</strong> contact@irci-salon.fr</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">3. Hébergement</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-0\">Les informations concernant l'hébergeur seront complétées lors du déploiement en production.</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">4. Propriété intellectuelle</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\">L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle.</p>
                        <p class=\"mb-0\">Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">5. Protection des données personnelles</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\">Conformément à la loi « Informatique et Libertés » du 6 janvier 1978 modifiée et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification, de suppression et d'opposition aux données personnelles vous concernant.</p>
                        <p class=\"mb-2\">Pour exercer ce droit, vous pouvez nous contacter à l'adresse : <strong>contact@irci-salon.fr</strong></p>
                        <p class=\"mb-0\">Les données collectées via le formulaire de contact sont utilisées uniquement pour répondre à vos demandes et ne sont en aucun cas transmises à des tiers.</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">6. Cookies</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-0\">Ce site utilise des cookies techniques nécessaires au bon fonctionnement du site. Aucun cookie de suivi ou de publicité n'est utilisé.</p>
                    </div>

                    <h2 class=\"h3 font-bold text-primary-dark mb-4 mt-5\">7. Responsabilité</h2>
                    <div class=\"bg-light-bg p-4 rounded mb-4\">
                        <p class=\"mb-2\">IRCI s'efforce d'assurer l'exactitude et la mise à jour des informations diffusées sur ce site, dont elle se réserve le droit de corriger, à tout moment et sans préavis, le contenu.</p>
                        <p class=\"mb-0\">Toutefois, IRCI ne peut garantir l'exactitude, la précision ou l'exhaustivité des informations mises à disposition sur ce site. En conséquence, IRCI décline toute responsabilité pour tout dommage résultant d'une confiance accordée à ces informations ou de leur utilisation.</p>
                    </div>

                    <div class=\"alert alert-primary-red-soft border-0 mt-5\">
                        <p class=\"mb-0\"><strong>Dernière mise à jour :</strong> {{ \"now\"|date(\"d/m/Y\") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{# CTA Section #}
<section class=\"py-5 bg-primary-red text-white\">
    <div class=\"container py-4 text-center scroll-reveal\">
        <h2 class=\"h3 font-bold mb-3\">Des questions ?</h2>
        <p class=\"lead mb-4\">N'hésitez pas à nous contacter</p>
        <a href=\"{{ path('contact') }}\" class=\"btn btn-light btn-lg\">
            <i class=\"fas fa-envelope me-2\"></i>Nous contacter
        </a>
    </div>
</section>

<style>
.legal-content h2 {
    border-bottom: 3px solid var(--primary-red);
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.legal-content p {
    line-height: 1.8;
    color: var(--dark-gray);
}
</style>
{% endblock %}
", "legal/index.html.twig", "/home/vagrant/public_html/irci/templates/legal/index.html.twig");
    }
}
