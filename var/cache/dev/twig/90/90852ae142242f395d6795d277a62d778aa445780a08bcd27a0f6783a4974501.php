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
class __TwigTemplate_e1ead88bc246e1c1f213dc91891e7242a8297c857e8b6fdc11e1e60fdaa20a60 extends Template
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
        <h1 class=\"c-blue text-4xl text-center mb-20\">Mentions l??gales</h1>
        <br>
        <p>Merci de lire avec attention les diff??rentes modalit??s d???utilisation du pr??sent site avant d???y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans r??serves les pr??sentes modalit??s. Aussi, conform??ment ?? l???article n??6 de la Loi n??2004-575 du 21 Juin 2004 pour la confiance dans l?????conomie num??rique, les responsables du pr??sent site internet <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> sont :</p>
        <br>
        <p><b>Editeur du Site : </b></p>
        <p>Nom : LAULY<br>Pr??nom : T??o<br>63 rue Bonne Fontaine<br>Email : contact@my-investment-portfolio.com<br>Site Web : <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a></p>
        <br>
        <p><b>H??bergement :</b></p>
        <p>H??bergeur : OVH<br>2 rue Kellermann - 59100 Roubaix - France<br>Site Web :  <a href=\"https://www.ovhcloud.com/fr/\">www.ovhcloud.com/fr/</a></p>
        <br>
        <p><b>D??veloppement : </b></p>
        <p>LAULY T??o<br>Adresse : 63 rue Bonne Fontaine<br>Site Web : <a href=\"https://www.teolauly.com\">www.teolauly.com</a></p>
        <br>
        <p><b>Conditions d???utilisation : </b></p>
        <p>Ce site (<a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>) est propos?? en diff??rents langages web (PHP, HTML5, Javascript, CSS, etc???) pour un meilleur confort d'utilisation et un graphisme plus agr??able, nous vous recommandons de recourir ?? des navigateurs modernes comme Safari, Firefox, Google Chrome, etc???</p>
        <p>Les mentions l??gales ont ??t?? g??n??r??es sur le site <a title=\"g??n??rateur de mentions l??gales pour site internet gratuit\" href=\"http://www.generateur-de-mentions-legales.com\">G??n??rateur de mentions l??gales</a>, offert par <a title=\"imprimerie paris, imprimeur paris\" href=\"http://welye.com\">Welye</a>.</p>
        <p>LAULY T??o met en ??uvre tous les moyens dont il dispose, pour assurer une information fiable et une mise ?? jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations aupr??s de XXXXXXXX, et signaler toutes modifications du site qu'il jugerait utile. XXXXXXXX n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout pr??judice direct ou indirect pouvant en d??couler.</p>
        <br>
        <p><b>Cookies</b> : Le site <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> peut-??tre amen?? ?? vous demander l???acceptation des cookies pour des besoins de statistiques et d'affichage. Un cookies est une information d??pos??e sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs donn??es qui sont stock??es sur votre ordinateur dans un simple fichier texte auquel un serveur acc??de pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent ??tre fonctionnelles sans l???acceptation de cookies.</p>
        <br>
        <p><b>Liens hypertextes :</b> Les sites internet de peuvent offrir des liens vers d???autres sites internet ou d???autres ressources disponibles sur Internet. LAULY T??o ne dispose d'aucun moyen pour contr??ler les sites en connexion avec ses sites internet. ne r??pond pas de la disponibilit?? de tels sites et sources externes, ni ne la garantit. Elle ne peut ??tre tenue pour responsable de tout dommage, de quelque nature que ce soit, r??sultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu???ils proposent, ou de tout usage qui peut ??tre fait de ces ??l??ments. Les risques li??s ?? cette utilisation incombent pleinement ?? l'internaute, qui doit se conformer ?? leurs conditions d'utilisation.</p>
        <p>Les utilisateurs, les abonn??s et les visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et pr??alable de LAULY T??o.</p>
        <p>Dans l'hypoth??se o?? un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d???un des sites internet de LAULY T??o, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. LAULY T??o se r??serve le droit d???accepter ou de refuser un hyperlien sans avoir ?? en justifier sa d??cision.</p>
        <br>
        <p><b>Services fournis : </b></p>
        <p>L'ensemble des activit??s ainsi que ses informations sont pr??sent??s sur notre site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>.</p>
        <p>LAULY T??o s???efforce de fournir sur le site www.my-investment-portfolio.com des informations aussi pr??cises que possible. les renseignements figurant sur le site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> ne sont pas exhaustifs et les photos non contractuelles. Ils sont donn??s sous r??serve de modifications ayant ??t?? apport??es depuis leur mise en ligne. Par ailleurs, tous les informations indiqu??es sur le site https://www.my-investment-portfolio.com sont donn??es ?? titre indicatif, et sont susceptibles de changer ou d?????voluer sans pr??avis.  </p>
        <br>
        <p><b>Limitation contractuelles sur les donn??es : </b></p>
        <p>Les informations contenues sur ce site sont aussi pr??cises que possible et le site remis ?? jour ?? diff??rentes p??riodes de l???ann??e, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait ??tre un dysfonctionnement, merci de bien vouloir le signaler par email, ?? l???adresse contact@my-investment-portfolio.com, en d??crivant le probl??me de la mani??re la plus pr??cise possible (page posant probl??me, type d???ordinateur et de navigateur utilis??, ???).</p>
        <p>Tout contenu t??l??charg?? se fait aux risques et p??rils de l'utilisateur et sous sa seule responsabilit??. En cons??quence, ne saurait ??tre tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de donn??es cons??cutives au t??l??chargement. De plus, l???utilisateur du site s???engage ?? acc??der au site en utilisant un mat??riel r??cent, ne contenant pas de virus et avec un navigateur de derni??re g??n??ration mis-??-jour</p>
        <p>Les liens hypertextes mis en place dans le cadre du pr??sent site internet en direction d'autres ressources pr??sentes sur le r??seau Internet ne sauraient engager la responsabilit?? de LAULY T??o.</p>
        <br>
        <p><b>Propri??t?? intellectuelle :</b></p>
        <p>Tout le contenu du pr??sent sur le site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>, incluant, de fa??on non limitative, les graphismes, images, textes, vid??os, animations, sons, logos, gifs et ic??nes ainsi que leur mise en forme sont la propri??t?? exclusive de la LAULY T??o ?? l'exception des marques, logos ou contenus appartenant ?? d'autres soci??t??s partenaires ou auteurs.</p>
        <p>Toute reproduction, distribution, modification, adaptation, retransmission ou publication, m??me partielle, de ces diff??rents ??l??ments est strictement interdite sans l'accord expr??s par ??crit de LAULY T??o. Cette repr??sentation ou reproduction, par quelque proc??d?? que ce soit, constitue une contrefa??on sanctionn??e par les articles L.335-2 et suivants du Code de la propri??t?? intellectuelle. Le non-respect de cette interdiction constitue une contrefa??on pouvant engager la responsabilit?? civile et p??nale du contrefacteur. En outre, les propri??taires des Contenus copi??s pourraient intenter une action en justice ?? votre encontre.</p>
        <br>
        <p><b>D??claration ?? la CNIL : </b></p>
        <p>Conform??ment ?? la loi 78-17 du 6 janvier 1978 (modifi??e par la loi 2004-801 du 6 ao??t 2004 relative ?? la protection des personnes physiques ?? l'??gard des traitements de donn??es ?? caract??re personnel) relative ?? l'informatique, aux fichiers et aux libert??s, ce site a fait l'objet d'une d??claration XXXXXXXX aupr??s de la Commission nationale de l'informatique et des libert??s (<a href=\"http://www.cnil.fr/\">www.cnil.fr</a>).</p>
        <br>
        <p><b>Litiges : </b></p>
        <p>Les pr??sentes conditions du site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> sont r??gies par les lois fran??aises et toute contestation ou litiges qui pourraient na??tre de l'interpr??tation ou de l'ex??cution de celles-ci seront de la comp??tence exclusive des tribunaux. La langue de r??f??rence, pour le r??glement de contentieux ??ventuels, est le fran??ais.</p>
        <br>
        <p><b>Donn??es personnelles :</b></p>
        <p>De mani??re g??n??rale, vous n?????tes pas tenu de nous communiquer vos donn??es personnelles lorsque vous visitez notre site Internet <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>.</p>
        <p>Cependant, ce principe comporte certaines exceptions. En effet, pour certains services propos??s par notre site, vous pouvez ??tre amen??s ?? nous communiquer certaines donn??es telles que : votre nom, votre fonction, le nom de votre soci??t??, votre adresse ??lectronique, et votre num??ro de t??l??phone. Tel est le cas lorsque vous remplissez le formulaire qui vous est propos?? en ligne, dans la rubrique ?? contact ??. Dans tous les cas, vous pouvez refuser de fournir vos donn??es personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur nos activit??s, ou de recevoir les lettres d???information.</p>
        <p>Enfin, nous pouvons collecter de mani??re automatique certaines informations vous concernant lors d???une simple navigation sur notre site Internet, notamment : des informations concernant l???utilisation de notre site, comme les zones que vous visitez et les services auxquels vous acc??dez, votre adresse IP, le type de votre navigateur, vos temps d'acc??s. De telles informations sont utilis??es exclusivement ?? des fins de statistiques internes, de mani??re ?? am??liorer la qualit?? des services qui vous sont propos??s. Les bases de donn??es sont prot??g??es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative ?? la protection juridique des bases de donn??es.</p>
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
        <h1 class=\"c-blue text-4xl text-center mb-20\">Mentions l??gales</h1>
        <br>
        <p>Merci de lire avec attention les diff??rentes modalit??s d???utilisation du pr??sent site avant d???y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans r??serves les pr??sentes modalit??s. Aussi, conform??ment ?? l???article n??6 de la Loi n??2004-575 du 21 Juin 2004 pour la confiance dans l?????conomie num??rique, les responsables du pr??sent site internet <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> sont :</p>
        <br>
        <p><b>Editeur du Site : </b></p>
        <p>Nom : LAULY<br>Pr??nom : T??o<br>63 rue Bonne Fontaine<br>Email : contact@my-investment-portfolio.com<br>Site Web : <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a></p>
        <br>
        <p><b>H??bergement :</b></p>
        <p>H??bergeur : OVH<br>2 rue Kellermann - 59100 Roubaix - France<br>Site Web :  <a href=\"https://www.ovhcloud.com/fr/\">www.ovhcloud.com/fr/</a></p>
        <br>
        <p><b>D??veloppement : </b></p>
        <p>LAULY T??o<br>Adresse : 63 rue Bonne Fontaine<br>Site Web : <a href=\"https://www.teolauly.com\">www.teolauly.com</a></p>
        <br>
        <p><b>Conditions d???utilisation : </b></p>
        <p>Ce site (<a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>) est propos?? en diff??rents langages web (PHP, HTML5, Javascript, CSS, etc???) pour un meilleur confort d'utilisation et un graphisme plus agr??able, nous vous recommandons de recourir ?? des navigateurs modernes comme Safari, Firefox, Google Chrome, etc???</p>
        <p>Les mentions l??gales ont ??t?? g??n??r??es sur le site <a title=\"g??n??rateur de mentions l??gales pour site internet gratuit\" href=\"http://www.generateur-de-mentions-legales.com\">G??n??rateur de mentions l??gales</a>, offert par <a title=\"imprimerie paris, imprimeur paris\" href=\"http://welye.com\">Welye</a>.</p>
        <p>LAULY T??o met en ??uvre tous les moyens dont il dispose, pour assurer une information fiable et une mise ?? jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations aupr??s de XXXXXXXX, et signaler toutes modifications du site qu'il jugerait utile. XXXXXXXX n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout pr??judice direct ou indirect pouvant en d??couler.</p>
        <br>
        <p><b>Cookies</b> : Le site <a href=\"https://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> peut-??tre amen?? ?? vous demander l???acceptation des cookies pour des besoins de statistiques et d'affichage. Un cookies est une information d??pos??e sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs donn??es qui sont stock??es sur votre ordinateur dans un simple fichier texte auquel un serveur acc??de pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent ??tre fonctionnelles sans l???acceptation de cookies.</p>
        <br>
        <p><b>Liens hypertextes :</b> Les sites internet de peuvent offrir des liens vers d???autres sites internet ou d???autres ressources disponibles sur Internet. LAULY T??o ne dispose d'aucun moyen pour contr??ler les sites en connexion avec ses sites internet. ne r??pond pas de la disponibilit?? de tels sites et sources externes, ni ne la garantit. Elle ne peut ??tre tenue pour responsable de tout dommage, de quelque nature que ce soit, r??sultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu???ils proposent, ou de tout usage qui peut ??tre fait de ces ??l??ments. Les risques li??s ?? cette utilisation incombent pleinement ?? l'internaute, qui doit se conformer ?? leurs conditions d'utilisation.</p>
        <p>Les utilisateurs, les abonn??s et les visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et pr??alable de LAULY T??o.</p>
        <p>Dans l'hypoth??se o?? un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d???un des sites internet de LAULY T??o, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. LAULY T??o se r??serve le droit d???accepter ou de refuser un hyperlien sans avoir ?? en justifier sa d??cision.</p>
        <br>
        <p><b>Services fournis : </b></p>
        <p>L'ensemble des activit??s ainsi que ses informations sont pr??sent??s sur notre site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>.</p>
        <p>LAULY T??o s???efforce de fournir sur le site www.my-investment-portfolio.com des informations aussi pr??cises que possible. les renseignements figurant sur le site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> ne sont pas exhaustifs et les photos non contractuelles. Ils sont donn??s sous r??serve de modifications ayant ??t?? apport??es depuis leur mise en ligne. Par ailleurs, tous les informations indiqu??es sur le site https://www.my-investment-portfolio.com sont donn??es ?? titre indicatif, et sont susceptibles de changer ou d?????voluer sans pr??avis.  </p>
        <br>
        <p><b>Limitation contractuelles sur les donn??es : </b></p>
        <p>Les informations contenues sur ce site sont aussi pr??cises que possible et le site remis ?? jour ?? diff??rentes p??riodes de l???ann??e, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait ??tre un dysfonctionnement, merci de bien vouloir le signaler par email, ?? l???adresse contact@my-investment-portfolio.com, en d??crivant le probl??me de la mani??re la plus pr??cise possible (page posant probl??me, type d???ordinateur et de navigateur utilis??, ???).</p>
        <p>Tout contenu t??l??charg?? se fait aux risques et p??rils de l'utilisateur et sous sa seule responsabilit??. En cons??quence, ne saurait ??tre tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de donn??es cons??cutives au t??l??chargement. De plus, l???utilisateur du site s???engage ?? acc??der au site en utilisant un mat??riel r??cent, ne contenant pas de virus et avec un navigateur de derni??re g??n??ration mis-??-jour</p>
        <p>Les liens hypertextes mis en place dans le cadre du pr??sent site internet en direction d'autres ressources pr??sentes sur le r??seau Internet ne sauraient engager la responsabilit?? de LAULY T??o.</p>
        <br>
        <p><b>Propri??t?? intellectuelle :</b></p>
        <p>Tout le contenu du pr??sent sur le site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>, incluant, de fa??on non limitative, les graphismes, images, textes, vid??os, animations, sons, logos, gifs et ic??nes ainsi que leur mise en forme sont la propri??t?? exclusive de la LAULY T??o ?? l'exception des marques, logos ou contenus appartenant ?? d'autres soci??t??s partenaires ou auteurs.</p>
        <p>Toute reproduction, distribution, modification, adaptation, retransmission ou publication, m??me partielle, de ces diff??rents ??l??ments est strictement interdite sans l'accord expr??s par ??crit de LAULY T??o. Cette repr??sentation ou reproduction, par quelque proc??d?? que ce soit, constitue une contrefa??on sanctionn??e par les articles L.335-2 et suivants du Code de la propri??t?? intellectuelle. Le non-respect de cette interdiction constitue une contrefa??on pouvant engager la responsabilit?? civile et p??nale du contrefacteur. En outre, les propri??taires des Contenus copi??s pourraient intenter une action en justice ?? votre encontre.</p>
        <br>
        <p><b>D??claration ?? la CNIL : </b></p>
        <p>Conform??ment ?? la loi 78-17 du 6 janvier 1978 (modifi??e par la loi 2004-801 du 6 ao??t 2004 relative ?? la protection des personnes physiques ?? l'??gard des traitements de donn??es ?? caract??re personnel) relative ?? l'informatique, aux fichiers et aux libert??s, ce site a fait l'objet d'une d??claration XXXXXXXX aupr??s de la Commission nationale de l'informatique et des libert??s (<a href=\"http://www.cnil.fr/\">www.cnil.fr</a>).</p>
        <br>
        <p><b>Litiges : </b></p>
        <p>Les pr??sentes conditions du site <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a> sont r??gies par les lois fran??aises et toute contestation ou litiges qui pourraient na??tre de l'interpr??tation ou de l'ex??cution de celles-ci seront de la comp??tence exclusive des tribunaux. La langue de r??f??rence, pour le r??glement de contentieux ??ventuels, est le fran??ais.</p>
        <br>
        <p><b>Donn??es personnelles :</b></p>
        <p>De mani??re g??n??rale, vous n?????tes pas tenu de nous communiquer vos donn??es personnelles lorsque vous visitez notre site Internet <a href=\"http://www.my-investment-portfolio.com\">www.my-investment-portfolio.com</a>.</p>
        <p>Cependant, ce principe comporte certaines exceptions. En effet, pour certains services propos??s par notre site, vous pouvez ??tre amen??s ?? nous communiquer certaines donn??es telles que : votre nom, votre fonction, le nom de votre soci??t??, votre adresse ??lectronique, et votre num??ro de t??l??phone. Tel est le cas lorsque vous remplissez le formulaire qui vous est propos?? en ligne, dans la rubrique ?? contact ??. Dans tous les cas, vous pouvez refuser de fournir vos donn??es personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur nos activit??s, ou de recevoir les lettres d???information.</p>
        <p>Enfin, nous pouvons collecter de mani??re automatique certaines informations vous concernant lors d???une simple navigation sur notre site Internet, notamment : des informations concernant l???utilisation de notre site, comme les zones que vous visitez et les services auxquels vous acc??dez, votre adresse IP, le type de votre navigateur, vos temps d'acc??s. De telles informations sont utilis??es exclusivement ?? des fins de statistiques internes, de mani??re ?? am??liorer la qualit?? des services qui vous sont propos??s. Les bases de donn??es sont prot??g??es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative ?? la protection juridique des bases de donn??es.</p>
    </div>
{% endblock %}
", "legal/legal-notice.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\CryptoPortfolio\\templates\\legal\\legal-notice.html.twig");
    }
}
