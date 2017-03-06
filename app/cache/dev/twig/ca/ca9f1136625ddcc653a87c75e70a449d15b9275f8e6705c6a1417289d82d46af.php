<?php

/* KaliopExoBundle:View:view.html.twig */
class __TwigTemplate_9e8077ee9397fafc76cd312e8f0553afb7ac9bdee83910012cb8f53bf6594a5b extends Twig_Template
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
        $__internal_535b5cd1550aeef3a1cda2f7ef156841e75c654079bee85cb290c82263367087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535b5cd1550aeef3a1cda2f7ef156841e75c654079bee85cb290c82263367087->enter($__internal_535b5cd1550aeef3a1cda2f7ef156841e75c654079bee85cb290c82263367087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:View:view.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
<h1 style=\"width:100%;text-align:center;font-size:160px;\">Vous consultez l'article : ";
        // line 5
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo " !</h1>
</body>
</html>
";
        
        $__internal_535b5cd1550aeef3a1cda2f7ef156841e75c654079bee85cb290c82263367087->leave($__internal_535b5cd1550aeef3a1cda2f7ef156841e75c654079bee85cb290c82263367087_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:View:view.html.twig";
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
<h1 style=\"width:100%;text-align:center;font-size:160px;\">Vous consultez l'article : {{ id }} !</h1>
</body>
</html>
", "KaliopExoBundle:View:view.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/View/view.html.twig");
    }
}
