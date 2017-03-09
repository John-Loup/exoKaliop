<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fbda8f85c1e16cdda46ba5c2f9bc4ebc85e68c983c0f5f9f3eeac47f0bdc0efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ad78e9eec37013ddbdaf22c638e4d3d7a8f57d669fbd7362b1df1d8613e8e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad78e9eec37013ddbdaf22c638e4d3d7a8f57d669fbd7362b1df1d8613e8e50->enter($__internal_2ad78e9eec37013ddbdaf22c638e4d3d7a8f57d669fbd7362b1df1d8613e8e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad78e9eec37013ddbdaf22c638e4d3d7a8f57d669fbd7362b1df1d8613e8e50->leave($__internal_2ad78e9eec37013ddbdaf22c638e4d3d7a8f57d669fbd7362b1df1d8613e8e50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6eb8541895184d542ddc794ac474ce35c023a089593735fe45f678fb0ca5efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6eb8541895184d542ddc794ac474ce35c023a089593735fe45f678fb0ca5efa->enter($__internal_d6eb8541895184d542ddc794ac474ce35c023a089593735fe45f678fb0ca5efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d6eb8541895184d542ddc794ac474ce35c023a089593735fe45f678fb0ca5efa->leave($__internal_d6eb8541895184d542ddc794ac474ce35c023a089593735fe45f678fb0ca5efa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53141a0633c7413d8a1382b04ab021b2d78b60dba852debd02cb3e8a19cab7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53141a0633c7413d8a1382b04ab021b2d78b60dba852debd02cb3e8a19cab7f1->enter($__internal_53141a0633c7413d8a1382b04ab021b2d78b60dba852debd02cb3e8a19cab7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_53141a0633c7413d8a1382b04ab021b2d78b60dba852debd02cb3e8a19cab7f1->leave($__internal_53141a0633c7413d8a1382b04ab021b2d78b60dba852debd02cb3e8a19cab7f1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4eb7fd221830763fac03cfe6a892bfc588ac79ee019a465651b2f630d4f7b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4eb7fd221830763fac03cfe6a892bfc588ac79ee019a465651b2f630d4f7b08->enter($__internal_e4eb7fd221830763fac03cfe6a892bfc588ac79ee019a465651b2f630d4f7b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e4eb7fd221830763fac03cfe6a892bfc588ac79ee019a465651b2f630d4f7b08->leave($__internal_e4eb7fd221830763fac03cfe6a892bfc588ac79ee019a465651b2f630d4f7b08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/exoKaliop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
