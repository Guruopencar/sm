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
class __TwigTemplate_095931f71b6bf6542071372c7e8e42542e388418ee2db235d5b7bf9c65746f77 extends \Twig\Template
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
            <ul class=\"footer-menu\">
              <li><a href=\"\"></a></li>
              <li><a href=\"\"></a></li>
              <li><a href=\"\"></a></li>
              <li><a href=\"\"></a></li>
            </ul>

            Покупателям</div>
          <div class=\"andrey_k\">
            <div class=\"title-foote\">О нас</div>
   <li><a href=\"\"></a></li>
              <li><a href=\"\"></a></li>
              <li><a href=\"\"></a></li>
              <li><a href=\"\"></a></li>
            </ul>
            </div>



      </div>
      <div class=\"item2-footer\">

          <div class=\"andrey_k\">
            <div class=\"title-foote\">Принимаем к оплате</div>

<div class=\"power\"><p>Все права защищены авторским правом, любое копирование материала без согласия владельца сайта - ЗАПРЕЩЕНО 2019</p>

Разработано в Sea Message</div>


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
