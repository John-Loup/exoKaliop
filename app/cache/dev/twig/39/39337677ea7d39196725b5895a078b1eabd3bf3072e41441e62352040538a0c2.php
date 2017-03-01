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
        $__internal_c708b9dcef668a4cc53714596de1c084f51cd5cafc78639a2160bccb2201fd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c708b9dcef668a4cc53714596de1c084f51cd5cafc78639a2160bccb2201fd4b->enter($__internal_c708b9dcef668a4cc53714596de1c084f51cd5cafc78639a2160bccb2201fd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c708b9dcef668a4cc53714596de1c084f51cd5cafc78639a2160bccb2201fd4b->leave($__internal_c708b9dcef668a4cc53714596de1c084f51cd5cafc78639a2160bccb2201fd4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f0dc7fb7eb529ee5ac435f226fc6c0b514a5a1e35d6d91f48a692deabde2683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0dc7fb7eb529ee5ac435f226fc6c0b514a5a1e35d6d91f48a692deabde2683->enter($__internal_0f0dc7fb7eb529ee5ac435f226fc6c0b514a5a1e35d6d91f48a692deabde2683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f0dc7fb7eb529ee5ac435f226fc6c0b514a5a1e35d6d91f48a692deabde2683->leave($__internal_0f0dc7fb7eb529ee5ac435f226fc6c0b514a5a1e35d6d91f48a692deabde2683_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_27cc601fef14a9d91b1fa157c6d8ff6cd4e28fec5a972f2c25e2749615300787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cc601fef14a9d91b1fa157c6d8ff6cd4e28fec5a972f2c25e2749615300787->enter($__internal_27cc601fef14a9d91b1fa157c6d8ff6cd4e28fec5a972f2c25e2749615300787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_27cc601fef14a9d91b1fa157c6d8ff6cd4e28fec5a972f2c25e2749615300787->leave($__internal_27cc601fef14a9d91b1fa157c6d8ff6cd4e28fec5a972f2c25e2749615300787_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e435d9f10bc0851c62ae195e9daebee3bcd953b413a1a2063dd62529bdefadbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e435d9f10bc0851c62ae195e9daebee3bcd953b413a1a2063dd62529bdefadbb->enter($__internal_e435d9f10bc0851c62ae195e9daebee3bcd953b413a1a2063dd62529bdefadbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e435d9f10bc0851c62ae195e9daebee3bcd953b413a1a2063dd62529bdefadbb->leave($__internal_e435d9f10bc0851c62ae195e9daebee3bcd953b413a1a2063dd62529bdefadbb_prof);

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
