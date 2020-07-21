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

/* /Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/team/default.htm */
class __TwigTemplate_c0ae5668c77e7a42b4196cabf65265da214b934db7911b0665872d5a49859918 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["members"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 4
            echo "            <div class=\"col-xs-12 col-sm-4 col-lg-3\">
                <!-- Card Flip -->
                <div class=\"card-flip\">
                    <div class=\"flip\">
                        <div class=\"front pt-5\">
                            <!-- front content -->
                            <div class=\"card card-team profile-card-5 border-rad-5\">
                                <div class=\"card-img-block py-3\">
                                    ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["member"], "photo", [], "any", false, false, false, 12)) {
                // line 13
                echo "                                    <img class=\"card-img-top rounded-circle mx-auto\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "photo", [], "any", false, false, false, 13), "path", [], "any", false, false, false, 13), "html", null, true);
                echo "\" alt=\" \"
                                         style=\"height: 200px; width: 200px; display: block;\" data-holder-rendered=\"true\">
                                    ";
            } else {
                // line 16
                echo "                                    <img class=\"card-img-top rounded-circle mx-auto\" src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/profile-image.jpg");
                echo "\" alt=\" \"
                                         style=\"height: 200px; width: 200px; display: block;\" data-holder-rendered=\"true\">
                                    ";
            }
            // line 19
            echo "                                </div>
                                <div class=\"card-header text-center primary-color\">
                                    <h4 class=\"h4-responsive text-white mb-0\">
                                        ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "first_name", [], "any", false, false, false, 22), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "last_name", [], "any", false, false, false, 22), "html", null, true);
            echo "
                                    </h4>
                                </div>
                                <div class=\"card-body text-center text-white\">
                                    <h6>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "job_title", [], "any", false, false, false, 26), "html", null, true);
            echo "</h6>
                                    <p class=\"card-text pt-2\">
                                        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["member"], "phone", [], "any", false, false, false, 28)) {
                // line 29
                echo "                                        <a href=\"tel:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "phone", [], "any", false, false, false, 29), "html", null, true);
                echo "\"><span class=\"fa-stack fa-2x\">
                                          <i class=\"fas fa-circle fa-stack-2x text-white\"></i>
                                          <i class=\"fas fa-phone fa-stack-1x fa-inverse text-secondary\"></i>
                                        </span></a>
                                        ";
            }
            // line 34
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                        <a href=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 35), "html", null, true);
                echo "\"><span class=\"fa-stack fa-2x\">
                                          <i class=\"fas fa-circle fa-stack-2x text-white\"></i>
                                          <i class=\"fas fa-envelope fa-stack-1x fa-inverse text-secondary\"></i>
                                        </span></a>
                                        ";
            }
            // line 40
            echo "                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"back pt-5\">
                            <!-- back content -->
                            <div class=\"card card-team border-rad-5 secondary-color\">
                                <div class=\"card-body text-center text-white\">
                                    <h4 class=\"h4-responsive card-title\">
                                        ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "first_name", [], "any", false, false, false, 49), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "last_name", [], "any", false, false, false, 49), "html", null, true);
            echo "
                                    </h4>
                                    <p class=\"card-text pt-2\">
                                        ";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["member"], "description", [], "any", false, false, false, 52);
            echo "
                                    </p>
                                    <p class=\"card-text pt-2\">
                                        ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["member"], "phone", [], "any", false, false, false, 55)) {
                // line 56
                echo "                                        <a href=\"tel:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "phone", [], "any", false, false, false, 56), "html", null, true);
                echo "\"><span class=\"fa-stack fa-2x\">
                                          <i class=\"fas fa-circle fa-stack-2x text-white\"></i>
                                          <i class=\"fas fa-phone fa-stack-1x fa-inverse text-secondary\"></i>
                                        </span></a>
                                        ";
            }
            // line 61
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 61)) {
                // line 62
                echo "                                        <a href=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 62), "html", null, true);
                echo "\"><span class=\"fa-stack fa-2x\">
                                          <i class=\"fas fa-circle fa-stack-2x text-white\"></i>
                                          <i class=\"fas fa-envelope fa-stack-1x fa-inverse text-secondary\"></i>
                                        </span></a>
                                        ";
            }
            // line 67
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["member"], "facebook_link", [], "any", false, false, false, 67)) {
                // line 68
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "facebook_link", [], "any", false, false, false, 68), "html", null, true);
                echo "\" target=\"_blank\"><span class=\"fa-stack fa-2x\">
                                          <i class=\"fas fa-circle fa-stack-2x text-white\"></i>
                                          <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse text-secondary\"></i>
                                        </span></a>
                                        ";
            }
            // line 73
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["member"], "twitter_link", [], "any", false, false, false, 73)) {
                // line 74
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "twitter_link", [], "any", false, false, false, 74), "html", null, true);
                echo "\" target=\"_blank\"><span class=\"fa-stack fa-2x\">
                                          <i class=\"fas fa-circle fa-stack-2x text-white\"></i>
                                          <i class=\"fab fa-twitter fa-stack-1x fa-inverse text-secondary\"></i>
                                        </span></a>
                                        ";
            }
            // line 79
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["member"], "linkedin_link", [], "any", false, false, false, 79)) {
                // line 80
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "linkedin_link", [], "any", false, false, false, 80), "html", null, true);
                echo "\" target=\"_blank\"><span class=\"fa-stack fa-2x\">
                                          <i class=\"fas fa-circle fa-stack-2x text-white\"></i>
                                          <i class=\"fab fa-linkedin fa-stack-1x fa-inverse text-secondary\"></i>
                                        </span></a>
                                        ";
            }
            // line 85
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["member"], "instagram_link", [], "any", false, false, false, 85)) {
                // line 86
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "instagram_link", [], "any", false, false, false, 86), "html", null, true);
                echo "\" target=\"_blank\"><span class=\"fa-stack fa-2x\">
                                          <i class=\"fas fa-circle fa-stack-2x text-white\"></i>
                                          <i class=\"fab fa-instagram fa-stack-1x fa-inverse text-secondary\"></i>
                                        </span></a>
                                        ";
            }
            // line 91
            echo "                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Flip -->
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/team/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 100,  209 => 91,  200 => 86,  197 => 85,  188 => 80,  185 => 79,  176 => 74,  173 => 73,  164 => 68,  161 => 67,  152 => 62,  149 => 61,  140 => 56,  138 => 55,  132 => 52,  124 => 49,  113 => 40,  104 => 35,  101 => 34,  92 => 29,  90 => 28,  85 => 26,  76 => 22,  71 => 19,  64 => 16,  57 => 13,  55 => 12,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/techno24/themes/techno24/partials/team/default.htm", "");
    }
}
