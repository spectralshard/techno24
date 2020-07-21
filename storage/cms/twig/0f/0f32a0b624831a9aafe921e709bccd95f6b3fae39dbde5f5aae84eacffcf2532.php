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
class __TwigTemplate_d41deab762ec48f9b4e94474ac93a35b09e69ca89d22ec715e87ad8c91567d42 extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 1);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
                        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9)) {
                // line 10
                echo "                            <img class=\"img-fluid wow tada\"
                                 data-src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 11), 0, [], "any", false, false, false, 11), "filename", [], "any", false, false, false, 11), "thumb", [0 => 1200, 1 => 800, 2 => ["mode" => "crop"]], "method", false, false, false, 11), "html", null, true);
                echo "\"
                                 src=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 12), 0, [], "any", false, false, false, 12), "path", [], "any", false, false, false, 12), "html", null, true);
                echo "\"
                                 alt=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 13), 0, [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 15
            echo "                        </a>
                    </div>
                    <div class=\"col\">
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
                            <h2 class=\"h2-responsive mt-0 wow fadeInUp\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "
                        </h2></a>
                        <p class=\"my-0 wow fadeInUp mb-2\" style=\"color:#aeaeae;\">
                            ";
            // line 23
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Publié le"]);
            echo " ";
            echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 23), "%d %h %Y"]);
            echo " |
                            ";
            // line 24
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Par"]);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 24), "first_name", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 24), "last_name", [], "any", false, false, false, 24), "html", null, true);
            echo "
                            ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 25), "count", [], "any", false, false, false, 25)) {
                // line 26
                echo "                            ";
            }
            // line 27
            echo "                            |
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 28));
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 29), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 29)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 33), "html", null, true);
            echo "
                        </p>
                        <a class=\"btn btn-secondary float-right wow fadeInUp\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 35), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 47) > 1)) {
            // line 48
            echo "    <div class=\"row\">
        <div class=\"col-12\">
            <ul class=\"pagination justify-content-end\">
                ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 51) > 1)) {
                // line 52
                echo "                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 52), "baseFileName", [], "any", false, false, false, 52), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, false, 52) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 52) - 1)]);
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
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 57)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 58
                echo "                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 58), "baseFileName", [], "any", false, false, false, 58), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, false, 58) => $context["page"]]);
                echo "\">
                    <li class=\"";
                // line 59
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 59) == $context["page"])) ? ("active-li") : (null));
                echo " page-link\">
                   ";
                // line 60
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 64) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 64))) {
                // line 65
                echo "                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 65), "baseFileName", [], "any", false, false, false, 65), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, false, 65) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 65) + 1)]);
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
        return array (  252 => 72,  246 => 68,  239 => 65,  237 => 64,  234 => 63,  225 => 60,  221 => 59,  216 => 58,  212 => 57,  209 => 56,  201 => 52,  199 => 51,  194 => 48,  192 => 47,  189 => 46,  180 => 43,  177 => 42,  166 => 36,  162 => 35,  157 => 33,  153 => 31,  139 => 30,  130 => 29,  113 => 28,  110 => 27,  107 => 26,  105 => 25,  97 => 24,  91 => 23,  85 => 20,  80 => 18,  75 => 15,  70 => 13,  66 => 12,  62 => 11,  59 => 10,  57 => 9,  53 => 8,  48 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/blogs/default.htm", "");
    }
}
