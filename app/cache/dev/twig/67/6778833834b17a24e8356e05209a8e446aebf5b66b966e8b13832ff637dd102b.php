<?php

/* KaliopExoBundle:Core:index.html.twig */
class __TwigTemplate_be1b780e26f1461aac6635103046cbc30b189641b19bf510f241df8e9bba6c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KaliopExoBundle::b_layout.html.twig", "KaliopExoBundle:Core:index.html.twig", 1);
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
        $__internal_aa7eeabd28d76562185518ed16bb378a75fc1fc788704630027b757d4a2d3157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7eeabd28d76562185518ed16bb378a75fc1fc788704630027b757d4a2d3157->enter($__internal_aa7eeabd28d76562185518ed16bb378a75fc1fc788704630027b757d4a2d3157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa7eeabd28d76562185518ed16bb378a75fc1fc788704630027b757d4a2d3157->leave($__internal_aa7eeabd28d76562185518ed16bb378a75fc1fc788704630027b757d4a2d3157_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48d40ff2c01cb599b5c3bcb4fd2b9e1ca3e1df8ee477fe5a6db6cf0c044ed246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d40ff2c01cb599b5c3bcb4fd2b9e1ca3e1df8ee477fe5a6db6cf0c044ed246->enter($__internal_48d40ff2c01cb599b5c3bcb4fd2b9e1ca3e1df8ee477fe5a6db6cf0c044ed246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_48d40ff2c01cb599b5c3bcb4fd2b9e1ca3e1df8ee477fe5a6db6cf0c044ed246->leave($__internal_48d40ff2c01cb599b5c3bcb4fd2b9e1ca3e1df8ee477fe5a6db6cf0c044ed246_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_de68497f52e52aabd0af01262ebef6f92e7f7b816dcb87e5036734e3ad76778d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de68497f52e52aabd0af01262ebef6f92e7f7b816dcb87e5036734e3ad76778d->enter($__internal_de68497f52e52aabd0af01262ebef6f92e7f7b816dcb87e5036734e3ad76778d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

        // line 8
        echo "    <h1>Articles</h1>
    <ul>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listArticles"] ?? $this->getContext($context, "listArticles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "            <li>
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a>
                par ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "            <li>Aucun article pour le moment</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    </ul>
";
        
        $__internal_de68497f52e52aabd0af01262ebef6f92e7f7b816dcb87e5036734e3ad76778d->leave($__internal_de68497f52e52aabd0af01262ebef6f92e7f7b816dcb87e5036734e3ad76778d_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  88 => 18,  80 => 15,  76 => 14,  70 => 13,  67 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Accueil - {{ parent() }}
{% endblock %}

{% block b_body %}
    <h1>Articles</h1>
    <ul>

        {% for article in listArticles %}
            <li>
                <a href=\"{{ path(\"kaliop_exo_view\", {\"id\": article.id}) }}\">{{ article.title }}</a>
                par {{ article.author }},
                le {{ article.date|date(\"d/m/Y\") }}
            </li>
        {% else %}
            <li>Aucun article pour le moment</li>
        {% endfor %}

    </ul>
{% endblock %}", "KaliopExoBundle:Core:index.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Core/index.html.twig");
    }
}
