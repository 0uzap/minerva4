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

/* base/mentionslegales.html.twig */
class __TwigTemplate_c9a17643be5046dfb9e25c642fb3efe4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/mentionslegales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/mentionslegales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/mentionslegales.html.twig", 1);
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
        echo "Mention légales";
        
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
        echo "<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold titre\"> Mention légales </h1>

<div class=\"w-75 ms-5 mt-5\">
    <p> Nom de la société: Minerva <br>
        Adresse: quelque part dans les limbes <br>
        Téléphone: 06 02 71 81 95 <br>
        Adresse e-mail: provostristan@gmail.com
    </p>

    <p class=\"my-4\"> Directeur: Tristan Provost <br>
        Hébergement: nuage pédagogique <br>
        Adresse: encore plus loin dans les enfers <br>
        Téléphone: en cours d'acquisition... <br>
        Adresse e-mail: provostristan@gmail.com
    </p>

    <div class=\"mt-5\">
        <h4> Propriété intellectuelle </h4>
        <p> Tous les contenus du site Minerva sont la propriété exclusive de la librairie et/ou de
            ses partenaires et sont protégés par les lois françaises et internationales sur la
            propriété intellectuelle.
        </p>

        <h4> Protection des données personnelles </h4>
        <p> Minerva s'engage à respecter la vie privée de ses utilisateurs et à protéger les données
            personnelles qu'ils fournissent. Les données collectées par Minerva sont utilisées que dans le cadre
            de notre activité et ne sont pas communiquées à des tiers sans le consentement préalable de l'utilisateur.
        </p>

        <h4> Cookies </h4>
        <p> Minerva utilise des cookies pour améliorer l'expérience utilisateur. Les cookies sont des fichiers
            stockés sur l'odinateur de l'utilisateur et permettent de personnaliser les contenus affichés sur le
            site.<br>
            L'utilisateur peut désactiver les cookies dans les paramètres de son naviagteur à tout moment.
        </p>

        <h4> Liens externes </h4>
        <p> Minerva peut contenir des liens vers des sites internet tiers. Minerva n'est pas responsable
            du contenu de ces sites internet et décline toute responsabilité quant à leur utilisation.
        </p>

        <h4> Droit applicable et juridiction compétente </h4>
        <p> Les présentes mentions légales sont régies par les lois françaises. Tout litige découlant de
            l'utilisation du site internet Minerva sera soumis à la juridction des tribunaux français.
        </p>

        <p class=\"mb-5\"> Si vous avez des questions ou des préoccupations concernant les mentions légales de Minerva,
            veuillez nous contacter via notre formulaire de contact.
        </p>

    </div>
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
        return "base/mentionslegales.html.twig";
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

{% block title %}{{parent()}}Mention légales{% endblock %}

{% block body %}
<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold titre\"> Mention légales </h1>

<div class=\"w-75 ms-5 mt-5\">
    <p> Nom de la société: Minerva <br>
        Adresse: quelque part dans les limbes <br>
        Téléphone: 06 02 71 81 95 <br>
        Adresse e-mail: provostristan@gmail.com
    </p>

    <p class=\"my-4\"> Directeur: Tristan Provost <br>
        Hébergement: nuage pédagogique <br>
        Adresse: encore plus loin dans les enfers <br>
        Téléphone: en cours d'acquisition... <br>
        Adresse e-mail: provostristan@gmail.com
    </p>

    <div class=\"mt-5\">
        <h4> Propriété intellectuelle </h4>
        <p> Tous les contenus du site Minerva sont la propriété exclusive de la librairie et/ou de
            ses partenaires et sont protégés par les lois françaises et internationales sur la
            propriété intellectuelle.
        </p>

        <h4> Protection des données personnelles </h4>
        <p> Minerva s'engage à respecter la vie privée de ses utilisateurs et à protéger les données
            personnelles qu'ils fournissent. Les données collectées par Minerva sont utilisées que dans le cadre
            de notre activité et ne sont pas communiquées à des tiers sans le consentement préalable de l'utilisateur.
        </p>

        <h4> Cookies </h4>
        <p> Minerva utilise des cookies pour améliorer l'expérience utilisateur. Les cookies sont des fichiers
            stockés sur l'odinateur de l'utilisateur et permettent de personnaliser les contenus affichés sur le
            site.<br>
            L'utilisateur peut désactiver les cookies dans les paramètres de son naviagteur à tout moment.
        </p>

        <h4> Liens externes </h4>
        <p> Minerva peut contenir des liens vers des sites internet tiers. Minerva n'est pas responsable
            du contenu de ces sites internet et décline toute responsabilité quant à leur utilisation.
        </p>

        <h4> Droit applicable et juridiction compétente </h4>
        <p> Les présentes mentions légales sont régies par les lois françaises. Tout litige découlant de
            l'utilisation du site internet Minerva sera soumis à la juridction des tribunaux français.
        </p>

        <p class=\"mb-5\"> Si vous avez des questions ou des préoccupations concernant les mentions légales de Minerva,
            veuillez nous contacter via notre formulaire de contact.
        </p>

    </div>
</div>

{% endblock %}", "base/mentionslegales.html.twig", "/var/www/html/Minerva3/templates/base/mentionslegales.html.twig");
    }
}
