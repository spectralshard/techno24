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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/office365backup.htm */
class __TwigTemplate_0d2f76224ef85dcea18468f3e1cc43ffd8c00d0865a674dbc4ef2419727a92ca extends \Twig\Template
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
        echo "<section id=\"office\" class=\"my-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h1 class=\"h1-responsive text-secondary\">
                    Office 365 Backup
                </h1>
            </div>
        </div>
        ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("/office365-backup/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    </div>
</section>
<section id=\"founctions\" class=\"primary-color my-4 py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-white wow fadeInUp\">
                    ";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sauvegarde pour vos données cloud"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 23
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("/p-office365-backup/c-features"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 24
        echo "        </div>
    </div>
</section>
<section id=\"features\" class=\"my-4 py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-secondary wow fadeInUp\">
                    ";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Les Avantages"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("/office365-backup/avantage"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "        </div>
    </div>
</section>
<section id=\"price\" class=\"primary-color py-5\">
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-white wow fadeInUp\">
                    ";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Forfaits Office 365 Backup"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row d-flex justify-content-center\">
            ";
        // line 51
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("produit_bitdefender"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 52
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/office365backup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 52,  113 => 51,  105 => 46,  95 => 38,  91 => 37,  83 => 32,  73 => 24,  69 => 23,  61 => 18,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/office365backup.htm", "");
    }
}
