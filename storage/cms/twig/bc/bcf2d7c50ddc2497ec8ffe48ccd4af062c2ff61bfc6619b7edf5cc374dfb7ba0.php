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

/* /var/www/refcs/themes/rainlab-relax/pages/contact.htm */
class __TwigTemplate_1650445e68ef6c7efa0a5b0feb203fa6b0e39dad180d3dbdd6385bcb7aa567c1 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/page"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "
        <div class=\"module-contact well\">
            ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/details"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "        </div>
    </div>
    <div class=\"col-md-8\">
        <div id=\"partialContactForm\">
            ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact/form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  61 => 11,  55 => 7,  51 => 6,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-4\">
        {% content 'contact/page' %}

        <div class=\"module-contact well\">
            {% content 'contact/details' %}
        </div>
    </div>
    <div class=\"col-md-8\">
        <div id=\"partialContactForm\">
            {% partial 'contact/form' %}
        </div>
    </div>
</div>", "/var/www/refcs/themes/rainlab-relax/pages/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 3, "partial" => 11);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content', 'partial'],
                [],
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
