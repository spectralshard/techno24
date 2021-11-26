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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/hornetsecurity.htm */
class __TwigTemplate_8aabb64cc3d5785d37ef415a7ff98d5d7be643838768913fbde4f3b5c5c3e15c extends \Twig\Template
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
        $tags = array("component" => 16, "partial" => 21);
        $filters = array("_" => 7);
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
        echo "<div class=\"zerospam\">
    <div class=\"container py-5\">
        <div class=\"row py-5\">
            <div class=\"col-lg-6 col-md-8 col-sm-12 col-xs-12 my-2 my-sm-5\">
                <h1 class=\"h1-responsive white-text my-0 my-sm-4 my-lg-5\" style=\"text-shadow: 2px 2px #333333;\">
                    <strong>
                        ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hornetsecurity, une solution de filtrage des spams et de protection contre les logiciels malveillants"]);
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
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mainBreadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "    </div>
</div>
<section class=\"my-4\">
    <div class=\"container py-2 d-flex align-items-center\">
        ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("zerospam/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "    </div>
</section>
<section id=\"features\" class=\"primary-color py-5\">
    <div class=\"container\">
            ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("zerospam/callout"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "    </div>
</section>
<section id=\"avantages\">
            ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("zerospam/avantages"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "</section>
<section id=\"price\" class=\"py-5 primary-color\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-white wow fadeInUp\">
                    ";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ajouter Spam & Malware Protection par Hornetsecurity à votre boite courriel"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row d-flex justify-content-center\">
            ";
        // line 42
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("produit_bitdefender"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/hornetsecurity.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 43,  131 => 42,  123 => 37,  115 => 31,  111 => 30,  106 => 27,  102 => 26,  96 => 22,  92 => 21,  86 => 17,  82 => 16,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/hornetsecurity.htm", "");
    }
}
