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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials//produits/p-intro-office365-backup.htm */
class __TwigTemplate_ddd917e7c4827f80a4c524c590d8f54e3207ae0c04961aaf30497150318865bf extends \Twig\Template
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
            <img class=\"img-fluid mx-auto d-block\"
                 src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/office365-1200x.jpg");
        echo "\"
                 data-holder-rendered=\"true\">
        </div>
    </div>
    <div class=\"col\"></div>
    <div class=\"col-sm-12 col-lg-5\">
        ";
        // line 11
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("/p-office365-backup/c-intro"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 12
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials//produits/p-intro-office365-backup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials//produits/p-intro-office365-backup.htm", "");
    }
}
