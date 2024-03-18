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

/* base/monPanier.html.twig */
class __TwigTemplate_e13e1e78caede4a5dfcce05ea0f08b2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/monPanier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/monPanier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/monPanier.html.twig", 1);
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
        echo "Panier
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
\t<div class=\"container-fluid\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-10 titre\">
\t\t\t\t<h1 class=\"text-center titre mt-4 pt-4 display-1 fw-bold\">Liste du panier</h1>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"fw-bold\">
\t\t\t\t\t\t\t\t<th scope=\"col-4\">
\t\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t\tPrix
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "panier", [], "any", false, false, false, 25), "ajouters", [], "any", false, false, false, 25));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 26
            echo "\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr class=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_cycle(["table_primary", "table-secondary"], twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 27)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "livre", [], "any", false, false, false, 28), "titre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "Livre", [], "any", false, false, false, 29), "prix", [], "any", false, false, false, 29), 2), "html", null, true);
            echo "€</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp-panier", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 31), "action" => "supprimer"]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined bouton\">
\t\t\t\t\t\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t</table>


\t\t\t\t\t<button>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\tsell
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</button>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base/monPanier.html.twig";
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
        return array (  167 => 40,  144 => 31,  139 => 29,  135 => 28,  131 => 27,  128 => 26,  111 => 25,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}Panier
{% endblock %}

{% block body %}

\t<div class=\"container-fluid\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-10 titre\">
\t\t\t\t<h1 class=\"text-center titre mt-4 pt-4 display-1 fw-bold\">Liste du panier</h1>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"fw-bold\">
\t\t\t\t\t\t\t\t<th scope=\"col-4\">
\t\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t\tPrix
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t{% for l in app.user.panier.ajouters %}
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr class=\"{{ cycle(['table_primary', 'table-secondary'], loop.index0) }}\">
\t\t\t\t\t\t\t\t\t<td>{{l.livre.titre}}</td>
\t\t\t\t\t\t\t\t\t<td>{{l.Livre.prix|number_format(2)}}€</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('supp-panier', {'id':l.id,'action':'supprimer'})}}\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined bouton\">
\t\t\t\t\t\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</table>


\t\t\t\t\t<button>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\tsell
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</button>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}

", "base/monPanier.html.twig", "/var/www/html/Minerva3/templates/base/monPanier.html.twig");
    }
}
