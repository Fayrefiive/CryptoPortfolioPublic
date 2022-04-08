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

/* home/lexicon.html.twig */
class __TwigTemplate_34e0d9ca8423c3c855e0b494401c24aadea4b9d47e10f3497f9e6e1e4ab5ca64 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/lexicon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/lexicon.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/lexicon.html.twig", 1);
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

        echo "DAM - ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_LEXICON", [], "message");
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_LEXICON", [], "message"), "html", null, true);
        echo "</h1>

        <div class=\"lexicon-content\" style=\"width: 70%\">
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-landmark mr-3'></i>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_MARKET_CAP_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <p class=\"mb-5\">";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_MARKET_CAP_TEXT", [], "message");
        echo "</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-chart-area mr-3 mb-5'></i>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_PRICE_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <h2 class=\"c-blue text-2xl\"><i class='far fa-money-bill-alt mr-3 mb-5'></i>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_WALLET_PRICE_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-wallet mr-3 mb-5'></i>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_WALLET_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-coins mr-3'></i>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_STAKING_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <p class=\"mb-5\">";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_STAKING_TEXT", [], "message");
        echo "</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-unlock-alt mr-3'></i>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_LOCKED_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <p class=\"mb-5\">";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_LOCKED_TEXT", [], "message");
        echo "</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-balance-scale mr-3'></i>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_POOLS_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <p class=\"mb-5\">";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_POOLS_TEXT", [], "message");
        echo "</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-tractor mr-3'></i>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_FARMING_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <p class=\"mb-5\">";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_FARMING_TEXT", [], "message");
        echo "</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-hand-holding-usd mr-3'></i>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_LENDING_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <p class=\"mb-5\">";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_LENDING_TEXT", [], "message");
        echo "</p>
            ";
        // line 29
        echo "            <h2 class=\"c-blue text-2xl\"><i class='fas fa-gift mr-3'></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_REWARDS_TITLE", [], "message"), "html", null, true);
        echo "</h2>
            <p class=\"mb-5\">";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LEXICON_REWARDS_TEXT", [], "message");
        echo "</p>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/lexicon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 30,  158 => 29,  154 => 24,  150 => 23,  146 => 22,  142 => 21,  138 => 20,  134 => 19,  130 => 18,  126 => 17,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  106 => 12,  102 => 11,  98 => 10,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}DAM - {{ 'TITLE_LEXICON'|trans({}, 'message' )|raw }}{% endblock %}
 
{% block body %}
    <div class=\"panel-right-content\">
        <h1 class=\"c-blue text-3xl text-center mb-20\">{{ 'TITLE_LEXICON'|trans({}, 'message' ) }}</h1>

        <div class=\"lexicon-content\" style=\"width: 70%\">
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-landmark mr-3'></i>{{ 'LEXICON_MARKET_CAP_TITLE'|trans({}, 'message' ) }}</h2>
            <p class=\"mb-5\">{{ 'LEXICON_MARKET_CAP_TEXT'|trans({}, 'message' )|raw }}</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-chart-area mr-3 mb-5'></i>{{ 'LEXICON_PRICE_TITLE'|trans({}, 'message' ) }}</h2>
            <h2 class=\"c-blue text-2xl\"><i class='far fa-money-bill-alt mr-3 mb-5'></i>{{ 'LEXICON_WALLET_PRICE_TITLE'|trans({}, 'message' ) }}</h2>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-wallet mr-3 mb-5'></i>{{ 'LEXICON_WALLET_TITLE'|trans({}, 'message' ) }}</h2>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-coins mr-3'></i>{{ 'LEXICON_STAKING_TITLE'|trans({}, 'message' ) }}</h2>
            <p class=\"mb-5\">{{ 'LEXICON_STAKING_TEXT'|trans({}, 'message' )|raw }}</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-unlock-alt mr-3'></i>{{ 'LEXICON_LOCKED_TITLE'|trans({}, 'message' ) }}</h2>
            <p class=\"mb-5\">{{ 'LEXICON_LOCKED_TEXT'|trans({}, 'message' )|raw }}</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-balance-scale mr-3'></i>{{ 'LEXICON_POOLS_TITLE'|trans({}, 'message' ) }}</h2>
            <p class=\"mb-5\">{{ 'LEXICON_POOLS_TEXT'|trans({}, 'message' )|raw }}</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-tractor mr-3'></i>{{ 'LEXICON_FARMING_TITLE'|trans({}, 'message' ) }}</h2>
            <p class=\"mb-5\">{{ 'LEXICON_FARMING_TEXT'|trans({}, 'message' )|raw }}</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-hand-holding-usd mr-3'></i>{{ 'LEXICON_LENDING_TITLE'|trans({}, 'message' ) }}</h2>
            <p class=\"mb-5\">{{ 'LEXICON_LENDING_TEXT'|trans({}, 'message' )|raw }}</p>
            {# <h2 class=\"c-blue text-2xl\"><i class='fas fa-dungeon mr-3'></i>{{ 'LEXICON_DEPOSIT_TITLE'|trans({}, 'message' ) }}</h2>
            <p class=\"mb-5\">{{ 'LEXICON_DEPOSIT_TEXT'|trans({}, 'message' )|raw }}</p>
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-chart-line mr-3'></i>{{ 'LEXICON_YIELD_TITLE'|trans({}, 'message' ) }}</h2>
            <p class=\"mb-5\">{{ 'LEXICON_YIELD_TEXT'|trans({}, 'message' )|raw }}</p> #}
            <h2 class=\"c-blue text-2xl\"><i class='fas fa-gift mr-3'></i>{{ 'LEXICON_REWARDS_TITLE'|trans({}, 'message' ) }}</h2>
            <p class=\"mb-5\">{{ 'LEXICON_REWARDS_TEXT'|trans({}, 'message' )|raw }}</p>
        </div>
    </div>
{% endblock %}
", "home/lexicon.html.twig", "/home/teo/dev/CryptoPortfolio/templates/home/lexicon.html.twig");
    }
}
