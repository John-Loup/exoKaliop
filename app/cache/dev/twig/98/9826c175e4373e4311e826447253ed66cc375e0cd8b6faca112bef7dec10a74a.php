<?php

/* KaliopExoBundle:Hello:index.html.twig */
class __TwigTemplate_51b28658887ef3cd44c422e135800823417541e85b42b71a2c20b3fc4c965d8f extends Twig_Template
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
        $__internal_c635cf170f3adfae55cb81908bffcb6797177d6b2feaecd8f2f1c9c71863df4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c635cf170f3adfae55cb81908bffcb6797177d6b2feaecd8f2f1c9c71863df4f->enter($__internal_c635cf170f3adfae55cb81908bffcb6797177d6b2feaecd8f2f1c9c71863df4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Hello:index.html.twig"));

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
        
        $__internal_c635cf170f3adfae55cb81908bffcb6797177d6b2feaecd8f2f1c9c71863df4f->leave($__internal_c635cf170f3adfae55cb81908bffcb6797177d6b2feaecd8f2f1c9c71863df4f_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Hello:index.html.twig";
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
", "KaliopExoBundle:Hello:index.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Hello/index.html.twig");
    }
}
