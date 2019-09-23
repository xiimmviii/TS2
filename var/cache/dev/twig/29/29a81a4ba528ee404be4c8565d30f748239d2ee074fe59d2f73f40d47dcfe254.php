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

/* ./sections/section-label-plus.html.twig */
class __TwigTemplate_da3bd674668d2f8ae60c8df06e53666e6a9b298543764da44524d8b2fa3c1b3f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./sections/section-label-plus.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./sections/section-label-plus.html.twig"));

        // line 1
        echo "<section>
    <div class=\"row justify-content-around bg-dark\">
        <a class=\"col-md-2 col-sm-12 btn indexliens m-4\" href=\"#\"> Spécialité 1 </a>
        <a class=\"col-md-2 col-sm-12 btn indexliens m-4\" href=\"#\"> Spécialité 2 </a>
        <a class=\"col-md-2 col-sm-12 btn indexliens m-4\" href=\"#\"> Spécialité 3 </a>
        <a class=\"col-md-2 col-sm-12 btn indexliens m-4\" href=\"#\"> Spécialité 4 </a>
    </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./sections/section-label-plus.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"row justify-content-around bg-dark\">
        <a class=\"col-md-2 col-sm-12 btn indexliens m-4\" href=\"#\"> Spécialité 1 </a>
        <a class=\"col-md-2 col-sm-12 btn indexliens m-4\" href=\"#\"> Spécialité 2 </a>
        <a class=\"col-md-2 col-sm-12 btn indexliens m-4\" href=\"#\"> Spécialité 3 </a>
        <a class=\"col-md-2 col-sm-12 btn indexliens m-4\" href=\"#\"> Spécialité 4 </a>
    </div>
</section>
", "./sections/section-label-plus.html.twig", "C:\\wamp64\\www\\stage\\TS2\\templates\\sections\\section-label-plus.html.twig");
    }
}
