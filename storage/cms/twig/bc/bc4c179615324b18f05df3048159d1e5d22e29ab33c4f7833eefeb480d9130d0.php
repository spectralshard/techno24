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
class __TwigTemplate_ceb1c83938b4eba032097819510fa3dbf2cde6cc8f5e45b2503f280d4fc6ae96 extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 44), "html", null, true);
        echo "\"
                   data-url=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, false, 45), "html", null, true);
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
        return array (  122 => 61,  117 => 59,  114 => 58,  109 => 56,  106 => 55,  104 => 54,  92 => 45,  88 => 44,  77 => 36,  69 => 31,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/share.htm", "");
    }
}
