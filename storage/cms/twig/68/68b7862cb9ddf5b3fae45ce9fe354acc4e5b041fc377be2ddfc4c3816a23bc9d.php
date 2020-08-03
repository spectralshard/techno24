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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/navbar.htm */
class __TwigTemplate_90d0198b44d00b3e3205e34ea76cc2070c083f267bdd0e985fc50fe3d06a2060 extends \Twig\Template
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
        // line 1
        echo "<nav id=\"navbar\" class=\"navbar bg-white navbar-expand-lg\">
\t<div class=\"container\">
\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t<img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/techno24-logo.png");
        echo "\" style=\"width:150px;\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Logo de Techno24.net"]);
        echo "\">
\t</a>
\t<button class=\"navbar-toggler btn-secondary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t<ul class=\"navbar-nav ml-auto pb-0\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t\t\t<strong>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ACCUEIL"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PRODUITS"]);
        echo "</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "\">Microsoft 365</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("aide-distance");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Aide à distance"]);
        echo "</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("bitdefender");
        echo "\">BitDefender</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hosting");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hébergement Web"]);
        echo "</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ssl");
        echo "\">SSL</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "#msazure\">Microsoft Azure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("zerospam");
        echo "\">ZéroSpam</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blogList");
        echo "\">
\t\t\t\t\t<strong>";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NOUVELLES"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["À PROPOS"]);
        echo "</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("equipe");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["L'équipe"]);
        echo "</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["COURRIEL WEB"]);
        echo "</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://www.office.com/login?es=Click&ru=%2F&msafed=0\" target=\"_blank\">Office365</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://mail.hostedemail.com\" target=\"_blank\">Host Email</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://techno24.net/webmail\" target=\"_blank\">Webmail</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">
\t\t\t\t\t<strong>";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CONTACT"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t";
        // line 60
        if ((($context["lang"] ?? null) == "fr")) {
            // line 61
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\t<strong>EN</strong>
\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\t<strong>FR</strong>
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 75
        echo "\t\t\t</li>
\t\t\t<li class=\"nav-item pl-2 pt-1 d-none d-sm-block\">
\t\t\t<a class=\"btn btn-secondary\" href=\"https://get.teamviewer.com/3max9aj\" target=\"_blank\">";
        // line 77
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Support à distance"]);
        echo "</a>
\t\t\t</li>
\t</ul>
\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 77,  183 => 75,  174 => 68,  165 => 61,  163 => 60,  157 => 57,  153 => 56,  141 => 47,  130 => 41,  124 => 38,  116 => 33,  112 => 32,  105 => 28,  101 => 27,  97 => 26,  91 => 25,  87 => 24,  81 => 23,  77 => 22,  71 => 19,  63 => 14,  59 => 13,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/navbar.htm", "");
    }
}