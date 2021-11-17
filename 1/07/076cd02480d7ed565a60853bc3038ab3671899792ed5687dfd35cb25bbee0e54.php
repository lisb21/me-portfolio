<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* incl/nav.twig */
class __TwigTemplate_7f71e8ee50884e2cfed977a0c525b445ab970dac0db670d2db62aa79eaecd12c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"header\" role=\"banner\">
    <div class=\"site-header\">
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "_meta", [], "array"), "meta", []), "logo", [])) {
            // line 4
            echo "        <div class=\"logo\">
            <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\">
                <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('url')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "_meta", [], "array"), "meta", []), "logo", [])]), "html", null, true);
            echo "\" alt=\"\" />
            </a>
        </div>
        ";
        }
        // line 10
        echo "        <div class=\"title\" ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "_meta", [], "array"), "meta", []), "tagline", [])) ? (" class=\"tagline\"") : (""));
        echo ">
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, ($context["site_title"] ?? null), "html", null, true);
        echo "</h1>
                ";
        // line 13
        echo $this->env->getExtension('PicoTwigExtension')->markdownFilter($this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "_meta", [], "array"), "meta", []), "tagline", []));
        echo "
            </a>
        </div>
        <a class=\"nav-toggle\" id=\"nav-toggle\" title=\"Toggle Menu\" role=\"button\" aria-controls=\"nav\" aria-expanded=\"false\"
            tabindex=\"1\">
            <i class=\"fa fa-bars\" aria-hidden=\"true\" id=\"toggler\"></i>
            <span class=\"sr-only\">Toggle Menu</span>
        </a>
    </div>
    <div class=\"nav\">
        <div id=\"nav\" role=\"navigation\" tabindex=\"-1\">
            <ul>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('PicoTwigExtension')->pagesFunction("", 0,  -1));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            if (($this->getAttribute($context["page"], "title", []) &&  !$this->getAttribute($context["page"], "hidden", []))) {
                // line 26
                echo "                    <li";
                if (($this->getAttribute($context["page"], "id", []) == $this->getAttribute(($context["current_page"] ?? null), "id", []))) {
                    echo " class=\"active\" ";
                }
                echo ">
                        <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", []), "html", null, true);
                echo "</a>
                    </li>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "incl/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  92 => 27,  85 => 26,  80 => 25,  65 => 13,  61 => 12,  57 => 11,  52 => 10,  43 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header\" role=\"banner\">
    <div class=\"site-header\">
        {% if pages[\"_meta\"].meta.logo %}
        <div class=\"logo\">
            <a href=\"{{ base_url }}\">
                <img src=\"{{ base_url }}/{{ pages[\"_meta\"].meta.logo|url }}\" alt=\"\" />
            </a>
        </div>
        {% endif %}
        <div class=\"title\" {{ pages[\"_meta\"].meta.tagline ? ' class=\"tagline\"' }}>
            <a href=\"{{ base_url }}\">
                <h1>{{ site_title }}</h1>
                {{ pages[\"_meta\"].meta.tagline|markdown }}
            </a>
        </div>
        <a class=\"nav-toggle\" id=\"nav-toggle\" title=\"Toggle Menu\" role=\"button\" aria-controls=\"nav\" aria-expanded=\"false\"
            tabindex=\"1\">
            <i class=\"fa fa-bars\" aria-hidden=\"true\" id=\"toggler\"></i>
            <span class=\"sr-only\">Toggle Menu</span>
        </a>
    </div>
    <div class=\"nav\">
        <div id=\"nav\" role=\"navigation\" tabindex=\"-1\">
            <ul>
                {% for page in pages(depthOffset=-1) if page.title and not page.hidden %}
                    <li{% if page.id==current_page.id %} class=\"active\" {% endif %}>
                        <a href=\"{{ page.url }}\">{{ page.title }}</a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
</div>
", "incl/nav.twig", "C:\\Users\\linus\\dbwebb-kurser\\design\\me\\portfolio\\themes\\linus\\incl\\nav.twig");
    }
}
