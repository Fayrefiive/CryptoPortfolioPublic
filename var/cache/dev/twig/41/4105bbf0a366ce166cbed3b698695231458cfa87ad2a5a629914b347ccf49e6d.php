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

/* home/register.html.twig */
class __TwigTemplate_ab60c1a2727ae25ef3827ed66e1babd297dab1d7c665f78344ace64323308b36 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/register.html.twig"));

        // line 1
        echo "<img class=\"mx-auto\" src='/images/logo.png' alt=\"menu-logo-website\">
<h2 class=\"text-4xl c-blue text-center\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_SIGNIN", [], "message"), "html", null, true);
        echo "</h2>
<p class=\"text-center mb-5\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_IS_MEMBER", [], "message"), "html", null, true);
        echo " <span class=\"signin c-blue\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_LOG_YOU", [], "message"), "html", null, true);
        echo "</span></p>
<form action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" method=\"POST\">
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'errors');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "pseudo", [], "any", false, false, false, 6), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "password", [], "any", false, false, false, 8), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "_token", [], "any", false, false, false, 9), 'row');
        echo "
    <p>
        <input type=\"checkbox\" class=\"c-blue\" name=\"legal-notice\" required>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_I_HAVE_READ_AND_I_AGREE", [], "message"), "html", null, true);
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_legal_notice");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_LEGAL_NOTICE", [], "message"), "html", null, true);
        echo "</a>
    </p>
    <p>
        <input type=\"checkbox\" class=\"c-blue\" name=\"cgu\" required> 
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_I_HAVE_READ_AND_I_AGREE", [], "message"), "html", null, true);
        echo " <a href=\"\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_CGU", [], "message"), "html", null, true);
        echo "</a>
    </p>
    <button class=\"btn bg-blue mt-3 float-right\" type=\"submit\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_SAVE", [], "message"), "html", null, true);
        echo "</button>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 18,  93 => 16,  82 => 12,  76 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<img class=\"mx-auto\" src='/images/logo.png' alt=\"menu-logo-website\">
<h2 class=\"text-4xl c-blue text-center\">{{ 'TITLE_SIGNIN'|trans({}, 'message' ) }}</h2>
<p class=\"text-center mb-5\">{{ 'TITLE_IS_MEMBER'|trans({}, 'message' ) }} <span class=\"signin c-blue\">{{ 'TITLE_LOG_YOU'|trans({}, 'message' ) }}</span></p>
<form action=\"{{ path('app_register') }}\" method=\"POST\">
    {{ form_errors(form) }}
    {{ form_row(form.pseudo) }}
    {{ form_row(form.email) }}
    {{ form_row(form.password) }}
    {{ form_row(form._token) }}
    <p>
        <input type=\"checkbox\" class=\"c-blue\" name=\"legal-notice\" required>
        {{ 'TEXT_I_HAVE_READ_AND_I_AGREE'|trans({}, 'message' ) }} <a href=\"{{ path('app_legal_notice') }}\" target=\"_blank\">{{ 'TEXT_LEGAL_NOTICE'|trans({}, 'message' ) }}</a>
    </p>
    <p>
        <input type=\"checkbox\" class=\"c-blue\" name=\"cgu\" required> 
        {{ 'TEXT_I_HAVE_READ_AND_I_AGREE'|trans({}, 'message' ) }} <a href=\"\" target=\"_blank\">{{ 'TEXT_CGU'|trans({}, 'message' ) }}</a>
    </p>
    <button class=\"btn bg-blue mt-3 float-right\" type=\"submit\">{{ 'TITLE_SAVE'|trans({}, 'message' ) }}</button>
</form>", "home/register.html.twig", "/home/teo/dev/CryptoPortfolio/templates/home/register.html.twig");
    }
}
