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
class __TwigTemplate_3ce83c3499ad706f73b8493984ab5ec0eaf14bc76812dbdf713219571f41bbdb extends \Twig\Template
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
  <div class=\"left-promo\"><img src=\"image/promo.png\" alt=\"\" title=\"\" /></div>
  <div class=\"left-promo\">
    <div class=\"title-promo\">

С нами выгодно<br /> сотрудничать
    </div>
    <div class=\"info-promo\">
      <div class=\"item-promo\">
        <div class=\"icon-promo\"><img src=\"image/select.png\" alt=\"\" /></div>
        <div class=\"text-promo\">Более 1500<br /> позиций</div>
      </div>
      <div class=\"item-promo\">
        <div class=\"icon-promo\"><img src=\"image/select.png\" alt=\"\" /></div>
        <div class=\"text-promo\">Отправка заказа<br /> от 1 дня</div>
      </div>
      <div class=\"item-promo\">
        <div class=\"icon-promo\"><img src=\"image/select.png\" alt=\"\" /></div>
        <div class=\"text-promo\">Лучшие<br /> цены</div>
      </div>

    </div>

  </div>

</div>


</div>
</div>
</div>

";
        // line 42
        echo ($context["content_bottom"] ?? null);
        echo "



";
        // line 46
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
        return array (  91 => 46,  84 => 42,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "smtheme/template/common/home.twig", "");
    }
}
