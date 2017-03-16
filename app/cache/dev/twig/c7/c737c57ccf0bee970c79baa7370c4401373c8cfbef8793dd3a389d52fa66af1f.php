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
        $__internal_c0bdcaf627a79647116b7b3457ac6c4a2e575d668dd33bfc63e1fb03944b3138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bdcaf627a79647116b7b3457ac6c4a2e575d668dd33bfc63e1fb03944b3138->enter($__internal_c0bdcaf627a79647116b7b3457ac6c4a2e575d668dd33bfc63e1fb03944b3138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0bdcaf627a79647116b7b3457ac6c4a2e575d668dd33bfc63e1fb03944b3138->leave($__internal_c0bdcaf627a79647116b7b3457ac6c4a2e575d668dd33bfc63e1fb03944b3138_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_799511816d9e0a798b669c27f537bdd0d809728501bbf1708eb7e8a85abf734b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799511816d9e0a798b669c27f537bdd0d809728501bbf1708eb7e8a85abf734b->enter($__internal_799511816d9e0a798b669c27f537bdd0d809728501bbf1708eb7e8a85abf734b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_799511816d9e0a798b669c27f537bdd0d809728501bbf1708eb7e8a85abf734b->leave($__internal_799511816d9e0a798b669c27f537bdd0d809728501bbf1708eb7e8a85abf734b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4b88fe50ff3d32855b0420d1cfeacb614370bc9127097b6ddeccad5f9ad400cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b88fe50ff3d32855b0420d1cfeacb614370bc9127097b6ddeccad5f9ad400cd->enter($__internal_4b88fe50ff3d32855b0420d1cfeacb614370bc9127097b6ddeccad5f9ad400cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b88fe50ff3d32855b0420d1cfeacb614370bc9127097b6ddeccad5f9ad400cd->leave($__internal_4b88fe50ff3d32855b0420d1cfeacb614370bc9127097b6ddeccad5f9ad400cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3f90d60dd0c091deb96df553b36c3437c02bd67dab8d4581d290cffdf3458af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f90d60dd0c091deb96df553b36c3437c02bd67dab8d4581d290cffdf3458af->enter($__internal_b3f90d60dd0c091deb96df553b36c3437c02bd67dab8d4581d290cffdf3458af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3f90d60dd0c091deb96df553b36c3437c02bd67dab8d4581d290cffdf3458af->leave($__internal_b3f90d60dd0c091deb96df553b36c3437c02bd67dab8d4581d290cffdf3458af_prof);

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
