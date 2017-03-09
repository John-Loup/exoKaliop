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
        $__internal_d21a0d548ba22b153186a7f5a7f7ca52b3351285f45efe2da4031377acdf6804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21a0d548ba22b153186a7f5a7f7ca52b3351285f45efe2da4031377acdf6804->enter($__internal_d21a0d548ba22b153186a7f5a7f7ca52b3351285f45efe2da4031377acdf6804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d21a0d548ba22b153186a7f5a7f7ca52b3351285f45efe2da4031377acdf6804->leave($__internal_d21a0d548ba22b153186a7f5a7f7ca52b3351285f45efe2da4031377acdf6804_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f54eac34c7a4462294a752638d5888c7e1c2ce41a830df313a189230db74f9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54eac34c7a4462294a752638d5888c7e1c2ce41a830df313a189230db74f9c6->enter($__internal_f54eac34c7a4462294a752638d5888c7e1c2ce41a830df313a189230db74f9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'un article - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_f54eac34c7a4462294a752638d5888c7e1c2ce41a830df313a189230db74f9c6->leave($__internal_f54eac34c7a4462294a752638d5888c7e1c2ce41a830df313a189230db74f9c6_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_c553cd71ae66d0f22ec7aed58dbf27fb9353e2225ef4c8ff97c45b8a2a3e01a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c553cd71ae66d0f22ec7aed58dbf27fb9353e2225ef4c8ff97c45b8a2a3e01a3->enter($__internal_c553cd71ae66d0f22ec7aed58dbf27fb9353e2225ef4c8ff97c45b8a2a3e01a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

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
            echo "\" style=\"width:400px; height:200px;\">
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
        
        $__internal_c553cd71ae66d0f22ec7aed58dbf27fb9353e2225ef4c8ff97c45b8a2a3e01a3->leave($__internal_c553cd71ae66d0f22ec7aed58dbf27fb9353e2225ef4c8ff97c45b8a2a3e01a3_prof);

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
        <img src=\"{{ article.image.url }}\" alt=\"{{ article.image.alt }}\" style=\"width:400px; height:200px;\">
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
