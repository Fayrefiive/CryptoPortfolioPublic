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

/* legal/legal-notice.html.twig */
class __TwigTemplate_39885cc09a0aefb1752d326bf59a3c7a2f301a27f16b5082c40647cf4d93cd5b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal/legal-notice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal/legal-notice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "legal/legal-notice.html.twig", 1);
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
        echo "    <div class=\"panel-right-content\">
        <h1 class=\"c-blue text-4xl text-center mb-20\">Mentions légales</h1>
        <br>
        <p>Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> sont :</p>
        <br>
        <p><b>Editeur du Site : </b></p>
        <p>Nom : LAULY<br>Prénom : Téo<br>63 rue Bonne Fontaine<br>Email : contact@my-investment-portfolio.com<br>Site Web : <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a></p>
        <br>
        <p><b>Hébergement :</b></p>
        <p>Hébergeur : OVH<br>2 rue Kellermann - 59100 Roubaix - France<br>Site Web :  <a href=\"https://www.ovhcloud.com/fr/\">www.ovhcloud.com/fr/</a></p>
        <br>
        <p><b>Développement : </b></p>
        <p>LAULY Téo<br>Adresse : 63 rue Bonne Fontaine<br>Site Web : <a href=\"https://www.teolauly.com\">www.teolauly.com</a></p>
        <br>
        <p><b>Conditions d’utilisation : </b></p>
        <p>Ce site (<a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>) est proposé en différents langages web (PHP, HTML5, Javascript, CSS, etc…) pour un meilleur confort d'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Safari, Firefox, Google Chrome, etc…</p>
        <p>Les mentions légales ont été générées sur le site <a title=\"générateur de mentions légales pour site internet gratuit\" href=\"http://www.generateur-de-mentions-legales.com\">Générateur de mentions légales</a>, offert par <a title=\"imprimerie paris, imprimeur paris\" href=\"http://welye.com\">Welye</a>.</p>
        <p>LAULY Téo met en œuvre tous les moyens dont il dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations auprès de XXXXXXXX, et signaler toutes modifications du site qu'il jugerait utile. XXXXXXXX n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>
        <br>
        <p><b>Cookies</b> : Le site <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d'affichage. Un cookies est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.</p>
        <br>
        <p><b>Liens hypertextes :</b> Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. LAULY Téo ne dispose d'aucun moyen pour contrôler les sites en connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l'internaute, qui doit se conformer à leurs conditions d'utilisation.</p>
        <p>Les utilisateurs, les abonnés et les visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et préalable de LAULY Téo.</p>
        <p>Dans l'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de LAULY Téo, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. LAULY Téo se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.</p>
        <br>
        <p><b>Services fournis : </b></p>
        <p>L'ensemble des activités ainsi que ses informations sont présentés sur notre site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>.</p>
        <p>LAULY Téo s’efforce de fournir sur le site www.my-investment-portfolio.com des informations aussi précises que possible. les renseignements figurant sur le site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site https://www.my-investment-portfolio.com sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.  </p>
        <br>
        <p><b>Limitation contractuelles sur les données : </b></p>
        <p>Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse contact@my-investment-portfolio.com, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).</p>
        <p>Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
        <p>Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de LAULY Téo.</p>
        <br>
        <p><b>Propriété intellectuelle :</b></p>
        <p>Tout le contenu du présent sur le site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la LAULY Téo à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.</p>
        <p>Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de LAULY Téo. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>
        <br>
        <p><b>Déclaration à la CNIL : </b></p>
        <p>Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l'égard des traitements de données à caractère personnel) relative à l'informatique, aux fichiers et aux libertés, ce site a fait l'objet d'une déclaration XXXXXXXX auprès de la Commission nationale de l'informatique et des libertés (<a href=\"http://www.cnil.fr/\">www.cnil.fr</a>).</p>
        <br>
        <p><b>Litiges : </b></p>
        <p>Les présentes conditions du site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux. La langue de référence, pour le règlement de contentieux éventuels, est le français.</p>
        <br>
        <p><b>Données personnelles :</b></p>
        <p>De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>.</p>
        <p>Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ». Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur nos activités, ou de recevoir les lettres d’information.</p>
        <p>Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d'accès. De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "legal/legal-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 
{% block title %}My Crypto Portfolio{% endblock %}
 
