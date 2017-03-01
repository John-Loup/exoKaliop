<?php

/* KaliopExoBundle:Default:index.html.twig */
class __TwigTemplate_7c0b5c6a72ce06c5f0c50c49695052c8e976fa22696f6d7b653a09e7a58404c5 extends Twig_Template
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
        $__internal_8e0901c90a564ba8f9c10ebb1ae2831fa1e67d46ec4cfaff4c2a49ae7c01db07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0901c90a564ba8f9c10ebb1ae2831fa1e67d46ec4cfaff4c2a49ae7c01db07->enter($__internal_8e0901c90a564ba8f9c10ebb1ae2831fa1e67d46ec4cfaff4c2a49ae7c01db07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
<h1 style=\"width:100%;text-align:center;font-size:160px;\">It's OK !</h1>
</body>
</html>
";
        
        $__internal_8e0901c90a564ba8f9c10ebb1ae2831fa1e67d46ec4cfaff4c2a49ae7c01db07->leave($__internal_8e0901c90a564ba8f9c10ebb1ae2831fa1e67d46ec4cfaff4c2a49ae7c01db07_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
<h1 style=\"width:100%;text-align:center;font-size:160px;\">It's OK !</h1>
</body>
</html>
", "KaliopExoBundle:Default:index.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Default/index.html.twig");
    }
}
