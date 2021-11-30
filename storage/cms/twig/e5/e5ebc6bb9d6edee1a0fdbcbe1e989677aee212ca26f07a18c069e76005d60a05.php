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
class __TwigTemplate_955bb0702611ba5729d1b9c9849160f5dff54512778585fa2a0c4f8672982091 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 62);
        $filters = array("page" => 3, "theme" => 4, "_" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'theme', '_'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

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
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365backup");
        echo "\">Office 365 Backup</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("aide-distance");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Aide à distance"]);
        echo "</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hornetsecurity");
        echo "\">Hornetsecurity</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("bitdefender");
        echo "\">BitDefender</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hosting");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hébergement Web"]);
        echo "</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ssl");
        echo "\">SSL</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "#msazure\">Microsoft Azure</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blogList");
        echo "\">
\t\t\t\t\t<strong>";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NOUVELLES"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["À PROPOS"]);
        echo "</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["À propos de nous"]);
        echo "</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 43
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
        // line 49
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
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">
\t\t\t\t\t<strong>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CONTACT"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t";
        // line 62
        if ((($context["lang"] ?? null) == "fr")) {
            // line 63
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\t<strong>EN</strong>
\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 70
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\t<strong>FR</strong>
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 77
        echo "\t\t\t</li>
\t\t\t<li class=\"nav-item pl-2 pt-1 d-none d-sm-block\">
\t\t\t<a class=\"btn btn-secondary\" href=\"https://get.teamviewer.com/3max9aj\" target=\"_blank\">";
        // line 79
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
        return array (  222 => 79,  218 => 77,  209 => 70,  200 => 63,  198 => 62,  192 => 59,  188 => 58,  176 => 49,  165 => 43,  159 => 42,  153 => 39,  145 => 34,  141 => 33,  134 => 29,  130 => 28,  124 => 27,  120 => 26,  116 => 25,  110 => 24,  106 => 23,  102 => 22,  96 => 19,  88 => 14,  84 => 13,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/navbar.htm", "");
    }
}
