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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/produit_home/default.htm */
class __TwigTemplate_82befcf6eb65c04ff662e9005e0e753d499e06a8e74469db06fc7a76b4473046 extends \Twig\Template
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
        $tags = array("for" => 1, "if" => 15, "set" => 17);
        $filters = array("escape" => 6, "length" => 15, "raw" => 25, "_" => 31);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'length', 'raw', '_'],
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4 my-3 wow fadeIn\">
    <div class=\"card text-center\">
        <div class=\"card-header secondary-color\">
            <h3 class=\"h3-responsive text-white my-0\">
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
            </h3>
        </div>
        <div class=\"card-header primary-color\">
            <h4 class=\"h4-responsive text-white mb-0\">
               <span class=\"label label-primary\">";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</span>
            </h4>
        </div>
        <div class=\"card-body\">
            ";
            // line 15
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, true, 15)) > 0)) {
                // line 16
                echo "            <div>
                ";
                // line 17
                $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, true, 17), "first", [], "any", false, false, true, 17);
                // line 18
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "pageUrl", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\">
                </a>
            </div>
            ";
            }
            // line 23
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 23)) {
                // line 24
                echo "            <p>
                ";
                // line 25
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 25), 25, $this->source);
                echo "
            </p>
            ";
            }
            // line 28
            echo "        </div>
        <div class=\"card-body pt-0\">
            <a class=\"btn btn-secondary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "video_url", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">
                ";
            // line 31
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Voir les autres offres"]);
            echo "
            </a>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/produit_home/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  124 => 30,  120 => 28,  114 => 25,  111 => 24,  108 => 23,  99 => 19,  94 => 18,  92 => 17,  89 => 16,  87 => 15,  80 => 11,  72 => 6,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/produit_home/default.htm", "");
    }
}
