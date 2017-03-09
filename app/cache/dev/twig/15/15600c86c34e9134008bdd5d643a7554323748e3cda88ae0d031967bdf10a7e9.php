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
        $__internal_0b11c0600d9da088a72338771c293a17267f47a5e7204549fea26e7ab1bd5d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b11c0600d9da088a72338771c293a17267f47a5e7204549fea26e7ab1bd5d1f->enter($__internal_0b11c0600d9da088a72338771c293a17267f47a5e7204549fea26e7ab1bd5d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KaliopExoBundle::b_layout.html.twig"));

        // line 13
        echo "

";
        // line 16
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"publisher\" content=\"John-Loup PAUTARD\">
    <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "</head>
<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>La communauté de l'anneau</h1>
        <h2>Blog officiel</h2>
        <p>
            Ce projet est propulsé par la Fédération de la Terre du Milieu.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_add");
        echo "\">
                Ajouter un article
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les articles</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kaliop_exo_add");
        echo "\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernièrs articles</h4>
            ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KaliopExoBundle:Core:menu", array("limit" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 57
        $this->displayBlock('b_body', $context, $blocks);
        // line 59
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>New Hope Agency © ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    </footer>
</div>

";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "
</body>
</html>";
        
        $__internal_0b11c0600d9da088a72338771c293a17267f47a5e7204549fea26e7ab1bd5d1f->leave($__internal_0b11c0600d9da088a72338771c293a17267f47a5e7204549fea26e7ab1bd5d1f_prof);

    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        $__internal_830c968a9c617f4f6213ee32e8886caad1801a0252e4d79e284ec4b505ef8ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830c968a9c617f4f6213ee32e8886caad1801a0252e4d79e284ec4b505ef8ef1->enter($__internal_830c968a9c617f4f6213ee32e8886caad1801a0252e4d79e284ec4b505ef8ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LCDA";
        
        $__internal_830c968a9c617f4f6213ee32e8886caad1801a0252e4d79e284ec4b505ef8ef1->leave($__internal_830c968a9c617f4f6213ee32e8886caad1801a0252e4d79e284ec4b505ef8ef1_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_996a8179a83aeb661fc726e544f9b7ec64867e46e19ccf2ad1bf0cf7b5efce06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996a8179a83aeb661fc726e544f9b7ec64867e46e19ccf2ad1bf0cf7b5efce06->enter($__internal_996a8179a83aeb661fc726e544f9b7ec64867e46e19ccf2ad1bf0cf7b5efce06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "        <link rel=\"stylesheet\"
              href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
              crossorigin=\"anonymous\">
    ";
        
        $__internal_996a8179a83aeb661fc726e544f9b7ec64867e46e19ccf2ad1bf0cf7b5efce06->leave($__internal_996a8179a83aeb661fc726e544f9b7ec64867e46e19ccf2ad1bf0cf7b5efce06_prof);

    }

    // line 57
    public function block_b_body($context, array $blocks = array())
    {
        $__internal_eee0ec3dd4690dbff265e593e9617b696be0169651aa97c6b72bbbfd480a97cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee0ec3dd4690dbff265e593e9617b696be0169651aa97c6b72bbbfd480a97cf->enter($__internal_eee0ec3dd4690dbff265e593e9617b696be0169651aa97c6b72bbbfd480a97cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "b_body"));

        // line 58
        echo "            ";
        
        $__internal_eee0ec3dd4690dbff265e593e9617b696be0169651aa97c6b72bbbfd480a97cf->leave($__internal_eee0ec3dd4690dbff265e593e9617b696be0169651aa97c6b72bbbfd480a97cf_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c983e24642d249a28a40a32c175ba40db252a87a70e33c63d6b49c8e7aa4c1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c983e24642d249a28a40a32c175ba40db252a87a70e33c63d6b49c8e7aa4c1d9->enter($__internal_c983e24642d249a28a40a32c175ba40db252a87a70e33c63d6b49c8e7aa4c1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
            crossorigin=\"anonymous\"></script>
";
        
        $__internal_c983e24642d249a28a40a32c175ba40db252a87a70e33c63d6b49c8e7aa4c1d9->leave($__internal_c983e24642d249a28a40a32c175ba40db252a87a70e33c63d6b49c8e7aa4c1d9_prof);

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
        return array (  162 => 70,  156 => 69,  149 => 58,  143 => 57,  132 => 24,  126 => 23,  114 => 22,  105 => 75,  103 => 69,  96 => 65,  88 => 59,  86 => 57,  80 => 54,  73 => 50,  69 => 49,  56 => 39,  44 => 29,  42 => 23,  38 => 22,  30 => 16,  26 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends \"::layout.html.twig\" %}

{% block title %}
    Articles - {{ parent() }}
{% endblock %}

{% block body %}
    <h1>Articles</h1>
    <hr>
    {% block b_body %}
    {% endblock %}
{% endblock %}#}


{# J'enlève un niveau d'héritage afin de pouvoir exporter le bundle #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"publisher\" content=\"John-Loup PAUTARD\">
    <title>{% block title %}LCDA{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\"
              href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
              crossorigin=\"anonymous\">
    {% endblock %}
</head>
<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>La communauté de l'anneau</h1>
        <h2>Blog officiel</h2>
        <p>
            Ce projet est propulsé par la Fédération de la Terre du Milieu.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"{{ path(\"kaliop_exo_add\") }}\">
                Ajouter un article
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les articles</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"{{ path(\"kaliop_exo_homepage\") }}\">Accueil</a></li>
                <li><a href=\"{{ path(\"kaliop_exo_add\") }}\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernièrs articles</h4>
            {{ render(controller(\"KaliopExoBundle:Core:menu\", {'limit': 3})) }}
        </div>
        <div id=\"content\" class=\"col-md-9\">
            {% block b_body %}
            {% endblock %}
        </div>
    </div>

    <hr>

    <footer>
        <p>New Hope Agency © {{ 'now'|date('Y') }}</p>
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
