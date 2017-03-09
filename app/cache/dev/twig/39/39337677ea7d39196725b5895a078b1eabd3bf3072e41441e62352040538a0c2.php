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
        $__internal_5c1c9ed6ad9d098aefef3ea3abee14eacc75d011b32087597668855029f3b3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1c9ed6ad9d098aefef3ea3abee14eacc75d011b32087597668855029f3b3c1->enter($__internal_5c1c9ed6ad9d098aefef3ea3abee14eacc75d011b32087597668855029f3b3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1c9ed6ad9d098aefef3ea3abee14eacc75d011b32087597668855029f3b3c1->leave($__internal_5c1c9ed6ad9d098aefef3ea3abee14eacc75d011b32087597668855029f3b3c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c2636aff84d116f44236f37ac01e4f9b9aec084fbb3a14615e5891fbdb1b640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2636aff84d116f44236f37ac01e4f9b9aec084fbb3a14615e5891fbdb1b640->enter($__internal_8c2636aff84d116f44236f37ac01e4f9b9aec084fbb3a14615e5891fbdb1b640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8c2636aff84d116f44236f37ac01e4f9b9aec084fbb3a14615e5891fbdb1b640->leave($__internal_8c2636aff84d116f44236f37ac01e4f9b9aec084fbb3a14615e5891fbdb1b640_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0b0525e4c376431b33453132437ca1a04f90d1c6da8ca86ab5a3a56881c6ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b0525e4c376431b33453132437ca1a04f90d1c6da8ca86ab5a3a56881c6ffc->enter($__internal_f0b0525e4c376431b33453132437ca1a04f90d1c6da8ca86ab5a3a56881c6ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f0b0525e4c376431b33453132437ca1a04f90d1c6da8ca86ab5a3a56881c6ffc->leave($__internal_f0b0525e4c376431b33453132437ca1a04f90d1c6da8ca86ab5a3a56881c6ffc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_06b673da776fc38549ad4b3541884d8f035c75383da7cd033c8883e34711f02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b673da776fc38549ad4b3541884d8f035c75383da7cd033c8883e34711f02f->enter($__internal_06b673da776fc38549ad4b3541884d8f035c75383da7cd033c8883e34711f02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_06b673da776fc38549ad4b3541884d8f035c75383da7cd033c8883e34711f02f->leave($__internal_06b673da776fc38549ad4b3541884d8f035c75383da7cd033c8883e34711f02f_prof);

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
