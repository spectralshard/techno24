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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/layouts/default.htm */
class __TwigTemplate_8b7a25652f2cd654b43b0fe1dc75306bc95c5153caa9cb9f01b0cc79f3fdbfaf extends \Twig\Template
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
        $tags = array("if" => 21, "styles" => 47, "partial" => 50, "page" => 56, "component" => 63, "flash" => 70, "framework" => 81, "scripts" => 82);
        $filters = array("escape" => 13, "page" => 18, "theme" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'styles', 'partial', 'page', 'component', 'flash', 'framework', 'scripts'],
                ['escape', 'page', 'theme'],
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
        echo "<!DOCTYPE html>
<html>
<head>
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-4576616-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-4576616-1');
    </script>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 13), "meta_title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo " | Techno24</title>
    <meta name=\"description\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 14), "meta_description", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "meta_title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo " | Techno24\">
    <meta name=\"author\" content=\"Techno24.net\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
    <meta property=\"og:title\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 19), "meta_title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo " | Techno24\" />
    <meta property=\"og:url\" content=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
    ";
        // line 21
        if (($context["image_url"] ?? null)) {
            // line 22
            echo "    <meta property=\"og:image:secure_url\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 22, $this->source), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 23, $this->source), "html", null, true);
            echo "\" />
    <meta name=\"twitter:image\" content=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 24, $this->source), "html", null, true);
            echo "\">
    ";
        } else {
            // line 26
            echo "    <meta property=\"og:image:secure_url\" content=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-share-img.jpg");
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 27
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-share-img.jpg");
            echo "\" />
    <meta name=\"twitter:image\" content=\"";
            // line 28
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-share-img.jpg");
            echo "\">
    ";
        }
        // line 30
        echo "    <meta property=\"og:image:height\" content=\"1200\">
    <meta property=\"og:image:width\" content=\"800\">
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:description\" content=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 33), "settings", [], "any", false, false, true, 33), "meta_description", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:site_name\" content=\"Techno24.net\" />
    <meta property=\"fb:app_id\" content=\"214678586485360\" />
    <meta name=\"twitter:title\" content=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 37), "meta_title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo " | Techno24\">
    <meta name=\"twitter:description\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 38), "settings", [], "any", false, false, true, 38), "meta_description", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\"/>
    <link href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css"]);
        // line 46
        echo "\" rel=\"stylesheet\">
    ";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 48
        echo "</head>
<body>
";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("facebook-module"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "<header>
    ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "</header>
<main id=\"page\">
    ";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 57
        echo "</main>
<footer>
    <section style=\"background-color:#DFE6EA;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 63
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mypartner"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 64
        echo "                </div>
            </div>
        </div>
    </section>
    ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "</footer>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 70
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 71
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 71, $this->source), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 71, $this->source), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 73
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery-3.4.1.min.js", 1 => "assets/vendor/bootstrap/js/bootstrap.min.js", 2 => "assets/vendor/wow/dist/wow.min.js", 3 => "assets/js/techno24.js", 4 => "assets/vendor/popper/popper.min.js", 5 => "assets/vendor/tether/dist/js/tether.min.js"]);
        // line 80
        echo "\"></script>
";
        // line 81
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 82
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 83
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 83,  254 => 82,  243 => 81,  240 => 80,  237 => 73,  228 => 71,  225 => 70,  222 => 69,  218 => 68,  212 => 64,  208 => 63,  200 => 57,  198 => 56,  194 => 54,  189 => 53,  185 => 52,  182 => 51,  178 => 50,  174 => 48,  171 => 47,  168 => 46,  166 => 44,  162 => 43,  158 => 42,  154 => 41,  148 => 38,  144 => 37,  137 => 33,  132 => 30,  127 => 28,  123 => 27,  118 => 26,  113 => 24,  109 => 23,  104 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  84 => 15,  80 => 14,  76 => 13,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/layouts/default.htm", "");
    }
}
