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

/* admin/currency.html.twig */
class __TwigTemplate_22a82c2ed7c0eef9201842245285b03f34117040aa0d12aa81b847c0a97788b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/currency.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/currency.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/currency.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_USERS", [], "message"), "html", null, true);
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ADMIN_MANAGE_CURRENCY", [], "message"), "html", null, true);
        echo "</h1>
        <div id=\"admin-panel\">
            <div class=\"admin_button_add\">
                <button class=\"admin_add\"><a href =\"#\" >";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ADMIN_ADD_CURRENCY", [], "message"), "html", null, true);
        echo "</a></button>
            </div>
            <div class=\"admin-table\">
                <table>
                    <thead>
                        <tr>
                            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TABLE_TH_ID", [], "message"), "html", null, true);
        echo "</th>
                            <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TABLE_TH_ACRONYM", [], "message"), "html", null, true);
        echo "</th>
                            <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TABLE_TH_NAME", [], "message"), "html", null, true);
        echo "</th>
                            <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TABLE_TH_SYMBOL", [], "message"), "html", null, true);
        echo "</th>
                            <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TABLE_TH_ACTIONS", [], "message"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencys"]) || array_key_exists("currencys", $context) ? $context["currencys"] : (function () { throw new RuntimeError('Variable "currencys" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 25
            echo "                            <tr>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "acronym", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "symbol", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                <td>
                                    <i class=\"fas fa-edit c-blue\"></i>
                                    <i class=\"fas fa-trash-alt c-blue\"></i>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 36,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  134 => 25,  130 => 24,  123 => 20,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  98 => 10,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}DAM - {{ 'TITLE_USERS'|trans({}, 'message' ) }}{% endblock %}
 
{% block body %}
    <div class=\"panel-right-content\">
        <h1 class=\"c-blue text-3xl text-center mb-20\">{{ 'ADMIN_MANAGE_CURRENCY'|trans({}, 'message' ) }}</h1>
        <div id=\"admin-panel\">
            <div class=\"admin_button_add\">
                <button class=\"admin_add\"><a href =\"#\" >{{ 'ADMIN_ADD_CURRENCY'|trans({}, 'message' ) }}</a></button>
            </div>
            <div class=\"admin-table\">
                <table>
                    <thead>
                        <tr>
                            <th>{{ 'TABLE_TH_ID'|trans({}, 'message' ) }}</th>
                            <th>{{ 'TABLE_TH_ACRONYM'|trans({}, 'message' ) }}</th>
                            <th>{{ 'TABLE_TH_NAME'|trans({}, 'message' ) }}</th>
                            <th>{{ 'TABLE_TH_SYMBOL'|trans({}, 'message' ) }}</th>
                            <th>{{ 'TABLE_TH_ACTIONS'|trans({}, 'message' ) }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for currency in currencys %}
                            <tr>
                                <td>{{ currency.id }}</td>
                                <td>{{ currency.acronym }}</td>
                                <td>{{ currency.name }}</td>
                                <td>{{ currency.symbol }}</td>
                                <td>
                                    <i class=\"fas fa-edit c-blue\"></i>
                                    <i class=\"fas fa-trash-alt c-blue\"></i>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "admin/currency.html.twig", "/home/teo/dev/CryptoPortfolio/templates/admin/currency.html.twig");
    }
}
