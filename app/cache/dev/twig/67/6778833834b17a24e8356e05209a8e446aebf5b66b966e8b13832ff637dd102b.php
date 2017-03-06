<?php

/* KaliopExoBundle:Core:index.html.twig */
class __TwigTemplate_be1b780e26f1461aac6635103046cbc30b189641b19bf510f241df8e9bba6c1c extends Twig_Template
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
        $__internal_3d9d09b3e82066443b521b9622a1dbbbf93169c6a3164d0c50d049cb7f384b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9d09b3e82066443b521b9622a1dbbbf93169c6a3164d0c50d049cb7f384b52->enter($__internal_3d9d09b3e82066443b521b9622a1dbbbf93169c6a3164d0c50d049cb7f384b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1 style=\"width:100%;text-align:center;font-size:160px;\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["hello"] ?? $this->getContext($context, "hello")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["world"] ?? $this->getContext($context, "world")), "html", null, true);
        echo " !</h1>
    </body>
</html>
";
        
        $__internal_3d9d09b3e82066443b521b9622a1dbbbf93169c6a3164d0c50d049cb7f384b52->leave($__internal_3d9d09b3e82066443b521b9622a1dbbbf93169c6a3164d0c50d049cb7f384b52_prof);

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
        return array (  30 => 7,  22 => 1,);
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
        <title>Home</title>
    </head>
    <body>
        <h1 style=\"width:100%;text-align:center;font-size:160px;\">{{ hello }} {{ world }} !</h1>
    </body>
</html>
", "KaliopExoBundle:Core:index.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Core/index.html.twig");
    }
}
