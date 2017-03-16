<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_face0a262e1cb3e4d57762d2650b1f52b0faff592737ff0cc63dce13337dc781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fb65200a774e516c5927b3143f7f16d91ee7af1136ee8e1a89261335edfe7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb65200a774e516c5927b3143f7f16d91ee7af1136ee8e1a89261335edfe7a6->enter($__internal_1fb65200a774e516c5927b3143f7f16d91ee7af1136ee8e1a89261335edfe7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb65200a774e516c5927b3143f7f16d91ee7af1136ee8e1a89261335edfe7a6->leave($__internal_1fb65200a774e516c5927b3143f7f16d91ee7af1136ee8e1a89261335edfe7a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99253341881bff8f291ec2f41eed0d0dba720f74a4c6df37bc7403fa53861f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99253341881bff8f291ec2f41eed0d0dba720f74a4c6df37bc7403fa53861f43->enter($__internal_99253341881bff8f291ec2f41eed0d0dba720f74a4c6df37bc7403fa53861f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_99253341881bff8f291ec2f41eed0d0dba720f74a4c6df37bc7403fa53861f43->leave($__internal_99253341881bff8f291ec2f41eed0d0dba720f74a4c6df37bc7403fa53861f43_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fa6171c2b56061dbae2ff7a407943103ddb068789281bf04807b52750dea148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa6171c2b56061dbae2ff7a407943103ddb068789281bf04807b52750dea148->enter($__internal_4fa6171c2b56061dbae2ff7a407943103ddb068789281bf04807b52750dea148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4fa6171c2b56061dbae2ff7a407943103ddb068789281bf04807b52750dea148->leave($__internal_4fa6171c2b56061dbae2ff7a407943103ddb068789281bf04807b52750dea148_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/html/exoKaliop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
