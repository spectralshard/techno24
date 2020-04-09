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
class __TwigTemplate_24231e62d96d2fa9511395cfb88152642e8885e3c79f53a3e6bbf3383feae3cb extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4 my-3 wow fadeIn\">
    <div class=\"card text-center\">
        <div class=\"card-header secondary-color\">
            <h3 class=\"h3-responsive text-white my-0\">
                ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "
            </h3>
        </div>
        <div class=\"card-header primary-color\">
            <h4 class=\"h4-responsive text-white mb-0\">
               <span class=\"label label-primary\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 11), "html", null, true);
            echo "</span>
            </h4>
        </div>
        <div class=\"card-body\">
            ";
            // line 15
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, false, 15)) > 0)) {
                // line 16
                echo "            <div>
                ";
                // line 17
                $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, false, 17), "first", [], "any", false, false, false, 17);
                // line 18
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "pageUrl", [], "any", false, false, false, 18), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 19), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
                echo "\">
                </a>
            </div>
            ";
            }
            // line 23
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 23)) {
                // line 24
                echo "            <p>
                ";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 25);
                echo "
            </p>
            ";
            }
            // line 28
            echo "        </div>
        <div class=\"card-body pt-0\">
            <a class=\"btn btn-secondary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "video_url", [], "any", false, false, false, 30), "html", null, true);
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
        return array (  103 => 31,  99 => 30,  95 => 28,  89 => 25,  86 => 24,  83 => 23,  74 => 19,  69 => 18,  67 => 17,  64 => 16,  62 => 15,  55 => 11,  47 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/produit_home/default.htm", "");
    }
}