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

/* /Users/alexandrefoisy/web sites/techno24/plugins/mey/breadcrumbs/components/breadcrumbs/default.htm */
class __TwigTemplate_d16adabdc765ae7a65142db34d70764960efc05c6b4a98fe30eb4e15a52d8203 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 2, "for" => 5);
        $filters = array("escape" => 3, "page" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'page'],
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
        $context["crumbOptions"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "options", [], "any", false, false, true, 1);
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["currentCrumb"] ?? null), "show_crumb", [], "any", false, false, true, 2)) {
            // line 3
            echo "<ol class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["crumbOptions"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["main-ol-class"] ?? null) : null), 3, $this->source), "html", null, true);
            echo "\">
";
            // line 4
            $context["activeCrumb"] = "";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 6
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["crumb"], "in_crumb_trail", [], "any", false, false, true, 6)) {
                    // line 7
                    echo "    <li class=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["crumbOptions"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["main-li-class"] ?? null) : null), 7, $this->source), "html", null, true);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, true, 7)) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["crumbOptions"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["disabled-class"] ?? null) : null), 7, $this->source), "html", null, true);
                        echo " ";
                    }
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 7)) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["crumbOptions"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["active-class"] ?? null) : null), 7, $this->source), "html", null, true);
                        echo " ";
                    }
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 7)) {
                        echo " id=\"bcLast\" ";
                    }
                    echo ">
        ";
                    // line 8
                    if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 8) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, true, 8))) {
                        echo " <a href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["crumb"], "baseFileName", [], "any", false, false, true, 8), 8, $this->source));
                        echo "\"> ";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    echo " ";
                    if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 8) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "is_disabled", [], "any", false, false, true, 8))) {
                        echo "</a>";
                    }
                    // line 9
                    echo "    </li>
    ";
                }
                // line 11
                echo "
    ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 12)) {
                    // line 13
                    echo "        ";
                    $context["activeCrumb"] = $context["crumb"];
                    // line 14
                    echo "    ";
                }
                // line 15
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</ol>
";
        }
        // line 19
        echo "
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["activeCrumb"] ?? null), "elementTitle", [], "any", false, false, true, 21)) {
            // line 22
            echo "<script>
    document.addEventListener('DOMContentLoaded', function (){
        var bcTitle = document.getElementById('";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["activeCrumb"] ?? null), "elementTitle", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "');
        var bcActive = document.getElementById('bcLast');

        if (bcTitle) {
            bcActive.innerHTML = bcTitle.innerHTML;
        }
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/plugins/mey/breadcrumbs/components/breadcrumbs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 24,  165 => 22,  163 => 21,  160 => 19,  156 => 17,  141 => 15,  138 => 14,  135 => 13,  133 => 12,  130 => 11,  126 => 9,  114 => 8,  93 => 7,  90 => 6,  73 => 5,  71 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/plugins/mey/breadcrumbs/components/breadcrumbs/default.htm", "");
    }
}
