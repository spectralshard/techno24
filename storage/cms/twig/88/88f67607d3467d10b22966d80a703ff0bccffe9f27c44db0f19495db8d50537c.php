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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/share.htm */
class __TwigTemplate_1d98e20e00c3bf1127791c2f1cfe66bc688bcc84dd2e9e9005f3af174d72f29c extends \Twig\Template
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
        $tags = array("if" => 54);
        $filters = array("_" => 31, "page" => 36, "escape" => 44);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['_', 'page', 'escape'],
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
        echo "<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script>window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = \"https://platform.twitter.com/widgets.js\";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
        t._e.push(f);
    };

    return t;
}(document, \"script\", \"twitter-wjs\"));</script>
<div class=\"row\">
    <div class=\"col\">
        <ul class=\"social mb-0 pb-0 align-content-between\">
            <li>
                <p style=\"display: inline-block\" class=\"mb-3\">
                    <strong>";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Partager l'article"]);
        echo "</strong>&nbsp;
                </p>
            </li>
            <li>
                <div class=\"fb-share-button\"
                     data-href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"
                     data-layout=\"button_count\">
                </div>
            </li>
            <li>
                <a class=\"twitter-share-button\"
                   href=\"https://twitter.com/intent/tweet\"
                   data-size=\"small\"
                   data-text=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\"
                   data-url=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "\"
                   data-hashtags=\"techno24\"
                   data-via=\"techno24net\"
                   data-related=\"twitterapi,twitter\"
                   target=\"_blank\">
                    Tweet
                </a>
            </li>
            <li>
                ";
        // line 54
        if ((($context["lang"] ?? null) == "fr")) {
            // line 55
            echo "                <script src=\"https://platform.linkedin.com/in.js\" type=\"text/javascript\">lang: fr_FR</script>
                <script type=\"IN/Share\" data-url=\"";
            // line 56
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "\"></script>
                ";
        } else {
            // line 58
            echo "                <script src=\"https://platform.linkedin.com/in.js\" type=\"text/javascript\">lang: en_US</script>
                <script type=\"IN/Share\" data-url=\"";
            // line 59
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "\"></script>
                ";
        }
        // line 61
        echo "            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/share.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 61,  142 => 59,  139 => 58,  134 => 56,  131 => 55,  129 => 54,  117 => 45,  113 => 44,  102 => 36,  94 => 31,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/share.htm", "");
    }
}
