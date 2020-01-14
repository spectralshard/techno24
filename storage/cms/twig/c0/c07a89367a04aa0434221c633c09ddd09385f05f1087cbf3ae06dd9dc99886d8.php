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
class __TwigTemplate_131522dca1734d56a6628578d7fb1f141c6016330da6c316361f0f19d19a519d extends \Twig\Template
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
        echo "<nav class=\"navbar bg-white navbar-expand-lg\">
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
\t<button class=\"navbar-toggler btn-secondary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t\t\t<strong>";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ACCUEIL"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>OFFICE365</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "#office\">Office365</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "#msazure\">Microsoft Azure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "#entreprise\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Logiciel d'entreprise"]);
        echo "</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["HÉBERGEMENT"]);
        echo "</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hosting");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hébergement Web"]);
        echo "</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hosting");
        echo "#solutions\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Autres solutions"]);
        echo "</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hosting");
        echo "#technologie\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Technologies disponible"]);
        echo "</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blogList");
        echo "\">
\t\t\t\t\t<strong>";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NOUVELLES"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">
\t\t\t\t\t<strong>";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous joindre"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t";
        // line 46
        if ((($context["lang"] ?? null) == "fr")) {
            // line 47
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\t<strong>ENGLISH</strong>
\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\t<strong>FRANÇAIS</strong>
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t</li>
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
        return array (  159 => 61,  150 => 54,  141 => 47,  139 => 46,  133 => 43,  129 => 42,  123 => 39,  119 => 38,  110 => 34,  104 => 33,  98 => 32,  92 => 29,  81 => 23,  77 => 22,  73 => 21,  62 => 13,  58 => 12,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/navbar.htm", "");
    }
}
