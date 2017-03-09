<?php

/* KaliopExoBundle:Core:edit.html.twig */
class __TwigTemplate_a1065518fe72c66cffda3127531f63ce9be23684ba6a87a7bc35f872d1eaf9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KaliopExoBundle::b_layout.html.twig", "KaliopExoBundle:Core:edit.html.twig", 1);
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
        $__internal_b1d7986318690758cef789b3912d29d2275c2c193588a7913284221af18f8d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d7986318690758cef789b3912d29d2275c2c193588a7913284221af18f8d3b->enter($__internal_b1d7986318690758cef789b3912d29d2275c2c193588a7913284221af18f8d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d7986318690758cef789b3912d29d2275c2c193588a7913284221af18f8d3b->leave($__internal_b1d7986318690758cef789b3912d29d2275c2c193588a7913284221af18f8d3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd80df6c7941f7379aed2583e7bd4da617f83a29641e26013b832306955d5e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd80df6c7941f7379aed2583e7bd4da617f83a29641e26013b832306955d5e5e->enter($__internal_dd80df6c7941f7379aed2583e7bd4da617f83a29641e26013b832306955d5e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier un article - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_dd80df6c7941f7379aed2583e7bd4da617f83a29641e26013b832306955d5e5e->leave($__internal_dd80df6c7941f7379aed2583e7bd4da617f83a29641e26013b832306955d5e5e_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_9b9023f90bfa05e04a4c52a1942a6e4629d62908c3f2aa1dd8045a6ac19b626f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9023f90bfa05e04a4c52a1942a6e4629d62908c3f2aa1dd8045a6ac19b626f->enter($__internal_9b9023f90bfa05e04a4c52a1942a6e4629d62908c3f2aa1dd8045a6ac19b626f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

        // line 8
        echo "    <h2>Modifier un article</h2>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_view", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glypicon-chevron-left\">Annuler</i>
        </a>
    </p>
    <p>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_view", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glypicon-chevron-left\">Supprimer</i>
        </a>
    </p>
";
        
        $__internal_9b9023f90bfa05e04a4c52a1942a6e4629d62908c3f2aa1dd8045a6ac19b626f->leave($__internal_9b9023f90bfa05e04a4c52a1942a6e4629d62908c3f2aa1dd8045a6ac19b626f_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Core:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  77 => 20,  69 => 15,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Modifier un article - {{ article.title }}
{%  endblock %}

{% block b_body %}
    <h2>Modifier un article</h2>

    {{ include(\"KaliopExoBundle:Core:form.html.twig\") }}

    <p>Ici viendront les inputs</p>

    <p>
        <a href=\"{{ path(\"kaliop_exo_view\", {\"id\": article.id}) }}\" class=\"btn btn-primary\">
            <i class=\"glyphicon glypicon-chevron-left\">Valider</i>
        </a>
    </p>
    <p>
        <a href=\"{{ path(\"kaliop_exo_view\", {\"id\": article.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glypicon-chevron-left\">Annuler</i>
        </a>
    </p>
    <p>
        <a href=\"{{ path(\"kaliop_exo_view\", {\"id\": article.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glypicon-chevron-left\">Supprimer</i>
        </a>
    </p>
{% endblock %}", "KaliopExoBundle:Core:edit.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Core/edit.html.twig");
    }
}
