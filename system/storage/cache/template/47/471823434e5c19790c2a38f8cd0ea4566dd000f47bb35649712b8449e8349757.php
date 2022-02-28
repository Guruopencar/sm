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

/* smtheme/template/common/footer.twig */
class __TwigTemplate_7c2c3e59610c444ffeebfb2f9d926a289f36ddadfad3cedad5bf7e573591ff62 extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"all-footer\">
        <div class=\"item-footer\">

          <div class=\"\">Покупателям</div>
          <div class=\"\">О нас</div>



      </div>
      <div class=\"item-footer\">

          <div class=\"\">Принимаем к оплате</div>
          <div class=\"\"></div>
          


      </div>
</div>
</div>
</div>
</footer>



</body></html>";
    }

    public function getTemplateName()
    {
        return "smtheme/template/common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "smtheme/template/common/footer.twig", "");
    }
}
