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

/* footer.html.twig */
class __TwigTemplate_641463f4015bad2a2775d1e07612c7cbc66243ef94ca16c5fa1d0721f227a9d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<div id =\"footer\">
    <div class=\"grid grid-cols-3 pb-5\">
        <div class=\"website footer-col\">
            <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FOOTER_OUR_ENTERPRISE", [], "message"), "html", null, true);
        echo "</h3>
            <img src=\"/images/logo_horizontal.png\" alt=\"\">
            <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FOOTER_FOLLOW_US", [], "message"), "html", null, true);
        echo "</h4>
            <div id=\"follow-us\">
                <img class=\"follow-us\" src=\"/images/footer/facebook.png\" alt=\"\">
                <img class=\"follow-us\" src=\"/images/footer/instagram.png\" alt=\"\">
                <img class=\"follow-us\" src=\"/images/footer/github.png\" alt=\"\">
            </div>
            <a href=\"#\"><button class=\"btn bg-blue\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FOOTER_CONTACT_US", [], "message"), "html", null, true);
        echo "</button></a>
        </div>
        <div class=\"partnership footer-col\">
            <h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FOOTER_OUR_PARTNER", [], "message"), "html", null, true);
        echo "</h3>
            <div class=\"grid grid-cols-3\">
                <div>
                    <img src=\"/images/footer/coingecko.png\" alt=\"\">
                    <img src=\"/images/footer/coinmarketcap.jpg\" alt=\"\">
                    <img src=\"/images/footer/debank.jpg\" alt=\"\">
                    <img src=\"/images/footer/subquery.png\" alt=\"\">
                    <img src=\"/images/footer/subscan.png\" alt=\"\">
                </div>
                <div>
                    <img src=\"/images/footer/binance.jpg\" alt=\"\">
                    <img src=\"/images/footer/kraken.jpg\" alt=\"\">
                    <img src=\"/images/footer/kucoin.png\" alt=\"\">
                    <img src=\"/images/footer/coinbase.png\" alt=\"\">
                    <img src=\"/images/footer/mexc.jpg\" alt=\"\">
                </div>
                <div>
                    <img src=\"/images/footer/huobi.jpg\" alt=\"\">
                    <img src=\"/images/footer/gate.png\" alt=\"\">
                    <img src=\"/images/footer/bittrex.jpeg\" alt=\"\">
                    <img src=\"/images/footer/chartjs.jpg\" alt=\"\">
                </div>
            </div>
        </div>
        <div class=\"informations-link footer-col\">
            <h3>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FOOTER_OUR_INFORMATIONS", [], "message"), "html", null, true);
        echo "</h3>
            <a href=\"#\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_CGU", [], "message"), "html", null, true);
        echo "</a><br>
            <a href=\"#\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_CGV", [], "message"), "html", null, true);
        echo "</a><br>
            <a href=\"#\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_LEGAL_NOTICE", [], "message"), "html", null, true);
        echo "</a><br>
            <a href=\"#\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_CONFIDENTIALITY", [], "message"), "html", null, true);
        echo "</a>
        </div>
    </div>
    <hr>
    <div id=\"copyright\" class=\"text-center py-3\">
        <h4>Copyright<sup>©</sup> 2023 <a href=\"www.vedfuture.fr\">VedFuture</a> - ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FOOTER_ALL_RIGHTS_RESERVED", [], "message"), "html", null, true);
        echo "</h4>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  68 => 15,  62 => 12,  53 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id =\"footer\">
    <div class=\"grid grid-cols-3 pb-5\">
        <div class=\"website footer-col\">
            <h3>{{ 'FOOTER_OUR_ENTERPRISE'|trans({}, 'message' ) }}</h3>
            <img src=\"/images/logo_horizontal.png\" alt=\"\">
            <h4>{{ 'FOOTER_FOLLOW_US'|trans({}, 'message' ) }}</h4>
            <div id=\"follow-us\">
                <img class=\"follow-us\" src=\"/images/footer/facebook.png\" alt=\"\">
                <img class=\"follow-us\" src=\"/images/footer/instagram.png\" alt=\"\">
                <img class=\"follow-us\" src=\"/images/footer/github.png\" alt=\"\">
            </div>
            <a href=\"#\"><button class=\"btn bg-blue\">{{ 'FOOTER_CONTACT_US'|trans({}, 'message' ) }}</button></a>
        </div>
        <div class=\"partnership footer-col\">
            <h3>{{ 'FOOTER_OUR_PARTNER'|trans({}, 'message' ) }}</h3>
            <div class=\"grid grid-cols-3\">
                <div>
                    <img src=\"/images/footer/coingecko.png\" alt=\"\">
                    <img src=\"/images/footer/coinmarketcap.jpg\" alt=\"\">
                    <img src=\"/images/footer/debank.jpg\" alt=\"\">
                    <img src=\"/images/footer/subquery.png\" alt=\"\">
                    <img src=\"/images/footer/subscan.png\" alt=\"\">
                </div>
                <div>
                    <img src=\"/images/footer/binance.jpg\" alt=\"\">
                    <img src=\"/images/footer/kraken.jpg\" alt=\"\">
                    <img src=\"/images/footer/kucoin.png\" alt=\"\">
                    <img src=\"/images/footer/coinbase.png\" alt=\"\">
                    <img src=\"/images/footer/mexc.jpg\" alt=\"\">
                </div>
                <div>
                    <img src=\"/images/footer/huobi.jpg\" alt=\"\">
                    <img src=\"/images/footer/gate.png\" alt=\"\">
                    <img src=\"/images/footer/bittrex.jpeg\" alt=\"\">
                    <img src=\"/images/footer/chartjs.jpg\" alt=\"\">
                </div>
            </div>
        </div>
        <div class=\"informations-link footer-col\">
            <h3>{{ 'FOOTER_OUR_INFORMATIONS'|trans({}, 'message' ) }}</h3>
            <a href=\"#\">{{ 'TEXT_CGU'|trans({}, 'message' ) }}</a><br>
            <a href=\"#\">{{ 'TEXT_CGV'|trans({}, 'message' ) }}</a><br>
            <a href=\"#\">{{ 'TEXT_LEGAL_NOTICE'|trans({}, 'message' ) }}</a><br>
            <a href=\"#\">{{ 'TEXT_CONFIDENTIALITY'|trans({}, 'message' ) }}</a>
        </div>
    </div>
    <hr>
    <div id=\"copyright\" class=\"text-center py-3\">
        <h4>Copyright<sup>©</sup> 2023 <a href=\"www.vedfuture.fr\">VedFuture</a> - {{ 'FOOTER_ALL_RIGHTS_RESERVED'|trans({}, 'message' ) }}</h4>
    </div>
</div>", "footer.html.twig", "/home/teo/dev/CryptoPortfolio/templates/footer.html.twig");
    }
}
