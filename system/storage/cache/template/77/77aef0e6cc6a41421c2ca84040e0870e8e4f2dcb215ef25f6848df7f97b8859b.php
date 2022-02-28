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
class __TwigTemplate_59aad67e0de293373d6562d18087cca3e6b0a1a784ce49de6267efde951b8811 extends \Twig\Template
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

          <div class=\"\">
            <div class=\"title-foote\">Покупателям</div>

            Покупателям</div>
          <div class=\"\">
            <div class=\"title-foote\">О нас</div>

            </div>



      </div>
      <div class=\"item2-footer\">

          <div class=\"\">
            <div class=\"title-foote\">Принимаем к оплате</div>
            </div>
         
          


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
