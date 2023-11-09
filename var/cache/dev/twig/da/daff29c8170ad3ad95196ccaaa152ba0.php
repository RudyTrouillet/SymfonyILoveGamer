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

/* home/results.html.twig */
class __TwigTemplate_d5e9cb2aed5fcaa3c8321953f1c12276 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/results.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " 
<h1 class=\"text-center\">Game Results </h1>
<h2 class=\"text-center fst-italic\">for : \" ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["searchedGame"]) || array_key_exists("searchedGame", $context) ? $context["searchedGame"] : (function () { throw new RuntimeError('Variable "searchedGame" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " \"</h2>

<div class=\"container mt-5\">
    <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videoGames"]) || array_key_exists("videoGames", $context) ? $context["videoGames"] : (function () { throw new RuntimeError('Variable "videoGames" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["videoGame"]) {
            // line 11
            echo "            <div class=\"col-3 mt-3\">
                <div class=\"card w-100\">
                    <img src =\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["videoGame"], "background_image", [], "array", false, false, false, 13), "html", null, true);
            echo "\" height=\"150px\" alt=\"GameImage\">
                    <div class=\"card-body\">
                        <h5 class=\"game-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["videoGame"], "name", [], "array", false, false, false, 15), "html", null, true);
            echo "</h5>
                        <a href=\"#\" class =\"btn btn-primary\">Add Game</a>
                    </div>                
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videoGame'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "     </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 21,  92 => 15,  87 => 13,  83 => 11,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
 
<h1 class=\"text-center\">Game Results </h1>
<h2 class=\"text-center fst-italic\">for : \" {{searchedGame}} \"</h2>

<div class=\"container mt-5\">
    <div class=\"row\">
        {%for videoGame in videoGames%}
            <div class=\"col-3 mt-3\">
                <div class=\"card w-100\">
                    <img src =\"{{videoGame['background_image']}}\" height=\"150px\" alt=\"GameImage\">
                    <div class=\"card-body\">
                        <h5 class=\"game-title\">{{videoGame['name']}}</h5>
                        <a href=\"#\" class =\"btn btn-primary\">Add Game</a>
                    </div>                
                </div>
            </div>
        {%endfor%}
     </div>
</div>
{% endblock %}
", "home/results.html.twig", "C:\\laragon\\www\\SymfonyILoveGamer\\templates\\home\\results.html.twig");
    }
}
