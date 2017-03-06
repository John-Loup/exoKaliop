<?php

/* KaliopExoBundle:Core:view.html.twig */
class __TwigTemplate_82550e0a4c7bf80eed5d1259fed6b2b35e77ac5f992c118f1d0e3846a13e7f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KaliopExoBundle::b_layout.html.twig", "KaliopExoBundle:Core:view.html.twig", 1);
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
        $__internal_f979ddab5b7b81a41b15c69a5b75c57ceded9b39c4a10483d71b2412e7c7601a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f979ddab5b7b81a41b15c69a5b75c57ceded9b39c4a10483d71b2412e7c7601a->enter($__internal_f979ddab5b7b81a41b15c69a5b75c57ceded9b39c4a10483d71b2412e7c7601a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f979ddab5b7b81a41b15c69a5b75c57ceded9b39c4a10483d71b2412e7c7601a->leave($__internal_f979ddab5b7b81a41b15c69a5b75c57ceded9b39c4a10483d71b2412e7c7601a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da51abb098f7b1cc751488af15f000eff34fc5c028f8d23eaa1792566346639f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da51abb098f7b1cc751488af15f000eff34fc5c028f8d23eaa1792566346639f->enter($__internal_da51abb098f7b1cc751488af15f000eff34fc5c028f8d23eaa1792566346639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'un article - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_da51abb098f7b1cc751488af15f000eff34fc5c028f8d23eaa1792566346639f->leave($__internal_da51abb098f7b1cc751488af15f000eff34fc5c028f8d23eaa1792566346639f_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_cf0b34ed50c59fa09a6f0bcd7e1fb25002e2385ca028185fa8d36a741481c93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0b34ed50c59fa09a6f0bcd7e1fb25002e2385ca028185fa8d36a741481c93a->enter($__internal_cf0b34ed50c59fa09a6f0bcd7e1fb25002e2385ca028185fa8d36a741481c93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

        // line 8
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
    </div>

    <p>
        <a class=\"btn btn-default\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_homepage");
        echo "\">
            <i class=\"glyphicon glyphicon-chevron-left\"> Annuler</i>
        </a>
        <a class=\"btn btn-default\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"glyphicon glyphicon-edit\"> Modifier</i>
        </a>
    </p>
";
        
        $__internal_cf0b34ed50c59fa09a6f0bcd7e1fb25002e2385ca028185fa8d36a741481c93a->leave($__internal_cf0b34ed50c59fa09a6f0bcd7e1fb25002e2385ca028185fa8d36a741481c93a_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Core:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  77 => 16,  70 => 12,  62 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

{% block title %}
    Lecture d'un article - {{ article.title  }}
{% endblock %}

{% block b_body %}
    <h2>{{ article.title }}</h2>
    <i>Par {{ article.author }}, le {{ article.date|date(\"d/m/Y\") }}</i>

    <div class=\"well\">
        {{ article.content }}
    </div>

    <p>
        <a class=\"btn btn-default\" href=\"{{ path(\"kaliop_exo_homepage\") }}\">
            <i class=\"glyphicon glyphicon-chevron-left\"> Annuler</i>
        </a>
        <a class=\"btn btn-default\" href=\"{{ path(\"kaliop_exo_edit\", {\"id\": article.id}) }}\">
            <i class=\"glyphicon glyphicon-edit\"> Modifier</i>
        </a>
    </p>
{% endblock %}", "KaliopExoBundle:Core:view.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Core/view.html.twig");
    }
}
