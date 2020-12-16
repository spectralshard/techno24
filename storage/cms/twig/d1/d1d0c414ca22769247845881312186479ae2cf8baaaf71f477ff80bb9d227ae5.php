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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/video.htm */
class __TwigTemplate_7db2e1dbd670b157b6a1c4d116c3c8086245761ace5342e486c0aa52f9371925 extends \Twig\Template
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
        $tags = array("content" => 25);
        $filters = array("_" => 6, "page" => 29);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                ['_', 'page'],
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
        echo "<section class=\"primary-color py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center py-2\">
                <h1 class=\"h1-responsive wow flipInX white-text\">
                    ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Qui est derrière Techno24?"]);
        echo "
                </h1>
            </div>
        </div>
    </div>
</section>
<section class=\"my-5 py-3\">
    <div class=\"container my-5\">
        <div class=\"row pb-4\">
            <div class=\"col-xs-12 col-sm-8 mx-auto\">
                <div class=\"embed-responsive-16by9 secondary-shadow wow fadeInLeft\">
                    <div class=\"youtube\" data-embed=\"tYsiEpaKR6k\">
                        <div class=\"play-button\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row \">
            <div class=\"col-xs-12 col-sm-8 wow fadeInUp mx-auto\">
                ";
        // line 25
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home/c-about"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 26
        echo "            </div>
            <div class=\"col-xs-12 col-sm-8 wow fadeInUp mx-auto text-center pt-5\">
                <a class=\"btn btn-secondary wow fadeInUp \"
                   href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" role=\"button\">
                    ";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retourné à la page d'accueil"]);
        echo "
                </a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/video.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  100 => 29,  95 => 26,  91 => 25,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/video.htm", "");
    }
}
