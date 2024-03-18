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

/* base/detail.html.twig */
class __TwigTemplate_6ca60056fdf5fe12296167694e8b8de0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/detail.html.twig", 1);
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
        echo "Détails
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
\t<div class=\"container my-5 bordure\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-md-4 col-12\">
\t\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/couverture/" . twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 12, $this->source); })()), "couverture", [], "any", false, false, false, 12))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 12, $this->source); })()), "couverture", [], "any", false, false, false, 12), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" style=\"max-width: 300px\">
\t\t\t</div>
\t\t\t<div class=\"col-md-7 col-12 text-md-start text-center mt-3\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<h2 class=\"card-title\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tapartment
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 27, $this->source); })()), "editeur", [], "any", false, false, false, 27), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tfit_page
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 35, $this->source); })()), "format", [], "any", false, false, false, 35), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-3 mb-5\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tlanguage
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 43, $this->source); })()), "langue", [], "any", false, false, false, 43), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tpayments
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 53, $this->source); })()), "prix", [], "any", false, false, false, 53), 2), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tauto_stories
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62), "nomType", [], "any", false, false, false, 62), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-3 mb-5\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tformat_ink_highlighter
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 70, $this->source); })()), "genre", [], "any", false, false, false, 70), "nomGenre", [], "any", false, false, false, 70), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 77, $this->source); })()), "resume", [], "any", false, false, false, 77), "html", null, true);
        echo "
\t\t\t\t\t</div>
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
        return "base/detail.html.twig";
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
        return array (  189 => 77,  179 => 70,  168 => 62,  156 => 53,  143 => 43,  132 => 35,  121 => 27,  108 => 17,  98 => 12,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}Détails
{% endblock %}

{% block body %}

\t<div class=\"container my-5 bordure\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-md-4 col-12\">
\t\t\t\t<img src=\"{{ asset('image/couverture/' ~ livre.couverture) }}\" alt=\"{{ livre.couverture }}\" class=\"img-fluid rounded-start\" style=\"max-width: 300px\">
\t\t\t</div>
\t\t\t<div class=\"col-md-7 col-12 text-md-start text-center mt-3\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<h2 class=\"card-title\">{{ livre.titre }}</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tapartment
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ livre.editeur }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tfit_page
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ livre.format }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-3 mb-5\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tlanguage
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ livre.langue }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tpayments
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{livre.prix|number_format(2)}}
\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tauto_stories
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ livre.type.nomType }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-3 mb-5\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined det\">
\t\t\t\t\t\t\t\t\tformat_ink_highlighter
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{ livre.genre.nomGenre }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{{ livre.resume }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}

", "base/detail.html.twig", "/var/www/html/Minerva3/templates/base/detail.html.twig");
    }
}
