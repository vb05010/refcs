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

/* /var/www/refcs/themes/rainlab-relax/partials/nav.htm */
class __TwigTemplate_b2cfa2e130f8b9f7fbd526c92014ac3aa957bb799b2c9d54c71fc0522297c215 extends \Twig\Template
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
        $macros["nav"] = $this->macros["nav"] = $this;
        // line 4
        echo "
";
        // line 18
        echo "
<div class=\"container\">
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, true, 20)) {
            // line 21
            echo "        <ul class=\"nav nav-tabs pull-right\">
            ";
            // line 22
            echo twig_call_macro($macros["nav"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, true, 22)], 22, $context, $this->getSourceContext());
            echo "
        </ul>
    ";
        }
        // line 25
        echo "</div>";
    }

    // line 5
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 6
            echo "    ";
            $macros["nav"] = $this;
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        <li role=\"presentation\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 9)) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 9)) ? ("child-active") : (""));
                echo "\">
            <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "</a>

            ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 12)) {
                    // line 13
                    echo "                <ul>";
                    echo twig_call_macro($macros["nav"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 13)], 13, $context, $this->getSourceContext());
                    echo "</ul>
            ";
                }
                // line 15
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 15,  105 => 13,  103 => 12,  96 => 10,  89 => 9,  85 => 8,  82 => 7,  79 => 6,  66 => 5,  62 => 25,  56 => 22,  53 => 21,  51 => 20,  47 => 18,  44 => 4,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Custom navigation implementation that only shows 2 levels deep #}

{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        <li role=\"presentation\" class=\"{{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }}\">
            <a href=\"{{ item.url }}\">{{ item.title }}</a>

            {% if item.items %}
                <ul>{{ nav.render_menu(item.items) }}</ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

<div class=\"container\">
    {% if mainMenu.menuItems %}
        <ul class=\"nav nav-tabs pull-right\">
            {{ nav.render_menu(mainMenu.menuItems) }}
        </ul>
    {% endif %}
</div>", "/var/www/refcs/themes/rainlab-relax/partials/nav.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 3, "if" => 20, "macro" => 5, "for" => 8);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'for'],
                ['escape'],
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
