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

/* main/index.html.twig */
class __TwigTemplate_7a0b21b51188400779f4460c7ac45ef7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"exchange\">
    <div class=\"container\">
        <div class=\"exchange__inner\">
            <div class=\"exchange__board\">
                <div class=\"exchange__coin--img\"></div>
                <h1 class=\"exchange__heading\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "chart_name", [], "array", false, false, false, 9), "html", null, true);
        echo "</h1>
                <div id=\"exchange__update\" class=\"exchange__update\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "update_time", [], "array", false, false, false, 10), "html", null, true);
        echo "</div>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "currencies", [], "array", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 12
            echo "                    <div class=\"exchange__price--row\">
                        <div class=\"exchange__flag\">";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol", [], "array", false, false, false, 13);
            echo "</div>
                        <div class=\"exchange__currency--info\">
                            <div class=\"exchange__currency\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "array", false, false, false, 15), "html", null, true);
            echo "</div>
                            <div class=\"exchange__description\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "description", [], "array", false, false, false, 16), "html", null, true);
            echo "</div>
                        </div>
                        <div id=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "array", false, false, false, 18), "html", null, true);
            echo "\" class=\"exchange__rate\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "rate_float", [], "array", false, false, false, 18), "html", null, true);
            echo "</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                <p class=\"exchsnge__disclaimer\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "disclaimer", [], "array", false, false, false, 21), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  95 => 18,  90 => 16,  86 => 15,  81 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"exchange\">
    <div class=\"container\">
        <div class=\"exchange__inner\">
            <div class=\"exchange__board\">
                <div class=\"exchange__coin--img\"></div>
                <h1 class=\"exchange__heading\">{{ data['chart_name'] }}</h1>
                <div id=\"exchange__update\" class=\"exchange__update\">{{ data['update_time'] }}</div>
                {% for currency in data['currencies'] %}
                    <div class=\"exchange__price--row\">
                        <div class=\"exchange__flag\">{{ currency['symbol']|raw }}</div>
                        <div class=\"exchange__currency--info\">
                            <div class=\"exchange__currency\">{{ currency['code'] }}</div>
                            <div class=\"exchange__description\">{{ currency['description'] }}</div>
                        </div>
                        <div id=\"{{ currency['code'] }}\" class=\"exchange__rate\">{{ currency['rate_float'] }}</div>
                    </div>
                {% endfor %}
                <p class=\"exchsnge__disclaimer\">{{ data['disclaimer'] }}</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "main/index.html.twig", "/var/www/templates/main/index.html.twig");
    }
}
