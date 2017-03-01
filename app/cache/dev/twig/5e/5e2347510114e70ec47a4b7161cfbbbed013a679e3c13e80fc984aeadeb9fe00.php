<?php

/* base.html.twig */
class __TwigTemplate_6f3726abfca5a3dbccbd607e6e0107e0841826f5e44e5f2cde291d3cb4660840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34c5b1c5ae1d2321c0fd181f9a211873244b3c8ce16058962289fabb4a09ad71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c5b1c5ae1d2321c0fd181f9a211873244b3c8ce16058962289fabb4a09ad71->enter($__internal_34c5b1c5ae1d2321c0fd181f9a211873244b3c8ce16058962289fabb4a09ad71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_34c5b1c5ae1d2321c0fd181f9a211873244b3c8ce16058962289fabb4a09ad71->leave($__internal_34c5b1c5ae1d2321c0fd181f9a211873244b3c8ce16058962289fabb4a09ad71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7124619ee7f7a11255c62505e3e7e3dd22ff81a5cbf4c576921d24749d44903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7124619ee7f7a11255c62505e3e7e3dd22ff81a5cbf4c576921d24749d44903->enter($__internal_f7124619ee7f7a11255c62505e3e7e3dd22ff81a5cbf4c576921d24749d44903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f7124619ee7f7a11255c62505e3e7e3dd22ff81a5cbf4c576921d24749d44903->leave($__internal_f7124619ee7f7a11255c62505e3e7e3dd22ff81a5cbf4c576921d24749d44903_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dac9f932d552ba1d506194146575a9a1d5e5d0e1a27e58c15b7e9d6fa72964f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac9f932d552ba1d506194146575a9a1d5e5d0e1a27e58c15b7e9d6fa72964f6->enter($__internal_dac9f932d552ba1d506194146575a9a1d5e5d0e1a27e58c15b7e9d6fa72964f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dac9f932d552ba1d506194146575a9a1d5e5d0e1a27e58c15b7e9d6fa72964f6->leave($__internal_dac9f932d552ba1d506194146575a9a1d5e5d0e1a27e58c15b7e9d6fa72964f6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbf6237638c9a691a90f7832695f0f5e79d7d53411fca78db206b759e596c88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf6237638c9a691a90f7832695f0f5e79d7d53411fca78db206b759e596c88c->enter($__internal_cbf6237638c9a691a90f7832695f0f5e79d7d53411fca78db206b759e596c88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cbf6237638c9a691a90f7832695f0f5e79d7d53411fca78db206b759e596c88c->leave($__internal_cbf6237638c9a691a90f7832695f0f5e79d7d53411fca78db206b759e596c88c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15cc2e1e51fcc6468b0821ae9229a6b2bcbd8ddbd27ffe8bb17a2132a9a96be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cc2e1e51fcc6468b0821ae9229a6b2bcbd8ddbd27ffe8bb17a2132a9a96be1->enter($__internal_15cc2e1e51fcc6468b0821ae9229a6b2bcbd8ddbd27ffe8bb17a2132a9a96be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15cc2e1e51fcc6468b0821ae9229a6b2bcbd8ddbd27ffe8bb17a2132a9a96be1->leave($__internal_15cc2e1e51fcc6468b0821ae9229a6b2bcbd8ddbd27ffe8bb17a2132a9a96be1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/exoKaliop/app/Resources/views/base.html.twig");
    }
}
