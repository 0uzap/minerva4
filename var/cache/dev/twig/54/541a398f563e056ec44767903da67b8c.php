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

/* genres/BDhumoristique.html.twig */
class __TwigTemplate_a7e76b5a1d0ace9ea794d586d7558402 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genres/BDhumoristique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genres/BDhumoristique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "genres/BDhumoristique.html.twig", 1);
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
        echo "Humoristique";
        
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
        echo "    
   <div class=\"d-flex flex-wrap justify-content-center\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 9
            echo "\t\t\t<div class=\"card m-2\" style=\"max-width: 540px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/couverture/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 12), "html", null, true);
            echo "\" alt=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 12), "html", null, true);
            echo " class=\"img-fluid rounded-start\">
\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "editeur", [], "any", false, false, false, 14), "html", null, true);
            echo "</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "format", [], "any", false, false, false, 17), "html", null, true);
            echo "</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t<strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prix", [], "any", false, false, false, 20), 2), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "titre", [], "any", false, false, false, 27), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<p class=\"card-text mt-3\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "auteur", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "resume", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t";
            // line 34
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
                // line 35
                echo "\t\t\t\t\t\t\t";
                if (twig_in_filter($context["l"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "favories", [], "any", false, false, false, 35))) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorie", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 36), "action" => "supprimer"]), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark_added
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorie", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 42), "action" => "ajouter"]), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark_add
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t\t";
            } else {
                // line 49
                echo "\t\t\t\t\t\t\t<button class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "genres/BDhumoristique.html.twig";
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
        return array (  206 => 68,  192 => 60,  183 => 55,  175 => 49,  172 => 48,  162 => 42,  152 => 36,  149 => 35,  147 => 34,  139 => 29,  135 => 28,  131 => 27,  121 => 20,  115 => 17,  109 => 14,  102 => 12,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}Humoristique{% endblock %}

{% block body %}
    
   <div class=\"d-flex flex-wrap justify-content-center\">
\t\t{% for l in livre %}
\t\t\t<div class=\"card m-2\" style=\"max-width: 540px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/couverture/{{l.couverture}}\" alt={{l.couverture}} class=\"img-fluid rounded-start\">
\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.editeur}}</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.format}}</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t<strong>{{l.prix|number_format(2)}}
\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">{{l.titre}}</h4>
\t\t\t\t\t\t\t<p class=\"card-text mt-3\">{{l.auteur}}</p>
\t\t\t\t\t\t\t<p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">{{l.resume}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t{% if l in app.user.favories %}
\t\t\t\t\t\t\t\t<a href=\"{{path('favorie', {'id': l.id, 'action': 'supprimer'}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark_added
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{path('favorie', {'id': l.id, 'action': 'ajouter'}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark_add
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<button class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<a href=\"{{path('detail', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{path('ajoutPanier', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "genres/BDhumoristique.html.twig", "/var/www/html/Minerva3/templates/genres/BDhumoristique.html.twig");
    }
}
