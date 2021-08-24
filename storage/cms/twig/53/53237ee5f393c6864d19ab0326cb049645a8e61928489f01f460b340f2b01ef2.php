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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/subscribe.htm */
class __TwigTemplate_5d2f7d78f3167ea268a47627a2222d299f77b4489f7785eb0a1d510d697ff8f6 extends \Twig\Template
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
        $filters = array("_" => 3);
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
        echo "<div class=\"row\">
    <div class=\"col px-5 py-3 text-center mx-auto text-white\">
        <h4 class=\"h4-responsive \"><strong>";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["M'abonner à l'infolettre exclusive"]);
        echo "</strong></h4>
        <p>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Recevez directement dans votre boite courriel des nouvelles liées à la technologie et outils pour mieux performer!"]);
        echo "</p>
        <div id=\"mlb2-1608414\" class=\"ml-form-embedContainer ml-subscribe-form ml-subscribe-form-1608414\">
            <div class=\"ml-form-align-center\">
                <div class=\"ml-form-embedWrapper embedForm\">
                    <div class=\"ml-form-embedBody ml-form-embedBodyDefault row-form\">
                        <form class=\"ml-block-form\" action=\"https://app.mailerlite.com/webforms/submit/h0l9r2\" data-code=\"h0l9r2\" method=\"post\" target=\"_blank\">
                            <div class=\"ml-form-formContent\">
                                <div class=\"ml-form-fieldRow ml-last-item\">
                                    <div class=\"ml-field-group ml-field-email ml-validate-email ml-validate-required\">
                                        <input type=\"email\" class=\"form-control\" data-inputmask=\"\" name=\"fields[email]\" value=\"\" placeholder=\"Courriel\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"ml-form-checkboxRow ml-validate-required mt-3\">
                                <label class=\"checkbox\"> <input type=\"checkbox\"> <p class=\"d-inline\">";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Inscrivez-vous pour recevoir des nouvelles et des mises à jour."]);
        echo "</p> </label>
                            </div>
                            <style type=\"text/css\">
                                .ml-form-recaptcha{margin-bottom:20px;float:left}.ml-form-recaptcha.ml-error iframe{border:solid 1px red}@media screen and (max-width:768px){.ml-form-recaptcha{transform:scale(.77);-webkit-transform:scale(.77);transform-origin:0 0;-webkit-transform-origin:0 0}}
                            </style>
                            <input type=\"hidden\" name=\"ml-submit\" value=\"1\">
                            <div class=\"ml-form-embedSubmit mt-3\">
                                <button type=\"submit\" class=\"btn btn-secondary\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["M'inscrire"]);
        echo "</button>
                                <button disabled=\"disabled\" style=\"display:none\" type=\"button\" class=\"loading\">
                                    <div class=\"ml-form-embedSubmitLoad\"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class=\"ml-form-successBody row-success\" style=\"display:none\">
                        <div class=\"ml-form-successContent\">
                            <h2 class=\"h2-responsive\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Merci!"]);
        echo "</h2>
                            <p>";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vous êtes maintenant inscrit à notre infolettre!"]);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/subscribe.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  109 => 34,  97 => 25,  87 => 18,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/subscribe.htm", "");
    }
}
