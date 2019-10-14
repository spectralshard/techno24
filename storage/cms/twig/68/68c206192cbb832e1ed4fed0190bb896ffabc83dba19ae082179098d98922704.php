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

/* /Volumes/Data/EntourageSolution/www/techno24/themes/techno24/layouts/default.htm */
class __TwigTemplate_dcaa197995f3bc4987b75d5048b2e02a3680b4dd54b660968e19faa9b2435552 extends \Twig\Template
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
<html lang=\"en\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>AlexCorp Theme - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"AlexCorp\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.jpg");
        echo "\"/>
    <link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css", 1 => "assets/vendor/animate.css/animate.min.css"]);
        // line 16
        echo "\" rel=\"stylesheet\">
    ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 18
        echo "</head>
<body>

<header>
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "</header>


<main id=\"page\">
    ";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 28
        echo "</main>

<footer>
    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "</footer>

";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 34
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 35
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 37
        echo "
<script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery-3.2.1.min.js", 1 => "assets/vendor/popper/popper.js", 2 => "assets/vendor/tether/dist/js/tether.min.js", 3 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js"]);
        // line 43
        echo "\"></script>

";
        // line 45
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
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 47
        echo "</body>";
    }

    public function getTemplateName()
    {
        return "/Volumes/Data/EntourageSolution/www/techno24/themes/techno24/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  140 => 46,  129 => 45,  125 => 43,  123 => 38,  120 => 37,  111 => 35,  108 => 34,  104 => 32,  100 => 31,  95 => 28,  93 => 27,  87 => 23,  83 => 22,  77 => 18,  74 => 17,  71 => 16,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>AlexCorp Theme - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.description }}\">
    <meta name=\"title\" content=\"{{ this.page.title }}\">
    <meta name=\"author\" content=\"AlexCorp\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"{{ 'assets/images/favicon.jpg'|theme }}\"/>
    <link href=\"{{ 'assets/images/apple-touch-icon.png'|theme }}\" rel=\"apple-touch-icon\">
    <link href=\"{{ 'assets/images/apple-touch-icon-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"{{ [
    'assets/css/theme.css',
    'assets/vendor/animate.css/animate.min.css',
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}
</head>
<body>

<header>
    {% partial 'header' %}
</header>


<main id=\"page\">
    {% page %}
</main>

<footer>
    {% partial 'footer' %}
</footer>

{% flash %}
<span id=\"flash\" data-type=\"{{ type }}\" data-message=\"{{ message }}\"></span>
{% endflash %}

<script src=\"{{ [
'assets/vendor/jquery/jquery-3.2.1.min.js',
'assets/vendor/popper/popper.js',
'assets/vendor/tether/dist/js/tether.min.js',
'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
]|theme }}\"></script>

{% framework extras %}
{% scripts %}
</body>", "/Volumes/Data/EntourageSolution/www/techno24/themes/techno24/layouts/default.htm", "");
    }
}
