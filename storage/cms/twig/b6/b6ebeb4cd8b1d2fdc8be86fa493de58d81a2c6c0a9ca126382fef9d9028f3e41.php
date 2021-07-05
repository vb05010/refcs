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

/* /var/www/refcs/themes/rainlab-relax/pages/account.htm */
class __TwigTemplate_09b2ee61f79a05400e7b86f8f9ac9f4286ce1427db82b3b572a451cfcaae8268 extends \Twig\Template
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

    ";
        // line 3
        if ( !($context["user"] ?? null)) {
            // line 4
            echo "
        ";
            // line 5
            if (post("register")) {
                // line 6
                echo "            <div class=\"jumbotron\">
                <h2>Gracias por registrarte</h2>
                <p>Su solicitud ha sido recibida y recibirá un correo electrónico de nosotros una vez que haya sido aprobado para iniciar sesión.</p>
                <p><a href=\"";
                // line 9
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                echo "\">Vuelve a la página inicial</a>
            </div>
        ";
            } else {
                // line 12
                echo "
            <div class=\"row\">

                <div class=\"col-md-6\">
                    <h3>Bienvenido a la REFCS</h3>
                    <p>Si ya es miembro de la REFCS, inicie sesión con sus detalles aquí.</p>
                    <form
                        data-request=\"onSignin\">
                        <div class=\"form-group\">
                            <label for=\"userSigninLogin\">";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loginAttributeLabel"] ?? null), 21, $this->source), "html", null, true);
                echo "</label>
                            <input name=\"login\" type=\"text\" class=\"form-control\" id=\"userSigninLogin\" placeholder=\"Ingrese su ";
                // line 22
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loginAttributeLabel"] ?? null), 22, $this->source)), "html", null, true);
                echo "\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"userSigninPassword\">Contraseña</label>
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Ingrese su contraseña\">
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\">Iniciar Sesión</button>
                    </form>
                    <br />
                    <p><a href=\"";
                // line 33
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("forgot-password");
                echo "\">¿Olvido su contraseña?</a></p>
                </div>

                <div class=\"col-md-6\">
                    <h3>Unete a la REFCS</h3>
                    <p>La red está adscrita al Instituto de Estudios Antropológicos, Arqueológicos e Históricos de la Universidad de El Salvador.</p>
                    <form
                        data-request=\"onRegister\">
                        <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 41
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 41), "baseFileName", [], "any", false, false, true, 41), 41, $this->source));
                echo "?register=1\" />

                        <div class=\"form-group\">
                            <label for=\"accountEmail\">Nombre completo</label>
                            <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountEmail\" placeholder=\"Ingrese su nombre completo\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"accountEmail\">Email</label>
                            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" placeholder=\"Ingrese su email\">
                        </div>

                        <h3>Información de la cuenta</h3>

                        <div class=\"form-group\">
                            <label for=\"accountLogin\">Nombre de Usuario</label>
                            <input name=\"username\" type=\"text\" class=\"form-control\" id=\"accountUsername\" placeholder=\"Elija un nombre de inicio de sesión para usar\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"accountPassword\">Contraseña</label>
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\" placeholder=\"Elija una contraseña\">
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\">Registrarse</button>
                    </form>

                </div>

            </div>

        ";
            }
            // line 73
            echo "
    ";
        } else {
            // line 75
            echo "

        ";
            // line 77
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate", ["model" => ($context["user"] ?? null)]]);
            echo "

            <h3>Información de la cuenta</h3>

            <div class=\"form-group\">
                <label for=\"accountName\">Nombre completo</label>
                <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
            // line 83
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "name"]);
            echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountEmail\">Email</label>
                <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
            // line 88
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "email"]);
            echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountLogin\">Iniciar sesión</label>
                <input name=\"username\" type=\"text\" class=\"form-control\" id=\"accountLogin\" placeholder=\"Elija un nombre de inicio de sesión\" value=\"";
            // line 93
            echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), ["value", "username"]);
            echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountPassword\">Nueva contraseña</label>
                <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountPasswordConfirm\">Confirmar nueva contraseña</label>
                <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
            </div>

            <button type=\"submit\" class=\"btn btn-default\">Save</button>

        ";
            // line 108
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

        <br/ >
        <p>
            <a href=\"";
            // line 112
            echo RainLab\Pages\Classes\Page::url("clients");
            echo "\">+ Regresar a la REFCS</a>
        </p>

    ";
        }
        // line 116
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 116,  194 => 112,  187 => 108,  169 => 93,  161 => 88,  153 => 83,  144 => 77,  140 => 75,  136 => 73,  101 => 41,  90 => 33,  76 => 22,  72 => 21,  61 => 12,  55 => 9,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"account-area\">

    {% if not user %}

        {% if post('register') %}
            <div class=\"jumbotron\">
                <h2>Gracias por registrarte</h2>
                <p>Su solicitud ha sido recibida y recibirá un correo electrónico de nosotros una vez que haya sido aprobado para iniciar sesión.</p>
                <p><a href=\"{{ 'home'|page }}\">Vuelve a la página inicial</a>
            </div>
        {% else %}

            <div class=\"row\">

                <div class=\"col-md-6\">
                    <h3>Bienvenido a la REFCS</h3>
                    <p>Si ya es miembro de la REFCS, inicie sesión con sus detalles aquí.</p>
                    <form
                        data-request=\"onSignin\">
                        <div class=\"form-group\">
                            <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>
                            <input name=\"login\" type=\"text\" class=\"form-control\" id=\"userSigninLogin\" placeholder=\"Ingrese su {{ loginAttributeLabel|lower }}\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"userSigninPassword\">Contraseña</label>
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Ingrese su contraseña\">
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\">Iniciar Sesión</button>
                    </form>
                    <br />
                    <p><a href=\"{{ 'forgot-password'|page }}\">¿Olvido su contraseña?</a></p>
                </div>

                <div class=\"col-md-6\">
                    <h3>Unete a la REFCS</h3>
                    <p>La red está adscrita al Instituto de Estudios Antropológicos, Arqueológicos e Históricos de la Universidad de El Salvador.</p>
                    <form
                        data-request=\"onRegister\">
                        <input type=\"hidden\" name=\"redirect\" value=\"{{ this.page.baseFileName|page }}?register=1\" />

                        <div class=\"form-group\">
                            <label for=\"accountEmail\">Nombre completo</label>
                            <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountEmail\" placeholder=\"Ingrese su nombre completo\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"accountEmail\">Email</label>
                            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" placeholder=\"Ingrese su email\">
                        </div>

                        <h3>Información de la cuenta</h3>

                        <div class=\"form-group\">
                            <label for=\"accountLogin\">Nombre de Usuario</label>
                            <input name=\"username\" type=\"text\" class=\"form-control\" id=\"accountUsername\" placeholder=\"Elija un nombre de inicio de sesión para usar\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"accountPassword\">Contraseña</label>
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\" placeholder=\"Elija una contraseña\">
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\">Registrarse</button>
                    </form>

                </div>

            </div>

        {% endif %}

    {% else %}


        {{ form_ajax('onUpdate', { model: user }) }}

            <h3>Información de la cuenta</h3>

            <div class=\"form-group\">
                <label for=\"accountName\">Nombre completo</label>
                <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ form_value('name') }}\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountEmail\">Email</label>
                <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ form_value('email') }}\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountLogin\">Iniciar sesión</label>
                <input name=\"username\" type=\"text\" class=\"form-control\" id=\"accountLogin\" placeholder=\"Elija un nombre de inicio de sesión\" value=\"{{ form_value('username') }}\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountPassword\">Nueva contraseña</label>
                <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
            </div>

            <div class=\"form-group\">
                <label for=\"accountPasswordConfirm\">Confirmar nueva contraseña</label>
                <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
            </div>

            <button type=\"submit\" class=\"btn btn-default\">Save</button>

        {{ form_close() }}

        <br/ >
        <p>
            <a href=\"{{ 'clients'|staticPage }}\">+ Regresar a la REFCS</a>
        </p>

    {% endif %}
</div>", "/var/www/refcs/themes/rainlab-relax/pages/account.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("page" => 9, "escape" => 21, "lower" => 22, "staticPage" => 112);
        static $functions = array("post" => 5, "form_ajax" => 77, "form_value" => 83, "form_close" => 108);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'escape', 'lower', 'staticPage'],
                ['post', 'form_ajax', 'form_value', 'form_close']
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
