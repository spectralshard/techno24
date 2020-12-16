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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/lastestblogentry/default.htm */
class __TwigTemplate_64b4f3f50b0700e82784da4797917e602f71a1ca239e72cee0ed5b3c3d78c7b2 extends \Twig\Template
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
        $filters = array("escape" => 8, "_" => 23, "strftime" => 23, "page" => 42);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', '_', 'strftime', 'page'],
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
            echo "            <div class=\"col-xs-12 col-sm-6 mb-2\">
                <div class=\"row\">
                    <div class=\"col-12 mb-3\">
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
                    <div class=\"col-12\">
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">
                            <h3 class=\"h3-responsive mt-0 wow fadeInUp\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
                        </h3></a>
                        <p class=\"my-0 wow fadeInUp mb-2\">
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
            echo "                        </p>
                        <p class=\"wow fadeInUp\">
                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
                        </p>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "        <div class=\"no-data\">
            ";
            // line 36
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Aucun sujet trouvé"]);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
    <div class=\"row pb-5\">
        <div class=\"col\">
            <a class=\"btn btn-secondary float-right wow fadeInUp\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blogList");
        echo "\" role=\"button\">
                ";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tous nos articles"]);
        echo "
            </a>
        </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/lastestblogentry/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 43,  167 => 42,  162 => 39,  153 => 36,  150 => 35,  139 => 29,  135 => 27,  132 => 26,  130 => 25,  122 => 24,  116 => 23,  110 => 20,  105 => 18,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  84 => 10,  82 => 9,  78 => 8,  73 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/lastestblogentry/default.htm", "");
    }
}
