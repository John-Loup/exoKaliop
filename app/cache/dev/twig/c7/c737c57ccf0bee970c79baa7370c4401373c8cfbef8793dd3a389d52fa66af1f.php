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
        $__internal_f2312dc910bcadef766aaa16e9abea9c2cf3111362ef2149f215db23baa2dc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2312dc910bcadef766aaa16e9abea9c2cf3111362ef2149f215db23baa2dc3c->enter($__internal_f2312dc910bcadef766aaa16e9abea9c2cf3111362ef2149f215db23baa2dc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2312dc910bcadef766aaa16e9abea9c2cf3111362ef2149f215db23baa2dc3c->leave($__internal_f2312dc910bcadef766aaa16e9abea9c2cf3111362ef2149f215db23baa2dc3c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6ed8d98d7d6cf3b14a2c87bee66acf622ab6619d83de2f33a1b69ac6f9883b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ed8d98d7d6cf3b14a2c87bee66acf622ab6619d83de2f33a1b69ac6f9883b3->enter($__internal_b6ed8d98d7d6cf3b14a2c87bee66acf622ab6619d83de2f33a1b69ac6f9883b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6ed8d98d7d6cf3b14a2c87bee66acf622ab6619d83de2f33a1b69ac6f9883b3->leave($__internal_b6ed8d98d7d6cf3b14a2c87bee66acf622ab6619d83de2f33a1b69ac6f9883b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_170619729b8aacc10fdc8784dbb8373bc1d0e4301732a49277d2ca10d615cbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170619729b8aacc10fdc8784dbb8373bc1d0e4301732a49277d2ca10d615cbfc->enter($__internal_170619729b8aacc10fdc8784dbb8373bc1d0e4301732a49277d2ca10d615cbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_170619729b8aacc10fdc8784dbb8373bc1d0e4301732a49277d2ca10d615cbfc->leave($__internal_170619729b8aacc10fdc8784dbb8373bc1d0e4301732a49277d2ca10d615cbfc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c92cdab167fd477e62e500b39abeef09f71c4071281eaecd3d3926637ee17de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c92cdab167fd477e62e500b39abeef09f71c4071281eaecd3d3926637ee17de->enter($__internal_3c92cdab167fd477e62e500b39abeef09f71c4071281eaecd3d3926637ee17de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c92cdab167fd477e62e500b39abeef09f71c4071281eaecd3d3926637ee17de->leave($__internal_3c92cdab167fd477e62e500b39abeef09f71c4071281eaecd3d3926637ee17de_prof);

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
