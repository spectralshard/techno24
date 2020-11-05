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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials//office365-backup/avantage.htm */
class __TwigTemplate_748035fa369a66846246a29c2d97f55f36ff399b2c3f9629d8153cbc09e98ac0 extends \Twig\Template
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
        echo "<div class=\"row my-5\">
    <div class=\"col-xs-12 col-sm-12 col-lg-6 pb-3\">
        <div class=\"secondary-shadow\">
            <img class=\"img-fluid mx-auto d-block wow fadeInLeft\"
                 src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/office365-backup-extra.jpg");
        echo "\"
                 data-holder-rendered=\"true\">
        </div>
    </div>
    <div class=\"col\"></div>
    <div class=\"col-sm-12 col-lg-5 wow fadeInUp\">
        <div class=\"accordion border-secondary\" id=\"avantage\" >
            ";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("/p-office365-backup/c-avantage"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 13
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials//office365-backup/avantage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials//office365-backup/avantage.htm", "");
    }
}
