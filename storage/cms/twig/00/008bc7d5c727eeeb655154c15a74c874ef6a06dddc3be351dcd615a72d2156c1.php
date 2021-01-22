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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/header.htm */
class __TwigTemplate_ce5ed3d6ea94ed0e7602bed82b5cfdd8f6ce6565eb6e6764c710d39081765e3d extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<section class=\"secondary-color\">
    <div class=\"container\">
        <div class=\"row justify-content-end\">
            <div class=\"col text-sm-right p-2 d-none d-sm-block\">
\t\t\t\t<span class=\"pr-3 white-text align-top\">
\t\t\t\t<i class=\"fas fa-paper-plane\"></i>&nbsp;
\t\t\t\t<a href=\"mailto:info@techno24.net\" style=\"color:white!important;\">info@techno24.net</a>
\t\t\t\t</span>
                <span class=\"pr-3 white-text\">
\t\t\t\t<i class=\"fas fa-phone\"></i>&nbsp;
\t\t\t\t<a href=\"tel:15146386924\" style=\"color:white!important;\">514 638-6924</a> /
\t\t\t\t<a href=\"tel:18669981221\" style=\"color:white!important;\">1 866 998-1221</a>
\t\t\t\t</span>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 14), "facebook_url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
                    <i class=\"fab fa-facebook white-text\" style=\"padding-right: 3px; font-size:18px;\"></i>
                </a>
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 17), "twitter_url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px;margin-top:2px;\">
\t\t\t\t  <i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t\t\t  <i class=\"fab fa-twitter fa-stack-1x\" style=\"color:#E79435;\"></i>
\t\t\t\t</span>
                </a>
                <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 23), "linkedin_url", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:2px;\">
\t\t\t\t  <i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t\t\t  <i class=\"fab fa-linkedin-in fa-stack-1x\" style=\"color:#E79435;\"></i>
\t\t\t\t</span>
                </a>
\t\t\t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 29), "youtube_url", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:2px;\">
\t\t\t\t  <i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t\t\t  <i class=\"fab fa-youtube fa-stack-1x\" style=\"color:#E79435;\"></i>
\t\t\t\t</span>
\t\t\t\t</a>
            </div>
            <div class=\"col text-sm-right p-2 d-block d-sm-none\">
\t\t\t\t<span class=\"pr-3 white-text align-top\">
\t\t\t\t<i class=\"fas fa-paper-plane\"></i>&nbsp;
\t\t\t\t<a href=\"mailto:info@techno24.net\" style=\"color:white!important;\">info@techno24.net</a>
\t\t\t\t</span>
                <span class=\"pr-3 white-text\">
\t\t\t\t<i class=\"fas fa-phone\"></i>&nbsp;
\t\t\t\t<a href=\"tel:15146386924\" style=\"color:white!important;\">514 638-6924</a> /
\t\t\t\t<a href=\"tel:1866998121\" style=\"color:white!important;\">1 866 998-121</a>
\t\t\t\t</span>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  92 => 23,  83 => 17,  77 => 14,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/header.htm", "");
    }
}
