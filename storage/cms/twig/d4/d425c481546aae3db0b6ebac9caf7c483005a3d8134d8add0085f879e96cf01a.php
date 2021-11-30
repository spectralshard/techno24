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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/hosting.htm */
class __TwigTemplate_eab403999fdc446e1523f99c2148715004a8f1a02cec87a183753aa705377f04 extends \Twig\Template
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
        $tags = array("partial" => 10, "component" => 23);
        $filters = array("_" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'component'],
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
        echo "<section id=\"hosting\" class=\"my-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h1 class=\"h1-responsive text-secondary\">
                    ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Services d’hébergement sur mesure"]);
        echo "
                </h1>
            </div>
        </div>
        ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("produits/p-intro-hosting"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    </div>
</section>
<section id=\"forfait\" class=\"primary-color my-4 py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-white wow fadeInUp\">
                    ";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Forfaits d’hébergement Web"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row\">
        ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("produit"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "        </div>
    </div>
</section>
<section id=\"solutions\" class=\"my-4 py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-secondary wow fadeInUp\">
                    ";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Autres solutions pour votre entreprise"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row\">
        ";
        // line 37
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("produit_serviceweb"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 38
        echo "    </div>
    </div>
</section>
<section id=\"technologie\" class=\"primary-color mt-4 mb-0 py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-white wow fadeInUp\">
                    ";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Technologies disponible sur nos serveurs"]);
        echo "
                </h2>
            </div>
        </div>
        ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("produits/p-techno"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/hosting.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 51,  140 => 50,  133 => 46,  123 => 38,  119 => 37,  111 => 32,  101 => 24,  97 => 23,  89 => 18,  80 => 11,  76 => 10,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/hosting.htm", "");
    }
}
