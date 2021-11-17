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

/* incl/header.twig */
class __TwigTemplate_b13be49350735491ad9c4c4ec1ad4600b2d1dbbe0d1b86fe4d11c1cdb7cf7807 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html class=\"no-js\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["meta"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["meta"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, ($context["site_title"] ?? null), "html", null, true);
        echo "</title>

    ";
        // line 9
        if ($this->getAttribute(($context["meta"] ?? null), "description", [])) {
            // line 10
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["meta"] ?? null), "description", [])), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (($context["current_page"] ?? null)) {
            // line 14
            echo "    <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["current_page"] ?? null), "url", []), "html", null, true);
            echo "\" />
    ";
        }
        // line 16
        echo "
    <link rel=\"icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/../shared/img/favicon.ico\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/../shared/css/font-awsome.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/css/mobile-menu.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/css/style.css\" type=\"text/css\" />
</head>
";
    }

    public function getTemplateName()
    {
        return "incl/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  77 => 19,  73 => 18,  69 => 17,  66 => 16,  60 => 14,  58 => 13,  55 => 12,  49 => 10,  47 => 9,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>{% if meta.title %}{{ meta.title }} | {% endif %}{{ site_title }}</title>

    {% if meta.description %}
    <meta name=\"description\" content=\"{{ meta.description|striptags }}\" />
    {% endif %}

    {% if current_page %}
    <link rel=\"canonical\" href=\"{{ current_page.url }}\" />
    {% endif %}

    <link rel=\"icon\" href=\"{{ theme_url }}/../shared/img/favicon.ico\">
    <link rel=\"stylesheet\" href=\"{{ theme_url }}/../shared/css/font-awsome.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ theme_url }}/css/mobile-menu.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ theme_url }}/css/style.css\" type=\"text/css\" />
</head>
", "incl/header.twig", "C:\\Users\\linus\\dbwebb-kurser\\design\\me\\portfolio\\themes\\linus\\incl\\header.twig");
    }
}
