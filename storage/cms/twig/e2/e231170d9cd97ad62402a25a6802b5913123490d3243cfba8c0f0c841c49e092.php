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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/ssl/avantage.htm */
class __TwigTemplate_38bc38f38f9445ee40f9fc30509ff4eb8b235139460d4e8ca2ca1c5dbfded163 extends \Twig\Template
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
        $tags = array();
        $filters = array("_" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['_'],
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
        echo "<div id=\"why\" class=\"row d-flex justify-content-center my-2\">
    <div class=\"col-sm-12 col-lg-5 pb-3 wow fadeInUp text-white\">
        <ul>
            <li>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Installation professionnelle par nos experts"]);
        echo "</li>
            <li>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Garantie satisfait-ou-remboursé de 30 jours"]);
        echo "</li>
            <li>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Compatible avec 99%+ des navigateurs"]);
        echo "</li>
            <li>";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Chiffrage 256-bit en mode SHA-2"]);
        echo "</li>
        </ul>
        </div>
    <div class=\"col-sm-12 col-lg-5 wow fadeInUp text-white\">
        <ul>
            <li>";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cadenas de sécurité dans le navigateur"]);
        echo "</li>
            <li>";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sceau de sécurité pour votre site"]);
        echo "</li>
            <li>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Assistance 24/7 auprès de nos expertss"]);
        echo "</li>
            <li>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Réémission gratuite du certificat sur demande"]);
        echo "</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/ssl/avantage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 15,  95 => 14,  91 => 13,  87 => 12,  79 => 7,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/ssl/avantage.htm", "");
    }
}
