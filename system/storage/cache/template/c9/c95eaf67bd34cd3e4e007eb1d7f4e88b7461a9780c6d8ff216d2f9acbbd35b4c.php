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

/* smtheme/template/common/search.twig */
class __TwigTemplate_68afdc483e85f87dc8116fe5f9dea3d0cac19545d113aa1c6cd895c9eb5eae8c extends \Twig\Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"input-search\" />
 
    <button type=\"button\" class=\"btn-search\"><svg width=\"22\" height=\"24\" viewBox=\"0 0 22 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M21.4134 21.1406L16.1182 15.6335C17.4797 14.0149 18.2257 11.9786 18.2257 9.85859C18.2257 4.90553 14.1959 0.875732 9.24284 0.875732C4.28978 0.875732 0.259979 4.90553 0.259979 9.85859C0.259979 14.8117 4.28978 18.8414 9.24284 18.8414C11.1023 18.8414 12.8743 18.2807 14.3892 17.2159L19.7247 22.765C19.9477 22.9967 20.2476 23.1243 20.5691 23.1243C20.8733 23.1243 21.162 23.0084 21.3811 22.7975C21.8466 22.3495 21.8614 21.6066 21.4134 21.1406ZM9.24284 3.21909C12.9039 3.21909 15.8823 6.19749 15.8823 9.85859C15.8823 13.5197 12.9039 16.498 9.24284 16.498C5.58174 16.498 2.60334 13.5197 2.60334 9.85859C2.60334 6.19749 5.58174 3.21909 9.24284 3.21909Z\" fill=\"#3A1850\"/>
</svg></button>
 
</div>";
    }

    public function getTemplateName()
    {
        return "smtheme/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "smtheme/template/common/search.twig", "");
    }
}
