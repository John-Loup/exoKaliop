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
        $__internal_cd66f29c5cbd9e2e9bba833ce675737bd5bef1604c915f31b9f6aee5d00bcb59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd66f29c5cbd9e2e9bba833ce675737bd5bef1604c915f31b9f6aee5d00bcb59->enter($__internal_cd66f29c5cbd9e2e9bba833ce675737bd5bef1604c915f31b9f6aee5d00bcb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd66f29c5cbd9e2e9bba833ce675737bd5bef1604c915f31b9f6aee5d00bcb59->leave($__internal_cd66f29c5cbd9e2e9bba833ce675737bd5bef1604c915f31b9f6aee5d00bcb59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7376a1ab69fbb27b88db73296ec75f37e63e0b7b384080eed5ffc4f1ade4b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7376a1ab69fbb27b88db73296ec75f37e63e0b7b384080eed5ffc4f1ade4b75->enter($__internal_b7376a1ab69fbb27b88db73296ec75f37e63e0b7b384080eed5ffc4f1ade4b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter un article - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_b7376a1ab69fbb27b88db73296ec75f37e63e0b7b384080eed5ffc4f1ade4b75->leave($__internal_b7376a1ab69fbb27b88db73296ec75f37e63e0b7b384080eed5ffc4f1ade4b75_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_2d6211102a61a6bbc378e99867bb975eda3f97c90f66b7c6a21b516c3ca93e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6211102a61a6bbc378e99867bb975eda3f97c90f66b7c6a21b516c3ca93e80->enter($__internal_2d6211102a61a6bbc378e99867bb975eda3f97c90f66b7c6a21b516c3ca93e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

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
        
        $__internal_2d6211102a61a6bbc378e99867bb975eda3f97c90f66b7c6a21b516c3ca93e80->leave($__internal_2d6211102a61a6bbc378e99867bb975eda3f97c90f66b7c6a21b516c3ca93e80_prof);

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
