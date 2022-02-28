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
class __TwigTemplate_b3ab2a0541c73d7ad5d2afff9df956b6d9e8dcedf82dd1ca5d751fcac7ebee64 extends \Twig\Template
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
              <li><a href=\"\">Каталог</a></li>
              
              <li><a href=\"\">Доставка и оплата</a></li>
              <li><a href=\"\">Консультации</a></li>
             <li><a href=\"\">Опт</a></li>
            </ul>

            </div>
          <div class=\"andrey_k\">
            <div class=\"title-foote\">О нас</div>
    <ul class=\"footer-menu\">
             <li><a href=\"\">О нас</a></li>
              <li><a href=\"\">Контакты</a></li>
            </ul>
            </div>



      </div>
      <div class=\"item2-footer\">

          <div class=\"andrey_k\">
            <div class=\"title-foote\">Принимаем к оплате</div>
<div class=\"pay\"><img src=\"image/oplata.png\" alt=\"\"  title=\"\" /></div>
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
