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

/* base/cgu.html.twig */
class __TwigTemplate_96071903c8a6c8b88a17c2c3726c1587 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/cgu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/cgu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/cgu.html.twig", 1);
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
        echo " Conditions générales d'utilisation";
        
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
        echo "<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold titre\"> Conditions générales d'utilisation </h1>

<div class=\"w-75 ms-5 mt-5\">
    <p>
        Bienvenue sur le site internet de Minerva. En accedant à notre site vous acceptez les présentes conditions
        générales d'utilisation.
        Veuillez les lire attentivement avant d'utiliser notre site.
    </p>

    <ol>
        <li>
            <h4> Propriété intellectuelle </h4>
            <p> Le contenu sur notre site internet, y compris les textes, images, logos, marques de commerce et
                graphismes
                est protégé par des droits de propriété intellectuelle. Vous ne pouvez pas reproduire, distribuer,
                modifier
                ou exploiter ce contenu sans notre autorisation écrite.
            </p>
        </li>
        <li>
            <h4> Utilisation du site </h4>
            <p> Vous pouvez utiliser notre site pour naviguer, passer des commandes en ligne et vous abonner à notre
                newsletter.
                Vous ne pouvez pas utiliser notre site à des fins illégales, frauduleuses ou nuisibles.
            </p>
        </li>
        <li>
            <h4> Confidentialité </h4>
            <p> Minerva s'engage à protéger vos données personnelles conformmément à notre charte de protection des
                données
                personnelles. Veuillez lire notre charte pour en savoir plus sur la manière dont nous collectons,
                utilisons et stockons
                vos données personnelles.
            </p>
        </li>
        <li>
            <h4> Liens vers d'autre sites </h4>
            <p> Notre site peut contenir des liens vers des sites tiers. Nous ne sommes pas responsables du contenu
                ou des pratiques de ces sites. L'utilisation de ces sites est à vos risques et périls.
            </p>
        </li>
        <li>
            <h4> Responsabilité </h4>
            <p> Nous nous efforçons de maintenir notre site à jour et fonctionnel. Cependant, nous ne pouvons pas
                garantir
                que notre site sera toujours accessible et exempt d'erreur ou de virus. Minerva n'est pas reponsable des
                dommages
                directs ou indirects résultant de l'utilisation de notre site.
            </p>
        </li>
        <li>
            <h4> Commande en ligne </h4>
            <p> Vous pouvez passer des commandes en ligne sur notre site internet. Toutes les commandes sont sujettes à
                notre
                confirmation et la disponibilité des produits. Minerva se réserve le droit de refuser toutes commandes
                pour quelque
                raison que ce soit
            </p>
        </li>
        <li>
            <h4> Prix et paiement </h4>
            <p> Les prix des produits affichés sur notre site sont en euros et incluent la TVA. Les frais de livraison
                ne sont pas inclus
                dans les prix affichés. Les paiements doivent être effectués en euros. Nous acceptons les paiements par
                carte de crédit,
                carte de débit et PayPal.
            </p>
        </li>
        <li>
            <h4> Livraison </h4>
            <p> Minerva s'engage à expédier vos commandes dans les plus brefs délais. Les délais de livraison dépendent
                de votre
                adresse de livraison et de la disponibilité des produits. Nous ne sommes pas responsable des retards de
                livraison causés
                par des évènements indépendants de notre volonté.
            </p>
        </li>
        <li>
            <h4> Concernant votre âme </h4>
            <p> Lorsque vous acceptez ces conditions générales d'utilisation vous vous engagez également à donner votre
                âme
                en tribut à Belzebuth. Rien de ce que vous ne pourrez dire par la suite n'y changera quoi que ce soit.
            </p>
        </li>
        <li>
            <h4> Droits applicables et juridiction compétente </h4>
            <p> Les présentes conditions générales d'utilisation sont régies par les lois françaises Tout litige
                découlant
                de l'utilisation de notre site internet sera soumis à la juridiction des tribunaux français.
            </p>
        </li>
        <li>
            <h4> Modification des conditions générales d'utilisation </h4>
            <p> Nous nous réservons le droit de modifier ces conditions générales d'utilisation à tout moment. Les
                modifications
                prendront effet dès leur publication sur notre site internet.
            </p>
        </li>
    </ol>

    <p class=\"mb-5\"> Si vous avez des questions ou des préoccupations concernant nos conditions générales d'utilisation,
        veuillez
        nous contacter via notre formulaire de contact.
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
        return "base/cgu.html.twig";
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

