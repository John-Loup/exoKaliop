<?php

/* KaliopExoBundle::b_layout.html.twig */
class __TwigTemplate_53dbf4e3b02b5b2a58554e3e0fae718185753e962179654951f969a7b766523a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'b_body' => array($this, 'block_b_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24afe9503b5e221156f85171e2e17bb0403e56991c44e1bec8b101c0af656235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24afe9503b5e221156f85171e2e17bb0403e56991c44e1bec8b101c0af656235->enter($__internal_24afe9503b5e221156f85171e2e17bb0403e56991c44e1bec8b101c0af656235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle::b_layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"publisher\" content=\"John-Loup PAUTARD\">
    <title>
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    <style>
        div#header {
            text-align: center;
        }
        a.btn-primary-outline {
            border: 1px solid #0D72B2;
            margin-top: 20px;
        }
        footer p {
            text-align: center;
        }
    </style>
</head>
<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>La communauté de l'anneau</h1>
        <h2>Blog officiel</h2>
        <p>
            <a class=\"btn btn-primary-outline btn-lg\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_add");
        echo "\">
                Ajouter un article
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Menu</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_add");
        echo "\">Ajouter un article</a></li>
            </ul>
        </div>
        <div id=\"content\" class=\"col-md-9\">

            ";
        // line 54
        $this->displayBlock('b_body', $context, $blocks);
        // line 56
        echo "
        </div>
    </div>

    <hr>

    <footer>
        <p>The Ring Agency © ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    </footer>
</div>

";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "
</body>
</html>";
        
        $__internal_24afe9503b5e221156f85171e2e17bb0403e56991c44e1bec8b101c0af656235->leave($__internal_24afe9503b5e221156f85171e2e17bb0403e56991c44e1bec8b101c0af656235_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bb223514df647165005192fc34bb3f93d6ccbeac52db20b60d735d389d872f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb223514df647165005192fc34bb3f93d6ccbeac52db20b60d735d389d872f3->enter($__internal_1bb223514df647165005192fc34bb3f93d6ccbeac52db20b60d735d389d872f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRUD";
        
        $__internal_1bb223514df647165005192fc34bb3f93d6ccbeac52db20b60d735d389d872f3->leave($__internal_1bb223514df647165005192fc34bb3f93d6ccbeac52db20b60d735d389d872f3_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_126d06f40a5dc3ddeabec7e6e9d4e67bededf6469e863e9ed41f92ee6448efac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126d06f40a5dc3ddeabec7e6e9d4e67bededf6469e863e9ed41f92ee6448efac->enter($__internal_126d06f40a5dc3ddeabec7e6e9d4e67bededf6469e863e9ed41f92ee6448efac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\"
              href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
              crossorigin=\"anonymous\"
        >
    ";
        
        $__internal_126d06f40a5dc3ddeabec7e6e9d4e67bededf6469e863e9ed41f92ee6448efac->leave($__internal_126d06f40a5dc3ddeabec7e6e9d4e67bededf6469e863e9ed41f92ee6448efac_prof);

    }

    // line 54
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_639a19f18e2f059e673f15c600ded4072fff580bed0889415707537484537507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639a19f18e2f059e673f15c600ded4072fff580bed0889415707537484537507->enter($__internal_639a19f18e2f059e673f15c600ded4072fff580bed0889415707537484537507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

        // line 55
        echo "            ";
        
        $__internal_639a19f18e2f059e673f15c600ded4072fff580bed0889415707537484537507->leave($__internal_639a19f18e2f059e673f15c600ded4072fff580bed0889415707537484537507_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_584067f86b76b456e3ab56328a9f65ca6bd01d78ebfce7a80b0e8dfed68182aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584067f86b76b456e3ab56328a9f65ca6bd01d78ebfce7a80b0e8dfed68182aa->enter($__internal_584067f86b76b456e3ab56328a9f65ca6bd01d78ebfce7a80b0e8dfed68182aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
            crossorigin=\"anonymous\"></script>
";
        
        $__internal_584067f86b76b456e3ab56328a9f65ca6bd01d78ebfce7a80b0e8dfed68182aa->leave($__internal_584067f86b76b456e3ab56328a9f65ca6bd01d78ebfce7a80b0e8dfed68182aa_prof);

    }

    public function getTemplateName()
    {
        return "KaliopExoBundle::b_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 68,  162 => 67,  155 => 55,  149 => 54,  137 => 12,  131 => 11,  119 => 8,  110 => 73,  108 => 67,  101 => 63,  92 => 56,  90 => 54,  82 => 49,  78 => 48,  65 => 38,  43 => 18,  41 => 11,  37 => 9,  35 => 8,  26 => 1,);
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
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"publisher\" content=\"John-Loup PAUTARD\">
    <title>
        {% block title %}CRUD{% endblock %}
    </title>

    {% block stylesheets %}
        <link rel=\"stylesheet\"
              href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
              crossorigin=\"anonymous\"
        >
    {% endblock %}

    <style>
        div#header {
            text-align: center;
        }
        a.btn-primary-outline {
            border: 1px solid #0D72B2;
            margin-top: 20px;
        }
        footer p {
            text-align: center;
        }
    </style>
</head>
<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>La communauté de l'anneau</h1>
        <h2>Blog officiel</h2>
        <p>
            <a class=\"btn btn-primary-outline btn-lg\" href=\"{{ path(\"kaliop_exo_add\") }}\">
                Ajouter un article
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Menu</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"{{ path(\"kaliop_exo_homepage\") }}\">Accueil</a></li>
                <li><a href=\"{{ path(\"kaliop_exo_add\") }}\">Ajouter un article</a></li>
            </ul>
        </div>
        <div id=\"content\" class=\"col-md-9\">

            {% block b_body %}
            {% endblock %}

        </div>
    </div>

    <hr>

    <footer>
        <p>The Ring Agency © {{ 'now'|date('Y') }}</p>
    </footer>
</div>

{% block javascripts %}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
            crossorigin=\"anonymous\"></script>
{% endblock %}

</body>
</html>", "KaliopExoBundle::b_layout.html.twig", "/var/www/html/exoKaliop/src/Kaliop/ExoBundle/Resources/views/b_layout.html.twig");
    }
}
