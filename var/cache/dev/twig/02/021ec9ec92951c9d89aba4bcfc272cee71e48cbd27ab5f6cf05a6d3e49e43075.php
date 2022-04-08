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

/* loader_cube.html.twig */
class __TwigTemplate_fec845031fac91c148f8f0c0b04596460da8f7aeaa6bfd77ea59e24b3d7afd79 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loader_cube.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loader_cube.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/loader_cube.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<div class=\"scene\">
    <div class=\"plane\">
        <div class=\"cube cube--0\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--0\"></div>
        <div class=\"cube cube--1\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--1\"></div>
        <div class=\"cube cube--2\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--2\"></div>
        <div class=\"cube cube--3\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--3\"></div>
        <div class=\"cube cube--4\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--4\"></div>
        <div class=\"cube cube--5\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--5\"></div>
        <div class=\"cube cube--6\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--6\"></div>
        <div class=\"cube cube--7\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--7\"></div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "loader_cube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset('css/loader_cube.css') }}\" rel=\"stylesheet\" />

<div class=\"scene\">
    <div class=\"plane\">
        <div class=\"cube cube--0\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--0\"></div>
        <div class=\"cube cube--1\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--1\"></div>
        <div class=\"cube cube--2\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--2\"></div>
        <div class=\"cube cube--3\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--3\"></div>
        <div class=\"cube cube--4\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--4\"></div>
        <div class=\"cube cube--5\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--5\"></div>
        <div class=\"cube cube--6\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--6\"></div>
        <div class=\"cube cube--7\">
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
            <div class=\"cube__side\"></div>
        </div>
        <div class=\"shadow shadow--7\"></div>
    </div>
</div>", "loader_cube.html.twig", "C:\\Users\\fayre\\Documents\\GitHub\\CryptoPortfolio\\templates\\utilities\\loader_cube.html.twig");
    }
}
