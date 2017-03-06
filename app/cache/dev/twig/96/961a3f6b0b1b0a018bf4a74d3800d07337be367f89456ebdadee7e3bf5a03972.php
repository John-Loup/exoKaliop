<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_face0a262e1cb3e4d57762d2650b1f52b0faff592737ff0cc63dce13337dc781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f3f69e2b10030ef60645bf711cc5588912d8cc75b22476ee28e06d9608def18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3f69e2b10030ef60645bf711cc5588912d8cc75b22476ee28e06d9608def18->enter($__internal_0f3f69e2b10030ef60645bf711cc5588912d8cc75b22476ee28e06d9608def18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3f69e2b10030ef60645bf711cc5588912d8cc75b22476ee28e06d9608def18->leave($__internal_0f3f69e2b10030ef60645bf711cc5588912d8cc75b22476ee28e06d9608def18_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc9a3b8c2828c7e667f695afaf7bf94b14acfc8adaf7346e2d1ef5caae05e596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9a3b8c2828c7e667f695afaf7bf94b14acfc8adaf7346e2d1ef5caae05e596->enter($__internal_bc9a3b8c2828c7e667f695afaf7bf94b14acfc8adaf7346e2d1ef5caae05e596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bc9a3b8c2828c7e667f695afaf7bf94b14acfc8adaf7346e2d1ef5caae05e596->leave($__internal_bc9a3b8c2828c7e667f695afaf7bf94b14acfc8adaf7346e2d1ef5caae05e596_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea6bb3a835a4f4075624000c2bc63224b873256cb2b4cfd7346488989720ed98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6bb3a835a4f4075624000c2bc63224b873256cb2b4cfd7346488989720ed98->enter($__internal_ea6bb3a835a4f4075624000c2bc63224b873256cb2b4cfd7346488989720ed98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ea6bb3a835a4f4075624000c2bc63224b873256cb2b4cfd7346488989720ed98->leave($__internal_ea6bb3a835a4f4075624000c2bc63224b873256cb2b4cfd7346488989720ed98_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/html/exoKaliop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
