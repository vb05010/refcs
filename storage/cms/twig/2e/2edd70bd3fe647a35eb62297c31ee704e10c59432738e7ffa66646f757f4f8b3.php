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

/* /var/www/refcs/themes/rainlab-relax/partials/title.htm */
class __TwigTemplate_6b43d8bc372767a7ee9549206504224156d6580fbde8ee03459bbfea14f19fde extends \Twig\Template
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
        if ( !($context["bannerImage"] ?? null)) {
            // line 2
            echo "    ";
            $context["randomImage"] = [0 => "highchair", 1 => "sofa", 2 => "cafe", 3 => "in-field", 4 => "wheelchair", 5 => "chairs", 6 => "lake", 7 => "rocking-chairs"];
            // line 3
            echo "    ";
            $context["bannerImage"] = ((($context["banner"] ?? null)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["banner"] ?? null), 3, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/chairs/" . twig_random($this->env, $this->sandbox->ensureToStringAllowed(($context["randomImage"] ?? null), 3, $this->source))) . ".jpg"))));
        }
        // line 5
        echo "
<div class=\"title-image\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["bannerImage"] ?? null), 7, $this->source), "html", null, true);
        echo "\" alt=\"\" title=\"\" class=\"img-responsive\" />
</div>
<div class=\"title-heading\">
    <div class=\"title\">
        <h1>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12))), "html", null, true);
        echo "</span>
        </h1>
    </div>
    <div class=\"desc\">
        <h2>
            <span>
                ";
        // line 18
        echo twig_escape_filter($this->env, ((($context["tagline"] ?? null)) ? (($context["tagline"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "meta_title", [], "any", false, false, true, 18))), "html", null, true);
        echo "
            </span>
        </h2>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/partials/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  60 => 12,  52 => 7,  48 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not bannerImage %}
    {% set randomImage = ['highchair', 'sofa', 'cafe', 'in-field', 'wheelchair', 'chairs', 'lake', 'rocking-chairs'] %}
    {% set bannerImage = banner ? banner|media : ('assets/images/chairs/'~random(randomImage)~'.jpg')|theme %}
{% endif %}

<div class=\"title-image\">
    <img src=\"{{ bannerImage }}\" alt=\"\" title=\"\" class=\"img-responsive\" />
</div>
<div class=\"title-heading\">
    <div class=\"title\">
        <h1>
            <span>{{ title ?: this.page.title }}</span>
        </h1>
    </div>
    <div class=\"desc\">
        <h2>
            <span>
                {{ tagline ?: this.page.meta_title }}
            </span>
        </h2>
    </div>
</div>", "/var/www/refcs/themes/rainlab-relax/partials/title.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("media" => 3, "theme" => 3, "escape" => 7);
        static $functions = array("random" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['media', 'theme', 'escape'],
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
