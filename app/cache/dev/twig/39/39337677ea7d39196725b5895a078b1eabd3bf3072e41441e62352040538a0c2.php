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
        $__internal_0ff7e92d904910c2fd4936ab9761a29fe1731c6375b983aaf94d0a11e404bc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff7e92d904910c2fd4936ab9761a29fe1731c6375b983aaf94d0a11e404bc40->enter($__internal_0ff7e92d904910c2fd4936ab9761a29fe1731c6375b983aaf94d0a11e404bc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ff7e92d904910c2fd4936ab9761a29fe1731c6375b983aaf94d0a11e404bc40->leave($__internal_0ff7e92d904910c2fd4936ab9761a29fe1731c6375b983aaf94d0a11e404bc40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd9776501563ad14581c2ac936a304e4299a1fe82b7cce9079ce1dfeb7e00460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9776501563ad14581c2ac936a304e4299a1fe82b7cce9079ce1dfeb7e00460->enter($__internal_bd9776501563ad14581c2ac936a304e4299a1fe82b7cce9079ce1dfeb7e00460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bd9776501563ad14581c2ac936a304e4299a1fe82b7cce9079ce1dfeb7e00460->leave($__internal_bd9776501563ad14581c2ac936a304e4299a1fe82b7cce9079ce1dfeb7e00460_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_66f8c872afa213374abdc210c04979e2545ec5f8a5cc305b1e3073d1f2f70e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f8c872afa213374abdc210c04979e2545ec5f8a5cc305b1e3073d1f2f70e15->enter($__internal_66f8c872afa213374abdc210c04979e2545ec5f8a5cc305b1e3073d1f2f70e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_66f8c872afa213374abdc210c04979e2545ec5f8a5cc305b1e3073d1f2f70e15->leave($__internal_66f8c872afa213374abdc210c04979e2545ec5f8a5cc305b1e3073d1f2f70e15_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3fbbea9693a5894163cd950fc221f28bd4d12520c8a2d7e9ca7da4820a6eadb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fbbea9693a5894163cd950fc221f28bd4d12520c8a2d7e9ca7da4820a6eadb->enter($__internal_b3fbbea9693a5894163cd950fc221f28bd4d12520c8a2d7e9ca7da4820a6eadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b3fbbea9693a5894163cd950fc221f28bd4d12520c8a2d7e9ca7da4820a6eadb->leave($__internal_b3fbbea9693a5894163cd950fc221f28bd4d12520c8a2d7e9ca7da4820a6eadb_prof);

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
