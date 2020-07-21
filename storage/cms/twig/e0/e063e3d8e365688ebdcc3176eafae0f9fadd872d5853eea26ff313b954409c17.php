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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/equipe.htm */
class __TwigTemplate_157245446e2006d9c8c38a0ce922f15e42bcdf8a806124b5074cfe18d437e54c extends \Twig\Template
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
        echo "<div class=\"jumbotron hero-home\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-8 col-sm-12 col-xs-12 my-2 my-sm-5\">
                <h1 class=\"h1-responsive white-text my-0 my-sm-4 my-lg-5\" style=\"text-shadow: 2px 2px #333333;\">
                    <strong>
                        ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NOTRE ÉQUIPE"]);
        echo "
                    </strong>
                </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"pb-5\">
    ";
        // line 15
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("team"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 16
        echo "</section>
<section class=\"pb-5\" style=\"background-color: #efefef\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center pt-5\">
                <h2 class=\"h2-responsive wow flipInX\">
                    ";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Les dernières nouvelles"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row pt-2\">
            ";
        // line 27
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("lastestBlogEntry"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/equipe.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  76 => 27,  68 => 22,  60 => 16,  56 => 15,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/equipe.htm", "");
    }
}
