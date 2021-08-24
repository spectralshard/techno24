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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/office365.htm */
class __TwigTemplate_13c1dab2042ba3b6daf5e41d9af89b877af4b685f4666b8ebf6ebbb2c1934e22 extends \Twig\Template
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
        $tags = array("component" => 17, "partial" => 22);
        $filters = array("_" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'partial'],
                ['_'],
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
        echo "<!--Update section-->
<div class=\"zerospam\">
    <div class=\"container py-5\">
        <div class=\"row py-5\">
            <div class=\"col-lg-6 col-md-8 col-sm-12 col-xs-12 my-2 my-sm-5\">
                <h1 class=\"h1-responsive white-text my-0 my-sm-4 my-lg-5\" style=\"text-shadow: 2px 2px #333333;\">
                    <strong>
                        ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Microsoft 365 pour entreprise"]);
        echo "
                    </strong>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class=\"grey lighten-3\">
    <div class=\"container\">
        ";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mainBreadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "    </div>
</div>
<section id=\"presentation\" class=\"my-4\">
    <div class=\"container py-2 d-flex align-items-center\">
        ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("microsoft365/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "    </div>
</section>
<section id=\"features\" class=\"primary-color py-5\">
    <div class=\"container\">
        ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("microsoft365/callout"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "    </div>
</section>
<section id=\"avantages\">
    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("microsoft365/avantages"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "</section>
<section id=\"forfait\" class=\"primary-color py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-white wow fadeInUp\">
                    ";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Forfaits Microsoft 365"]);
        echo "
                </h2>
            </div>
        </div>
        ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("produits/p-forfaits-365"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "    </div>
</section>
<!--End of-->
<section id=\"msazure\" class=\"my-4 py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-secondary wow fadeInUp\">
                    ";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Microsoft Azure"]);
        echo "
                </h2>
            </div>
        </div>
            ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("produits/p-msazure"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/office365.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  152 => 55,  145 => 51,  135 => 43,  131 => 42,  124 => 38,  116 => 32,  112 => 31,  107 => 28,  103 => 27,  97 => 23,  93 => 22,  87 => 18,  83 => 17,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/office365.htm", "");
    }
}
