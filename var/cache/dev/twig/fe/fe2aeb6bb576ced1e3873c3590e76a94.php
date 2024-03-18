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

/* livre/recherche.html.twig */
class __TwigTemplate_dfa36562bdae31dc150446ce6e7ad18d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/recherche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/recherche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "livre/recherche.html.twig", 1);
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
        echo "Livres
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
        echo "<div class=\"container-fluid\">
\t<h1 class=\"text-center text-primary mt-4 pt-4 fw-bold\">
\t\tListe des Livres</h1>


\t";
        // line 13
        if (((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 13, $this->source); })()) == [])) {
            // line 14
            echo "\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-8 bg-white p-4 m-0 text-primary\">
\t\t\t\t<h4 class=\"text-black\">
\t\t\t\t\tAucuns résultats n'ont été trouvés pour votre recherche :
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "</h4>
\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 23
            echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-3\">
\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 27
                echo "\t\t\t\t\t<div class=\"card m-auto col-6 col-md-4 mt-5 \" style=\"max-width: 540px;\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<img src=\"image/couverture/";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 30), "html", null, true);
                echo "\" alt=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 30), "html", null, true);
                echo " class=\"img-fluid rounded-start\">
\t\t\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "editeur", [], "any", false, false, false, 32), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                // line 37
                echo "\t\t\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t\t\t<strong>";
                // line 38
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prix", [], "any", false, false, false, 38), 2), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "titre", [], "any", false, false, false, 45), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t<p class=\"card-text mt-3\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "auteur", [], "any", false, false, false, 46), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "resume", [], "any", false, false, false, 47), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t";
                // line 52
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t";
                        // line 67
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t\t";
                if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "
\t\t\t</table>
\t\t</div>
\t</div>
</div>";
        }
        // line 110
        echo "<br><br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "livre/recherche.html.twig";
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
        return array (  250 => 110,  243 => 105,  235 => 102,  226 => 96,  218 => 91,  209 => 86,  206 => 85,  197 => 79,  188 => 74,  180 => 68,  177 => 67,  175 => 54,  172 => 53,  170 => 52,  162 => 47,  158 => 46,  154 => 45,  144 => 38,  141 => 37,  136 => 32,  129 => 30,  124 => 27,  120 => 26,  115 => 23,  107 => 18,  101 => 14,  99 => 13,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}Livres
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
\t<h1 class=\"text-center text-primary mt-4 pt-4 fw-bold\">
\t\tListe des Livres</h1>


\t{% if livres == [] %}
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-8 bg-white p-4 m-0 text-primary\">
\t\t\t\t<h4 class=\"text-black\">
\t\t\t\t\tAucuns résultats n'ont été trouvés pour votre recherche :
\t\t\t\t\t{{query}}</h4>
\t\t\t</div>
\t\t</div>

\t{% else %}

\t\t<div class=\"container\">
\t\t\t<div class=\"row g-3\">
\t\t\t\t{% for l in livres %}
\t\t\t\t\t<div class=\"card m-auto col-6 col-md-4 mt-5 \" style=\"max-width: 540px;\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<img src=\"image/couverture/{{l.couverture}}\" alt={{l.couverture}} class=\"img-fluid rounded-start\">
\t\t\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.editeur}}</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t{#<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.format}}</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>#}
\t\t\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t\t\t<strong>{{l.prix|number_format(2)}}
\t\t\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">{{l.titre}}</h4>
\t\t\t\t\t\t\t\t\t<p class=\"card-text mt-3\">{{l.auteur}}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">{{l.resume}}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t{% if is_granted ('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t{#{% if l in app.user.favories %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('favorie', {'id': l.id, 'action': 'supprimer'}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbookmark_added
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('favorie', {'id': l.id, 'action': 'ajouter'}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbookmark_add
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}#}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a href=\"{{path('detail', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{path('ajoutPanier', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if not is_granted ('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t<a href=\"{{path('app_login', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{path('detail', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_login', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}

\t\t\t</table>
\t\t</div>
\t</div>
</div>{% endif %}
<br><br>
{% endblock %}
", "livre/recherche.html.twig", "/var/www/html/Minerva3/templates/livre/recherche.html.twig");
    }
}
