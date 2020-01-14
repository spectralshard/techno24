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
class __TwigTemplate_fa1c1593ad0405726017bc55604d16b41ce65ebed5d7a65f710c5c70ee2a61cc extends \Twig\Template
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
                <a href=\"https://www.facebook.com/techno24\" target=\"_blank\">
                    <i class=\"fab fa-facebook white-text\" style=\"padding-right: 3px; font-size:18px;\"></i>
                </a>
                <a href=\"https://twitter.com/techno24net\" target=\"_blank\">
\t\t\t\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px;margin-top:2px;\">
\t\t\t\t  <i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t\t\t  <i class=\"fab fa-twitter fa-stack-1x\" style=\"color:#E79435;\"></i>
\t\t\t\t</span>
                </a>
                <a href=\"https://www.linkedin.com/company/techno24-net-lt-e/\" target=\"_blank\">
\t\t\t\t\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:2px;\">
\t\t\t\t  <i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t\t\t  <i class=\"fab fa-linkedin-in fa-stack-1x\" style=\"color:#E79435;\"></i>
\t\t\t\t</span>
                </a>
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

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/header.htm", "");
    }
}
