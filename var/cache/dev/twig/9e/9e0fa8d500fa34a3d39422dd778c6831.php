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

/* base.html.twig */
class __TwigTemplate_fd28cb1ff4f040d3e9f800fa93e4a047 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "\t\t<title>
\t\t\t";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "\t\t</title>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>

\t\t<header>
\t\t\t<nav class=\"navbar\">
\t\t\t\t<div class=\"container-fluid \">
\t\t\t\t\t<div class=\"col-0 mr-2\">
\t\t\t\t\t\t<a class=\"navbar-brand \" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/logo_minerva.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"80px\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"searchContainer\" data-search-url=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"nav-item mx-auto\">
\t\t\t\t\t\t\t\t<form id=\"searchForm\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<input id=\"searchInput\" class=\"form-control me-sm-2 col-12\" type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t<button id=\"searchButton\" class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Chercher</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"nav-item col-0 ml-2\">
\t\t\t\t\t\t<a class=\"text-secondary\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-square\" style=\"font-size: 2rem;\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t";
        // line 50
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 51
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("monPanier");
            echo "\">Panier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 66
            echo "\t\t\t\t\t\t\t\t";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MOD"))) {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 68
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
                echo "\">Ajout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 71
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutDeGenre");
                echo "\">Ajout de genres</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 74
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutDeType");
                echo "\">Ajout de types</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "email", [], "any", false, false, false, 79), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</body>
</html></header><nav class=\"navbar navbar-expand-lg\" id=\"categorie\">
<div class=\"container-fluid\">
\t<div class=\"collapse navbar-collapse\">
\t\t<ul class=\"navbar-nav me-auto ms-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classique");
        echo "\">Littérature Classique</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("roman");
        echo "\">Romans</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("BD");
        echo "\">BD</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga");
        echo "\">Manga</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("poesie");
        echo "\">Poésie</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mythe");
        echo "\">Mythe et Légendes</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></nav>";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 115
            echo "<h2 class=\"alert alerte text-center mt-4 mb-4\" role=\"alert\">
\t";
            // line 116
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
</h2>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        $this->displayBlock('body', $context, $blocks);
        echo "<footer>
<div class=\"container-fluid py-4\">
\t<div class=\"row g-0\">
\t\t<div class=\"col-md-4 col-12 offset-md-1 \">
\t\t\t<div class=\"row g-0 mb-3\">
\t\t\t\t<h3>A propos
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"row g-0\">
\t\t\t\tImaginé en 2023 par Tristan Provost et mis en service durant cette même année, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMinerva est une librairie fictive imaginée dans le but de créer un site de commerce pour le cour de monsieur Legales.<br>
\t\t\t\tChez Minerva retrouvez des centaines (?) de livres adaptés à tous les âges et tous les goûts.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQue vous soyez plutôt science fiction ou fantasy, roman policier ou bandes dessinées Minerva aura de quoi satisfaire vos envies de lecture.
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 offset-md-2 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">FAQ</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentionslegales");
        echo "\">Mentions légales</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Conditions générales d'utilisations
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charte");
        echo "\">
\t\t\t\t\tVos données personnelles
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div></footer>";
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "</body></html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t\t<!-- Bootstrap CSS -->
\t\t\t<link href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\"/>
\t\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/carrouselCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/checkbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Minerva -
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/carrousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/checkbox.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  399 => 158,  395 => 157,  392 => 156,  382 => 155,  364 => 117,  344 => 17,  332 => 14,  328 => 13,  324 => 12,  318 => 8,  308 => 7,  296 => 158,  294 => 155,  285 => 149,  278 => 145,  272 => 142,  264 => 137,  258 => 134,  238 => 117,  230 => 116,  227 => 115,  223 => 114,  216 => 110,  210 => 107,  204 => 104,  198 => 101,  192 => 98,  186 => 95,  173 => 84,  165 => 79,  161 => 78,  158 => 77,  152 => 74,  146 => 71,  140 => 68,  137 => 67,  134 => 66,  129 => 61,  126 => 60,  119 => 56,  112 => 52,  109 => 51,  107 => 50,  87 => 33,  80 => 29,  76 => 28,  65 => 20,  62 => 19,  60 => 17,  57 => 16,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t{% block stylesheets %}
\t\t\t<!-- Bootstrap CSS -->
\t\t\t<link href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\"/>
\t\t\t<link href=\"{{asset('style/stylesheet.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('style/carrouselCSS.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('style/checkbox.css') }}\" rel=\"stylesheet\">
\t\t{% endblock %}
\t\t<title>
\t\t\t{% block title %}Minerva -
\t\t\t{% endblock %}
\t\t</title>
\t\t<script src=\"{{ asset('js/main.js') }}\"></script>
\t</head>
\t<body>