{% block title %}{{parent()}} Conditions générales d'utilisation{% endblock %}

{% block body %}
<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold titre\"> Conditions générales d'utilisation </h1>

<div class=\"w-75 ms-5 mt-5\">
    <p>
        Bienvenue sur le site internet de Minerva. En accedant à notre site vous acceptez les présentes conditions
        générales d'utilisation.
        Veuillez les lire attentivement avant d'utiliser notre site.
    </p>

    <ol>
        <li>
            <h4> Propriété intellectuelle </h4>
            <p> Le contenu sur notre site internet, y compris les textes, images, logos, marques de commerce et
                graphismes
                est protégé par des droits de propriété intellectuelle. Vous ne pouvez pas reproduire, distribuer,
                modifier
                ou exploiter ce contenu sans notre autorisation écrite.
            </p>
        </li>
        <li>
            <h4> Utilisation du site </h4>
            <p> Vous pouvez utiliser notre site pour naviguer, passer des commandes en ligne et vous abonner à notre
                newsletter.
                Vous ne pouvez pas utiliser notre site à des fins illégales, frauduleuses ou nuisibles.
            </p>
        </li>
        <li>
            <h4> Confidentialité </h4>
            <p> Minerva s'engage à protéger vos données personnelles conformmément à notre charte de protection des
                données
                personnelles. Veuillez lire notre charte pour en savoir plus sur la manière dont nous collectons,
                utilisons et stockons
                vos données personnelles.
            </p>
        </li>
        <li>
            <h4> Liens vers d'autre sites </h4>
            <p> Notre site peut contenir des liens vers des sites tiers. Nous ne sommes pas responsables du contenu
                ou des pratiques de ces sites. L'utilisation de ces sites est à vos risques et périls.
            </p>
        </li>
        <li>
            <h4> Responsabilité </h4>
            <p> Nous nous efforçons de maintenir notre site à jour et fonctionnel. Cependant, nous ne pouvons pas
                garantir
                que notre site sera toujours accessible et exempt d'erreur ou de virus. Minerva n'est pas reponsable des
                dommages
                directs ou indirects résultant de l'utilisation de notre site.
            </p>
        </li>
        <li>
            <h4> Commande en ligne </h4>
            <p> Vous pouvez passer des commandes en ligne sur notre site internet. Toutes les commandes sont sujettes à
                notre
                confirmation et la disponibilité des produits. Minerva se réserve le droit de refuser toutes commandes
                pour quelque
                raison que ce soit
            </p>
        </li>
        <li>
            <h4> Prix et paiement </h4>
            <p> Les prix des produits affichés sur notre site sont en euros et incluent la TVA. Les frais de livraison
                ne sont pas inclus
                dans les prix affichés. Les paiements doivent être effectués en euros. Nous acceptons les paiements par
                carte de crédit,
                carte de débit et PayPal.
            </p>
        </li>
        <li>
            <h4> Livraison </h4>
            <p> Minerva s'engage à expédier vos commandes dans les plus brefs délais. Les délais de livraison dépendent
                de votre
                adresse de livraison et de la disponibilité des produits. Nous ne sommes pas responsable des retards de
                livraison causés
                par des évènements indépendants de notre volonté.
            </p>
        </li>
        <li>
            <h4> Concernant votre âme </h4>
            <p> Lorsque vous acceptez ces conditions générales d'utilisation vous vous engagez également à donner votre
                âme
                en tribut à Belzebuth. Rien de ce que vous ne pourrez dire par la suite n'y changera quoi que ce soit.
            </p>
        </li>
        <li>
            <h4> Droits applicables et juridiction compétente </h4>
            <p> Les présentes conditions générales d'utilisation sont régies par les lois françaises Tout litige
                découlant
                de l'utilisation de notre site internet sera soumis à la juridiction des tribunaux français.
            </p>
        </li>
        <li>
            <h4> Modification des conditions générales d'utilisation </h4>
            <p> Nous nous réservons le droit de modifier ces conditions générales d'utilisation à tout moment. Les
                modifications
                prendront effet dès leur publication sur notre site internet.
            </p>
        </li>
    </ol>

    <p class=\"mb-5\"> Si vous avez des questions ou des préoccupations concernant nos conditions générales d'utilisation,
        veuillez
        nous contacter via notre formulaire de contact.
    </p>
</div>
{% endblock %}", "base/cgu.html.twig", "/var/www/html/Minerva3/templates/base/cgu.html.twig");
    }
}
