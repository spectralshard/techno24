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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/bitdefender/callout.htm */
class __TwigTemplate_64f4494e2bcc1cbb15aedbdc91ac5b85a2629514a230a197cc5ab656461f45ac extends \Twig\Template
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
        $tags = array("content" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                [],
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
        echo "<div class=\"row d-flex justify-content-center\">
    <div class=\"col-sm-12 col-lg-6 col-xl-5 wow fadeInUp\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("bitdefender/c-feature-left"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
    <div class=\"col-sm-12 col-lg-6 col-xl-5 wow fadeInUp\">
        ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("bitdefender/c-feature-right"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/bitdefender/callout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 7,  74 => 6,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/bitdefender/callout.htm", "");
    }
}
