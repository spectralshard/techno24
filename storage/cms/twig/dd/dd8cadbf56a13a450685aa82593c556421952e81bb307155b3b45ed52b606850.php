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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/about.htm */
class __TwigTemplate_636a2b144ec9218e9f486d88097643d26c8169b207c84258af2066e9380eebe0 extends \Twig\Template
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
        $tags = array("content" => 32, "component" => 47);
        $filters = array("_" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content', 'component'],
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
        echo "<div class=\"jumbotron hero-home\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-8 col-sm-12 col-xs-12 my-2 my-sm-5\">
                <h1 class=\"h1-responsive white-text my-0 my-sm-4 my-lg-5\" style=\"text-shadow: 2px 2px #333333;\">
                    <strong>
                        ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["À PROPOS DE TECHNO24.NET"]);
        echo "
                    </strong>
                </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"intro py-5\">
    <div class=\"container pt-5\">
        <div class=\"row \">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive wow flipInX\">
                    ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Qui est derrière Techno24?"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row pt-3 pb-5\">
            <div class=\"col-xs-12 col-sm-12 col-lg-6 pb-3\">
                <div class=\"embed-responsive-16by9  wow fadeInLeft\">
                    <div class=\"youtube\" data-embed=\"tYsiEpaKR6k\">
                        <div class=\"play-button\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 col-lg-6 wow fadeInUp\">
                ";
        // line 32
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("/home/c-about"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 33
        echo "            </div>
        </div>
    </div>
</section>
<section class=\"pb-5\" style=\"background-color: #efefef\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center pt-5\">
                <h2 class=\"h2-responsive wow flipInX\">
                    ";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Les dernières nouvelles"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row pt-2\">
            ";
        // line 47
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("lastestBlogEntry"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 48
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  124 => 47,  116 => 42,  105 => 33,  101 => 32,  85 => 19,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/about.htm", "");
    }
}
