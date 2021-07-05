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

/* /var/www/refcs/themes/rainlab-relax/layouts/home.htm */
class __TwigTemplate_767b096b780efd688f3020322431dc3486440dc018852e5a0d4122e2c8e8fb19 extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

        <!-- Top -->
        <div id=\"top-nav\">
            <div class=\"container\">
                <!-- Put anything here, social links? -->
            </div>
        </div>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
            <!-- Nav -->
            <nav id=\"layout-nav\">
                ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "            </nav>
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">

                <div class=\"visible-xs visible-sm slider-wrapper title-style\">
                    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "                </div>

                <div id=\"slider-wrapper\" class=\"slider-wrapper hidden-xs hidden-sm\">
                    <div id=\"slider\">
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chairsPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 36
            echo "                            ";
            // line 37
            echo "                            ";
            $context["randomImage"] = [0 => "highchair", 1 => "sofa", 2 => "cafe", 3 => "in-field", 4 => "wheelchair", 5 => "chairs", 6 => "lake", 7 => "rocking-chairs"];
            // line 38
            echo "                            ";
            $context["bannerImage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chairPage"], "viewBag", [], "any", false, false, true, 38), "banner", [], "any", false, false, true, 38)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
$context["chairPage"], "viewBag", [], "any", false, false, true, 39), "banner", [], "any", false, false, true, 39), 39, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/chairs/" . twig_random($this->env, $this->sandbox->ensureToStringAllowed(            // line 40
($context["randomImage"] ?? null), 40, $this->source))) . ".jpg"))));
            // line 41
            echo "
                            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["bannerImage"] ?? null), 42, $this->source), "html", null, true);
            echo "\" alt=\"\" title=\"\" />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </div>
                    <div id=\"slider-menu\" class=\"slider-menu\">
                        <ul>
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chairsPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 48
            echo "                                <li><a href=\"";
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["chairPage"], "url", [], "any", false, false, true, 48), 48, $this->source));
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["chairPage"], "title", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</span></a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                            <li class=\"desc\"><h2><span></span></h2></li>
                        </ul>
                    </div>
                    <div id=\"slider-text\" class=\"slider-text\">
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chairsPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 55
            echo "                            <h2>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chairPage"], "viewBag", [], "any", false, false, true, 55), "tagline", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</h2>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </div>
                    <div class=\"slider-more-info\">
                        Universidad de El Salvador
                    </div>
                </div>

                <div class=\"row module-homes\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 67
        echo "                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 72
        $context['__placeholder_news_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('news', $context['__placeholder_news_default_contents']);
        unset($context['__placeholder_news_default_contents']);        // line 73
        echo "                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 78
        $context['__placeholder_login_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('login', $context['__placeholder_login_default_contents']);
        unset($context['__placeholder_login_default_contents']);        // line 79
        echo "                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Slogan -->
        <div id=\"layout-slogan\">
            <div class=\"container\">
                <div class=\"service-strip\"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 96
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 97
        echo "        </footer>

        <!-- Scripts -->
        ";
        // line 100
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 101
        echo "        <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/home.js");
        echo "\"></script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 101,  218 => 100,  213 => 97,  209 => 96,  190 => 79,  188 => 78,  181 => 73,  179 => 72,  172 => 67,  170 => 66,  159 => 57,  150 => 55,  146 => 54,  140 => 50,  129 => 48,  125 => 47,  120 => 44,  112 => 42,  109 => 41,  107 => 40,  106 => 39,  104 => 38,  101 => 37,  99 => 36,  95 => 35,  89 => 31,  85 => 30,  75 => 22,  71 => 21,  66 => 18,  62 => 17,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'meta' %}
    </head>
    <body>

        <!-- Top -->
        <div id=\"top-nav\">
            <div class=\"container\">
                <!-- Put anything here, social links? -->
            </div>
        </div>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial \"header\" %}

            <!-- Nav -->
            <nav id=\"layout-nav\">
                {% partial \"nav\" %}
            </nav>
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">

                <div class=\"visible-xs visible-sm slider-wrapper title-style\">
                    {% partial \"title\" %}
                </div>

                <div id=\"slider-wrapper\" class=\"slider-wrapper hidden-xs hidden-sm\">
                    <div id=\"slider\">
                        {% for chairPage in chairsPages %}
                            {# {% set randomImage = random(['sofa', 'cafe', 'in-field', 'wheelchair', 'chairs']) %} #}
                            {% set randomImage = ['highchair', 'sofa', 'cafe', 'in-field', 'wheelchair', 'chairs', 'lake', 'rocking-chairs'] %}
                            {% set bannerImage = chairPage.viewBag.banner 
                                ? chairPage.viewBag.banner|media
                                : ('assets/images/chairs/'~random(randomImage)~'.jpg')|theme %}

                            <img src=\"{{ bannerImage }}\" alt=\"\" title=\"\" />
                        {% endfor %}
                    </div>
                    <div id=\"slider-menu\" class=\"slider-menu\">
                        <ul>
                            {% for chairPage in chairsPages %}
                                <li><a href=\"{{ chairPage.url|app }}\"><span>{{ chairPage.title }}</span></a></li>
                            {% endfor %}
                            <li class=\"desc\"><h2><span></span></h2></li>
                        </ul>
                    </div>
                    <div id=\"slider-text\" class=\"slider-text\">
                        {% for chairPage in chairsPages %}
                            <h2>{{ chairPage.viewBag.tagline }}</h2>
                        {% endfor %}
                    </div>
                    <div class=\"slider-more-info\">
                        Universidad de El Salvador
                    </div>
                </div>

                <div class=\"row module-homes\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            {% page %}
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            {% placeholder news title=\"Latest News\" %}
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            {% placeholder login title=\"Client Area\" %}
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Slogan -->
        <div id=\"layout-slogan\">
            <div class=\"container\">
                <div class=\"service-strip\"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial \"footer\" %}
        </footer>

        <!-- Scripts -->
        {% partial 'scripts' %}
        <script src=\"{{ 'assets/javascript/home.js'|theme }}\"></script>

    </body>
</html>", "/var/www/refcs/themes/rainlab-relax/layouts/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 4, "for" => 35, "set" => 37, "page" => 66, "placeholder" => 72);
        static $filters = array("media" => 39, "theme" => 40, "escape" => 42, "app" => 48);
        static $functions = array("random" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'for', 'set', 'page', 'placeholder'],
                ['media', 'theme', 'escape', 'app'],
                ['random']
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
}
