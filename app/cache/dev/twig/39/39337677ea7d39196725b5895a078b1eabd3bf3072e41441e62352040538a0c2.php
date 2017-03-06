<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d165a32648a6cbfed2ebe454f46be6918d7fbf8cdd44f78fba1b187031108187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7a0dc00bc1ff35d64a91aa35c69c162d1a69ddd4334c362ef5bd41b216712429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0dc00bc1ff35d64a91aa35c69c162d1a69ddd4334c362ef5bd41b216712429->enter($__internal_7a0dc00bc1ff35d64a91aa35c69c162d1a69ddd4334c362ef5bd41b216712429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a0dc00bc1ff35d64a91aa35c69c162d1a69ddd4334c362ef5bd41b216712429->leave($__internal_7a0dc00bc1ff35d64a91aa35c69c162d1a69ddd4334c362ef5bd41b216712429_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb8128bb9a2424c8616fa6d115e3db2ce0dab3ee2839207710c466e3a079778e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8128bb9a2424c8616fa6d115e3db2ce0dab3ee2839207710c466e3a079778e->enter($__internal_bb8128bb9a2424c8616fa6d115e3db2ce0dab3ee2839207710c466e3a079778e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bb8128bb9a2424c8616fa6d115e3db2ce0dab3ee2839207710c466e3a079778e->leave($__internal_bb8128bb9a2424c8616fa6d115e3db2ce0dab3ee2839207710c466e3a079778e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8996e21a142c78758a44cc3858f47b3a79ba334dac2658f5995d3891c5c78f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8996e21a142c78758a44cc3858f47b3a79ba334dac2658f5995d3891c5c78f78->enter($__internal_8996e21a142c78758a44cc3858f47b3a79ba334dac2658f5995d3891c5c78f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8996e21a142c78758a44cc3858f47b3a79ba334dac2658f5995d3891c5c78f78->leave($__internal_8996e21a142c78758a44cc3858f47b3a79ba334dac2658f5995d3891c5c78f78_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_29b047a458571e77ec6cb26f7f339e2bfef2ecbf5d8758dafa2e12fa6fd4cfd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b047a458571e77ec6cb26f7f339e2bfef2ecbf5d8758dafa2e12fa6fd4cfd1->enter($__internal_29b047a458571e77ec6cb26f7f339e2bfef2ecbf5d8758dafa2e12fa6fd4cfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_29b047a458571e77ec6cb26f7f339e2bfef2ecbf5d8758dafa2e12fa6fd4cfd1->leave($__internal_29b047a458571e77ec6cb26f7f339e2bfef2ecbf5d8758dafa2e12fa6fd4cfd1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/exoKaliop/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
