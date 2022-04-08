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

/* user/account.html.twig */
class __TwigTemplate_cd38063e2c3986bcf7db19049d22b2f06e985f49b0fc38f0128ff81504031374 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/account.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_MY_ACCOUNT", [], "message"), "html", null, true);
        
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
        echo "    <div class=\"col-start-2 col-span-8\">
        <div class=\"panel-right-content\">
            <h1 class=\"c-blue text-3xl text-center mb-20\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_MY_ACCOUNT", [], "message"), "html", null, true);
        echo "</h1>
            <div id=\"admin-panel\">
                <div class=\"admin-table\">
                    <h2 class=\"admin-subtitle mb-5\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-blue.jpg"), "html", null, true);
        echo "')\">Mes informations</h2>
                    <div class=\"grid grid-cols-4\">
                        <div class=\"col-start-2 col-span-2\">
                            <form id=\"formUser\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\" method=\"POST\" data-turbo=\"false\">
                                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 15, $this->source); })()), 'errors');
        echo "
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'row');
        echo "
                                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 17, $this->source); })()), "pseudo", [], "any", false, false, false, 17), 'row');
        echo "
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 18, $this->source); })()), "password", [], "any", false, false, false, 18), 'row');
        echo "
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 19, $this->source); })()), "_token", [], "any", false, false, false, 19), 'row');
        echo "
                                <div class=\"text-right\">
                                    <button class=\"btn bg-blue mt-3\" type=\"submit\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_EDIT", [], "message"), "html", null, true);
        echo "</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <h2 class=\"admin-subtitle mt-3\" style=\"background-image:url('";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asset-card-blue.jpg"), "html", null, true);
        echo "')\">Mes plateformes</h2>
                    <div class=\"admin_button_add mt-3\">
                        <button id=\"add_platform\" class=\"admin_add\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ADMIN_ADD_PLATFORM", [], "message"), "html", null, true);
        echo "</button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TABLE_TH_ID", [], "message"), "html", null, true);
        echo "</th>
                                <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TABLE_TH_ICON", [], "message"), "html", null, true);
        echo "</th>
                                <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TABLE_TH_NAME", [], "message"), "html", null, true);
        echo "</th>
                                <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TABLE_TH_ACTIONS", [], "message"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody id=\"body-table\">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT EXCHANGE DATAS -->
    <div id=\"modalPlatform\" class=\"modal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <span class=\"close\">&times;</span>
                <h2 class=\"c-blue pb-5\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_EDIT_EXCHANGE", [], "message"), "html", null, true);
        echo "</h2>
                <hr>
            </div>
            <form id=\"formPlatform\" action=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\" method=\"POST\" data-turbo=\"false\">
                <div class=\"modal-body\">
                    <div class=\"disclaimer\">
                        <p>";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_MODAL_ADD_EXCHANGE_DISCLAIMER", [], "message");
        echo "</p>
                    </div>
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'errors');
        echo "
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "platform", [], "any", false, false, false, 63), 'label');
        echo "
                    <div class=\"pb-2\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "platform", [], "any", false, false, false, 65), 'widget');
        echo "
                    </div>
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "publicKey", [], "any", false, false, false, 67), 'row');
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "secretKey", [], "any", false, false, false, 68), 'row');
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "address", [], "any", false, false, false, 69), 'row');
        echo "
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "passphrase", [], "any", false, false, false, 70), 'row');
        echo "
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "editId", [], "any", false, false, false, 71), 'row');
        echo "
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "_token", [], "any", false, false, false, 72), 'row');
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn bg-blue mt-3 float-right\" type=\"submit\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_EDIT", [], "message"), "html", null, true);
        echo "</button>
                </div>
            </form>
        </div>
    </div>
    <!-- MODAL CONFIRM DELETE -->
    <div id=\"modalDelete\" class=\"modal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <span class=\"close closeDelete\">&times;</span>
                <h2 class=\"c-blue pb-5\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_PLATFORM_CONFIRM_DELETE", [], "message"), "html", null, true);
        echo "</h2>
                <hr>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TEXT_PLATFORM_CONFIRM_DELETE", [], "message"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button id=\"confirmDelete\" class=\"btn bg-blue mt-3 float-right\" type=\"button\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_CONFIRM", [], "message"), "html", null, true);
        echo "</button>
                <button class=\"btn bg-grey mt-3 float-right closeDelete mr-1\" type=\"button\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TITLE_CLOSE", [], "message"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("cryptos");
        echo "
    <script>
        \$(function (){
            /* --- INITIALISATION --- */
            let edit = 0;
            let del = 0;
            displayPlatforms();

            /* --- ON CLICK EVENT --- */
            \$(document).on('click', '.fa-edit', function() {
                edit = \$(this).parent().parent().attr('id');
                edit = edit.split('_');
                \$('#user_platform_platform').val(edit[1]);
                \$('#user_platform_platform').prop(\"disabled\", true);
                showOptionModal();
                \$(\"#user_platform_editId\").val(edit[0]);
                \$('#modalPlatform').show();
            });
            \$(document).on('click', '.fa-trash-alt', function() {
                del = \$(this).parent().parent().attr('id');
                del = del.split('_');
                del = del[0];
                \$('#modalDelete').show();
            });
            \$('#add_platform').on('click', function() {
                \$(\"#user_platform_editId\").val(null);
                \$(\"#user_platform_platform\").prop( \"disabled\", false );
                \$('#modalPlatform').show();
            });
            \$('#confirmDelete').on('click', function() {
                \$.ajax({
                    url: '";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_delete_platform");
        echo "',
                    method: \"POST\",
                    data: { id: del },
                    dataType: 'json',
                    success: function(response) {
                        \$('#modalDelete').hide();
                        displayPlatforms();
                    }
                });
            });
            \$('.closeDelete').on('click', function() {
                \$('#modalDelete').hide();
            });

            /* --- ON SUBMIT EVENT --- */
            \$(\"#formPlatform\").submit(function( event ) {
                \$(\"#user_platform_platform\").prop( \"disabled\", false );
            }); 

            /* --- FUNCTION --- */
            function displayPlatforms() {
                \$.ajax({
                    url: '";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_get_platforms");
        echo "',
                    method: \"POST\",
                    dataType: 'json',
                    success: function(response) {
                        \$('#body-table').html(\"\");
                        let content = \"\";
                        response.forEach(function callback(value, key) {
                            content += \"<tr id='\"+response[key].id+\"_\"+response[key].platform.id+\"'>\";
                            content += \"<td>\"+response[key].id+\"</td>\";
                            content += \"<td><img src='/images/platforms/cryptos/\"+response[key].platform.image+\"' alt='icon-\"+response[key].platform.name+\"' style='height: 2rem; width: auto; margin: auto' ></td>\";
                            content += \"<td>\"+response[key].platform.name+\"</td>\";
                            content += \"<td><i class='platformModal fas fa-edit c-blue'></i><i class='fas fa-trash-alt c-blue'></i></td>\";
                            content += \"</tr>\";
                        });
                        \$('#body-table').html(content);
                    }
                });
            }

            function showOptionModal() {
                let option = \$('#user_platform_platform option:selected').attr('data-name');
                switch (option) {
                    case \"Metamask\":
                    case \"Substrate\":
                        \$('#user_platform_publicKey').parent().hide();
                        \$('#user_platform_publicKey').prop('required', false);
                        \$('#user_platform_secretKey').parent().hide();
                        \$('#user_platform_secretKey').prop('required', false);
                        \$('#user_platform_passphrase').parent().hide();
                        \$('#user_platform_passphrase').prop('required', false);
                        \$('#user_platform_address').parent().show();
                        \$('#user_platform_address').prop('required', true);
                        break;
                    case \"KuCoin\":
                        \$('#user_platform_publicKey').parent().show();
                        \$('#user_platform_publicKey').prop('required', true);
                        \$('#user_platform_secretKey').parent().show();
                        \$('#user_platform_secretKey').prop('required', true);
                        \$('#user_platform_passphrase').parent().show();
                        \$('#user_platform_passphrase').prop('required', true);
                        \$('#user_platform_address').parent().hide();
                        \$('#user_platform_address').prop('required', false);
                        break;
                    default:
                        \$('#user_platform_publicKey').parent().show();
                        \$('#user_platform_publicKey').prop('required', true);
                        \$('#user_platform_secretKey').parent().show();
                        \$('#user_platform_secretKey').prop('required', true);
                        \$('#user_platform_passphrase').parent().hide();
                        \$('#user_platform_passphrase').prop('required', false);
                        \$('#user_platform_address').parent().hide();
                        \$('#user_platform_address').prop('required', false);
                        break;
                }
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 153,  331 => 131,  296 => 100,  286 => 99,  271 => 93,  267 => 92,  261 => 89,  254 => 85,  241 => 75,  235 => 72,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  210 => 65,  205 => 63,  201 => 62,  196 => 60,  190 => 57,  184 => 54,  164 => 37,  160 => 36,  156 => 35,  152 => 34,  144 => 29,  139 => 27,  130 => 21,  125 => 19,  121 => 18,  117 => 17,  113 => 16,  109 => 15,  105 => 14,  99 => 11,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}{{ 'TITLE_MY_ACCOUNT'|trans({}, 'message' ) }}{% endblock %}
 
{% block body %}
    <div class=\"col-start-2 col-span-8\">
        <div class=\"panel-right-content\">
            <h1 class=\"c-blue text-3xl text-center mb-20\">{{ 'TITLE_MY_ACCOUNT'|trans({}, 'message' ) }}</h1>
            <div id=\"admin-panel\">
                <div class=\"admin-table\">
                    <h2 class=\"admin-subtitle mb-5\" style=\"background-image:url('{{ asset('images/asset-card-blue.jpg') }}')\">Mes informations</h2>
                    <div class=\"grid grid-cols-4\">
                        <div class=\"col-start-2 col-span-2\">
                            <form id=\"formUser\" action=\"{{ path('app_account') }}\" method=\"POST\" data-turbo=\"false\">
                                {{ form_errors(userForm) }}
                                {{ form_row(userForm.email) }}
                                {{ form_row(userForm.pseudo) }}
                                {{ form_row(userForm.password) }}
                                {{ form_row(userForm._token) }}
                                <div class=\"text-right\">
                                    <button class=\"btn bg-blue mt-3\" type=\"submit\">{{ 'TITLE_EDIT'|trans({}, 'message' ) }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <h2 class=\"admin-subtitle mt-3\" style=\"background-image:url('{{ asset('images/asset-card-blue.jpg') }}')\">Mes plateformes</h2>
                    <div class=\"admin_button_add mt-3\">
                        <button id=\"add_platform\" class=\"admin_add\">{{ 'ADMIN_ADD_PLATFORM'|trans({}, 'message' ) }}</button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>{{ 'TABLE_TH_ID'|trans({}, 'message' ) }}</th>
                                <th>{{ 'TABLE_TH_ICON'|trans({}, 'message' ) }}</th>
                                <th>{{ 'TABLE_TH_NAME'|trans({}, 'message' ) }}</th>
                                <th>{{ 'TABLE_TH_ACTIONS'|trans({}, 'message' ) }}</th>
                            </tr>
                        </thead>
                        <tbody id=\"body-table\">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT EXCHANGE DATAS -->
    <div id=\"modalPlatform\" class=\"modal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <span class=\"close\">&times;</span>
                <h2 class=\"c-blue pb-5\">{{ 'TITLE_EDIT_EXCHANGE'|trans({}, 'message' ) }}</h2>
                <hr>
            </div>
            <form id=\"formPlatform\" action=\"{{ path('app_account') }}\" method=\"POST\" data-turbo=\"false\">
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
                    {{ form_row(form.editId) }}
                    {{ form_row(form._token) }}
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn bg-blue mt-3 float-right\" type=\"submit\">{{ 'TITLE_EDIT'|trans({}, 'message' ) }}</button>
                </div>
            </form>
        </div>
    </div>
    <!-- MODAL CONFIRM DELETE -->
    <div id=\"modalDelete\" class=\"modal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <span class=\"close closeDelete\">&times;</span>
                <h2 class=\"c-blue pb-5\">{{ 'TITLE_PLATFORM_CONFIRM_DELETE'|trans({}, 'message' ) }}</h2>
                <hr>
            </div>
            <div class=\"modal-body\">
                <p>{{ 'TEXT_PLATFORM_CONFIRM_DELETE'|trans({}, 'message' ) }}</p>
            </div>
            <div class=\"modal-footer\">
                <button id=\"confirmDelete\" class=\"btn bg-blue mt-3 float-right\" type=\"button\">{{ 'TITLE_CONFIRM'|trans({}, 'message' ) }}</button>
                <button class=\"btn bg-grey mt-3 float-right closeDelete mr-1\" type=\"button\">{{ 'TITLE_CLOSE'|trans({}, 'message' ) }}</button>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('cryptos') }}
    <script>
        \$(function (){
            /* --- INITIALISATION --- */
            let edit = 0;
            let del = 0;
            displayPlatforms();

            /* --- ON CLICK EVENT --- */
            \$(document).on('click', '.fa-edit', function() {
                edit = \$(this).parent().parent().attr('id');
                edit = edit.split('_');
                \$('#user_platform_platform').val(edit[1]);
                \$('#user_platform_platform').prop(\"disabled\", true);
                showOptionModal();
                \$(\"#user_platform_editId\").val(edit[0]);
                \$('#modalPlatform').show();
            });
            \$(document).on('click', '.fa-trash-alt', function() {
                del = \$(this).parent().parent().attr('id');
                del = del.split('_');
                del = del[0];
                \$('#modalDelete').show();
            });
            \$('#add_platform').on('click', function() {
                \$(\"#user_platform_editId\").val(null);
                \$(\"#user_platform_platform\").prop( \"disabled\", false );
                \$('#modalPlatform').show();
            });
            \$('#confirmDelete').on('click', function() {
                \$.ajax({
                    url: '{{ (path('app_account_delete_platform')) }}',
                    method: \"POST\",
                    data: { id: del },
                    dataType: 'json',
                    success: function(response) {
                        \$('#modalDelete').hide();
                        displayPlatforms();
                    }
                });
            });
            \$('.closeDelete').on('click', function() {
                \$('#modalDelete').hide();
            });

            /* --- ON SUBMIT EVENT --- */
            \$(\"#formPlatform\").submit(function( event ) {
                \$(\"#user_platform_platform\").prop( \"disabled\", false );
            }); 

            /* --- FUNCTION --- */
            function displayPlatforms() {
                \$.ajax({
                    url: '{{ (path('app_account_get_platforms')) }}',
                    method: \"POST\",
                    dataType: 'json',
                    success: function(response) {
                        \$('#body-table').html(\"\");
                        let content = \"\";
                        response.forEach(function callback(value, key) {
                            content += \"<tr id='\"+response[key].id+\"_\"+response[key].platform.id+\"'>\";
                            content += \"<td>\"+response[key].id+\"</td>\";
                            content += \"<td><img src='/images/platforms/cryptos/\"+response[key].platform.image+\"' alt='icon-\"+response[key].platform.name+\"' style='height: 2rem; width: auto; margin: auto' ></td>\";
                            content += \"<td>\"+response[key].platform.name+\"</td>\";
                            content += \"<td><i class='platformModal fas fa-edit c-blue'></i><i class='fas fa-trash-alt c-blue'></i></td>\";
                            content += \"</tr>\";
                        });
                        \$('#body-table').html(content);
                    }
                });
            }

            function showOptionModal() {
                let option = \$('#user_platform_platform option:selected').attr('data-name');
                switch (option) {
                    case \"Metamask\":
                    case \"Substrate\":
                        \$('#user_platform_publicKey').parent().hide();
                        \$('#user_platform_publicKey').prop('required', false);
                        \$('#user_platform_secretKey').parent().hide();
                        \$('#user_platform_secretKey').prop('required', false);
                        \$('#user_platform_passphrase').parent().hide();
                        \$('#user_platform_passphrase').prop('required', false);
                        \$('#user_platform_address').parent().show();
                        \$('#user_platform_address').prop('required', true);
                        break;
                    case \"KuCoin\":
                        \$('#user_platform_publicKey').parent().show();
                        \$('#user_platform_publicKey').prop('required', true);
                        \$('#user_platform_secretKey').parent().show();
                        \$('#user_platform_secretKey').prop('required', true);
                        \$('#user_platform_passphrase').parent().show();
                        \$('#user_platform_passphrase').prop('required', true);
                        \$('#user_platform_address').parent().hide();
                        \$('#user_platform_address').prop('required', false);
                        break;
                    default:
                        \$('#user_platform_publicKey').parent().show();
                        \$('#user_platform_publicKey').prop('required', true);
                        \$('#user_platform_secretKey').parent().show();
                        \$('#user_platform_secretKey').prop('required', true);
                        \$('#user_platform_passphrase').parent().hide();
                        \$('#user_platform_passphrase').prop('required', false);
                        \$('#user_platform_address').parent().hide();
                        \$('#user_platform_address').prop('required', false);
                        break;
                }
            }
        });
    </script>
{% endblock %}", "user/account.html.twig", "/home/teo/dev/CryptoPortfolio/templates/user/account.html.twig");
    }
}
