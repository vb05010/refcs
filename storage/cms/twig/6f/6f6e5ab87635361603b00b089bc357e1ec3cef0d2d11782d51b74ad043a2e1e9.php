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

/* /var/www/refcs/themes/rainlab-relax/partials/snippets/news.htm */
class __TwigTemplate_00e181d94d6867a9daacc2c48dd85c89af9c8c0b104aa9423ae3d6386e5d5d30 extends \Twig\Template
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
        echo "<div class=\"news-container\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 2), "take", [0 => 5], "method", false, false, true, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        <div class=\"module-news\">
            <div class=\"calendar\">
                <span class=\"month\">";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 5), 5, $this->source), "M"), "html", null, true);
            echo "</span>
                <span class=\"day\">";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 6), 6, $this->source), "d"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"news\">
                <a href=\"";
            // line 9
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 9)]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</a>.
                <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "        <p>There are no posts to display. You know what they say, no news is good news!</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/refcs/themes/rainlab-relax/partials/snippets/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  76 => 14,  67 => 10,  61 => 9,  55 => 6,  51 => 5,  47 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"news-container\">
    {% for post in blogPosts.posts.take(5) %}
        <div class=\"module-news\">
            <div class=\"calendar\">
                <span class=\"month\">{{ post.published_at|date('M') }}</span>
                <span class=\"day\">{{ post.published_at|date('d') }}</span>
            </div>
            <div class=\"news\">
                <a href=\"{{ 'blog/post'|page({ slug: post.slug }) }}\">{{ post.title }}</a>.
                <p>{{ post.excerpt }}</p>
            </div>
        </div>
    {% else %}
        <p>There are no posts to display. You know what they say, no news is good news!</p>
    {% endfor %}
</div>", "/var/www/refcs/themes/rainlab-relax/partials/snippets/news.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2);
        static $filters = array("escape" => 5, "date" => 5, "page" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'date', 'page'],
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
