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

/* game_library/index.html.twig */
class __TwigTemplate_0ae8748d7e79ba0a841437cbd38c9101 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game_library/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game_library/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game_library/index.html.twig", 1);
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
        echo "<h1 class=\"text-center\">My Library </h1>

<div class=\"container mt-5\">
    <div class=\"row\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videoGames"]) || array_key_exists("videoGames", $context) ? $context["videoGames"] : (function () { throw new RuntimeError('Variable "videoGames" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["videoGame"]) {
            // line 9
            echo "            ";
            // line 10
            echo "            <div class=\"col-3 mt-3\">
                <div class=\"card w-100\">
                    <div class=\"card-body\">
                        <img src =";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["videoGame"], "backgroundImage", [], "any", false, false, false, 13), "html", null, true);
            echo " height=\"150px\"=  alt=\"GameImage\">
                        <h5 class=\"game-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["videoGame"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
                        <h5 class=\"game-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["videoGame"], "released", [], "any", false, false, false, 15), "d-m-Y"), "html", null, true);
            echo "</h5>
                        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_rem", ["id" => twig_get_attribute($this->env, $this->source, $context["videoGame"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" class =\"btn btn-danger\">Remove Game</a>
                        ";
            // line 18
            echo "
                    </div>                
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videoGame'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "     </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game_library/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  101 => 18,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  80 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h1 class=\"text-center\">My Library </h1>

<div class=\"container mt-5\">
    <div class=\"row\">
        {% for videoGame in videoGames %}
            {# {{dump(videoGame)}} #}
            <div class=\"col-3 mt-3\">
                <div class=\"card w-100\">
                    <div class=\"card-body\">
                        <img src ={{ videoGame.backgroundImage }} height=\"150px\"=  alt=\"GameImage\">
                        <h5 class=\"game-title\">{{videoGame.name}}</h5>
                        <h5 class=\"game-title\">{{videoGame.released|date('d-m-Y')}}</h5>
                        <a href=\"{{ path('game_rem', {'id': videoGame.id}) }}\" class =\"btn btn-danger\">Remove Game</a>
                        {# <a href=\"{{ path('game_add', {'id': videoGame['id']}) }}\"  class =\"btn btn-primary\">Add Game</a> #}

                    </div>                
                </div>
            </div>
        {% endfor %}
     </div>
</div>

{% endblock %}
", "game_library/index.html.twig", "C:\\laragon\\www\\SymfonyILoveGamer\\templates\\game_library\\index.html.twig");
    }
}
