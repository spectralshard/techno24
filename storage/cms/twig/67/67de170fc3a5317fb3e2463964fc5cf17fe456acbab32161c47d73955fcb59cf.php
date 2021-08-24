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
class __TwigTemplate_1448584ea7a56d68f7c1d5115f132b38eef2aaa0de145378ed446bf6d08524e2 extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 4, "set" => 7);
        $filters = array("escape" => 3, "replace" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'replace'],
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
        if (($context["partners"] ?? null)) {
            // line 2
            echo "<div class=\"partner-slider slider\"
     style=\"background-color: ";
            // line 3
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "backgroundColor"], "method", false, false, true, 3), 3, $this->source), "html", null, true);
            echo ";padding: 30px 0;\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 5
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, true, 5)) {
                    // line 6
                    echo "            ";
                    if (twig_in_filter("https", twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, true, 6))) {
                        // line 7
                        echo "                ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, true, 7);
                        // line 8
                        echo "            ";
                    } elseif (twig_in_filter("http", twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, true, 8))) {
                        // line 9
                        echo "                ";
                        $context["url"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, true, 9), 9, $this->source), ["http://" => "", "https://" => ""]);
                        // line 10
                        echo "            ";
                    } else {
                        // line 11
                        echo "                ";
                        $context["url"] = ("https://" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, true, 11), 11, $this->source));
                        // line 12
                        echo "            ";
                    }
                    // line 13
                    echo "        ";
                }
                // line 14
                echo "        <div class=\"slick-slide\">
            ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, true, 15)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 15, $this->source), "html", null, true);
                    echo "\" target=\"_blank\">";
                }
                // line 16
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partner"], "image", [], "any", false, false, true, 16), "thumb", [0 => ($context["auto"] ?? null), 1 => 100], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\" class=\"wow flipInX\">
            ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, true, 17)) {
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
        return array (  129 => 20,  122 => 18,  118 => 17,  111 => 16,  105 => 15,  102 => 14,  99 => 13,  96 => 12,  93 => 11,  90 => 10,  87 => 9,  84 => 8,  81 => 7,  78 => 6,  75 => 5,  71 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/mypartner/default.htm", "");
    }
}
