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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/mypartner/default.htm */
class __TwigTemplate_8a69a0a18ecd9d09d8dbd40b53c89cdb19cb250fb228b80c444118bb9d39dec8 extends \Twig\Template
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
        if (($context["partners"] ?? null)) {
            // line 2
            echo "<div class=\"partner-slider slider\"
     style=\"background-color: ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "backgroundColor"], "method", false, false, false, 3), "html", null, true);
            echo ";padding: 30px 0;\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 5
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "            ";
                    if (twig_in_filter("https", twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 6))) {
                        // line 7
                        echo "                ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 7);
                        // line 8
                        echo "            ";
                    } elseif (twig_in_filter("http", twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 8))) {
                        // line 9
                        echo "                ";
                        $context["url"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 9), ["http://" => "", "https://" => ""]);
                        // line 10
                        echo "            ";
                    } else {
                        // line 11
                        echo "                ";
                        $context["url"] = ("https://" . twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 11));
                        // line 12
                        echo "            ";
                    }
                    // line 13
                    echo "        ";
                }
                // line 14
                echo "        <div class=\"slide\">
            ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 15)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\" target=\"_blank\">";
                }
                // line 16
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partner"], "image", [], "any", false, false, false, 16), "thumb", [0 => ($context["auto"] ?? null), 1 => 100], "method", false, false, false, 16), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 16), "html", null, true);
                echo "\" class=\"wow flipInX\">
            ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 17)) {
                    echo "</a>";
                }
                // line 18
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/mypartner/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  97 => 18,  93 => 17,  86 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/mypartner/default.htm", "");
    }
}
