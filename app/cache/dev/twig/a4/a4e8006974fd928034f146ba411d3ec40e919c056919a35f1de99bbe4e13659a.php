<?php

/* KaliopExoBundle:Home:index.html.twig */
class __TwigTemplate_c87ae23174d392aeca6a12f1140618cf28c3bf685bacf020d81831ae7a863da6 extends Twig_Template
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
        $__internal_1250e5dcfee4c6162f1ff4d508096a3b86c84118bb5812868281b7401199cf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1250e5dcfee4c6162f1ff4d508096a3b86c84118bb5812868281b7401199cf67->enter($__internal_1250e5dcfee4c6162f1ff4d508096a3b86c84118bb5812868281b7401199cf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Home:index.html.twig"));

        // line 1
        echo "<html>
    <head>
    </head>
    <body>
        <h1 style=\"width:100%;text-align:center;font-size:160px;\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["hello"] ?? $this->getContext($context, "hello")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["world"] ?? $this->getContext($context, "world")), "html", null, true);
        echo " !</h1>
    </body>
</html>
";
        
        $__internal_1250e5dcfee4c6162f1ff4d508096a3b86c84118bb5812868281b7401199cf67->leave($__internal_1250e5dcfee4c6162f1ff4d508096a3b86c84118bb5812868281b7401199cf67_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Home:index.html.twig";
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
        <h1 style=\"width:100%;text-align:center;font-size:160px;\">{{ hello }} {{ world }} !</h1>
    </body>
</html>
", "KaliopExoBundle:Home:index.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Home/index.html.twig");
    }
}
