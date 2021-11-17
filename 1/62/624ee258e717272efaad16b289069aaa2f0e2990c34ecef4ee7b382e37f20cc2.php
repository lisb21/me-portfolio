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

/* incl/footer.twig */
class __TwigTemplate_966b89c6eb9a37e5b47fcff118d0122bdd60673013b73a78a8b365ac7644c680 extends \Twig\Template
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
        echo "<div class=\"footer\">
    <div>
        <p>
            En footer med lite text.
        </p>
    </div>
    <div class=\"social\">
        <!-- Loads from FontAwesome (themes/shared/css/font-awesome.min.css) -->
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "_meta", [], "array"), "meta", []), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "url", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "title", []), "html", null, true);
            echo "\" role=\"button\">
            <i class=\"fa fa-";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "icon", []), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
            <span class=\"sr-only\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "title", []), "html", null, true);
            echo "</span>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
</div>

<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/../shared//js/modernizr-3.3.1-custom.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/../shared//js/utils.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/../shared//js/responsive-navbar.js\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "incl/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  73 => 19,  69 => 18,  64 => 15,  55 => 12,  51 => 11,  44 => 10,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer\">
    <div>
        <p>
            En footer med lite text.
        </p>
    </div>
    <div class=\"social\">
        <!-- Loads from FontAwesome (themes/shared/css/font-awesome.min.css) -->
        {% for social in pages[\"_meta\"].meta.social %}
        <a href=\"{{ social.url }}\" title=\"{{ social.title }}\" role=\"button\">
            <i class=\"fa fa-{{ social.icon }}\" aria-hidden=\"true\"></i>
            <span class=\"sr-only\">{{ social.title }}</span>
        </a>
        {% endfor %}
    </div>
</div>

<script src=\"{{ theme_url }}/../shared//js/modernizr-3.3.1-custom.min.js\" type=\"text/javascript\"></script>
<script src=\"{{ theme_url }}/../shared//js/utils.js\" type=\"text/javascript\"></script>
<script src=\"{{ theme_url }}/../shared//js/responsive-navbar.js\" type=\"text/javascript\"></script>
", "incl/footer.twig", "C:\\Users\\linus\\dbwebb-kurser\\design\\me\\portfolio\\themes\\linus\\incl\\footer.twig");
    }
}
