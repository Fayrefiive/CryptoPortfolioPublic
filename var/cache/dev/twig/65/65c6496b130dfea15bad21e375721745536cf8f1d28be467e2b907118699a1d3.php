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

/* menu.html.twig */
class __TwigTemplate_6dc52bcc44da0969ad37296547b57fe0efab07c2e3a49b2daa41c86136cf69d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<div id=\"menu-col\">
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img class=\"mb-8\" src='/images/logo_vertical.png' alt=\"menu-logo-website\"></a>
    <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
        <div id=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_HOME", [], "message"), "html", null, true);
        echo "\" class=\"menu-link text-center mb-2\">
            <i class=\"fas fa-home c-blue\"></i>
            <span>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_HOME", [], "message"), "html", null, true);
        echo "</span>
        </div>
    </a>
    ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            echo "\">
            <div id=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_ADMIN_MIN", [], "message"), "html", null, true);
            echo "\" class=\"menu-link text-center mb-2\">
                <i class=\"fas fa-tools c-blue\"></i>
                <span>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_ADMIN_MIN", [], "message"), "html", null, true);
            echo "</span>
            </div>
        </a>
    ";
        }
        // line 17
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
        <div id=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_LOGIN", [], "message"), "html", null, true);
            echo "\" class=\"menu-link text-center mb-2\">
            <i class=\"fas fa-sign-in-alt c-blue\"></i>
            <span>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_LOGIN", [], "message"), "html", null, true);
            echo "</span>
        </div>
    </a>
    ";
        }
        // line 25
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">
            <div id=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_MY_ACCOUNT", [], "message"), "html", null, true);
            echo "\" class=\"menu-link text-center mb-2\">
                <i class=\"fas fa-user c-blue\"></i>
                <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_MY_ACCOUNT", [], "message"), "html", null, true);
            echo "</span>
            </div>
        </a>
        <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_portfolio");
            echo "\">
            <div id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_PORTFOLIO", [], "message"), "html", null, true);
            echo "\" class=\"menu-link text-center mb-2\">
                <i class=\"fas fa-chart-bar c-blue\"></i>
                <span>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_PORTFOLIO", [], "message"), "html", null, true);
            echo "</span>
            </div>
        </a>
    ";
        }
        // line 39
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_help");
        echo "\">
        <div id=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_HELP", [], "message"), "html", null, true);
        echo "\" class=\"menu-link text-center mb-2\">
            <i class=\"fas fa-question-circle c-blue\"></i>
            <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_HELP", [], "message"), "html", null, true);
        echo "</span>
        </div>
    </a>
    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
            <div class=\"menu-link text-center\">
                <i class=\"fas fa-sign-out-alt c-blue\"></i>
                <span>";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_LOGOUT", [], "message"), "html", null, true);
            echo "</span>
            </div>
        </a>
        <div id=\"switch_currency\">
            <div class=\"switch-button\">
                <input class=\"switch-button-checkbox\" type=\"checkbox\"></input>
                <label class=\"switch-button-label\" for=\"\"><span class=\"switch-button-label-span\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "getPrimaryCurrency", [], "method", false, false, false, 55), "getAcronym", [], "method", false, false, false, 55), "html", null, true);
            echo "</span></label>
            </div>
        </div>
    ";
        }
        // line 59
        echo "    <a href=\"#\" id=\"vedfuture-menu\" ><img src=\"https://fontmeme.com/permalink/220303/00373c383b62738acb996433a917a0d6.png\" alt=\"polices-de-calligraphie\" border=\"0\"></a>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 59,  173 => 55,  164 => 49,  157 => 46,  155 => 45,  149 => 42,  144 => 40,  139 => 39,  132 => 35,  127 => 33,  123 => 32,  117 => 29,  112 => 27,  107 => 26,  104 => 25,  97 => 21,  92 => 19,  87 => 18,  84 => 17,  77 => 13,  72 => 11,  67 => 10,  65 => 9,  59 => 6,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"menu-col\">
    <a href=\"{{ path('app_home') }}\"><img class=\"mb-8\" src='/images/logo_vertical.png' alt=\"menu-logo-website\"></a>
    <a href=\"{{ path('app_home') }}\">
        <div id=\"{{ 'TITLE_HOME'|trans({}, 'message' ) }}\" class=\"menu-link text-center mb-2\">
            <i class=\"fas fa-home c-blue\"></i>
            <span>{{ 'TITLE_HOME'|trans({}, 'message' ) }}</span>
        </div>
    </a>
    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('app_admin') }}\">
            <div id=\"{{ 'TITLE_ADMIN_MIN'|trans({}, 'message' ) }}\" class=\"menu-link text-center mb-2\">
                <i class=\"fas fa-tools c-blue\"></i>
                <span>{{ 'TITLE_ADMIN_MIN'|trans({}, 'message' ) }}</span>
            </div>
        </a>
    {% endif %}
    {% if not app.user %}
    <a href=\"{{ path('app_login') }}\">
        <div id=\"{{ 'TITLE_LOGIN'|trans({}, 'message' ) }}\" class=\"menu-link text-center mb-2\">
            <i class=\"fas fa-sign-in-alt c-blue\"></i>
            <span>{{ 'TITLE_LOGIN'|trans({}, 'message' ) }}</span>
        </div>
    </a>
    {% endif %}
    {% if app.user %}
        <a href=\"{{ path('app_account') }}\">
            <div id=\"{{ 'TITLE_MY_ACCOUNT'|trans({}, 'message' ) }}\" class=\"menu-link text-center mb-2\">
                <i class=\"fas fa-user c-blue\"></i>
                <span>{{ 'TITLE_MY_ACCOUNT'|trans({}, 'message' ) }}</span>
            </div>
        </a>
        <a href=\"{{ path('app_portfolio') }}\">
            <div id=\"{{ 'TITLE_PORTFOLIO'|trans({}, 'message' ) }}\" class=\"menu-link text-center mb-2\">
                <i class=\"fas fa-chart-bar c-blue\"></i>
                <span>{{ 'TITLE_PORTFOLIO'|trans({}, 'message' ) }}</span>
            </div>
        </a>
    {% endif %}
    <a href=\"{{ path('app_help') }}\">
        <div id=\"{{ 'TITLE_HELP'|trans({}, 'message' ) }}\" class=\"menu-link text-center mb-2\">
            <i class=\"fas fa-question-circle c-blue\"></i>
            <span>{{ 'TITLE_HELP'|trans({}, 'message' ) }}</span>
        </div>
    </a>
    {% if app.user %}
        <a href=\"{{ path('app_logout') }}\">
            <div class=\"menu-link text-center\">
                <i class=\"fas fa-sign-out-alt c-blue\"></i>
                <span>{{ 'TITLE_LOGOUT'|trans({}, 'message' ) }}</span>
            </div>
        </a>
        <div id=\"switch_currency\">
            <div class=\"switch-button\">
                <input class=\"switch-button-checkbox\" type=\"checkbox\"></input>
                <label class=\"switch-button-label\" for=\"\"><span class=\"switch-button-label-span\">{{ app.user.getPrimaryCurrency().getAcronym() }}</span></label>
            </div>
        </div>
    {% endif %}
    <a href=\"#\" id=\"vedfuture-menu\" ><img src=\"https://fontmeme.com/permalink/220303/00373c383b62738acb996433a917a0d6.png\" alt=\"polices-de-calligraphie\" border=\"0\"></a>
</div>
", "menu.html.twig", "/home/teo/dev/CryptoPortfolio/templates/menu.html.twig");
    }
}
