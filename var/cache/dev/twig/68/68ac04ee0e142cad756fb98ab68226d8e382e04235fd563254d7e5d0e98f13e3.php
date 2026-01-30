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

/* emails/contact_notification.html.twig */
class __TwigTemplate_d31af868d17a0b8174b249ae72382268dbcaa2f537cce669db3e72937caf4506 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact_notification.html.twig"));

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
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border: 1px solid #e9ecef;
        }
        .info-row {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #0f3460;
        }
        .badge {
            display: inline-block;
            padding: 5px 10px;
            background: #e94560;
            color: white;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
        .message-box {
            background: white;
            padding: 15px;
            border-left: 4px solid #0f3460;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h2>📧 Nouvelle demande de contact - IRCI</h2>
    </div>
    
    <div class=\"content\">
        <div class=\"info-row\">
            <span class=\"label\">Type de demande :</span>
            <span class=\"badge\">
                ";
        // line 65
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 65, $this->source); })()), "typeContact", [], "any", false, false, false, 65), "prestation"))) {
            // line 66
            yield "                    Demande de prestation
                ";
        } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 67, $this->source); })()), "typeContact", [], "any", false, false, false, 67), "devis"))) {
            // line 68
            yield "                    Demande de devis
                ";
        } else {
            // line 70
            yield "                    Message général
                ";
        }
        // line 72
        yield "            </span>
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Nom :</span> ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 76, $this->source); })()), "nom", [], "any", false, false, false, 76), "html", null, true);
        yield "
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Email :</span> <a href=\"mailto:";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), "html", null, true);
        yield "</a>
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Téléphone :</span> ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 84, $this->source); })()), "telephone", [], "any", false, false, false, 84), "html", null, true);
        yield "
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Date de réception :</span> ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 88, $this->source); })()), "createdAt", [], "any", false, false, false, 88), "d/m/Y à H:i"), "html", null, true);
        yield "
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Message :</span>
            <div class=\"message-box\">
                ";
        // line 94
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 94, $this->source); })()), "message", [], "any", false, false, false, 94), "html", null, true));
        yield "
            </div>
        </div>
    </div>

    <div class=\"footer\">
        <p>Cet email a été généré automatiquement par le formulaire de contact du site IRCI.</p>
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
        return "emails/contact_notification.html.twig";
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
        return array (  160 => 94,  151 => 88,  144 => 84,  135 => 80,  128 => 76,  122 => 72,  118 => 70,  114 => 68,  112 => 67,  109 => 66,  107 => 65,  41 => 1,);
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
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border: 1px solid #e9ecef;
        }
        .info-row {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #0f3460;
        }
        .badge {
            display: inline-block;
            padding: 5px 10px;
            background: #e94560;
            color: white;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
        .message-box {
            background: white;
            padding: 15px;
            border-left: 4px solid #0f3460;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h2>📧 Nouvelle demande de contact - IRCI</h2>
    </div>
    
    <div class=\"content\">
        <div class=\"info-row\">
            <span class=\"label\">Type de demande :</span>
            <span class=\"badge\">
                {% if contact.typeContact == 'prestation' %}
                    Demande de prestation
                {% elseif contact.typeContact == 'devis' %}
                    Demande de devis
                {% else %}
                    Message général
                {% endif %}
            </span>
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Nom :</span> {{ contact.nom }}
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Email :</span> <a href=\"mailto:{{ contact.email }}\">{{ contact.email }}</a>
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Téléphone :</span> {{ contact.telephone }}
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Date de réception :</span> {{ contact.createdAt|date('d/m/Y à H:i') }}
        </div>

        <div class=\"info-row\">
            <span class=\"label\">Message :</span>
            <div class=\"message-box\">
                {{ contact.message|nl2br }}
            </div>
        </div>
    </div>

    <div class=\"footer\">
        <p>Cet email a été généré automatiquement par le formulaire de contact du site IRCI.</p>
    </div>
</body>
</html>
", "emails/contact_notification.html.twig", "/home/vagrant/public_html/irci/templates/emails/contact_notification.html.twig");
    }
}
