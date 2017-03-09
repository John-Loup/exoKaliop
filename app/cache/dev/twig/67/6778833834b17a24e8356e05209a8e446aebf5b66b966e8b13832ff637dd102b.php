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
        $__internal_bf3a269c56fed5c27d1c63847195c5b94b2d6a4d9c616d9b13c6dd9f966e47a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3a269c56fed5c27d1c63847195c5b94b2d6a4d9c616d9b13c6dd9f966e47a0->enter($__internal_bf3a269c56fed5c27d1c63847195c5b94b2d6a4d9c616d9b13c6dd9f966e47a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf3a269c56fed5c27d1c63847195c5b94b2d6a4d9c616d9b13c6dd9f966e47a0->leave($__internal_bf3a269c56fed5c27d1c63847195c5b94b2d6a4d9c616d9b13c6dd9f966e47a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e899d7b2e225d56965340c9fbbc905df6f1ce2f1eb76a1b64aa6475369a27ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e899d7b2e225d56965340c9fbbc905df6f1ce2f1eb76a1b64aa6475369a27ca->enter($__internal_0e899d7b2e225d56965340c9fbbc905df6f1ce2f1eb76a1b64aa6475369a27ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0e899d7b2e225d56965340c9fbbc905df6f1ce2f1eb76a1b64aa6475369a27ca->leave($__internal_0e899d7b2e225d56965340c9fbbc905df6f1ce2f1eb76a1b64aa6475369a27ca_prof);

    }

    // line 7
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_073449398e1c7f569841cc9ead8856092cc89d6aa7dd357e959dd8d5a6977de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073449398e1c7f569841cc9ead8856092cc89d6aa7dd357e959dd8d5a6977de4->enter($__internal_073449398e1c7f569841cc9ead8856092cc89d6aa7dd357e959dd8d5a6977de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

        // line 8
        echo "    <h1>Articles</h1>
    <hr>
    <h2>Liste des articles</h2>
    <ul>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listArticles"] ?? $this->getContext($context, "listArticles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "            <li>
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a>
                par ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "            <li>Aucun article pour le moment</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
";
        
        $__internal_073449398e1c7f569841cc9ead8856092cc89d6aa7dd357e959dd8d5a6977de4->leave($__internal_073449398e1c7f569841cc9ead8856092cc89d6aa7dd357e959dd8d5a6977de4_prof);

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
        return array (  96 => 21,  89 => 19,  81 => 16,  77 => 15,  71 => 14,  68 => 13,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    <hr>
    <h2>Liste des articles</h2>
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
