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
        $__internal_f157a2db38d6a31d24eae65bcbddf5b328963637d784f904a6adb0446432fc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f157a2db38d6a31d24eae65bcbddf5b328963637d784f904a6adb0446432fc75->enter($__internal_f157a2db38d6a31d24eae65bcbddf5b328963637d784f904a6adb0446432fc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f157a2db38d6a31d24eae65bcbddf5b328963637d784f904a6adb0446432fc75->leave($__internal_f157a2db38d6a31d24eae65bcbddf5b328963637d784f904a6adb0446432fc75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82a35063bea7b80a3d1235366de48f9e28f66258eaf0cf48350d867b5403f2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a35063bea7b80a3d1235366de48f9e28f66258eaf0cf48350d867b5403f2d1->enter($__internal_82a35063bea7b80a3d1235366de48f9e28f66258eaf0cf48350d867b5403f2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter un article - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_82a35063bea7b80a3d1235366de48f9e28f66258eaf0cf48350d867b5403f2d1->leave($__internal_82a35063bea7b80a3d1235366de48f9e28f66258eaf0cf48350d867b5403f2d1_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_5e3704bd21962df14bf31cc11789bc821b12305eec91437a00245a14dc5a2992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3704bd21962df14bf31cc11789bc821b12305eec91437a00245a14dc5a2992->enter($__internal_5e3704bd21962df14bf31cc11789bc821b12305eec91437a00245a14dc5a2992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

        // line 8
        echo "    <h2>Ajouter un article</h2>

    <div class=\"well\">
        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'article"));
        echo "

            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group t-area\">
            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'article"));
        echo "
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'row');
        echo "

        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), 'row');
        echo "

        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "confirm", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

        ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_5e3704bd21962df14bf31cc11789bc821b12305eec91437a00245a14dc5a2992->leave($__internal_5e3704bd21962df14bf31cc11789bc821b12305eec91437a00245a14dc5a2992_prof);

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
        return array (  128 => 41,  123 => 39,  118 => 37,  113 => 35,  108 => 33,  101 => 29,  96 => 27,  92 => 26,  84 => 21,  78 => 18,  73 => 16,  67 => 13,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

    <div class=\"well\">
        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

        {{ form_errors(form) }}

        <div class=\"form-group\">
            {{ form_label(form.title, \"Titre de l'article\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}

            {{ form_errors(form.title) }}

            <div class=\"col-sm-4\">
                {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        <div class=\"form-group t-area\">
            {{ form_label(form.content, \"Contenu de l'article\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            {{ form_errors(form.title) }}
            <div class=\"col-sm-4\">
                {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        {{ form_row(form.date) }}

        {{ form_row(form.author) }}

        {{ form_rest(form) }}

        {{ form_widget(form.confirm, {'attr': {'class': 'btn btn-primary'}}) }}

        {{ form_end(form) }}

    </div>
{% endblock %}", "KaliopExoBundle:Core:add.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Core/add.html.twig");
    }
}
