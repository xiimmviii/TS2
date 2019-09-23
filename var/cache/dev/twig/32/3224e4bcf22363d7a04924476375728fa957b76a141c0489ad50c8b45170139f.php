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

/* ./sections/section-historique-etp.html.twig */
class __TwigTemplate_713a6bf290a29b4b1cfb560159bd84b8f885051a6ba37fc20b58fdd52b05e103 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./sections/section-historique-etp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./sections/section-historique-etp.html.twig"));

        // line 1
        echo "<section>
    <div class=\"row presentation\">
        <div class=\"col-8 mx-auto mt-5 mb-5 \">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h1 class=\"m-3 text-primary\"> Electricien, plombier, chauffagiste... sur la région /// </h1>
                    <h3 class=\"mb-3\"> Des interventions dans les communes de ---------
                        24h/24, 7j/7
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, corrupti animi quisquam nulla natus quasi eos accusamus, sapiente maiores maxime ratione corporis repellat. Aperiam saepe odio explicabo facilis aliquam et fuga impedit voluptate possimus. Illum excepturi libero, veritatis eligendi suscipit nihil explicabo perspiciatis optio nisi? Molestias nisi eum quam tempora.</p>
                </div>
                <div class=\"col-md-4 text-center\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" />

                    <a href=\"telto:+33000000000\" class=\"btn text-light boutontel mt-3 \"><i class=\"fas fa-phone-alt\"></i> 00 00 00 00 00 </a></div>
            </div>

        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "./sections/section-historique-etp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"row presentation\">
        <div class=\"col-8 mx-auto mt-5 mb-5 \">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h1 class=\"m-3 text-primary\"> Electricien, plombier, chauffagiste... sur la région /// </h1>
                    <h3 class=\"mb-3\"> Des interventions dans les communes de ---------
                        24h/24, 7j/7
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, corrupti animi quisquam nulla natus quasi eos accusamus, sapiente maiores maxime ratione corporis repellat. Aperiam saepe odio explicabo facilis aliquam et fuga impedit voluptate possimus. Illum excepturi libero, veritatis eligendi suscipit nihil explicabo perspiciatis optio nisi? Molestias nisi eum quam tempora.</p>
                </div>
                <div class=\"col-md-4 text-center\"><img src=\"{{asset('/images/logo.jpg')}}\" class=\"img-fluid\" />

                    <a href=\"telto:+33000000000\" class=\"btn text-light boutontel mt-3 \"><i class=\"fas fa-phone-alt\"></i> 00 00 00 00 00 </a></div>
            </div>

        </div>
    </div>
</section>", "./sections/section-historique-etp.html.twig", "/Applications/MAMP/htdocs/TS2/templates/sections/section-historique-etp.html.twig");
    }
}
