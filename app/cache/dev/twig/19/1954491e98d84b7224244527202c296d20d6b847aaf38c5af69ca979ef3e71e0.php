<?php

/* KaliopExoBundle:View:articles.html.twig */
class __TwigTemplate_bb10c52a47f22efca19687bf4ae6d0adcc7f35fe78a7fd57aae99972385ed7eb extends Twig_Template
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
        $__internal_20e10c0d9ffab7acf1b94812d2e73c2f80ed82cbe5a435ea15ac201c44f72a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e10c0d9ffab7acf1b94812d2e73c2f80ed82cbe5a435ea15ac201c44f72a86->enter($__internal_20e10c0d9ffab7acf1b94812d2e73c2f80ed82cbe5a435ea15ac201c44f72a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:View:articles.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Article ";
        // line 4
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "</title>
    </head>
    <body>
    <h1>Affichage d'une annonce</h1>

    <p>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "    <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </p>

    <p>
        Ici nous pourrons lire l'annonce ayant comme id : ";
        // line 16
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "<br />
        Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
    </p>
    </body>
</html>
";
        
        $__internal_20e10c0d9ffab7acf1b94812d2e73c2f80ed82cbe5a435ea15ac201c44f72a86->leave($__internal_20e10c0d9ffab7acf1b94812d2e73c2f80ed82cbe5a435ea15ac201c44f72a86_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:View:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  49 => 13,  40 => 11,  36 => 10,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>Article {{ id }}</title>
    </head>
    <body>
    <h1>Affichage d'une annonce</h1>

    <p>
        {% for message in app.session.flashbag.get('info') %}
    <p>Message flash : {{ message }}</p>
    {% endfor %}
    </p>

    <p>
        Ici nous pourrons lire l'annonce ayant comme id : {{ id }}<br />
        Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
    </p>
    </body>
</html>
", "KaliopExoBundle:View:articles.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/View/articles.html.twig");
    }
}
