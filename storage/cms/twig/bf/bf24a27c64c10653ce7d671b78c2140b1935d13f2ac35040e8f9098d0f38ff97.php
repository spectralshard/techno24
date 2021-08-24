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
class __TwigTemplate_959c243c3de18a590d172fc6c4a855304f1596257ae12145992a3b951bb03a4e extends \Twig\Template
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
        $tags = array("if" => 9, "for" => 12, "component" => 25, "partial" => 27);
        $filters = array("escape" => 5, "_" => 7, "strftime" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'component', 'partial'],
                ['escape', '_', 'strftime'],
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
        echo "<section class=\"primary-color py-4 mb-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                    <h1 class=\"h1-responsive text-white text-center\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h1>
                    <h6 class=\"my-0 white-text text-center\">
                        ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Publié le"]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 7), 7, $this->source), "%d %h %Y"]);
        echo " |
                        ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Par"]);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 8), "first_name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 8), "last_name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
                        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 9), "count", [], "any", false, false, true, 9)) {
            // line 10
            echo "                        ";
        }
        // line 11
        echo "                        |
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 12));
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
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\" style=\"color:#FFFFFF;\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 13)) {
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
        return array (  184 => 38,  180 => 37,  176 => 35,  172 => 33,  168 => 31,  164 => 30,  160 => 28,  156 => 27,  153 => 26,  148 => 25,  146 => 24,  121 => 14,  112 => 13,  95 => 12,  92 => 11,  89 => 10,  87 => 9,  79 => 8,  73 => 7,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/pages/blog/article.htm", "");
    }
}
