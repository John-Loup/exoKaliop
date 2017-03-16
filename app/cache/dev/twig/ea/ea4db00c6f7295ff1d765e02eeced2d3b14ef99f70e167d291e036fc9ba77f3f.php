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
        $__internal_1fc09b7403bf839327f06f22e19e724ada1d88f3240abdd1a224a9c172c6a0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc09b7403bf839327f06f22e19e724ada1d88f3240abdd1a224a9c172c6a0c6->enter($__internal_1fc09b7403bf839327f06f22e19e724ada1d88f3240abdd1a224a9c172c6a0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc09b7403bf839327f06f22e19e724ada1d88f3240abdd1a224a9c172c6a0c6->leave($__internal_1fc09b7403bf839327f06f22e19e724ada1d88f3240abdd1a224a9c172c6a0c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5040645191ad2eb7cbde12409cd51dfcdb278db6b668def93ba80e3971b01d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5040645191ad2eb7cbde12409cd51dfcdb278db6b668def93ba80e3971b01d24->enter($__internal_5040645191ad2eb7cbde12409cd51dfcdb278db6b668def93ba80e3971b01d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'un article - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_5040645191ad2eb7cbde12409cd51dfcdb278db6b668def93ba80e3971b01d24->leave($__internal_5040645191ad2eb7cbde12409cd51dfcdb278db6b668def93ba80e3971b01d24_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_61504c0c69fe7fc816da766cf0949469348b6de0c12177bfd16aa0ecc650318d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61504c0c69fe7fc816da766cf0949469348b6de0c12177bfd16aa0ecc650318d->enter($__internal_61504c0c69fe7fc816da766cf0949469348b6de0c12177bfd16aa0ecc650318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

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

    ";
        // line 11
        if ( !(null === $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()))) {
            // line 12
            echo "        <br>
        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\" style=\"width:600px; height:340px; margin: 40px 0 40px 120px;\">
    ";
        }
        // line 15
        echo "
    <div class=\"well\">
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
    </div>

    <p>
        <a class=\"btn btn-default\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_homepage");
        echo "\">
            <i class=\"glyphicon glyphicon-chevron-left\"> Annuler</i>
        </a>
        <a class=\"btn btn-default\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"glyphicon glyphicon-edit\"> Modifier</i>
        </a>
    </p>
";
        
        $__internal_61504c0c69fe7fc816da766cf0949469348b6de0c12177bfd16aa0ecc650318d->leave($__internal_61504c0c69fe7fc816da766cf0949469348b6de0c12177bfd16aa0ecc650318d_prof);

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
        return array (  98 => 24,  92 => 21,  85 => 17,  81 => 15,  74 => 13,  71 => 12,  69 => 11,  62 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

    {% if article.image is not null %}
        <br>
        <img src=\"{{ article.image.url }}\" alt=\"{{ article.image.alt }}\" style=\"width:600px; height:340px; margin: 40px 0 40px 120px;\">
    {% endif %}

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
