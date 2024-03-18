<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base/charte.html.twig */
class __TwigTemplate_afeb33b3c88d3f968bfc10acd2a2ea02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/charte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/charte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/charte.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Charte de protection des données personnelles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold titre\"> Charte de protection des données personnelles </h1>

<div class=\"w-75 ms-5 my-5 \">
    <p>
        Minerva s'engage à protéger vos données personnelles et à protéger votre vie privée.
        Cette charte décrit la manière dont nous collectons, utilisons, stockons et protégeons vos données personnelles
        lorsque vous utilisez notre site internet.
    </p>

    <ol>
        <li>
            <h4> Collecte et utilisation de données personnelles </h4>
            <p> Nous collectons des informations personnelles que lorsque vous créez un compte,
                effectuez une commande en ligne ou nous contactez via notre formulaire de contact. Les informations
                collectées
                peuvent inclure votre nom, votre adresse e-mail, votre adresse postale, votre numéro de téléphone et vos
                préférences bancaires.
            </p>
        </li>
    </ol>
    <p> Nous utilisons ces informations afin de traiter vote commande ou répondre à vos questions. Nous pouvons
        également
        utiliser vos informations pour vous informer des évènements à venir, des offres promotionnelles ou des nouvelles
        arrivées de notre librairie.
    </p>

    <ol start=\"2\">
        <li>
            <h4> Stockage et protection des données personnelles</h4>
            <p> Vos données personnelles sont stockées sur des serveurs sécurisés et des mesures techniques et
                organisationnelles appropriées sont
                continuellement prises afin de protéger vos données contre la perte, l'utilisation abusive, l'accès non
                autorisé ou la divulagtion.
            </p>
        </li>
    </ol>
    <p> Nous ne transmettons pas vos données personnelles à des tiers dans la mesure du nécessaire afin de traiter votre
        commande
        ou si nous sommes tenus de le faire par la loi.
    </p>

    <ol start=\"3\">
        <li>
            <h4> Droits des utilisateurs</h4>
            <p> Vous avez le droit d'accéder à vos données personnelles, de les rectifier et de les supprimer ou de
                limiter
                leur traitement. Vous pouvez également vous opposer au traitement de vos données personnelles à des fins
                de marketing
                direct. Pour exercer ces droits veuillez nous contacter via notre formulaire de contact.
            </p>
        </li>
        <li>
            <h4> Cookies </h4>
            <p>Nous utilisons des cookies sur notre site internet pour améliorer votre expérience utilisateur et pour
                collecter
                des données statistiques sur l'utilisation de notre site. Les cookies sont de petits fichiers stockés
                sur votre ordinateur
                ou votre appareil mobile lorsque vous visitez notre site. Vous pouvez à tout moment désactiver les
                cookies dans les
                paramètres de votre navigateur.
            </p>
        </li>
        <li>
            <h4>Modification de la charte</h4>
            <p>Nous nous réservons le droit de modifier cette charte à tout moment. Les modificationsprendront effet dès
                leurs publications sur notre site internet.
            </p>
        </li>
    </ol>

    <p> Si vous avez des questions concernant notre charte de protection des données personnelles,
        n'hésitez pas à nous contacter via notre formulaire de contact.
    </p>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base/charte.html.twig";
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
        return array (  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}Charte de protection des données personnelles{% endblock %}

{% block body %}
<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold titre\"> Charte de protection des données personnelles </h1>

<div class=\"w-75 ms-5 my-5 \">
    <p>
        Minerva s'engage à protéger vos données personnelles et à protéger votre vie privée.
        Cette charte décrit la manière dont nous collectons, utilisons, stockons et protégeons vos données personnelles
        lorsque vous utilisez notre site internet.
    </p>

    <ol>
        <li>
            <h4> Collecte et utilisation de données personnelles </h4>
            <p> Nous collectons des informations personnelles que lorsque vous créez un compte,
                effectuez une commande en ligne ou nous contactez via notre formulaire de contact. Les informations
                collectées
                peuvent inclure votre nom, votre adresse e-mail, votre adresse postale, votre numéro de téléphone et vos
                préférences bancaires.
            </p>
        </li>
    </ol>
    <p> Nous utilisons ces informations afin de traiter vote commande ou répondre à vos questions. Nous pouvons
        également
        utiliser vos informations pour vous informer des évènements à venir, des offres promotionnelles ou des nouvelles
        arrivées de notre librairie.
    </p>

    <ol start=\"2\">
        <li>
            <h4> Stockage et protection des données personnelles</h4>
            <p> Vos données personnelles sont stockées sur des serveurs sécurisés et des mesures techniques et
                organisationnelles appropriées sont
                continuellement prises afin de protéger vos données contre la perte, l'utilisation abusive, l'accès non
                autorisé ou la divulagtion.
            </p>
        </li>
    </ol>
    <p> Nous ne transmettons pas vos données personnelles à des tiers dans la mesure du nécessaire afin de traiter votre
        commande
        ou si nous sommes tenus de le faire par la loi.
    </p>

    <ol start=\"3\">
        <li>
            <h4> Droits des utilisateurs</h4>
            <p> Vous avez le droit d'accéder à vos données personnelles, de les rectifier et de les supprimer ou de
                limiter
                leur traitement. Vous pouvez également vous opposer au traitement de vos données personnelles à des fins
                de marketing
                direct. Pour exercer ces droits veuillez nous contacter via notre formulaire de contact.
            </p>
        </li>
        <li>
            <h4> Cookies </h4>
            <p>Nous utilisons des cookies sur notre site internet pour améliorer votre expérience utilisateur et pour
                collecter
                des données statistiques sur l'utilisation de notre site. Les cookies sont de petits fichiers stockés
                sur votre ordinateur
                ou votre appareil mobile lorsque vous visitez notre site. Vous pouvez à tout moment désactiver les
                cookies dans les
                paramètres de votre navigateur.
            </p>
        </li>
        <li>
            <h4>Modification de la charte</h4>
            <p>Nous nous réservons le droit de modifier cette charte à tout moment. Les modificationsprendront effet dès
                leurs publications sur notre site internet.
            </p>
        </li>
    </ol>

    <p> Si vous avez des questions concernant notre charte de protection des données personnelles,
        n'hésitez pas à nous contacter via notre formulaire de contact.
    </p>

</div>

{% endblock %}", "base/charte.html.twig", "/var/www/html/Minerva3/templates/base/charte.html.twig");
    }
}
