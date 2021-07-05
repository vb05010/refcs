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

/* /var/www/refcs/themes/rainlab-relax/content/static-pages/chairs-rocking-chairs.htm */
class __TwigTemplate_84bcedea8b50c0c58984d290b5eebad116e5818a8463f466f5e0b46e91396edd extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('sidebarSection'        );
        // line 2
        echo "<h3>Etymology</h3>

<p>The word rocking chair comes from the verb to rock. The first known use of the term rocking chair was in 1766.</p>

";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/content/static-pages/chairs-rocking-chairs.htm";
    }

    public function getDebugInfo()
    {
        return array (  47 => 1,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put sidebarSection %}
<h3>Etymology</h3>

<p>The word rocking chair comes from the verb to rock. The first known use of the term rocking chair was in 1766.</p>

{% endput %}", "/var/www/refcs/themes/rainlab-relax/content/static-pages/chairs-rocking-chairs.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("put" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put'],
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
