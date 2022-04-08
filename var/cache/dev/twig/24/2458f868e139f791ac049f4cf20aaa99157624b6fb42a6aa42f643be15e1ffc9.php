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

/* home/help.html.twig */
class __TwigTemplate_0379e004d22c94194e525f91340c1875b250150bc8f8651abae51239f4970c84 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/help.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/help.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/help.html.twig", 1);
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

        echo "My Crypto Portfolio";
        
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
        <h2 class=\"c-blue text-2xl\">TEST</h2>
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
        <h2 class=\"c-blue text-2xl\">TEST</h2>
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
        <h2 class=\"c-blue text-2xl\">TEST</h2>
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
        <h2 class=\"c-blue text-2xl\">TEST</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}My Crypto Portfolio{% endblock %}
 
{% block body %}
    <div class=\"panel-right-content\">
        <h1 class=\"c-blue text-3xl text-center mb-20\">{{ 'TITLE_HELP'|trans({}, 'message' ) }}</h1>
        <h2 class=\"c-blue text-2xl\">TEST</h2>
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
        <h2 class=\"c-blue text-2xl\">TEST</h2>
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
        <h2 class=\"c-blue text-2xl\">TEST</h2>
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
        <h2 class=\"c-blue text-2xl\">TEST</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor lectus, mattis id justo non, fringilla posuere massa. Nullam quis consectetur dui, pharetra fermentum purus. Pellentesque a enim eget lacus venenatis efficitur sit amet vitae enim. Pellentesque pulvinar malesuada ante. Suspendisse vel diam nibh. Sed condimentum sapien id ipsum aliquet aliquam. Vestibulum laoreet pellentesque risus ac venenatis. Fusce vel arcu dictum, malesuada mauris id, elementum ante. Fusce accumsan condimentum turpis vel tempor. Nulla commodo leo justo, nec aliquet elit auctor eu. Duis scelerisque vel purus in vestibulum. Nam consectetur efficitur enim, et vehicula purus ultricies nec. Proin non ex non nisl sollicitudin sagittis. Praesent in metus dictum justo porttitor commodo. Integer aliquam in nunc sed malesuada.</p>
    </div>
{% endblock %}
", "home/help.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\CryptoPortfolio\\templates\\home\\help.html.twig");
    }
}
