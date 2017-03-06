<?php

/* KaliopExoBundle:Core:form.html.twig */
class __TwigTemplate_3097f769a829c183b18c61d7cd2715bff177446f5ba8586ac5ed7343babc9186 extends Twig_Template
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
        $__internal_e7027f70494fead174a1e7dd17841b41bd013e334eca0600c52ba4c43eef50f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7027f70494fead174a1e7dd17841b41bd013e334eca0600c52ba4c43eef50f0->enter($__internal_e7027f70494fead174a1e7dd17841b41bd013e334eca0600c52ba4c43eef50f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle:Core:form.html.twig"));

        // line 1
        echo "<h3>Formulaire de création d'article</h3>

<div class=\"well\">
    Ici se trouvera le formulaire
</div>";
        
        $__internal_e7027f70494fead174a1e7dd17841b41bd013e334eca0600c52ba4c43eef50f0->leave($__internal_e7027f70494fead174a1e7dd17841b41bd013e334eca0600c52ba4c43eef50f0_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle:Core:form.html.twig";
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
        return new Twig_Source("<h3>Formulaire de création d'article</h3>

<div class=\"well\">
    Ici se trouvera le formulaire
</div>", "KaliopExoBundle:Core:form.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/Core/form.html.twig");
    }
}
