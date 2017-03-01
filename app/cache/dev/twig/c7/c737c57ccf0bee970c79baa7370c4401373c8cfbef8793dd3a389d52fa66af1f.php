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
        $__internal_f44a79ca69ba1902ba90164e7113d364a25313254b65b65d2539f8dbac9a0903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44a79ca69ba1902ba90164e7113d364a25313254b65b65d2539f8dbac9a0903->enter($__internal_f44a79ca69ba1902ba90164e7113d364a25313254b65b65d2539f8dbac9a0903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f44a79ca69ba1902ba90164e7113d364a25313254b65b65d2539f8dbac9a0903->leave($__internal_f44a79ca69ba1902ba90164e7113d364a25313254b65b65d2539f8dbac9a0903_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d13407247d2a6777aa68e61c05078f83250501d022a1a5bfe88b7b125d0646a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13407247d2a6777aa68e61c05078f83250501d022a1a5bfe88b7b125d0646a6->enter($__internal_d13407247d2a6777aa68e61c05078f83250501d022a1a5bfe88b7b125d0646a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d13407247d2a6777aa68e61c05078f83250501d022a1a5bfe88b7b125d0646a6->leave($__internal_d13407247d2a6777aa68e61c05078f83250501d022a1a5bfe88b7b125d0646a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_115cb9d505e64764f596b7055b4070fb7b9d2a1dba56d95683363db7c73a717d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115cb9d505e64764f596b7055b4070fb7b9d2a1dba56d95683363db7c73a717d->enter($__internal_115cb9d505e64764f596b7055b4070fb7b9d2a1dba56d95683363db7c73a717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_115cb9d505e64764f596b7055b4070fb7b9d2a1dba56d95683363db7c73a717d->leave($__internal_115cb9d505e64764f596b7055b4070fb7b9d2a1dba56d95683363db7c73a717d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebace68093839aabab7312fa505b8247a97a2ff89fb98844cad515e03c2be056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebace68093839aabab7312fa505b8247a97a2ff89fb98844cad515e03c2be056->enter($__internal_ebace68093839aabab7312fa505b8247a97a2ff89fb98844cad515e03c2be056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ebace68093839aabab7312fa505b8247a97a2ff89fb98844cad515e03c2be056->leave($__internal_ebace68093839aabab7312fa505b8247a97a2ff89fb98844cad515e03c2be056_prof);

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
