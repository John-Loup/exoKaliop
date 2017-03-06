<?php

/* KaliopExoBundle:Core:add.html.twig */
class __TwigTemplate_605cfca4de317e8d09f585484909a6a9aeddb4a8cffff6b471a8f12ee95e95ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KaliopExoBundle::b_layout.html.twig", "KaliopExoBundle:Core:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'b_body' => array($this, 'block_b_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KaliopExoBundle::b_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56ed6eeec444fd58004a81e973d5f805e3ff649b7a77283cc67c3d53e52981f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ed6eeec444fd58004a81e973d5f805e3ff649b7a77283cc67c3d53e52981f8->enter($__internal_56ed6eeec444fd58004a81e973d5f805e3ff649b7a77283cc67c3d53e52981f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56ed6eeec444fd58004a81e973d5f805e3ff649b7a77283cc67c3d53e52981f8->leave($__internal_56ed6eeec444fd58004a81e973d5f805e3ff649b7a77283cc67c3d53e52981f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c6a0e7d6e4361b67eb1f6d7cf65e12c7ca1b9479c00d4ed66360cd11222026b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6a0e7d6e4361b67eb1f6d7cf65e12c7ca1b9479c00d4ed66360cd11222026b->enter($__internal_9c6a0e7d6e4361b67eb1f6d7cf65e12c7ca1b9479c00d4ed66360cd11222026b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter un article - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_9c6a0e7d6e4361b67eb1f6d7cf65e12c7ca1b9479c00d4ed66360cd11222026b->leave($__internal_9c6a0e7d6e4361b67eb1f6d7cf65e12c7ca1b9479c00d4ed66360cd11222026b_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_14cebe048de1abb1062ce63823e9695f584c0ad28c81e2ab8c9c9322cd410d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14cebe048de1abb1062ce63823e9695f584c0ad28c81e2ab8c9c9322cd410d0a->enter($__internal_14cebe048de1abb1062ce63823e9695f584c0ad28c81e2ab8c9c9322cd410d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

        // line 8
        echo "    <h2>Ajouter un article</h2>

    ";
        // line 10
        echo twig_include($this->env, $context, "KaliopExoBundle:Core:form.html.twig");
        echo "

    <p>Ici viendront les inputs</p>

    <p>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_view", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            <i class=\"glyphicon glypicon-chevron-left\">Valider</i>
        </a>
    </p>
    <p>
        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_homepage");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glypicon-chevron-left\">Annuler</i>
        </a>
    </p>
";
        
        $__internal_14cebe048de1abb1062ce63823e9695f584c0ad28c81e2ab8c9c9322cd410d0a->leave($__internal_14cebe048de1abb1062ce63823e9695f584c0ad28c81e2ab8c9c9322cd410d0a_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Core:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  69 => 15,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"KaliopExoBundle::b_layout.html.twig\" %}

{%  block title %}
    Ajouter un article - {{ article.title }}
{%  endblock %}

{% block b_body %}
    <h2>Ajouter un article</h2>

    {{ include(\"KaliopExoBundle:Core:form.html.twig\") }}

    <p>Ici viendront les inputs</p>

    <p>
        <a href=\"{{ path(\"kaliop_exo_view\", {\"id\": article.id}) }}\" class=\"btn btn-primary\">
            <i class=\"glyphicon glypicon-chevron-left\">Valider</i>
        </a>
    </p>
    <p>
        <a href=\"{{ path(\"kaliop_exo_homepage\") }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glypicon-chevron-left\">Annuler</i>
        </a>
    </p>
{% endblock %}", "KaliopExoBundle:Core:add.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Core/add.html.twig");
    }
}
