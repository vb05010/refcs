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

/* /var/www/refcs/themes/rainlab-relax/partials/header.htm */
class __TwigTemplate_2b7afd153318171fe9efb3f03831ea0bc71c496a9089c6eae864cddd10080f44 extends \Twig\Template
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
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"logo\">
                <a href=\"";
        // line 5
        echo RainLab\Pages\Classes\Page::url("index");
        echo "\">
                    <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"REFCS\" />
                </a>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"contact-phone\">
                <label>Contáctanos</label>
                <span class=\"phone-number\">refcs@ues.edu.sv</span>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"logo\">
                <a href=\"{{ 'index'|staticPage }}\">
                    <img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"REFCS\" />
                </a>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"contact-phone\">
                <label>Contáctanos</label>
                <span class=\"phone-number\">refcs@ues.edu.sv</span>
            </div>
        </div>
    </div>
</div>", "/var/www/refcs/themes/rainlab-relax/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("staticPage" => 5, "theme" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['staticPage', 'theme'],
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