\t\t<header>
\t\t\t<nav class=\"navbar\">
\t\t\t\t<div class=\"container-fluid \">
\t\t\t\t\t<div class=\"col-0 mr-2\">
\t\t\t\t\t\t<a class=\"navbar-brand \" href=\"{{path('index')}}\">
\t\t\t\t\t\t\t<img src=\"{{ asset('image/logo_minerva.png')}}\" alt=\"logo\" width=\"80px\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"searchContainer\" data-search-url=\"{{ path('search') }}\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"nav-item mx-auto\">
\t\t\t\t\t\t\t\t<form id=\"searchForm\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<input id=\"searchInput\" class=\"form-control me-sm-2 col-12\" type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t<button id=\"searchButton\" class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Chercher</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"nav-item col-0 ml-2\">
\t\t\t\t\t\t<a class=\"text-secondary\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-square\" style=\"font-size: 2rem;\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t{% if not is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"{{path('app_login')}}\">Se connecter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"{{path('app_register')}}\">S'inscrire
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('monPanier')}}\">Panier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{#<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('mes-favorie')}}\">Favorie</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>#}
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MOD')%}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('ajout')}}\">Ajout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('ajoutDeGenre')}}\">Ajout de genres</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('ajoutDeType')}}\">Ajout de types</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t\t{{app.user.email}}
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</body>
</html></header><nav class=\"navbar navbar-expand-lg\" id=\"categorie\">
<div class=\"container-fluid\">
\t<div class=\"collapse navbar-collapse\">
\t\t<ul class=\"navbar-nav me-auto ms-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"{{path('classique')}}\">Littérature Classique</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"{{path('roman')}}\">Romans</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"{{path('BD')}}\">BD</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"{{path('manga')}}\">Manga</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"{{path('poesie')}}\">Poésie</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"{{path('mythe')}}\">Mythe et Légendes</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></nav>{% for message in app.flashes('notice') %}
<h2 class=\"alert alerte text-center mt-4 mb-4\" role=\"alert\">
\t{{ message }}
</h2>{% endfor %}{% block body %}{% endblock %}<footer>
<div class=\"container-fluid py-4\">
\t<div class=\"row g-0\">
\t\t<div class=\"col-md-4 col-12 offset-md-1 \">
\t\t\t<div class=\"row g-0 mb-3\">
\t\t\t\t<h3>A propos
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"row g-0\">
\t\t\t\tImaginé en 2023 par Tristan Provost et mis en service durant cette même année, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMinerva est une librairie fictive imaginée dans le but de créer un site de commerce pour le cour de monsieur Legales.<br>
\t\t\t\tChez Minerva retrouvez des centaines (?) de livres adaptés à tous les âges et tous les goûts.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQue vous soyez plutôt science fiction ou fantasy, roman policier ou bandes dessinées Minerva aura de quoi satisfaire vos envies de lecture.
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 offset-md-2 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('contact')}}\">Nous contacter</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('faq')}}\">FAQ</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('mentionslegales')}}\">Mentions légales</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('cgu')}}\">Conditions générales d'utilisations
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('charte')}}\">
\t\t\t\t\tVos données personnelles
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div></footer>{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
<script src=\"{{asset('js/carrousel.js') }}\"></script>
<script src=\"{{asset('js/checkbox.js') }}\"></script>{% endblock %}</body></html>

", "base.html.twig", "/var/www/html/Minerva3/templates/base.html.twig");
    }
}
