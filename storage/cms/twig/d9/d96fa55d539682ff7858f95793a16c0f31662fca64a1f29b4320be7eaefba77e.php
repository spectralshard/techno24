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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/mytestimonials/default.htm */
class __TwigTemplate_6c3f258e9d7ca757f4498fe23772fc28cf29f188b01d8c7f91811a5a7924b2db extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 7);
        $filters = array("escape" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
        if (($context["testimonials"] ?? null)) {
            // line 2
            echo "<section id=\"testim\" class=\"testim wow fadeInUp\">
    <div class=\"row wrap\">
        <span id=\"right-arrow\" class=\"arrow right fa fa-chevron-right\"></span>
        <span id=\"left-arrow\" class=\"arrow left fa fa-chevron-left \"></span>
        <ul id=\"testim-dots\" class=\"dots\" style=\"visibility: hidden;\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "            <li class=\"dot";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 8)) {
                    echo " active";
                }
                echo "\"></li>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ul>
        <div id=\"testim-content\" class=\"col-12 cont\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 13
                echo "            <div";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 13)) {
                    echo " class=\"active\"";
                }
                echo ">
            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, true, 14)) {
                    // line 15
                    echo "            <div>
                <img src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, true, 16), "thumb", [0 => 300, 1 => 300, 2 => ["mode" => "auto"]], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo "\"
                     style=\"width: 280px;background-color:#FFFFFF;\">
            </div>
            ";
                }
                // line 20
                echo "            <p style=\"color:#000000;\" class=\"mt-3\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "quote", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</p>
            <h2>";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</h2>
        </div>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
    </div>
</section>
<style>
    .testim {
    background-color: ";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "backgroundColor"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            echo " !important;
    }
    .testim .arrow:hover, .testim .cont div h2 {
    color: ";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo " !important;
    }
    .testim .dots .dot.active,
    .testim .dots .dot:hover {
    background: ";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            echo ";
    border-color: ";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 37), 37, $this->source), "html", null, true);
            echo ";
    }
    @-webkit-keyframes testim-scale {
        70% {
    -webkit-box-shadow: 0px 0px 10px 5px ";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ";
    box-shadow: 0px 0px 10px 5px ";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            echo ";
    }

    100% {
    -webkit-box-shadow: 0px 0px 0px 0px ";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
            echo ";
    box-shadow: 0px 0px 0px 0px ";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo ";
    }
    }
    @-moz-keyframes testim-scale {
        70% {
    -moz-box-shadow: 0px 0px 10px 5px ";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ";
    box-shadow: 0px 0px 10px 5px ";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 53), 53, $this->source), "html", null, true);
            echo ";
    }

    100% {
    -moz-box-shadow: 0px 0px 0px 0px ";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 57), 57, $this->source), "html", null, true);
            echo ";
    box-shadow: 0px 0px 0px 0px ";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ";
    }
    }
    @-ms-keyframes testim-scale {
        70% {
    -ms-box-shadow: 0px 0px 10px 5px ";
            // line 63
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 63), 63, $this->source), "html", null, true);
            echo ";
    box-shadow: 0px 0px 10px 5px ";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 64), 64, $this->source), "html", null, true);
            echo ";
    }

    100% {
    -ms-box-shadow: 0px 0px 0px 0px ";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            echo ";
    box-shadow: 0px 0px 0px 0px ";
            // line 69
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            echo ";
    }
    }

    @-o-keyframes testim-scale {
        70% {
    -o-box-shadow: 0px 0px 10px 5px ";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 75), 75, $this->source), "html", null, true);
            echo ";
    box-shadow: 0px 0px 10px 5px ";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 76), 76, $this->source), "html", null, true);
            echo ";
    }

    100% {
    -o-box-shadow: 0px 0px 0px 0px ";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 80), 80, $this->source), "html", null, true);
            echo ";
    box-shadow: 0px 0px 0px 0px ";
            // line 81
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 81), 81, $this->source), "html", null, true);
            echo ";
    }
    }
    @keyframes testim-scale {
        70% {
    box-shadow: 0px 0px 10px 5px ";
            // line 86
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 86), 86, $this->source), "html", null, true);
            echo ";
    }

    100% {
    box-shadow: 0px 0px 0px 0px ";
            // line 90
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, true, 90), 90, $this->source), "html", null, true);
            echo ";
    }
    }
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/mytestimonials/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 90,  295 => 86,  287 => 81,  283 => 80,  276 => 76,  272 => 75,  263 => 69,  259 => 68,  252 => 64,  248 => 63,  240 => 58,  236 => 57,  229 => 53,  225 => 52,  217 => 47,  213 => 46,  206 => 42,  202 => 41,  195 => 37,  191 => 36,  184 => 32,  178 => 29,  171 => 24,  154 => 21,  149 => 20,  140 => 16,  137 => 15,  135 => 14,  128 => 13,  111 => 12,  107 => 10,  88 => 8,  71 => 7,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/mytestimonials/default.htm", "");
    }
}
