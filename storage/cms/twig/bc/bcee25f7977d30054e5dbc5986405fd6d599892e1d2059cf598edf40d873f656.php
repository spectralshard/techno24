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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/sidebar.htm */
class __TwigTemplate_a41a9cedabd8976b1939301b735d7ade66f70f0d650bdcfa4bcfe33bd5c1fc0a extends \Twig\Template
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
        $tags = array("if" => 4, "partial" => 23);
        $filters = array("_" => 3, "media" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
                ['_', 'media'],
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
        echo "<div class=\"row d-flex justify-content-end\">
    <div class=\" col-xs-12 col-sm-11 mb-4 px-0 text-center\">
        <small class=\"text-muted\">-";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Publicité"]);
        echo "-</small>
        ";
        // line 4
        if ((($context["lang"] ?? null) == "fr")) {
            // line 5
            echo "        <div class=\"\">
            <a href=\"https://techno24.net/fr/bitdefender?utm_source=home-advertise&utm_medium=banner&utm_campaign=bitdefender-fr\" target=\"_blank\">
                <img class=\"mx-auto d-block border border-dark\"
                     src=\"";
            // line 8
            echo $this->extensions['System\Twig\Extension']->mediaFilter("/sidebar/pub-maison-antivirus-300x.jpg");
            echo "\"
                     data-holder-rendered=\"true\">
            </a>
        </div>
        ";
        } else {
            // line 13
            echo "        <div class=\"\">
            <a href=\"https://techno24.net/en/bitdefender?utm_source=home-advertise&utm_medium=banner&utm_campaign=bitdefender-en\" target=\"_blank\">
                <img class=\"mx-auto d-block border border-dark\"
                     src=\"";
            // line 16
            echo $this->extensions['System\Twig\Extension']->mediaFilter("/sidebar/pub-maison-antivirus-300x-en.jpg");
            echo "\"
                     data-holder-rendered=\"true\">
            </a>
        </div>
        ";
        }
        // line 21
        echo "    </div>
    <div class=\" col-xs-12 col-sm-11 primary-color rounded pt-2 pb-4 mb-4\">
        ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("subscribe"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  102 => 23,  98 => 21,  90 => 16,  85 => 13,  77 => 8,  72 => 5,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/sidebar.htm", "");
    }
}
