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

/* smtheme/template/common/home.twig */
class __TwigTemplate_74ac7165e3749b967220f35483d866630f39bf71dd386b392654a8ab2146e4ce extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <div class=\"row\">
";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "
</div>
</div>
<div class=\"bg-promo\">
<div class=\"container\">
    <div class=\"row\">
<div class=\"all-promo\">
  <div class=\"left-promo\"></div>
  <div class=\"left-promo\"></div>

</div>


</div>
</div>
</div>

";
        // line 21
        echo ($context["content_bottom"] ?? null);
        echo "



";
        // line 25
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "smtheme/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  63 => 21,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "smtheme/template/common/home.twig", "");
    }
}
