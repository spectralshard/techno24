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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/home.htm */
class __TwigTemplate_295f39d922f9599e24b14808d4785b381769f6c766a6f0528bd613ce004495e6 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["LA FAÇON LA PLUS SIMPLE DE CONNECTER L'HUMAIN ET LA TECHNOLOGIE."]);
        echo "
                        </strong>
                    </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive\">
                    ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Services pour votre entreprise"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row pb-3\">
            ";
        // line 24
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("produit_home"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "        </div>
    </div>
</section>
<section class=\"intro primary-color py-4\">
    <div class=\"container pt-5\">
        <div class=\"row \">
            <div class=\"col text-center\">
                <h2 class=\"h2-responsive text-white wow flipInX\">
                    ";
        // line 33
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
                <div class=\"col-sm-12 col-lg-6 text-white wow fadeInUp\">
                    ";
        // line 46
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("/home/c-about"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 47
        echo "                </div>
        </div>
    </div>
</section>
<section class=\"pb-5\" style=\"background-color: #efefef\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center pt-5\">
                <h2 class=\"h2-responsive wow flipInX\">
                    ";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Les dernières nouvelles"]);
        echo "
                </h2>
            </div>
        </div>
        <div class=\"row pt-2\">
            ";
        // line 61
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("lastestBlogEntry"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 62
        echo "        </div>
    </div>
</section>
<section class=\"my-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"h2-responsive text-center wow fadeInUp\">
                    ";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Témoignages clients"]);
        echo "
                </h2>
            </div>
        </div>
            ";
        // line 74
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("myTestimonials"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 75
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 75,  142 => 74,  135 => 70,  125 => 62,  121 => 61,  113 => 56,  102 => 47,  98 => 46,  82 => 33,  72 => 25,  68 => 24,  60 => 19,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/home.htm", "");
    }
}
