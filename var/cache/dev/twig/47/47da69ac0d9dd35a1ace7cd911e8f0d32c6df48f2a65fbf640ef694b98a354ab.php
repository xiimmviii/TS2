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

/* ./sections/section-partenaires.html.twig */
class __TwigTemplate_0b4436d675809f6584c4294690d04343554af74486228aba0891a48e9dddcc58 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./sections/section-partenaires.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./sections/section-partenaires.html.twig"));

        // line 1
        echo "<section>
    <div class=\"row presentation\">
        <div class=\"col-12 pb-4 \">
            <h1 class=\"text-center mt-4 mb-4\"> Partenaires </h1>
            <h3 class=\"text-center text-primary\"> <i class=\"fas fa-handshake\"></i> <i class=\"fas fa-handshake\"></i> <i class=\"fas fa-handshake\"></i> </h3>
            <div class=\"row justify-content-around\">
                <div class=\"col-md-3 col-sm-10\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" /></div>
                <div class=\"col-md-3 col-sm-10\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" /></div>
                <div class=\"col-md-3 col-sm-10\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" /></div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./sections/section-partenaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"row presentation\">
        <div class=\"col-12 pb-4 \">
            <h1 class=\"text-center mt-4 mb-4\"> Partenaires </h1>
            <h3 class=\"text-center text-primary\"> <i class=\"fas fa-handshake\"></i> <i class=\"fas fa-handshake\"></i> <i class=\"fas fa-handshake\"></i> </h3>
            <div class=\"row justify-content-around\">
                <div class=\"col-md-3 col-sm-10\"><img src=\"{{asset('/images/logo.jpg')}}\" class=\"img-fluid\" /></div>
                <div class=\"col-md-3 col-sm-10\"><img src=\"{{asset('/images/logo.jpg')}}\" class=\"img-fluid\" /></div>
                <div class=\"col-md-3 col-sm-10\"><img src=\"{{asset('/images/logo.jpg')}}\" class=\"img-fluid\" /></div>
            </div>
        </div>
    </div>
</section>", "./sections/section-partenaires.html.twig", "/Applications/MAMP/htdocs/TS2/templates/sections/section-partenaires.html.twig");
    }
}
