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
        $__internal_44e7f7c0d988eb9b9b71f6e0ba84d1c37c9a019b0f595b3fdca8ca9726349097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e7f7c0d988eb9b9b71f6e0ba84d1c37c9a019b0f595b3fdca8ca9726349097->enter($__internal_44e7f7c0d988eb9b9b71f6e0ba84d1c37c9a019b0f595b3fdca8ca9726349097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e7f7c0d988eb9b9b71f6e0ba84d1c37c9a019b0f595b3fdca8ca9726349097->leave($__internal_44e7f7c0d988eb9b9b71f6e0ba84d1c37c9a019b0f595b3fdca8ca9726349097_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_662175038e8135a59fa33400d229ed4ea5089685ba9aa8df6dcb37c31ce78f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662175038e8135a59fa33400d229ed4ea5089685ba9aa8df6dcb37c31ce78f32->enter($__internal_662175038e8135a59fa33400d229ed4ea5089685ba9aa8df6dcb37c31ce78f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_662175038e8135a59fa33400d229ed4ea5089685ba9aa8df6dcb37c31ce78f32->leave($__internal_662175038e8135a59fa33400d229ed4ea5089685ba9aa8df6dcb37c31ce78f32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b47a8a8392d113912252a7aabcf57f7389254370fb6079b7dc3d8e99a18301dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47a8a8392d113912252a7aabcf57f7389254370fb6079b7dc3d8e99a18301dc->enter($__internal_b47a8a8392d113912252a7aabcf57f7389254370fb6079b7dc3d8e99a18301dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b47a8a8392d113912252a7aabcf57f7389254370fb6079b7dc3d8e99a18301dc->leave($__internal_b47a8a8392d113912252a7aabcf57f7389254370fb6079b7dc3d8e99a18301dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b4c4d8158d229c41e202daa64b140ea0366c53b8414e619ee24d4d3976d7038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4c4d8158d229c41e202daa64b140ea0366c53b8414e619ee24d4d3976d7038->enter($__internal_4b4c4d8158d229c41e202daa64b140ea0366c53b8414e619ee24d4d3976d7038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b4c4d8158d229c41e202daa64b140ea0366c53b8414e619ee24d4d3976d7038->leave($__internal_4b4c4d8158d229c41e202daa64b140ea0366c53b8414e619ee24d4d3976d7038_prof);

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
