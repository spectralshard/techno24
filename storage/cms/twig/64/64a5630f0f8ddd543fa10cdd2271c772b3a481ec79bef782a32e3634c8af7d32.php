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
class __TwigTemplate_e1daec61958d88537b6a371ea9a38529e7c3a8a647db219011c7d21431db0995 extends \Twig\Template
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
            echo "            <div class=\"col-xs-12 col-sm-6 mb-2\">
                <div class=\"row\">
                    <div class=\"col-12 mb-3\">
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
                    <div class=\"col-12\">
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
                            <h3 class=\"h3-responsive mt-0 wow fadeInUp\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "
                        </h3></a>
                        <p class=\"my-0 wow fadeInUp mb-2\">
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
            echo "                        </p>
                        <p class=\"wow fadeInUp\">
                            ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 29), "html", null, true);
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
        return array (  146 => 43,  142 => 42,  137 => 39,  128 => 36,  125 => 35,  114 => 29,  110 => 27,  107 => 26,  105 => 25,  97 => 24,  91 => 23,  85 => 20,  80 => 18,  75 => 15,  70 => 13,  66 => 12,  62 => 11,  59 => 10,  57 => 9,  53 => 8,  48 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/lastestblogentry/default.htm", "");
    }
}
