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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/blogs/default.htm */
class __TwigTemplate_5b3d5318ba7c5397ff4501be966ef741f840f480e2b56770136edaf1b31d74ce extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 4, "if" => 9);
        $filters = array("escape" => 8, "_" => 23, "strftime" => 23, "page" => 52);
        $functions = array("range" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', '_', 'strftime', 'page'],
                ['range']
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "<div class=\"container\">
    <div class=\"row\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "            <div class=\"col-12 mb-5\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-5 col-lg-3\">
                        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">
                        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 9), "count", [], "any", false, false, true, 9)) {
                // line 10
                echo "                            <img class=\"img-fluid wow tada\"
                                 data-src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11), "filename", [], "any", false, false, true, 11), "thumb", [0 => 1200, 1 => 800, 2 => ["mode" => "crop"]], "method", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\"
                                 src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\"
                                 alt=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "description", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 15
            echo "                        </a>
                    </div>
                    <div class=\"col\">
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">
                            <h2 class=\"h2-responsive mt-0 wow fadeInUp\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
                        </h2></a>
                        <p class=\"my-0 wow fadeInUp mb-2\" style=\"color:#aeaeae;\">
                            ";
            // line 23
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Publié le"]);
            echo " ";
            echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 23), 23, $this->source), "%d %h %Y"]);
            echo " |
                            ";
            // line 24
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Par"]);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, true, 24), "first_name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, true, 24), "last_name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
                            ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 25), "count", [], "any", false, false, true, 25)) {
                // line 26
                echo "                            ";
            }
            // line 27
            echo "                            |
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 28));
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
                // line 29
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 29)) {
                    echo ", ";
                }
                // line 30
                echo "                            ";
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
            // line 31
            echo "                        </p>
                        <p class=\"wow fadeInUp\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
                        </p>
                        <a class=\"btn btn-secondary float-right wow fadeInUp\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\" role=\"button\">
                            ";
            // line 36
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Lire l'article"]);
            echo "
                        </a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "        <div class=\"no-data\">
            ";
            // line 43
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Aucun sujet trouvé"]);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
    ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 47) > 1)) {
            // line 48
            echo "    <div class=\"row\">
        <div class=\"col-12\">
            <ul class=\"pagination justify-content-end\">
                ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 51) > 1)) {
                // line 52
                echo "                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 52), "baseFileName", [], "any", false, false, true, 52), 52, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 52) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 52) - 1)]);
                echo "\"><li class=\"page-link\">
                    <i class=\"fa fa-angle-double-left\"></i>
                </li></a>
                ";
            }
            // line 56
            echo "
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 57)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 58
                echo "                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 58), "baseFileName", [], "any", false, false, true, 58), 58, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 58) => $context["page"]]);
                echo "\">
                    <li class=\"";
                // line 59
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 59) == $context["page"])) ? ("active-li") : (null));
                echo " page-link\">
                   ";
                // line 60
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 60, $this->source), "html", null, true);
                echo "
                </li></a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
                ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 64) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 64))) {
                // line 65
                echo "                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 65), "baseFileName", [], "any", false, false, true, 65), 65, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 65) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 65) + 1)]);
                echo "\">
                    <li class=\"page-link\"><i class=\"fa fa-angle-double-right\"></i> </li></a>
                ";
            }
            // line 68
            echo "            </ul>
        </div>
    </div>
    ";
        }
        // line 72
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/blogs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 72,  271 => 68,  264 => 65,  262 => 64,  259 => 63,  250 => 60,  246 => 59,  241 => 58,  237 => 57,  234 => 56,  226 => 52,  224 => 51,  219 => 48,  217 => 47,  214 => 46,  205 => 43,  202 => 42,  191 => 36,  187 => 35,  182 => 33,  178 => 31,  164 => 30,  155 => 29,  138 => 28,  135 => 27,  132 => 26,  130 => 25,  122 => 24,  116 => 23,  110 => 20,  105 => 18,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  84 => 10,  82 => 9,  78 => 8,  73 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/blogs/default.htm", "");
    }
}
