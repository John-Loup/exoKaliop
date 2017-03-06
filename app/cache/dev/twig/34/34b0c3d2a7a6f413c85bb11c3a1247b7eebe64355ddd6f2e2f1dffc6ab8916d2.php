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
        $__internal_a029c56ff90f207542bd06bd8aad2df05ba5e9beffb493dba88d09229aaecd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a029c56ff90f207542bd06bd8aad2df05ba5e9beffb493dba88d09229aaecd64->enter($__internal_a029c56ff90f207542bd06bd8aad2df05ba5e9beffb493dba88d09229aaecd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a029c56ff90f207542bd06bd8aad2df05ba5e9beffb493dba88d09229aaecd64->leave($__internal_a029c56ff90f207542bd06bd8aad2df05ba5e9beffb493dba88d09229aaecd64_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1560e648237f2fd9d62e994d8dc074c3f57f44c312a49174fff8571333a228b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1560e648237f2fd9d62e994d8dc074c3f57f44c312a49174fff8571333a228b7->enter($__internal_1560e648237f2fd9d62e994d8dc074c3f57f44c312a49174fff8571333a228b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier un article - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_1560e648237f2fd9d62e994d8dc074c3f57f44c312a49174fff8571333a228b7->leave($__internal_1560e648237f2fd9d62e994d8dc074c3f57f44c312a49174fff8571333a228b7_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_cefe14eb6a3289c47cba4237df343f4c5f78d02814007e1159fb81d7bf8c389a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefe14eb6a3289c47cba4237df343f4c5f78d02814007e1159fb81d7bf8c389a->enter($__internal_cefe14eb6a3289c47cba4237df343f4c5f78d02814007e1159fb81d7bf8c389a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

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
        
        $__internal_cefe14eb6a3289c47cba4237df343f4c5f78d02814007e1159fb81d7bf8c389a->leave($__internal_cefe14eb6a3289c47cba4237df343f4c5f78d02814007e1159fb81d7bf8c389a_prof);

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
