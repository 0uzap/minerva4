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

/* base/index.html.twig */
class __TwigTemplate_db5733bda1bc68814d8030d484bde291 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/index.html.twig", 1);
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
        echo "Accueil
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
\t<div class=\"carrousel-container my-5\">
\t\t<span class=\"material-symbols-outlined arrow left-arrow\" id=\"btavant\">
\t\t\tnavigate_before
\t\t</span>
\t\t<ul id=\"carrousel\">
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/festiparis.jpg\" class=\"d-block w-100\" alt=\"paris\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/bdangouleme.jpeg\" class=\"d-block w-100\" alt=\"bdangoueleme\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/saintmalo.jpeg\" class=\"d-block w-100\" alt=\"saintmalo\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/salonlivre.jpeg\" class=\"d-block w-100\" alt=\"salonlivre\">
\t\t\t</li>
\t\t</ul>
\t\t<span class=\"material-symbols-outlined arrow right-arrow\" id=\"btafter\">
\t\t\tnavigate_next
\t\t</span>
\t</div>

\t<div class=\"genres-filter text-center my-5\">
\t\t<h3>
\t\t\tFiltrer par genres
\t\t</h3>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"aventure\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tAventure
\t\t\t</label>
\t\t</div>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"science-fiction\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tScience Fiction
\t\t\t</label>
\t\t</div>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"fantasy\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tFantasy
\t\t\t</label>
\t\t</div>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"post-apocalyptique\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tPost Apocalyptique
\t\t\t</label>
\t\t</div>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"humoristique\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tHumoristique
\t\t\t</label>
\t\t</div>
\t</div>


\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 71
            echo "\t\t\t<div class=\"card m-2 livre-card\" style=\"max-width: 540px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/couverture/";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 74), "html", null, true);
            echo "\" alt=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 74), "html", null, true);
            echo " class=\"img-fluid rounded-start\">
\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "editeur", [], "any", false, false, false, 76), "html", null, true);
            echo "</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            // line 81
            echo "\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t<strong>";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prix", [], "any", false, false, false, 82), 2), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"card-text ms-2 test\">
\t\t\t\t\t\t\t<strong id=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "genre", [], "any", false, false, false, 87), "nomgenre", [], "any", false, false, false, 87), "html", null, true);
            echo "\" class=\"hidden\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "genre", [], "any", false, false, false, 87), "nomgenre", [], "any", false, false, false, 87), "html", null, true);
            echo "
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "titre", [], "any", false, false, false, 93), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<p class=\"card-text mt-3\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "auteur", [], "any", false, false, false, 94), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "resume", [], "any", false, false, false, 95), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t";
            // line 100
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 101
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) {
                    // line 102
                    echo "\t\t\t\t\t\t\t";
                    // line 115
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 116
                    echo "\t\t\t\t\t\t\t";
                    // line 121
                    echo "\t\t\t\t\t\t";
                }
                // line 122
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 122)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 127)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t\t";
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 134
                echo "\t\t\t\t\t\t";
                // line 139
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 139)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
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
        return "base/index.html.twig";
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
        return array (  279 => 153,  271 => 150,  262 => 144,  253 => 139,  251 => 134,  248 => 133,  239 => 127,  230 => 122,  227 => 121,  225 => 116,  222 => 115,  220 => 102,  217 => 101,  215 => 100,  207 => 95,  203 => 94,  199 => 93,  188 => 87,  180 => 82,  177 => 81,  172 => 76,  165 => 74,  160 => 71,  156 => 70,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}Accueil
{% endblock %}

{% block body %}

\t<div class=\"carrousel-container my-5\">
\t\t<span class=\"material-symbols-outlined arrow left-arrow\" id=\"btavant\">
\t\t\tnavigate_before
\t\t</span>
\t\t<ul id=\"carrousel\">
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/festiparis.jpg\" class=\"d-block w-100\" alt=\"paris\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/bdangouleme.jpeg\" class=\"d-block w-100\" alt=\"bdangoueleme\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/saintmalo.jpeg\" class=\"d-block w-100\" alt=\"saintmalo\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/salonlivre.jpeg\" class=\"d-block w-100\" alt=\"salonlivre\">
\t\t\t</li>
\t\t</ul>
\t\t<span class=\"material-symbols-outlined arrow right-arrow\" id=\"btafter\">
\t\t\tnavigate_next
\t\t</span>
\t</div>

\t<div class=\"genres-filter text-center my-5\">
\t\t<h3>
\t\t\tFiltrer par genres
\t\t</h3>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"aventure\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tAventure
\t\t\t</label>
\t\t</div>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"science-fiction\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tScience Fiction
\t\t\t</label>
\t\t</div>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"fantasy\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tFantasy
\t\t\t</label>
\t\t</div>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"post-apocalyptique\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tPost Apocalyptique
\t\t\t</label>
\t\t</div>
\t\t<div class=\"form-check form-check-inline\">
\t\t\t<input class=\"form-check-input genre-checkbox\" type=\"checkbox\" id=\"humoristique\">
\t\t\t<label class=\"form-check-label\">
\t\t\t\tHumoristique
\t\t\t</label>
\t\t</div>
\t</div>


\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t{% for l in livre %}
\t\t\t<div class=\"card m-2 livre-card\" style=\"max-width: 540px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/couverture/{{l.couverture}}\" alt={{l.couverture}} class=\"img-fluid rounded-start\">
\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.editeur}}</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t{#<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.format}}</small>
\t\t\t\t\t\t\t\t\t\t\t\t</p>#}
\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t<strong>{{l.prix|number_format(2)}}
\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"card-text ms-2 test\">
\t\t\t\t\t\t\t<strong id=\"{{l.genre.nomgenre}}\" class=\"hidden\">{{ l.genre.nomgenre }}
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
\t\t\t\t\t{% if is_granted ('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t{#{% if l in app.user.favories %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('favorie', {'id': l.id, 'action': 'supprimer'}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbookmark_added
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('favorie', {'id': l.id, 'action': 'ajouter'}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbookmark_add
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}#}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{#<button class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>#}
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
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if not is_granted ('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t{#<a href=\"{{path('app_login', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>#}
\t\t\t\t\t\t<a href=\"{{path('detail', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{path('app_login', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>


{% endblock %}

", "base/index.html.twig", "/var/www/html/Minerva3/templates/base/index.html.twig");
    }
}
