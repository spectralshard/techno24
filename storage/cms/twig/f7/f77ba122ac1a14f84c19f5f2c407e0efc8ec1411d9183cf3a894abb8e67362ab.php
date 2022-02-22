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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/ssl.htm */
class __TwigTemplate_de33ac14358c3e0ba455f58c67e86ead43edcc32c50f9899c006d694c2ef4068 extends \Twig\Template
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
        echo "<div class=\"ssl\">
    <div class=\"container py-5\">
        <div class=\"row py-5\">
            <div class=\"col-lg-6 col-md-8 col-sm-12 col-xs-12 my-2 my-sm-5\">
                <h1 class=\"h1-responsive white-text my-0 my-sm-4 my-lg-5\" style=\"text-shadow: 2px 2px #333333;\">
                    <strong>
                        ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Protégez votre site Web avec un certificat SSL"]);
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("ssl/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "    </div>
</section>
<section id=\"features\" class=\"primary-color py-5\">
    <div class=\"container\">
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("ssl/callout"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "    </div>
</section>
<section id=\"avantages\">
    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("ssl/avantages"        , $context['__cms_partial_params']        , true        );
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos forfaits SSL"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row d-flex justify-content-center\">
            ";
        // line 42
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("produit_serviceweb"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "        </div>
        <div class=\"row mt-3\">
            <div class=\"col\">
                <p class=\"text-center text-white wow fadeInUp\">
                    ";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["* D’autres type de SSL sont disponible sur demande!"]);
        echo "
                </p>
            </div>
        </div>
    </div>
</section>
<section id=\"about\" class=\"mt-4 mb-0 py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive wow fadeInUp\">
                    ";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Questions et réponses SSL"]);
        echo "
                </h2>
            </div>
        </div>
        ";
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("ssl/questions"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/ssl.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 63,  162 => 62,  155 => 58,  141 => 47,  135 => 43,  131 => 42,  123 => 37,  115 => 31,  111 => 30,  106 => 27,  102 => 26,  96 => 22,  92 => 21,  86 => 17,  82 => 16,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/ssl.htm", "");
    }
}
