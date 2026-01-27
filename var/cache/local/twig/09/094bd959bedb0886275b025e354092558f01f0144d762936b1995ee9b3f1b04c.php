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

/* contact/index.html.twig */
class __TwigTemplate_420a69527c90b075a2accca24971be59524966c52c65bf758a51e66077396ce8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        yield "Contactez IRCI pour vos besoins en prestations événementielles : son, lumière, enregistrement. Demandez votre devis personnalisé.";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<section class=\"hero-section py-5 bg-light\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12 text-center\">
                <h1 class=\"display-4 fw-bold mb-3\">Contactez-nous</h1>
                <p class=\"lead text-muted\">Une question ? Un projet ? N'hésitez pas à nous contacter</p>
            </div>
        </div>
    </div>
</section>

<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body p-4 p-md-5\">
                        <h2 class=\"mb-4\">Formulaire de contact</h2>
                        
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            yield "                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
                        ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-form", "novalidate" => "novalidate"]]);
        yield "
                            ";
        // line 36
        yield "                            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\">
                                <input type=\"text\" name=\"website\" tabindex=\"-1\" autocomplete=\"off\">
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "typeContact", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "typeContact", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "typeContact", [], "any", false, false, false, 42), 'errors');
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        yield "
                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), 'errors');
        yield "
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "exemple@email.com"]]);
        yield "
                                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'errors');
        yield "
                                </div>

                                <div class=\"col-md-6 mb-3\">
                                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "telephone", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "telephone", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "06 12 34 56 78"]]);
        yield "
                                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "telephone", [], "any", false, false, false, 61), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "message", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "message", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Décrivez votre projet ou votre demande..."]]);
        yield "
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "message", [], "any", false, false, false, 68), 'errors');
        yield "
                            </div>

                            <div class=\"d-grid gap-2\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                    <i class=\"fas fa-paper-plane me-2\"></i>Envoyer le message
                                </button>
                            </div>
                        ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>

                <div class=\"row mt-5\">
                    <div class=\"col-md-4 text-center mb-4\">
                        <div class=\"contact-info-box p-4\">
                            <i class=\"fas fa-phone fa-2x text-primary mb-3\"></i>
                            <h5>Téléphone</h5>
                            <p class=\"text-muted\">À définir</p>
                        </div>
                    </div>
                    <div class=\"col-md-4 text-center mb-4\">
                        <div class=\"contact-info-box p-4\">
                            <i class=\"fas fa-envelope fa-2x text-primary mb-3\"></i>
                            <h5>Email</h5>
                            <p class=\"text-muted\">contact@irci.fr</p>
                        </div>
                    </div>
                    <div class=\"col-md-4 text-center mb-4\">
                        <div class=\"contact-info-box p-4\">
                            <i class=\"fas fa-map-marker-alt fa-2x text-primary mb-3\"></i>
                            <h5>Localisation</h5>
                            <p class=\"text-muted\">France</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact/index.html.twig";
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
        return array (  223 => 76,  212 => 68,  208 => 67,  204 => 66,  196 => 61,  192 => 60,  188 => 59,  181 => 55,  177 => 54,  173 => 53,  165 => 48,  161 => 47,  157 => 46,  150 => 42,  146 => 41,  142 => 40,  136 => 36,  132 => 34,  129 => 33,  119 => 29,  116 => 28,  112 => 27,  91 => 8,  84 => 7,  70 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }} - IRCI{% endblock %}

{% block meta_description %}Contactez IRCI pour vos besoins en prestations événementielles : son, lumière, enregistrement. Demandez votre devis personnalisé.{% endblock %}

{% block body %}
<section class=\"hero-section py-5 bg-light\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12 text-center\">
                <h1 class=\"display-4 fw-bold mb-3\">Contactez-nous</h1>
                <p class=\"lead text-muted\">Une question ? Un projet ? N'hésitez pas à nous contacter</p>
            </div>
        </div>
    </div>
</section>

<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body p-4 p-md-5\">
                        <h2 class=\"mb-4\">Formulaire de contact</h2>
                        
                        {% for message in app.flashes('danger') %}
                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>{{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}

                        {{ form_start(form, {'attr': {'class': 'contact-form', 'novalidate': 'novalidate'}}) }}
                            {# Honeypot anti-bot (champ caché) #}
                            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\">
                                <input type=\"text\" name=\"website\" tabindex=\"-1\" autocomplete=\"off\">
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.typeContact, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.typeContact, {'attr': {'class': 'form-select'}}) }}
                                {{ form_errors(form.typeContact) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.nom, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Votre nom'}}) }}
                                {{ form_errors(form.nom) }}
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    {{ form_label(form.email, null, {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'exemple@email.com'}}) }}
                                    {{ form_errors(form.email) }}
                                </div>

                                <div class=\"col-md-6 mb-3\">
                                    {{ form_label(form.telephone, null, {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': '06 12 34 56 78'}}) }}
                                    {{ form_errors(form.telephone) }}
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.message, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.message, {'attr': {'class': 'form-control', 'placeholder': 'Décrivez votre projet ou votre demande...'}}) }}
                                {{ form_errors(form.message) }}
                            </div>

                            <div class=\"d-grid gap-2\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                    <i class=\"fas fa-paper-plane me-2\"></i>Envoyer le message
                                </button>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>

                <div class=\"row mt-5\">
                    <div class=\"col-md-4 text-center mb-4\">
                        <div class=\"contact-info-box p-4\">
                            <i class=\"fas fa-phone fa-2x text-primary mb-3\"></i>
                            <h5>Téléphone</h5>
                            <p class=\"text-muted\">À définir</p>
                        </div>
                    </div>
                    <div class=\"col-md-4 text-center mb-4\">
                        <div class=\"contact-info-box p-4\">
                            <i class=\"fas fa-envelope fa-2x text-primary mb-3\"></i>
                            <h5>Email</h5>
                            <p class=\"text-muted\">contact@irci.fr</p>
                        </div>
                    </div>
                    <div class=\"col-md-4 text-center mb-4\">
                        <div class=\"contact-info-box p-4\">
                            <i class=\"fas fa-map-marker-alt fa-2x text-primary mb-3\"></i>
                            <h5>Localisation</h5>
                            <p class=\"text-muted\">France</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "contact/index.html.twig", "/home/vagrant/public_html/irci/templates/contact/index.html.twig");
    }
}
