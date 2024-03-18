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

/* types/manga.html.twig */
class __TwigTemplate_3d5c9aba87a72c5ed2ab1c4971fc47a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "types/manga.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "types/manga.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "types/manga.html.twig", 1);
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
        echo "Manga
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
        echo "    <div class=\"d-flex flex-wrap justify-content-center\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["livre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 10
            echo "            <div class=\"card m-2\" style=\"max-width: 540px;\">
                <div class=\"row g-0\">
                    <div class=\"col-md-4\">
                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/couverture/" . twig_get_attribute($this->env, $this->source, $context["livre"], "couverture", [], "any", false, false, false, 13))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "couverture", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\">
                        <p class=\"card-text mt-4 ms-2\">
                            <small class=\"text-muted\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "editeur", [], "any", false, false, false, 15), "html", null, true);
            echo "</small>
                        </p>
                        <p class=\"card-text ms-2\">
                            <small class=\"text-muted\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "format", [], "any", false, false, false, 18), "html", null, true);
            echo "</small>
                        </p>
                        <p class=\"card-text ms-2\">
                            <strong>";
            // line 21
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "prix", [], "any", false, false, false, 21), 2), "html", null, true);
            echo "<sup>€</sup></strong>
                        </p>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 26), "html", null, true);
            echo "</h4>
                            <p class=\"card-text mt-3\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "auteur", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                            <p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "resume", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer\">
                    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
                // line 34
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
                        <span class=\"material-symbols-outlined\">open_in_new</span>
                    </a>
                    <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
                        <span>ACHETER</span>
                    </a>
                    ";
            }
            // line 41
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "types/manga.html.twig";
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
        return array (  171 => 44,  163 => 41,  156 => 37,  149 => 34,  147 => 33,  139 => 28,  135 => 27,  131 => 26,  123 => 21,  117 => 18,  111 => 15,  104 => 13,  99 => 10,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}Manga
{% endblock %}

{% block body %}
    <div class=\"d-flex flex-wrap justify-content-center\">
        {% for livre in livre %}
            <div class=\"card m-2\" style=\"max-width: 540px;\">
                <div class=\"row g-0\">
                    <div class=\"col-md-4\">
                        <img src=\"{{ asset('image/couverture/' ~ livre.couverture) }}\" alt=\"{{ livre.couverture }}\" class=\"img-fluid rounded-start\">
                        <p class=\"card-text mt-4 ms-2\">
                            <small class=\"text-muted\">{{ livre.editeur }}</small>
                        </p>
                        <p class=\"card-text ms-2\">
                            <small class=\"text-muted\">{{ livre.format }}</small>
                        </p>
                        <p class=\"card-text ms-2\">
                            <strong>{{ livre.prix|number_format(2) }}<sup>€</sup></strong>
                        </p>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">{{ livre.titre }}</h4>
                            <p class=\"card-text mt-3\">{{ livre.auteur }}</p>
                            <p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">{{ livre.resume }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer\">
                    {% if app.user %}
                    <a href=\"{{ path('detail', {'id': livre.id}) }}\" class=\"btn btn-secondary\">
                        <span class=\"material-symbols-outlined\">open_in_new</span>
                    </a>
                    <a href=\"{{ path('ajoutPanier', {'id': livre.id}) }}\" class=\"btn btn-secondary\">
                        <span>ACHETER</span>
                    </a>
                    {% endif %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}", "types/manga.html.twig", "/var/www/html/Minerva3/templates/types/manga.html.twig");
    }
}
