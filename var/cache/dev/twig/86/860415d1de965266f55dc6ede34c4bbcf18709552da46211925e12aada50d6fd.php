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

/* panel/help.html.twig */
class __TwigTemplate_214b031004276f33c2554fe1b89ca4c14719fe46b52950d5df6cde88bf247bd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/help.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/help.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panel/help.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MIP - ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_HELP", [], "message"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"panel-right-content\">
        <h1 class=\"c-blue text-3xl text-center mb-20\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_HELP", [], "message"), "html", null, true);
        echo "</h1>
        <h2 class=\"c-blue text-xl\">TEST</h2>
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    <script>
        if (document.addEventListener) {
            document.addEventListener('contextmenu', function(e) {
                alert(\"You've tried to open context menu\"); //here you draw your own menu
                e.preventDefault();
            }, false);
            } else {
            document.attachEvent('oncontextmenu', function() {
                alert(\"You've tried to open context menu\");
                window.event.returnValue = false;
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panel/help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 14,  108 => 13,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}MIP - {{ 'TITLE_HELP'|trans({}, 'message' ) }}{% endblock %}
 
{% block body %}
    <div class=\"panel-right-content\">
        <h1 class=\"c-blue text-3xl text-center mb-20\">{{ 'TITLE_HELP'|trans({}, 'message' ) }}</h1>
        <h2 class=\"c-blue text-xl\">TEST</h2>
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        if (document.addEventListener) {
            document.addEventListener('contextmenu', function(e) {
                alert(\"You've tried to open context menu\"); //here you draw your own menu
                e.preventDefault();
            }, false);
            } else {
            document.attachEvent('oncontextmenu', function() {
                alert(\"You've tried to open context menu\");
                window.event.returnValue = false;
            });
        }
    </script>
{% endblock %}
", "panel/help.html.twig", "C:\\Users\\fayre\\Documents\\GitHub\\CryptoPortfolio\\templates\\panel\\help.html.twig");
    }
}
