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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/blog/article.htm */
class __TwigTemplate_52e97d378595bc170f0dc11ee004ba8a4ac3ce72853209056292de9e0ab3d96e extends \Twig\Template
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
        echo "<section class=\"primary-color py-4 mb-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                    <h1 class=\"h1-responsive text-white text-center\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>
                    <h6 class=\"my-0 white-text text-center\">
                        ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Publié le"]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 7), "%d %h %Y"]);
        echo " |
                        ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Par"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 8), "first_name", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 8), "last_name", [], "any", false, false, false, 8), "html", null, true);
        echo "
                        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9)) {
            // line 10
            echo "                        ";
        }
        // line 11
        echo "                        |
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 12));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 13), "html", null, true);
            echo "\" style=\"color:#FFFFFF;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13)) {
                echo ", ";
            }
            // line 14
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                    </h6>
            </div>
        </div>
    </div>
</section>
<section id=\"blog\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-8\">
                ";
        // line 24
        if (($context["post"] ?? null)) {
            // line 25
            echo "                    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("article"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 26
            echo "                    <div class=\"my-4 pt-3 border-top border-bottom\">
                        ";
            // line 27
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("share"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 28
            echo "                    </div>
                    <div class=\"my-4 pt-3\">
                        ";
            // line 30
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("relatedPost"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 31
            echo "                    </div>
                ";
        } else {
            // line 33
            echo "                <h2>Sujet introuvable</h2>
                ";
        }
        // line 35
        echo "            </div>
            <div class=\"col-sm-12 col-md-4 my-4\">
                ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/blog/article.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 38,  155 => 37,  151 => 35,  147 => 33,  143 => 31,  139 => 30,  135 => 28,  131 => 27,  128 => 26,  123 => 25,  121 => 24,  96 => 14,  87 => 13,  70 => 12,  67 => 11,  64 => 10,  62 => 9,  54 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/blog/article.htm", "");
    }
}
