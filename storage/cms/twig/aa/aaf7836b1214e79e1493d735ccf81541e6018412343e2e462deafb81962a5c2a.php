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
class __TwigTemplate_115b8b235a816eb0a817ff738dc4c02c37acaf52f9b021f75426742cc6a2a0e4 extends \Twig\Template
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
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) {
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
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                    echo " class=\"active\"";
                }
                echo ">
            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "            <div>
                <img src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 16), "thumb", [0 => 300, 1 => 300, 2 => ["mode" => "auto"]], "method", false, false, false, 16), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 16), "html", null, true);
                    echo "\"
                     style=\"width: 280px;background-color:#FFFFFF;\">
            </div>
            ";
                }
                // line 20
                echo "            <p style=\"color:#000000;\" class=\"mt-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "quote", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
            <h2>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 21), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "backgroundColor"], "method", false, false, false, 29), "html", null, true);
            echo " !important;
    }
    .testim .arrow:hover, .testim .cont div h2 {
    color: ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 32), "html", null, true);
            echo " !important;
    }
    .testim .dots .dot.active,
    .testim .dots .dot:hover {
    background: ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 36), "html", null, true);
            echo ";
    border-color: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 37), "html", null, true);
            echo ";
    }
    @-webkit-keyframes testim-scale {
        70% {
    -webkit-box-shadow: 0px 0px 10px 5px ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 41), "html", null, true);
            echo ";
    box-shadow: 0px 0px 10px 5px ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 42), "html", null, true);
            echo ";
    }

    100% {
    -webkit-box-shadow: 0px 0px 0px 0px ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 46), "html", null, true);
            echo ";
    box-shadow: 0px 0px 0px 0px ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 47), "html", null, true);
            echo ";
    }
    }
    @-moz-keyframes testim-scale {
        70% {
    -moz-box-shadow: 0px 0px 10px 5px ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 52), "html", null, true);
            echo ";
    box-shadow: 0px 0px 10px 5px ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 53), "html", null, true);
            echo ";
    }

    100% {
    -moz-box-shadow: 0px 0px 0px 0px ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 57), "html", null, true);
            echo ";
    box-shadow: 0px 0px 0px 0px ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 58), "html", null, true);
            echo ";
    }
    }
    @-ms-keyframes testim-scale {
        70% {
    -ms-box-shadow: 0px 0px 10px 5px ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 63), "html", null, true);
            echo ";
    box-shadow: 0px 0px 10px 5px ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 64), "html", null, true);
            echo ";
    }

    100% {
    -ms-box-shadow: 0px 0px 0px 0px ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 68), "html", null, true);
            echo ";
    box-shadow: 0px 0px 0px 0px ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 69), "html", null, true);
            echo ";
    }
    }

    @-o-keyframes testim-scale {
        70% {
    -o-box-shadow: 0px 0px 10px 5px ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 75), "html", null, true);
            echo ";
    box-shadow: 0px 0px 10px 5px ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 76), "html", null, true);
            echo ";
    }

    100% {
    -o-box-shadow: 0px 0px 0px 0px ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 80), "html", null, true);
            echo ";
    box-shadow: 0px 0px 0px 0px ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 81), "html", null, true);
            echo ";
    }
    }
    @keyframes testim-scale {
        70% {
    box-shadow: 0px 0px 10px 5px ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 86), "html", null, true);
            echo ";
    }

    100% {
    box-shadow: 0px 0px 0px 0px ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 90), "html", null, true);
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
        return array (  277 => 90,  270 => 86,  262 => 81,  258 => 80,  251 => 76,  247 => 75,  238 => 69,  234 => 68,  227 => 64,  223 => 63,  215 => 58,  211 => 57,  204 => 53,  200 => 52,  192 => 47,  188 => 46,  181 => 42,  177 => 41,  170 => 37,  166 => 36,  159 => 32,  153 => 29,  146 => 24,  129 => 21,  124 => 20,  115 => 16,  112 => 15,  110 => 14,  103 => 13,  86 => 12,  82 => 10,  63 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/mytestimonials/default.htm", "");
    }
}
