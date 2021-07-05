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

/* /var/www/refcs/themes/rainlab-relax/partials/footer.htm */
class __TwigTemplate_0c08d6efd1b8069bebcf7871e1d007f9bdb034cf53346c283d46826f2ac97b8b extends \Twig\Template
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
        echo "<div class=\"container\">

    <div class=\"row\" id=\"footerSliceMenu\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["footerMenu"] ?? null), "menuItems", [], "any", false, false, true, 4)) {
            // line 5
            echo "            <ul class=\"menu-links\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["footerMenu"] ?? null), "menuItems", [], "any", false, false, true, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "                    <li class=\"head-link ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 7)) ? ("active") : (""));
                echo "\">
                        <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "</a>
                    </li>
                    ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 10)) {
                    // line 11
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["childItem"]) {
                        // line 12
                        echo "                            <li class=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["childItem"], "isActive", [], "any", false, false, true, 12)) ? ("active") : (""));
                        echo "\">
                                <a href=\"";
                        // line 13
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["childItem"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["childItem"], "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                        echo "</a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "                    ";
                }
                // line 17
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </ul>
        ";
        }
        // line 20
        echo "
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <div class=\"contact-details\">
                <ul>
                    <li class=\"head-link\">
                        <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contáctenos</a>
                    </li>
                </ul>
                ";
        // line 37
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/details"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 38
        echo "            </div>
        </div>
    </div>

    <div class=\"credit text-right\">
        <p>
            &copy; Copyright ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " REFCS UES - Powered by
            <i class=\"icon-leaf\"></i> <a href=\"http://octobercms.com\" target=\"_blank\">OctoberCMS</a>
        </p>
    </div>
</div>

";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 52
        echo "<script>
    jQuery(document).ready(function(\$){
        var \$container = \$('#footerSliceMenu'),
            \$links = \$('.menu-links li', \$container),
            \$slices = \$('.menu-slice', \$container),
            totalLinks = \$links.length,
            totalSlices = \$slices.length,
            perSlice = Math.ceil(totalLinks / totalSlices),
            activeSlice = 1,
            count = 0

            \$.each(\$links, function(){
                \$(this).appendTo(\$slices.eq(activeSlice - 1))

                if (++count == perSlice) {
                    count = 0
                    activeSlice++
                }
            })

            \$('.menu-links', \$container).remove()
    })
</script>
";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 51,  146 => 52,  144 => 51,  135 => 44,  127 => 38,  123 => 37,  117 => 34,  101 => 20,  97 => 18,  91 => 17,  88 => 16,  77 => 13,  72 => 12,  67 => 11,  65 => 10,  58 => 8,  53 => 7,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

    <div class=\"row\" id=\"footerSliceMenu\">
        {% if footerMenu.menuItems %}
            <ul class=\"menu-links\">
                {% for item in footerMenu.menuItems %}
                    <li class=\"head-link {{ item.isActive ? 'active' : '' }}\">
                        <a href=\"{{ item.url }}\">{{ item.title }}</a>
                    </li>
                    {% if item.items %}
                        {% for childItem in item.items %}
                            <li class=\"{{ childItem.isActive ? 'active' : '' }}\">
                                <a href=\"{{ childItem.url }}\">{{ childItem.title }}</a>
                            </li>
                        {% endfor %}
                    {% endif %}
                {% endfor %}
            </ul>
        {% endif %}

        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <div class=\"contact-details\">
                <ul>
                    <li class=\"head-link\">
                        <a href=\"{{ 'contact'|page }}\">Contáctenos</a>
                    </li>
                </ul>
                {% content 'contact/details' %}
            </div>
        </div>
    </div>

    <div class=\"credit text-right\">
        <p>
            &copy; Copyright {{ \"now\"|date(\"Y\") }} REFCS UES - Powered by
            <i class=\"icon-leaf\"></i> <a href=\"http://octobercms.com\" target=\"_blank\">OctoberCMS</a>
        </p>
    </div>
</div>

{# This script splits the footer menu in to 3 columns #}
{% put scripts %}
<script>
    jQuery(document).ready(function(\$){
        var \$container = \$('#footerSliceMenu'),
            \$links = \$('.menu-links li', \$container),
            \$slices = \$('.menu-slice', \$container),
            totalLinks = \$links.length,
            totalSlices = \$slices.length,
            perSlice = Math.ceil(totalLinks / totalSlices),
            activeSlice = 1,
            count = 0

            \$.each(\$links, function(){
                \$(this).appendTo(\$slices.eq(activeSlice - 1))

                if (++count == perSlice) {
                    count = 0
                    activeSlice++
                }
            })

            \$('.menu-links', \$container).remove()
    })
</script>
{% endput %}", "/var/www/refcs/themes/rainlab-relax/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "for" => 6, "content" => 37, "put" => 51);
        static $filters = array("escape" => 8, "page" => 34, "date" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'content', 'put'],
                ['escape', 'page', 'date'],
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
