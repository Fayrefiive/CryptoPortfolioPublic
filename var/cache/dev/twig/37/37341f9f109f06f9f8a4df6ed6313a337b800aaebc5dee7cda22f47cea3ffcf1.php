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
class __TwigTemplate_c71ec8cec6a315cd22a1b63809c93fc37c2590b029c84e402b75257c7e86a155 extends Template
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

        echo "My Crypto Portfolio";
        
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
        <div id=\"crypto-chart\">
            <div id=\"chartContainer\"></div>
        </div>

        <!-- EXCHANGE LIST -->
        <div id=\"my-exchange-list\" class=\"mt-5\">
            <h2 class=\"c-blue\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_MY_PLATFORMS", [], "message"), "html", null, true);
        echo "</h2>
            <small class=\"c-blue\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_ADD_OR_CONSULT_ACCOUNT", [], "message"), "html", null, true);
        echo "</small>

            <div class=\"grid grid-cols-6\">
                <!-- EXCHANGE CARD ALL -->
                <div id=\"all\" class=\"platform-card exchange-card exchange-box-shadow text-center allPlatform\" style=\"background-image:url('";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-blue.jpg"), "html", null, true);
        echo "')\">
                    <img class=\"logo-plateform-card\" src=\"/images/portfolio/all-plateform.png\" alt=\"Toutes les plateformes\">
                </div>

                <!-- MY EXCHANGE CARD -->
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userPlatforms"]) || array_key_exists("userPlatforms", $context) ? $context["userPlatforms"] : (function () { throw new RuntimeError('Variable "userPlatforms" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 29
            echo "                    <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["platform"], "platform", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"platform-card exchange-card exchange-card-with-logo text-center platform\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-blue.jpg"), "html", null, true);
            echo "')\">
                        <img class=\"logo-plateform-card\" src=\"/images/exchanges/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["platform"], "platform", [], "any", false, false, false, 30), "image", [], "any", false, false, false, 30), "html", null, true);
            echo "\" alt=\"platform-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["platform"], "platform", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                <!-- EXCHANGE CARD ADD -->
                <div id=\"addExchangeModal\" class=\"exchange-card-add text-center\" data-toggle=\"modal\" data-target=\"#modalAddPlatform\" style=\"background-image:url('";
        // line 35
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
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_MY_WALLET", [], "message"), "html", null, true);
        echo "</h2>
                    <small class=\"c-blue\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_CONSULT_CRYPTO_WALLET", [], "message"), "html", null, true);
        echo "</small>
                </div>
                <div id=\"displayAssets\" class=\"text-right mr-3\">
                    <button id=\"displayBlock\" class=\"buttonChooseDisplaying bg-blue\" type=\"button\"><i class=\"fas fa-th-large\"></i></button>
                    <button id=\"displayLine\" class=\"buttonChooseDisplaying c-blue\" type=\"button\"><i class=\"fas fa-grip-lines\"></i></button>
                    <button id=\"refreshAssets\" class=\"buttonChooseDisplaying c-blue\" type=\"button\"><i class=\"fas fa-sync-alt\"></i></button>
                </div>
            </div>
            <div id=\"my-cryptocurrency-card\">
                <div id=\"list-crypto-loader\">";
        // line 57
        echo twig_include($this->env, $context, "loader_cube.html.twig");
        echo "</div>
                <div id=\"assets\" class=\"\"></div>
            </div>
        </div>
    </div>

    <!-- MODAL ADD EXCHANGE TO USER -->
    <div id=\"modalAddExchange\" class=\"modal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <span class=\"close\">&times;</span>
                <h2 class=\"c-blue pb-5\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_ADD_EXCHANGE", [], "message"), "html", null, true);
        echo "</h2>
                <hr>
            </div>
            <form action=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_portfolio", ["assets" => "cryptos"]);
        echo "\" method=\"POST\" data-turbo=\"false\">
                <div class=\"modal-body\">
                    <div class=\"disclaimer\">
                        <p>";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_MODAL_ADD_EXCHANGE_DISCLAIMER", [], "message");
        echo "</p>
                    </div>
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'errors');
        echo "
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "platform", [], "any", false, false, false, 77), 'label');
        echo "
                    <div class=\"pb-2\">
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "platform", [], "any", false, false, false, 79), 'widget');
        echo "
                    </div>
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "publicKey", [], "any", false, false, false, 81), 'row');
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "secretKey", [], "any", false, false, false, 82), 'row');
        echo "
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "address", [], "any", false, false, false, 83), 'row');
        echo "
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "passphrase", [], "any", false, false, false, 84), 'row');
        echo "
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "_token", [], "any", false, false, false, 85), 'row');
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn bg-blue mt-3 float-right\" type=\"submit\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_SAVE", [], "message"), "html", null, true);
        echo "</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL SHOW CRYPTO DETAILS -->
    <div id=\"modalShowDetail\" class=\"modal\">
        <div class=\"modal-content\" style='background-image:url(";
        // line 96
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

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("cryptos");
        echo "
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
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "getPrimaryCurrency", [], "any", false, false, false, 115), "getAcronym", [], "method", false, false, false, 115), "html", null, true);
        echo "\"; 
                currencySymbol = \"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "getPrimaryCurrency", [], "any", false, false, false, 116), "getSymbol", [], "method", false, false, false, 116), "html", null, true);
        echo "\"; 
            }
            else { 
                currency = \"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "getSecondaryCurrency", [], "any", false, false, false, 119), "getAcronym", [], "method", false, false, false, 119), "html", null, true);
        echo "\";
                currencySymbol = \"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "getSecondaryCurrency", [], "any", false, false, false, 120), "getSymbol", [], "method", false, false, false, 120), "html", null, true);
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

            /* --- ON CHANGE EVENT --- */
            \$(\".switch-button-checkbox\").on(\"change\", function() { 
                if (currencyChoose == \"primary\") { 
                    currency = \"";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180), "getPrimaryCurrency", [], "any", false, false, false, 180), "getAcronym", [], "method", false, false, false, 180), "html", null, true);
        echo "\"; 
                    currencySymbol = \"";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "user", [], "any", false, false, false, 181), "getPrimaryCurrency", [], "any", false, false, false, 181), "getSymbol", [], "method", false, false, false, 181), "html", null, true);
        echo "\"; 
                }
                else { 
                    currency = \"";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "getSecondaryCurrency", [], "any", false, false, false, 184), "getAcronym", [], "method", false, false, false, 184), "html", null, true);
        echo "\";
                    currencySymbol = \"";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185), "getSecondaryCurrency", [], "any", false, false, false, 185), "getSymbol", [], "method", false, false, false, 185), "html", null, true);
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
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_all_cryptos");
        echo "',
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
        // line 218
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

            function removeShadowBoxAllCard() {
                \$('.platform-card').removeClass('exchange-box-shadow');
            };
               
            function appendAssetsBlock() {
                \$('#assets').addClass(\"grid grid-cols-6\")
                \$('#assets').html(\"\");
                let append = \"\";
                let wallet_price = 0;
                let total_price = 0;
                if (currencyChoose == \"primary\") { total_price = assets[1][\"primary\"]; }
                else { total_price = assets[1][\"secondary\"]; }
                for (let asset in assets[0][\"total\"]) {
                    if (asset == \"USD\" || asset == \"EUR\") { wallet_price = (assets[0][\"total\"][asset].price * assets[0][\"total\"][asset].wallet) + (assets[0][\"total\"][asset].price * assets[0][\"total\"][asset].staking); }
                    else { wallet_price = (assets[0][\"total\"][asset].price[currency.toLowerCase()] * assets[0][\"total\"][asset].wallet) + (assets[0][\"total\"][asset].price[currency.toLowerCase()] * assets[0][\"total\"][asset].staking); }
                    if (parseFloat(wallet_price).toFixed(2) != 0) {
                        append += \"<div id='\" + assets[0][\"total\"][asset].id + \"' class='assets-card crypto-information' style='background-image:url(";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-white.jpg"), "html", null, true);
        echo ")'>\";
                        append += \"<img class='logo-plateform-card' src='\" + assets[0][\"total\"][asset].image + \"' alt='crypto-logo-\" + assets[0][\"total\"][asset].name + \"'>\";
                        append += \"<h4 class='text-center c-blue pt-3'>\" + assets[0][\"total\"][asset].name + \"</h4>\";
                        append += \"<hr class='hr-blue my-3'>\";
                        append += \"<div class='grid grid-cols-3'>\";
                        append += \"<div class='text-right pr-2'>\";
                        append += \"<span><i class='fas fa-chart-area c-blue'></i></span><br><span><i class='far fa-money-bill-alt c-blue'></i></span><br><span><i class='fas fa-wallet c-blue'></i></span><br>\";
                        append += \"<span><i class='fas fa-coins c-blue'></i></span><br><span><i class='fas fa-unlock-alt c-blue'></i></span><br><span><i class='fas fa-balance-scale c-blue'></i></span><br></div>\";
                        append += \"<div class='col-span-2 pl-2 c-blue font-semibold'>\";
                        if (asset == \"USD\" || asset == \"EUR\") { append += \"<span>\" + parseFloat(assets[0][\"total\"][asset].price).toFixed(2) + \" \" + currencySymbol + \"</span>\"; }
                        else { append += \"<span>\" + parseFloat(assets[0][\"total\"][asset].price[currency.toLowerCase()]).toFixed(2) + \" \" + currencySymbol + \"</span>\"; }
                        append += \"<br><span>\" + parseFloat(wallet_price).toFixed(2) + \" \" + currencySymbol +\"</span><br>\";
                        append += \"<span>\" + parseFloat(assets[0][\"total\"][asset].wallet).toFixed(2) + \"</span><br><span>\" + parseFloat(assets[0][\"total\"][asset].staking).toFixed(2) + \"</span><br>\";
                        append += \"<span>\" + parseFloat(assets[0][\"total\"][asset].locked).toFixed(2) + \"</span><br><span>\" + parseFloat(assets[0][\"total\"][asset].pools).toFixed(2) + \"</span><br>\";
                        append += \"</div></div><hr class='hr-blue my-3'>\";
                        append += \"<div class='float-right platform-used'>\";
                        if (platformSelected == \"\") {
                            platforms = assets[0][\"total\"][asset].platform.split(';')
                            platforms.forEach(platform => {
                                if (platform.includes(\"/\")) { let split = platform.split(\"/\"); platform = split[0]; }
                                append += \"<img class='plateform-used-card' src='/images/exchanges/\" + platform + \".png' alt='crypto-platform-used-\" + platform + \"'>\";
                            });
                        }
                        else {
                            append += \"<img class='plateform-used-card' src='/images/exchanges/\" + assets[0][\"total\"][asset].platform + \".png' alt='crypto-platform-used-\" + assets[0][\"total\"][asset].platform + \"'>\";
                        }
                        append += \"</div></div>\";
                    }
                    
                }
                \$('#list-crypto-loader').hide();
                \$('#total-wallet-value').html(\"Mon Portefeuille - \" + parseFloat(total_price).toFixed(2) + currencySymbol);
                \$('#assets').html(append);
            }

            function appendAssetsLine() {
                \$('#assets').removeClass(\"grid grid-cols-6\")
                \$('#assets').html(\"\");
                let append = \"<table class='table-auto table-crypto text-center mt-2'><thead><tr><th></th><th></th><th><i class='fas fa-chart-area'></i></th>\";
                append += \"<th><i class='far fa-money-bill-alt'></i></th><th><i class='fas fa-wallet'></i></th><th><i class='fas fa-coins'></i></th>\";
                append += \"<th><i class='fas fa-unlock-alt'></i></th><th><i class='fas fa-balance-scale'></i></th><th class='py-1'>Plateformes</th></tr></thead><tbody>\";
                let wallet_price = 0;
                let total_price = 0;
                if (currencyChoose == \"primary\") { total_price = assets[1][\"primary\"]; }
                else { total_price = assets[1][\"secondary\"]; }
                for (let asset in assets[0][\"total\"]) {
                    if (asset == \"USD\" || asset == \"EUR\") { wallet_price = (assets[0][\"total\"][asset].price * assets[0][\"total\"][asset].wallet) + (assets[0][\"total\"][asset].price * assets[0][\"total\"][asset].staking); }
                    else { wallet_price = (assets[0][\"total\"][asset].price[currency.toLowerCase()] * assets[0][\"total\"][asset].wallet) + (assets[0][\"total\"][asset].price[currency.toLowerCase()] * assets[0][\"total\"][asset].staking); }
                    if (parseFloat(wallet_price).toFixed(2) != 0) {
                        if (asset == \"USD\" || asset == \"EUR\") {
                            append +=\"<tr id='\" + assets[0][\"total\"][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='/images/assets/cryptos/\" + assets[0][\"total\"][asset].id + \".png' alt='crypto-logo-\" + assets[0][\"total\"][asset].name + \"'></td><td><b>\" + assets[0][\"total\"][asset].name + \"</b></td>\";
                            append += \"<td>\" + parseFloat(assets[0][\"total\"][asset].price).toFixed(2) + \" \" + currencySymbol + \"</td>\"; 
                        }
                        else { 
                            append +=\"<tr id='\" + assets[0][\"total\"][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='\" + assets[0][\"total\"][asset].image + \"' alt='crypto-logo-\" + assets[0][\"total\"][asset].name + \"'></td><td><b>\" + assets[0][\"total\"][asset].name + \"</b></td>\";
                            append+= \"<td>\" + parseFloat(assets[0][\"total\"][asset].price[currency.toLowerCase()]).toFixed(2) + \" \" + currencySymbol + \"</td>\"; 
                        }
                        append += \"<td>\" + parseFloat(wallet_price).toFixed(2) + \" \" + currencySymbol + \"</td><td>\" + parseFloat(assets[0][\"total\"][asset].wallet).toFixed(2) + \"</td><td>\" + parseFloat(assets[0][\"total\"][asset].staking).toFixed(2) + \"</td>\";
                        append += \"<td>\" + parseFloat(assets[0][\"total\"][asset].locked).toFixed(2) + \"</td><td>\" + parseFloat(assets[0][\"total\"][asset].pools).toFixed(2) + \"</td><td class='table-crypto-platforms'>\";
                        if (platformSelected == \"\") {
                            platforms = assets[0][\"total\"][asset].platform.split(';')
                            platforms.forEach(platform => {
                                if (platform.includes(\"/\")) { let split = platform.split(\"/\"); platform = split[0]; }
                                append += \"<img class='plateform-used-card' src='/images/exchanges/\" + platform + \".png' alt='crypto-platform-used-\" + platform + \"'>\";
                            });
                        }
                        else {
                            append += \"<img class='plateform-used-card' src='/images/exchanges/\" + assets[0][\"total\"][asset].platform + \".png' alt='crypto-platform-used-\" + assets[0][\"total\"][asset].platform + \"'>\";
                        }
                    }
                }
                append += \"</td></tr></tbody></table>\";
                \$('#list-crypto-loader').hide();
                \$('#total-wallet-value').html(\"Mon Portefeuille - \" + parseFloat(total_price).toFixed(2) + currencySymbol);
                \$('#assets').html(append);
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
                content = \"<div class='grid grid-cols-6'><div><img id='show-detail-principal-icon' src='\" + assets[0][\"total\"][asset].image + \"'></div>\";
                /* --- CENTER COLUMN --- */
                content += \"<div id='crypto-details' class='col-span-2 c-blue'><h4><b>\" + assets[0][\"total\"][asset].name + \" ( \" + assets[0][\"total\"][asset].id + \" )</b></h4>\"
                if (assets[0][\"total\"][asset].contract_address !== \"\") { content += \"<p><b>\" + Translator.trans('TITLE_CONTRACT_ADDRESS', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].contract_address + \"</p>\"; }
                content += \"<p><b>\" + Translator.trans('TITLE_MARKET_CAP', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].market_cap[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                content += \"<p><b>\" + Translator.trans('TITLE_TOTAL_SUPPLY', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].total_supply.toLocaleString().toString().replace(\" \", \",\") + \" \" + assets[0][\"total\"][asset].id + \"</p>\";
                content += \"<p><b>\" + Translator.trans('TITLE_CIRCULATING_SUPPLY', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].circulating_supply.toLocaleString().toString().replace(\" \", \",\") + \" \" + assets[0][\"total\"][asset].id + \"</p>\";
                content += \"<p><b>\" + Translator.trans('TITLE_ATH', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].ath[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                content += \"<p><b>\" + Translator.trans('TITLE_ATL', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].atl[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                content += \"</div>\";
                /* --- RIGHT COLUMN --- */
                content += \"<div class='col-span-3'>\";
                content += \"<div class='price-change grid grid-cols-3'>\";
                    /* --- PRICE CHANGE --- */
                    content += \"<div>\";
                        content += \"<h5 class='c-blue'><i class='fas fa-chart-area mr-2'></i>\" + assets[0][\"total\"][asset].price[currency.toLowerCase()] + \" \" + currencySymbol + \"</h5>\";
                        let price_change_24h = assets[0][\"total\"][asset].price_change_24h.toString();
                        let price_change_7d = assets[0][\"total\"][asset].price_change_7d.toString();
                        let price_change_30d = assets[0][\"total\"][asset].price_change_30d.toString();
                        if (price_change_24h.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][\"total\"][asset].price_change_24h.toString().substr(1) + \" %</span><span class='c-blue'> (24h)</span></p>\"; }
                        else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][\"total\"][asset].price_change_24h.toString() + \" %</span><span class='c-blue'> (24h)</span></p>\"; }
                        if (price_change_7d.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][\"total\"][asset].price_change_7d.toString().substr(1) + \" %</span><span class='c-blue'> (7d)</span></p>\"; }
                        else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][\"total\"][asset].price_change_7d.toString() + \" %</span><span class='c-blue'> (7d)</span></p>\"; }
                        if (price_change_30d.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][\"total\"][asset].price_change_30d.toString().substr(1) + \" %</span><span class='c-blue'> (30d)</span></p>\"; }
                        else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][\"total\"][asset].price_change_30d.toString() + \" %</span><span class='c-blue'> (30d)</span></p>\"; }
                    content += \"</div>\";
                    /* --- CHART --- */
                    content += \"<div class='col-span-2'><img src='/images/chart.png' alt='chart-\" + assets[0][\"total\"][asset].name + \"'></div>\";
                content += \"</div></div></div>\";
                /* --- DESCRIPTION --- */
                content += \"<div class='my-4 c-blue'><p><b>Description</b></p><p>\" + Translator.trans(assets[0][\"total\"][asset].description, {}, 'message') + \"</p></div>\";
                /* --- DETAILS BY PLATFORM --- */
                content += \"<table id='crypto-details-table'><thead><tr><th></th><th>Wallet <i class='fas fa-wallet'></i></th><th>Staking <i class='fas fa-coins'></i></th><th>Locked <i class='fas fa-unlock-alt'></i></th><th>Pools <i class='fas fa-balance-scale'></i></th></tr></thead><tbody>\";
                content += \"<tr><td class='crypto-details-platforms'><img src='/images/exchanges/binance.png'><b>Binance</b></td><td>1.2</td><td>1.2</td><td>1.2</td><td>1.2</td></tr>\";
                content += \"<tr><td class='crypto-details-platforms'><img src='/images/exchanges/kraken.png'><b>Kraken</b></td><td>1.2</td><td>1.2</td><td>1.2</td><td>1.2</td></tr></tbody></table>\";
                /* --- FOOTER --- */
                content += \"<hr class='hr-modal-detail mb-4 mt-10'><p class='text-center'>Pour plus d'informations, regardez la partie <a href='#'>Aide</a> ou <a href='#'>Lexique</a><div class='text-center my-2'><div id='social-network-icons'>\";
                if (assets[0][\"total\"][asset].social_network['homepage'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['homepage'] + \"' target='_blank'><img class='social-network' src='/images/icons/web.png' alt='icon-website'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['medium'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['medium'] + \"' target='_blank'><img class='social-network' src='/images/icons/medium.png' alt='icon-mediem'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['facebook'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['facebook'] + \"' target='_blank'><img class='social-network' src='/images/icons/facebook.png' alt='icon-facebook'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['twitter'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['twitter'] + \"' target='_blank'><img class='social-network' src='/images/icons/twitter.png' alt='icon-twitter'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['discord'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['discord'] + \"' target='_blank'><img class='social-network' src='/images/icons/discord.png' alt='icon-discord'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['telegram'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['telegram'] + \"' target='_blank'><img class='social-network' src='/images/icons/telegram.png' alt='icon-telegram'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['reddit'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['reddit'] + \"' target='_blank'><img class='social-network' src='/images/icons/reddit.png' alt='icon-reddit'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['subsocial'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['subsocial'] + \"' target='_blank'><img class='social-network' src='/images/icons/subsocial.png' alt='icon-subsocial'></a>\"; }
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
        return array (  495 => 255,  455 => 218,  429 => 195,  416 => 185,  412 => 184,  406 => 181,  402 => 180,  339 => 120,  335 => 119,  329 => 116,  325 => 115,  311 => 105,  301 => 104,  284 => 96,  273 => 88,  267 => 85,  263 => 84,  259 => 83,  255 => 82,  251 => 81,  246 => 79,  241 => 77,  237 => 76,  232 => 74,  226 => 71,  220 => 68,  206 => 57,  194 => 48,  190 => 47,  175 => 35,  171 => 33,  160 => 30,  153 => 29,  149 => 28,  141 => 23,  134 => 19,  130 => 18,  120 => 11,  114 => 8,  111 => 7,  101 => 6,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}My Crypto Portfolio{% endblock %}
{% block stylesheets %}<link href=\"{{ asset('utilities/ms-Dropdown-master/dist/css/dd.css') }}\" rel=\"stylesheet\" />{% endblock %}
 
{% block body %}
    <div class=\"panel-right-content\">
        <h1 id=\"\" class=\"c-blue\">{{ 'TITLE_MY_PORTFOLIO'|trans({}, 'message' ) }}</h1>

        <!-- LOADER CHART -->
        <div id=\"crypto-chart-loader\">{{ include('loader_cube.html.twig') }}</div>
        <div id=\"crypto-chart\">
            <div id=\"chartContainer\"></div>
        </div>

        <!-- EXCHANGE LIST -->
        <div id=\"my-exchange-list\" class=\"mt-5\">
            <h2 class=\"c-blue\">{{ 'TITLE_MY_PLATFORMS'|trans({}, 'message' ) }}</h2>
            <small class=\"c-blue\">{{ 'TITLE_ADD_OR_CONSULT_ACCOUNT'|trans({}, 'message' ) }}</small>

            <div class=\"grid grid-cols-6\">
                <!-- EXCHANGE CARD ALL -->
                <div id=\"all\" class=\"platform-card exchange-card exchange-box-shadow text-center allPlatform\" style=\"background-image:url('{{ asset('images/asset-card-blue.jpg') }}')\">
                    <img class=\"logo-plateform-card\" src=\"/images/portfolio/all-plateform.png\" alt=\"Toutes les plateformes\">
                </div>

                <!-- MY EXCHANGE CARD -->
                {% for platform in userPlatforms %}
                    <div id=\"{{ platform.platform.name }}\" class=\"platform-card exchange-card exchange-card-with-logo text-center platform\" style=\"background-image:url('{{ asset('images/asset-card-blue.jpg') }}')\">
                        <img class=\"logo-plateform-card\" src=\"/images/exchanges/{{ platform.platform.image }}\" alt=\"platform-{{ platform.platform.name }}\">
                    </div>
                {% endfor %}

                <!-- EXCHANGE CARD ADD -->
                <div id=\"addExchangeModal\" class=\"exchange-card-add text-center\" data-toggle=\"modal\" data-target=\"#modalAddPlatform\" style=\"background-image:url('{{ asset('images/asset-card-blue.jpg') }}')\">
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
                <div id=\"displayAssets\" class=\"text-right mr-3\">
                    <button id=\"displayBlock\" class=\"buttonChooseDisplaying bg-blue\" type=\"button\"><i class=\"fas fa-th-large\"></i></button>
                    <button id=\"displayLine\" class=\"buttonChooseDisplaying c-blue\" type=\"button\"><i class=\"fas fa-grip-lines\"></i></button>
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
    <div id=\"modalAddExchange\" class=\"modal\">
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
                            \$('#total-wallet-value').html(\"Mon Portefeuille\");
                            \$('#list-crypto-loader').show();
                        },
                        success: function(response) {
                            assets = response;
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

            function removeShadowBoxAllCard() {
                \$('.platform-card').removeClass('exchange-box-shadow');
            };
               
            function appendAssetsBlock() {
                \$('#assets').addClass(\"grid grid-cols-6\")
                \$('#assets').html(\"\");
                let append = \"\";
                let wallet_price = 0;
                let total_price = 0;
                if (currencyChoose == \"primary\") { total_price = assets[1][\"primary\"]; }
                else { total_price = assets[1][\"secondary\"]; }
                for (let asset in assets[0][\"total\"]) {
                    if (asset == \"USD\" || asset == \"EUR\") { wallet_price = (assets[0][\"total\"][asset].price * assets[0][\"total\"][asset].wallet) + (assets[0][\"total\"][asset].price * assets[0][\"total\"][asset].staking); }
                    else { wallet_price = (assets[0][\"total\"][asset].price[currency.toLowerCase()] * assets[0][\"total\"][asset].wallet) + (assets[0][\"total\"][asset].price[currency.toLowerCase()] * assets[0][\"total\"][asset].staking); }
                    if (parseFloat(wallet_price).toFixed(2) != 0) {
                        append += \"<div id='\" + assets[0][\"total\"][asset].id + \"' class='assets-card crypto-information' style='background-image:url({{ asset('images/asset-card-white.jpg') }})'>\";
                        append += \"<img class='logo-plateform-card' src='\" + assets[0][\"total\"][asset].image + \"' alt='crypto-logo-\" + assets[0][\"total\"][asset].name + \"'>\";
                        append += \"<h4 class='text-center c-blue pt-3'>\" + assets[0][\"total\"][asset].name + \"</h4>\";
                        append += \"<hr class='hr-blue my-3'>\";
                        append += \"<div class='grid grid-cols-3'>\";
                        append += \"<div class='text-right pr-2'>\";
                        append += \"<span><i class='fas fa-chart-area c-blue'></i></span><br><span><i class='far fa-money-bill-alt c-blue'></i></span><br><span><i class='fas fa-wallet c-blue'></i></span><br>\";
                        append += \"<span><i class='fas fa-coins c-blue'></i></span><br><span><i class='fas fa-unlock-alt c-blue'></i></span><br><span><i class='fas fa-balance-scale c-blue'></i></span><br></div>\";
                        append += \"<div class='col-span-2 pl-2 c-blue font-semibold'>\";
                        if (asset == \"USD\" || asset == \"EUR\") { append += \"<span>\" + parseFloat(assets[0][\"total\"][asset].price).toFixed(2) + \" \" + currencySymbol + \"</span>\"; }
                        else { append += \"<span>\" + parseFloat(assets[0][\"total\"][asset].price[currency.toLowerCase()]).toFixed(2) + \" \" + currencySymbol + \"</span>\"; }
                        append += \"<br><span>\" + parseFloat(wallet_price).toFixed(2) + \" \" + currencySymbol +\"</span><br>\";
                        append += \"<span>\" + parseFloat(assets[0][\"total\"][asset].wallet).toFixed(2) + \"</span><br><span>\" + parseFloat(assets[0][\"total\"][asset].staking).toFixed(2) + \"</span><br>\";
                        append += \"<span>\" + parseFloat(assets[0][\"total\"][asset].locked).toFixed(2) + \"</span><br><span>\" + parseFloat(assets[0][\"total\"][asset].pools).toFixed(2) + \"</span><br>\";
                        append += \"</div></div><hr class='hr-blue my-3'>\";
                        append += \"<div class='float-right platform-used'>\";
                        if (platformSelected == \"\") {
                            platforms = assets[0][\"total\"][asset].platform.split(';')
                            platforms.forEach(platform => {
                                if (platform.includes(\"/\")) { let split = platform.split(\"/\"); platform = split[0]; }
                                append += \"<img class='plateform-used-card' src='/images/exchanges/\" + platform + \".png' alt='crypto-platform-used-\" + platform + \"'>\";
                            });
                        }
                        else {
                            append += \"<img class='plateform-used-card' src='/images/exchanges/\" + assets[0][\"total\"][asset].platform + \".png' alt='crypto-platform-used-\" + assets[0][\"total\"][asset].platform + \"'>\";
                        }
                        append += \"</div></div>\";
                    }
                    
                }
                \$('#list-crypto-loader').hide();
                \$('#total-wallet-value').html(\"Mon Portefeuille - \" + parseFloat(total_price).toFixed(2) + currencySymbol);
                \$('#assets').html(append);
            }

            function appendAssetsLine() {
                \$('#assets').removeClass(\"grid grid-cols-6\")
                \$('#assets').html(\"\");
                let append = \"<table class='table-auto table-crypto text-center mt-2'><thead><tr><th></th><th></th><th><i class='fas fa-chart-area'></i></th>\";
                append += \"<th><i class='far fa-money-bill-alt'></i></th><th><i class='fas fa-wallet'></i></th><th><i class='fas fa-coins'></i></th>\";
                append += \"<th><i class='fas fa-unlock-alt'></i></th><th><i class='fas fa-balance-scale'></i></th><th class='py-1'>Plateformes</th></tr></thead><tbody>\";
                let wallet_price = 0;
                let total_price = 0;
                if (currencyChoose == \"primary\") { total_price = assets[1][\"primary\"]; }
                else { total_price = assets[1][\"secondary\"]; }
                for (let asset in assets[0][\"total\"]) {
                    if (asset == \"USD\" || asset == \"EUR\") { wallet_price = (assets[0][\"total\"][asset].price * assets[0][\"total\"][asset].wallet) + (assets[0][\"total\"][asset].price * assets[0][\"total\"][asset].staking); }
                    else { wallet_price = (assets[0][\"total\"][asset].price[currency.toLowerCase()] * assets[0][\"total\"][asset].wallet) + (assets[0][\"total\"][asset].price[currency.toLowerCase()] * assets[0][\"total\"][asset].staking); }
                    if (parseFloat(wallet_price).toFixed(2) != 0) {
                        if (asset == \"USD\" || asset == \"EUR\") {
                            append +=\"<tr id='\" + assets[0][\"total\"][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='/images/assets/cryptos/\" + assets[0][\"total\"][asset].id + \".png' alt='crypto-logo-\" + assets[0][\"total\"][asset].name + \"'></td><td><b>\" + assets[0][\"total\"][asset].name + \"</b></td>\";
                            append += \"<td>\" + parseFloat(assets[0][\"total\"][asset].price).toFixed(2) + \" \" + currencySymbol + \"</td>\"; 
                        }
                        else { 
                            append +=\"<tr id='\" + assets[0][\"total\"][asset].id + \"' class='crypto-information'><td class='table-crypto-icon'><img src='\" + assets[0][\"total\"][asset].image + \"' alt='crypto-logo-\" + assets[0][\"total\"][asset].name + \"'></td><td><b>\" + assets[0][\"total\"][asset].name + \"</b></td>\";
                            append+= \"<td>\" + parseFloat(assets[0][\"total\"][asset].price[currency.toLowerCase()]).toFixed(2) + \" \" + currencySymbol + \"</td>\"; 
                        }
                        append += \"<td>\" + parseFloat(wallet_price).toFixed(2) + \" \" + currencySymbol + \"</td><td>\" + parseFloat(assets[0][\"total\"][asset].wallet).toFixed(2) + \"</td><td>\" + parseFloat(assets[0][\"total\"][asset].staking).toFixed(2) + \"</td>\";
                        append += \"<td>\" + parseFloat(assets[0][\"total\"][asset].locked).toFixed(2) + \"</td><td>\" + parseFloat(assets[0][\"total\"][asset].pools).toFixed(2) + \"</td><td class='table-crypto-platforms'>\";
                        if (platformSelected == \"\") {
                            platforms = assets[0][\"total\"][asset].platform.split(';')
                            platforms.forEach(platform => {
                                if (platform.includes(\"/\")) { let split = platform.split(\"/\"); platform = split[0]; }
                                append += \"<img class='plateform-used-card' src='/images/exchanges/\" + platform + \".png' alt='crypto-platform-used-\" + platform + \"'>\";
                            });
                        }
                        else {
                            append += \"<img class='plateform-used-card' src='/images/exchanges/\" + assets[0][\"total\"][asset].platform + \".png' alt='crypto-platform-used-\" + assets[0][\"total\"][asset].platform + \"'>\";
                        }
                    }
                }
                append += \"</td></tr></tbody></table>\";
                \$('#list-crypto-loader').hide();
                \$('#total-wallet-value').html(\"Mon Portefeuille - \" + parseFloat(total_price).toFixed(2) + currencySymbol);
                \$('#assets').html(append);
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
                content = \"<div class='grid grid-cols-6'><div><img id='show-detail-principal-icon' src='\" + assets[0][\"total\"][asset].image + \"'></div>\";
                /* --- CENTER COLUMN --- */
                content += \"<div id='crypto-details' class='col-span-2 c-blue'><h4><b>\" + assets[0][\"total\"][asset].name + \" ( \" + assets[0][\"total\"][asset].id + \" )</b></h4>\"
                if (assets[0][\"total\"][asset].contract_address !== \"\") { content += \"<p><b>\" + Translator.trans('TITLE_CONTRACT_ADDRESS', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].contract_address + \"</p>\"; }
                content += \"<p><b>\" + Translator.trans('TITLE_MARKET_CAP', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].market_cap[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                content += \"<p><b>\" + Translator.trans('TITLE_TOTAL_SUPPLY', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].total_supply.toLocaleString().toString().replace(\" \", \",\") + \" \" + assets[0][\"total\"][asset].id + \"</p>\";
                content += \"<p><b>\" + Translator.trans('TITLE_CIRCULATING_SUPPLY', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].circulating_supply.toLocaleString().toString().replace(\" \", \",\") + \" \" + assets[0][\"total\"][asset].id + \"</p>\";
                content += \"<p><b>\" + Translator.trans('TITLE_ATH', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].ath[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                content += \"<p><b>\" + Translator.trans('TITLE_ATL', {}, 'message') + \"</b> : \" + assets[0][\"total\"][asset].atl[currency.toLowerCase()].toLocaleString().toString().replace(\" \", \",\") + \" \" + currencySymbol + \"</p>\";
                content += \"</div>\";
                /* --- RIGHT COLUMN --- */
                content += \"<div class='col-span-3'>\";
                content += \"<div class='price-change grid grid-cols-3'>\";
                    /* --- PRICE CHANGE --- */
                    content += \"<div>\";
                        content += \"<h5 class='c-blue'><i class='fas fa-chart-area mr-2'></i>\" + assets[0][\"total\"][asset].price[currency.toLowerCase()] + \" \" + currencySymbol + \"</h5>\";
                        let price_change_24h = assets[0][\"total\"][asset].price_change_24h.toString();
                        let price_change_7d = assets[0][\"total\"][asset].price_change_7d.toString();
                        let price_change_30d = assets[0][\"total\"][asset].price_change_30d.toString();
                        if (price_change_24h.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][\"total\"][asset].price_change_24h.toString().substr(1) + \" %</span><span class='c-blue'> (24h)</span></p>\"; }
                        else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][\"total\"][asset].price_change_24h.toString() + \" %</span><span class='c-blue'> (24h)</span></p>\"; }
                        if (price_change_7d.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][\"total\"][asset].price_change_7d.toString().substr(1) + \" %</span><span class='c-blue'> (7d)</span></p>\"; }
                        else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][\"total\"][asset].price_change_7d.toString() + \" %</span><span class='c-blue'> (7d)</span></p>\"; }
                        if (price_change_30d.charAt(0) == \"-\") { content += \"<p><span style='color: red'><i class='fas fa-angle-double-down mr-2'></i>\" + assets[0][\"total\"][asset].price_change_30d.toString().substr(1) + \" %</span><span class='c-blue'> (30d)</span></p>\"; }
                        else { content += \"<p><span style='color: green'><i class='fas fa-angle-double-up mr-2'></i>\" + assets[0][\"total\"][asset].price_change_30d.toString() + \" %</span><span class='c-blue'> (30d)</span></p>\"; }
                    content += \"</div>\";
                    /* --- CHART --- */
                    content += \"<div class='col-span-2'><img src='/images/chart.png' alt='chart-\" + assets[0][\"total\"][asset].name + \"'></div>\";
                content += \"</div></div></div>\";
                /* --- DESCRIPTION --- */
                content += \"<div class='my-4 c-blue'><p><b>Description</b></p><p>\" + Translator.trans(assets[0][\"total\"][asset].description, {}, 'message') + \"</p></div>\";
                /* --- DETAILS BY PLATFORM --- */
                content += \"<table id='crypto-details-table'><thead><tr><th></th><th>Wallet <i class='fas fa-wallet'></i></th><th>Staking <i class='fas fa-coins'></i></th><th>Locked <i class='fas fa-unlock-alt'></i></th><th>Pools <i class='fas fa-balance-scale'></i></th></tr></thead><tbody>\";
                content += \"<tr><td class='crypto-details-platforms'><img src='/images/exchanges/binance.png'><b>Binance</b></td><td>1.2</td><td>1.2</td><td>1.2</td><td>1.2</td></tr>\";
                content += \"<tr><td class='crypto-details-platforms'><img src='/images/exchanges/kraken.png'><b>Kraken</b></td><td>1.2</td><td>1.2</td><td>1.2</td><td>1.2</td></tr></tbody></table>\";
                /* --- FOOTER --- */
                content += \"<hr class='hr-modal-detail mb-4 mt-10'><p class='text-center'>Pour plus d'informations, regardez la partie <a href='#'>Aide</a> ou <a href='#'>Lexique</a><div class='text-center my-2'><div id='social-network-icons'>\";
                if (assets[0][\"total\"][asset].social_network['homepage'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['homepage'] + \"' target='_blank'><img class='social-network' src='/images/icons/web.png' alt='icon-website'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['medium'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['medium'] + \"' target='_blank'><img class='social-network' src='/images/icons/medium.png' alt='icon-mediem'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['facebook'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['facebook'] + \"' target='_blank'><img class='social-network' src='/images/icons/facebook.png' alt='icon-facebook'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['twitter'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['twitter'] + \"' target='_blank'><img class='social-network' src='/images/icons/twitter.png' alt='icon-twitter'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['discord'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['discord'] + \"' target='_blank'><img class='social-network' src='/images/icons/discord.png' alt='icon-discord'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['telegram'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['telegram'] + \"' target='_blank'><img class='social-network' src='/images/icons/telegram.png' alt='icon-telegram'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['reddit'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['reddit'] + \"' target='_blank'><img class='social-network' src='/images/icons/reddit.png' alt='icon-reddit'></a>\"; }
                if (assets[0][\"total\"][asset].social_network['subsocial'] !== \"\") { content += \"<a href='\" + assets[0][\"total\"][asset].social_network['subsocial'] + \"' target='_blank'><img class='social-network' src='/images/icons/subsocial.png' alt='icon-subsocial'></a>\"; }
                content += \"</div></div>\";

                \$('#modalShowDetail').find('.modal-content').find('.modal-header').append(header);
                \$('#modalShowDetail').find('.modal-content').find('.modal-body').append(content);
                \$('#modalShowDetail').show();
            }
        });
    </script>
{% endblock %}", "panel/cryptos.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\CryptoPortfolio\\templates\\panel\\cryptos.html.twig");
    }
}
