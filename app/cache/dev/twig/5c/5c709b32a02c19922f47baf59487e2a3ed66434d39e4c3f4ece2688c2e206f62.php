<?php

/* KaliopExoBundle:Core:menu.html.twig */
class __TwigTemplate_16d46223aec9a579a7abd10b454c0af65e7d915323bb1fbd8a4e6aec3d11d4ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a501a696f84479e36d3dd60691d36a09c8959efdf1bf3f207face67c7975f3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a501a696f84479e36d3dd60691d36a09c8959efdf1bf3f207face67c7975f3e4->enter($__internal_a501a696f84479e36d3dd60691d36a09c8959efdf1bf3f207face67c7975f3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listArticles"] ?? $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "        <li>
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
        
        $__internal_a501a696f84479e36d3dd60691d36a09c8959efdf1bf3f207face67c7975f3e4->leave($__internal_a501a696f84479e36d3dd60691d36a09c8959efdf1bf3f207face67c7975f3e4_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Core:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills nav-stacked\">
    {% for article in listArticles %}
        <li>
            <a href=\"{{ path(\"kaliop_exo_view\", {\"id\": article.id}) }}\">{{ article.title }}</a>
        </li>
    {% endfor %}
</ul>", "KaliopExoBundle:Core:menu.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Core/menu.html.twig");
    }
}
