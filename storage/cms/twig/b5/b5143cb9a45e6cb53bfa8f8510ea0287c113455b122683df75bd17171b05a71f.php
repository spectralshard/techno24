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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/footer.htm */
class __TwigTemplate_1b845632972a40039122affad14d43a2bf6893384dd0bff886df0f47ffaa474d extends \Twig\Template
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
        echo "<section id=\"footer\" class=\"py-5\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3 text-white d-none d-sm-block mx-auto\">
            <h5 class=\"h5-responsive text-uppercase\">
                ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NAVIGATION"]);
        echo "
            </h5>
            <p>
                <a class=\"text-white\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Acceuil"]);
        echo "</a><br />
                <a class=\"text-white\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "\">Office365</a><br />
                <a class=\"text-white\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hosting");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hébergement"]);
        echo "</a><br />
                <a class=\"text-white\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blogList");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nouvelles"]);
        echo "</a><br />
                <a class=\"text-white\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous joindre"]);
        echo "</a><br />
                ";
        // line 14
        if ((($context["lang"] ?? null) == "fr")) {
            // line 15
            echo "                <a href=\"#\"
                   class=\"text-white\"
                   data-request=\"onSwitchLocale\"
                   data-request-data=\"locale: 'en'\" title=\"English\">
                    English
                </a>
                ";
        } else {
            // line 22
            echo "                <a href=\"#\"
                   class=\"text-white\"
                   data-request=\"onSwitchLocale\"
                   data-request-data=\"locale: 'fr'\" title=\"Français\">
                    Français
                </a>
                ";
        }
        // line 29
        echo "            </p>
        </div>
        <div class=\"col-xs-12 col-sm-6 col-lg-3 text-white mx-auto\">
            <h5 class=\"h5-responsive text-uppercase\">
                ";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["CONTACT"]);
        echo ":
            </h5>
            <p>
                ";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["MONTRÉAL"]);
        echo " : <a href=\"tel:15146386924\" style=\"color:white!important;\">514 638-6924</a><br/>
                ";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PARTOUT AILLEURS"]);
        echo " : <a href=\"tel:18669981221\" style=\"color:white!important;\">1 866 998-1221</a>
            </p>
            <h5 class=\"h5-responsive text-uppercase\">
                ";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["FACTURATION"]);
        echo ":
            </h5>
            <p>
                <a href=\"mailto:facturation@techno24.net\" style=\"color:white!important;\">facturation@techno24.net</a>
            </p>
        </div>
        <div class=\"col-xs-12 col-sm-6 col-lg-3 text-white mx-auto\">
            <h5 class=\"h5-responsive text-uppercase\">
                ";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SUPPORT"]);
        echo "
            </h5>
            <p>
                <a href=\"mailto:support@techno24.net\" style=\"color:white!important;\">support@techno24.net</a>
            <br />
                SKYPE : <a href=\"skype:techno24.net?call\" style=\"color:white!important;\">techno24.net</a>
            </p>
            <h5 class=\"h5-responsive text-uppercase\">
                ";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["INFORMATION"]);
        echo "
            </h5>
            <p>
                <a href=\"mailto:facturation@techno24.net\" style=\"color:white!important;\">info@techno24.net</a>
            </p>
        </div>
        <div class=\"col-xs-12 col-sm-6 col-lg-3 mx-auto d-none d-sm-block\">
            <h5 class=\"h5-responsive text-white text-uppercase\">
                ";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["RÉSEAUX SOCIAUX"]);
        echo "
            </h5>
            <a href=\"https://www.facebook.com/techno24\" target=\"_blank\">
                <i class=\"fab fa-facebook text-secondary\" style=\"padding-right: 3px; font-size:18px;\"></i>
            </a>
            <a href=\"https://twitter.com/techno24net\" target=\"_blank\">
\t\t\t\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px;margin-top:2px;\">
\t\t\t\t  <i class=\"fas fa-circle fa-stack-2x text-secondary\"></i>
\t\t\t\t  <i class=\"fab fa-twitter fa-stack-1x\" style=\"color:#4A4A4A;\"></i>
\t\t\t\t</span>
            </a>
            <a href=\"https://www.linkedin.com/company/techno24-net-lt-e/\" target=\"_blank\">
\t\t\t\t\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:2px;\">
\t\t\t\t  <i class=\"fas fa-circle fa-stack-2x text-secondary\"></i>
\t\t\t\t  <i class=\"fab fa-linkedin-in fa-stack-1x\" style=\"color:#4A4A4A;\"></i>
\t\t\t\t</span>
            </a>
            <img class=\"d-block pt-5\" src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/creditcard-logo.png");
        echo "\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cartes de crédits"]);
        echo "\">
        </div>
    </div>
    </div>
</section>
<section class=\"secondary-color\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center py-2 text-white\">

                    © Techno24.net - ";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tous droits réservés"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
                    | ";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hébergement 5 étoiles"]);
        echo "

            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 92,  188 => 91,  173 => 81,  153 => 64,  142 => 56,  131 => 48,  120 => 40,  114 => 37,  110 => 36,  104 => 33,  98 => 29,  89 => 22,  80 => 15,  78 => 14,  72 => 13,  66 => 12,  60 => 11,  56 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/footer.htm", "");
    }
}
