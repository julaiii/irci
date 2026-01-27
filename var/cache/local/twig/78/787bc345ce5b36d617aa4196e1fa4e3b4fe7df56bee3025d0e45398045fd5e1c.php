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

/* emails/contact_confirmation.html.twig */
class __TwigTemplate_90e468912d31cf5c46ebfbad5705ffc940a1dbcd2e32ffcd6cb447c2377ffb3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact_confirmation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #0f3460;
            color: white;
            padding: 30px 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            background: white;
            padding: 30px;
            border: 1px solid #e9ecef;
        }
        .highlight-box {
            background: #f8f9fa;
            padding: 20px;
            border-left: 4px solid #e94560;
            margin: 20px 0;
        }
        .info-section {
            margin: 25px 0;
        }
        .info-section h3 {
            color: #0f3460;
            margin-bottom: 10px;
        }
        .footer {
            background: #f8f9fa;
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 12px;
            border-radius: 0 0 5px 5px;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: #e94560;
            color: white !important;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>🎉 Merci pour votre demande !</h1>
    </div>
    
    <div class=\"content\">
        <p>Bonjour <strong>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 69, $this->source); })()), "nom", [], "any", false, false, false, 69), "html", null, true);
        yield "</strong>,</p>

        <p>Nous avons bien reçu votre 
            ";
        // line 72
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 72, $this->source); })()), "typeContact", [], "any", false, false, false, 72), "prestation"))) {
            // line 73
            yield "                <strong>demande de prestation</strong>
            ";
        } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 74, $this->source); })()), "typeContact", [], "any", false, false, false, 74), "devis"))) {
            // line 75
            yield "                <strong>demande de devis</strong>
            ";
        } else {
            // line 77
            yield "                <strong>message</strong>
            ";
        }
        // line 79
        yield "            et nous vous en remercions.
        </p>

        <div class=\"highlight-box\">
            <p style=\"margin: 0;\"><strong>⏱️ Notre équipe vous répondra dans les plus brefs délais</strong>, généralement sous 24 à 48 heures ouvrées.</p>
        </div>

        <div class=\"info-section\">
            <h3>📋 Récapitulatif de votre demande</h3>
            <p><strong>Type :</strong> 
                ";
        // line 89
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 89, $this->source); })()), "typeContact", [], "any", false, false, false, 89), "prestation"))) {
            // line 90
            yield "                    Demande de prestation
                ";
        } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,         // line 91
(isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 91, $this->source); })()), "typeContact", [], "any", false, false, false, 91), "devis"))) {
            // line 92
            yield "                    Demande de devis
                ";
        } else {
            // line 94
            yield "                    Message général
                ";
        }
        // line 96
        yield "            </p>
            <p><strong>Date :</strong> ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 97, $this->source); })()), "createdAt", [], "any", false, false, false, 97), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
            <p><strong>Votre message :</strong></p>
            <div style=\"background: #f8f9fa; padding: 15px; border-radius: 5px;\">
                ";
        // line 100
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 100, $this->source); })()), "message", [], "any", false, false, false, 100), "html", null, true));
        yield "
            </div>
        </div>

        <div class=\"info-section\">
            <h3>📞 Besoin d'informations supplémentaires ?</h3>
            <p>N'hésitez pas à nous contacter directement :</p>
            <ul style=\"list-style: none; padding: 0;\">
                <li>📧 Email : <a href=\"mailto:contact@irci.fr\">contact@irci.fr</a></li>
                <li>📱 Téléphone : À définir</li>
            </ul>
        </div>

        <p style=\"margin-top: 30px;\">À très bientôt,<br><strong>L'équipe IRCI</strong></p>
    </div>

    <div class=\"footer\">
        <p><strong>IRCI - Prestataire Événementiel Professionnel</strong></p>
        <p>Son • Lumière • Enregistrement • Multimédia</p>
        <p style=\"margin-top: 15px; font-size: 11px;\">
            Cet email a été envoyé automatiquement, merci de ne pas y répondre directement.<br>
            Pour toute question, contactez-nous à contact@irci.fr
        </p>
    </div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/contact_confirmation.html.twig";
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
        return array (  168 => 100,  162 => 97,  159 => 96,  155 => 94,  151 => 92,  149 => 91,  146 => 90,  144 => 89,  132 => 79,  128 => 77,  124 => 75,  122 => 74,  119 => 73,  117 => 72,  111 => 69,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #0f3460;
            color: white;
            padding: 30px 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            background: white;
            padding: 30px;
            border: 1px solid #e9ecef;
        }
        .highlight-box {
            background: #f8f9fa;
            padding: 20px;
            border-left: 4px solid #e94560;
            margin: 20px 0;
        }
        .info-section {
            margin: 25px 0;
        }
        .info-section h3 {
            color: #0f3460;
            margin-bottom: 10px;
        }
        .footer {
            background: #f8f9fa;
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 12px;
            border-radius: 0 0 5px 5px;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: #e94560;
            color: white !important;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>🎉 Merci pour votre demande !</h1>
    </div>
    
    <div class=\"content\">
        <p>Bonjour <strong>{{ contact.nom }}</strong>,</p>

        <p>Nous avons bien reçu votre 
            {% if contact.typeContact == 'prestation' %}
                <strong>demande de prestation</strong>
            {% elseif contact.typeContact == 'devis' %}
                <strong>demande de devis</strong>
            {% else %}
                <strong>message</strong>
            {% endif %}
            et nous vous en remercions.
        </p>

        <div class=\"highlight-box\">
            <p style=\"margin: 0;\"><strong>⏱️ Notre équipe vous répondra dans les plus brefs délais</strong>, généralement sous 24 à 48 heures ouvrées.</p>
        </div>

        <div class=\"info-section\">
            <h3>📋 Récapitulatif de votre demande</h3>
            <p><strong>Type :</strong> 
                {% if contact.typeContact == 'prestation' %}
                    Demande de prestation
                {% elseif contact.typeContact == 'devis' %}
                    Demande de devis
                {% else %}
                    Message général
                {% endif %}
            </p>
            <p><strong>Date :</strong> {{ contact.createdAt|date('d/m/Y à H:i') }}</p>
            <p><strong>Votre message :</strong></p>
            <div style=\"background: #f8f9fa; padding: 15px; border-radius: 5px;\">
                {{ contact.message|nl2br }}
            </div>
        </div>

        <div class=\"info-section\">
            <h3>📞 Besoin d'informations supplémentaires ?</h3>
            <p>N'hésitez pas à nous contacter directement :</p>
            <ul style=\"list-style: none; padding: 0;\">
                <li>📧 Email : <a href=\"mailto:contact@irci.fr\">contact@irci.fr</a></li>
                <li>📱 Téléphone : À définir</li>
            </ul>
        </div>

        <p style=\"margin-top: 30px;\">À très bientôt,<br><strong>L'équipe IRCI</strong></p>
    </div>

    <div class=\"footer\">
        <p><strong>IRCI - Prestataire Événementiel Professionnel</strong></p>
        <p>Son • Lumière • Enregistrement • Multimédia</p>
        <p style=\"margin-top: 15px; font-size: 11px;\">
            Cet email a été envoyé automatiquement, merci de ne pas y répondre directement.<br>
            Pour toute question, contactez-nous à contact@irci.fr
        </p>
    </div>
</body>
</html>
", "emails/contact_confirmation.html.twig", "/home/vagrant/public_html/irci/templates/emails/contact_confirmation.html.twig");
    }
}
