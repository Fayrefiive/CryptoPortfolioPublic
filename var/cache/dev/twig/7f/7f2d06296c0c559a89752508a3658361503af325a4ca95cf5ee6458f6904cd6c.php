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

/* home/login.html.twig */
class __TwigTemplate_5931369b9d3802265fdaf86187c625f51fe6e2e45dab776188276491b59f7e5a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/login.html.twig", 1);
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
        echo "    <div class=\"panel-right-content-login mx-auto mt-20\">
        <div class=\"flipper-card\">
            <div class=\"flipper-front\">
                ";
        // line 10
        echo "                <h2 class=\"text-4xl c-blue text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_LOGIN", [], "message"), "html", null, true);
        echo "</h2>
                <p class=\"text-center mb-5\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_NOT_MEMBER", [], "message"), "html", null, true);
        echo " 
                <span class=\"signin c-blue\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_CREATE_ACCOUNT", [], "message"), "html", null, true);
        echo "</span></p>
                ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 16
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"POST\">
                    <label for=\"inputEmail\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LABEL_EMAIL", [], "message"), "html", null, true);
        echo "</label>
                    <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\"
                            autocomplete=\"email\" placeholder='";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PLACEHOLDER_EMAIL", [], "message"), "html", null, true);
        echo "'
                            autofocus required>
                    <label for=\"inputPassword\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LABEL_PASSWORD", [], "message"), "html", null, true);
        echo "</label>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"
                            autocomplete=\"current-password\"
                            placeholder='";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PLACEHOLDER_PASSWORD", [], "message"), "html", null, true);
        echo "' required>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    
                    ";
        // line 29
        echo "                    <div class=\"checkbox my-3 text-right\">
                        <label>
                            ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LABEL_REMEMBER_ME", [], "message"), "html", null, true);
        echo "
                            <input type=\"checkbox\" class=\"ml-2\" name=\"_remember_me\"> 
                        </label>
                    </div>
                    

                    <button class=\"btn bg-blue mt-3 float-right\" type=\"submit\">
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_CONNECT", [], "message"), "html", null, true);
        echo "
                    </button>
                </form>
            </div>
            <div class=\"flipper-back\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SecurityController::register"));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 43,  158 => 38,  148 => 31,  144 => 29,  139 => 25,  135 => 24,  129 => 21,  124 => 19,  119 => 17,  114 => 16,  108 => 14,  106 => 13,  102 => 12,  98 => 11,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Crypto Portfolio{% endblock %}

{% block body %}
    <div class=\"panel-right-content-login mx-auto mt-20\">
        <div class=\"flipper-card\">
            <div class=\"flipper-front\">
                {# <img class=\"mx-auto\" src='/images/logo.png' alt=\"menu-logo-website\"> #}
                <h2 class=\"text-4xl c-blue text-center\">{{ 'TITLE_LOGIN'|trans({}, 'message' ) }}</h2>
                <p class=\"text-center mb-5\">{{ 'TITLE_NOT_MEMBER'|trans({}, 'message' ) }} 
                <span class=\"signin c-blue\">{{ 'TITLE_CREATE_ACCOUNT'|trans({}, 'message' ) }}</span></p>
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <form action=\"{{ path('app_login') }}\" method=\"POST\">
                    <label for=\"inputEmail\">{{ 'LABEL_EMAIL'|trans({}, 'message' ) }}</label>
                    <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\"
                            autocomplete=\"email\" placeholder='{{ 'PLACEHOLDER_EMAIL'|trans({}, 'message' ) }}'
                            autofocus required>
                    <label for=\"inputPassword\">{{ 'LABEL_PASSWORD'|trans({}, 'message' ) }}</label>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"
                            autocomplete=\"current-password\"
                            placeholder='{{ 'PLACEHOLDER_PASSWORD'|trans({}, 'message' ) }}' required>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                    
                    {# Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                    See https://symfony.com/doc/current/security/remember_me.html #}
                    <div class=\"checkbox my-3 text-right\">
                        <label>
                            {{ 'LABEL_REMEMBER_ME'|trans({}, 'message' ) }}
                            <input type=\"checkbox\" class=\"ml-2\" name=\"_remember_me\"> 
                        </label>
                    </div>
                    

                    <button class=\"btn bg-blue mt-3 float-right\" type=\"submit\">
                        {{ 'TITLE_CONNECT'|trans({}, 'message' ) }}
                    </button>
                </form>
            </div>
            <div class=\"flipper-back\">
                {{ render(controller('App\\\\Controller\\\\SecurityController::register')) }}
            </div>
        </div>
    </div>
{% endblock %}
", "home/login.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\CryptoPortfolio\\templates\\home\\login.html.twig");
    }
}
