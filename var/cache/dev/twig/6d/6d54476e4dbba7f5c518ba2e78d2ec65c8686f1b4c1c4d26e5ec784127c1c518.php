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

/* @BazingaJsTranslation/getTranslations.js.twig */
class __TwigTemplate_0d29d2bf9de23e84499ad804762918af0cf1e428e363633d732fb4918747a691 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BazingaJsTranslation/getTranslations.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BazingaJsTranslation/getTranslations.js.twig"));

        // line 1
        echo "(function (t) {
";
        // line 2
        if ((isset($context["include_config"]) || array_key_exists("include_config", $context) ? $context["include_config"] : (function () { throw new RuntimeError('Variable "include_config" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "t.fallback = '";
            echo twig_escape_filter($this->env, (isset($context["fallback"]) || array_key_exists("fallback", $context) ? $context["fallback"] : (function () { throw new RuntimeError('Variable "fallback" does not exist.', 3, $this->source); })()), "js", null, true);
            echo "';
t.defaultDomain = '";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) || array_key_exists("defaultDomain", $context) ? $context["defaultDomain"] : (function () { throw new RuntimeError('Variable "defaultDomain" does not exist.', 4, $this->source); })()), "js", null, true);
            echo "';
";
        }
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["locale"] => $context["domains"]) {
            // line 7
            echo "// ";
            echo twig_escape_filter($this->env, $context["locale"], "js", null, true);
            echo "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["domains"]);
            foreach ($context['_seq'] as $context["domain"] => $context["messages"]) {
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                    // line 10
                    echo "t.add(";
                    echo json_encode($context["key"]);
                    echo ", ";
                    echo json_encode($context["message"]);
                    echo ", \"";
                    echo twig_escape_filter($this->env, $context["domain"], "js", null, true);
                    echo "\", \"";
                    echo twig_escape_filter($this->env, $context["locale"], "js", null, true);
                    echo "\");
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['domain'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['domains'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "})(Translator);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BazingaJsTranslation/getTranslations.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 14,  75 => 10,  71 => 9,  67 => 8,  62 => 7,  58 => 6,  53 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(function (t) {
{% if include_config %}
t.fallback = '{{ fallback }}';
t.defaultDomain = '{{ defaultDomain }}';
{% endif %}
{% for locale, domains in translations %}
// {{ locale }}
{% for domain, messages in domains %}
{% for key, message in messages %}
t.add({{ key|json_encode|raw }}, {{ message|json_encode|raw }}, \"{{ domain }}\", \"{{ locale }}\");
{% endfor %}
{% endfor %}
{% endfor %}
})(Translator);
", "@BazingaJsTranslation/getTranslations.js.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\CryptoPortfolio\\vendor\\willdurand\\js-translation-bundle\\Resources\\views\\getTranslations.js.twig");
    }
}
