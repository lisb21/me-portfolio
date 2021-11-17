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

/* index.twig */
class __TwigTemplate_1fd0ee6226819c1bf4041dfa82ef9f59011d73d949f1430a1e86881fd0ca3be8 extends \Twig\Template
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
        $this->loadTemplate("incl/header.twig", "index.twig", 1)->display($context);
        // line 2
        echo "
<body>
    ";
        // line 4
        $this->loadTemplate("incl/nav.twig", "index.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"main\" role=\"main\">
        ";
        // line 7
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "
    </div>
    
    ";
        // line 10
        $this->loadTemplate("incl/footer.twig", "index.twig", 10)->display($context);
        // line 11
        echo "</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  48 => 10,  42 => 7,  38 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include 'incl/header.twig' %}

<body>
    {% include 'incl/nav.twig' %}

    <div class=\"main\" role=\"main\">
        {{ content }}
    </div>
    
    {% include 'incl/footer.twig' %}
</body>

</html>
", "index.twig", "C:\\Users\\linus\\dbwebb-kurser\\design\\me\\portfolio\\themes\\linus\\index.twig");
    }
}
