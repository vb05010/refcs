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

/* /var/www/refcs/themes/rainlab-relax/partials/sidemenu.htm */
class __TwigTemplate_8d5d82bdfa15ab2003eaed584ad2bcc52597a5222878fcc490a9d6937e62e987 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        $context["parentOrSelf"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, true, 3)) ? (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, true, 3)) : (($context["page"] ?? null)));
        // line 4
        $context["childPages"] = twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "children", [], "any", false, false, true, 4);
        // line 5
        echo "
<ul>
    <li class=\"head-link ";
        // line 7
        echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, true, 7) == twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "url", [], "any", false, false, true, 7))) ? ("active") : (""));
        echo "\">
        <a href=\"";
        // line 8
        echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "url", [], "any", false, false, true, 8), 8, $this->source));
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
        </a>
    </li>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["childPage"]) {
            if ( !twig_get_attribute($this->env, $this->source, $context["childPage"], "navigation_hidden", [], "any", false, false, true, 12)) {
                // line 13
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, true, 13) == twig_get_attribute($this->env, $this->source, $context["childPage"], "url", [], "any", false, false, true, 13))) ? ("active") : (""));
                echo "\">
            <a href=\"";
                // line 14
                echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["childPage"], "url", [], "any", false, false, true, 14), 14, $this->source));
                echo "\">
                ";
                // line 15
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["childPage"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
            </a>
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/partials/sidemenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  78 => 15,  74 => 14,  69 => 13,  64 => 12,  58 => 9,  54 => 8,  50 => 7,  46 => 5,  44 => 4,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Renders a menu with any child static pages #}

{% set parentOrSelf = page.parent ?: page %}
{% set childPages = parentOrSelf.children %}

<ul>
    <li class=\"head-link {{ page.url == parentOrSelf.url ? 'active' }}\">
        <a href=\"{{ parentOrSelf.url|app }}\">
            {{ parentOrSelf.title }}
        </a>
    </li>
    {% for childPage in childPages if not childPage.navigation_hidden %}
        <li class=\"{{ page.url == childPage.url ? 'active' }}\">
            <a href=\"{{ childPage.url|app }}\">
                {{ childPage.title }}
            </a>
        </li>
    {% endfor %}
</ul>", "/var/www/refcs/themes/rainlab-relax/partials/sidemenu.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "for" => 12);
        static $filters = array("app" => 8, "escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['app', 'escape'],
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
}
