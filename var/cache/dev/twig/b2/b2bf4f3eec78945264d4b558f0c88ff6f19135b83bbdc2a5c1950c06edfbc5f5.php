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

/* admin/index.html.twig */
class __TwigTemplate_1f94edfd150e30a2f25bdfbadccb5081c3104b42adc3739a105a3ba2d1073e92 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_ADMIN", [], "message"), "html", null, true);
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_ADMIN", [], "message"), "html", null, true);
        echo "</h1>
        <div id=\"admin-panel\">
            <div id=\"admin-header-button\">
                <div id=\"admin-hidden-button\">
                    <button class=\"hidden-button\"><a href =\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ADMIN_MANAGE_USERS", [], "message"), "html", null, true);
        echo "</a></button>
                    <button class=\"hidden-button\"><a href =\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_platform");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ADMIN_MANAGE_PLATFORMS", [], "message"), "html", null, true);
        echo "</a></button>
                    <button class=\"hidden-button\"><a href =\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_currency");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ADMIN_MANAGE_CURRENCY", [], "message"), "html", null, true);
        echo "</a></button>
                    <button class=\"hidden-button\"><a href =\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_logs");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ADMIN_LOGS", [], "message"), "html", null, true);
        echo "</a></button>
                </div>
                <i class=\"fas fa-cog c-blue\"></i>
            </div>
            <div id=\"admin_users_connect\" class=\"admin_chart\">
                <img src=\"/images/admin/graphique_0.png\" alt=\"\">
            </div>
            <div id=\"admin_chart_and_data\" class=\"grid grid-cols-2\">
                <div id=\"admin_chart_left\">
                    <div id=\"admin_chart_newUsers\" class=\"admin_chart\">
                        <img src=\"/images/admin/graphique_1.png\" alt=\"\">
                    </div>
                    <div id=\"admin_chart_totalUsers\" class=\"admin_chart\">
                        <img src=\"/images/admin/graphique_4.png\" alt=\"\">
                    </div>
                </div>
                <div id=\"admin_chart_right\">
                    <div id=\"admin_chart_wordsSearching\" class=\"admin_chart\">
                        <img src=\"/images/admin/graphique_2.png\" alt=\"\">
                    </div>
                    <div id=\"admin_chart_platformsRegister\" class=\"admin_chart\">
                        <img src=\"/images/admin/graphique_3.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 14,  111 => 13,  105 => 12,  99 => 11,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}MIP - {{ 'TITLE_ADMIN'|trans({}, 'message' ) }}{% endblock %}
 
{% block body %}
    <div class=\"panel-right-content\">
        <h1 class=\"c-blue text-3xl text-center mb-20\">{{ 'TITLE_ADMIN'|trans({}, 'message' ) }}</h1>
        <div id=\"admin-panel\">
            <div id=\"admin-header-button\">
                <div id=\"admin-hidden-button\">
                    <button class=\"hidden-button\"><a href =\"{{ path('app_admin_user') }}\" >{{ 'ADMIN_MANAGE_USERS'|trans({}, 'message' ) }}</a></button>
                    <button class=\"hidden-button\"><a href =\"{{ path('app_admin_platform') }}\">{{ 'ADMIN_MANAGE_PLATFORMS'|trans({}, 'message' ) }}</a></button>
                    <button class=\"hidden-button\"><a href =\"{{ path('app_admin_currency') }}\">{{ 'ADMIN_MANAGE_CURRENCY'|trans({}, 'message' ) }}</a></button>
                    <button class=\"hidden-button\"><a href =\"{{ path('app_admin_logs') }}\">{{ 'ADMIN_LOGS'|trans({}, 'message' ) }}</a></button>
                </div>
                <i class=\"fas fa-cog c-blue\"></i>
            </div>
            <div id=\"admin_users_connect\" class=\"admin_chart\">
                <img src=\"/images/admin/graphique_0.png\" alt=\"\">
            </div>
            <div id=\"admin_chart_and_data\" class=\"grid grid-cols-2\">
                <div id=\"admin_chart_left\">
                    <div id=\"admin_chart_newUsers\" class=\"admin_chart\">
                        <img src=\"/images/admin/graphique_1.png\" alt=\"\">
                    </div>
                    <div id=\"admin_chart_totalUsers\" class=\"admin_chart\">
                        <img src=\"/images/admin/graphique_4.png\" alt=\"\">
                    </div>
                </div>
                <div id=\"admin_chart_right\">
                    <div id=\"admin_chart_wordsSearching\" class=\"admin_chart\">
                        <img src=\"/images/admin/graphique_2.png\" alt=\"\">
                    </div>
                    <div id=\"admin_chart_platformsRegister\" class=\"admin_chart\">
                        <img src=\"/images/admin/graphique_3.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
{% endblock %}", "admin/index.html.twig", "C:\\Users\\fayre\\Documents\\GitHub\\CryptoPortfolio\\templates\\admin\\index.html.twig");
    }
}