{% block body %}
    <div class=\"panel-right-content\">
        <h1 class=\"c-blue text-4xl text-center mb-20\">Mentions légales</h1>
        <br>
        <p>Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> sont :</p>
        <br>
        <p><b>Editeur du Site : </b></p>
        <p>Nom : LAULY<br>Prénom : Téo<br>63 rue Bonne Fontaine<br>Email : contact@my-investment-portfolio.com<br>Site Web : <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a></p>
        <br>
        <p><b>Hébergement :</b></p>
        <p>Hébergeur : OVH<br>2 rue Kellermann - 59100 Roubaix - France<br>Site Web :  <a href=\"https://www.ovhcloud.com/fr/\">www.ovhcloud.com/fr/</a></p>
        <br>
        <p><b>Développement : </b></p>
        <p>LAULY Téo<br>Adresse : 63 rue Bonne Fontaine<br>Site Web : <a href=\"https://www.teolauly.com\">www.teolauly.com</a></p>
        <br>
        <p><b>Conditions d’utilisation : </b></p>
        <p>Ce site (<a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>) est proposé en différents langages web (PHP, HTML5, Javascript, CSS, etc…) pour un meilleur confort d'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Safari, Firefox, Google Chrome, etc…</p>
        <p>Les mentions légales ont été générées sur le site <a title=\"générateur de mentions légales pour site internet gratuit\" href=\"http://www.generateur-de-mentions-legales.com\">Générateur de mentions légales</a>, offert par <a title=\"imprimerie paris, imprimeur paris\" href=\"http://welye.com\">Welye</a>.</p>
        <p>LAULY Téo met en œuvre tous les moyens dont il dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations auprès de XXXXXXXX, et signaler toutes modifications du site qu'il jugerait utile. XXXXXXXX n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>
        <br>
        <p><b>Cookies</b> : Le site <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d'affichage. Un cookies est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.</p>
        <br>
        <p><b>Liens hypertextes :</b> Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. LAULY Téo ne dispose d'aucun moyen pour contrôler les sites en connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l'internaute, qui doit se conformer à leurs conditions d'utilisation.</p>
        <p>Les utilisateurs, les abonnés et les visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et préalable de LAULY Téo.</p>
        <p>Dans l'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de LAULY Téo, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. LAULY Téo se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.</p>
        <br>
        <p><b>Services fournis : </b></p>
        <p>L'ensemble des activités ainsi que ses informations sont présentés sur notre site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>.</p>
        <p>LAULY Téo s’efforce de fournir sur le site www.my-investment-portfolio.com des informations aussi précises que possible. les renseignements figurant sur le site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site https://www.my-investment-portfolio.com sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.  </p>
        <br>
        <p><b>Limitation contractuelles sur les données : </b></p>
        <p>Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse contact@my-investment-portfolio.com, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).</p>
        <p>Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
        <p>Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de LAULY Téo.</p>
        <br>
        <p><b>Propriété intellectuelle :</b></p>
        <p>Tout le contenu du présent sur le site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la LAULY Téo à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.</p>
        <p>Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de LAULY Téo. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>
        <br>
        <p><b>Déclaration à la CNIL : </b></p>
        <p>Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l'égard des traitements de données à caractère personnel) relative à l'informatique, aux fichiers et aux libertés, ce site a fait l'objet d'une déclaration XXXXXXXX auprès de la Commission nationale de l'informatique et des libertés (<a href=\"http://www.cnil.fr/\">www.cnil.fr</a>).</p>
        <br>
        <p><b>Litiges : </b></p>
        <p>Les présentes conditions du site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux. La langue de référence, pour le règlement de contentieux éventuels, est le français.</p>
        <br>
        <p><b>Données personnelles :</b></p>
        <p>De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>.</p>
        <p>Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ». Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur nos activités, ou de recevoir les lettres d’information.</p>
        <p>Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d'accès. De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
    </div>
{% endblock %}
", "legal/legal-notice.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\CryptoPortfolio\\templates\\legal\\legal-notice.html.twig");
    }
}
