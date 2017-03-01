<?php

/* KaliopExoBundle:Advert:index.html.twig */
class __TwigTemplate_a37f8cc0dadb174307b1691009267ad55a2a1f38561ce6e9a7a1b45ce87a6d1a extends Twig_Template
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
        $__internal_26aa6ce1a64a54166fb07e40a7154a6c843de046784ca9e8ee5dcc6aeb46dd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26aa6ce1a64a54166fb07e40a7154a6c843de046784ca9e8ee5dcc6aeb46dd7e->enter($__internal_26aa6ce1a64a54166fb07e40a7154a6c843de046784ca9e8ee5dcc6aeb46dd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Advert:index.html.twig"));

        // line 1
        echo "<html>
    <head>
    </head>
    <body>
        <h1 style=\"width:100%;text-align:center;font-size:160px;\">Hello ";
        // line 5
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>
    </body>
</html>
";
        
        $__internal_26aa6ce1a64a54166fb07e40a7154a6c843de046784ca9e8ee5dcc6aeb46dd7e->leave($__internal_26aa6ce1a64a54166fb07e40a7154a6c843de046784ca9e8ee5dcc6aeb46dd7e_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
    </head>
    <body>
        <h1 style=\"width:100%;text-align:center;font-size:160px;\">Hello {{ nom }} !</h1>
    </body>
</html>
", "KaliopExoBundle:Advert:index.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Advert/index.html.twig");
    }
}
