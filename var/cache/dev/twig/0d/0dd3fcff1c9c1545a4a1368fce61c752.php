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

/* base/mes-favorie.html.twig */
class __TwigTemplate_41f849476d012b29773c4ba87013c9a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/mes-favorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/mes-favorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/mes-favorie.html.twig", 1);
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

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "Favorie
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "favories", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 12
                echo "\t\t\t\t<div class=\"card m-2\" style=\"max-width: 540px;\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/couverture/" . twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 15))), "html", null, true);
                echo "\" alt=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 15), "html", null, true);
                echo " class=\"img-fluid rounded-start\">
\t\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "editeur", [], "any", false, false, false, 17), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "format", [], "any", false, false, false, 20), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t\t<strong>";
                // line 23
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prix", [], "any", false, false, false, 23), 2), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "titre", [], "any", false, false, false, 30), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text mt-3\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "auteur", [], "any", false, false, false, 31), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "resume", [], "any", false, false, false, 32), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t";
                // line 37
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "\t\t\t\t\t\t\t";
                    if (twig_in_filter($context["l"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "favories", [], "any", false, false, false, 38))) {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorie", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 39), "action" => "supprimer"]), "html", null, true);
                        echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark_added
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorie", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 45), "action" => "ajouter"]), "html", null, true);
                        echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark_add
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t<button class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t</div>
\t";
        }
        // line 74
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base/mes-favorie.html.twig";
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
        return array (  218 => 74,  214 => 72,  199 => 63,  190 => 58,  182 => 52,  179 => 51,  169 => 45,  159 => 39,  156 => 38,  154 => 37,  146 => 32,  142 => 31,  138 => 30,  128 => 23,  122 => 20,  116 => 17,  109 => 15,  104 => 12,  100 => 11,  97 => 10,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}Favorie
{% endblock %}

{% block body %}

\t{% if app.user %}
\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t{% for l in app.user.favories %}
\t\t\t\t<div class=\"card m-2\" style=\"max-width: 540px;\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<img src=\"{{ asset('image/couverture/' ~ l.couverture) }}\" alt={{l.couverture}} class=\"img-fluid rounded-start\">
\t\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.editeur}}</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.format}}</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t\t<strong>{{l.prix|number_format(2)}}
\t\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h4 class=\"card-title\">{{l.titre}}</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text mt-3\">{{l.auteur}}</p>
\t\t\t\t\t\t\t\t<p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">{{l.resume}}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer\">
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
\t\t\t\t</div>

\t\t\t{% endfor %}
\t\t</div>
\t{% endif %}

{% endblock %}

", "base/mes-favorie.html.twig", "/var/www/html/Minerva3/templates/base/mes-favorie.html.twig");
    }
}
