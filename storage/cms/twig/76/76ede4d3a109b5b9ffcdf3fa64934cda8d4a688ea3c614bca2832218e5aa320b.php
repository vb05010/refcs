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

/* /var/www/refcs/themes/rainlab-relax/pages/forgot-password.htm */
class __TwigTemplate_87bf36461d8e545a820f8046fd720ad42bf556df60ae6f064835684591c9f17a extends \Twig\Template
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
        echo "<div class=\"account-area\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h3>Restablecer contraseña</h3>
            <p>¿Olvidaste tu contraseña? No hay problema, simplemente ingrese su correo electrónico a continuación y le enviaremos instrucciones sobre cómo restablecerlo</p>
            ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resetPassword"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "            <br />
            <p><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
        echo "\">Regresar a la página de inicio de sesión</a></p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/pages/forgot-password.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"account-area\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h3>Restablecer contraseña</h3>
            <p>¿Olvidaste tu contraseña? No hay problema, simplemente ingrese su correo electrónico a continuación y le enviaremos instrucciones sobre cómo restablecerlo</p>
            {% component 'resetPassword' %}
            <br />
            <p><a href=\"{{ 'account'|page }}\">Regresar a la página de inicio de sesión</a></p>
        </div>
    </div>
</div>", "/var/www/refcs/themes/rainlab-relax/pages/forgot-password.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 6);
        static $filters = array("page" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['page'],
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
