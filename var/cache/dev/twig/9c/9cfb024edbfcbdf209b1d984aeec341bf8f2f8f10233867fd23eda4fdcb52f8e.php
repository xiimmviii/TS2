<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_1048d9ec44467f4bb5310f7a3d490bec4424151c687c5431cdfafe3ec443fba4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\">
    <title>Test site électricien</title>

 <script>
        \$(\"document\").ready(() => {
            \$(\"#jsflash\").delay(3000).animate({ opacity: 0 }, 5000, () => {
                \$(\"#jsflash\").css('display', 'none');
            });
        });
    </script>
    </head>
<body>

    <header>
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo de l'etp\" class=\"img-fluid\">
    </header>

    <nav class=\"navbar navbar-expand-lg sticky-top navbar-light bg-light\">
        <button class=\"navbar-toggler mx-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto mx-auto p-3\">
                <li class=\"nav-item mx-3\">
                    <a class=\"nav-link font-weight-bold\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"fas fa-home\"></i> Accueil</a>
                </li>
                <li class=\"nav-item mx-3\">
                    <a class=\"nav-link font-weight-bold\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisations");
        echo "\"><i class=\"far fa-lightbulb\"></i> Réalisations</a>
                </li>
                <li class=\"nav-item mx-3\">
                    <a class=\"nav-link font-weight-bold\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><i class=\"fas fa-phone-alt\"></i> Contact</a>
                </li>
            </ul>
        </div>
    </nav>
       ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            echo "        <div id=\"jsflash\" class=\"alert alert-success m-0\">
            ";
            // line 48
            echo $context["message"];
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 53
            echo "        <div id=\"jsflash\" class=\"alert alert-danger m-0\">
            ";
            // line 54
            echo $context["message"];
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "
<footer class=\"bg-dark\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-4 col-sm-12 m-3\">
            <div class=\"footerh3 pb-3\"> Nom de la société </div>
            <div class=\"footeradresse\"> Adresse ligne 1 <br> Adresse ligne 2 </div>
            <div class=\"footercontact\"> Téléphone : <a href=\"tel:+33000000000\" class=\"footertel\"> 00.00.00.00.00</a> </div>
            <div class=\"footercontact\"> Mail : <a href=\"mailto:mail@mail.com\" class=\"footermail\"> mail@mail.com</a> </div>
        </div>
        <div class=\"col-md-4 col-sm-12 text-center m-3\">
            <div class=\"footerh3 pb-3\"> Laissez votre témoignage sur Google </div>
            <a href=\"pagegoogle\">
                <div class=\"col-10 btn boutonavis\"> <i class=\"fas fa-star\"></i> Laissez votre avis ! </div>
            </a>
        </div>
    </div>
    <div class=\"row copyrow text-light\">
        <div class=\"col-12 copyright m-3\"> Copyright © 2019 SOCIETE | <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\" class=\"copyright-a\">Mentions légales</a> | <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CGU");
        echo "\" class=\"copyright-a\">CGU</a></div>
    </div>

</footer>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  188 => 58,  165 => 77,  146 => 60,  144 => 58,  141 => 57,  132 => 54,  129 => 53,  125 => 52,  122 => 51,  113 => 48,  110 => 47,  106 => 46,  98 => 41,  92 => 38,  86 => 35,  72 => 24,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{asset('/css/style.css')}}\">
    <title>Test site électricien</title>

 <script>
        \$(\"document\").ready(() => {
            \$(\"#jsflash\").delay(3000).animate({ opacity: 0 }, 5000, () => {
                \$(\"#jsflash\").css('display', 'none');
            });
        });
    </script>
    </head>
<body>

    <header>
        <img src=\"{{asset('/images/logo.jpg')}}\" alt=\"logo de l'etp\" class=\"img-fluid\">
    </header>

    <nav class=\"navbar navbar-expand-lg sticky-top navbar-light bg-light\">
        <button class=\"navbar-toggler mx-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto mx-auto p-3\">
                <li class=\"nav-item mx-3\">
                    <a class=\"nav-link font-weight-bold\" href=\"{{path('index')}}\"><i class=\"fas fa-home\"></i> Accueil</a>
                </li>
                <li class=\"nav-item mx-3\">
                    <a class=\"nav-link font-weight-bold\" href=\"{{path('realisations')}}\"><i class=\"far fa-lightbulb\"></i> Réalisations</a>
                </li>
                <li class=\"nav-item mx-3\">
                    <a class=\"nav-link font-weight-bold\" href=\"{{path('contact')}}\"><i class=\"fas fa-phone-alt\"></i> Contact</a>
                </li>
            </ul>
        </div>
    </nav>
       {% for message in app.flashes('success') %}
        <div id=\"jsflash\" class=\"alert alert-success m-0\">
            {{ message | raw }}
        </div>
        {% endfor %}

        {% for message in app.flashes('error') %}
        <div id=\"jsflash\" class=\"alert alert-danger m-0\">
            {{ message | raw }}
        </div>
        {% endfor %}

{% block content %}
{% endblock %}

<footer class=\"bg-dark\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-4 col-sm-12 m-3\">
            <div class=\"footerh3 pb-3\"> Nom de la société </div>
            <div class=\"footeradresse\"> Adresse ligne 1 <br> Adresse ligne 2 </div>
            <div class=\"footercontact\"> Téléphone : <a href=\"tel:+33000000000\" class=\"footertel\"> 00.00.00.00.00</a> </div>
            <div class=\"footercontact\"> Mail : <a href=\"mailto:mail@mail.com\" class=\"footermail\"> mail@mail.com</a> </div>
        </div>
        <div class=\"col-md-4 col-sm-12 text-center m-3\">
            <div class=\"footerh3 pb-3\"> Laissez votre témoignage sur Google </div>
            <a href=\"pagegoogle\">
                <div class=\"col-10 btn boutonavis\"> <i class=\"fas fa-star\"></i> Laissez votre avis ! </div>
            </a>
        </div>
    </div>
    <div class=\"row copyrow text-light\">
        <div class=\"col-12 copyright m-3\"> Copyright © 2019 SOCIETE | <a href=\"{{path('mentions')}}\" class=\"copyright-a\">Mentions légales</a> | <a href=\"{{path('CGU')}}\" class=\"copyright-a\">CGU</a></div>
    </div>

</footer>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\stage\\STAGE-Test-Symfony-1\\templates\\base.html.twig");
    }
}
