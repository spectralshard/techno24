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
class __TwigTemplate_3fb974f52f7738cc2f85b9a26266dbd03e55445f3c190926361acf9a23d91fd5 extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "meta_title", [], "any", false, false, false, 13), "html", null, true);
        echo " | Techno24</title>
    <meta name=\"description\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "meta_description", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "meta_title", [], "any", false, false, false, 15), "html", null, true);
        echo " | Techno24\">
    <meta name=\"author\" content=\"Techno24.net\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
    <meta property=\"og:title\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "meta_title", [], "any", false, false, false, 19), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\" />
    <meta name=\"twitter:image\" content=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 33), "settings", [], "any", false, false, false, 33), "meta_description", [], "any", false, false, false, 33), "html", null, true);
        echo "\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:site_name\" content=\"Techno24.net\" />
    <meta property=\"fb:app_id\" content=\"214678586485360\" />
    <meta name=\"twitter:title\" content=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 37), "meta_title", [], "any", false, false, false, 37), "html", null, true);
        echo " | Techno24\">
    <meta name=\"twitter:description\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "settings", [], "any", false, false, false, 38), "meta_description", [], "any", false, false, false, 38), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
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
        return array (  232 => 83,  229 => 82,  218 => 81,  215 => 80,  212 => 73,  203 => 71,  200 => 70,  197 => 69,  193 => 68,  187 => 64,  183 => 63,  175 => 57,  173 => 56,  169 => 54,  164 => 53,  160 => 52,  157 => 51,  153 => 50,  149 => 48,  146 => 47,  143 => 46,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  123 => 38,  119 => 37,  112 => 33,  107 => 30,  102 => 28,  98 => 27,  93 => 26,  88 => 24,  84 => 23,  79 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  59 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/layouts/default.htm", "");
    }
}
