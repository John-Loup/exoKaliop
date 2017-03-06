<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dd481e52e793bb5ab0843763278ecdc8761ee79454b97a416e142aa4490838bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2086bf058ce2c3aa13fd0abfacb5d67179570584d2fd49cd587b5f4d0d49b81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2086bf058ce2c3aa13fd0abfacb5d67179570584d2fd49cd587b5f4d0d49b81f->enter($__internal_2086bf058ce2c3aa13fd0abfacb5d67179570584d2fd49cd587b5f4d0d49b81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2086bf058ce2c3aa13fd0abfacb5d67179570584d2fd49cd587b5f4d0d49b81f->leave($__internal_2086bf058ce2c3aa13fd0abfacb5d67179570584d2fd49cd587b5f4d0d49b81f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d4ea61303927b1f862af918efdc56a5d86bb16f5f6ec1b75036550b67e6d5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4ea61303927b1f862af918efdc56a5d86bb16f5f6ec1b75036550b67e6d5c2->enter($__internal_0d4ea61303927b1f862af918efdc56a5d86bb16f5f6ec1b75036550b67e6d5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0d4ea61303927b1f862af918efdc56a5d86bb16f5f6ec1b75036550b67e6d5c2->leave($__internal_0d4ea61303927b1f862af918efdc56a5d86bb16f5f6ec1b75036550b67e6d5c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a365f5690aa6993ce98a12c5edb3c454dff51f35f80765d4088802fdbee4ac1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a365f5690aa6993ce98a12c5edb3c454dff51f35f80765d4088802fdbee4ac1a->enter($__internal_a365f5690aa6993ce98a12c5edb3c454dff51f35f80765d4088802fdbee4ac1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a365f5690aa6993ce98a12c5edb3c454dff51f35f80765d4088802fdbee4ac1a->leave($__internal_a365f5690aa6993ce98a12c5edb3c454dff51f35f80765d4088802fdbee4ac1a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0e3a25546935108ed2ad67e8a6ff022d117fa562e0d1abb0fccd727bf1902bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e3a25546935108ed2ad67e8a6ff022d117fa562e0d1abb0fccd727bf1902bb->enter($__internal_f0e3a25546935108ed2ad67e8a6ff022d117fa562e0d1abb0fccd727bf1902bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0e3a25546935108ed2ad67e8a6ff022d117fa562e0d1abb0fccd727bf1902bb->leave($__internal_f0e3a25546935108ed2ad67e8a6ff022d117fa562e0d1abb0fccd727bf1902bb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/exoKaliop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
