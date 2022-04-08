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

/* panel/cryptos.html.twig */
class __TwigTemplate_3a689755a3d955e8f38dece18017d14eeb301322a7bf84bd153daf682c56888b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/cryptos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/cryptos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panel/cryptos.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_CRYPTOS", [], "message"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("utilities/ms-Dropdown-master/dist/css/dd.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"panel-right-content\">
        <h1 id=\"\" class=\"c-blue\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_MY_PORTFOLIO", [], "message"), "html", null, true);
        echo "</h1>

        <!-- LOADER CHART -->
        <div id=\"crypto-chart-loader\">";
        // line 11
        echo twig_include($this->env, $context, "loader_cube.html.twig");
        echo "</div>
        <div id=\"crypto-chart\" class=\"grid grid-cols-3\">
            <div class=\"col-span-2 p-12\"><script src=\"https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js\"></script>
                ";
        // line 15
        echo "            </div>
            <div><canvas id=\"chartContainer\"></canvas></div>
        </div>

        <!-- EXCHANGE LIST -->
        <div id=\"my-exchange-list\" class=\"mt-5\">
            <h2 class=\"c-blue\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_MY_PLATFORMS", [], "message"), "html", null, true);
        echo "</h2>
            <small class=\"c-blue\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_ADD_OR_CONSULT_ACCOUNT", [], "message"), "html", null, true);
        echo "</small>

            <div class=\"grid grid-cols-8\">
                <!-- EXCHANGE CARD ALL -->
                <div id=\"all\" class=\"platform-card exchange-card exchange-box-shadow text-center allPlatform\" style=\"background-image:url('";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-blue.jpg"), "html", null, true);
        echo "')\">
                    <img class=\"logo-plateform-card\" src=\"/images/portfolio/all-plateform.png\" alt=\"Toutes les plateformes\">
                </div>

                <!-- MY EXCHANGE CARD -->
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userPlatforms"]) || array_key_exists("userPlatforms", $context) ? $context["userPlatforms"] : (function () { throw new RuntimeError('Variable "userPlatforms" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 32
            echo "                    <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["platform"], "platform", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"platform-card exchange-card exchange-card-with-logo text-center platform\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-blue.jpg"), "html", null, true);
            echo "')\">
                        <img class=\"logo-plateform-card\" src=\"/images/platforms/cryptos/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["platform"], "platform", [], "any", false, false, false, 33), "image", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"platform-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["platform"], "platform", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                <!-- EXCHANGE CARD ADD -->
                <div class=\"platformModal exchange-card-add text-center\" style=\"background-image:url('";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-blue.jpg"), "html", null, true);
        echo "')\">
                    <img class=\"logo-plateform-card\" src=\"/images/portfolio/icon-plus.png\" alt=\"Ajouter une plateforme\">
                </div>
            </div>
            
        </div>
        <hr class=\"c-blue my-10 mx-5\" style=\"border: 1px solid #4762fa\">

        <!-- WALLETS -->
        <div id=\"my-cryptocurrency-list\">
            <div class=\"grid grid-cols-2\">
                <div>
                    <h2 id=\"total-wallet-value\" class=\"c-blue\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_MY_WALLET", [], "message"), "html", null, true);
        echo "</h2>
                    <small class=\"c-blue\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_CONSULT_CRYPTO_WALLET", [], "message"), "html", null, true);
        echo "</small>
                </div>
                <div id=\"displayAssets\" class=\"text-right\">
                    <button id=\"displayBlock\" class=\"buttonChooseDisplaying bg-blue\" type=\"button\"><i class=\"fas fa-th\"></i></button>
                    <button id=\"displayLine\" class=\"buttonChooseDisplaying c-blue\" type=\"button\"><i class=\"fas fa-bars\"></i></button>
                    <button id=\"refreshAssets\" class=\"buttonChooseDisplaying c-blue\" type=\"button\"><i class=\"fas fa-sync-alt\"></i></button>
                </div>
            </div>
            <div id=\"my-cryptocurrency-card\">
                <div id=\"list-crypto-loader\">";
        // line 60
        echo twig_include($this->env, $context, "loader_cube.html.twig");
        echo "</div>
                <div id=\"assets\" class=\"\"></div>
            </div>
        </div>
    </div>

    <!-- MODAL ADD EXCHANGE TO USER -->
    <div id=\"modalPlatform\" class=\"modal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <span class=\"close\">&times;</span>
                <h2 class=\"c-blue pb-5\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_ADD_EXCHANGE", [], "message"), "html", null, true);
        echo "</h2>
                <hr>
            </div>
            <form action=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_portfolio", ["assets" => "cryptos"]);
        echo "\" method=\"POST\" data-turbo=\"false\">
                <div class=\"modal-body\">
                    <div class=\"disclaimer\">
                        <p>";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_MODAL_ADD_EXCHANGE_DISCLAIMER", [], "message");
        echo "</p>
                    </div>
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'errors');
        echo "
                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "platform", [], "any", false, false, false, 80), 'label');
        echo "
                    <div class=\"pb-2\">
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "platform", [], "any", false, false, false, 82), 'widget');
        echo "
                    </div>
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "publicKey", [], "any", false, false, false, 84), 'row');
        echo "
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "secretKey", [], "any", false, false, false, 85), 'row');
        echo "
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "address", [], "any", false, false, false, 86), 'row');
        echo "
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "passphrase", [], "any", false, false, false, 87), 'row');
        echo "
                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "_token", [], "any", false, false, false, 88), 'row');
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn bg-blue mt-3 float-right\" type=\"submit\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_SAVE", [], "message"), "html", null, true);
        echo "</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL SHOW CRYPTO DETAILS -->
    <div id=\"modalShowDetail\" class=\"modal\">
        <div class=\"modal-content\" style='background-image:url(";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-white.jpg"), "html", null, true);
        echo ")'>
            <div class=\"modal-header\"></div>
            <div class=\"modal-body\"></div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("cryptos");
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js\" integrity=\"sha512-Lii3WMtgA0C0qmmkdCpsG0Gjr6M0ajRyQRQSbTF6BsrVh/nhZdHpVZ76iMIPvQwz1eoXC3DmAg9K51qT5/dEVg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script>
        \$(function (){
            /* --- INITIALISATION --- */
            let assets = null; 
            let display = \"block\";
            let platformSelected = \"\";
            let currency = \"\";
            let currencySymbol = \"\";
            if (currencyChoose == \"primary\") { 
                currency = \"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "getPrimaryCurrency", [], "any", false, false, false, 119), "getAcronym", [], "method", false, false, false, 119), "html", null, true);
        echo "\"; 
                currencySymbol = \"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "getPrimaryCurrency", [], "any", false, false, false, 120), "getSymbol", [], "method", false, false, false, 120), "html", null, true);
        echo "\"; 
            }
            else { 
                currency = \"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "getSecondaryCurrency", [], "any", false, false, false, 123), "getAcronym", [], "method", false, false, false, 123), "html", null, true);
        echo "\";
                currencySymbol = \"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "getSecondaryCurrency", [], "any", false, false, false, 124), "getSymbol", [], "method", false, false, false, 124), "html", null, true);
        echo "\"; 
            }
            getAllCryptos();

            /* --- ON CLICK EVENT --- */
            \$('.allPlatform').on('click', function() {
                if (assets !== null) {
                    platformSelected = \"\";
                    getAllCryptos();
                }
            });
            \$('.platform').on('click', function() {
                if (assets !== null) {
                    platformSelected = \$(this).attr('id');
                    getCryptosPlatformSelected();
                }
            });
            \$('.platform-card').on('click', function() {
                if (assets !== null) {
                    removeShadowBoxAllCard();
                    \$(this).addClass('exchange-box-shadow');
                }
            });
            \$(document).on('click', '.crypto-information', function() {
                let id = \$(this).attr('id');
                showDetail(id);
            });
            \$(document).on('click', '#closeDetail', function() {
                \$('#modalShowDetail').hide();
            });
            \$('.buttonChooseDisplaying').on('click', function() {
                if (assets !== null) {
                    let id = \$(this).attr('id');
                    switch (id) {
                        case 'displayLine':
                            removeButtonDisplayingColor();
                            \$('#' + id).addClass('bg-blue');
                            \$('#displayBlock').addClass('c-blue');
                            appendAssetsLine();
                            display = \"line\";
                            break;
                        case 'displayBlock':
                            removeButtonDisplayingColor();
                            \$('#' + id).addClass('bg-blue');
                            \$('#displayLine').addClass('c-blue');
                            appendAssetsBlock();
                            display = \"block\";
                            break;
                        case 'refreshAssets':
                            if (platformSelected == \"\") { assets = null; getAllCryptos(); }
                            else { getCryptosPlatformSelected() }
                            break;
                    }
                    \$('#refreshAssets').addClass('c-blue');
                }
            });

            \$('body').on(\"click\", '.th-icons', function() {
                \$('.th-icons').removeClass('activeSorter');
                \$(this).addClass('activeSorter');
            });

            // SORTER TABLE
            const compare = function(ids, asc){
                return function(row1, row2){
                    const tdValue = function(row, ids){
                        return row.children[ids].textContent;
                    }
                    const tri = function(v1, v2) {
                        v1 = v1.replace(\" \$\", \"\");
                        v1 = v1.replace(/\\s+/g, '');
                        v1 = v1.replace(\",\", '.');
                        v2 = v2.replace(\" \$\", \"\");
                        v2 = v2.replace(/\\s+/g, '');
                        v2 = v2.replace(\",\", '.')
                        if (v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2)){
                            return v1 - v2;
                        }
                        else {
                            return v1.toString().localeCompare(v2);
                        }
                        return v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
                    };
                    return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
                }
            }

            /* --- ON CHANGE EVENT --- */
            \$(\".switch-button-checkbox\").on(\"change\", function() { 
                if (currencyChoose == \"primary\") { 
                    currency = \"";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "getPrimaryCurrency", [], "any", false, false, false, 214), "getAcronym", [], "method", false, false, false, 214), "html", null, true);
        echo "\"; 
                    currencySymbol = \"";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "user", [], "any", false, false, false, 215), "getPrimaryCurrency", [], "any", false, false, false, 215), "getSymbol", [], "method", false, false, false, 215), "html", null, true);
        echo "\"; 
                }
                else { 
                    currency = \"";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218), "getSecondaryCurrency", [], "any", false, false, false, 218), "getAcronym", [], "method", false, false, false, 218), "html", null, true);
        echo "\";
                    currencySymbol = \"";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "user", [], "any", false, false, false, 219), "getSecondaryCurrency", [], "any", false, false, false, 219), "getSymbol", [], "method", false, false, false, 219), "html", null, true);
        echo "\"; 
                }
                getAllCryptos();
            });

            /* --- FUNCTIONS --- */
            function getAllCryptos() {
                platformSelected = \"\";
                if (assets == null) {
                    \$.ajax({
                        url: '";
        // line 229
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_all_cryptos");
        echo "',
                        method: \"POST\",
                        dataType: 'json',
                        beforeSend: function() {
                            \$('#assets').html(\"\");
                            \$('#chartContainer').hide();
                            \$('#total-wallet-value').html(\"Mon Portefeuille\");
                            \$('#list-crypto-loader').show();
                            \$('#crypto-chart-loader').show();
                        },
                        success: function(response) {
                            assets = response;
                            makeDoughnutChart(assets[2]);
                            if (display == \"block\") { appendAssetsBlock(); }
                            else { appendAssetsLine(); }
                        }
                    });
                }
                else {
                    if (display == \"block\") { appendAssetsBlock(); }
                    else { appendAssetsLine(); }
                }
            }

            function getCryptosPlatformSelected() {
                \$.ajax({
                    url: '";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_cryptos_by_platform");
        echo "',
                    data: { service: platformSelected },
                    method: \"POST\",
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#assets').html(\"\");
                        \$('#total-wallet-value').html(\"Mon Portefeuille\");
                        \$('#list-crypto-loader').show();
                    },
                    success: function(response) {
                        assets = response;
                        if (display == \"block\") { appendAssetsBlock(); }
                        else { appendAssetsLine(); }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                    }
                });
            }

            function createSorterOnTable() {
                const tbody = document.querySelector('tbody');
                const thx = document.querySelectorAll('th');
                const trxb = tbody.querySelectorAll('tr');
                thx.forEach(function(th){
                    th.addEventListener('click', function(){
                        let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
                        classe.forEach(function(tr){
                        tbody.appendChild(tr)
                        });
                    })
                });
            }

            function makeDoughnutChart(datas) {
                let ctx = document.getElementById(\"chartContainer\").getContext(\"2d\");
                let chart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: datas['labels'],
                        datasets: [{
                            label: 'Crypto-Assets',
                            data: datas['datas'],
                            backgroundColor: [
                                '#4762fa',
                                '#fa4747',
                                '#62fa47',
                                '#fa47b1',
                                '#faf547',
                                '#47faef',
                                '#faa347',
                                '#a947fa',
                                '#337f25',
                                '#8c8c8c'
                            ]
                        }]
                    },
                    options: {
                        responsive: false,
                        plugins: {
                            legend: {
                                position: \"right\"
                            }
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        }
                    }
                });
                \$('#crypto-chart-loader').hide();
                \$('#crypto-chart').attr(\"style\", \"display: grid;\");
                \$('#chartContainer').show();
            }

            function removeShadowBoxAllCard() {
                \$('.platform-card').removeClass('exchange-box-shadow');
            };
               
            function appendAssetsBlock() {
                \$('#assets').addClass(\"grid grid-cols-5\")
                \$('#assets').html(\"\");
                let append = \"\";
                let wallet_price = 0;
                let total_price = 0;
                if (currencyChoose == \"primary\") { total_price = assets[1][\"primary\"]; }
                else { total_price = assets[1][\"secondary\"]; }
                for (let asset in assets[0]) {
                    if (asset == currency) { wallet_price = assets[0][asset].wallet + assets[0][asset].staking + assets[0][asset].locked; }
                    else if (asset == \"USD\" || asset == \"EUR\") { wallet_price = (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].wallet) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].staking) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].locked) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].pools) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].farming) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].lending + + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].rewards)); }
                    else { wallet_price = (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].wallet) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].staking) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].locked) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].pools) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].farming)  + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].lending) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].rewards); }
                    if (parseFloat(wallet_price).toLocaleString('fr-FR') != 0) {
                        append += \"<div id='\" + assets[0][asset].id + \"' class='assets-card crypto-information' style='background-image:url(";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-white.jpg"), "html", null, true);
        echo ")'>\";
                        if (asset == \"EUR\" || asset == \"USD\") { 
                            append += \"<img class='logo-plateform-card' src='/images/assets/cryptos/\" + assets[0][asset].id + \".png' alt='crypto-logo-\" + asset + \"'>\";
                            append += \"<h4 class='text-center c-blue pt-3'>\" + asset + \"</h4>\";
                        } 
                        else if (assets[0][asset].image == \"NO_DATA_FOUND\") 
                        { 
                            append += \"<img class='logo-plateform-card' src='";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/not_found.png"), "html", null, true);
        echo "' alt='crypto-logo-\" + assets[0][asset].name + \"'>\"; 
                            append += \"<h4 class='text-center c-blue pt-3'>\" + assets[0][asset].id + \"</h4>\";
                        } 
                        else { 
                            append += \"<img class='logo-plateform-card' src='\" + assets[0][asset].image + \"' alt='crypto-logo-\" + assets[0][asset].name + \"'>\"; 
                            append += \"<h4 class='text-center c-blue pt-3'>\" + assets[0][asset].id + \"</h4>\";
                        }
                        append += \"<hr class='hr-blue my-3'>\";
                        append += \"<div class='grid grid-cols-3'>\";
                        append += \"<div class='text-right pr-2'>\";
                        append += \"<span><i class='fas fa-landmark c-blue'></i></span><br><span><i class='fas fa-chart-area c-blue'></i></span><br><span><i class='far fa-money-bill-alt c-blue'></i></span><br><span><i class='fas fa-wallet c-blue'></i></span><br>\";
                        append += \"<span><i class='fas fa-coins c-blue'></i></span><br><span><i class='fas fa-unlock-alt c-blue'></i></span><br><span><i class='fas fa-balance-scale c-blue'></i></span><br></div>\";
                        append += \"<div class='col-span-2 pl-2 c-blue font-semibold'>\";
                        if (assets[0][asset].market_cap == \"NO_DATA_FOUND\" || assets[0][asset].market_cap[currency.toLowerCase()] == \"0\") { append += \"<span><i class='c-blue fas fa-ban'></i></span><br>\"; }
                        else { append += \"<span>\" + parseFloat(assets[0][asset].market_cap[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</span><br>\"; }
                        if (assets[0][asset].price == \"NO_DATA_FOUND\") { append += \"<span><i class='c-blue fas fa-ban'></i></span><br><span><i class='c-blue fas fa-ban'></i></span><br>\"; }
                        else {
                            if (asset == \"USD\" || asset == \"EUR\") { append += \"<span>\" + parseFloat(assets[0][asset].price).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</span>\"; }
                            else { append += \"<span>\" + parseFloat(assets[0][asset].price[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</span>\"; }
                            append += \"<br><span>\" + parseFloat(wallet_price).toLocaleString('fr-FR') + \" \" + currencySymbol +\"</span><br>\";
                        }
                        if (parseFloat(assets[0][asset].wallet) == \"0.00\") { append += \"<span> - </span><br>\"; } else { append += \"<span>\" + parseFloat(assets[0][asset].wallet).toLocaleString('fr-FR') + \"</span><br>\"; }
                        if (parseFloat(assets[0][asset].staking) == \"0.00\") { append += \"<span> - </span><br>\"; } else { append += \"<span>\" + parseFloat(assets[0][asset].staking).toLocaleString('fr-FR') + \"</span><br>\"; }
                        if (parseFloat(assets[0][asset].locked) == \"0.00\") { append += \"<span> - </span><br>\"; } else { append += \"<span>\" + parseFloat(assets[0][asset].locked).toLocaleString('fr-FR') + \"</span><br>\"; }
                        if (parseFloat(assets[0][asset].pools) == \"0.00\") { append += \"<span> - </span><br>\"; } else { append += \"<span>\" + parseFloat(assets[0][asset].pools).toLocaleString('fr-FR') + \"</span><br>\"; }
                        append += \"</div></div><hr class='hr-blue my-3'>\";
                        append += \"<div class='float-right platform-used'>\";
                        if (platformSelected == \"\") {
                            let platforms = assets[0][asset].platformList.split(';');
                            platforms.forEach(element => {
                                append += \"<img class='plateform-used-card' src='/images/platforms/cryptos/\" + element + \".png' alt='crypto-platform-used-\" + element + \"'>\";
                            });
                        }
                        else {
                            append += \"<img class='plateform-used-card' src='/images/platforms/cryptos/\" + platformSelected + \".png' alt='crypto-platform-used-\" + platformSelected + \"'>\";
                        }
                        append += \"</div></div>\";
                    }
                    
                }
                \$('#list-crypto-loader').hide();
                \$('#total-wallet-value').html(\"Mon Portefeuille - \" + parseFloat(total_price).toLocaleString('fr-FR') + currencySymbol);
                \$('#assets').html(append);
            }

            function appendAssetsLine() {
                \$('#assets').removeClass(\"grid grid-cols-6\")
                \$('#assets').html(\"\");
                let append = \"<table class='table-auto table-crypto text-center mt-2'><thead><tr><th></th><th class='th-icons'></th><th class='th-icons activeSorter' data-id='market_cap' data-sort='SORT_DESC'><i class='fas fa-landmark'></i></th><th class='th-icons' data-id='price' data-sort='SORT_DESC'><i class='fas fa-chart-area'></i></th>\";
                append += \"<th class='th-icons' data-id='wallet_price' data-sort='SORT_DESC'><i class='far fa-money-bill-alt'></i></th><th class='th-icons' data-id='wallet' data-sort='SORT_DESC'><i class='fas fa-wallet'></i></th><th class='th-icons' data-id='staking' data-sort='SORT_DESC'><i class='fas fa-coins'></i></th>\";
                append += \"<th class='th-icons' data-id='locked' data-sort='SORT_DESC'><i class='fas fa-unlock-alt'></i></th><th class='th-icons' data-id='pool' data-sort='SORT_DESC'><i class='fas fa-balance-scale'></i></th><th><i class='fas fa-tractor'></i></th><th><i class='fas fa-hand-holding-usd'></i></th>\";
                append += \"<th><i class='fas fa-gift'></i></th><th class='py-1'>Plateformes</th></tr></thead><tbody>\";
                let wallet_price = 0;
                let total_price = 0;
                if (currencyChoose == \"primary\") { total_price = assets[1][\"primary\"]; }
                else { total_price = assets[1][\"secondary\"]; }
                for (let asset in assets[0]) {
                    if (asset == currency) { wallet_price = assets[0][asset].wallet + assets[0][asset].staking + assets[0][asset].locked; }
                    else if (asset == \"USD\" || asset == \"EUR\") { wallet_price = (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].wallet) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].staking) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].locked) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].pools) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].farming) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].lending + + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].rewards)); }
                    else { wallet_price = (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].wallet) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].staking) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].locked) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].pools) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].farming)  + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].lending) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].rewards); }
                    if (parseFloat(wallet_price).toLocaleString('fr-FR') != 0) {
                        if (asset == \"USD\" || asset == \"EUR\") {
                            append +=\"<tr id='\" + assets[0][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='/images/assets/cryptos/\" + assets[0][asset].id + \".png' alt='crypto-logo-\" + asset + \"'></td><td><b>\" + asset + \"</b></td>\";
                            if (currency ==  asset) { append += \"<td>0 \$</td><td>\" + 1 + \" \" + currencySymbol + \"</td>\";  }
                            else { append += \"<td></td><td>\" + parseFloat(assets[0][asset].price[currency.toUpperCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\"; }
                            append += \"<td>\" + parseFloat(wallet_price).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\";
                        }
                        else { 
                            if (assets[0][asset].image == \"NO_DATA_FOUND\") {
                                append += \"<tr id='\" + assets[0][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='/images/icons/not_found.png' alt='crypto-logo-not-found'></td><td><b>\" + assets[0][asset].name + \" (\" + assets[0][asset].id + \")</b></td>\";
                                if (assets[0][asset].market_cap == \"NO_DATA_FOUND\" || assets[0][asset].market_cap[currency.toLowerCase()] == \"0\") { append += \"<td><i class='c-blue fas fa-ban'></i></td>\"; }
                                else { append += \"<td>\" + parseFloat(assets[0][asset].market_cap[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\"; }
                                append += \"<td><i class='c-blue fas fa-ban'></i></td><td><i class='c-blue fas fa-ban'></i></td>\";
                            }
                            else {
                                append += \"<tr id='\" + assets[0][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='\" + assets[0][asset].image + \"' alt='crypto-logo-\" + assets[0][asset].name + \"'></td><td><b>\" + assets[0][asset].name + \" (\" + assets[0][asset].id + \")</b></td>\";
                                if (assets[0][asset].market_cap == \"NO_DATA_FOUND\" || assets[0][asset].market_cap[currency.toLowerCase()] == \"0\") { append += \"<td><i class='c-blue fas fa-ban'></i></td>\"; }
                                else { append += \"<td>\" + parseFloat(assets[0][asset].market_cap[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\"; }
                                append += \"<td>\" + parseFloat(assets[0][asset].price[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\"; 
                                append += \"<td>\" + parseFloat(wallet_price).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\";
                            }
                            
                        }
                        if (parseFloat(assets[0][asset].wallet) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].wallet).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].staking) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].staking).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].locked) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].locked).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].pools) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].pools).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].farming) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].farming).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].lending) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].lending).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].rewards) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].rewards).toLocaleString('fr-FR') +\"</td>\" } 
                        append += \"<td class='table-crypto-platforms'>\";
                        if (platformSelected == \"\") {
                            let platforms = assets[0][asset].platformList.split(';');
                            platforms.forEach(element => {
                                append += \"<img class='plateform-used-card' src='/images/platforms/cryptos/\" + element + \".png' alt='crypto-platform-used-\" + element + \"'>\";
                            });
                        }
                        else {
                            append += \"<img class='plateform-used-card' src='/images/platforms/cryptos/\" + platformSelected + \".png' alt='crypto-platform-used-\" + platformSelected + \"'>\";
                        }
                    }
                }
                append += \"</td></tr></tbody></table>\";
                \$('#list-crypto-loader').hide();
                \$('#total-wallet-value').html(\"Mon Portefeuille - \" + parseFloat(total_price).toLocaleString('fr-FR') + currencySymbol);
                \$('#assets').html(append);
                createSorterOnTable();
                
            }

            function removeButtonDisplayingColor() {
                \$('.buttonChooseDisplaying').removeClass('bg-blue');
                \$('.buttonChooseDisplaying').removeClass('c-blue');
            }

            function showDetail(asset) {
                \$('#modalShowDetail').find('.modal-content').find('.modal-header').html(\"\");
                \$('#modalShowDetail').find('.modal-content').find('.modal-body').html(\"\");
                let header = \"\";
                let content = \"\"; 

                /* --- HEADER --- */               
                header = \"<h3 class='text-center'>Détails</h3><i id='closeDetail' class='fas fa-times c-blue'></i><hr class='hr-modal-detail mt-4'>\";
                /* --- LEFT COLUMN --- */
                if (assets[0][asset].image == \"NO_DATA_FOUND\") { content = \"<div class='grid grid-cols-6'><div><img id='show-detail-principal-icon' src='/images/icons/not_found.png'></div>\"; }
                else { content = \"<div class='grid grid-cols-6'><div><img id='show-detail-principal-icon' src='\" + assets[0][asset].image + \"'></div>\"; }
                /* --- CENTER COLUMN --- */
                content += \"<div id='crypto-details' class='col-span-2 c-blue'><h4><b>\" + assets[0][asset].name + \" ( \" + assets[0][asset].id + \" )</b></h4>\";
                if (assets[0][asset].contract_address !== \"\") { content += \"<p><b>\" + Translator.trans('TITLE_CONTRACT_ADDRESS', {}, 'message') + \"</b> : \" + assets[0][asset].contract_address + \"</p>\"; }
                if (assets[0][asset].total_supply !== \"NO_DATA_FOUND\") {
                    content += \"<p><b>\" + Translator.trans('TITLE_MARKET_CAP', {}, 'message') + \"</b> : \" + assets[0][asset].market_cap[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                    content += \"<p><b>\" + Translator.trans('TITLE_TOTAL_SUPPLY', {}, 'message') + \"</b> : \" + assets[0][asset].total_supply.toLocaleString().toString().replace(\" \", \",\") + \" \" + assets[0][asset].id + \"</p>\";
                    content += \"<p><b>\" + Translator.trans('TITLE_CIRCULATING_SUPPLY', {}, 'message') + \"</b> : \" + assets[0][asset].circulating_supply.toLocaleString().toString().replace(\" \", \",\") + \" \" + assets[0][asset].id + \"</p>\";
                    content += \"<p><b>\" + Translator.trans('TITLE_ATH', {}, 'message') + \"</b> : \" + assets[0][asset].ath[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                    content += \"<p><b>\" + Translator.trans('TITLE_ATL', {}, 'message') + \"</b> : \" + assets[0][asset].atl[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                }
                content += \"</div>\";
                /* --- RIGHT COLUMN --- */
                content += \"<div class='col-span-3'>\";
                content += \"<div class='price-change grid grid-cols-3'>\";
                    /* --- PRICE CHANGE --- */
                    content += \"<div>\";
                        if (assets[0][asset].price == \"NO_DATA_FOUND\") { content += \"<h5 class='c-blue'><i class='fas fa-chart-area mr-2'></i><i class='c-blue fas fa-ban'></i></h5>\"; }
                        else {
                            content += \"<h5 class='c-blue'><i class='fas fa-chart-area mr-2'></i>\" + assets[0][asset].price[currency.toLowerCase()] + \" \" + currencySymbol + \"</h5>\";
                            let price_change_24h = assets[0][asset].price_change_24h.toString();
                            let price_change_7d = assets[0][asset].price_change_7d.toString();
                            let price_change_30d = assets[0][asset].price_change_30d.toString();
                            if (price_change_24h.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][asset].price_change_24h.toString().substr(1) + \" %</span><span class='c-blue'> (24h)</span></p>\"; }
                            else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][asset].price_change_24h.toString() + \" %</span><span class='c-blue'> (24h)</span></p>\"; }
                            if (price_change_7d.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][asset].price_change_7d.toString().substr(1) + \" %</span><span class='c-blue'> (7d)</span></p>\"; }
                            else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][asset].price_change_7d.toString() + \" %</span><span class='c-blue'> (7d)</span></p>\"; }
                            if (price_change_30d.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][asset].price_change_30d.toString().substr(1) + \" %</span><span class='c-blue'> (30d)</span></p>\"; }
                            else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][asset].price_change_30d.toString() + \" %</span><span class='c-blue'> (30d)</span></p>\"; }
                        }
                    content += \"</div>\";
                    /* --- CHART --- */
                    content += \"<div class='col-span-2'><img src='/images/chart.png' alt='chart-\" + assets[0][asset].name + \"'></div>\";
                content += \"</div></div></div>\";
                /* --- DESCRIPTION --- */
                content += \"<div class='my-4 c-blue'><p><b>Description</b></p><p>\" + Translator.trans(assets[0][asset].description, {}, 'message') + \"</p></div>\";
                /* --- DETAILS BY PLATFORM --- */
                content += \"<table id='crypto-details-table'><thead><tr><th></th><th>Wallet <i class='fas fa-wallet'></i></th><th>Staking <i class='fas fa-coins'></i></th><th>Locked <i class='fas fa-unlock-alt'></i></th><th>Pools <i class='fas fa-balance-scale'></i></th><th></th></tr></thead><tbody>\";
                content += \"<tr><td class='crypto-details-platforms'><img src='/images/platforms/cryptos/binance.png'><b>Binance</b></td><td>1.2</td><td>1.2</td><td>1.2</td><td>1.2</td><td><i class='fas fa-chevron-down c-blue detail-expand'></i></td></tr>\";
                content += \"<tr><td class='crypto-details-platforms'><img src='/images/platforms/cryptos/kraken.png'><b>Kraken</b></td><td>1.2</td><td>1.2</td><td>1.2</td><td>1.2</td><td><i class='fas fa-chevron-down c-blue detail-expand'></i></td></tr></tbody></table>\";
                /* --- FOOTER --- */
                content += \"<hr class='hr-modal-detail mb-4 mt-10'><p class='text-center'>Pour plus d'informations, regardez la partie <a href='#'>Aide</a> ou <a href='#'>Lexique</a><div class='text-center my-2'><div id='social-network-icons'>\";
                if (assets[0][asset].social_network['homepage'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['homepage'] + \"' target='_blank'><img class='social-network' src='/images/icons/web.png' alt='icon-website'></a>\"; }
                if (assets[0][asset].social_network['medium'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['medium'] + \"' target='_blank'><img class='social-network' src='/images/icons/medium.png' alt='icon-mediem'></a>\"; }
                if (assets[0][asset].social_network['facebook'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['facebook'] + \"' target='_blank'><img class='social-network' src='/images/icons/facebook.png' alt='icon-facebook'></a>\"; }
                if (assets[0][asset].social_network['twitter'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['twitter'] + \"' target='_blank'><img class='social-network' src='/images/icons/twitter.png' alt='icon-twitter'></a>\"; }
                if (assets[0][asset].social_network['discord'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['discord'] + \"' target='_blank'><img class='social-network' src='/images/icons/discord.png' alt='icon-discord'></a>\"; }
                if (assets[0][asset].social_network['telegram'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['telegram'] + \"' target='_blank'><img class='social-network' src='/images/icons/telegram.png' alt='icon-telegram'></a>\"; }
                if (assets[0][asset].social_network['reddit'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['reddit'] + \"' target='_blank'><img class='social-network' src='/images/icons/reddit.png' alt='icon-reddit'></a>\"; }
                if (assets[0][asset].social_network['subsocial'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['subsocial'] + \"' target='_blank'><img class='social-network' src='/images/icons/subsocial.png' alt='icon-subsocial'></a>\"; }
                content += \"</div></div>\";

                \$('#modalShowDetail').find('.modal-content').find('.modal-header').append(header);
                \$('#modalShowDetail').find('.modal-content').find('.modal-body').append(content);
                \$('#modalShowDetail').show();
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panel/cryptos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 355,  589 => 348,  493 => 255,  464 => 229,  451 => 219,  447 => 218,  441 => 215,  437 => 214,  344 => 124,  340 => 123,  334 => 120,  330 => 119,  315 => 108,  305 => 107,  288 => 99,  277 => 91,  271 => 88,  267 => 87,  263 => 86,  259 => 85,  255 => 84,  250 => 82,  245 => 80,  241 => 79,  236 => 77,  230 => 74,  224 => 71,  210 => 60,  198 => 51,  194 => 50,  179 => 38,  175 => 36,  164 => 33,  157 => 32,  153 => 31,  145 => 26,  138 => 22,  134 => 21,  126 => 15,  120 => 11,  114 => 8,  111 => 7,  101 => 6,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}{{ 'TITLE_CRYPTOS'|trans({}, 'message' ) }}{% endblock %}
{% block stylesheets %}<link href=\"{{ asset('utilities/ms-Dropdown-master/dist/css/dd.css') }}\" rel=\"stylesheet\" />{% endblock %}
 
{% block body %}
    <div class=\"panel-right-content\">
        <h1 id=\"\" class=\"c-blue\">{{ 'TITLE_MY_PORTFOLIO'|trans({}, 'message' ) }}</h1>

        <!-- LOADER CHART -->
        <div id=\"crypto-chart-loader\">{{ include('loader_cube.html.twig') }}</div>
        <div id=\"crypto-chart\" class=\"grid grid-cols-3\">
            <div class=\"col-span-2 p-12\"><script src=\"https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js\"></script>
                {# <coingecko-coin-price-chart-widget  coin-id=\"bitcoin\" currency=\"usd\" height=\"300\" locale=\"fr\"></coingecko-coin-price-chart-widget> #}
            </div>
            <div><canvas id=\"chartContainer\"></canvas></div>
        </div>

        <!-- EXCHANGE LIST -->
        <div id=\"my-exchange-list\" class=\"mt-5\">
            <h2 class=\"c-blue\">{{ 'TITLE_MY_PLATFORMS'|trans({}, 'message' ) }}</h2>
            <small class=\"c-blue\">{{ 'TITLE_ADD_OR_CONSULT_ACCOUNT'|trans({}, 'message' ) }}</small>

            <div class=\"grid grid-cols-8\">
                <!-- EXCHANGE CARD ALL -->
                <div id=\"all\" class=\"platform-card exchange-card exchange-box-shadow text-center allPlatform\" style=\"background-image:url('{{ asset('images/asset-card-blue.jpg') }}')\">
                    <img class=\"logo-plateform-card\" src=\"/images/portfolio/all-plateform.png\" alt=\"Toutes les plateformes\">
                </div>

                <!-- MY EXCHANGE CARD -->
                {% for platform in userPlatforms %}
                    <div id=\"{{ platform.platform.name }}\" class=\"platform-card exchange-card exchange-card-with-logo text-center platform\" style=\"background-image:url('{{ asset('images/asset-card-blue.jpg') }}')\">
                        <img class=\"logo-plateform-card\" src=\"/images/platforms/cryptos/{{ platform.platform.image }}\" alt=\"platform-{{ platform.platform.name }}\">
                    </div>
                {% endfor %}

                <!-- EXCHANGE CARD ADD -->
                <div class=\"platformModal exchange-card-add text-center\" style=\"background-image:url('{{ asset('images/asset-card-blue.jpg') }}')\">
                    <img class=\"logo-plateform-card\" src=\"/images/portfolio/icon-plus.png\" alt=\"Ajouter une plateforme\">
                </div>
            </div>
            
        </div>
        <hr class=\"c-blue my-10 mx-5\" style=\"border: 1px solid #4762fa\">

        <!-- WALLETS -->
        <div id=\"my-cryptocurrency-list\">
            <div class=\"grid grid-cols-2\">
                <div>
                    <h2 id=\"total-wallet-value\" class=\"c-blue\">{{ 'TITLE_MY_WALLET'|trans({}, 'message' ) }}</h2>
                    <small class=\"c-blue\">{{ 'TITLE_CONSULT_CRYPTO_WALLET'|trans({}, 'message' ) }}</small>
                </div>
                <div id=\"displayAssets\" class=\"text-right\">
                    <button id=\"displayBlock\" class=\"buttonChooseDisplaying bg-blue\" type=\"button\"><i class=\"fas fa-th\"></i></button>
                    <button id=\"displayLine\" class=\"buttonChooseDisplaying c-blue\" type=\"button\"><i class=\"fas fa-bars\"></i></button>
                    <button id=\"refreshAssets\" class=\"buttonChooseDisplaying c-blue\" type=\"button\"><i class=\"fas fa-sync-alt\"></i></button>
                </div>
            </div>
            <div id=\"my-cryptocurrency-card\">
                <div id=\"list-crypto-loader\">{{ include('loader_cube.html.twig') }}</div>
                <div id=\"assets\" class=\"\"></div>
            </div>
        </div>
    </div>

    <!-- MODAL ADD EXCHANGE TO USER -->
    <div id=\"modalPlatform\" class=\"modal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <span class=\"close\">&times;</span>
                <h2 class=\"c-blue pb-5\">{{ 'TITLE_ADD_EXCHANGE'|trans({}, 'message' ) }}</h2>
                <hr>
            </div>
            <form action=\"{{ path('app_portfolio', {assets: \"cryptos\"}) }}\" method=\"POST\" data-turbo=\"false\">
                <div class=\"modal-body\">
                    <div class=\"disclaimer\">
                        <p>{{ 'TEXT_MODAL_ADD_EXCHANGE_DISCLAIMER'|trans({}, 'message' )|raw }}</p>
                    </div>
                    {{ form_errors(form) }}
                    {{ form_label(form.platform) }}
                    <div class=\"pb-2\">
                        {{ form_widget(form.platform) }}
                    </div>
                    {{ form_row(form.publicKey) }}
                    {{ form_row(form.secretKey) }}
                    {{ form_row(form.address) }}
                    {{ form_row(form.passphrase) }}
                    {{ form_row(form._token) }}
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn bg-blue mt-3 float-right\" type=\"submit\">{{ 'TITLE_SAVE'|trans({}, 'message' ) }}</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL SHOW CRYPTO DETAILS -->
    <div id=\"modalShowDetail\" class=\"modal\">
        <div class=\"modal-content\" style='background-image:url({{ asset('images/asset-card-white.jpg') }})'>
            <div class=\"modal-header\"></div>
            <div class=\"modal-body\"></div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('cryptos') }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js\" integrity=\"sha512-Lii3WMtgA0C0qmmkdCpsG0Gjr6M0ajRyQRQSbTF6BsrVh/nhZdHpVZ76iMIPvQwz1eoXC3DmAg9K51qT5/dEVg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script>
        \$(function (){
            /* --- INITIALISATION --- */
            let assets = null; 
            let display = \"block\";
            let platformSelected = \"\";
            let currency = \"\";
            let currencySymbol = \"\";
            if (currencyChoose == \"primary\") { 
                currency = \"{{ app.user.getPrimaryCurrency.getAcronym() }}\"; 
                currencySymbol = \"{{ app.user.getPrimaryCurrency.getSymbol() }}\"; 
            }
            else { 
                currency = \"{{ app.user.getSecondaryCurrency.getAcronym() }}\";
                currencySymbol = \"{{ app.user.getSecondaryCurrency.getSymbol() }}\"; 
            }
            getAllCryptos();

            /* --- ON CLICK EVENT --- */
            \$('.allPlatform').on('click', function() {
                if (assets !== null) {
                    platformSelected = \"\";
                    getAllCryptos();
                }
            });
            \$('.platform').on('click', function() {
                if (assets !== null) {
                    platformSelected = \$(this).attr('id');
                    getCryptosPlatformSelected();
                }
            });
            \$('.platform-card').on('click', function() {
                if (assets !== null) {
                    removeShadowBoxAllCard();
                    \$(this).addClass('exchange-box-shadow');
                }
            });
            \$(document).on('click', '.crypto-information', function() {
                let id = \$(this).attr('id');
                showDetail(id);
            });
            \$(document).on('click', '#closeDetail', function() {
                \$('#modalShowDetail').hide();
            });
            \$('.buttonChooseDisplaying').on('click', function() {
                if (assets !== null) {
                    let id = \$(this).attr('id');
                    switch (id) {
                        case 'displayLine':
                            removeButtonDisplayingColor();
                            \$('#' + id).addClass('bg-blue');
                            \$('#displayBlock').addClass('c-blue');
                            appendAssetsLine();
                            display = \"line\";
                            break;
                        case 'displayBlock':
                            removeButtonDisplayingColor();
                            \$('#' + id).addClass('bg-blue');
                            \$('#displayLine').addClass('c-blue');
                            appendAssetsBlock();
                            display = \"block\";
                            break;
                        case 'refreshAssets':
                            if (platformSelected == \"\") { assets = null; getAllCryptos(); }
                            else { getCryptosPlatformSelected() }
                            break;
                    }
                    \$('#refreshAssets').addClass('c-blue');
                }
            });

            \$('body').on(\"click\", '.th-icons', function() {
                \$('.th-icons').removeClass('activeSorter');
                \$(this).addClass('activeSorter');
            });

            // SORTER TABLE
            const compare = function(ids, asc){
                return function(row1, row2){
                    const tdValue = function(row, ids){
                        return row.children[ids].textContent;
                    }
                    const tri = function(v1, v2) {
                        v1 = v1.replace(\" \$\", \"\");
                        v1 = v1.replace(/\\s+/g, '');
                        v1 = v1.replace(\",\", '.');
                        v2 = v2.replace(\" \$\", \"\");
                        v2 = v2.replace(/\\s+/g, '');
                        v2 = v2.replace(\",\", '.')
                        if (v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2)){
                            return v1 - v2;
                        }
                        else {
                            return v1.toString().localeCompare(v2);
                        }
                        return v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
                    };
                    return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
                }
            }

            /* --- ON CHANGE EVENT --- */
            \$(\".switch-button-checkbox\").on(\"change\", function() { 
                if (currencyChoose == \"primary\") { 
                    currency = \"{{ app.user.getPrimaryCurrency.getAcronym() }}\"; 
                    currencySymbol = \"{{ app.user.getPrimaryCurrency.getSymbol() }}\"; 
                }
                else { 
                    currency = \"{{ app.user.getSecondaryCurrency.getAcronym() }}\";
                    currencySymbol = \"{{ app.user.getSecondaryCurrency.getSymbol() }}\"; 
                }
                getAllCryptos();
            });

            /* --- FUNCTIONS --- */
            function getAllCryptos() {
                platformSelected = \"\";
                if (assets == null) {
                    \$.ajax({
                        url: '{{ (path('app_get_all_cryptos')) }}',
                        method: \"POST\",
                        dataType: 'json',
                        beforeSend: function() {
                            \$('#assets').html(\"\");
                            \$('#chartContainer').hide();
                            \$('#total-wallet-value').html(\"Mon Portefeuille\");
                            \$('#list-crypto-loader').show();
                            \$('#crypto-chart-loader').show();
                        },
                        success: function(response) {
                            assets = response;
                            makeDoughnutChart(assets[2]);
                            if (display == \"block\") { appendAssetsBlock(); }
                            else { appendAssetsLine(); }
                        }
                    });
                }
                else {
                    if (display == \"block\") { appendAssetsBlock(); }
                    else { appendAssetsLine(); }
                }
            }

            function getCryptosPlatformSelected() {
                \$.ajax({
                    url: '{{ (path('app_get_cryptos_by_platform')) }}',
                    data: { service: platformSelected },
                    method: \"POST\",
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#assets').html(\"\");
                        \$('#total-wallet-value').html(\"Mon Portefeuille\");
                        \$('#list-crypto-loader').show();
                    },
                    success: function(response) {
                        assets = response;
                        if (display == \"block\") { appendAssetsBlock(); }
                        else { appendAssetsLine(); }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                    }
                });
            }

            function createSorterOnTable() {
                const tbody = document.querySelector('tbody');
                const thx = document.querySelectorAll('th');
                const trxb = tbody.querySelectorAll('tr');
                thx.forEach(function(th){
                    th.addEventListener('click', function(){
                        let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
                        classe.forEach(function(tr){
                        tbody.appendChild(tr)
                        });
                    })
                });
            }

            function makeDoughnutChart(datas) {
                let ctx = document.getElementById(\"chartContainer\").getContext(\"2d\");
                let chart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: datas['labels'],
                        datasets: [{
                            label: 'Crypto-Assets',
                            data: datas['datas'],
                            backgroundColor: [
                                '#4762fa',
                                '#fa4747',
                                '#62fa47',
                                '#fa47b1',
                                '#faf547',
                                '#47faef',
                                '#faa347',
                                '#a947fa',
                                '#337f25',
                                '#8c8c8c'
                            ]
                        }]
                    },
                    options: {
                        responsive: false,
                        plugins: {
                            legend: {
                                position: \"right\"
                            }
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        }
                    }
                });
                \$('#crypto-chart-loader').hide();
                \$('#crypto-chart').attr(\"style\", \"display: grid;\");
                \$('#chartContainer').show();
            }

            function removeShadowBoxAllCard() {
                \$('.platform-card').removeClass('exchange-box-shadow');
            };
               
            function appendAssetsBlock() {
                \$('#assets').addClass(\"grid grid-cols-5\")
                \$('#assets').html(\"\");
                let append = \"\";
                let wallet_price = 0;
                let total_price = 0;
                if (currencyChoose == \"primary\") { total_price = assets[1][\"primary\"]; }
                else { total_price = assets[1][\"secondary\"]; }
                for (let asset in assets[0]) {
                    if (asset == currency) { wallet_price = assets[0][asset].wallet + assets[0][asset].staking + assets[0][asset].locked; }
                    else if (asset == \"USD\" || asset == \"EUR\") { wallet_price = (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].wallet) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].staking) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].locked) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].pools) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].farming) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].lending + + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].rewards)); }
                    else { wallet_price = (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].wallet) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].staking) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].locked) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].pools) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].farming)  + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].lending) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].rewards); }
                    if (parseFloat(wallet_price).toLocaleString('fr-FR') != 0) {
                        append += \"<div id='\" + assets[0][asset].id + \"' class='assets-card crypto-information' style='background-image:url({{ asset('images/asset-card-white.jpg') }})'>\";
                        if (asset == \"EUR\" || asset == \"USD\") { 
                            append += \"<img class='logo-plateform-card' src='/images/assets/cryptos/\" + assets[0][asset].id + \".png' alt='crypto-logo-\" + asset + \"'>\";
                            append += \"<h4 class='text-center c-blue pt-3'>\" + asset + \"</h4>\";
                        } 
                        else if (assets[0][asset].image == \"NO_DATA_FOUND\") 
                        { 
                            append += \"<img class='logo-plateform-card' src='{{ asset('images/icons/not_found.png') }}' alt='crypto-logo-\" + assets[0][asset].name + \"'>\"; 
                            append += \"<h4 class='text-center c-blue pt-3'>\" + assets[0][asset].id + \"</h4>\";
                        } 
                        else { 
                            append += \"<img class='logo-plateform-card' src='\" + assets[0][asset].image + \"' alt='crypto-logo-\" + assets[0][asset].name + \"'>\"; 
                            append += \"<h4 class='text-center c-blue pt-3'>\" + assets[0][asset].id + \"</h4>\";
                        }
                        append += \"<hr class='hr-blue my-3'>\";
                        append += \"<div class='grid grid-cols-3'>\";
                        append += \"<div class='text-right pr-2'>\";
                        append += \"<span><i class='fas fa-landmark c-blue'></i></span><br><span><i class='fas fa-chart-area c-blue'></i></span><br><span><i class='far fa-money-bill-alt c-blue'></i></span><br><span><i class='fas fa-wallet c-blue'></i></span><br>\";
                        append += \"<span><i class='fas fa-coins c-blue'></i></span><br><span><i class='fas fa-unlock-alt c-blue'></i></span><br><span><i class='fas fa-balance-scale c-blue'></i></span><br></div>\";
                        append += \"<div class='col-span-2 pl-2 c-blue font-semibold'>\";
                        if (assets[0][asset].market_cap == \"NO_DATA_FOUND\" || assets[0][asset].market_cap[currency.toLowerCase()] == \"0\") { append += \"<span><i class='c-blue fas fa-ban'></i></span><br>\"; }
                        else { append += \"<span>\" + parseFloat(assets[0][asset].market_cap[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</span><br>\"; }
                        if (assets[0][asset].price == \"NO_DATA_FOUND\") { append += \"<span><i class='c-blue fas fa-ban'></i></span><br><span><i class='c-blue fas fa-ban'></i></span><br>\"; }
                        else {
                            if (asset == \"USD\" || asset == \"EUR\") { append += \"<span>\" + parseFloat(assets[0][asset].price).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</span>\"; }
                            else { append += \"<span>\" + parseFloat(assets[0][asset].price[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</span>\"; }
                            append += \"<br><span>\" + parseFloat(wallet_price).toLocaleString('fr-FR') + \" \" + currencySymbol +\"</span><br>\";
                        }
                        if (parseFloat(assets[0][asset].wallet) == \"0.00\") { append += \"<span> - </span><br>\"; } else { append += \"<span>\" + parseFloat(assets[0][asset].wallet).toLocaleString('fr-FR') + \"</span><br>\"; }
                        if (parseFloat(assets[0][asset].staking) == \"0.00\") { append += \"<span> - </span><br>\"; } else { append += \"<span>\" + parseFloat(assets[0][asset].staking).toLocaleString('fr-FR') + \"</span><br>\"; }
                        if (parseFloat(assets[0][asset].locked) == \"0.00\") { append += \"<span> - </span><br>\"; } else { append += \"<span>\" + parseFloat(assets[0][asset].locked).toLocaleString('fr-FR') + \"</span><br>\"; }
                        if (parseFloat(assets[0][asset].pools) == \"0.00\") { append += \"<span> - </span><br>\"; } else { append += \"<span>\" + parseFloat(assets[0][asset].pools).toLocaleString('fr-FR') + \"</span><br>\"; }
                        append += \"</div></div><hr class='hr-blue my-3'>\";
                        append += \"<div class='float-right platform-used'>\";
                        if (platformSelected == \"\") {
                            let platforms = assets[0][asset].platformList.split(';');
                            platforms.forEach(element => {
                                append += \"<img class='plateform-used-card' src='/images/platforms/cryptos/\" + element + \".png' alt='crypto-platform-used-\" + element + \"'>\";
                            });
                        }
                        else {
                            append += \"<img class='plateform-used-card' src='/images/platforms/cryptos/\" + platformSelected + \".png' alt='crypto-platform-used-\" + platformSelected + \"'>\";
                        }
                        append += \"</div></div>\";
                    }
                    
                }
                \$('#list-crypto-loader').hide();
                \$('#total-wallet-value').html(\"Mon Portefeuille - \" + parseFloat(total_price).toLocaleString('fr-FR') + currencySymbol);
                \$('#assets').html(append);
            }

            function appendAssetsLine() {
                \$('#assets').removeClass(\"grid grid-cols-6\")
                \$('#assets').html(\"\");
                let append = \"<table class='table-auto table-crypto text-center mt-2'><thead><tr><th></th><th class='th-icons'></th><th class='th-icons activeSorter' data-id='market_cap' data-sort='SORT_DESC'><i class='fas fa-landmark'></i></th><th class='th-icons' data-id='price' data-sort='SORT_DESC'><i class='fas fa-chart-area'></i></th>\";
                append += \"<th class='th-icons' data-id='wallet_price' data-sort='SORT_DESC'><i class='far fa-money-bill-alt'></i></th><th class='th-icons' data-id='wallet' data-sort='SORT_DESC'><i class='fas fa-wallet'></i></th><th class='th-icons' data-id='staking' data-sort='SORT_DESC'><i class='fas fa-coins'></i></th>\";
                append += \"<th class='th-icons' data-id='locked' data-sort='SORT_DESC'><i class='fas fa-unlock-alt'></i></th><th class='th-icons' data-id='pool' data-sort='SORT_DESC'><i class='fas fa-balance-scale'></i></th><th><i class='fas fa-tractor'></i></th><th><i class='fas fa-hand-holding-usd'></i></th>\";
                append += \"<th><i class='fas fa-gift'></i></th><th class='py-1'>Plateformes</th></tr></thead><tbody>\";
                let wallet_price = 0;
                let total_price = 0;
                if (currencyChoose == \"primary\") { total_price = assets[1][\"primary\"]; }
                else { total_price = assets[1][\"secondary\"]; }
                for (let asset in assets[0]) {
                    if (asset == currency) { wallet_price = assets[0][asset].wallet + assets[0][asset].staking + assets[0][asset].locked; }
                    else if (asset == \"USD\" || asset == \"EUR\") { wallet_price = (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].wallet) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].staking) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].locked) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].pools) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].farming) + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].lending + + (assets[0][asset].price[currency.toUpperCase()] * assets[0][asset].rewards)); }
                    else { wallet_price = (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].wallet) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].staking) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].locked) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].pools) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].farming)  + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].lending) + (assets[0][asset].price[currency.toLowerCase()] * assets[0][asset].rewards); }
                    if (parseFloat(wallet_price).toLocaleString('fr-FR') != 0) {
                        if (asset == \"USD\" || asset == \"EUR\") {
                            append +=\"<tr id='\" + assets[0][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='/images/assets/cryptos/\" + assets[0][asset].id + \".png' alt='crypto-logo-\" + asset + \"'></td><td><b>\" + asset + \"</b></td>\";
                            if (currency ==  asset) { append += \"<td>0 \$</td><td>\" + 1 + \" \" + currencySymbol + \"</td>\";  }
                            else { append += \"<td></td><td>\" + parseFloat(assets[0][asset].price[currency.toUpperCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\"; }
                            append += \"<td>\" + parseFloat(wallet_price).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\";
                        }
                        else { 
                            if (assets[0][asset].image == \"NO_DATA_FOUND\") {
                                append += \"<tr id='\" + assets[0][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='/images/icons/not_found.png' alt='crypto-logo-not-found'></td><td><b>\" + assets[0][asset].name + \" (\" + assets[0][asset].id + \")</b></td>\";
                                if (assets[0][asset].market_cap == \"NO_DATA_FOUND\" || assets[0][asset].market_cap[currency.toLowerCase()] == \"0\") { append += \"<td><i class='c-blue fas fa-ban'></i></td>\"; }
                                else { append += \"<td>\" + parseFloat(assets[0][asset].market_cap[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\"; }
                                append += \"<td><i class='c-blue fas fa-ban'></i></td><td><i class='c-blue fas fa-ban'></i></td>\";
                            }
                            else {
                                append += \"<tr id='\" + assets[0][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='\" + assets[0][asset].image + \"' alt='crypto-logo-\" + assets[0][asset].name + \"'></td><td><b>\" + assets[0][asset].name + \" (\" + assets[0][asset].id + \")</b></td>\";
                                if (assets[0][asset].market_cap == \"NO_DATA_FOUND\" || assets[0][asset].market_cap[currency.toLowerCase()] == \"0\") { append += \"<td><i class='c-blue fas fa-ban'></i></td>\"; }
                                else { append += \"<td>\" + parseFloat(assets[0][asset].market_cap[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\"; }
                                append += \"<td>\" + parseFloat(assets[0][asset].price[currency.toLowerCase()]).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\"; 
                                append += \"<td>\" + parseFloat(wallet_price).toLocaleString('fr-FR') + \" \" + currencySymbol + \"</td>\";
                            }
                            
                        }
                        if (parseFloat(assets[0][asset].wallet) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].wallet).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].staking) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].staking).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].locked) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].locked).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].pools) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].pools).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].farming) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].farming).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].lending) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].lending).toLocaleString('fr-FR') +\"</td>\" } 
                        if (parseFloat(assets[0][asset].rewards) == \"0.00\") { append+=\"<td>-</td>\"; } else { append+= \"<td>\"+ parseFloat(assets[0][asset].rewards).toLocaleString('fr-FR') +\"</td>\" } 
                        append += \"<td class='table-crypto-platforms'>\";
                        if (platformSelected == \"\") {
                            let platforms = assets[0][asset].platformList.split(';');
                            platforms.forEach(element => {
                                append += \"<img class='plateform-used-card' src='/images/platforms/cryptos/\" + element + \".png' alt='crypto-platform-used-\" + element + \"'>\";
                            });
                        }
                        else {
                            append += \"<img class='plateform-used-card' src='/images/platforms/cryptos/\" + platformSelected + \".png' alt='crypto-platform-used-\" + platformSelected + \"'>\";
                        }
                    }
                }
                append += \"</td></tr></tbody></table>\";
                \$('#list-crypto-loader').hide();
                \$('#total-wallet-value').html(\"Mon Portefeuille - \" + parseFloat(total_price).toLocaleString('fr-FR') + currencySymbol);
                \$('#assets').html(append);
                createSorterOnTable();
                
            }

            function removeButtonDisplayingColor() {
                \$('.buttonChooseDisplaying').removeClass('bg-blue');
                \$('.buttonChooseDisplaying').removeClass('c-blue');
            }

            function showDetail(asset) {
                \$('#modalShowDetail').find('.modal-content').find('.modal-header').html(\"\");
                \$('#modalShowDetail').find('.modal-content').find('.modal-body').html(\"\");
                let header = \"\";
                let content = \"\"; 

                /* --- HEADER --- */               
                header = \"<h3 class='text-center'>Détails</h3><i id='closeDetail' class='fas fa-times c-blue'></i><hr class='hr-modal-detail mt-4'>\";
                /* --- LEFT COLUMN --- */
                if (assets[0][asset].image == \"NO_DATA_FOUND\") { content = \"<div class='grid grid-cols-6'><div><img id='show-detail-principal-icon' src='/images/icons/not_found.png'></div>\"; }
                else { content = \"<div class='grid grid-cols-6'><div><img id='show-detail-principal-icon' src='\" + assets[0][asset].image + \"'></div>\"; }
                /* --- CENTER COLUMN --- */
                content += \"<div id='crypto-details' class='col-span-2 c-blue'><h4><b>\" + assets[0][asset].name + \" ( \" + assets[0][asset].id + \" )</b></h4>\";
                if (assets[0][asset].contract_address !== \"\") { content += \"<p><b>\" + Translator.trans('TITLE_CONTRACT_ADDRESS', {}, 'message') + \"</b> : \" + assets[0][asset].contract_address + \"</p>\"; }
                if (assets[0][asset].total_supply !== \"NO_DATA_FOUND\") {
                    content += \"<p><b>\" + Translator.trans('TITLE_MARKET_CAP', {}, 'message') + \"</b> : \" + assets[0][asset].market_cap[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                    content += \"<p><b>\" + Translator.trans('TITLE_TOTAL_SUPPLY', {}, 'message') + \"</b> : \" + assets[0][asset].total_supply.toLocaleString().toString().replace(\" \", \",\") + \" \" + assets[0][asset].id + \"</p>\";
                    content += \"<p><b>\" + Translator.trans('TITLE_CIRCULATING_SUPPLY', {}, 'message') + \"</b> : \" + assets[0][asset].circulating_supply.toLocaleString().toString().replace(\" \", \",\") + \" \" + assets[0][asset].id + \"</p>\";
                    content += \"<p><b>\" + Translator.trans('TITLE_ATH', {}, 'message') + \"</b> : \" + assets[0][asset].ath[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                    content += \"<p><b>\" + Translator.trans('TITLE_ATL', {}, 'message') + \"</b> : \" + assets[0][asset].atl[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                }
                content += \"</div>\";
                /* --- RIGHT COLUMN --- */
                content += \"<div class='col-span-3'>\";
                content += \"<div class='price-change grid grid-cols-3'>\";
                    /* --- PRICE CHANGE --- */
                    content += \"<div>\";
                        if (assets[0][asset].price == \"NO_DATA_FOUND\") { content += \"<h5 class='c-blue'><i class='fas fa-chart-area mr-2'></i><i class='c-blue fas fa-ban'></i></h5>\"; }
                        else {
                            content += \"<h5 class='c-blue'><i class='fas fa-chart-area mr-2'></i>\" + assets[0][asset].price[currency.toLowerCase()] + \" \" + currencySymbol + \"</h5>\";
                            let price_change_24h = assets[0][asset].price_change_24h.toString();
                            let price_change_7d = assets[0][asset].price_change_7d.toString();
                            let price_change_30d = assets[0][asset].price_change_30d.toString();
                            if (price_change_24h.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][asset].price_change_24h.toString().substr(1) + \" %</span><span class='c-blue'> (24h)</span></p>\"; }
                            else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][asset].price_change_24h.toString() + \" %</span><span class='c-blue'> (24h)</span></p>\"; }
                            if (price_change_7d.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][asset].price_change_7d.toString().substr(1) + \" %</span><span class='c-blue'> (7d)</span></p>\"; }
                            else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][asset].price_change_7d.toString() + \" %</span><span class='c-blue'> (7d)</span></p>\"; }
                            if (price_change_30d.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][asset].price_change_30d.toString().substr(1) + \" %</span><span class='c-blue'> (30d)</span></p>\"; }
                            else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][asset].price_change_30d.toString() + \" %</span><span class='c-blue'> (30d)</span></p>\"; }
                        }
                    content += \"</div>\";
                    /* --- CHART --- */
                    content += \"<div class='col-span-2'><img src='/images/chart.png' alt='chart-\" + assets[0][asset].name + \"'></div>\";
                content += \"</div></div></div>\";
                /* --- DESCRIPTION --- */
                content += \"<div class='my-4 c-blue'><p><b>Description</b></p><p>\" + Translator.trans(assets[0][asset].description, {}, 'message') + \"</p></div>\";
                /* --- DETAILS BY PLATFORM --- */
                content += \"<table id='crypto-details-table'><thead><tr><th></th><th>Wallet <i class='fas fa-wallet'></i></th><th>Staking <i class='fas fa-coins'></i></th><th>Locked <i class='fas fa-unlock-alt'></i></th><th>Pools <i class='fas fa-balance-scale'></i></th><th></th></tr></thead><tbody>\";
                content += \"<tr><td class='crypto-details-platforms'><img src='/images/platforms/cryptos/binance.png'><b>Binance</b></td><td>1.2</td><td>1.2</td><td>1.2</td><td>1.2</td><td><i class='fas fa-chevron-down c-blue detail-expand'></i></td></tr>\";
                content += \"<tr><td class='crypto-details-platforms'><img src='/images/platforms/cryptos/kraken.png'><b>Kraken</b></td><td>1.2</td><td>1.2</td><td>1.2</td><td>1.2</td><td><i class='fas fa-chevron-down c-blue detail-expand'></i></td></tr></tbody></table>\";
                /* --- FOOTER --- */
                content += \"<hr class='hr-modal-detail mb-4 mt-10'><p class='text-center'>Pour plus d'informations, regardez la partie <a href='#'>Aide</a> ou <a href='#'>Lexique</a><div class='text-center my-2'><div id='social-network-icons'>\";
                if (assets[0][asset].social_network['homepage'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['homepage'] + \"' target='_blank'><img class='social-network' src='/images/icons/web.png' alt='icon-website'></a>\"; }
                if (assets[0][asset].social_network['medium'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['medium'] + \"' target='_blank'><img class='social-network' src='/images/icons/medium.png' alt='icon-mediem'></a>\"; }
                if (assets[0][asset].social_network['facebook'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['facebook'] + \"' target='_blank'><img class='social-network' src='/images/icons/facebook.png' alt='icon-facebook'></a>\"; }
                if (assets[0][asset].social_network['twitter'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['twitter'] + \"' target='_blank'><img class='social-network' src='/images/icons/twitter.png' alt='icon-twitter'></a>\"; }
                if (assets[0][asset].social_network['discord'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['discord'] + \"' target='_blank'><img class='social-network' src='/images/icons/discord.png' alt='icon-discord'></a>\"; }
                if (assets[0][asset].social_network['telegram'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['telegram'] + \"' target='_blank'><img class='social-network' src='/images/icons/telegram.png' alt='icon-telegram'></a>\"; }
                if (assets[0][asset].social_network['reddit'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['reddit'] + \"' target='_blank'><img class='social-network' src='/images/icons/reddit.png' alt='icon-reddit'></a>\"; }
                if (assets[0][asset].social_network['subsocial'] !== \"\") { content += \"<a href='\" + assets[0][asset].social_network['subsocial'] + \"' target='_blank'><img class='social-network' src='/images/icons/subsocial.png' alt='icon-subsocial'></a>\"; }
                content += \"</div></div>\";

                \$('#modalShowDetail').find('.modal-content').find('.modal-header').append(header);
                \$('#modalShowDetail').find('.modal-content').find('.modal-body').append(content);
                \$('#modalShowDetail').show();
            }
        });
    </script>
{% endblock %}", "panel/cryptos.html.twig", "/home/teo/dev/CryptoPortfolio/templates/panel/cryptos.html.twig");
    }
}
